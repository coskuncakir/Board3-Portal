<?php
/**
*
* @package Board3 Portal v2.1 - News
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
	'LATEST_NEWS'			=> 'Son haberler',
	'READ_FULL'				=> 'Tümünü oku',
	'NO_NEWS'				=> 'Haber bulunmuyor',
	'POSTED_BY'				=> 'Yazan',
	'COMMENTS'				=> 'Yorumlar',
	'VIEW_COMMENTS'			=> 'Görüntülenen yorumlar',
	'PORTAL_POST_REPLY'		=> 'Yazılan yorumlar',
	'TOPIC_VIEWS'			=> 'Görüntülenme',
	'JUMP_NEWEST'			=> 'Yeni konuya atla',
	'JUMP_FIRST'			=> 'İlk gönderiye git',
	'JUMP_TO_POST'			=> 'Konuya atla',

	// ACP
	'ACP_PORTAL_NEWS_SETTINGS'			=> 'Haber ayarları',
	'ACP_PORTAL_NEWS_SETTINGS_EXP'	=> 'Haber bloğunu özelleştirdiğiniz yer burası',
	'PORTAL_NEWS_STYLE'					=> 'Kompakt haber bloğu tarzı',
	'PORTAL_NEWS_STYLE_EXP'			=> '"Evet", kompakt stili haberler için kullanmak demektir. "Hayır", geniş stili (metin görünümü) kullanmak anlamına gelir.',
	'PORTAL_SHOW_ALL_NEWS'				=> 'Bu forumdaki tüm makaleleri göster',
	'PORTAL_SHOW_ALL_NEWS_EXP'		=> 'Yapışkanları içerir.',
	'PORTAL_NUMBER_OF_NEWS'				=> 'Portaldaki haber makalelerinin sayısı',
	'PORTAL_NUMBER_OF_NEWS_EXP'		=> '0 sonsuz demektir',
	'PORTAL_NEWS_LENGTH'				=> 'Haber makalesinin azami uzunluğu',
	'PORTAL_NEWS_LENGTH_EXP'		=> '0 sonsuz demektir',
	'PORTAL_NEWS_FORUM' 				=> 'Haber Forumları',
	'PORTAL_NEWS_FORUM_EXP' 		=> 'Forum(lar) dan makaleleri çekip, tüm forumlardan çekilmek için boş bırakın. <br/> "Forumları hariç tut" seçeneği "Hayır" olarak ayarlanırsa, görmek istediğiniz forumları seçin. <br/> Seçip/Seçimi kaldırın. <br/> "Forumları hariç tut", "Evet" olarak ayarlanırsa, hariç tutmak istediğiniz forumları seçin. <samp>CTRL</samp> tuşuna basılı tutarak ve tıklayarak birden fazla forum seçebilirsiniz.',
	'PORTAL_NEWS_EXCLUDE'				=> 'Forumları hariç tut',
	'PORTAL_NEWS_EXCLUDE_EXP'		=> 'Seçilen forumları haber bloğundan hariç tutmak istiyorsanız "Evet", haber bloğunda yalnızca seçilen forumları görmek istiyorsanız "Hayır"ı seçin.',
	'PORTAL_NEWS_PERMISSIONS'			=> 'İzinleri etkinleştir/devre dışı bırak',
	'PORTAL_NEWS_PERMISSIONS_EXP'	=> 'Haber görüntülenirken forum görüntüleme izinlerini dikkate alın',
	'PORTAL_NEWS_SHOW_LAST'				=> 'En yeni gönderilere sıralamak',
	'PORTAL_NEWS_SHOW_LAST_EXP'		=> 'Etkinleştirildiğinde, en yeni mesajlar için en yeni mesaj sıralanır. Devre dışı bırakıldığında, haber en yeni konuyla sıralanır.',
	'PORTAL_NEWS_ARCHIVE'				=> 'Haber arşiv sistemini etkinleştirin',
	'PORTAL_NEWS_ARCHIVE_EXP'		=> 'Etkinleştirildiğinde, haber arşiv sistemi / sayfa numaraları görüntülenir.',
	'PORTAL_SHOW_REPLIES_VIEWS'				=> 'Cevapların ve görüntülemelerin sayısını görüntüleme',
	'PORTAL_SHOW_REPLIES_VIEWS_EXP'		=> 'Bu ayar, kompakt blok ile ilgilidir. <br/> Evet olduğunda, yanıt sayısı ve görüntüleme sayısı 2 ek sütunda gösterilir. Hayır olduğunda, yanıtlar ve görünümler forum adının yanında gösterilir. Gerekli ekstra genişlik nedeniyle fazladan sütunların görüntülenmesiyle ilgili sorun yaşıyorsanız Hayır`ı seçin.',
));
