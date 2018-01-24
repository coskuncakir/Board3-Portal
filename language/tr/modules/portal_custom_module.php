<?php
/**
*
* @package Board3 Portal v2.1 - Custom
* @copyright (c) 2013 Board3 Group ( www.board3.de )
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
$lang = array_merge($lang, array(
	'PORTAL_CUSTOM'		=> 'Özel blok',

	// ACP
	'ACP_PORTAL_CUSTOM_SETTINGS'			=> 'Özel blok ayarları',
	'ACP_PORTAL_CUSTOM_SETTINGS_EXP'		=> 'Özel blokları özelleştirdiğiniz yer burası',
	'ACP_PORTAL_CUSTOM_CODE_SHORT'			=> 'Girdiğiniz kod yeterince uzun değil.',
	'ACP_PORTAL_CUSTOM_PREVIEW'				=> 'Ön izleme',
	'ACP_PORTAL_CUSTOM_CODE'				=> 'Özel blok kodu',
	'ACP_PORTAL_CUSTOM_CODE_EXP'			=> 'Özel bloğun kodunu (HTML veya BBCode) buradan değiştirin.',
	'ACP_PORTAL_CUSTOM_PERMISSION'			=> 'Özel blok izinleri',
	'ACP_PORTAL_CUSTOM_PERMISSION_EXP'		=> 'Özel bloğu görüntüleyebilecek grupları seçin. Tüm kullanıcıların özel bloğu görüntüleyebilmesini istiyorsanız, hiçbir şey seçmeyin. <br /> <samp>CTRL</samp> tuşunu basılı tutup tıklayarak birden çok grubu seç/seçimini kaldırın.',
	'ACP_PORTAL_CUSTOM_BBCODE'				=> 'Özel blok için BBCode`u etkinleştirin',
	'ACP_PORTAL_CUSTOM_BBCODE_EXP'			=> 'BBCode bu kutuda kullanılabilir. BBCode etkinleştirilmemişse HTML kullanılır.',
));
