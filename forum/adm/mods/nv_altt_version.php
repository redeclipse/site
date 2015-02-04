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
* @package nv_altt
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

class nv_altt_version
{
	function version()
	{
		return array(
			'author'	=> 'nickvergessen',
			'title'		=> 'NV Advanced Last Topic Titles',
			'tag'		=> 'nv_altt',
			'version'	=> '1.3.3',
			'file'		=> array('www.flying-bits.org', 'updatecheck', 'nv_altt.xml'),
		);
	}
}

?>