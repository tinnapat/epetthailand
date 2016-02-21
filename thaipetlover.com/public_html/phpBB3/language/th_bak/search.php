<?php
/**
*
* search [English]
*
* @package language
* @version $Id: search.php,v 1.26 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'ALL_AVAILABLE'			=> 'ทั้งหมด',
	'ALL_RESULTS'			=> 'ผลลัพธ์ทั้งหมด',

	'DISPLAY_RESULTS'		=> 'แสดงผลลัพธ์',

	'FOUND_SEARCH_MATCH'		=> 'Search found %d match',
	'FOUND_SEARCH_MATCHES'		=> 'Search found %d matches',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'Search found more than %d matches',

	'GLOBAL'				=> 'Global announcement',

	'IGNORED_TERMS'			=> 'ignored',
	'IGNORED_TERMS_EXPLAIN'	=> 'The following words in your search query were ignored because they are too common words: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Jump to post',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'The board requires you to be registered and logged in to view your own posts.',

	'NO_KEYWORDS'			=> 'You must specify at least one word to search for. Each word must consist of at least %d characters and must not contain more than %d characters excluding wildcards.',
	'NO_RECENT_SEARCHES'	=> 'No searches have been carried out recently.',
	'NO_SEARCH'				=> 'Sorry but you are not permitted to use the search system.',
	'NO_SEARCH_RESULTS'		=> 'No suitable matches were found.',
	'NO_SEARCH_TIME'		=> 'Sorry but you cannot use search at this time. Please try again in a few minutes.',
	'WORD_IN_NO_POST'		=> 'No posts were found because the word <strong>%s</strong> is not contained in any post.',
	'WORDS_IN_NO_POST'		=> 'No posts were found because the words <strong>%s</strong> are not contained in any post.',

	'POST_CHARACTERS'		=> 'ตัวอักษรของข้อความ',

	'RECENT_SEARCHES'		=> 'Recent searches',
	'RESULT_DAYS'			=> 'จำกัดผลลัพธ์เฉพาะย้อนหลัง',
	'RESULT_SORT'			=> 'เรียงลำดับผลลัพธ์โดย',
	'RETURN_FIRST'			=> 'แสดงผลตัวอักษรแรก',
	'RETURN_TO_SEARCH_ADV'	=> 'กลับไปยัง ค้นหาแบบพิเศษ',

	'SEARCHED_FOR'				=> 'Search term used',
	'SEARCHED_TOPIC'			=> 'Searched topic',
	'SEARCH_ALL_TERMS'			=> 'Search for all terms or use query as entered',
	'SEARCH_ANY_TERMS'			=> 'Search for any terms',
	'SEARCH_AUTHOR'				=> 'Search for author',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Use * as a wildcard for partial matches.',
	'SEARCH_FIRST_POST'			=> 'คำตอบแรกในกระทู้เท่านั้น',
	'SEARCH_FORUMS'				=> 'ค้นหาในกระดาน',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Select the forum or forums you wish to search in. Subforums are searched automatically if you do not disable “search subforums“ below.',
	'SEARCH_IN_RESULTS'			=> 'Search these results',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Place <strong>+</strong> in front of a word which must be found and <strong>-</strong> in front of a word which must not be found. Put a list of words separated by <strong>|</strong> into brackets if only one of the words must be found. Use * as a wildcard for partial matches.',
	'SEARCH_MSG_ONLY'			=> 'เนื้อหาข้อความเท่านั้น',
	'SEARCH_OPTIONS'			=> 'Search options',
	'SEARCH_QUERY'				=> 'Search query',
	'SEARCH_SUBFORUMS'			=> 'ค้นหาในกระดานย่อย',
	'SEARCH_TITLE_MSG'			=> 'ชื่อหัวข้อและเนื้อหาข้อความ',
	'SEARCH_TITLE_ONLY'			=> 'ชื่อหัวข้อกระทู้เท่านั้น',
	'SEARCH_WITHIN'				=> 'ค้นหาใน',
	'SORT_ASCENDING'			=> 'น้อยไปมาก',
	'SORT_AUTHOR'				=> 'ผู้เขียนข้อความ',
	'SORT_DESCENDING'			=> 'มากไปน้อย',
	'SORT_FORUM'				=> 'ชื่อกระดาน',
	'SORT_POST_SUBJECT'			=> 'ชื่อหัวข้อ',
	'SORT_TIME'					=> 'เวลาที่ตอบ',

	'TOO_FEW_AUTHOR_CHARS'	=> 'You must specify at least %d characters of the authors name.',
));

?>