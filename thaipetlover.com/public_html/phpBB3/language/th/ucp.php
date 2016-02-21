<?php
/** 
*
* ucp [English]
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

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'	=> 'ในขั้นตอนการสมัครสมาชิก  “%1$s”  ผู้สมัครจะต้องกรอกข้อมูลตามความเป็นจริง หากมีการเปลี่ยนแปลงใดๆ  “%1$s” ขอให้ท่านแก้ไข โดยการเปลี่ยนแปลงข้อมูลดังกล่าวจากปุ่ม "แก้ไขข้อมูลสมาชิก"<br /><br />

1.  “%1$s” ให้บริการรับ และส่งอีเมล์ ผ่านทางเวิลด์ไวด์เว็บและระบบออนไลน์ของ “%1$s” แก่สมาชิกทุกท่าน โดยไม่คิดค่าบริการใดๆ ทั้งสิ้น ซึ่งทางสมาชิกต้องจัดหาอุปกรณ์ในการติดต่อเข้า ระบบอินเทอร์เน็ตพร้อมทั้งเป็นผู้รับผิดชอบในการจ่ายค่าบริการ โทรศัพท์ และค่าบริการอินเทอร์เน็ตเอง ชื่อติดต่อบริการ ( login name) ต้องใช้ภาษาอังกฤษเท่านั้น และต้องมีความยาว ระหว่าง 6-18 ตัวอักษร ใช้ได้เฉพาะตัวอักษร a-z, 0-9, -, _ ไม่เว้นช่องว่าง<br /><br />

2. ไม่ว่าท่านจะอยู่มุมไหนของโลก ก็สามารถใช้บริการ “%1$s” เพียงมีคอมพิวเตอร์ที่เชื่อมต่ออินเทอร์เน็ตได้ ทั้งนี้อยู่ในความรับผิดชอบของผู้ใช้  “%1$s” ที่จะต้องปฏิบัติตามกฎระเบียบ ที่มีผลบังคับใช้ในประเทศต่างๆ  “%1$s” ขอสงวนสิทธิ์ในการให้บริการ และหยุดให้บริการเมื่อใดก็ได้ ตามแต่ความเหมาะสม โดยมิต้องบอกกล่าวให้ท่านทราบล่วงหน้า  “%1$s” ถือว่าความเป็นส่วนตัวเป็นเรื่องสำคัญมากสำหรับ การติดต่อสื่อสาร ทั้งนี้เพื่อความเป็นส่วนตัวของท่านเอง  “%1$s” ขอแจ้งให้ท่านทราบว่า เป็นหน้าที่ของท่านเอง ในการรักษาชื่อติดต่อบริการ ( login name) และรหัสผ่าน ( password) ให้ปลอดภัย ไม่บอกให้ผู้อื่นทราบ<br /><br />

3.  “%1$s”  เปิดให้บริการสำหรับการใช้เพื่อส่วนตัวเท่านั้น ห้ามใช้  “%1$s”  เพื่อผลประโยชน์ทางธุรกิจในทุกรูปแบบ ทั้งการแอบอ้าง หรือขายบริการต่อ (resale) หากท่านทำความเสียหาย ให้กับผู้อื่น ทาง  “%1$s” จะไม่รับผิดชอบต่อข้อเสียหายในทุกกรณี <br /><br />

4. สมาชิก “%1$s”  จะไม่นำบริการไปใช้ในกิจกรรมที่ละเมิดความเป็นส่วนตัวของผู้อื่น รวมทั้งกิจกรรมที่ผิดกฎหมาย หรือขัดต่อความสงบเรียบร้อย และศีลธรรมอันดีของสังคม ทาง  “%1$s”  ไม่รับผิดชอบต่อสิ่งที่ท่านละเมิดและสร้างความเสียหาย ให้กับผู้อื่นในทุกกรณี  “%1$s” เปิดให้บริการสำหรับการใช้เพื่อส่วนตัวเท่านั้น<br /><br />

5. ห้ามใช้ข้อความที่ไม่สุภาพ หรือเป็นการหมิ่นประมาทผู้อื่นในการสื่อสาร ไม่ว่ากรณีใดๆ ทั้งสิ้น ทั้งนี้เพื่อสร้างวัฒนธรรมที่ดี ในการใช้เว็บ<br /><br />

6.  “%1$s” ไม่รับประกันความเสียหายของจดหมายที่เกิดจากการใช้บริการของ  “%1$s” ซึ่งอาจจะไม่สามารถให้บริการได้ตลอด 24 ชั่วโมง เพราะเครื่องเซิร์ฟเวอร์ของ  “%1$s” อาจขัดข้องโดยเหตุสุดวิสัยที่ไม่อาจคาดการณ์ได้ อีกทั้ง  “%1$s” ไม่รับรองความปลอดภัยในการใช้เว็บ เพื่อสั่งซื้อสินค้าผ่านทางอินเทอร์เน็ต อย่างไรก็ดีระบบที่  “%1$s” นำมาให้บริการกับท่านเป็นระบบ ที่มีความปลอดภัยได้มาตรฐาน ซึ่งในภาวะการทำงานปกติจะไม่เกิด ความเสียหายใดๆ ข้อความ ภาพนิ่ง เสียง หรือภาพวิดีโอต่างๆ ที่พ่วงท้ายมากับจดหมาย  “%1$s”  เป็นทรัพย์สินของบริษัท กรุงเทพโทรทัศน์ และวิทยุ จำกัด ทางเราขอสงวนลิขสิทธิ์ในข้อความ ภาพนิ่ง เสียง และภาพวิดีโอเหล่านั้น ห้ามมิให้สมาชิกนำ ไปเผยแพร่ใน รูปแบบใดๆ โดยมิได้รับอนุญาต ทั้งนี้มีผลบังคับรวมไปถึงโลโก้ เครื่องหมายการค้าชื่อสินค้า และบริการต่างๆ ของ “%1$s” ด้วย<br /><br />

7. หากมีการเปลี่ยนแปลงข้อตกลงในการให้บริการ “%1$s” จะแจ้งให้ท่านทราบ โดยจะประกาศ ข้อตกลงใหม่ขึ้นหน้าจอ เพื่อให้ท่านรับทราบ และท่านจะใช้บริการของ “%1$s” ต่อไปได้ เมื่อท่านยอมรับข้อตกลงใหม่ของ “%1$s”  โดยการกดปุ่ม " ยอมรับ" หาก  “%1$s” พบว่าสมาชิก ของ  “%1$s” ละเมิดข้อตกลงที่ได้กำหนดไว้  “%1$s”  ขอสงวนสิทธิ์ในการระงับการให้บริการ โดยมิต้องแจ้งให้ทราบล่วงหน้า
	',
	
	'PRIVACY_POLICY'		=> 'This policy explains in detail how “%1$s” along with its affiliated companies (hereinafter “we”, “us”, “our”, “%1$s”, “%2$s”) and phpBB (hereinafter “they”, “them”, “their”, “phpBB software”, “www.phpbb.com”, “phpBB Group”, “phpBB Teams”) use any information collected during any session of usage by you (hereinafter “your information”).<br />
	<br />
	Your information is collected via two ways. Firstly, by browsing “%1$s” will cause the phpBB software to create a number of cookies, which are small text files that are downloaded on to your computer’s web browser temporary files. The first two cookies just contain a user identifier (hereinafter “user-id”) and an anonymous session identifier (hereinafter “session-id”), automatically assigned to you by the phpBB software. A third cookie will be created once you have browsed topics within “%1$s” and is used to store which topics have been read, thereby improving your user experience.<br />
	<br />
	We may also create cookies external to the phpBB software whilst browsing “%1$s”, though these are outside the scope of this document which is intended to only cover the pages created by the phpBB software. The second way in which we collect your information is by what you submit to us. This can be, and is not limited to: posting as an anonymous user (hereinafter “anonymous posts”), registering on “%1$s” (hereinafter “your account”) and posts submitted by you after registration and whilst logged in (hereinafter “your posts”).<br />
	<br />
	Your account will at a bare minimum contain a uniquely identifiable name (hereinafter “your user name”), a personal password used for logging into your account (hereinafter “your password”) and a personal, valid e-mail address (hereinafter “your e-mail”). Your information for your account at “%1$s” is protected by data-protection laws applicable in the country that hosts us. Any information beyond your user name, your password and your e-mail required by “%1$s” during the registration process are at our digression what is mandatory and what is optional. In all cases, you have the option of what information in your account is publicly displayed. Furthermore, within your account, you have the option to opt-in or opt-out of automatically generated e-mails from the phpBB software.<br />
	<br />
	Your password is ciphered (a one-way hash) so that it is secure. However, it is recommended that you do not reuse the same password across a number of different websites. Your password is the means of accessing your account at “%1$s”, so please guard it carefully and under no circumstance will anyone affiliated with “%1$s”, phpBB or another 3rd party, legitimately ask you for your password. Should you forget your password for your account, you can use the “I forgot my password” feature provided by the phpBB software. This process will ask you to submit your user name and your e-mail, then the phpBB software will generate a new password to reclaim your account.<br />
	',
));

// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'				=> 'Account เปิดใช้งานเรียบร้อยแล้ว. ขอบพระคุณที่ให้ความสนใจกับการเป็นสมาชิก.',
	'ACCOUNT_ACTIVE_ADMIN'			=> 'The account has now been activated.',
	'ACCOUNT_ACTIVE_PROFILE'		=> 'Your account has now been successfully reactivated.',
	'ACCOUNT_ADDED'					=> 'Thank you for registering, your account has been created. You may now login with your username and password.',
	'ACCOUNT_COPPA'					=> 'สร้างบัญชีของคุณเรียบร้อยแล้ว แต่คุณต้องทำการยืนยันบัญชีของคุณก่อน ตามวิธีที่แจ้งไว้ใน e-mail ของคุณ',
	'ACCOUNT_EMAIL_CHANGED'			=> 'บันทึกข้อมูลของคุณเรียบร้อยแล้ว แต่คุณต้องทำการยืนยันบัญชี ตามวิธีที่อยู่ใน e-mail อันใหม่ของคุณ',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'	=> 'บันทึกข้อมูลของคุณเรียบร้อยแล้ว แต่คุณจะต้องรอให้ผู้ดูแลบอร์ดทำการยืนยันบัญชีให้คุณ ซึ่งคุณจะได้รับแจ้งทาง e-mail เมื่อบัญชีของคุณได้รับการยืนยันแล้ว',
	'ACCOUNT_INACTIVE'				=> 'สร้างบัญชีของคุณเรียบร้อยแล้ว แต่คุณต้องทำการยืนยันบัญชีของคุณก่อน ตามวิธีที่แจ้งไว้ใน e-mail ของคุณ',
	'ACCOUNT_INACTIVE_ADMIN'		=> 'สร้างบัญชีของคุณเรียบร้อยแล้ว แต่คุณจะต้องรอให้ผู้ดูแลบอร์ดทำการยืนยันบัญชีให้คุณ ซึ่งคุณจะได้รับแจ้งทาง e-mail เมื่อบัญชีของคุณได้รับการยืนยันแล้ว',
	'ACCOUNT_INACTIVE_USER_ADMIN'		=> 'Your e-mail has been verified. Now the account needs to be activated by an administrator. Another activation e-mail has been sent to administrators e-mail addresses.',
	'ACTIVATION_EMAIL_SENT'			=> 'ส่งวิธีการยืนยันบัญชีไปที่ e-mail ของคุณเรียบร้อยแล้ว',
	'ADD'							=> 'เพิ่ม',
	'ADD_BCC'						=> 'เพิ่ม [BCC]',
	'ADD_FOES'						=> 'เพิ่มชื่อศัตรู',
	'ADD_FOES_EXPLAIN'				=> 'คุณสามารถเพิ่มทีละหลายรายชื่อได้ โดยให้พิมพ์ชื่อละบรรทัด',
	'ADD_FOLDER'					=> 'เพิ่มโฟลเดอร์',
	'ADD_FRIENDS'					=> 'เพิ่มชื่อเพื่อน',
	'ADD_FRIENDS_EXPLAIN'			=> 'คุณสามารถเพิ่มทีละหลายรายชื่อได้ โดยให้พิมพ์ชื่อละบรรทัด',
	'ADD_NEW_RULE'					=> 'เพิ่มกฎใหม่',
	'ADD_RULE'						=> 'เพิ่มกฎ',
	'ADD_TO'						=> 'เพิ่ม [ถึง]',
	'ADMIN_EMAIL'					=> 'ผู้ดูแลระบบสามารถส่ง e-mail มาได้',
	'AGREE'							=> 'ยอมรับเงื่อนไข',
	'ALLOW_PM'						=> 'อนุญาตให้ผู้อื่นส่งข้อความส่วนตัวมาหาได้',
	'ALLOW_PM_EXPLAIN'				=> 'Note that administrators and moderators will always be able to send you messages.',
	'ALREADY_ACTIVATED'				=> 'บัญชีของคุณได้รับการยืนยันมาก่อนแล้ว',
	'ATTACHMENTS_EXPLAIN'			=> 'รายการไฟล์แนบของคุณทั้งหมด',
	'ATTACHMENTS_DELETED'			=> 'ลบไฟล์แนบเรียบร้อยแล้ว',
	'ATTACHMENT_DELETED'			=> 'ลบไฟล์แนบเรียบร้อยแล้ว',
	'AVATAR_CATEGORY'				=> 'หมวดหมู่',
	'AVATAR_EXPLAIN'				=> 'ขนาดภาพใหญ่สุดคือ กว้าง %1$d pixel สูง %2$d pixel ขนาดไฟล์ %3$dkB',
	'AVATAR_FEATURES_DISABLED'		=> 'รูปภาพส่วนตัวถูกยกเลิกการใช้งาน',
	'AVATAR_GALLERY'				=> 'Local gallery',
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> 'ไม่สามารถอัปโหลดรูปประจำตัวไปยัง %s',
	'AVATAR_PAGE'					=> 'หน้า',

	'BACK_TO_DRAFTS'			=> 'กลับไปยังข้อความร่างที่บันทึกไว้',
	'BACK_TO_LOGIN'				=> 'กลับไปหน้าเข้าสู่ระบบ',
	'BIRTHDAY'					=> 'วันเกิด',
	'BIRTHDAY_EXPLAIN'			=> 'ถ้าคุณระบุปีที่เกิด ก็จะสามารถแสดงอายุของคุณได้',
	'BOARD_DATE_FORMAT'			=> 'รูปแบบวันที่',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'ให้ใช้ตามรูปแบบเดียวกับฟังก์ชัย <a href="http://www.php.net/date">date()</a> ของ PHP',
	'BOARD_DST'					=> 'Summer Time/<abbr title="Daylight Saving Time">DST</abbr> is in effect',
	'BOARD_LANGUAGE'			=> 'ภาษาที่ใช้งาน',
	'BOARD_STYLE'				=> 'รูปแบบของบอร์ด',
	'BOARD_TIMEZONE'			=> 'โซนเวลา',
	'BOOKMARKS'					=> 'รายการโปรด',
	'BOOKMARKS_EXPLAIN'			=> 'รายการด้านล่างเป็นรายการโปรดที่คุณได้เลือกไว้. คุณสามารถเลือกลบแต่ละรายการโปรดของคุณได้โดยติ๊กเครื่องหมายถูกหน้ารายการโปรดนั้น ๆ จากนั้นกดปุ่ม  "ลบรายการโปรดที่เลือกไว้"',
	'BOOKMARKS_DISABLED'		=> 'รายการโปรด ยังไม่เปิดใช้งานในบอร์ดนี้.',
	'BOOKMARKS_REMOVED'			=> 'ลบรายการโปรดเรียบร้อยแล้ว',

	'CANNOT_EDIT_MESSAGE_TIME'	=> 'คุณไม่สามารถลบหรือแก้ไขข้อความนี้ได้อีกต่อไปแล้ว',
	'CANNOT_MOVE_TO_SAME_FOLDER'=> 'ไม่สามารถย้ายข้อความไปยังโฟลเดอร์ที่กำลังจะถูกลบได้',
	'CANNOT_RENAME_FOLDER'		=> 'ไม่สามารถเปลี่ยนชื่อโฟลเดอร์นี้ได้',
	'CANNOT_REMOVE_FOLDER'		=> 'ไม่สามารถลบโฟลเดอร์นี้ได้',
	'CHANGE_DEFAULT_GROUP'		=> 'เปลี่ยนกลุ่มมาตรฐาน',
	'CHANGE_PASSWORD'			=> 'เปลี่ยนรหัสผ่าน',
	'CLICK_RETURN_FOLDER'		=> '%1$sกลับไปยังโฟลเดอร์ “%3$s”%2$s',
	'CONFIRMATION'				=> 'ยืนยันการสมัครสมาชิก',
	'CONFIRM_CHANGES'			=> 'ยืนยันการเปลี่ยนแปลง',	
	'CONFIRM_EMAIL'				=> 'ยืนยัน E-mail',
	'CONFIRM_EMAIL_EXPLAIN'		=> 'ถ้า คุณมีการเปลี่ยนแปลงอีเมล์ คุณต้องกรอกอีเมล์ยืนยันอีกครั้ง',
	'CONFIRM_EXPLAIN'			=> 'เพื่อป้องกันการสมัครสมาชิกด้วยโปรแกรมอัตโนมัติ คุณจำเป็นต้องพิมพ์รหัสยืนยันตามที่คุณเห็นในรูปภาพด้านล่างนี้ ถ้าคุณไม่สามารถอ่านรหัสด้านล่างนี้ได้ กรุณาติดต่อ %sBoard Administrator%s',
	'CONFIRM_PASSWORD'			=> 'ยืนยันรหัสผ่าน',
	'CONFIRM_PASSWORD_EXPLAIN'	=> 'ยืนยันรหัสผ่านใหม่อีกครั้ง',
	'COPPA_BIRTHDAY'			=> 'กรุณาเลือกวันเกิดของคุณ',
	'COPPA_COMPLIANCE'			=> 'COPPA compliance',
	'COPPA_EXPLAIN'				=> 'คลิกปุ่ม ส่ง เพื่อเริ่มสร้างบัญชีของคุณ<!--However it cannot be activated until a parent or guardian approves your registration. You will be emailed a copy of the necessary form with details of where to send it.-->',
	'CREATE_FOLDER'				=> 'เพิ่มโฟลเดอร์…',
	'CURRENT_IMAGE'				=> 'รูปภาพที่คุณใช้อยู่',
	'CURRENT_PASSWORD'			=> 'รหัสผ่านปัจจุบัน',
	'CURRENT_PASSWORD_EXPLAIN'	=> 'คุณต้องใส่รหัสผ่านปัจจุบันของคุณทุกครั้ง ที่มีการเปลี่ยนแปลง ยูสเซอร์เนม อีเมล์ และรหัสผ่าน',
	'CUR_PASSWORD_ERROR'		=> 'คุณใส่รหัสผ่านปัจจุบันไม่ถูกต้อง.',
	'CUSTOM_DATEFORMAT'			=> 'Custom…',

	'DEFAULT_ACTION'			=> 'Default action',
	'DEFAULT_ACTION_EXPLAIN'	=> 'This action will be triggered if none of the above is applicable.',
	'DEFAULT_ADD_SIG'			=> 'แนบลายเซ็น โดยให้เป็นค่าเริ่มต้น',
	'DEFAULT_BBCODE'			=> 'ใช้ BBCode โดยให้เป็นค่าเริ่มต้น',
	'DEFAULT_NOTIFY'			=> 'แจ้งเตือนเมื่อมีผู้ตอบ โดยให้เป็นค่าเริ่มต้น',
	'DEFAULT_SMILIES'			=> 'ใช้รูปแสดงอารมณ์ โดยให้เป็นค่าเริ่มต้น',
	'DEFINED_RULES'				=> 'กฎที่สร้างไว้',
	'DELETED_TOPIC'				=> 'ลบหัวข้อเรียบร้อยแล้ว',
	'DELETE_ATTACHMENT'			=> 'ลบไฟล์แนบ',
	'DELETE_ATTACHMENTS'		=> 'ลบไฟล์แนบ',
	'DELETE_ATTACHMENT_CONFIRM'	=> 'คุณแน่ใจที่จะลบไฟล์แนบนี้หรือ?',
	'DELETE_ATTACHMENTS_CONFIRM'=> 'คุณแน่ใจที่จะลบไฟล์แนบเหล่านี้หรือ?',
	'DELETE_AVATAR'				=> 'ลบรูปภาพนี้',
	'DELETE_COOKIES_CONFIRM'	=> 'คุณต้องการลบข้อมูล cookie ของบอร์ดหรือไม่?<br />(Cookie คือข้อมูลเกี่ยวกับบอร์ดที่ถูกเก็บไว้ในคอมพิวเตอร์ของคุณ ช่วยจดจำข้อมูลต่างๆ เช่น username, password)',
	'DELETE_MARKED_PM'			=> 'ลบข้อความที่เลือก',
	'DELETE_MARKED_PM_CONFIRM'	=> 'คุณแน่ใจที่จะลบข้อความที่เลือกไว้หรือ?',
	'DELETE_OLDEST_MESSAGES'	=> 'ลบข้อความที่เก่าที่สุด',
	'DELETE_MESSAGE'			=> 'ลบข้อความ',
	'DELETE_MESSAGE_CONFIRM'	=> 'คุณต้องการลบข้อความส่วนตัวนี้หรือไม่?',
	'DELETE_MESSAGES_IN_FOLDER'	=> 'ลบทุกข้อความที่อยู่ในโฟลเดอร์ที่ถูกลบ',
	'DELETE_RULE'				=> 'ลบกฎ',
	'DELETE_RULE_CONFIRM'		=> 'คุณแน่ใจที่จะลบกฎนี้หรือ?',
	'DEMOTE_SELECTED'			=> 'Demote selected',
	'DISABLE_CENSORS'			=> 'ใช้ระบบคำหวงห้าม',
	'DISPLAY_GALLERY'			=> 'Display gallery',
	'DOMAIN_NO_MX_RECORD_EMAIL'	=> 'ไม่มี MX record ที่ถูกต้องใน domain ของ e-mail นี้',
	'DOWNLOADS'					=> 'ดาวน์โหลด',
	'DRAFTS_DELETED'			=> 'ลบข้อความร่างที่เลือกเรียบร้อยแล้ว',
	'DRAFTS_EXPLAIN'			=> 'คุณสามารถ อ่าน, แก้ไข, และ ลบ ข้อความร่างที่คุณบันทึกไว้',
	'DRAFT_UPDATED'				=> 'บันทึกข้อความร่างเรียบร้อยแล้ว',

	'EDIT_DRAFT_EXPLAIN'		=> 'คุณสามารถแก้ไขข้อความร่างที่คุณบันทึกไว้ ข้อความร่างนี้ไม่สามารถเก็บไฟล์แนบ หรือข้อมูลแบบสำรวจ',
	'EMAIL_BANNED_EMAIL'		=> 'E-mail นี้ถูกห้ามใช้งาน',
	'EMAIL_INVALID_EMAIL'		=> 'คุณพิมพ์ e-mail ไม่ถูกต้อง',
	'EMAIL_REMIND'				=> 'This must be the e-mail address you supplied when registering.',
	'EMAIL_TAKEN_EMAIL'			=> 'อีเมล์ที่คุณใช้มีผู้ใช้งานแล้วโปรดระบุอีเมล์ใหม่',
	'EMPTY_DRAFT'				=> 'You must enter a message to submit your changes.',
	'EMPTY_DRAFT_TITLE'			=> 'You must enter a draft title.',
	'EXPORT_AS_XML'				=> 'ส่งออกเป็นไฟล์ XML',
	'EXPORT_AS_CSV'				=> 'ส่งออกเป็นไฟล์ CSV',
	'EXPORT_AS_CSV_EXCEL'		=> 'ส่งออกเป็นไฟล์ CSV (Excel)',
	'EXPORT_AS_TXT'				=> 'ส่งออกเป็นไฟล์TXT',
	'EXPORT_AS_MSG'				=> 'ส่งออกเป็นไฟล์ MSG',
	'EXPORT_FOLDER'				=> 'ส่งออกเป็นไฟล์ view',

	'FIELD_REQUIRED'					=> 'The field “%s” must be completed.',
	'FIELD_TOO_SHORT'					=> 'The field “%1$s” is too short, a minimum of %2$d characters is required.',
	'FIELD_TOO_LONG'					=> 'The field “%1$s” is too long, a maximum of %2$d characters is allowed.',
	'FIELD_TOO_SMALL'					=> 'The value of “%1$s” is too small, a minimum value of %2$d is required.',
	'FIELD_TOO_LARGE'					=> 'The value of “%1$s” is too large, a maximum value of %2$d is allowed.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> 'The field “%s” has invalid characters, only numbers are allowed.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> 'The field “%s” has invalid characters, only alphanumeric characters are allowed.',
	'FIELD_INVALID_CHARS_SPACERS_ONLY'	=> 'The field “%s” has invalid characters, only alphanumeric, space or -+_[] characters are allowed.',
	'FIELD_INVALID_DATE'				=> 'The field “%s” has an invalid date.',

	'FOE_MESSAGE'				=> 'ข้อความจากศัตรู',
	'FOES_EXPLAIN'				=> 'คุณจะไม่เห็นการกระทำของสมาชิกที่เป็นศัตรู เช่น ข้อความที่ศัตรูโพสต์ ข้อความส่วนตัวที่ศัตรูส่งมา แต่คุณจะยังคงเห็นข้อความของ ผู้ดูแล หรือ administrator อยู่',
	'FOES_UPDATED'				=> 'บันทึกรายชื่อศัตรูเรียบร้อยแล้ว',
	'FOLDER_ADDED'				=> 'เพิ่มโฟล์เดอร์เรียบร้อยแล้ว',
	'FOLDER_MESSAGE_STATUS'		=> '%1$d from %2$d messages stored',
	'FOLDER_NAME_EXIST'			=> 'โฟล์เดอร์ <strong>%s</strong> นี้มีอยู่แล้ว',
	'FOLDER_OPTIONS'			=> 'ปรับแต่งโฟล์เดอร์',
	'FOLDER_RENAMED'			=> 'เปลี่ยนชื่อโฟล์เดอร์เรียบร้อยแล้ว',
	'FOLDER_REMOVED'			=> 'ลบโฟล์เดอร์เรียบร้อยแล้ว',
	'FOLDER_STATUS_MSG'			=> 'ใช้งานพื้นที่ไปแล้ว %1$d%% (ในกล่องข้อความมี %2$d ข้อความ จุได้ทั้งหมด %3$d )',
	'FORWARD_PM'				=> 'PM ส่งต่อ',
	'FORCE_PASSWORD_EXPLAIN'	=> 'Before you may continue browsing the board you are required to change your password.',
	'FRIEND_MESSAGE'			=> 'ข้อความจากเพื่อน',
	'FRIENDS'					=> 'เพื่อน',
	'FRIENDS_EXPLAIN'			=> 'คุณจะสามารถติดต่อกับสมาชิกที่เป็นเพื่อนได้ง่ายขึ้น ถ้าหากรูปแบบที่คุณใช้อยู่สนับสนุนฟังก์ชันนี้ จะมีการทำแถบสีเน้นข้อความที่เป็นของเพื่อนคุณด้วย',
	'FRIENDS_OFFLINE'			=> 'ออฟไลน์',
	'FRIENDS_ONLINE'			=> 'ออนไลน์',
	'FRIENDS_UPDATED'			=> 'บันทึกรายชื่อเพื่อนเรียบร้อยแล้ว',
	'FULL_FOLDER_OPTION_CHANGED'=> 'The action to take when a folder is full has been changed successfully.',
	'FWD_ORIGINAL_MESSAGE'		=> '-------- ข้อความต้นฉบับ --------',
	'FWD_SUBJECT'				=> 'เรื่อง: %s',
	'FWD_DATE'					=> 'วันที่: %s',
	'FWD_FROM'					=> 'จาก: %s',
	'FWD_TO'					=> 'ถึง: %s',

	'GLOBAL_ANNOUNCEMENT'		=> 'Global announcement',

	'HIDE_ONLINE'				=> 'ซ่อนสถานะการออนไลน์ของฉัน',
	'HIDE_ONLINE_EXPLAIN'		=> 'Changing this setting won’t become effective until your next visit to the board.',
	'HOLD_NEW_MESSAGES'			=> 'Do not accept new messages (New messages will be held back until enough space is available)',
	'HOLD_NEW_MESSAGES_SHORT'	=> 'New messages will be held back',

	'IF_FOLDER_FULL'			=> 'If folder is full',
	'IMPORTANT_NEWS'			=> 'Important announcements',
	'INVALID_CHARS_USERNAME'	=> 'The username contains forbidden characters.',
	'INVALID_CHARS_NEW_PASSWORD'=> 'The password does not contain the required characters.',
	'ITEMS_REQUIRED'			=> 'The items marked with * are required profile fields and need to be filled out.',

	'JOIN_SELECTED'				=> 'Join selected',

	'LANGUAGE'					=> 'ภาษา',
	'LINK_REMOTE_AVATAR'		=> 'Link off-site',
	'LINK_REMOTE_AVATAR_EXPLAIN'=> 'Enter the URL of the location containing the avatar image you wish to link to.',
	'LINK_REMOTE_SIZE'			=> 'Avatar dimensions',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> 'Specify the width and height of the avatar, leave blank to attempt automatic verification.',
	'LOGIN_ACTIVATE'			=> 'Please login in order to activate the user account.',
	'LOGIN_EXPLAIN_UCP'			=> 'Please login in order to access the User Control Panel.',
	'LOGIN_REDIRECT'			=> 'เข้าสู่ระบบเรียบร้อยแล้ว',
	'LOGOUT_FAILED'				=> 'You were not logged out, as the request did not match your session. Please contact the board administrator if you continue to experience problems.',
	'LOGOUT_REDIRECT'			=> 'ออกจากระบบเรียบร้อยแล้ว',

	'MARK_IMPORTANT'				=> 'ตั้งเป็นว่า อ่านแล้ว หรือ ยังไม่ได้อ่าน',
	'MARKED_MESSAGE'				=> 'เลือกข้อความ',
	'MAX_FOLDER_REACHED'			=> 'Maximum number of allowed user defined folders reached.',
	'MESSAGE_BY_AUTHOR'				=> 'โดย',
	'MESSAGE_COLOURS'				=> 'สีข้อความ',
	'MESSAGE_DELETED'				=> 'ลบข้อความเรียบร้อยแล้ว',
	'MESSAGE_HISTORY'				=> 'Message history',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'This message has been removed by its author before it was delivered.',
	'MESSAGE_SENT_ON'				=> 'เมื่อ',
	'MESSAGE_STORED'				=> 'ข้อความถูกส่งไปเรียบร้อยแล้ว',
	'MESSAGE_TO'					=> 'ถึง',
	'MESSAGES_DELETED'				=> 'ลบข้อความเรียบร้อยแล้ว',
	'MOVE_DELETED_MESSAGES_TO'		=> 'Move messages from removed folder to',
	'MOVE_DOWN'						=> 'เลื่อนลง',
	'MOVE_MARKED_TO_FOLDER'			=> 'ย้ายที่เลือกไปยัง %s',
	'MOVE_PM_ERROR'					=> 'An error occurred while moving the messages to the new folder, only %1d from %2d messages were moved.',
	'MOVE_TO_FOLDER'				=> 'ย้ายไปยังโฟล์เดอร์',
	'MOVE_UP'						=> 'เลื่อนขึ้น',

	'NEW_EMAIL_ERROR'				=> 'อีเมล์ยืนยันไม่ตรงกัน โปรดตรวจสอบอีกครั้ง',
	'NEW_FOLDER_NAME'				=> 'ชื่อโฟล์เดอร์',
	'NEW_PASSWORD'					=> 'รหัสผ่านใหม่',
	'NEW_PASSWORD_ERROR'			=> 'รหัสผ่านยืนยัน ไม่ตรงกันโปรดตรวจสอบอีกครั้ง',
	'NOTIFY_METHOD'					=> 'Notification method',
	'NOTIFY_METHOD_BOTH'			=> 'Both',
	'NOTIFY_METHOD_EMAIL'			=> 'E-mail only',
	'NOTIFY_METHOD_EXPLAIN'			=> 'Method for sending messages sent via this board.',
	'NOTIFY_METHOD_IM'				=> 'Jabber only',
	'NOTIFY_ON_PM'					=> 'แจ้งเตือนเมื่อมีข้อความส่วนตัวมาใหม่',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> 'You cannot add the anonymous user to your friends list.',
	'NOT_ADDED_FRIENDS_FOES'		=> 'สมาชิกนี้อยู่ในรายชื่อของศัตรู ไม่สามารถเพิ่มในรายชื่อเพื่อนได้',
	'NOT_ADDED_FRIENDS_SELF'		=> 'คุณไม่สามารถเพิ่มชื่อของคุณ ลงในรายชื่อเพื่อนได้',
	'NOT_ADDED_FOES_MOD_ADMIN'		=> 'คุณไม่สามารถเพิ่มชื่อ ผู้ดูแล หรือ administrator ลงในรายชื่อศัตรูได้',
	'NOT_ADDED_FOES_ANONYMOUS'		=> 'You cannot add the anonymous user to your foes list.',
	'NOT_ADDED_FOES_FRIENDS'		=> 'สมาชิกนี้อยู่ในรายชื่อของเพื่อน ไม่สามารถเพิ่มในรายชื่อศัตรูได้',
	'NOT_ADDED_FOES_SELF'			=> 'คุณไม่สามารถเพิ่มชื่อของคุณ ลงในรายชื่อศัตรูได้',
	'NOT_AGREE'						=> 'ไม่ยอมรับเงื่อนไข',
	'NOT_ENOUGH_SPACE_FOLDER'		=> 'The destination folder “%s” seems to be full. The requested action has not been taken.',
	'NOT_MOVED_MESSAGE'				=> 'You have 1 private message currently on hold because of full folder.',
	'NOT_MOVED_MESSAGES'			=> 'You have %d private messages currently on hold because of full folder.',
	'NO_ACTION_MODE'				=> 'No message action specified.',
	'NO_AUTHOR'						=> 'No author defined for this message',
	'NO_AVATAR_CATEGORY'			=> 'None',

	'NO_AUTH_DELETE_MESSAGE'		=> 'You are not authorised to delete private messages.',
	'NO_AUTH_EDIT_MESSAGE'			=> 'You are not authorised to edit private messages.',
	'NO_AUTH_FORWARD_MESSAGE'		=> 'You are not authorised to forward private messages.',
	'NO_AUTH_GROUP_MESSAGE'			=> 'You are not authorised to send private messages to groups.',
	'NO_AUTH_READ_MESSAGE'			=> 'You are not authorised to read private messages.',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> 'You are not able to read this message because it was removed by the author.',
	'NO_AUTH_SEND_MESSAGE'			=> 'You are not authorised sending private messages.',
	'NO_AUTH_SIGNATURE'				=> 'You are not authorised to define a signature.',

	'NO_BCC_RECIPIENT'			=> 'None',
	'NO_BOOKMARKS'				=> 'คุณไม่มีรายการโปรด',
	'NO_BOOKMARKS_SELECTED'		=> 'You have selected no bookmarks.',
	'NO_EMAIL_USER'				=> 'The e-mail/username information submitted could not be found.',
	'NO_FOES'					=> 'ไม่มีรายชื่อศัตรู',
	'NO_FRIENDS'				=> 'ไม่มีรายชื่อเพื่อน',
	'NO_FRIENDS_OFFLINE'		=> 'ไม่พบเพื่อนออฟไลน์',
	'NO_FRIENDS_ONLINE'			=> 'ไม่พบเพื่อนออนไลน์',
	'NO_GROUP_SELECTED'			=> 'No group specified.',
	'NO_IMPORTANT_NEWS'			=> 'No important announcements present.',
	'NO_MESSAGE'				=> 'Private message could not be found.',
	'NO_NEW_FOLDER_NAME'		=> 'You have to specify a new folder name.',
	'NO_NEWER_PM'				=> 'No newer messages.',
	'NO_OLDER_PM'				=> 'No older messages.',
	'NO_PASSWORD_SUPPLIED'		=> 'โปรดระบุยูสเซอร์เนม และ รหัสผ่าน.',
	'NO_RECIPIENT'				=> 'No recipient defined.',
	'NO_RULES_DEFINED'			=> 'No rules defined.',
	'NO_SAVED_DRAFTS'			=> 'No drafts saved.',
	'NO_TO_RECIPIENT'			=> 'None',
	'NO_WATCHED_FORUMS'			=> 'You are not watching any forums.',
	'NO_WATCHED_TOPICS'			=> 'You are not watching any topics.',

	'PASS_TYPE_ALPHA_EXPLAIN'	=> 'Password มีความยาว %1$d ถึง %2$d ตัวอักษร จะต้องใช้ทั้งตัวอักษรเล็ก, ใหญ่, และ ตัวเลข ผสมกัน',
	'PASS_TYPE_ANY_EXPLAIN'		=> 'ความยาว %1$d ถึง %2$d ตัวอักษร',
	'PASS_TYPE_CASE_EXPLAIN'	=> 'Password must be between %1$d and %2$d characters long and must contain letters in mixed case.',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> 'Password must be between %1$d and %2$d characters long, must contain letters in mixed case, must contain numbers and must contain symbols.',
	'PASSWORD'					=> 'รหัสผ่าน',
	'PASSWORD_ACTIVATED'		=> 'Your new password has been activated.',
	'PASSWORD_UPDATED'			=> 'Your password has been sent successfully to your original e-mail address.',
	'PERMISSIONS_RESTORED'		=> 'Successfully restored original permissions.',
	'PERMISSIONS_TRANSFERRED'	=> 'Successfully transferred permissions from <strong>%s</strong>, you are now able to browse the board with this user’s permissions.<br />Please note that admin permissions were not transferred. You are able to revert to your permission set at any time.',
	'PM_DISABLED'				=> 'Private messaging has been disabled on this board.',
	'PM_FROM'					=> 'จาก',
	'PM_FROM_REMOVED_AUTHOR'	=> 'This message was sent by a user no longer registered.',
	'PM_ICON'					=> 'PM ไอคอน',
	'PM_INBOX'					=> 'ส่งขาเข้า',
	'PM_NO_USERS'				=> 'The requested users to be added do not exist.',
	'PM_OUTBOX'					=> 'กล่องขาออก',
	'PM_SENTBOX'				=> 'ส่งข้อความ',
	'PM_SUBJECT'				=> 'เรื่องข้อความที่จะส่ง',
	'PM_TO'						=> 'ส่งถึง',
	'PM_USERS_REMOVED_NO_PM'	=> 'Some users couldn’t be added as they have disabled private message receipt.',
	'POPUP_ON_PM'				=> 'แสดงหน้าต่าง Pop up ถ้ามีข้อความส่งมาใหม่',
	'POST_EDIT_PM'				=> 'แก้ไขข้อความ',
	'POST_FORWARD_PM'			=> 'ส่งต่อข้อความ',
	'POST_NEW_PM'				=> 'เขียนข้อความ',
	'POST_PM_LOCKED'			=> 'Private messaging is locked',
	'POST_PM_POST'				=> 'โพสต์ใส่คำพูด',
	'POST_QUOTE_PM'				=> 'ข้อความใส่คำพูด',
	'POST_REPLY_PM'				=> 'ตอบกลับข้อความ',
	'PRINT_PM'					=> 'ตัวอย่างการพิมพ์',
	'PREFERENCES_UPDATED'		=> 'Your preferences have been updated.',
	'PROFILE_INFO_NOTICE'		=> 'ข้อมูลเหล่านี้จะสามารถอ่านได้โดยสมาชิกท่านอื่น กรุณาระมัดระวังข้อมูลที่เป็นส่วนตัว และจะต้องกรอกทุกช่องที่มีเครื่องหมาย *',
	'PROFILE_UPDATED'			=> 'บันทึกข้อมูลส่วนตัวของคุณเรียบร้อยแล้ว โปรดรอสักครู่..',

	'RECIPIENT'							=> 'ผู้รับ',
	'RECIPIENTS'						=> 'ผู้รับ',
	'REGISTRATION'						=> 'สมัครสมาชิก',
	'RELEASE_MESSAGES'					=> '%sRelease all on-hold messages%s… they will be re-sorted into the appropriate folder if enough space is made available.',
	'REMOVE_ADDRESS'					=> 'ลบที่อยู่',
	'REMOVE_SELECTED_BOOKMARKS'			=> 'ลบรายการโปรดที่เลือกไว้',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'	=> 'คุณแน่ใจหรือยังว่าต้องการลบรายการโปรดทั้งหมดที่เลือกไว้?',
	'REMOVE_BOOKMARK_MARKED'			=> 'ลบรายการโปรดที่เลือกไว้',
	'REMOVE_FOLDER'						=> 'ลบโฟล์เดอร์',
	'REMOVE_FOLDER_CONFIRM'				=> 'คุณแน่ใจหรือยังว่าต้องการลบโฟล์เดอร์นี้?',
	'RENAME'							=> 'เปลี่ยนชื่อ',
	'RENAME_FOLDER'						=> 'เปลี่ยนชื่อโฟล์เดอร์',
	'REPLIED_MESSAGE'					=> 'ข้อความที่ตอบกลับ',
	'RESIGN_SELECTED'					=> 'Resign selected',
	'RETURN_FOLDER'						=> '%1$sReturn to previous folder%2$s',
	'RETURN_UCP'						=> '%sReturn to the User Control Panel%s',
	'RULE_ADDED'						=> 'Rule successfully added.',
	'RULE_ALREADY_DEFINED'				=> 'This rule was defined previously.',
	'RULE_DELETED'						=> 'Rule successfully removed.',
	'RULE_NOT_DEFINED'					=> 'Rule not correctly specified.',
	'RULE_REMOVED_MESSAGE'				=> 'One private message had been removed due to private message filters.',
	'RULE_REMOVED_MESSAGES'				=> '%d private messages were removed due to private message filters.',

	'SAME_PASSWORD_ERROR'		=> 'The new password you entered is the same as your current password.',
	'SEARCH_YOUR_POSTS'			=> 'แสดงโพลต์ของคุณ',
	'SEND_PASSWORD'				=> 'ส่งรหัสผ่าน',
	'SENT_AT'					=> 'Sent at',
	'SHOW_EMAIL'				=> 'สมาชิกท่านอื่นสามารถติดต่อฉันได้ทางอีเมล์',
	'SIGNATURE_EXPLAIN'			=> 'คุณสามารถปรับเปลี่ยน แก้ไขลายเซ็นต์ของคุณได้ที่นี่ ลายเซ็นต์นี้จะแสดงด้านล่างโพสทุกโพสของคุณ (ถ้าคุณได้ตั้งค่าให้ลายเซ็นต์แสดง). ลายเซ็นต์ไม่ควรเกิน %d ตัวอักษร.',
	'SIGNATURE_PREVIEW'			=> 'Your signature will appear like this in posts',
	'SIGNATURE_TOO_LONG'		=> 'Your signature is too long.',
	'SORT'						=> 'Sort',
	'SORT_COMMENT'				=> 'File comment',
	'SORT_DOWNLOADS'			=> 'ดาวน์โหลด',
	'SORT_EXTENSION'			=> 'Extension',
	'SORT_FILENAME'				=> 'ชื่อไฟล์',
	'SORT_POST_TIME'			=> 'โพสต์เมื่อ',
	'SORT_SIZE'					=> 'ขนาดไฟล์',

	'TIMEZONE'					=> 'โซนเวลา',
	'TO'						=> 'ถึง',
	'TOO_MANY_RECIPIENTS'		=> 'Too many recipients.',
	'TOO_MANY_REGISTERS'		=> 'You have exceeded the maximum number of registration attempts for this session. Please try again later.',

	'UCP'						=> 'ตั้งค่าส่วนตัวสมาชิก',
	'UCP_ACTIVATE'				=> 'Activate account',
	'UCP_ADMIN_ACTIVATE'		=> 'Please note that you will need to enter a valid e-mail address before your account is activated. The administrator will review your account and if approved you will receive an e-mail at the address you specified.',
	'UCP_AIM'					=> 'AOL Instant Messenger',
	'UCP_ATTACHMENTS'			=> 'แนบไฟล์',
	'UCP_COPPA_BEFORE'			=> 'ก่อน %s',
	'UCP_COPPA_ON_AFTER'		=> 'วันนี้ หรือ หลัง %s',
	'UCP_EMAIL_ACTIVATE'		=> 'Please note that you will need to enter a valid e-mail address before your account is activated. You will receive an e-mail at the address you provide that contains an account activation link.',
	'UCP_ICQ'					=> 'หมายเลข ICQ',
	'UCP_JABBER'				=> 'Jabber address',

	'UCP_MAIN'					=> 'แสดงรายการหลัก',
	'UCP_MAIN_ATTACHMENTS'		=> 'จัดการไฟล์แนบ',
	'UCP_MAIN_BOOKMARKS'		=> 'จัดการรายการโปรด',
	'UCP_MAIN_DRAFTS'			=> 'จัดการหัวข้อที่บันทึกไว้',
	'UCP_MAIN_FRONT'			=> 'รายการหลัก',
	'UCP_MAIN_SUBSCRIBED'		=> 'จัดการข่าวสารที่เลือกรับ',

	'UCP_MSNM'					=> 'MSN Messenger',
	'UCP_NO_ATTACHMENTS'		=> 'You have posted no files.',

	'UCP_PREFS'					=> 'ตั้งค่าบอร์ด',
	'UCP_PREFS_PERSONAL'		=> 'ตั้งค่าทั่วไป',
	'UCP_PREFS_POST'			=> 'ตั้งค่าการโพสต์',
	'UCP_PREFS_VIEW'			=> 'ตั้งค่าการแสดงผล',
	
	'UCP_PM'					=> 'ข้อความส่วนตัว',
	'UCP_PM_COMPOSE'			=> 'เขียนข้อความ',
	'UCP_PM_DRAFTS'				=> 'จัดการข้อความที่บันทึกค้างไว้',
	'UCP_PM_OPTIONS'			=> 'Rules, folders &amp; settings',
	'UCP_PM_POPUP'				=> 'Private messages',
	'UCP_PM_POPUP_TITLE'		=> 'Private message popup',
	'UCP_PM_UNREAD'				=> 'ข้อความที่ยังไม่ได้อ่าน',
	'UCP_PM_VIEW'				=> 'แสดงข้อความ',

	'UCP_PROFILE'				=> 'ข้อมูลสมาชิก',
	'UCP_PROFILE_AVATAR'		=> 'แก้ไขรูปประจำตัว',
	'UCP_PROFILE_PROFILE_INFO'	=> 'แก้ไขข้อมูลส่วนตัว',
	'UCP_PROFILE_REG_DETAILS'	=> 'แก้ไขข้อมูลเข้าระบบ',
	'UCP_PROFILE_SIGNATURE'		=> 'แก้ไขลายเซ็นต์',

	'UCP_USERGROUPS'			=> 'กลุ่มสมาชิก',
	'UCP_USERGROUPS_MEMBER'		=> 'เปลี่ยนกลุ่มสมาชิก',
	'UCP_USERGROUPS_MANAGE'		=> 'จัดการกลุ่ม',

	'UCP_REGISTER_DISABLE'			=> 'Creating a new account is currently not possible.',
	'UCP_REMIND'					=> 'Send password',
	'UCP_RESEND'					=> 'Send activation e-mail',
	'UCP_WELCOME'					=> 'ยินดีต้อนรับเข้าสู่ส่วนการตั้งค่าสมาชิก. คุณสามารถตั้งค่าต่าง ๆ ของคุณจากเมนูนี้, ดูและอัปเดทข้อมูลส่วนตัว, ตั้งค่าการแสดงผลฟอรั่ม, รับ-ยกเลิก รับข่าวสารฟอรั่มและกระทู้. ส่งข้อความส่วนตัวไปยังสมาชิกท่านอื่น ๆ  (ถ้ามีการเปิดสิทธินั้นจาก Admin). หากคุณพร้อมแล้วก็สามารถเลือกและดำเนินการต่อไปได้เลย',
	'UCP_YIM'						=> 'Yahoo Messenger',
	'UCP_ZEBRA'						=> 'เพื่อนและศัตรู',
	'UCP_ZEBRA_FOES'				=> 'รายชื่อศัตรู',
	'UCP_ZEBRA_FRIENDS'				=> 'รายชื่อเพื่อน',
	'UNKNOWN_FOLDER'				=> 'Unknown folder',
	'UNWATCH_MARKED'				=> 'Unwatch marked',
	'UPLOAD_AVATAR_FILE'			=> 'เลือกรูปจากเครื่องคุณ',
	'UPLOAD_AVATAR_URL'				=> 'เลือกใส่้รูปด้วย URL',
	'UPLOAD_AVATAR_URL_EXPLAIN'		=> 'คุณสามารถนำ URL ของรูปภาพจากเว็บที่ไหนมาใส่ก็ได้เช่นกัน',
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> 'ยูสเซอร์เนม ควรอยู่ระหว่าง %1$d และไม่เกิน %2$d ตัวอักษรและใช้อักษรภาษาอังกฤษเท่านั้น',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'=> 'ยูสเซอร์เนม ควรอยู่ระหว่าง %1$d และไม่เกิน %2$d ตัวอักษรและสามารถใชภาษาอังกฤษ เว้นวรรค หรือ -+_[]',
	'USERNAME_ASCII_EXPLAIN'		=> 'ยูสเซอร์เนม ควรอยู่ระหว่าง %1$d และไม่เกิน %2$d ตัวอักษร และใช้ได้เฉพาะตัวอักษร ASCII.',
	'USERNAME_LETTER_NUM_EXPLAIN'	=> 'ยูสเซอร์เนม ควรอยู่ระหว่าง %1$d และไม่เกิน %2$d ตัวอักษร และสามารถใช้ตัวเลขร่วมได้',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'=> 'ยูสเซอร์เนม ควรอยู่ระหว่าง %1$d และไม่เกิน %2$d ตัวอักษร and use letter, number, space or -+_[] characters.',
	'USERNAME_CHARS_ANY_EXPLAIN'	=> 'ยูสเซอร์เนม ควรอยู่ระหว่าง %1$d และไม่เกิน %2$d ตัวอักษร.',
	'USERNAME_TAKEN_USERNAME'		=> 'ยูสเซอร์เนม นี้ถูกสมาชิกท่านอื่นใช้ไปแล้ว กรุณาเปลี่ยน ยูสเซอร์เนม ใหม่',
	'USERNAME_DISALLOWED_USERNAME'	=> 'ยูสเซอร์เนม นี้ถูกระงับไม่ให้ใช้งาน หรือมีข้อความที่ไม่ให้ใช้งาน กรุณาเปลี่ยน ยูสเซอร์เนม ใหม่',
	'USER_NOT_FOUND_OR_INACTIVE'	=> 'ไม่พบ ยูสเซอร์เนม นี้ หรือ ยูสเซอร์เนม นี้อาจยังไม่พร้อมใช้งาน',

	'VIEW_AVATARS'				=> 'แสดงรูปส่วนตัว',
	'VIEW_EDIT'					=> 'แสดง/แก้ไข',
	'VIEW_FLASH'				=> 'แสดงภาพ Flash',
	'VIEW_IMAGES'				=> 'แสดงรูปภาพพร้อมโพสต์',
	'VIEW_NEXT_HISTORY'			=> 'Next PM in history',
	'VIEW_NEXT_PM'				=> 'Next PM',
	'VIEW_PM'					=> 'แสดงข้อความ',
	'VIEW_PM_INFO'				=> 'Message details',
	'VIEW_PM_MESSAGE'			=> '1 ข้อความ',
	'VIEW_PM_MESSAGES'			=> '%d ข้อความ',
	'VIEW_PREVIOUS_HISTORY'		=> 'Previous PM in history',
	'VIEW_PREVIOUS_PM'			=> 'Previous PM',
	'VIEW_SIGS'					=> 'แสดงลายเซ็นต์',
	'VIEW_SMILIES'				=> 'Display smilies as images',
	'VIEW_TOPICS_DAYS'			=> 'Display topics from previous days',
	'VIEW_TOPICS_DIR'			=> 'Display topic order direction',
	'VIEW_TOPICS_KEY'			=> 'Display topics ordering by',
	'VIEW_POSTS_DAYS'			=> 'Display posts from previous days',
	'VIEW_POSTS_DIR'			=> 'Display post order direction',
	'VIEW_POSTS_KEY'			=> 'Display posts ordering by',

	'WATCHED_EXPLAIN'			=> 'Below is a list of forums and topics you are subscribed to. You will be notified of new posts in either. To unsubscribe mark the forum or topic and then press the <em>Unwatch marked</em> button.',
	'WATCHED_FORUMS'			=> 'Watched forums',
	'WATCHED_TOPICS'			=> 'Watched topics',
	'WRONG_ACTIVATION'			=> 'The activation key you supplied does not match any in the database.',
	'WRONG_USER'				=> 'Your account manually has to be activated by an administrator. The administrators are informed about this automatically.',


	'YOUR_DETAILS'				=> 'ข้อมูลของท่าน',
	'YOUR_FOES'					=> 'รายชื่อศัตรู',
	'YOUR_FOES_EXPLAIN'			=> 'ถ้าต้องการลบ ให้คลิกที่ชื่อสมาชิก แล้วคลิกปุ่ม ส่ง',
	'YOUR_FRIENDS'				=> 'รายชื่อเพื่อน',
	'YOUR_FRIENDS_EXPLAIN'		=> 'ถ้าต้องการลบ ให้คลิกที่ชื่อสมาชิก แล้วคลิกปุ่ม ส่ง',
	'YOUR_WARNINGS'				=> 'ระดับการเตือนของคุณ',

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER'	=> 'Place into folder',
		'MARK_AS_READ'		=> 'Mark as read',
		'MARK_AS_IMPORTANT'	=> 'Mark message',
		'DELETE_MESSAGE'	=> 'ลบข้อความ'
	),
	'PM_CHECK' => array(
		'SUBJECT'	=> 'หัวข้อ',
		'SENDER'	=> 'ผู้ส่ง',
		'MESSAGE'	=> 'ข้อความ',
		'STATUS'	=> 'สถานะข้อความ',
		'TO'		=> 'ส่งให้กับ'
	),
	'PM_RULE' => array(
		'IS_LIKE'		=> 'is like',
		'IS_NOT_LIKE'	=> 'is not like',
		'IS'			=> 'is',
		'IS_NOT'		=> 'is not',
		'BEGINS_WITH'	=> 'begins with',
		'ENDS_WITH'		=> 'ends with',
		'IS_FRIEND'		=> 'is friend',
		'IS_FOE'		=> 'is foe',
		'IS_USER'		=> 'is user',
		'IS_GROUP'		=> 'is in usergroup',
		'ANSWERED'		=> 'answered',
		'FORWARDED'		=> 'forwarded',
		'TO_GROUP'		=> 'to my default usergroup',
		'TO_ME'			=> 'to me'
	),


	'GROUPS_EXPLAIN'	=> 'Usergroups enable board admins to better administer users. By default you will be placed in a specific group, this is your default group. This group defines how you may appear to other users, for example your username colouration, avatar, rank, etc. Depending on whether the administrator allows it you may be allowed to change your default group. You may also be placed in or allowed to join other groups. Some groups may give you additional permissions to view content or increase your capabilities in other areas.',
	'GROUP_LEADER'		=> 'Leaderships',
	'GROUP_MEMBER'		=> 'Memberships',
	'GROUP_PENDING'		=> 'Pending memberships',
	'GROUP_NONMEMBER'	=> 'Non-memberships',
	'GROUP_DETAILS'		=> 'รายละเอียดกลุ่ม',

	'NO_LEADER'		=> 'No group leaderships',
	'NO_MEMBER'		=> 'No group memberships',
	'NO_PENDING'	=> 'No pending memberships',
	'NO_NONMEMBER'	=> 'No non-member groups',
));

?>