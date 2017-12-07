<?php
/**
*
* @package NV Advanced Last Topic Titles
* @version $Id$
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
*
*/
class phpbb_mods_advanced_last_topic_titles
{
	/**
	* Is the MOD activated in the ACP?
	*/
	static public $is_active			= true;

	/**
	* Shall we ignore forum passwords and view the topic-title nevertheless?
	*/
	static public $ignore_password		= false;

	/**
	* Shall we ignore the permissions and view the topic-title nevertheless?
	*/
	static public $ignore_permissions	= false;

	/**
	* Display topic-title or last-post-title?
	*/
	static public $use_topic_title		= true;

	/**
	* Link to topic (1), first-unread-post (2) or to the last post (0 || >2)
	*/
	static public $link_url				= 1;

	/**
	* If the title is longer, we cut it down to this length. (0 means 64 and is the maximum)
	*/
	static public $length_limit			= 64;

	/**
	* Initialise the MOD and populate the config values to the template.
	*/
	static public function initialise()
	{
		global $config;

		self::$is_active			= (bool) $config['altt_active'];

		if (!self::$is_active)
		{
			return;
		}

		global $user, $template;
		$user->add_lang('mods/info_acp_altt');

		self::$ignore_password		= (bool) $config['altt_ignore_password'];
		self::$ignore_permissions	= (bool) $config['altt_ignore_rights'];
		self::$use_topic_title		= (bool) $config['altt_link_name'];
		self::$link_url				= (int) $config['altt_link_url'];
		self::$length_limit			= (($config['altt_char_limit'] <= 0) || ($config['altt_char_limit'] >= 64)) ?  64 : $config['altt_char_limit'];

		$template->assign_var('S_ALTT_ACTIVE', self::$is_active);

		$style_tags = array();
		if ($config['altt_style_bold'])
		{
			$style_tags[] = "font-weight: bold;";
		}
		if ($config['altt_style_italic'])
		{
			$style_tags[] = "font-style: italic;";
		}
		if ($config['altt_style_adv'])
		{
			$style_tags[] = $config['altt_style_adv2'];
		}
		if (!empty($style_tags))
		{
			$template->assign_var('ALTT_STYLE', implode(' ', $style_tags));
		}
	}

	/**
	* Extend the query as we need the topic_title and some more values from the TOPICS_TABLE
	*/
	static public function inject_sql($sql_array)
	{
		if (!self::$is_active)
		{
			return $sql_array;
		}

		// Is the topics-table already left-joined for some SEO-MOD?
		$already_left_joined = false;
		foreach ($sql_array['LEFT_JOIN'] as $left_join)
		{
			if (isset($left_join['FROM'][TOPICS_TABLE]))
			{
				$already_left_joined = true;
				break;
			}
		}

		if (!$already_left_joined)
		{
			$sql_array['LEFT_JOIN'][] = array(
				'FROM'	=> array(TOPICS_TABLE => 't'),
				'ON'	=> "f.forum_last_post_id = t.topic_last_post_id"
			);
		}

		$altt_values = array('t.topic_title', 't.topic_id', 't.topic_moved_id', 't.topic_last_post_id');
		$select_values = explode(', ', $sql_array['SELECT']);
		$sql_array['SELECT'] = implode(', ', array_unique(array_merge($select_values, $altt_values)));

		return $sql_array;
	}

	/**
	* We need to "cache" the forum_id in a seperated key, so it's not overwritten.
	*/
	static public function inject_forum_row($row)
	{
		if (!self::$is_active)
		{
			return $row;
		}

		$row['nv_permission_forum_id'] = (int) $row['forum_id'];
		return $row;
	}

	/**
	* Put the data we need into the $forum_rows which is used to loop data into the template.
	*/
	static public function inject_forum_row_values($forum_rows, $parent_id, $row)
	{
		if (!self::$is_active)
		{
			return $forum_rows;
		}

		$forum_rows[$parent_id]['topic_title']				= $row['topic_title'];
		$forum_rows[$parent_id]['topic_id']					= $row['topic_id'];
		$forum_rows[$parent_id]['nv_permission_forum_id']	= $row['forum_id'];
		$forum_rows[$parent_id]['forum_password']			= $row['forum_password'];
		return $forum_rows;
	}

	/**
	* Display the data, we edit the last row which was published and add our data to it.
	*/
	static public function display_information($row)
	{
		if (!self::$is_active)
		{
			return false;
		}

		if ($row['forum_last_post_id'])
		{
			global $auth;

			$password_protected = !(self::$ignore_password || !$row['forum_password']);
			$permissions_protected = !(self::$ignore_permissions || $auth->acl_get('f_read', $row['nv_permission_forum_id']));

			if (!$password_protected && !$permissions_protected)
			{
				global $template, $phpbb_root_path, $phpEx;

				$altt_link_name			= (self::$use_topic_title) ? $row['topic_title'] : $row['forum_last_post_subject'];
				$altt_link_name			= ($altt_link_name == '') ? 'Re: ' . $row['topic_title'] : $altt_link_name;
				$altt_link_name_short	= (utf8_strlen(htmlspecialchars_decode($altt_link_name)) > self::$length_limit + 3 )? htmlspecialchars((utf8_substr(htmlspecialchars_decode($altt_link_name), 0, self::$length_limit) . '...')) : ($altt_link_name);

				$real_topic_id = ($row['topic_moved_id']) ? $row['topic_moved_id'] : $row['topic_id'];

				switch (self::$link_url)
				{
					case 1:
						$altt_link_url = append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'f=' . $row['forum_id_last_post'] . '&amp;t=' . $real_topic_id);
					break;
					case 2:
						$altt_link_url = append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'f=' . $row['forum_id_last_post'] . '&amp;t=' . $real_topic_id . '&amp;view=unread') . '#unread';
					break;
					default:
						$altt_link_url = append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'f=' . $row['forum_id_last_post'] . '&amp;p=' . $row['forum_last_post_id']) . '#p' . $row['forum_last_post_id'];
					break;
				}

				$template->alter_block_array('forumrow', array(
					'ALTT_LINK_NAME_SHORT'		=> censor_text($altt_link_name_short),
					'ALTT_LINK_NAME'			=> censor_text($altt_link_name),
					'U_ALTT_LINK'				=> $altt_link_url,
				), true, 'change');
			}
		}
	}
}
