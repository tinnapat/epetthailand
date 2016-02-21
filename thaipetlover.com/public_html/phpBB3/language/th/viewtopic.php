<?php
/** 
*
* viewtopic.php [Thai]
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
	'ATTACHMENT'						=> 'แนบไฟล์',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'ส่วนการใช้งานแนบไฟล์ไม่ได้เปิดใช้งาน.',

	'BOOKMARK_ADDED'		=> 'เก็บหัวข้อเข้า รายการโปรด เรียบร้อยแล้ว',
	'BOOKMARK_REMOVED'		=> 'ลบหัวข้อจาก รายการโปรด เรียบร้อยแล้ว.',
	'BOOKMARK_TOPIC'		=> 'รายการโปรด',
	'BOOKMARK_TOPIC_REMOVE'	=> 'ลบออกจากรายการโปรด',
	'BUMPED_BY'				=> 'Last bumped by %1$s on %2$s.',
	'BUMP_TOPIC'			=> 'Bump topic',

	'CODE'					=> 'โค้ด',

	'DELETE_TOPIC'			=> 'ลบหัวข้อ',
	'DOWNLOAD_NOTICE'		=> 'You do not have the required permissions to view the files attached to this post.',

	'EDITED_TIMES_TOTAL'	=> 'แก้ไขล่าสุดโดย %1$s เมื่อ %2$s, แก้ไขแล้ว %3$d ครั้ง.',
	'EDITED_TIME_TOTAL'		=> 'แก้ไขล่าสุดโดย %1$s เมื่อ %2$s, แก้ไขแล้ว %3$d ครั้ง',
	'EMAIL_TOPIC'			=> 'อีเมล์เพื่อน',
	'ERROR_NO_ATTACHMENT'	=> 'The selected attachment does not exist anymore.',

	'FILE_NOT_FOUND_404'	=> 'ไฟล์ <strong>%s</strong> ไมมีอยู่ในฐานข้อมูล.',
	'FORK_TOPIC'			=> 'คัดลอกหัวข้อ',

	'LINKAGE_FORBIDDEN'		=> 'You are not authorised to view, download or link from/to this site.',
	'LOGIN_NOTIFY_TOPIC'	=> 'You have been notified about this topic, please login to view it.',
	'LOGIN_VIEWTOPIC'		=> 'The board requires you to be registered and logged in to view this topic.',

	'MAKE_ANNOUNCE'				=> 'เปลี่ยนเป็น “Announcement”',
	'MAKE_GLOBAL'				=> 'เปลี่ยนเป็น “Global”',
	'MAKE_NORMAL'				=> 'เปลี่ยนเป็น “Standard Topic”',
	'MAKE_STICKY'				=> 'เปลี่ยนเป็น “Sticky”',
	'MAX_OPTIONS_SELECT'		=> 'You may select up to <strong>%d</strong> options',
	'MAX_OPTION_SELECT'			=> 'You may select <strong>1</strong> option',
	'MISSING_INLINE_ATTACHMENT'	=> 'The attachment <strong>%s</strong> is no longer available',
	'MOVE_TOPIC'				=> 'ย้ายหัวข้อ',

	'NO_ATTACHMENT_SELECTED'=> 'You haven’t selected an attachment to download or view.',
	'NO_NEWER_TOPICS'		=> 'There are no newer topics in this forum.',
	'NO_OLDER_TOPICS'		=> 'There are no older topics in this forum.',
	'NO_UNREAD_POSTS'		=> 'There are no new unread posts for this topic.',
	'NO_VOTE_OPTION'		=> 'You must specify an option when voting.',
	'NO_VOTES'				=> 'No votes',

	'POLL_ENDED_AT'			=> 'Poll ended at %s',
	'POLL_RUN_TILL'			=> 'Poll runs till %s',
	'POLL_VOTED_OPTION'		=> 'You voted for this option',
	'PRINT_TOPIC'			=> 'ตัวอย่างพิมพ์',

	'QUICK_MOD'				=> 'เครื่องมือผู้ดูแลบอร์ด',
	'QUOTE'					=> 'คำพูด',

	'REPLY_TO_TOPIC'		=> 'Reply to topic',
	'RETURN_POST'			=> '%sReturn to the post%s',

	'SUBMIT_VOTE'			=> 'ทำการโหวต',

	'TOTAL_VOTES'			=> 'โหวตทั้งหมด',

	'UNLOCK_TOPIC'			=> 'ปลดล็อกหัวข้อ',

	'VIEW_INFO'				=> 'รายละเอียดโพสต์',
	'VIEW_NEXT_TOPIC'		=> 'หัวข้อต่อไป',
	'VIEW_PREVIOUS_TOPIC'	=> 'หัวข้อที่แล้ว',
	'VIEW_RESULTS'			=> 'View results',
	'VIEW_TOPIC_POST'		=> '1 โพสต์',
	'VIEW_TOPIC_POSTS'		=> '%d โพสต์',
	'VIEW_UNREAD_POST'		=> 'First unread post',
	'VISIT_WEBSITE'			=> 'www',
	'VOTE_SUBMITTED'		=> 'Your vote has been cast.',
	'VOTE_CONVERTED'		=> 'Changing votes is not supported for converted polls.',

));

?>