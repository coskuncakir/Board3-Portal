<?php
/**
*
* @package Board3 Portal v2.1 - Attachments
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
	'DOWNLOADS'				=> 'İndirilenler',
	'NO_ATTACHMENTS'		=> 'Dosya eki bulunmuyor',
	'PORTAL_ATTACHMENTS'	=> 'Dosya ekleri',

	// ACP
	'ACP_PORTAL_ATTACHMENTS_NUMBER_SETTINGS'			=> 'Dosya eki ayarları',
	'ACP_PORTAL_ATTACHMENTS_NUMBER_SETTINGS_EXP'	=> 'Dosya ekleri bloğunu özelleştirdiğiniz yer burasıdır.',
	'PORTAL_ATTACHMENTS_NUMBER'							=> 'Görüntülenen dosya eklerinin sınırı',
	'PORTAL_ATTACHMENTS_NUMBER_EXP'					=> '0 sonsuz demektir',
	'PORTAL_ATTACHMENTS_FORUM_IDS'						=> 'Dosya eki içeren forumlar',
	'PORTAL_ATTACHMENTS_FORUM_IDS_EXP'				=> 'Dosya eklerin görüntüleneceği forum(lar). <br /> "Forumları hariç tut" seçeneği "Hayır" olarak ayarlanırsa, görmek istediğiniz forumları seçin.<br /> "Forumları hariç tut", "Evet" olarak ayarlanırsa, hariç tutmak istediğiniz forumları seçin. <samp>CTRL</samp> tuşunu basılı tutarak ve tıklayarak birden fazla forum oluşturabilirsiniz.',
	'PORTAL_ATTACHMENTS_FORUM_EXCLUDE'					=> 'Forumları hariç tut',
	'PORTAL_ATTACHMENTS_FORUM_EXCLUDE_EXP'			=> 'Seçilen forumları engellenen eklerden çıkarmak istiyorsanız "Evet", eklentiler bloğunda yalnızca seçilen forumların eklerini görmek istiyorsanız "Hayır"ı seçin.',
	'PORTAL_ATTACHMENTS_MAX_LENGTH'						=> 'Her dosya eki için karakter sınırı',
	'PORTAL_ATTACHMENTS_MAX_LENGTH_EXP'				=> '0 sonsuz demektir',
	'PORTAL_ATTACHMENTS_FILETYPE' 						=> 'Dosya tipi',
	'PORTAL_ATTACHMENTS_FILETYPE_EXP' 				=> '<br /> "Dosya türlerini hariç tut" seçeneği "Hayır" olarak ayarlanırsa, görmek istediğiniz dosya türlerini seçin.<br />"Dosya türlerini hariç tut" seçeneği "Evet" olarak ayarlanırsa, hariç tutmak istediğiniz dosya türlerini seçin. <samp>CTRL</samp> tuşunu basılı tutup tıklayarak birden fazla dosya türü.',
	'PORTAL_ATTACHMENTS_EXCLUDE'						=> 'Dosya türlerini hariç tut',
	'PORTAL_ATTACHMENTS_EXCLUDE_EXP'				=> 'Seçili dosya türlerini dosya eki bloğundan çıkarmak istiyorsanız "Evet" seçeneğini ve dosya eki bloğunda yalnızca seçilen dosya türlerini görmek istiyorsanız "Hayır"ı seçin.',
));
