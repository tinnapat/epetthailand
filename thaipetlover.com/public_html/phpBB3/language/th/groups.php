<?php
/** 
*
* groups [Thai]
*
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
	'ALREADY_DEFAULT_GROUP'				=> 'The selected group is already your default group.',
	'ALREADY_IN_GROUP'					=> 'You are already a member of the selected group.',
	'ALREADY_IN_GROUP_PENDING'			=> 'You already requested joining the selected group.',

	'CHANGED_DEFAULT_GROUP'				=> 'Successfully changed default group.',
	
	'GROUP_AVATAR'						=> 'ไอคอนประจำกลุ่ม', 
	'GROUP_CHANGE_DEFAULT'				=> 'Are you sure you want to change your default membership to the group “%s”?',
	'GROUP_CLOSED'						=> 'Closed',
	'GROUP_DESC'						=> 'รายละเอียดกลุ่ม',
	'GROUP_HIDDEN'						=> 'ซ่อน',
	'GROUP_INFORMATION'					=> 'Usergroup information', 
	'GROUP_IS_CLOSED'					=> 'This is a closed group, new members can only join upon invitation of a group leader.',
	'GROUP_IS_FREE'						=> 'This is a freely open group, all new members are welcome.', 
	'GROUP_IS_HIDDEN'					=> 'This is a hidden group, only members of this group can view its membership.',
	'GROUP_IS_OPEN'						=> 'This is an open group, members can apply to join.',
	'GROUP_IS_SPECIAL'					=> 'This is a special group, special groups are managed by the board administrators.', 
	'GROUP_JOIN'						=> 'เข้าร่วมกลุ่ม',
	'GROUP_JOIN_CONFIRM'				=> 'คุณแน่ใจแล้วหรือว่าต้องการเข้าร่วมกลุ่มที่เลือก?',
	'GROUP_JOIN_PENDING'				=> 'Request to join group',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Are you sure you want to request joining the selected group?',
	'GROUP_JOINED'						=> 'เข้าร่วมกลุ่มที่เลือกเรียบร้อยแล้ว',
	'GROUP_JOINED_PENDING'				=> 'Successfully requested group membership. Please wait for a group leader to approve your membership.',
	
	'GROUP_LIST'						=> 'จัดการผู้ใช้งาน',
	'GROUP_MEMBERS'						=> 'สมาชิกกลุ่ม',
	'GROUP_NAME'						=> 'ชื่อกลุ่ม',
	'GROUP_OPEN'						=> 'เปิด',
	'GROUP_RANK'						=> 'อันดับของกลุ่ม', 
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Resign group membership',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Are you sure you want to resign your membership from the selected group?',
	'GROUP_RESIGN_PENDING'				=> 'Resign a pending group membership',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Are you sure you want to resign your pending membership from the selected group?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'You were successfully removed from the selected group.',
	'GROUP_RESIGNED_PENDING'			=> 'Your pending membership was successfully removed from the selected group.',
	'GROUP_TYPE'						=> 'ประเภทกลุ่ม',
	'GROUP_UNDISCLOSED'					=> 'Hidden group',
	'FORUM_UNDISCLOSED'					=> 'Moderating hidden forum(s)',

	'LOGIN_EXPLAIN_GROUP'			=> 'คุณต้องเข้าสู่ระบบก่อน จึงจะดูข้อมูลของกลุ่มสมาชิกนี้ได้',

	'NO_LEADERS'					=> 'You are not a leader of any group.',
	'NOT_LEADER_OF_GROUP'			=> 'The requested operation cannot be taken because you are not a leader of the selected group.',
	'NOT_MEMBER_OF_GROUP'			=> 'The requested operation cannot be taken because you are not a member of the selected group or your membership has not been approved yet.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'You are not allowed to resign from your default group.',
	
	'PRIMARY_GROUP'		=> 'กลุ่มหลัก',

	'REMOVE_SELECTED'		=> 'ลบที่เลือก',

	'USER_GROUP_CHANGE'			=> 'From “%1$s” group to “%2$s”',
	'USER_GROUP_DEMOTE'			=> 'Demote leadership',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Are you sure you want to demote as group leader from the selected group?',
	'USER_GROUP_DEMOTED'		=> 'Successfully demoted your leadership.',
));

?>