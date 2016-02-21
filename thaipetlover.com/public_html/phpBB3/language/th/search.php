<?php
/** 
*
* search [Thai]
*
* ภาษาไทยสำหรับ phpBB3 โดย www.phpb3thai.com และ www.thaipostza.com
*
* วันที่ 21/03/2551
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
	'ALL_AVAILABLE'				=> 'All available',
	'ALL_RESULTS'				=> 'All results',

	'DISPLAY_RESULTS'			=> 'แสดงผล',

	'FOUND_SEARCH_MATCH'		=> 'พบ %d ผลลัพธ์',
	'FOUND_SEARCH_MATCHES'		=> 'พบ %d ผลลัพธ์',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'พบมากกว่า %d ผลลัพธ์',

	'GLOBAL'				=> 'Global announcement',

	'IGNORED_TERMS'			=> 'ignored',
	'IGNORED_TERMS_EXPLAIN'	=> 'The following words in your search query were ignored: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Jump to post',

	'NO_KEYWORDS'			=> 'You must specify at least one word to search for. Each word must consist of at least %d characters and must not contain more than %d characters excluding wildcards.',
	'NO_RECENT_SEARCHES'	=> 'No searches have been carried out recently.',
	'NO_SEARCH'				=> 'Sorry but you are not permitted to use the search system.',
	'NO_SEARCH_RESULTS'		=> 'ไม่พบผลลัพธ์',
	'NO_SEARCH_TIME'		=> 'Sorry but you cannot use search at this time. Please try again in a few minutes.',
	'WORD_IN_NO_POST'		=> 'No posts were found because the word <strong>%s</strong> is not contained in any post.',
	'WORDS_IN_NO_POST'		=> 'No posts were found because the words <strong>%s</strong> are not contained in any post.',

	'POST_CHARACTERS'		=> 'characters of posts',

	'RECENT_SEARCHES'		=> 'Recent searches',
	'RESULT_DAYS'			=> 'ค้นหาก่อนวันที่',
	'RESULT_SORT'			=> 'เรียงลำดับจาก',
	'RETURN_FIRST'			=> 'Return first',
	'RETURN_TO_SEARCH_ADV'	=> 'กลับไปหน้า การค้นหาชั้นสูง',

	'SEARCHED_FOR'				=> 'Search term used',
	'SEARCHED_TOPIC'			=> 'Searched topic',
	'SEARCH_ALL_TERMS'			=> 'ค้นหาจากทุกส่วน หรือใช้ข้อความที่ระบุ',
	'SEARCH_ANY_TERMS'			=> 'ค้นหาจากทุกส่วน',
	'SEARCH_AUTHOR'				=> 'ค้นหาจากผู้แต่ง:',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'ใช้ * เพื่อค้นหาจากบางส่วนของคำ',
	'SEARCH_FIRST_POST'			=> 'First post of topics only',
	'SEARCH_FORUMS'				=> 'ค้นหาในฟอรั่ม',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Select the forum or forums you wish to search in. For speed all subforums can be searched by selecting the parent and setting enable search subforums below.',
	'SEARCH_IN_RESULTS'			=> 'Search these results',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'คุณสามารถใช้ AND เพื่อระบุคำที่ต้องมีในผลลัพธ์, OR อาจมีหรือไม่มีคำนี้ก็ได้ และ NOT จะต้องไม่มีคำนี้อยู่. ใช้ * เพื่อค้นหาจากบางส่วนของคำ',
	'SEARCH_MSG_ONLY'			=> 'Message text only',
	'SEARCH_OPTIONS'			=> 'ตั้งค่าการค้นหา',
	'SEARCH_QUERY'				=> 'ค้นหา',
	'SEARCH_SUBFORUMS'			=> 'ค้นหาในฟอรั่มย่อย',
	'SEARCH_TITLE_MSG'			=> 'Post subjects and message text',
	'SEARCH_TITLE_ONLY'			=> 'Topic titles only',
	'SEARCH_WITHIN'				=> 'การค้นหาภายใน',
	'SORT_ASCENDING'			=> 'น้อย-มาก',
	'SORT_AUTHOR'				=> 'ผู้ตั้งกระทู้',
	'SORT_DESCENDING'			=> 'มาก-น้อย',
	'SORT_FORUM'				=> 'ฟอรั่ม',
	'SORT_POST_SUBJECT'			=> 'หัวข้อโพสต์',
	'SORT_TIME'					=> 'เวลาโพสต์',

	'TOO_FEW_AUTHOR_CHARS'	=> 'You must specify at least %d characters of the authors name.',
));

?>