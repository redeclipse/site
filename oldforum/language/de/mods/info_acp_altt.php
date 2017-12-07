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
	'ALTT_ACTIVE'			=> 'NV advanced last topic titles MOD anzeigen',

	'ALTT_CHAR_LIMIT'		=> 'Anzahl der Zeichen die angezeigt werden sollen',
	'ALTT_CHAR_LIMIT_EXP'	=> '0 oder 64 wenn nicht gekürzt werden soll',
	'ALTT_CONFIG'			=> 'Konfiguration',
	'ALTT_CONFIG_SAVED'		=> 'Einstellungen gespeichert',

	'ALTT_LINK_NAME'			=> 'Link-Bezeichnung ist der Titel des',
	'ALTT_LINK_URL'				=> 'Link führt zum',
	'ALTT_FIRST_POST'			=> 'Ersten Beitrag des letzten Themas',
	'ALTT_LAST_POST'			=> 'Letztem Beitrag des letzten Themas',
	'ALTT_FIRST_UNREAD_POST'	=> 'Ersten ungelesenem Beitrag des letzten Themas',
	'ALTT_FIRST_UNREAD_POST_NOTE'	=> 'Achtung: Link führt zum ersten Post wenn kein neuer vorhanden ist.',
	'ALTT_POST'					=> 'Beitrages',
	'ALTT_TOPIC'				=> 'Themas',
	'ALTT_LINK_STYLE'			=> 'Link-Darstellung',
	'ALTT_BOLD'					=> 'Fett',
	'ALTT_ITALIC'				=> 'Kursiv',
	'ALTT_ADV'					=> 'weitere:',

	'ALTT_IGNORE_PASSWORD'		=> 'Passwort ignorieren',
	'ALTT_IGNORE_PASSWORD_EXP'	=> 'Der Titel wird auch angezeigt, wenn das Forum ein Passwort hat.',
	'ALTT_IGNORE_RIGHTS'		=> 'Berechtigungen ignorieren',
	'ALTT_IGNORE_RIGHTS_EXP'	=> 'Der Titel wird dann immer angezeigt, auch wenn man den Beitrag nicht lesen darf.',

	'ALTT_PROTECTED'			=> 'Dieses Forum ist geschützt.',
	'ALTT_TITLE'				=> 'NV advanced last topic titles',

	'NV_ALTT_MOD'						=> '"NV advanced last topic titles" MOD',
	'INSTALL_NV_ALTT_MOD'				=> '"NV advanced last topic titles" MOD installieren',
	'INSTALL_NV_ALTT_MOD_CONFIRM'		=> 'Bist du dir sicher, dass du die "NV advanced last topic titles" MOD installieren möchtest?',
	'UPDATE_NV_ALTT_MOD'				=> '"NV advanced last topic titles" MOD aktualisieren',
	'UPDATE_NV_ALTT_MOD_CONFIRM'		=> 'Bist du dir sicher, dass du die "NV advanced last topic titles" MOD aktualisieren möchtest?',
	'UNINSTALL_NV_ALTT_MOD'				=> '"NV advanced last topic titles" MOD deinstallieren',
	'UNINSTALL_NV_ALTT_MOD_CONFIRM'		=> 'Bist du dir sicher, dass du die "NV advanced last topic titles" MOD deinstallieren möchtest?',
));

?>