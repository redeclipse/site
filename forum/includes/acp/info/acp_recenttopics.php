<?php

/**
*
* @package - NV recent topics
* @version $Id$
* @copyright (c) nickvergessen ( http://mods.flying-bits.org/ )
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
* @package module_install
*/
class acp_recenttopics_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_recenttopics',
			'title'		=> 'RECENT_TOPICS_MOD',
			'version'	=> '1.0.6',
			'modes'		=> array(
				'adjust_recenttopics'	=> array('title' => 'RT_CONFIG', 'auth' => 'acl_a_board', 'cat' => array('RECENT_TOPICS_MOD')),
			),
		);
	}
}

?>