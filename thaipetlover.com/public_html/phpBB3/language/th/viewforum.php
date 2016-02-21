<?php
/** 
*
* viewforum [Thai]
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
	'ACTIVE_TOPICS'			=> 'Active topics',
	'ANNOUNCEMENTS'			=> 'ประกาศ',

	'FORUM_PERMISSIONS'		=> 'สิทธิ์ของคุณในฟอรั่มนี้',

	'ICON_ANNOUNCEMENT'		=> 'ประกาศ',
	'ICON_STICKY'			=> 'ปักหมุด',

	'LOGIN_NOTIFY_FORUM'	=> 'You have been notified about this forum, please login to view it.',

	'MARK_TOPICS_READ'		=> 'บันทึกว่าอ่านทุกหัวข้อแล้ว',

	'NEW_POSTS_HOT'			=> 'โพสต์ใหม่ [ ยอดฮิต ]',
	'NEW_POSTS_LOCKED'		=> 'โพสต์ใหม่ [ ปิดหัวข้อ ]',
	'NO_NEW_POSTS_HOT'		=> 'ไม่มีโพสต์ใหม่ [ ยอดฮิต ]',
	'NO_NEW_POSTS_LOCKED'	=> 'ไม่มีโพสต์ใหม่ [ ปิดหัวข้อ ]',
	'NO_READ_ACCESS'		=> 'ฟอรั่มนี้สงวนสิททิ์ให้เฉพาะสมาชิกเท่านั้น โปรดสมัครสมาชิกและล๊อกอินเข้าสู่ระบบ !',

	'POST_FORUM_LOCKED'		=> 'ฟอรั่มนี้ถูกปิด',

	'TOPICS_MARKED'			=> 'บันทึกว่าอ่านทุกหัวข้อแล้ว',

	'VIEW_FORUM'			=> 'ดูฟอรั่ม',
	'VIEW_FORUM_TOPIC'		=> '1 หัวข้อ',
	'VIEW_FORUM_TOPICS'		=> '%d หัวข้อ',
));

?>