<?php
/**
*
* @package Board3 Portal v2.1
* @copyright (c) 2014 Board3 Group ( www.board3.de )
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
	// Portal Modules
	'ACP_PORTAL_MODULES_EXP'		=> 'Tüm modülleri buradan yönetebilirsiniz. Tüm modülleri kapatırsanız, Lütfen portalı devredışı bırakın.',

	'MODULE_POS_TOP'				=> 'Üst',
	'MODULE_POS_LEFT'				=> 'Sol kolon',
	'MODULE_POS_RIGHT'				=> 'Sağ kolon',
	'MODULE_POS_CENTER'				=> 'Ortal kolon',
	'MODULE_POS_BOTTOM'				=> 'Alt',
	'ADD_MODULE'					=> 'Modül ekle',
	'CHOOSE_MODULE'					=> 'Modül seç',
	'CHOOSE_MODULE_EXP'				=> 'Açılır listeden bir modül seçin',
	'SUCCESS_ADD'					=> 'Modül başarıyla eklendi.',
	'SUCCESS_DELETE'				=> 'Modül başarıyla silindi.',
	'NO_MODULES'					=> 'Hiçbir modül bulunamadı.',
	'MOVE_RIGHT'					=> 'Sağa taşı',
	'MOVE_LEFT'						=> 'Sola taşı',
	'B3P_FILE_NOT_FOUND'			=> 'İstenilen dosya bulunamadı',
	'UNABLE_TO_MOVE'				=> 'Seçilen bloğu taşımak mümkün değil.',
	'UNABLE_TO_MOVE_ROW'			=> 'Seçilen bloğu satıra taşımak mümkün değil.',
	'UNABLE_TO_ADD_MODULE'			=> 'Seçilen modülü sütuna eklemek mümkün değil.',
	'DELETE_MODULE_CONFIRM'			=> 'Modülü silmek istediğinizden emin misiniz? "%1$s"',
	'MODULE_RESET_SUCCESS'			=> 'Modül ayarları başarıyla sıfırlandı.',
	'MODULE_RESET_CONFIRM'			=> 'Seçilen modülü sıfırlamak istediğinizden eminmisiniz? "%1$s"',
	'MODULE_NOT_EXISTS'				=> 'Seçilen modül mevcut değil.',

	'MODULE_OPTIONS'			=> 'Modül ayarları',
	'MODULE_NAME'				=> 'Modül adı',
	'MODULE_NAME_EXP'			=> 'Modül yapılandırmasında görüntülenecek modülün adını giriniz.',
	'MODULE_IMAGE'				=> 'Modül resmi',
	'MODULE_IMAGE_EXP'			=> 'Modül resminin adını giriniz. resmin bu klasör yolunda olması gerekir. styles/{yourstyle}/theme/images/portal/ ',
	'MODULE_PERMISSIONS'		=> 'Modül izinleri',
	'MODULE_PERMISSIONS_EXP'	=> 'Modülün görünmesini istediğiniz grupları seçiniz. Tüm kullanıcılara görünmesini istiyorsanız, Hiçbir şey seçmeyin.',
	'MODULE_IMAGE_WIDTH'		=> 'Modül resim genişliği',
	'MODULE_IMAGE_WIDTH_EXP'	=> 'Modülün resim genişliğini pixel olarak girin',
	'MODULE_IMAGE_HEIGHT'		=> 'Modül resim yüksekliği',
	'MODULE_IMAGE_HEIGHT_EXP'	=> 'Modülün resim yüksekliğini pixel olarak girin',
	'MODULE_RESET'				=> 'Modül ayarlarını sıfırla',
	'MODULE_RESET_EXP'			=> 'Modülün varsayılan ayarlarına sıfırla!',
	'MODULE_STATUS'				=> 'Modülü etkinleştir',
	'MODULE_ADD_ONCE'			=> 'Bu modül yanlızca bir kez eklenir.',
	'MODULE_IMAGE_ERROR'		=> 'Modül görüntüsünü kontrol ederken bir hata oluştu:',
	'UNKNOWN_MODULE_METHOD'		=> 'Bu modülün %1$s, modül yöntemi çözümlenemedi.',

	// general
	'ACP_PORTAL_CONFIG_INFO'				=> 'Genel ayarlar',
	'ACP_PORTAL_GENERAL_TITLE'				=> 'Portal Yönetimi',
	'ACP_PORTAL_GENERAL_TITLE_EXP'			=> 'Portal ile ilgili çeşitli ayar ve özelleştirmelerin yapılacağı alan.',
	'ACP_PORTAL_SHOW_ALL'					=> 'Portalı tüm sayfalarda göster',
	'ACP_PORTAL_SHOW_ALL_EXP'				=> 'Portalın tüm sayfalarda görüntülenmesini istiyorsanız etkinleştirin',
	'PORTAL_ENABLE'							=> 'Portal etkinleştir',
	'PORTAL_ENABLE_EXP'						=> 'Portalı etkinleştirir veya devredışı bırakır',
	'PORTAL_LEFT_COLUMN'					=> 'Sol kolunu etkinleştir',
	'PORTAL_LEFT_COLUMN_EXP'				=> 'Sol kolunu etkinleştirir veya devredışı bırakır',
	'PORTAL_RIGHT_COLUMN'					=> 'Sağ kolonu etkinleştir',
	'PORTAL_RIGHT_COLUMN_EXP'				=> 'Sağ kolonu etkinleştirir veya devredışı bırakır',
	'PORTAL_DISPLAY_JUMPBOX'				=> 'Atlama kutucuğunu göster',
	'PORTAL_DISPLAY_JUMPBOX_EXP'			=> 'Atlama kutucuğunu gösterir. Bu özellik sadece pano özelliklerinde aktifse gösterilir.',
	'ACP_PORTAL_COLUMN_WIDTH_SETTINGS'		=> 'Sol ve sağ kolon ayarları',
	'PORTAL_LEFT_COLUMN_WIDTH'				=> 'Sol kolon genişliği',
	'PORTAL_LEFT_COLUMN_WIDTH_EXP'			=> 'Sol kolon genişlik değerini pixel olarak girin; önerilen değer 250',
	'PORTAL_RIGHT_COLUMN_WIDTH'				=> 'Sağ kolon genişliği',
	'PORTAL_RIGHT_COLUMN_WIDTH_EXP'			=> 'Sağ kolon genişlik değerini pixel olarak girin; önerilen değer 250',
	'PORTAL_SHOW_ALL_SIDE'					=> 'Tüm sayfalarda gösterilecek kolon',
	'PORTAL_SHOW_ALL_SIDE_EXP'				=> 'Tüm sayfalarda gösterilecek kolonu seçin.',
	'PORTAL_SHOW_ALL_LEFT'					=> 'Sol',
	'PORTAL_SHOW_ALL_RIGHT'					=> 'Sağ',

	'LINK_ADDED'							=> 'Bağlantı başarıyla eklendi',
	'LINK_UPDATED'							=> 'Bağlantı başarıyla güncellendi',

	// Install
	'PORTAL_BASIC_INSTALL'			=> 'Basit modül seti ekleme',
	'PORTAL_BASIC_UNINSTALL'		=> 'Modül veritabanından kaldırıldı',
));
