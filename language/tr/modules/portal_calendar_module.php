<?php
/**
*
* @package Board3 Portal v2.1 - Calendar
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
	'PORTAL_CALENDAR'			=> 'Takvim',
	'VIEW_NEXT_MONTH'		=> 'sonraki ay',
	'VIEW_PREVIOUS_MONTH'	=> 'önceki ay',
	'EVENT_START'			=> 'İtibaren',
	'EVENT_END'				=> 'İçin',
	'EVENT_TIME'			=> 'Zaman',
	'EVENT_ALL_DAY'			=> 'Tüm gün etkinlik',
	'CURRENT_EVENTS'		=> 'Güncel etkinlikler',
	'NO_CUR_EVENTS'			=> 'Geçerli etkinlik yok',
	'UPCOMING_EVENTS'		=> 'Yaklaşan Etkinlikler',
	'NO_UPCOMING_EVENTS'	=> 'Yaklaşan etkinlik yok',

	'mini_cal'	=> array(
		'day'	=> array(
			'1'	=> 'Pzt',
			'2'	=> 'Sal',
			'3'	=> 'Çar',
			'4'	=> 'Per',
			'5'	=> 'Cum',
			'6'	=> 'Cmt',
			'7'	=> 'Paz',
		),

		'month'	=> array(
			'1'	=> 'Oca.',
			'2'	=> 'Şub.',
			'3'	=> 'Mar.',
			'4'	=> 'Nis.',
			'5'	=> 'May',
			'6'	=> 'Haz.',
			'7'	=> 'Tem.',
			'8'	=> 'Ağu.',
			'9'	=> 'Eyl.',
			'10'=> 'Eki.',
			'11'=> 'Kas.',
			'12'=> 'Ara.',
		),

		'long_month'=> array(
			'1'	=> 'Ocak',
			'2'	=> 'Şubat',
			'3'	=> 'Mart',
			'4'	=> 'Nisan',
			'5'	=> 'Mayıs',
			'6'	=> 'Haziran',
			'7'	=> 'Temmuz',
			'8'	=> 'Ağustos',
			'9'	=> 'Eylül',
			'10'=> 'Ekim',
			'11'=> 'Kasım',
			'12'=> 'Aralık',
		),
	),

	// ACP
	'ACP_PORTAL_CALENDAR'					=> 'Takvim ayarları',
	'ACP_PORTAL_CALENDAR_EXP'				=> 'Burası takvim bloğunu özelleştirdiğiniz yer.',
	'ACP_PORTAL_EVENTS'						=> 'Takvim etkinlikleri',
	'PORTAL_CALENDAR_TODAY_COLOR'			=> 'Aktif gün rengi',
	'PORTAL_CALENDAR_TODAY_COLOR_EXP'	=> 'HEX veya adlandırılmış renklere, beyaz için #FFFFFF veya mor gibi renk adları izin verilir.',
	'PORTAL_CALENDAR_SUNDAY_COLOR'			=> 'Pazar için renk',
	'PORTAL_CALENDAR_SUNDAY_COLOR_EXP'	=> 'HEX veya adlandırılmış renklere, beyaz için #FFFFFF veya mor gibi renk adları izin verilir.',
	'PORTAL_LONG_MONTH'						=> 'Tam ay adlarını göster',
	'PORTAL_LONG_MONTH_EXP'				=> 'Devre dışı bırakılırsa, aylar kısaltılacaktır. Ağustos yerine Ağu.',
	'PORTAL_SUNDAY_FIRST'					=> 'Haftanın ilk günü',
	'PORTAL_SUNDAY_FIRST_EXP'			=> 'Devre dışı bırakılırsa, takvim Pzt --> Paz., yoksa Paz. --> Cmt. olarak başlar',
	'PORTAL_DISPLAY_EVENTS'					=> 'Etkinlikleri göster',
	'PORTAL_DISPLAY_EVENTS_EXP'				=> 'Takvim bloğunda oluşturulan etkinlikleri görüntüleme',
	'PORTAL_EVENTS_MANAGE'					=> 'Etkinlikleri yönet',
	'NO_EVENT_TITLE'						=> 'Etkinlik için bir başlık belirtmediniz.',
	'NO_EVENT_START'						=> 'Etkinlik için bir başlangıç saati belirtmediniz.',
	'ADD_EVENT'								=> 'Yeni etkinlik ekle',
	'EVENT_UPDATED'							=> 'Etkinlik başarıyla güncellendi.',
	'EVENT_ADDED'							=> 'Etkinlik başarıyla eklendi.',
	'NO_EVENT'								=> 'Hiçbir etkinlik belirtilmedi.',
	'EVENT_TITLE'							=> 'Etkinlik başlığı',
	'EVENT_DESC'							=> 'Etkinlik açıklaması',
	'EVENT_LINK'							=> 'Etkinlik bağlantısı',
	'EVENT_LINK_EXP'						=> 'Etkinlik duyurusu veya tartışma konusuyla bir konunun veya web sitesinin bağlantısını girin.',
	'NO_EVENTS'								=> 'Etkinlik bulunamadı',
	'ACP_PORTAL_CALENDAR_START_INCORRECT'	=> 'Girdiğiniz başlangıç zamanı yanlıştı. Lütfen talimatları dikkatle takip edin.',
	'ACP_PORTAL_CALENDAR_END_INCORRECT'		=> 'Girdiğiniz bitiş saati yanlıştı. Lütfen talimatları dikkatle takip edin.',
	'ACP_PORTAL_CALENDAR_EVENT_PAST'		=> 'Olay başlangıç saatinin gelecekte olması gerekir.',
	'ACP_PORTAL_EVENT_START_DATE'			=> 'Etkinlik başlangıç tarihi',
	'ACP_PORTAL_EVENT_START_DATE_EXP'		=> 'Etkinliğin başladığı tarihi ve saati girin. Tarihin benzer bir biçimde olması gerekir: GÜN/AY/YIL 3:00 ÖS',
	'ACP_PORTAL_EVENT_END_DATE'			=> 'Etkinlik bitiş tarihi',
	'ACP_PORTAL_EVENT_END_DATE_EXP'			=> 'Etkinliğin sona ereceği tarihi ve saati girin. Tarihin benzer bir biçimde olması gerekir: GÜN/AY/YIL 3:00 ÖS',
	'ACP_PORTAL_CALENDAR_EVENT_START_FIRST'	=> 'Olayın sonu, olayın başlangıcından sonra olmalı.',
	'ACP_PORTAL_CALENDAR_PERMISSION'		=> 'Etkinlik izinleri',
	'ACP_PORTAL_CALENDAR_PERMISSION_EXP'	=> 'Etkinliği görüntülemeye yetkili olması gereken grupları seçin. Tüm kullanıcıların etkinliği görüntüleyebilmesini istiyorsanız, hiçbir şey seçmeyin. <br/> <samp>CTRL</samp> tuşuna basılı tutup tıklayarak birden çok grubu seçip/seçimini kaldırın.',
	'PORTAL_EVENTS_URL_NEW_WINDOW'			=> 'Harici etkinlik bağlantılarını yeni bir pencerede aç',

	// Logs
	'LOG_PORTAL_EVENT_UPDATED'				=> '<strong>Güncellenmiş Etkinlik</strong><br />&raquo; %s',
	'LOG_PORTAL_EVENT_ADDED'				=> '<strong>Eklenen Etkinlik</strong><br />&raquo; %s',
	'LOG_PORTAL_EVENT_REMOVED'				=> '<strong>Silinen Etkinlik</strong><br />&raquo; %s',
));
