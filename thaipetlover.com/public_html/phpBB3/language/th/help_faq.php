<?php
/** 
*
* help_faq [Thai]
*
* ภาษาไทยสำหรับ phpBB3 โดย www.phpb3thai.com และ www.thaipostza.com
*
* วันที่ 21/03/2551
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
*/

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

$help = array(
	array(
		0 => '--',
		1 => 'การเข้าสู่ระบบ และ การสมัครสมาชิก'
	),
	array(
		0 => 'ทำไมเข้าสู่ระบบไม่ได้ ?',
		1 => '&nbsp;&nbsp; 1.คุณได้ทำการสมัครสมาชิกแล้วหรือยัง? คุณต้องสมัครสมาชิกก่อน แล้วจึงสามารถเข้าสู่ระบบได้.
<br/>&nbsp;&nbsp; 2.คุณถูกหวงห้ามไม่ให้เข้าสู่บอร์ดหรือไม่(จะมีข้อความบอกไว้)? ถ้าเป็นเช่นนั้น คุณควรติดต่อ webmaster หรือ administrator ของบอร์ด เพื่อขอทราบเหตุผล.
<br/>&nbsp;&nbsp; 3.ถ้าคุณได้ทำการสมัครสมาชิกแล้ว และไม่ได้ถูกหวงห้าม และคุณยังไม่สามารถเข้าสู่ระบบได้ กรุณาตรวจสอบ username และ password ให้ถูกต้อง.
<br/>&nbsp;&nbsp; 4.ถ้ายังเข้าสู่ระบบไม่ได้อีก กรุณาติดต่อ administrator ของบอร์ด ว่าอาจมีการตั้งค่าที่ไม่ถูกต้องเกิดขึ้นในบอร์ด.'
	),
	array(
		0 => 'จำเป็นต้องสมัครสมาชิกด้วยหรือ?',
		1 => '&nbsp;&nbsp; บางทีอาจไม่จำเป็น ขึ้นอยู่กับ administrator ของบอร์ดจะกำหนดไว้ว่า คุณต้องสมัครสมาชิกก่อนเพื่อโพสต์ข้อความ
   อย่างไรก็ตาม การสมัครสมาชิกจะทำให้คุณสามารถใช้คุณลักษณะเพิ่มเติม ที่ไม่มีให้ใช้ในผู้เยี่ยมชม เช่น การใช้รูปประจำตัว, ข้อความส่วนตัว, ส่ง email ให้ผู้ใช้อื่น, การสมัครเข้าร่วมกลุ่มผู้ใช้ ฯลฯ.การสมัครสมาชิกใช้เวลาเพียงเล็กน้อย ดังนั้นจึงแนะนำให้คุณควรทำการสมัครสมาชิก.'
	),
	array(
		0 => 'ทำไมฉันถึงออกจากระบบโดยอัตโนมัติ?',
		1 => '&nbsp;&nbsp; ถ้าคุณไม่ได้กาถูกหน้า เข้าสู่ระบบโดยอัตโนมัติ ขณะกำลังจะเข้าสู่ระบบ บอร์ดจะยอมให้คุณเข้าสู่ระบบเฉพาะขณะนั้น เพื่อป้องกันไม่ให้คนอื่นเข้ามาใช้ชื่อบัญชีของคุณ.ไม่แนะนำให้คุณเลือกเข้าสู่ระบบโดยอัตโนมัติ ถ้าคุณใช้คอมพิวเตอร์ร่วมกับผู้อื่น เช่น ในห้องสมุด, internet cafe, มหาวิทยาลัย, ฯลฯ'
	),
	array(
		0 => 'จะสั่งไม่ให้แสดงชื่อของฉัน ในรายชื่อผู้ที่กำลัง online ได้อย่างไร? ',
		1 => '&nbsp;&nbsp; ในข้อมูลส่วนตัวของคุณ คุณจะพบตัวเลือก ซ่อนสถานะการ online ของคุณ. ถ้าคุณเลือก ใช่ รายชื่อของคุณจะปรากฏให้คุณและ administrator ของบอร์ด เห็นเท่านั้น และคุณจะถูกนับเป็นผู้ใช้ที่ถูกซ่อน.'
	),
	array(
		0 => 'ฉันลืม password!',
		1 => '&nbsp;&nbsp; อย่าเพิ่งตกใจ! ถ้าคุณลืม password จริงๆ คุณสามารถขออันใหม่ได้. ให้ไปที่หน้าสำหรับเข้าสู่ระบบ แล้วคลิก ลืม password แล้วทำตามขั้นตอนไปเรื่อยๆ'
	),
	array(
		0 => 'สมัครสมาชิกแล้ว แต่เข้าสู่ระบบไม่ได้!',
		1 => '&nbsp;&nbsp; 1.ให้ตรวจสอบว่าคุณกรอก username และ password ที่ถูกต้อง.
   <br/>&nbsp;&nbsp; 2.ถ้าคุณกรอกถูกแล้ว อาจเกิดจากหนึ่งในสองสาเหตุนี้.
   - ถ้าระบบสนับสนุน COPPA ได้ถูกใช้งาน และคุณคลิกที่ลิงค์ ฉันอายุต่ำกว่า 13 ปี ขณะที่คุณกำลังสมัครสมาชิก คุณจะต้องทำตามขั้นตอนที่คุณได้รับ.
   - อาจเป็นเพราะชื่อบัญชีของคุณยังไม่ได้รับการยืนยัน บางบอร์ดจะต้องมีการยืนยันชื่อบัญชีหลังทำการสมัครสมาชิก ทั้งโดยตัวคุณเอง หรือโดย administrator คุณจึงจะสามารถเข้าสู่ระบบได้. เมื่อคุณสมัครสมาชิก ระบบจะบอกคุณเองว่าต้องทำการยืนยันชื่อบัญชีหรือไม่. ถ้าคุณได้รับ email ก็ให้ทำตามขั้นตอนในนั้น, ถ้าคุณไม่ได้รับ e-mail คุณแน่ใจหรือว่า email ที่คุณกรอกนั้นถูกต้อง? เหตุผลเดียวที่ต้องทำการยืนยันชื่อบัญชีคือ เพื่อลดการปลอมแปลงตัวเข้ามาสู่บอร์ด. ถ้าคุณแน่ใจว่า email นั้นถูกต้อง กรุณาติดต่อ administrator ของบอร์ด.'
	),
	array(
		0 => 'ฉันเคยเข้าสู่ระบบได้ แต่ตอนนี้กลับเข้าไม่ได้?!',
		1 => '&nbsp;&nbsp; สาเหตุส่วนมากคือ
   <br/>&nbsp;&nbsp; 1.คุณป้อน username หรือ password ผิด (กรุณากลับไปตรวจสอบ email ที่คุณได้รับเมื่อคุณสมัครสมาชิก)
   <br/>&nbsp;&nbsp; 2.Administrator ได้ลบชื่อบัญชีของคุณด้วยสาเหตุบางประการ อาจเพราะคุณไม่ได้โพสต์อะไรเลย เป็นเหตุการณ์ปรกติที่จะมีการลบผู้ใช้ที่ไม่ได้โพสต์อะไรเลย เพื่อลดขนาดของฐานข้อมูล. กรุณาลองสมัครสมาชิกอีกครั้ง แล้วถามถึงสาเหตุดู.'
	),
	array(
		0 => 'What is COPPA?',
		1 => '&nbsp;&nbsp; COPPA, or the Child Online Privacy and Protection Act of 1998, is a law in the United States requiring websites which can potentially collect information from minors under the age of 13 to have written parental consent or some other method of legal guardian acknowledgment, allowing the collection of personally identifiable information from a minor under the age of 13. If you are unsure if this applies to you as someone trying to register or to the website you are trying to register on, contact legal counsel for assistance. Please note that the phpBB Group cannot provide legal advice and is not a point of contact for legal concerns of any kind, except as outlined below.',
	),
	array(
		0 => 'Why can’t I register?',
		1 => '&nbsp;&nbsp; It is possible the website owner has banned your IP address or disallowed the username you are attempting to register. The website owner could have also disabled registration to prevent new visitors from signing up. Contact a board administrator for assistance.',
	),
	array(
		0 => 'What does the “Delete all board cookies” do?',
		1 => '&nbsp;&nbsp; “Delete all board cookies”deletes the cookies created by phpBB which keep you authenticated and logged into the board. It also provides functions such as read tracking if they have been enabled by the board owner. If you are having login or logout problems, deleting board cookies may help.',
	),
	array(
		0 => '--',
		1 => 'ตั้งค่าสมาชิก และ ตั้งค่าต่าง ๆ'
	),
	array(
		0 => 'จะเปลี่ยนแปลงการตั้งค่าได้อย่างไร?',
		1 => '&nbsp;&nbsp; การตั้งค่าทั้งหมดของคุณ (ถ้าคุณได้สมัครสมาชิกแล้ว) จะเก็บไว้ในฐานข้อมูล. ถ้าต้องการเปลี่ยนแปลง ให้คลิกที่ลิงค์ ข้อมูลส่วนตัว (โดยมากจะอยู่ด้านบนของหน้า). ซึ่งจะอนุญาตให้คุณเปลี่ยนแปลงค่าต่างๆ'
	),
	array(
		0 => 'นาฬิกาไม่ตรง!',
		1 => '&nbsp;&nbsp; นาฬิกาในบอร์ด อาจไม่ตรงกับนาฬิกาในประเทศของคุณ ซึ่งคุณควรทำการปรับเวลา โดยเข้าไปแก้ไขการตั้งค่า timezone ในข้อมูลส่วนตัวของคุณ. การแก้ไข timezone จะใช้ได้กับผู้ใช้ที่สมัครสมาชิกแล้วเท่านั้น ถ้าคุณยังไม่ได้สมัครสมาชิก เป็นการดีที่คุณควรจะทำ ก่อนที่คุณจะคำนวณเวลาผิด!'
	),
	array(
		0 => 'เปลี่ยน timezone แล้ว แต่นาฬิกาก็ยังไม่ตรง!',
		1 => '&nbsp;&nbsp; ถ้าคุณแน่ใจว่าเลือก timezone ถูกต้องแล้ว แต่นาฬิกาก็ยังไม่ตรง อาจเป็นเพราะ daylight savings time (หรือ summer time ซึ่งจะรู้จักดีใน UK และที่อื่นๆ). บอร์ดไม่ได้ถูกออกแบบมาเพื่อรองรับการเปลี่ยนระหว่างนาฬิกาปรกติและ daylight time ดังนั้นทุกเดือนของฤดูร้อน นาฬิกาในบอร์ดอาจผิดพลาดไปจากนาฬิกาของคุณประมาณ 1 ชั่วโมง.'
	),
	array(
		0 => 'ภาษาที่ฉันใช้ ไม่ได้อยู่ในรายการให้เลือก!',
		1 => '&nbsp;&nbsp; สาเหตุอาจเกิดจาก administrator ไม่ได้ติดตั้งภาษาของคุณ หรือยังไม่มีการแปลบอร์ดให้เป็นภาษาของคุณ. ลองถาม administrator ของบอร์ดดู เผื่อเขาอาจติดตั้งภาษาที่คุณต้องการได้ ถ้ายังไม่พบภาษาให้ติดตั้ง คุณสามารถแปลด้วยตัวเองได้. คุณจะพบข้อมูลเพิ่มเติมที่เว็บของ phpBB Group (จะเห็นลิงค์ที่ด้านล่างของหน้า)'
	),
	array(
		0 => 'จะแสดงรูปภาพด้านล่าง username อย่างไร?',
		1 => '&nbsp;&nbsp; มีรูปภาพ 2 อย่างที่จะแสดงอยู่ใต้ username เมื่ออ่านข้อความ.
   <br/>&nbsp;&nbsp; 1.รูปภาพแสดงระดับขั้น อาจเป็นรูปดาวหรือกล่องที่จะบอกว่าคุณโพสต์ข้อความมากน้อยเพียงใด.
   <br/>&nbsp;&nbsp; 2.ถัดลงมาอาจเป็นรูปภาพขนาดใหญ่ คือรูปภาพประจำตัว ซึ่งจะบ่งบอกผู้ใช้แต่ละคน. ขึ้นอยู่กับ administrator ของบอร์ด ที่จะยอมให้ใช้รูปภาพประจำตัว และคุณสามารถเลือกวิธีสร้างได้. ถ้าคุณไม่สามารถใช้รูปภาพประจำตัว คุณควรถามเหตุผลจาก admin ของบอร์ด (ซึ่งเราแน่ใจว่าเหตุผลนั้นจะต้องดีพอ!)'
	),
	array(
		0 => 'จะเปลี่ยนระดับขั้นได้อย่างไร?',
		1 => '&nbsp;&nbsp; โดยทั่วไปแล้ว คุณไม่สามารถแก้ไขข้อความแสดงระดับขั้นได้ (ระดับขั้นจะปรากฏอยู่ใต้ username ของคุณในข้อความ และในข้อมูลส่วนตัว ขึ้นอยู่กับรูปแบบที่คุณใช้). บอร์ดส่วนมากใช้ระดับขั้นเพื่อแสดงจำนวนข้อความที่คุณโพสต์ และเพื่อระบุสถานะพิเศษ เช่น moderator และ administrator จะมีระดับขั้นพิเศษ. กรุณาอย่าโพสต์ข้อความมากๆ เพื่อหวังให้ระดับขั้นเพิ่มขึ้น เพราะบางทีคุณอาจถูก moderator หรือ administrator ทำการลดจำนวนการโพสต์ของคุณลง.'
	),
	array(
		0 => 'เมื่อฉันคลิกส่ง email ให้ผู้ใช้อื่น ทำไมระบบถึงถามให้ฉันเข้าสู่ระบบใหม่?',
		1 => '&nbsp;&nbsp; ขออภัย เฉพาะผู้ใช้ที่สมัครสมาชิกแล้วแล้วเท่านั้น ที่สามารถส่ง email ให้ผู้อื่น ผ่านทางแบบฟอร์มส่ง email ของบอร์ด (ถ้า admin อนุญาตให้ใช้คุณลักษณะนี้) เพื่อป้องกันการส่ง email รบกวนผู้อื่น โดยผู้ใช้ที่ไม่ระบุชื่อ.'
	),
	array(
		0 => '--',
		1 => 'การโพสต์ข้อความ'
	),
	array(
		0 => 'จะสร้างหัวข้อใหม่ได้อย่างไร?',
		1 => '&nbsp;&nbsp; คลิกที่ปุ่มสร้างหัวข้อใหม่ ใน forum หรือในหัวข้อ (คุณอาจต้องสมัครสมาชิกก่อน จึงจะสามารถโพสต์ข้อความได้). คุณจะเห็นข้อความบอกว่าคุณสามารถสร้างหัวข้อใหม่ได้หรือไม่ ที่ด้านล่างของหน้าใน forum หรือในหัวข้อ (เช่น คุณสามารถสร้างหัวข้อใหม่, คุณสามารถละคะแนน, ฯลฯ.)'
	),
	array(
		0 => 'จะแก้ไขหรือลบข้อความที่โพสต์ได้อย่างไร?',
		1 => '&nbsp;&nbsp; คุณสามารถแก้ไขหรือลบข้อความของคุณเท่านั้น (ยกเว้น admin ของบอร์ด หรือ moderator ของ forum). คุณสามารถแก้ไขข้อความที่โพสต์ (บางครั้งอาจมีการจำกัดจำนวนครั้งของการแก้ไข) โดยคลิกที่ปุ่ม แก้ไข ในข้อความนั้น. ถ้ามีคนตอบข้อความที่คุณโพสต์ไปแล้ว คุณจะเห็นข้อความเล็กๆ ใต้ข้อความของคุณ บอกจำนวนครั้งที่คุณได้ทำการแก้ไข. แต่จะไม่แสดงข้อความเล็กๆนี้ ถ้า moderators หรือ administrators เป็นผู้แก้ไขข้อความนั้น (เขาควรจะบอกสาเหตุที่ต้องแก้ไขไว้ด้วย). กรุณารับทราบว่า ผู้ใช้ปรกติจะไม่สามารถลบข้อความที่ได้มีผู้อื่นทำการตอบไปแล้ว.'
	),
	array(
		0 => 'จะเพิ่มลายเซ็นให้กับข้อความที่ฉันโพสต์ได้อย่างไร?',
		1 => '&nbsp;&nbsp; ถ้าจะเพิ่มลายเซ็นให้กับข้อความที่คุณโพสต์ คุณต้องสร้างลายเซ็นเสียก่อน ที่ในข้อมูลส่วนตัวของคุณ. เมื่อคุณได้ทำการสร้างแล้ว คุณสามารถกาถูกที่กล่อง เพิ่มลายเซ็น ในหน้าสำหรับการโพสต์. คุณสามารถเพิ่มลายเซ็นให้กับทุกโพสต์ของคุณ โดยการเลือกในข้อมูลส่วนตัวของคุณ (คุณสามารถไม่ใช้ลายเซ็นในบางข้อความ โดยเอาเครื่องหมายถูกออก หน้าการใช้ลายเซ็น ในแบบฟอร์มการโพสต์)'
	),
	array(
		0 => 'จะสร้างแบบสำรวจได้อย่างไร?',
		1 => '&nbsp;&nbsp; เมื่อคุณสร้างหัวข้อใหม่ (หรือแก้ไขข้อความแรกของหัวข้อ ถ้าคุณมีสิทธิ์) คุณจะเห็นแบบฟอร์ม เพิ่มแบบสำรวจ ใต้แบบฟอร์มกรอกข้อความ (ถ้าคุณหาไม่พบ คุณอาจไม่ได้รับสิทธิ์ให้สร้างแบบสำรวจ). คุณควรกรอกหัวข้อแบบสำรวจ และสร้างตัวเลือกอย่างน้อย 2 ตัวเลือก (การสร้างตัวเลือก ให้พิมพ์ข้อความ แล้วคลิกปุ่ม เพิ่มตัวเลือก. คุณสามารถกำหนดเวลาการใช้แบบสำรวจ, 0 คือไม่มีกำหนดเวลา. จะมีรายการกำหนดเวลาให้คุณเห็น ซึ่ง administrator ของบอร์ดได้ตั้งเอาไว้'
	),
	array(
		0 => 'Why can’t I add more poll options?',
		1 => '&nbsp;&nbsp; The limit for poll options is set by the board administrator. If you feel you need to add more options to your poll then the allowed amount, contact the board administrator.'
	),
	array(
		0 => 'จะแก้ไขหรือลบแบบสำรวจได้อย่างไร?',
		1 => '&nbsp;&nbsp; ผู้ที่เป็นคนโพสต์ข้อความ, moderator หรือ admin ของบอร์ด สามารถแก้ไขแบบสำรวจได้. ให้คลิกแก้ไขข้อความแรกของหัวข้อ (ซึ่งจะมีแบบสำรวจอยู่ในนั้น). ถ้ายังไม่มีใครลงคะแนน คุณสามารถลบหรือแก้ไขตัวเลือกของแบบสำรวจได้ แต่ถ้ามีผู้ทำการลงคะแนนแล้ว เฉพาะ moderators หรือ administrators เท่านั้นที่สามารถแก้ไขหรือลบได้. เพื่อป้องกันไม่ให้ผู้ใช้แก้ไขตัวเลือกหลังจากลงคะแนนไปแล้ว'
	),
	array(
		0 => 'ทำไมถึงเข้าไปใน forum ไม่ได้?',
		1 => '&nbsp;&nbsp; บาง forum อาจจำกัดให้กับผู้ใช้บางคนหรือบางกลุ่ม. ถ้าจะเข้าไปดู, อ่าน, โพสต์, ฯลฯ คุณจะต้องได้รับการอนุญาตพิเศษ จาก moderator หรือ admin ของบอร์ด. คุณควรติดต่อเขาเพื่อขออนุญาต'
	),
	array(
		0 => 'ทำไมถึงลงคะแนนในแบบสำรวจไม่ได้?',
		1 => '&nbsp;&nbsp; เฉพาะผู้ใช้ที่สมัครสมาชิกแล้วเท่านั้น ที่สามารถลงคะแนนในแบบสำรวจ (เพื่อป้องกันผลคะแนนที่ไม่ตรงความจริง). ถ้าคุณสมัครสมาชิกแล้ว แต่ยังไม่สามารถลงคะแนนได้ บางทีคุณอาจไม่ได้รับสิทธิ์ให้ลงคะแนน.'
	),
	array(
		0 => 'Why did I receive a warning?',
		1 => '&nbsp;&nbsp; Each board administrator has their own set of rules for their site. If you have broken a rule, you may issued a warning. Please note that this is the board administrator’s decision, and the phpBB Group has nothing to do with the warnings on the given site. Contact the board administrator if you are unsure about why you were issued a warning.'
	),
	array(
		0 => 'How can I report posts to a moderator?',
		1 => '&nbsp;&nbsp; If the board administrator has allowed it, you should see a button for reporting posts next to the post you wish to report. Clicking this will walk you through the steps necessary to report the post.'
	),
	array(
		0 => 'What is the “Save” button for in topic posting?',
		1 => '&nbsp;&nbsp; This allows you to save passages to be completed and submitted at a later date. To reload a saved passage, visit the User Control Panel.'
	),
	array(
		0 => 'Why does my post need to be approved?',
		1 => '&nbsp;&nbsp; The board administrator may have decided that posts in the forum you are posting to require review before submission. It is also possible that the administrator has placed you in a group of users whose posts require review before submission. Please contact the board administrator for further details.'
	),
	array(
		0 => 'How do I bump my topic?',
		1 => '&nbsp;&nbsp; By clicking the “Bump topic” link when you are viewing it, you can “bump” the topic to the top of the forum on the first page. However, if you do not see this, then topic bumping may be disabled or the time allowance between bumps has not yet been reached. It is also possible to bump the topic simply by replying to it, however, be sure to follow the board rules when doing so.'
	),
	array(
		0 => '--',
		1 => 'รูปแบบและชนิดของหัวข้อ'
	),
	array(
		0 => 'BBCode คืออะไร?',
		1 => '&nbsp;&nbsp; BBCode คือส่วนเพิ่มเติมพิเศษของภาษา HTML. คุณสามารถใช้ BBCode ถ้า administrator อนุญาต (คุณสามารถสั่งไม่ให้ใช้ BBCode ในแต่ละข้อความโพสต์ ได้ที่แบบฟอร์มสำหรับพิมพ์ข้อความโพสต์). BBCode จะคล้ายกับรูปแบบ HTML คือคำสั่งจะอยู่ในเครื่องหมาย [ และ ] แทนเครื่องหมาย < และ> ซึ่งจะใช้ควบคุมข้อความที่อยู่ระหว่างคำสั่งเปิดและปิด. คุณมารถอ่านข้อมูลเพิ่มเติมของ BBCode ได้ที่หน้าสำหรับโพสต์ข้อความ.'
	),
	array(
		0 => 'ใช้ภาษา HTML ได้ไหม?',
		1 => '&nbsp;&nbsp; ขึ้นอยู่กับ administrator ว่าจะอนุญาตด้วยหรือไม่ ซึ่งเขามีสิทธิ์ควบคุมได้ทั้งหมด. ถ้าคุณได้รับอนุญาตให้ใช้ คุณจะพบว่าสามารถใช้คำสั่ง HTML ได้เพียงบางคำสั่งเท่านั้น. เพื่อ ความปลอดภัย ในการป้องกันผู้ใช้ ที่พยายามรบกวนการทำงานของบอร์ด โดยใช้คำสั่งที่อาจทำลายรูปแบบหรือสร้างปัญหาอื่นๆ. ถ้าการใช้ภาษา HTML ได้ถูกเปิดใช้งาน คุณสามารถสั่งให้ไม่ใช้ภาษา HTML ในแต่ละข้อความโพสต์ ได้ที่แบบฟอร์มสำหรับพิมพ์ข้อความโพสต์.'
	),
	array(
		0 => 'รูปรอยยิ้มคืออะไร?',
		1 => '&nbsp;&nbsp; รูปรอยยิ้ม หรือรูปแสดงอารมณ์ เป็นรูปภาพเล็กๆ ที่ใช้เพื่อแสดงอารมณ์ โดยใช้รหัสพิเศษสั้นๆเช่น :) หมายถึงมีความสุข, :( หมายถึงเศร้า. รายการรูปแสดงอารมณ์ทั้งหมดจะอยู่ในแบบฟอร์มสำหรับพิมพ์ข้อความโพสต์. พยายามอย่าใช้รูปรอยยิ้มมากเกินไป เพราะจะทำให้อ่านได้ยาก และ moderator อาจทำการพิจารณาแก้ไขหรือลบข้อความนั้น'
	),
	array(
		0 => 'จะโพสต์รูปได้ไหม?',
		1 => '&nbsp;&nbsp; คุณสามารถแสดงรูปในข้อความของคุณได้. ถ้าคุณไม่พบกล่องสำหรับแนบไฟล์ขึ้นบอร์ด คุณสามารถเชื่อมโยงไปยังรูปภาพที่เก็บไว้บน web server อื่นๆได้ เช่น http://www.some-unknown-place.net/my-picture.gif ซึ่งจะต้องไม่เป็นรูปภาพที่ต้องใช้ระบบการอนุญาต เช่น รูปในกล่องจดหมายของ hotmail หรือ yahoo, เว็บที่มีการป้องกันโดยใช้ password, ฯลฯ. คุณไม่สามารถเชื่อมโยงไปยังรูปภาพที่อยู่บนเครื่อง PC ของคุณ (ยกเว้นว่าจะเป็น server สาธารณะ). การแสดงรูปภาพ ให้ใช้ BBCode ด้วยคำสั่ง [img] หรือใช้คำสั่งในภาษา HTML (ถ้าคุณได้รับอนุญาต).'
	),
	array(
		0 => 'What are global announcements?',
		1 => '&nbsp;&nbsp; Global announcements contain important information and you should read them whenever possible. They will appear at the top of every forum and within your User Control Panel. Global announcement permissions are granted by the board administrator.'
	),
	array(
		0 => 'ข้อความประกาศ คืออะไร?',
		1 => '&nbsp;&nbsp; ข้อความประกาศ จะมีข้อมูลสำคัญ ที่คุณควรอ่านทันที. ข้อความประกาศ จะปรากฏอยู่ที่ด้านบนของทุกหน้าใน forum ที่มีการโพสต์ไว้. ซึ่งคุณจะสามารถโพสต์ข้อความประกาศได้หรือไม่นั้น ขึ้นอยู่กับการอนุญาตของ administrator.'
	),
	array(
		0 => 'หัวข้อ Sticky คืออะไร?',
		1 => '&nbsp;&nbsp; หัวข้อ Sticky จะปรากฏอยู่ใต้ข้อความประกาศ เฉพาะหน้าแรกเท่านั้น. ซึ่งค่อนข้างสำคัญ ดังนั้นคุณควรอ่านเมื่อมีโอกาส. เช่นเดียวกันกับข้อความประกาศ คือ administrator จะเป็นผู้ทำการอนุญาตให้คุณสามารถโพสต์หัวข้อ sticky ได้ในแต่ละ forum.'
	),
	array(
		0 => 'หัวข้อถูกล็อก คืออะไร?',
		1 => '&nbsp;&nbsp; หัวข้อถูกล็อก จะถูกกำหนดโดย moderator ของ forum หรือ administrator ของบอร์ด. คุณไม่สามารถตอบหัวข้อที่ถูกล็อก และแบบสำรวจที่หมดอายุโดยอัตโนมัติ. อาจมีหลายสาเหตุที่ต้องทำการล็อกหัวข้อ.'
	),
	array(
		0 => 'What are topic icons?',
		1 => '&nbsp;&nbsp; Topic icons are author chosen images associated with posts to indicate their content. The ability to use topic icons depends on the permissions set by the board administrator.'
	),
	array(
		0 => '--',
		1 => 'ระดับผู้ใช้ และกลุ่มผู้ใช้'
	),
	array(
		0 => 'Administrator คืออะไร?',
		1 => '&nbsp;&nbsp; Administrator เป็นผู้ที่มีระดับสูงสุด ที่สามารถควบคุมบอร์ดทั้งหมด สามารถควบคุมการทำงานทุกอย่างของบอร์ด รวมทั้งการอนุญาตต่างๆ, การหวงห้ามผู้ใช้, การสร้างกลุ่มผู้ใช้ หรือ moderators, ฯลฯ และยังมีสิทธิ์ของการเป็น moderator ในทุก forum.'
	),
	array(
		0 => 'Moderator คืออะไร?',
		1 => '&nbsp;&nbsp; Moderator เป็นบุคคล (หรือกลุ่มของบุคคล) ที่มีหน้าที่ตรวจสอบ forum สามารถแก้ไขหรือลบข้อความ และสามารถล็อก, ปลดล็อก, ย้าย, ลบ และแยกหัวข้อใน forum ที่ได้รับหน้าที่. โดยทั่วไป moderator จะทำการป้องกันการโพสต์ข้อความก่อกวน.'
	),
	array(
		0 => 'กลุ่มผู้ใช้ คืออะไร?',
		1 => '&nbsp;&nbsp; กลุ่มผู้ใช้ เป็นกลุ่มที่ administrator ของบอร์ดทำการจัดตั้งขึ้น. แต่ละผู้ใช้สามารถเป็นสมาชิกในหลายๆกลุ่มพร้อมกัน (ซึ่งแตกต่างจากบอร์ดอื่นๆ) และสามารถกำหนดสิทธิ์กับแต่ละกลุ่มได้. ช่วยให้ administrator สามารถกำหนดให้ผู้ใช้หลายๆคนสามารถเป็น moderators ของแต่ละ forum ได้ง่ายขึ้น หรืออนุญาตให้สมาชิกในกลุ่มสามารถเข้าไปใน forum ส่วนตัว, ฯลฯ.'
	),
	array(
		0 => 'จะเข้าร่วมกลุ่มผู้ใช้ได้อย่างไร?',
		1 => '&nbsp;&nbsp; การเข้าร่วมกลุ่มผู้ใช้ ให้คลิกลิงค์ กลุ่มผู้ใช้ ที่ด้านบนของแต่ละหน้า (ขึ้นอยู่กับรูปแบบที่ใช้) แล้วคุณจะเห็นกลุ่มที่มีทั้งหมด. อาจไม่ใช่ทุกกลุ่มที่เป็น กลุ่มเปิด, บางกลุ่มอาจถูกปิด และอาจถูกซ่อน. ถ้ากลุ่มนั้นเปิด คุณสามารถส่งคำขอเข้าร่วมกลุ่มได้ โดยคลิกที่ปุ่มเข้าร่วมกลุ่ม. moderator ของกลุ่มผู้ใช้นั้นจะต้องทำการอนุญาตให้คุณเสียก่อน, เขาอาจถามถึงเหตุผลในการเข้าร่วมกลุ่มผู้ใช้. กรุณาอย่ารบกวน moderator ของกลุ่ม ถ้าเขาปฏิเสธคำขอของคุณ ด้วยเหตุผลบางประการ.'
	),
	array(
		0 => 'How do I become a usergroup leader?',
		1 => '&nbsp;&nbsp; A usergroup leader is usually assigned when usergroups are initially created by a board administrator. If you are interested in creating a usergroup, your first point of contact should be an administrator; try sending a private message.',
	),
	array(
		0 => 'Why do some usergroups appear in a different colour?',
		1 => '&nbsp;&nbsp; It is possible for the board administrator to assign a colour to the members of a usergroup to make it easy to identify the members of this group.'
	),
	array(
		0 => 'What is a “Default usergroup”?',
		1 => '&nbsp;&nbsp; If you are a member of more than one usergroup, your default is used to determine which group colour and group rank should be shown for you by default. The board administrator may grant you permission to change your default usergroup via your User Control Panel.'
	),
	array(
		0 => 'What is “The team” link?',
		1 => '&nbsp;&nbsp; This page provides you with a list of board staff, including board administrators and moderators and other details such as the forums they moderate.'
	),
	array(
		0 => '--',
		1 => 'ข้อความส่วนตัว'
	),
	array(
		0 => 'ส่งข้อความส่วนตัวไม่ได้!',
		1 => '&nbsp;&nbsp; มี 3 สาเหตุ คือ
   <br/>&nbsp;&nbsp; 1.คุณยังไม่ได้สมัครสมาชิก และ/หรือยังไม่ได้เข้าสู่ระบบ
   <br/>&nbsp;&nbsp; 2.Administrator ของบอร์ดไม่อนุญาตให้ทุกคนใช้ข้อความส่วนตัว
   <br/>&nbsp;&nbsp; 3.คุณไม่ได้รับอนุญาตให้ใช้ข้อความส่วนตัว. ในกรณีนี้ คุณควรติดต่อเพื่อขอทราบเหตุผลจาก administrator.'
	),
	array(
		0 => 'ฉันได้รับแต่ข้อความส่วนตัวที่ไม่ต้องการ!',
		1 => '&nbsp;&nbsp; เราสามารถเพิ่มคุณเข้าไปในรายชื่อผู้ที่ไม่ต้องการรับข้อความส่วนตัวได้. แต่ในเวลานี้ ถ้าคุณยังได้รับข้อความส่วนตัวที่ไม่ต้องการจากบางคน ให้คุณแจ้ง admin ของบอร์ด เขาสามารถป้องกันไม่ให้ผู้ใช้นั้นส่งข้อความส่วนตัวได้อีก.'
	),
	array(
		0 => 'ฉันได้รับ email รบกวนจากผู้ใช้ในบอร์ดนี้!',
		1 => '&nbsp;&nbsp; เราขอแสดงความเสียใจเป็นอย่างยิ่ง. Email ที่ถูกส่งจากบอร์ดนี้ จะมีข้อความที่บอกว่าใครเป็นผู้ส่ง. คุณควรส่ง email ที่มีข้อความทั้งหมด ไปให้ administrator ของบอร์ด ซึ่งรวมทั้งส่วนหัวของข้อความด้วย (ส่วนนี้จะบอกว่า email นั้นถูกส่งมาจากใคร) แล้วเขาจะจัดการให้เอง.'
	),
	array(
		0 => '--',
		1 => 'เพื่อนและศัตรู'
	),
	array(
		0 => 'What are my Friends and Foes lists?',
		1 => '&nbsp;&nbsp; You can use these lists to organise other members of the board. Members added to your friends list will be listed within your User Control Panel for quick access to see their online status and to send them private messages. Subject to template support, posts from these users may also be highlighted. If you add a user to your foes list, any posts they make will be hidden by default.'
	),
	array(
		0 => 'How can I add / remove users to my Friends or Foes list?',
		1 => '&nbsp;&nbsp; You can add users to your list in two ways. Within each user’s profile, there is a link to add them to either your Friend or Foe list. Alternatively, from your User Control Panel, you can directly add users by entering their member name. You may also remove users from your list using the same page.'
	),
	array(
		0 => '--',
		1 => 'การค้นหาข้อมูลในฟอรั่ม'
	),
	array(
		0 => 'How can I search a forum or forums?',
		1 => '&nbsp;&nbsp; Enter a search term in the search box located on the index, forum or topic pages. Advanced search can be accessed by clicking the “Advance Search” link which is available on all pages on the forum. How to access the search may depend on the style used.'
	),
	array(
		0 => 'Why does my search return no results?',
		1 => '&nbsp;&nbsp; Your search was probably too vague and included many common terms which are not indexed by phpBB3. Be more specific and use the options available within Advanced search.'
	),
	array(
		0 => 'Why does my search return a blank page!?',
		1 => '&nbsp;&nbsp; Your search returned too many results for the webserver to handle. Use “Advanced search” and be more specific in the terms used and forums that are to be searched.'
	),
	array(
		0 => 'How do I search for members?',
		1 => '&nbsp;&nbsp; Visit to the “Members” page and click the “ค้นหาสมาชิก” link.'
	),
	array(
		0 => 'How can I find my own posts and topics?',
		1 => '&nbsp;&nbsp; Your own posts can be retrieved either by clicking the “Search user’s posts” within the User Control Panel or via your own profile page. To search for your topics, use the Advanced search page and fill in the various options appropriately.'
	),
	array(
		0 => '--',
		1 => 'รับข่าวสารหัวข้อและรายการโปรด'
	),
	array(
		0 => 'What is the difference between bookmarking and subscribing?',
		1 => '&nbsp;&nbsp; Bookmarking in phpBB3 is much like bookmarking in your web browser. You aren’t alerted when there’s an update, but you can come back to the topic later. Subscribing, however, will notify you when there is an update to the topic or forum on the board via your preferred method or methods.'
	),
	array(
		0 => 'How do I subscribe to specific forums or topics?',
		1 => '&nbsp;&nbsp; To subscribe to a specific forum, click the “Subscribe forum” link upon entering the forum. To subscribe to a topic, reply to the topic with the subscribe checkbox checked or click the “Subscribe topic” link within the topic itself.'
	),
	array(
		0 => 'How do I remove my subscriptions?',
		1 => '&nbsp;&nbsp; To remove your subscriptions, go to your User Control Panel and follow the links to your subscriptions.'
	),
	array(
		0 => '--',
		1 => 'การแนบไฟล์'
	),
	array(
		0 => 'What attachments are allowed on this board?',
		1 => '&nbsp;&nbsp; Each board administrator can allow or disallow certain attachment types. If you are unsure what is allowed to be uploaded, contact the board administrator for assistance.'
	),
	array(
		0 => 'How do I find all my attachments?',
		1 => '&nbsp;&nbsp; To find your list of attachments that you have uploaded, go to your User Control Panel and follow the links to the attachments section.'
	),
	array(
		0 => '--',
		1 => 'เกี่ยวกับ phpBB3'
	),
	array(
		0 => 'Who wrote this bulletin board?',
		1 => '&nbsp;&nbsp; This software (in its unmodified form) is produced, released and is copyright <a href="http://www.phpbb.com/">phpBB Group</a>. It is made available under the GNU General Public License and may be freely distributed. See the link for more details.'
	),
	array(
		0 => 'Why isn’t X feature available?',
		1 => '&nbsp;&nbsp; This software was written by and licensed through phpBB Group. If you believe a feature needs to be added, please visit the phpbb.com website and see what phpBB Group have to say. Please do not post feature requests to the board at phpbb.com, the group uses SourceForge to handle tasking of new features. Please read through the forums and see what, if any, our position may already be for a feature and then follow the procedure given there.'
	),
	array(
		0 => 'Who do I contact about abusive and/or legal matters related to this board?',
		1 => '&nbsp;&nbsp; Any of the administrators listed on the “The team” page should be an appropriate point of contact for your complaints. If this still gets no response then you should contact the owner of the domain (do a <a href="http://www.google.com/search?q=whois">whois lookup</a>) or, if this is running on a free service (e.g. Yahoo!, free.fr, f2s.com, etc.), the management or abuse department of that service. Please note that the phpBB Group has <strong>absolutely no jurisdiction</strong> and cannot in any way be held liable over how, where or by whom this board is used. Do not contact the phpBB Group in relation to any legal (cease and desist, liable, defamatory comment, etc.) matter <strong>not directly related</strong> to the phpBB.com website or the discrete software of phpBB itself. If you do e-mail phpBB Group <strong>about any third party</strong> use of this software then you should expect a terse response or no response at all.'
	)
);

?>