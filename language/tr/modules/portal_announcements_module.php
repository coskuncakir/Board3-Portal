<?php
/**
*
* @package Board3 Portal v2.1 - Announcements
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
	'LATEST_ANNOUNCEMENTS'		=> 'Son genel duyurular',
	'GLOBAL_ANNOUNCEMENTS'		=> 'Genel duyurular',
	'GLOBAL_ANNOUNCEMENT'		=> 'Genel duyuru',
	'VIEW_LATEST_ANNOUNCEMENT'  => '1 duyuru',
	'VIEW_LATEST_ANNOUNCEMENTS' => '%d announcements',
	'READ_FULL'					=> 'Tümünü oku',
	'NO_ANNOUNCEMENTS'			=> 'Genel duyuru bulunmuyor',
	'POSTED_BY'					=> 'Yazan',
	'COMMENTS'					=> 'Yorumlar',
	'VIEW_COMMENTS'				=> 'Yorumları görüntüle',
	'PORTAL_POST_REPLY'			=> 'Yazılan yorumlar',
	'TOPIC_VIEWS'				=> 'Görüntülenme',
	'JUMP_NEWEST'				=> 'Yeni konuya atla',
	'JUMP_FIRST'				=> 'İlk konuya atla',
	'JUMP_TO_POST'				=> 'Konuya atla',

	// ACP
	'ACP_PORTAL_ANNOUNCE_SETTINGS'				=> 'Genel duyuru ayarları',
	'ACP_PORTAL_ANNOUNCE_SETTINGS_EXP'		=> 'Burası genel duyuru bloğunu özelleştirdiğiniz yerdir.',
	'PORTAL_ANNOUNCEMENTS'						=> 'Genel duyuruları göster',
	'PORTAL_ANNOUNCEMENTS_EXP'				=> 'Bu bloğu portalda göster.',
	'PORTAL_ANNOUNCEMENTS_STYLE'				=> 'Genel duyurular bloğu için kompakt stil kullan',
	'PORTAL_ANNOUNCEMENTS_STYLE_EXP'		=> '"Evet" genel duyurular için kompakt stil kullanma. "Hayır" Geniş stili (metin görünümü) kullanma.',
	'PORTAL_NUMBER_OF_ANNOUNCEMENTS'			=> 'Portaldaki duyuruların sayısı',
	'PORTAL_NUMBER_OF_ANNOUNCEMENTS_EXP'	=> '0 sınırsız demektir',
	'PORTAL_ANNOUNCEMENTS_DAY'					=> 'Duyuruyu görüntüleme süresi (gün olarak)',
	'PORTAL_ANNOUNCEMENTS_DAY_EXP'			=> '0 sınırsız demektir',
	'PORTAL_ANNOUNCEMENTS_LENGTH'				=> 'Genel duyuruların maksimum boyutu/uzunluğu',
	'PORTAL_ANNOUNCEMENTS_LENGTH_EXP'		=> '0 sınırsız demektir',
	'PORTAL_GLOBAL_ANNOUNCEMENTS_FORUM'			=> 'Forumdaki duyurular',
	'PORTAL_GLOBAL_ANNOUNCEMENTS_FORUM_EXP'	=> 'Duyuruları aldığımız forum(lar). Duyuruları tüm forumlardan almak için burayı boş bırakın. <br /> "Forumları hariç tut" seçeneği "Hayır" olarak ayarlanırsa, görmek istediğiniz forumları seçin. <br /> "Forumları hariç tut", "Evet" olarak ayarlanırsa, hariç tutmak istediğiniz forumları seçin. <samp> CTRL </ samp> tuşuna basılı tutarak ve tıklayarak birden fazla forum seçebilirsiniz.',
	'PORTAL_ANNOUNCEMENTS_FORUM_EXCLUDE'		=> 'Forumları hariç tut',
	'PORTAL_ANNOUNCEMENTS_FORUM_EXCLUDE_EXP'=> 'Seçilen forumları duyuru blokundan çıkarmak istiyorsanız "Evet", duyurular blokunda yalnızca seçilen forumları görmek istiyorsanız "Hayır" ı seçin.',
	'PORTAL_ANNOUNCEMENTS_PERMISSIONS'			=> 'İzinleri Etkinleştir/Devredışı bırak',
	'PORTAL_ANNOUNCEMENTS_PERMISSIONS_EXP'	=> 'Duyuruları görüntülerken bir kullanıcının forum görüntüleme izinlerini göz önünde bulundurun.',
	'PORTAL_ANNOUNCEMENTS_ARCHIVE'				=> 'Duyurular arşiv sistemini etkinleştir',
	'PORTAL_ANNOUNCEMENTS_ARCHIVE_EXP'		=> 'Etkinleştirilirse, duyurular arşiv sistemi / sayfa numaraları görüntülenir.',
	'PORTAL_SHOW_REPLIES_VIEWS'				=> 'Cevapların ve görüntülemelerin sayısını görüntüle',
	'PORTAL_SHOW_REPLIES_VIEWS_EXP'		=> 'Bu ayar, kompakt blok ile ilgilidir. <br /> Evet olduğunda, yanıt sayısı ve görüntüleme sayısı 2 ek sütunda gösterilir. Hayır olduğunda, yanıtlar ve görünümler forum adının yanında gösterilir. Gerekli ekstra genişlik nedeniyle fazladan sütunların görüntülenmesiyle ilgili sorun yaşıyorsanız Hayırı seçin.',
));
