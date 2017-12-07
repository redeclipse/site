<?php
/**
*
* @package - NV Advanced Last Topic Titles
* @version $Id$
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ALTT_ACTIVE'				=> 'enable NV advanced last topic titles MOD',

	'ALTT_CHAR_LIMIT'			=> 'number of chars, display on the page',
	'ALTT_CHAR_LIMIT_EXP'		=> '0 or 64 for no cut down',
	'ALTT_CONFIG'				=> 'configuration of NV advanced last topic titles',
	'ALTT_CONFIG_SAVED'			=> 'saved adjustment',

	'ALTT_LINK_NAME'			=> 'link-name is the title of',
	'ALTT_LINK_URL'				=> 'link leads to',
	'ALTT_FIRST_POST'			=> 'First post of last topic',
	'ALTT_LAST_POST'			=> 'Last post of last topic',
	'ALTT_FIRST_UNREAD_POST'	=> 'First unread post of last topic',
	'ALTT_FIRST_UNREAD_POST_NOTE'	=> 'Note: If there is no unread post, the link leads to the first post.',
	'ALTT_POST'					=> 'Post',
	'ALTT_TOPIC'				=> 'Topic',
	'ALTT_LINK_STYLE'			=> 'Link-Style',
	'ALTT_BOLD'					=> 'Bold',
	'ALTT_ITALIC'				=> 'Italic',
	'ALTT_ADV'					=> 'more:',

	'ALTT_IGNORE_PASSWORD'		=> 'Ignore password',
	'ALTT_IGNORE_PASSWORD_EXP'	=> 'The title shows up, even if there\'s a forum-password.',
	'ALTT_IGNORE_RIGHTS'		=> 'Ignore permissions',
	'ALTT_IGNORE_RIGHTS_EXP'	=> 'If you ignore the permissions, the title shows up, even if you are not able to read the post.',

	'ALTT_PROTECTED'			=> 'This forum is protected.',
	'ALTT_TITLE'				=> 'NV advanced last topic titles',

	'NV_ALTT_MOD'					=> '"NV advanced last topic titles" MOD',
	'INSTALL_NV_ALTT_MOD'			=> 'Install "NV advanced last topic titles" MOD',
	'INSTALL_NV_ALTT_MOD_CONFIRM'	=> 'Are you sure you want to install the "NV advanced last topic titles" MOD?',
	'UPDATE_NV_ALTT_MOD'			=> 'Update "NV advanced last topic titles" MOD',
	'UPDATE_NV_ALTT_MOD_CONFIRM'	=> 'Are you sure you want to update the "NV advanced last topic titles" MOD?',
	'UNINSTALL_NV_ALTT_MOD'			=> 'Uninstall "NV advanced last topic titles" MOD',
	'UNINSTALL_NV_ALTT_MOD_CONFIRM'	=> 'Are you sure you want to uninstall the "NV advanced last topic titles" MOD?',
));

?>