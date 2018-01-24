<?php
/**
*
* @package Board3 Portal v2.1 - Links
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
	'PORTAL_LINKS'		=> 'Bağlantılar',
	'LINKS_NO_LINKS'	=> 'Bağlantı yok',

	// ACP
	'ACP_PORTAL_LINKS'				=> 'Bağlantı ayarları',
	'ACP_PORTAL_LINKS_EXP'			=> 'Burası bağlantılar bloğunda listelenen bağlantıları özelleştirdiğiniz yer',
	'ACP_PORTAL_LINK_TITLE'			=> 'Başlık',
	'ACP_PORTAL_LINK_TYPE'			=> 'Bağlantı tipi',
	'ACP_PORTAL_LINK_TYPE_EXP'		=> 'Sitenizin bir sayfasına bağlantınız varsa, istenmeyen oturumları önlemek için "Dahili bağlantı" yı seçin.',
	'ACP_PORTAL_LINK_INT'			=> 'Dahili bağlantı',
	'ACP_PORTAL_LINK_EXT'			=> 'Harici bağlantı',
	'ACP_PORTAL_LINK_ADD'			=> 'Yeni gezinme bağlantısını ekle',
	'ACP_PORTAL_LINK_URL'			=> 'Bağlantı adresi',
	'ACP_PORTAL_LINK_URL_EXP'		=> 'Dış bağlantı:<br />Bu şekilde girilir, http://<br /><br />Dahili bağlantı:<br />Yanlızca php dosyasına bağlantı url’si girilir, index.php?style=4',
	'ACP_PORTAL_LINK_PERMISSION'	=> 'Bağlantı izinleri',
	'ACP_PORTAL_LINK_PERMISSION_EXP'=> 'Bağlantıyı görüntülemek için yetkilendirilmesi gereken grupları seçin. Tüm kullanıcıların bağlantıyı görmesini istiyorsanız, hiçbir şey seçmeyin. <br/> <samp>CTRL</samp> tuşunu basılı tutup tıklayarak birden çok grubu seçip/kaldırın.',
	'ACP_PORTAL_LINKS_NEW_WINDOW'	=> 'Harici bağlantıları yeni bir pencerede aç',

	// Errors
	'NO_LINK_TITLE'					=> 'Bu bağlantıya bir başlık girmelisiniz.',
	'NO_LINK_URL'					=> 'Bir bağlantı URL’si girmelisiniz.',
));
