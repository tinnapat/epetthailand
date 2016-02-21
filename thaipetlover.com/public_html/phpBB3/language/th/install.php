<?php
/** 
*
* install [Thai]
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
	'ADMIN_CONFIG'				=> 'การตั้งค่าส่วนตัวของ Administrator',
	'ADMIN_PASSWORD'			=> 'รหัสผ่านผู้ดูแลระบบ',
	'ADMIN_PASSWORD_CONFIRM'	=> 'ยืนยันรหัสผ่านผู้ดูแลระบบ',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'โปรดระบุรหัสผ่านให้อยู่ระหว่าง 6 - 30 ตัวอักษร',
	'ADMIN_USERNAME'			=> 'ยูสเซอร์เนมผู้ดูแลระบบ',
	'ADMIN_USERNAME_EXPLAIN'	=> 'โปรดระบุยูสเซอร์เนมให้อยู่ระหว่าง 6 - 30 ตัวอักษร',
	'APP_MAGICK'				=> 'Imagemagick support [ Attachments ]',
	'AUTHOR_NOTES'				=> 'Author notes<br />» %s',
	'AVAILABLE'					=> 'ใช้งานได้',
	'AVAILABLE_CONVERTORS'		=> 'ตัวนำเข้าที่มีอยู่',

	'BEGIN_CONVERT'					=> 'เริ่มการนำเข้า',
	'BLANK_PREFIX_FOUND'			=> 'A scan of your tables has shown a valid installation using no table prefix.',
	'BOARD_NOT_INSTALLED'			=> 'No installation found',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'The phpBB Unified Convertor Framework requires a default installation of phpBB3 to function, please <a href="%s">proceed by first installing phpBB3</a>.',

	'CATEGORY'					=> 'หมวดหมู่',
	'CACHE_STORE'				=> 'Cache type',
	'CACHE_STORE_EXPLAIN'		=> 'The physical location where data is cached, filesystem is preferred.',
	'CAT_CONVERT'				=> 'อัปเดต/นำเข้า',
	'CAT_INSTALL'				=> 'ติดตั้ง',
	'CAT_OVERVIEW'				=> 'เริ่มต้น',
	'CAT_UPDATE'				=> 'อัปเดท',
	'CHANGE'					=> 'เปลี่ยน',
	
	'CHECK_TABLE_PREFIX'		=> 'โปรดตรวจสอบค่า prefix ให้ถูกต้องและลองใหม่อีกครั้ง.',
	'CLEAN_VERIFY'				=> 'Cleaning up and verifying the final structure',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> is the clean username for:',
	'COLLIDING_USERNAMES_FOUND'	=> 'Colliding usernames were found on your old board. In order to complete the conversion please delete or rename these users so that there is only one user on your old board for each clean username.',
	'COLLIDING_USER'			=> '» ยูสเซอร์ id: <strong>%d</strong> ยูสเซอร์เนม: <strong>%s</strong> (%d posts)',
	'CONFIG_CONVERT'			=> 'Converting the configuration',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'ไม่สามารถเขียนไฟล์การตั้งค่า (config.php) ได้ คุณจำเป็นต้องทำตามวิธีด้านล่างนี้',
	'CONFIG_FILE_WRITTEN'		=> 'ไฟล์การตั้งค่า (config.php) ถูกสร้างแล้ว กรุณาไปที่การติดตั้งขั้นตอนถัดไป',
	'CONFIG_PHPBB_EMPTY'		=> 'ไม่มีค่าของตัวแปร "%s" ในไฟล์การตั้งค่า',
	'CONFIG_RETRY'				=> 'ลองใหม่',
	'CONTACT_EMAIL_CONFIRM'		=> 'E-mail ที่ใช้ติดต่อ (อีกครั้ง)',
	'CONTINUE_CONVERT'			=> 'ขั้นตอนถัดไป',
	'CONTINUE_CONVERT_BODY'		=> 'A previous conversion attempt has been determined. You are now able to choose between starting a new conversion or continuing the conversion.',
	'CONTINUE_LAST'				=> 'ขั้นตอนถัดไป',
	'CONTINUE_OLD_CONVERSION'	=> 'Continue previously started conversion',
	'CONVERT'					=> 'นำเข้า',
	'CONVERT_COMPLETE'			=> 'การนำข้อมูลเข้า เสร็จสิ้นแล้ว',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'คุณได้นำข้อมูลจากเว็บบอร์ดตัวเก่ามาใช้ใน phpBB 3.0 ตัวนี้เรียบร้อยแล้ว คุณสามารถ <a href="../">เข้าสู่ระบบ</a> เพื่อเริ่มใช้งาน กรุณาจำไว้ว่า คุณสามารถอ่าน <a href="http://www.phpbb.com/support/documentation/3.0/">Documentation</a> และขอความช่วยเหลือได้จาก <a href="http://www.phpbb.com/community/viewforum.php?f=46">support forums</a>',
	'CONVERT_INTRO'				=> 'ยินดีต้อนรับสู่ phpBB Unified Convertor Framework',
	'CONVERT_INTRO_BODY'		=> 'คุณสามารถนำเข้า (import) ข้อมูลจากเว็บบอร์ดอื่นที่ได้ติดตั้งไว้ในเซิฟเวอร์ ด้านล่างนี้คือรายชื่อของโมดูลการนำเข้าที่มีอยู่ ถ้าคุณไม่พบโมดูลที่คุณต้องการในรายการด้านล่างนี้ กรุณาตรวจสอบเว็บไซต์ของ phpBB เผื่อบางทีอาจจะมีโมดูลการนำเข้าให้คุณดาวน์โหลดเพิ่มเติม<br />กรุณาคลิกที่คำสั่ง \'นำเข้า\' เพื่อเริ่มการนำข้อมูลจากเว็บบอร์ดตัวเก่า มาใช้ใน phpBB3 ตัวนี้',
	'CONVERT_NEW_CONVERSION'	=> 'New conversion',
	'CONVERT_NOT_EXIST'			=> 'The specified convertor does not exist.',
	'CONVERT_SETTINGS_VERIFIED'	=> 'ข้อมูลที่คุณกรอกได้ผ่านการตรวจสอบแล้ว กรุณาคลิกปุ่ม เริ่มการนำเข้า',
	'CONV_ERR_FATAL'					=> 'Fatal conversion error',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'FTP upload for attachments is enabled at the old board. Please disable the FTP upload option and make sure a valid upload directory is specified, then copy all attachment files to this new web accessible directory. Once you have done this, restart the convertor.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'There is no configuration information available for the conversion.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Unable to get forum access information.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Unable to get categories.',
	'CONV_ERROR_GET_CONFIG'				=> 'Could not retrieve your board configuration.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Unable to access/read "%s".',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Unable to get group authentication information.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Inconsistency in groups table detected in add_bots() - you need to add all special groups if you do it manually.',
	'CONV_ERROR_INSERT_BOT'				=> 'Unable to insert bot into users table.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Unable to insert bot into bots table.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Unable to insert user into user_group table.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Message parser error',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Note to developer: you must specify $convertor[\'avatar_path\'] to use %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'The relative path to the source board has not been specified.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Note to developer: you must specify $convertor[\'avatar_gallery_path\'] to use %s.',
	'CONV_ERROR_NO_GROUP'				=> 'Group "%1$s" could not be found in %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Note to developer: you must specify $convertor[\'ranks_path\'] to use %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Note to developer: you must specify $convertor[\'smilies_path\'] to use %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Note to developer: you must specify $convertor[\'upload_path\'] to use %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Unable to insert/update permission setting.',
	'CONV_ERROR_PM_COUNT'				=> 'Unable to select folder pm count.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Unable to insert new forum replacing old category.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Unable to insert new forum replacing old forum.',
	'CONV_ERROR_USER_ACCESS'			=> 'Unable to get user authentication information.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Wrong group "%1$s" defined in %2$s.',
	'CONV_SAVED_MESSAGES'				=> 'Saved messages',

	'COULD_NOT_COPY'			=> 'Could not copy file <strong>%1$s</strong> to <strong>%2$s</strong><br /><br />Please check that the target directory exists and is writable by the webserver.',
	'COULD_NOT_FIND_PATH'		=> 'Could not find path to your former board. Please check your settings and try again.<br />ยป Specified source path was %s.',

	'DBMS'						=> 'ชนิดของฐานข้อมูล (Database Type)',
	'DB_CONFIG'					=> 'การตั้งค่าของฐานข้อมูล',
	'DB_CONNECTION'				=> 'การติดต่อฐานข้อมูล',
	'DB_ERR_INSERT'				=> 'Error while processing <code>INSERT</code> query.',
	'DB_ERR_LAST'				=> 'Error while processing <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Error while executing <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Error while executing <var>query_first</var>, %s ("%s").',
	'DB_ERR_SELECT'				=> 'Error while running <code>SELECT</code> query.',
	'DB_HOST'					=> 'ที่อยู่ของฐานข้อมูล (Database server hostname, DSN)',
	'DB_HOST_EXPLAIN'			=> '<font face=\'Tahoma,MS Sans Serif\'>DSN ย่อมาจาก Data Source Name และใช้สำหรับฐานข้อมูล ODBC</font>',
	'DB_NAME'					=> 'ชื่อฐานข้อมูลที่มีอยู่แล้ว (Database name)',
	'DB_PASSWORD'				=> 'รหัสผ่านสำหรับเข้าฐานข้อมูล',
	'DB_PORT'					=> 'หมายเลขพอร์ตของฐานข้อมูล (Database server port)',
	'DB_PORT_EXPLAIN'			=> '<font face=\'Tahoma,MS Sans Serif\'>ถ้าไม่ทราบก็ให้ปล่อยว่างไว้ นอกจากว่าทางเซิฟเวอร์จะไม่ได้ใช้หมายเลขพอร์ตมาตรฐาน</font>',
	'DB_USERNAME'				=> 'ยูสเซอร์เนมสำหรับฐานข้อมูล',
	'DB_TEST'					=> 'ทดสอบการติดต่อ',
	'DEFAULT_LANG'				=> 'ภาษาที่ใช้งาน',
	'DEFAULT_PREFIX_IS'			=> 'The convertor was not able to find tables with the specified prefix. Please make sure you have entered the correct details for the board you are converting from. The default table prefix for %1$s is <strong>%2$s</strong>.',
	'DEV_NO_TEST_FILE'			=> 'No value has been specified for the test_file variable in the convertor. If you are a user of this convertor, you should not be seeing this error, please report this message to the convertor author. If you are a convertor author, you must specify the name of a file which exists in the source board to allow the path to it to be verified.',
	'DIRECTORIES_AND_FILES'		=> 'Directory and file setup',
	'DISABLE_KEYS'				=> 'Disabling keys',
	'DLL_FIREBIRD'				=> 'Firebird',
	'DLL_FTP'					=> 'Remote FTP support [ Installation ]',
	'DLL_GD'					=> 'GD graphics support [ Visual Confirmation ]',
	'DLL_MBSTRING'				=> 'Multi-byte character support',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ via ODBC',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL with MySQLi Extension',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL 7.x/8.x',
	'DLL_SQLITE'				=> 'SQLite',
	'DLL_XML'					=> 'XML support [ Jabber ]',
	'DLL_ZLIB'					=> 'zlib compression support [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'ดาวน์โหลดไฟล์การตั้งค่า',
	'DL_CONFIG_EXPLAIN'			=> 'คุณจะต้องดาวน์โหลดไฟล์ config.php ลงคอมพิวเตอร์ของคุณ จากั้นคุณจะต้องอัปโหลดไฟล์ config.php ไปทับไฟล์เก่าในไดเร็คทอรี่ของ phpBB 3.0 กรุณาจำไว้ว่าจะต้องอัปโหลดไฟล์ในรูปแบบ ASCII (กรุณาอ่านคู่มือของโปรแกรม FTP ที่คุณใช้)<br />เมื่อคุณอัปโหลดเสร็จเรียบร้อยแล้ว ให้คลิกปุ่ม Done เพื่อไปยังขั้นตอนถัดไป',
	'DL_DOWNLOAD'				=> 'ดาวน์โหลด',
	'DONE'						=> 'Done',

	'ENABLE_KEYS'				=> 'Re-enabling keys. This can take a while.',

	'FILES_OPTIONAL'			=> 'ไฟล์และไดเร็คทอรีอื่นๆ',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>หมายเหตุ</strong> - ไฟล์และไดเร็คทอรี่เหล่านี้อาจไม่จำเป็นต้องสนใจก็ได้ ซึ่งระบบการติดตั้งจะพยายามสร้างหรือแก้ไขไฟล์และไดเร็คทอรี่เหล่านี้ด้วยตัวเอง แต่ถ้าทุกอย่างผ่านหมด ก็จะช่วยลดระยะเวลาการติดตั้งลงได้',
	'FILES_REQUIRED'			=> 'ไฟล์และไดเร็คทอรี',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>ความต้องการ</strong> - phpBB จะต้องสามารถอ่านและเขียนไฟล์และไดเร็คทอรีได้ ถ้าคุณเห็นข้อความ \'ไม่พบ\' คุณจะต้องทำการสร้างไฟล์หรือไดเร็คทอรีนั้นเอง ถ้าคุณเห็นข้อความ \'ไม่สามารถเขียนได้\' คุณจะต้องแก้ไขสิทธิ์ (permission) ให้กับไฟล์หรือไดเร็คทอรีนั้น เพื่ออนุญาตให้ phpBB สามารถเขียนได้',
	'FILLING_TABLE'				=> 'Filling table <strong>%s</strong>',
	'FILLING_TABLES'			=> 'คัดลอกตารางฐานข้อมูล',
	'FINAL_STEP'				=> 'ขั้นตอนถัดไป',
	'FORUM_ADDRESS'				=> 'Board address',
	'FORUM_ADDRESS_EXPLAIN'		=> 'This is the URL of your former board, for example <samp>http://www.example.com/phpBB2/</samp>. If an address is entered here and not left empty every instance of this address will be replaced by your new board address within messages, private messages and signatures.',
	'FORUM_PATH'				=> 'ตำแหน่งโฟลเดอร์ของเว็บบอร์ดเก่า',
	'FORUM_PATH_EXPLAIN'		=> '<font face=\'Tahoma,MS Sans Serif\'>ให้กรอกเป็นที่อยู่ไดเร็คทอรี่แบบ <strong>สัมพันธ์ (relative)</strong> (เริ่มต้นด้วย ../) กับไดเรคทอรี่ของ phpBB3 ที่คุณกำลังใช้อยู่</font>',
	'FOUND'						=> 'ค้นหาพบ',
	'FTP_CONFIG'				=> 'Transfer config by FTP',
	'FTP_CONFIG_EXPLAIN'		=> 'phpBB has detected the presence of the FTP module on this server. You may attempt to install your config.php via this if you wish. You will need to supply the information listed below. Remember your username and password are those to your server! (ask your hosting provider for details if you are unsure what these are).',
	'FTP_PATH'					=> 'FTP path',
	'FTP_PATH_EXPLAIN'			=> 'This is the path from your root directory to that of phpBB, e.g. <samp>htdocs/phpBB3/</samp>.',
	'FTP_UPLOAD'				=> 'อัปโหลด',

	'GPL'						=> 'General Public License',

	'INITIAL_CONFIG'			=> 'Basic configuration',
	'INITIAL_CONFIG_EXPLAIN'	=> 'Now that install has determined your server can run phpBB you need to supply some specific information. If you do not know how to connect to your database please contact your hosting provider (in the first instance) or use the phpBB support forums. When entering data please ensure you check it thoroughly before continuing.',
	'INSTALL_CONGRATS'			=> 'ขอแสดงความยินดี!',
	'INSTALL_CONGRATS_EXPLAIN'	=> '
		<p>คุณได้ติดตั้ง phpBB %1$s เสร็จเรียบร้อยแล้ว จากนี้ไป คุณสามารถใช้งาน phpBB3 ได้สองวิธี คือ:</p>
		<h2>นำข้อมูลจากเว็บบอร์ดตัวเก่า มาใช้ใน phpBB3 ตัวนี้</h2>
		<p>โปรแกรม phpBB Unified Convertor Framework สามารถนำข้อมูลจาก phpBB 2.0.x และเว็บบอร์ดอื่นๆ มาใช้ใน phpBB3 ตัวนี้ โดยการคลิกที่ <a href="%2$s">นำเข้าเว็บบอร์ด</a>.</p>
		<h2>เริ่มใช้งาน phpBB3 เลย!</h2>
		<p>ปุ่มด้านล่างนี้จะพาคุณไปยัง Administration Control Panel (ACP) คุณสามารถตรวจสอบและแก้ไขตัวเลือกตามต้องการ กรุณาอ่าน <a href="http://www.phpbb.com/support/documentation/3.0/">คู่มือ</a> และขอความช่วยเหลือได้จาก <a href="http://www.phpbb.com/community/viewforum.php?f=46">support forums</a> กรุณาอ่าน <a href="%3$s">README</a> เพื่อทราบข้อมูลเพิ่มเติม</p><p><strong>หมายเหตุ: กรุณาลบ, ย้าย, หรือ เปลี่ยนชื่อ ไดเร็คทอรี install ก่อนที่จะเริ่มใช้งานเว็บบอร์ด<br />ถ้ามีไดเร็คทอรี่นี้อยู่ คุณจะสามารถใช้งานได้เพียง Administration Control Panel (ACP) เท่านั้น</strong></p>',
	'INSTALL_INTRO'				=> 'ยินดีต้อนรับสู่การติดตั้ง',
// TODO: write some more introductions here
	'INSTALL_INTRO_BODY'		=> 'ตัวเลือกนี้ใช้สำหรับติดตั้ง phpBB ใหม่ลงในเซิฟเวอร์ของคุณ</p><p>ก่อนจะเริ่มการติดตั้ง กรุณาเตรียมข้อมูลรายละเอียดของฐานข้อมูลก่อน ถ้าคุณไม่ทราบข้อมูลรายละเอียดของฐานข้อมูล กรุณาติดต่อผู้ให้บริการเซิฟเวอร์ที่คุณใช้อยู่ โดยสิ่งที่คุณจะต้องทราบมีดังนี้:</p>

	<ul>
		<li>ชนิดของฐานข้อมูล (Database Type) - ชนิดของฐานข้อมูลที่คุณกำลังจะใช้ (เช่น MySQL, PostgreSQL, Oracle, MS-SQL ฯลฯ)</li>
		<li>ที่อยู่ของฐานข้อมูล (Database server hostname) - เช่น localhost, mysql.xxx.xxx, 203.xxx.xxx.xxx ฯลฯ</li>
		<li>หมายเลขพอร์ตของฐานข้อมูล (Database server port) - เช่น MySQL ใช้พอร์ต 3306, PostgreSQL ใช้พอร์ต 5432 (อาจไม่จำเป็น ถ้าทางผู้ให้บริการเซิฟเวอร์ใช้พอร์ตมาตรฐานของฐานข้อมูล).</li>
		<li>ชื่อฐานข้อมูล (Database name) - เป็นชื่อของฐานข้อมูลที่คุณมีอยู่แล้ว อาจเป็นชื่อที่คุณตั้งเอง เช่น myphpbbdb หรืออาจเป็น username ของฐานข้อมูลก็ได้ <b>โดยที่ฐานข้อมูลชื่อนั้น<u>จะต้องถูกสร้างไว้ก่อนแล้ว</u> อาจถูกสร้างโดยผู้ให้บริการเซิฟเวอร์ หรือคุณอาจสร้างเองโดยใช้โปรแกรมช่วยจัดการฐานข้อมูลก็ได้ เช่น phpMyAdmin ฯลฯ</b></li>
		<li>Username และ password ของฐานข้อมูล - ใช้ในการเข้าสู่ระบบฐานข้อมูล</li>
	</ul>

	<p><strong>หมายเหตุ:</strong> ถ้าคุณกำลังจะติดตั้งโดยใช้ SQLite คุณควรกรอก<u>ที่อยู่ไฟล์ฐานข้อมูลแบบเต็ม</u>ลงในช่อง Database server hostname และปล่อยให้ช่อง username และ password ว่างไว้. เพื่อความปลอดภัย คุณควรจะตรวจสอบให้แน่ใจว่า ไฟล์ฐานข้อมูลนั้นถูกเก็บไว้ในตำแหน่งที่ไม่สามารถเรียกใช้งานได้โดยตรงจากเว็บบราวเซอร์</p>

	<p>phpBB3 สามารถใช้งานฐานข้อมูลเหล่านี้ได้:</p>
	<ul>
		<li>MySQL 3.23 หรือสูงกว่า (สามารถใช้ MySQLi ได้)</li>
		<li>PostgreSQL 7.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>Firebird 2.0+</li>
		<li>MS SQL Server 2000 หรือสูงกว่า (ใช้งานโดยตรง หรือผ่าน ODBC)</li>
		<li>Oracle</li>
	</ul>
	
	<p>ซึ่งหน้าถัดไปนี้จะแสดงเฉพาะฐานข้อมูลที่จะสามารถถูกนำมาใช้งานได้เท่านั้น',
	'INSTALL_INTRO_NEXT'		=> 'To commence the installation, please press the button below.',
	'INSTALL_LOGIN'				=> 'Login',
	'INSTALL_NEXT'				=> 'Next stage',
	'INSTALL_NEXT_FAIL'			=> 'Some tests failed and you should correct these problems before proceeding to the next stage. Failure to do so may result in an incomplete installation.',
	'INSTALL_NEXT_PASS'			=> 'All the basic tests have been passed and you may proceed to the next stage of installation. If you have changed any permissions, modules, etc. and wish to re-test you can do so if you wish.',
	'INSTALL_PANEL'				=> 'Installation Panel',
	'INSTALL_SEND_CONFIG'		=> 'Unfortunately phpBB could not write the configuration information directly to your config.php. This may be because the file does not exist or is not writable. A number of options will be listed below enabling you to complete installation of config.php.',
	'INSTALL_START'				=> 'เริ่มการติดตั้ง',
	'INSTALL_TEST'				=> 'ทดสอบอีกครั้ง',
	'INST_ERR'					=> 'การติดตั้งผิดพลาด',
	'INST_ERR_DB_CONNECT'		=> 'ไม่สามารถติดต่อกับฐานข้อมูลได้ ข้อความผิดพลาดคือ',
	'INST_ERR_DB_FORUM_PATH'	=> 'ไฟล์ฐานข้อมูลนี้อยู่ในไดเร็คทอรี่ของเว็บบอร์ด คุณควรจะนำไฟล์นี้ไปวางไว้ในตำแหน่งที่ไม่สามารถใช้งานได้โดยเว็บบราวเซอร์',
	'INST_ERR_DB_NO_ERROR'		=> 'ไม่มีข้อความผิดพลาด',
	'INST_ERR_DB_NO_MYSQLI'		=> 'เวอร์ชันของ MySQL ที่ติดตั้งอยู่ ไม่สามารถใช้งาน MySQL และ MySQLi extension ตามที่คุณเลือกไว้ กรุณาลองใช้เฉพาะ MySQL แทน',
	'INST_ERR_DB_NO_SQLITE'		=> 'เวอร์ชันของ SQLite extension เก่าเกินไป กรุณาอัปเกรดเป็นเวอร์ชัน 2.8.2 เป็นอย่างน้อย',
	'INST_ERR_DB_NO_ORACLE'		=> 'คุณต้องแก้ไขฐานข้อมูล Oracle ตัวแปร <var>NLS_CHARACTERSET</var> ให้เป็น <var>UTF8</var> อาจแก้ไขโดยอัปเกรดเป็นเวอร์ชัน 9.2+ หรือแก้ไขตัวแปรนั้น',
	'INST_ERR_DB_NO_FIREBIRD'	=> 'เวอร์ชันของ Firebird เก่ากว่า 2.0 กรุณาอัปเกรดเป็นเวอร์ชันใหม่',
	'INST_ERR_DB_NO_FIREBIRD_PS'=> 'ฐานข้อมูล Firebird มี page size น้อยกว่า 8192 ซึ่งจำเป็นจะต้องมีอย่างน้อย 8192',
	'INST_ERR_DB_NO_POSTGRES'	=> 'ชื่อฐานข้อมูลที่คุณเลือก ไม่ได้ถูกสร้างโดยใช้การเข้ารหัสแบบ <var>UNICODE</var> หรือ <var>UTF8</var> กรุณาเลือกชื่อฐานข้อมูลที่ถูกสร้างโดยใช้การเข้ารหัสแบบ <var>UNICODE</var> or <var>UTF8</var>',
	'INST_ERR_DB_NO_NAME'		=> 'คุณไม่ได้พิมพ์ชื่อฐานข้อมูล',
	'INST_ERR_EMAIL_INVALID'	=> 'The e-mail address you entered is invalid.',
	'INST_ERR_EMAIL_MISMATCH'	=> 'คุณพิมพ์ e-mail ทั้งสองช่องไม่เหมือนกัน',
	'INST_ERR_FATAL'			=> 'ความผิดพลาดร้ายแรงระหว่างการติดตั้ง',
	'INST_ERR_FATAL_DB'			=> 'เกิดข้อความผิดพลาดร้ายแรงที่แก้ไขไม่ได้ในฐานข้อมูล อาจเป็นเพราะ username ที่ใช้ไม่มีสิทธิ์ใช้คำสั่ง <code>CREATE TABLES</code> หรือ <code>INSERT</code>, ฯลฯ. หรืออาจเป็นเพราะคุณกำลังพยายามติดตั้ง phpBB ทับตัวเก่า<br />กรุณาอ่านรายละเอียดที่ด้านล่างนี้ และติดต่อผู้ให้บริการเซิฟเวอร์เพื่อแก้ไข หรือขอทราบข้อมูลเพิ่มเติมที่ support forums ของ phpBB',
	'INST_ERR_FTP_PATH'			=> 'ไม่สามารถใช้งานไดเรคทอรี่ได้ กรุณาตรวจสอบที่อยู่ไดเร็คทอรี่',
	'INST_ERR_FTP_LOGIN'		=> 'ไม่สามารถเข้าสู่ระบบ FTP กรุณาตรวจสอบ username และ password',
	'INST_ERR_MISSING_DATA'		=> 'กรุณากรอกให้ครบทุกช่อง',
	'INST_ERR_NO_DB'			=> 'ไม่สามารถเรียกใช้โมดูลสำหรับฐานข้อมูลที่เลือก',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'คุณพิมพ์ password ทั้งสองช่องไม่เหมือนกัน',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'คุณพิมพ์ password ยาวเกิน 30 ตัวอักษร',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'คุณพิมพ์ password สั้นกว่า 6 ตัวอักษร',
	'INST_ERR_PREFIX'			=> 'มีตารางที่ใช้คำนำหน้าชื่อตารางนี้อยู่ก่อนแล้ว กรุณาใช้คำนำหน้าชื่อตารางตัวอื่นแทน',
	'INST_ERR_PREFIX_INVALID'	=> 'มีสัญลักษณ์พิเศษอยู่ในคำนำหน้าชื่อตาราง กรุณาอย่าใช้สัญลักษณ์พิเศษ เช่น เครื่องหมายลบ',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'คำนำหน้าชื่อตารางยาวเกิน %d ตัวอักษร',
	'INST_ERR_USER_TOO_LONG'	=> 'คุณพิมพ์ password ยาวเกิน 20 ตัวอักษร',
	'INST_ERR_USER_TOO_SHORT'	=> 'คุณพิมพ์ password สั้นกว่า 3 ตัวอักษร',
	'INVALID_PRIMARY_KEY'		=> 'Invalid primary key : %s',

	// mbstring
	'MBSTRING_CHECK'						=> '<samp>mbstring</samp> extension check',
	'MBSTRING_CHECK_EXPLAIN'				=> '<strong>Required</strong> - <samp>mbstring</samp> is a PHP extension that provides multibyte string functions. Certain features of mbstring are not compatible with phpBB and must be disabled.',
	'MBSTRING_FUNC_OVERLOAD'				=> 'Function overloading',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> '<var>mbstring.func_overload</var> must be set to either 0 or 4.',
	'MBSTRING_ENCODING_TRANSLATION'			=> 'Transparent character encoding',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> must be set to 0.',
	'MBSTRING_HTTP_INPUT'					=> 'HTTP input character conversion',
	'MBSTRING_HTTP_INPUT_EXPLAIN'			=> '<var>mbstring.http_input</var> must be set to <samp>pass</samp>.',
	'MBSTRING_HTTP_OUTPUT'					=> 'HTTP output character conversion',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> must be set to <samp>pass</samp>.',

	'MAKE_FOLDER_WRITABLE'		=> 'Please make sure that this folder exists and is writable by the webserver then try again:<br />ยป<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'Please make sure that these folders exist and are writable by the webserver then try again:<br />ยป<strong>%s</strong>.',

	'NAMING_CONFLICT'			=> 'Naming conflict: %s and %s are both aliases<br /><br />%s',
	'NEXT_STEP'					=> 'ขั้นตอนถัดไป',
	'NOT_FOUND'					=> 'ค้นหาไม่พบ',
	'NOT_UNDERSTAND'			=> 'Could not understand %s #%d, table %s ("%s")',
	'NO_CONVERTORS'				=> 'No convertors are available for use.',
	'NO_CONVERT_SPECIFIED'		=> 'No convertor specified.',
	'NO_LOCATION'				=> 'ค้นหาไม่พบ ถ้าคุณทราบที่อยู่ของโปรแกรม Imagemagick ที่ติดตั้งไว้ คุณสามารถนำมากรอกที่ administration control panel ได้ในภายหลัง',
	'NO_TABLES_FOUND'			=> 'No tables found.',
// TODO: Write some explanatory introduction text

	'OVERVIEW_BODY'					=> 'ยินดีต้อนรับสู่ phpBB รูปแบบใหม่ นั่นคือ phpBB 3.0! ซึ่งเวอร์ชันนี้จะช่วยให้เราสามารถตรวจสอบข้อผิดพลาดและปัญหาได้ดีขึ้น</p><p>กรุณาอ่าน <a href="../docs/INSTALL.html">คู่มือการติดตั้ง</a> สำหรับใช้ในการติดตั้ง phpBB3</p><p><strong style="text-transform: uppercase;">หมายเหตุ:</strong> เวอร์ชันนี้ยัง <strong style="text-transform: uppercase;">ไม่ใช่เวอร์ชันสุดท้าย</strong> คุณอาจต้องรอจนกว่าจะมีเวอร์ชันสุดท้ายออกมาก่อน จึงจะนำไปใช้งานจริงได้</p><p>ระบบการติดตั้งจะช่วยแนะนำการ \'ติดตั้ง\' หรือ \'อัปเดต/นำเข้า\' เวอร์ชันของ phpBB. กรุณาคลิกที่แท็บคำสั่งด้านบนเพื่อเริ่มการทำงาน',

	'PCRE_UTF_SUPPORT'				=> 'สนับสนุน PCRE UTF-8',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> '<font face=\'Tahoma,MS Sans Serif\'>phpBB จะ <strong>ไม่ทำงาน</strong> ถ้า PHP ไม่ได้ถูกติดตั้งพร้อมกับส่วนขยาย PCRE UTF-8</font>',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'สามารถใช้ฟังก์ชัน getimagesize() ของ PHP',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<font face=\'Tahoma,MS Sans Serif\'><strong>ความต้องการ</strong> - เพื่อให้ phpBB ทำงานได้อย่างถูกต้อง ฟังก์ชันนี้จะต้องสามารถใช้งานได้</font>',
	'PHP_OPTIONAL_MODULE'			=> 'โมดูลพิเศษ',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>หมายเหตุ</strong> - โมดูลหรือโปรแกรมเหล่านี้เป็นสิ่งเพิ่มเติม แต่ถ้าสามารถใช้งานได้ ก็จะช่วยเพิ่มความสามารถให้กับ phpBB มากขึ้น',
	'PHP_SUPPORTED_DB'				=> 'ฐานข้อมูลที่ใช้งานได้',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>ความต้องการ</strong> - จะต้องมีอย่างน้อย 1 ฐานข้อมูลที่ใช้งานได้ ถ้าไม่มีฐานข้อมูลที่ใช้งานได้เลย กรุณาติดต่อผู้ให้บริการเซิฟเวอร์ หรือถ้าคุณติดตั้งเซิฟเวอร์เอง กรุณาอ่านคู่มือการติดตั้ง PHP อย่างละเอียด',
	'PHP_REGISTER_GLOBALS'			=> 'ยกเลิกการใช้งาน <var>register_globals</var>',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> '<font face=\'Tahoma,MS Sans Serif\'>phpBB จะยังสามารถใช้งานได้แม้ตัวแปรนี้ไม่ได้ถูกยกเลิก แต่เพื่อความปลอดภัย กรุณายกเลิกการใช้งานตัวแปรนี้ในการตั้งค่าของ PHP</font>',
	'PHP_SAFE_MODE'					=> 'Safe mode',
	'PHP_SETTINGS'					=> 'เวอร์ชันของ PHP และการตั้งค่า',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>ความต้องการ</strong> - คุณจะต้องใช้ PHP 4.3.3 เป็นอย่างน้อย ในการติดตั้ง phpBB ถ้ามีข้อความ <var>safe mode</var> แสดงว่า PHP ถูกติดตั้งและทำงานใน safe mode ซึ่งจะจำกัดความสามารถในการควบคุมและความสามารถอื่นๆลง',
	'PHP_URL_FOPEN_SUPPORT'			=> 'เปิดใช้งาน <var>allow_url_fopen</var>',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'	=> '<font face=\'Tahoma,MS Sans Serif\'><strong>หมายเหตุ</strong> - ตัวแปรนี้เป็นสิ่งเพิ่มเติม แต่ฟังก์ชันบางอย่างของ phpBB เช่น รูปภาพส่วนตัวจากเว็บภายนอก (off-site avatars) จะไม่ทำงาน</font>',
	'PHP_VERSION_REQD'				=> 'PHP version >= 4.3.3',
	'POST_ID'						=> 'Post ID',
	'PREFIX_FOUND'					=> 'A scan of your tables has shown a valid installation using <strong>%s</strong> as table prefix.',
	'PREPROCESS_STEP'				=> 'Executing pre-processing functions/queries',
	'PRE_CONVERT_COMPLETE'			=> 'คุณสามารถคลิกปุ่ม ขั้นตอนถัดไป เพื่อเริ่มการนำข้อมูลเข้า ซึ่งคุณอาจต้องทำการแก้ไขหลายอย่างด้วยตัวเอง<br />เมื่อการนำข้อมูลเข้าเสร็จสิ้นลง กรุณาตรวจสอบสิทธิ์, สร้างรายการค้นหาใหม่ถ้าจำเป็น, และ อย่าลืมตรวจสอบว่าทุกไฟล์ได้ถูกคัดลอกมาอย่างถูกต้อง<br />เช่น ไฟล์รูปภาพประจำตัว (avatars) และ รูปแสดงอารมณ์ (smilies)',
	'PROCESS_LAST'					=> 'เข้าสู่ระบบล่าสุด',

	'REFRESH_PAGE'				=> 'เปลี่ยนหน้าอัตโนมัติ',
	'REFRESH_PAGE_EXPLAIN'		=> '<font face=\'Tahoma,MS Sans Serif\'>ถ้าคุณเลือก ใช่ ตัวนำเข้าจะเปลี่ยนหน้าไปยังขั้นตอนถัดไปโดยอัตโนมัติ แต่ถ้าคุณเพิ่งใช้งานตัวนำเข้านี้เป็นครั้งแรก หรือ ต้องการทดสอบปัญหาต่างๆ กรุณาเลือกเป็น ไม่ใช่</font>',
//	'REQUIRED'					=> 'Required',
	'REQUIREMENTS_TITLE'		=> 'คุณสมบัติของเซิฟเวอร์',
	'REQUIREMENTS_EXPLAIN'		=> 'ก่อนจะเริ่มทำการติดตั้งจริง phpBB จะทดสอบบางอย่างกับเซิฟเวอร์ของคุณ เพื่อให้แน่ใจว่าคุณจะสามารถใช้งาน phpBB ได้ กรุณาอ่านผลลัพธ์ทั้งหมดอย่างละเอียด และอย่าทำการติดตั้งต่อจนกว่าจะผ่านการทดสอบทั้งหมด รวมถึงโมดูลพิเศษที่คุณต้องการจะใช้ด้วย',
	'RETRY_WRITE'				=> 'Retry writing config',
	'RETRY_WRITE_EXPLAIN'		=> 'If you wish you can change the permissions on config.php to allow phpBB to write to it. Should you wish to do that you can click Retry below to try again. Remember to return the permissions on config.php after phpBB has finished installation.',

	'SCRIPT_PATH'				=> 'ตำแหน่งที่อยู่ของโปรแกรมเว็บบอร์ด',
	'SCRIPT_PATH_EXPLAIN'		=> '<font face="Tahoma,MS Sans Serif">เป็นตำแหน่ง URL ของเว็บบอร์ด แต่ไม่ต้องระบุชื่อ domain เช่น <samp>/phpBB3</samp></font>',
	'SELECT_LANG'				=> 'Select language',
	'SERVER_CONFIG'				=> 'Server configuration',
	'SEARCH_INDEX_UNCONVERTED'	=> 'ยังไม่ได้ทำการแปลง รายการค้นหา',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'รายการแปลงของเว็บบอร์ดตัวเก่ายังไม่ได้ถูกแปลง ซึ่งจะทำให้ไม่สามารถค้นหาข้อความในเว็บบอร์ดได้ กรุณาไปที่ Administration Control Panel เลือก บำรุงรักษา แล้วเลือกเมนูย่อย รายการค้นหา',
	'SOFTWARE'					=> 'Board software',
	'SPECIFY_OPTIONS'			=> 'กรอกข้อมูลของเว็บบอร์ดตัวเก่า',
	'STAGE_ADMINISTRATOR'		=> 'รายละเอียดสำหรับ Administrator',
	'STAGE_ADVANCED'			=> 'การตั้งค่าชั้นสูง',
	'STAGE_ADVANCED_EXPLAIN'	=> 'การตั้งค่าต่างๆในหน้านี้ มีไว้สำหรับให้คุณสามารถแก้ไขค่าต่างๆที่ไม่ใช่ค่าดั้งเดิม แต่ถ้าคุณไม่แน่ใจ กรุณาข้ามไปขั้นตอนถัดไป ซึ่งคุณสามารถแก้ไขค่าเหล่านี้ที่ Administration Control Panel ได้ในภายหลัง',
	'STAGE_CONFIG_FILE'			=> 'ไฟล์การตั้งค่า',
	'STAGE_CREATE_TABLE'		=> 'สร้างตารางฐานข้อมูล',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'สร้างตารางฐานข้อมูลสำหรับ phpBB 3.0 เสร็จเรียบร้อยแล้ว คลิกปุ่ม ขั้นตอนถัดไป เพื่อจบการติดตั้ง',
	'STAGE_DATABASE'			=> 'ตั้งค่าฐานข้อมูล',
	'STAGE_FINAL'				=> 'จบการทำงาน',
	'STAGE_INTRO'				=> 'คำแนะนำ',
	'STAGE_IN_PROGRESS'			=> 'กำลังนำข้อมูลเข้า',
	'STAGE_REQUIREMENTS'		=> 'ตรวจสอบระบบ',
	'STAGE_SETTINGS'			=> 'การตั้งค่า',
	'STARTING_CONVERT'			=> 'เริ่มกระบวนการนำข้อมูลเข้า',
	'STEP_PERCENT_COMPLETED'	=> 'ขั้นตอนที่ <strong>%d</strong> จาก <strong>%d</strong>',
	'SUB_INTRO'					=> 'คำแนะนำ',
	'SUB_LICENSE'				=> 'ลิขสิทธิ์',
	'SUB_SUPPORT'				=> 'ความช่วยเหลือ',
	'SUCCESSFUL_CONNECT'		=> 'ติดต่อสำเร็จ',
// TODO: Write some text on obtaining support
	'SUPPORT_BODY'				=> 'คุณสามารถขอความช่วยเหลือได้ที่ <a href="http://www.phpbb.com/community/viewforum.php?f=46">the phpBB 3.0.x support forums</a> เราจะช่วยตอบคำถามเกี่ยวกับการติดตั้งทั่วไป, แก้ปัญหาการตั้งค่าตัวเลือก, ปัญหาการนำเข้าหรืออัปเกรดเว็บบอร์ด, และ ตรวจสอบปัญหาความผิดพลาด (bug) คุณสามารถพูดคุยเกี่ยวกับ modifications (mods) และ รหัสหรือรูปแบบส่วนตัวเพิ่มเติม (custom code/style)</p><p>คุณสามารถคลิกเพื่ออ่าน <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/">Quick Start Guide</a> และ <a href="http://www.phpbb.com/support/documentation/3.0/">the online documentation</a></p><p>กรุณา <a href="http://www.phpbb.com/support/">สมัครเป็นสมาชิก</a> กับเรา เพื่อที่คุณจะได้รับการแจ้งข่าวต่างๆ และเมื่อมีเว็บบอร์ดเวอร์ชันใหม่ออกมา',
	'SYNC_FORUMS'				=> 'Starting to sync forums',
	'SYNC_TOPICS'				=> 'Starting to sync topics',
	'SYNC_TOPIC_ID'				=> 'Synchronising topics from <var>topic_id</var> %1$s to %2$s.',

	'TABLES_MISSING'			=> 'Could not find these tables<br />ยป <strong>%s</strong>.',
	'TABLE_PREFIX'				=> 'นำหน้าชื่อตารางในฐานข้อมูล (Prefix table) ด้วยคำว่า',
	'TABLE_PREFIX_SAME'			=> 'The table prefix needs to be the one used by the software you are converting from.<br />ยป Specified table prefix was %s.',
	'TESTS_PASSED'				=> 'ผ่านการทดสอบ',
	'TESTS_FAILED'				=> 'ไม่ผ่านการทดสอบ',

	'UNABLE_WRITE_LOCK'			=> 'ไม่สามารถเขียนไฟล์ที่ถูกล็อก',
	'UNAVAILABLE'				=> 'ใช้งานไม่ได้',
	'UNWRITABLE'				=> 'เขียนไม่ได้',
	'UPDATE_TOPICS_POSTED'		=> 'Generating topics posted information',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'An error occured while generating topics posted information. You can retry this step in the ACP after the conversion process is completed.',
	'VERSION'					=> 'Version',

	'WELCOME_INSTALL'			=> 'ยินดีต้อนรับเข้าสู่ เว็บไซด์ www.thaipostza.com และ www.phpbb3thai.com',
	'WRITABLE'					=> 'เขียนได้',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> 'All files are up to date with the latest phpBB version. You should now <a href="../ucp.php?mode=login">login to your board</a> and check if everything is working fine. Do not forget to delete, rename or move your install directory!',
	'ARCHIVE_FILE'				=> 'Source file within archive',

	'BACK'				=> 'ย้อนกลับ',
	'BINARY_FILE'		=> 'Binary file',
	'BOT'				=> 'Spider/Robot',

	'CHECK_FILES'					=> 'Check files',
	'CHECK_FILES_AGAIN'				=> 'Check files again',
	'CHECK_FILES_EXPLAIN'			=> 'Within the next step all files will be checked against the update files - this can take a while if this is the first file check.',
	'CHECK_FILES_UP_TO_DATE'		=> 'According to your database your version is up to date. You may want to proceed with the file check to make sure all files are really up to date with the latest phpBB version.',
	'CHECK_UPDATE_DATABASE'			=> 'Continue update process',
	'COLLECTED_INFORMATION'			=> 'Information on collected files',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'The list below shows information about the files needing an update. Please read the information in front of every status block to see what they mean and what you may need to do to perform a successful update.',
	'COMPLETE_LOGIN_TO_BOARD'		=> 'You should now <a href="../ucp.php?mode=login">login to your board</a> and check if everything is working fine. Do not forget to delete, rename or move your install directory!',
	'CONTINUE_UPDATE_NOW'			=> 'Continue the update process now',
	'CURRENT_FILE'					=> 'Current original file',
	'CURRENT_VERSION'				=> 'เวอร์ชั่นปัจจุบัน',

	'DATABASE_TYPE'						=> 'ชนิดฐานข้อมูล',
	'DATABASE_UPDATE_INFO_OLD'			=> 'The database update file within the install directory is outdated. Please make sure you uploaded the correct version of the file.',
	'DELETE_USER_REMOVE'				=> 'ลบผู้ใช้งานและโพสต์',
	'DELETE_USER_RETAIN'				=> 'ลบเฉพาะผู้ใช้งานไม่ลบโพสต์',
	'DESTINATION'						=> 'Destination file',
	'DIFF_INLINE'						=> 'Inline',
	'DIFF_RAW'							=> 'Raw unified diff',
	'DIFF_SEP_EXPLAIN'					=> 'End of current file / Begin of new updated file',
	'DIFF_SIDE_BY_SIDE'					=> 'Side by Side',
	'DIFF_UNIFIED'						=> 'Unified diff',
	'DO_NOT_UPDATE'						=> 'Do not update this file',
	'DONE'								=> 'Done',
	'DOWNLOAD'							=> 'Download',
	'DOWNLOAD_AS'						=> 'Download as',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Download modified files archive',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Once downloaded you should unpack the archive. You will find the modified files you need to upload to your phpBB root directory within it. Please upload the files to their respective locations then. After you have uploaded all files, please check the files again with the other button below.',

	'ERROR'			=> 'ผิดพลาด',
	'EDIT_USERNAME'	=> 'แก้ไข Username',

	'FILE_ALREADY_UP_TO_DATE'		=> 'File is already up to date.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'File not allowed to be diffed.',
	'FILE_USED'						=> 'Information used from',			// Single file
	'FILES_CONFLICT'				=> 'Conflict files',
	'FILES_CONFLICT_EXPLAIN'		=> 'The following files are modified and do not represent the original files from the old version. phpBB determined that these files create conflicts if they are tried to be merged. Please investigate the conflicts and try to manually resolve them or continue the update choosing the preferred merging method. If you resolve the conflicts manually check the files again after you modified the them. You are also able to choose between the preferred merge method for every file. The first one will result in a file where the conflicting lines from your old file will be lost, the other one will result in loosing the changes from the newer file.',
	'FILES_MODIFIED'				=> 'Modified files',
	'FILES_MODIFIED_EXPLAIN'		=> 'The following files are modified and do not represent the original files from the old version. The updated file will be a merge between your modifications and the new file.',
	'FILES_NEW'						=> 'New files',
	'FILES_NEW_EXPLAIN'				=> 'The following files currently do not exist within your installation.',
	'FILES_NEW_CONFLICT'			=> 'New conflicting files',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'The following files are new within the latest version but it has been determined that there is already a file with the same name within the same position. This file will be overwritten by the new file.',
	'FILES_NOT_MODIFIED'			=> 'Not modified files',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'The following files were not modified and represent the original phpBB files from the version you want to update from.',
	'FILES_UP_TO_DATE'				=> 'Already updated files',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'The following files are already up to date and do not need to be updated.',
	'FTP_SETTINGS'					=> 'FTP settings',
	'FTP_UPDATE_METHOD'				=> 'FTP upload',

	'INCOMPATIBLE_UPDATE_FILES'		=> 'The update files found are incompatible with your installed version. Your installed version is %1$s and the update file is for updating phpBB %2$s to %3$s.',
	'INCOMPLETE_UPDATE_FILES'		=> 'The update files are incomplete.',
	'INLINE_UPDATE_SUCCESSFUL'		=> 'The database update was successful. Now you need to continue the update process.',
	
	'KEEP_OLD_NAME'		=> 'Keep username',

	'LATEST_VERSION'		=> 'เวอร์ชั่นล่าสุด',
	'LINE'					=> 'Line',
	'LINE_ADDED'			=> 'เพิ่ม',
	'LINE_MODIFIED'			=> 'แก้ไข',
	'LINE_REMOVED'			=> 'ลบออก',
	'LINE_UNMODIFIED'		=> 'Unmodified',
	'LOGIN_UPDATE_EXPLAIN'	=> 'In order to update your installation you need to login first.',

	'MAPPING_FILE_STRUCTURE'	=> 'To ease the upload here are the file locations which map your phpBB installation.',
	'MERGE_NO_MERGE_NEW_OPTION'	=> 'Do not merge - use new file',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'Do not merge - use currently installed file',
	'MERGE_MOD_FILE_OPTION'		=> 'Merge differences and use modified code within conflicting block',
	'MERGE_NEW_FILE_OPTION'		=> 'Merge differences and use new file code within conflicting block',
	'MERGE_SELECT_ERROR'		=> 'Conflicting file merge modes are not correctly selected.',

	'NEW_FILE'						=> 'New updated file',
	'NEW_USERNAME'					=> 'Username ใหม่',
	'NO_AUTH_UPDATE'				=> 'Not authorised to update',
	'NO_ERRORS'						=> 'No errors',
	'NO_UPDATE_FILES'				=> 'Not updating the following files',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'The following files are new or modified but the directory they normally reside in could not be found on your installation. If this list contains files to other directories than language/ or styles/ than you may have modified your directory structure and the update may be incomplete.',
	'NO_UPDATE_FILES_OUTDATED'		=> 'No valid update directory was found, please make sure you uploaded the relevant files.<br /><br />Your installation does <strong>not</strong> seem to be up to date. Updates are available for your version of phpBB %1$s, please visit <a href="http://www.phpbb.com/downloads/" rel="external">http://www.phpbb.com/downloads/</a> to obtain the correct package to update from Version %2$s to Version %3$s.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Your version is up to date. There is no need to run the update tool. If you want to make an integrity check on your files make sure you uploaded the correct update files.',
	'NO_UPDATE_INFO'				=> 'Update file information could not be found.',
	'NO_UPDATES_REQUIRED'			=> 'No updates required',
	'NO_VISIBLE_CHANGES'			=> 'No visible changes',
	'NOTICE'						=> 'Notice',
	'NUM_CONFLICTS'					=> 'Number of conflicts',

	'OLD_UPDATE_FILES'		=> 'Update files are out of date. The update files found are for updating from phpBB %1$s to phpBB %2$s but the latest version of phpBB is %3$s.',

	'PERFORM_DATABASE_UPDATE'			=> 'Perform database update',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'Below you will find a link to the database update script. This script needs to be run separately because updating the database might result in unexpected behaviour if you are logged in. The database update can take a while, so please do not stop the execution if it seems to hang. After you performed the database update just follow the link presented to continue the update process.',
	
	'PACKAGE_UPDATES_TO'				=> 'Current package updates to version',
	'PREVIOUS_VERSION'					=> 'เวอร์ชั่นที่แล้ว',
	'PROGRESS'							=> 'Progress',
	
	'RESULT'					=> 'Result',
	'RUN_DATABASE_SCRIPT'		=> 'Update my database now',

	'SELECT_DIFF_MODE'			=> 'Select diff mode',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Select download archive format',
	'SELECT_FTP_SETTINGS'		=> 'Select FTP settings',
	'SHOW_DIFF_CONFLICT'		=> 'Show differences/conflicts',
	'SHOW_DIFF_FINAL'			=> 'Show resulting file',
	'SHOW_DIFF_MODIFIED'		=> 'Show merged differences',
	'SHOW_DIFF_NEW'				=> 'Show file contents',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'Show differences',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'Show differences',
	'SOME_QUERIES_FAILED'		=> 'Some queries failed, the statements and errors are listing below.',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'This is probably nothing to worry about, update will continue. Should this fail to complete you may need to seek help at our support forums. See <a href="../docs/README.html">README</a> for details on how to obtain advice.',
	'STAGE_FILE_CHECK'			=> 'Check files',
	'STAGE_UPDATE_DB'			=> 'Update database',
	'STAGE_UPDATE_FILES'		=> 'Update files',
	'STAGE_VERSION_CHECK'		=> 'Version check',
	'STATUS_CONFLICT'			=> 'Modified file producing conflicts',
	'STATUS_MODIFIED'			=> 'Modified file',
	'STATUS_NEW'				=> 'New file',
	'STATUS_NEW_CONFLICT'		=> 'Conflicting new file',
	'STATUS_NOT_MODIFIED'		=> 'Not modified file',
	'STATUS_UP_TO_DATE'			=> 'Already updated file',

	'UPDATE_COMPLETED'				=> 'Update completed',
	'UPDATE_DATABASE'				=> 'Update database',
	'UPDATE_DATABASE_EXPLAIN'		=> 'Within the next step the database will be updated.',
	'UPDATE_DATABASE_SCHEMA'		=> 'Updating database schema',
	'UPDATE_FILES'					=> 'Update files',
	'UPDATE_FILES_NOTICE'			=> 'Please make sure you have updated your board files too, this file is only updating your database.',
	'UPDATE_INSTALLATION'			=> 'Update phpBB installation',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'With this option, it is possible to update your phpBB installation to the latest version.<br />During the process all of your files will be checked for their integrity. You are able to review all differences and files before the update.<br /><br />The file update itself can be done in two different ways.</p><h2>Manual Update</h2><p>With this update you only download your personal set of changed files to make sure you do not lose your file modifications you may have done. After you downloaded this package you need to manually upload the files to their correct position under your phpBB root directory. Once done, you are able to do the file check stage again to see if you moved the files to their correct location.</p><h2>Automatic Update with FTP</h2><p>This method is similar to the first one but without the need to download the changed files and uploading them on your own. This will be done for you. In order to use this method you need to know your FTP login details since you will be asked for them. Once finished you will be redirected to the file check again to make sure everything got updated correctly.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Release announcement</h1>

		<p>Please read <a href="%1$s" title="%1$s"><strong>the release announcement for the latest version</strong></a> before you continue your update process, it may contain useful information. It also contains full download links as well as the change log.</p>

		<br />

		<h1>How to update your installation with the Automatic Update Package</h1>

		<p>The recommended way of updating your installation listed here is only valid for the automatic update package. You are also able to update your installation using the methods listed within the INSTALL.html document. The steps for updating phpBB3 automatically are:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Go to the <a href="http://www.phpbb.com/downloads/" title="http://www.phpbb.com/downloads/">phpBB.com downloads page</a> and download the "Automatic Update Package" archive.<br /><br /></li>
			<li>Unpack the archive.<br /><br /></li>
			<li>Upload the complete uncompressed install folder to your phpBB root directory (where your config.php file is).<br /><br /></li>
		</ul>

		<p>Once uploaded your board will be offline for normal users due to the install directory you uploaded now present.<br /><br />
		<strong><a href="%2$s" title="%2$s">Now start the update process by pointing your browser to the install folder</a>.</strong><br />
		<br />
		You will then be guided through the update process. You will be notified once the update is complete.
		</p>
	',
	'UPDATE_INSTRUCTIONS_INCOMPLETE'	=> '

		<h1>Incomplete update detected</h1>

		<p>phpBB detected an incomplete automatic update. Please make sure you followed every step within the automatic update tool. Below you will find the link again, or go directly to your install directory.</p>
	',
	'UPDATE_METHOD'					=> 'Update method',
	'UPDATE_METHOD_EXPLAIN'			=> 'You are now able to choose your preferred update method. Using the FTP upload will present you with a form you need to enter your FTP account details into. With this method the files will be automatically moved to the new location and backups of the old files being created by appending .bak to the filename. If you choose to download the modified files you are able to unpack and upload them to their correct location manually later.',
	'UPDATE_REQUIRES_FILE'			=> 'The updater requires that the following file is present: %s',
	'UPDATE_SUCCESS'				=> 'Update was successful',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'Successfully updated all files. The next step involves checking all files again to make sure the files got updated correctly.',
	'UPDATE_VERSION_OPTIMIZE'		=> 'Updating version and optimising tables',
	'UPDATING_DATA'					=> 'Updating data',
	'UPDATING_TO_LATEST_STABLE'		=> 'Updating database to latest stable release',
	'UPDATED_VERSION'				=> 'Updated version',
	'UPLOAD_METHOD'					=> 'Upload method',

	'UPDATE_DB_SUCCESS'				=> 'Database update was successful.',
	'USER_ACTIVE'					=> 'Active user',
	'USER_INACTIVE'					=> 'Inactive user',

	'VERSION_CHECK'				=> 'Version check',
	'VERSION_CHECK_EXPLAIN'		=> 'Checks to see if the version of phpBB you are currently running is up to date.',
	'VERSION_NOT_UP_TO_DATE'	=> 'Your version of phpBB is not up to date. Please continue the update process.',
	'VERSION_NOT_UP_TO_DATE_ACP'=> 'Your version of phpBB is not up to date.<br />Below you will find a link to the release announcement for the latest version as well as instructions on how to perform the update.',
	'VERSION_UP_TO_DATE'		=> 'Your installation is up to date, no updates are available for your version of phpBB. You may want to continue anyway to perform a file validity check.',
	'VERSION_UP_TO_DATE_ACP'	=> 'Your installation is up to date, no updates are available for your version of phpBB. You do not need to update your installation.',
	'VIEWING_FILE_CONTENTS'		=> 'Viewing file contents',
	'VIEWING_FILE_DIFF'			=> 'Viewing file differences',

	'WRONG_INFO_FILE_FORMAT'	=> 'Wrong info file format',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Thanks, The Management',
	'CONFIG_SITE_DESC'				=> 'thaipostza.com ชุมชนแห่งการแบ่งปัน',
	'CONFIG_SITENAME'				=> 'thaipostza.com',

	'DEFAULT_INSTALL_POST'			=> 'นี่เป็นข้อความตัวอย่างการโพสหลังจากการติดตั้งเสร็จ โพสต์โดย thaipostza.com คุณสามารถลบโพสนี้ออกภายหลังได้ ขอให้สนุกกับการใช้งาน phpBB3 ทุกท่าน!',

	'EXT_GROUP_ARCHIVES'			=> 'Archives',
	'EXT_GROUP_DOCUMENTS'			=> 'Documents',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Downloadable Files',
	'EXT_GROUP_FLASH_FILES'			=> 'ไฟล์ Flash',
	'EXT_GROUP_IMAGES'				=> 'รูปภาพ',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Plain Text',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime Media',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real Media',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows Media',

	'FORUMS_FIRST_CATEGORY'			=> 'ฟอรั่มหลัก',
	'FORUMS_TEST_FORUM_DESC'		=> 'นี่เป็นฟอรั่มสำหรับทดสอบ ฟอรั่มนี้สร้างโดย thaipostza.com',
	'FORUMS_TEST_FORUM_TITLE'		=> 'ฟอรั่มทดสอบ 1',


	'RANKS_SITE_ADMIN_TITLE'		=> 'หน้าผู้ดูแลระบบ',

	'SMILIES_ARROW'					=> 'Arrow',
	'SMILIES_CONFUSED'				=> 'Confused',
	'SMILIES_COOL'					=> 'Cool',
	'SMILIES_CRYING'				=> 'Crying or Very Sad',
	'SMILIES_EMARRASSED'			=> 'Embarrassed',
	'SMILIES_EVIL'					=> 'Evil or Very Mad',
	'SMILIES_EXCLAMATION'			=> 'Exclamation',
	'SMILIES_GEEK'					=> 'Geek',
	'SMILIES_IDEA'					=> 'Idea',
	'SMILIES_LAUGHING'				=> 'Laughing',
	'SMILIES_MAD'					=> 'Mad',
	'SMILIES_MR_GREEN'				=> 'Mr. Green',
	'SMILIES_NEUTRAL'				=> 'Neutral',
	'SMILIES_QUESTION'				=> 'Question',
	'SMILIES_RAZZ'					=> 'Razz',
	'SMILIES_ROLLING_EYES'			=> 'Rolling Eyes',
	'SMILIES_SAD'					=> 'Sad',
	'SMILIES_SHOCKED'				=> 'Shocked',
	'SMILIES_SMILE'					=> 'Smile',
	'SMILIES_SURPRISED'				=> 'Surprised',
	'SMILIES_TWISTED_EVIL'			=> 'Twisted Evil',
	'SMILIES_UBER_GEEK'				=> 'Uber Geek',
	'SMILIES_VERY_HAPPY'			=> 'Very Happy',
	'SMILIES_WINK'					=> 'Wink',

	'TOPICS_TOPIC_TITLE'			=> 'ยินดีต้อนรับเข้าสู่ เว็บไซด์ www.thaipostza.com พันธมิตร www.phpbb3thai.com ',
));

?>