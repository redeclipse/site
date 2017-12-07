<?php
/**
*
* @package - NV Advanced Last Topic Titles
* @version $Id$
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
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
* @package acp
*/
class acp_altt
{
	var $u_action;

	function main($id, $mode)
	{
		global $db, $user, $auth, $template, $cache;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;

		$user->add_lang('acp/common');
		$this->tpl_name = 'acp_altt';
		$this->page_title = $user->lang['ALTT_TITLE'];
		add_form_key('acp_altt');

		$submit = (isset($_POST['submit'])) ? true : false;
		if ($submit)
		{
			if (!check_form_key('acp_altt'))
			{
				trigger_error('FORM_INVALID');
			}

			set_config('altt_char_limit', request_var('altt_char_limit', 64));
			set_config('altt_link_name', request_var('altt_link_name', 0));
			set_config('altt_link_url', request_var('altt_link_url', 0));
			set_config('altt_style_bold', request_var('altt_style_bold', 0));
			set_config('altt_style_italic', request_var('altt_style_italic', 0));
			set_config('altt_style_adv', request_var('altt_style_adv', 0));
			set_config('altt_style_adv2', request_var('altt_style_adv2', ''));
			set_config('altt_active', request_var('altt_active', 0));
			set_config('altt_ignore_rights', request_var('altt_ignore_rights', 0));
			set_config('altt_ignore_password', request_var('altt_ignore_password', 0));

			trigger_error($user->lang['ALTT_CONFIG_SAVED'] . adm_back_link($this->u_action));
		}
		$template->assign_vars(array(
			'ALTT_VERSION'			=> 'v' . $config['altt_mod_version'],
			'ALTT_CHAR_LIMIT'		=> $config['altt_char_limit'],
			'ALTT_LINK_NAME'		=> $config['altt_link_name'],
			'ALTT_LINK_URL'			=> $config['altt_link_url'],
			'ALTT_STYLE_BOLD'		=> $config['altt_style_bold'],
			'ALTT_STYLE_ITALIC'		=> $config['altt_style_italic'],
			'ALTT_STYLE_ADV'		=> $config['altt_style_adv'],
			'ALTT_STYLE_ADV2'		=> $config['altt_style_adv2'],
			'ALTT_IGNORE_RIGHTS'	=> $config['altt_ignore_rights'],
			'ALTT_IGNORE_PASSWORD'	=> $config['altt_ignore_password'],
			'ALTT_ACTIVE'			=> $config['altt_active'],
			'U_ACTION'				=> $this->u_action,
		));
	}
}

?>