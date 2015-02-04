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
* @package module_install
*/
class acp_altt_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_altt',
			'title'		=> 'ALTT_TITLE',
			'version'	=> '1.3.3',
			'modes'		=> array(
				'config_altt'	=> array(
					'title'			=> 'ALTT_CONFIG',
					'auth'			=> 'acl_a_board',
					'cat'			=> array('ACP_BOARD_CONFIGURATION'),
				),
			),
		);
	}
}

?>