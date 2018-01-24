<?php
/**
*
* @package Board3 Portal v2.1 - Poll
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
	'PORTAL_POLL'			=> 'Anket',
	'LATEST_POLLS'			=> 'Son Anketler',
	'NO_OPTIONS'			=> 'Bu ankette mevcut seçenek yok.',
	'NO_POLL'				=> 'Anket bulumuyor',
	'RETURN_PORTAL'			=> '%sPortala geri dön%s',

	// ACP
	'ACP_PORTAL_POLLS_SETTINGS'			=> 'Anket ayarları',
	'ACP_PORTAL_POLLS_SETTINGS_EXP'	=> 'Anket bloğunu özelleştirdiğiniz yer burası',
	'PORTAL_POLL_TOPIC_ID'				=> 'Anket forum(lar)ı',
	'PORTAL_POLL_TOPIC_ID_EXP'		=> 'Anketlerin gösterileceği forum(lar). <br/> "Forumları hariç tut" seçeneği "Hayır" olarak ayarlanırsa, görmek istediğiniz forumları seçin. <br/> Seçip/Seçimi kaldırın. <br/> "Forumları hariç tut", "Evet" olarak ayarlanırsa, hariç tutmak istediğiniz forumları seçin. <samp>CTRL</samp> tuşunu basılı tutarak ve tıklayarak birden fazla forum seçebilirsiniz.',
	'PORTAL_POLL_EXCLUDE_ID'			=> 'Forumları hariç Tut',
	'PORTAL_POLL_EXCLUDE_ID_EXP'	=> 'Seçilen forumları anketler bloğundan hariç tutmak istiyorsanız "Evet", seçilen forumlardan yalnızca anket bloğundaki anketleri görmek istiyorsanız "Hayır"ı seçin.',
	'PORTAL_POLL_LIMIT'					=> 'Anket görüntüleme sınırı',
	'PORTAL_POLL_LIMIT_EXP'			=> 'Portal sayfasında görüntülemek istediğiniz anketlerin sayısı.',
	'PORTAL_POLL_ALLOW_VOTE'			=> 'Oylamaya izin ver',
	'PORTAL_POLL_ALLOW_VOTE_EXP'	=> 'Gerekli izinlere sahip kullanıcıların portal sayfasından oy kullanmasına izin verin.',
	'PORTAL_POLL_HIDE'					=> 'Süresi dolmuş anketler gizlensin mi?',
));
