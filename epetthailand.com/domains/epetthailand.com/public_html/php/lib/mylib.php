<?
/*
###########################################################
#   Subname		: mylib_error
#   Purpose		: Handle error message.
#   Input  		: String - error type.[1]
#				: String - argument 1.[0..1]
#   Output 		: 
#   Called Sub	: mylib_error.
#		   		: mylib_message.
###########################################################
*/


function mylib_error() {   //file_name, $error_type, $arg1) {	

	$count = func_num_args();
	if($count < 1){
	  mylib_error('invalid_argument','mylib_error');
	}	
	$system_error = "ข้อผิดพลาดของระบบ";
	$information = "Information";
	$arg = func_get_args();
	global $g_error_template;
	$file_name = $g_error_template;  
	$error_type = $arg[0];
	if($count >1) {
		$arg1 = $arg[1];
	}
	global $g_contact;
   $contact = $g_contact;	  

   if ($error_type == 'file_not_found') {
      $message_header = "$system_error: ไม่สามารถเปิดไฟล์";
	  $message_body = "ไม่สามารถเปิดไฟล์ $arg1 ได้";

   }else if ($error_type == 'invalid_file_format') {
      $message_header = "$system_error: รูปแบบไฟล์ไม่ถูกต้อง";
	  $message_body = "ไม่สามารถอ่านไฟล์ $arg1 ได้เนื่องจากรูปแบบไม่ถูกต้อง";

   }
  else if ($error_type == 'invalid_argument') {
      $message_header = "$system_error: โปรแกรมผิดพลาด";
	  $message_body = "ส่ง argument ผิดพลาด ในโปรแกรม $arg1";

   }elseif ($error_type == 'function_return_error') {
      $message_header = "$system_error: โปรแกรมผิดพลาด";
	  $message_body = "เรียกโปรแกรมผิดพลาด";
	  
   }elseif ($error_type == 'bad_ip_address') {
      $message_header = "$system_error: โปรแกรมผิดพลาด";
	  $message_body = "ip address มีรูปแบบไม่ถูกต้อง";

   }elseif ($error_type == 'record_not_found') {
      $message_header = "$error_head: โปรแกรมผิดพลาด";
	  $message_body = "ไม่สามารถค้นหาข้อมูลที่ต้องการจากไฟล์ได้";
   }else {
      $message_header = "$system_error: Undefine Error";
   }
   $message_body .= "<br>กรุณาติดต่อ $contact";

   mylib_message($file_name, $message_header, $message_body);
   exit;
}

function mylib_message() {

	$count = func_num_args();
		if($count < 3){
	  mylib_error('invalid_argument','mylib_message');
	}	

	$arg = func_get_args();

	$file_name = $arg[0];
	$message_header = $arg[1];
	$message_body = $arg[2];
	$system_error = "ข้อผิดพลาดของระบบ";
	if(!  file_exists($file_name)){
		  $message_header = "$system_error: ไม่สามารถเปิดไฟล์แสดง error";
		  $message_body = "ไม่สามารถเปิดไฟล์ $file_name";
	  	  print $message_header."<br>".$message_body;
	}else{
		global $g_back_url;
		global $g_image_dir;
		global $g_base;

		  $message_str =  join(' ', file($file_name));
		  $pattern = array("'<!-- VAR:MESSAGE_HEADER -->'", "'<!-- VAR:MESSAGE_BODY -->'", "'<!-- VAR:BACK_URL -->'","'<!-- VAR:IMAGE_DIR -->'", "'<!-- VAR:BASE -->'" );
		  $replace = array($message_header, $message_body, $g_back_url, $g_image_dir, $g_base);
	      $message_str = preg_replace($pattern, $replace, $message_str);

		  echo $message_str;
	}
	exit;
}


/*###########################################################
#   Subname		: mylib_same_time
#   Purpose		: Check time whether it equals in specify unit 
#   Input  		: Integer - unit of time.	   	  		  [1]
#			 	  String - time serial to be checked.	  [1]
#			 	  String - time serial to be checked.	  [1]   
#   Output 		: 0 - equal
#			 	  1 - not equal
#			 	 -1 - error
#   Called Sub	: mylib_check_exist
#		   		: mylib_error
###########################################################
*/
function mylib_same_time() {
	
	$count = func_num_args();
		if($count < 3){
		mylib_error('invalid_argument', 'mylib_same_time'); 
	}	

	$allow_unit =array('H','D');
	$arg = func_get_args();

	$unit = $arg[0];
	$time1 = $arg[1];
    $time2 = $arg[2];
    
	if(mylib_check_exist($allow_unit,$unit) != 0){
		mylib_error('function_return_error');
	    return -1;
    }
	
	if ($unit == 'H'){
		$time1 = gmstrftime ("%H%d%m%Y", $time1);
		$time2 = gmstrftime ("%H%d%m%Y", $time2);

	   if ($time1 == $time2){
       	  return 0;
	   }else{
	   	  return 1;
	   }
	}elseif ($unit == 'D'){
		$time1 = gmstrftime ("%d%m%Y", $time1);
		$time2 = gmstrftime ("%d%m%Y", $time2);

	   if ($time1 == $time2){
       	  return 0;
	   }else{
	      return 1;
	   }
	}		 
}

/*###########################################################
#   Subname		: mylib_check_exist
#   Purpose		: Check existence 
#   Input  		: Array  - array to be checked with.[1..n]
#			 	  String - string to be checked.	[1]	   
#   Output 		: 0 - found
#			 	  1 - not found
#			 	 -1 - error
#   Called Sub	:  mylib_error
###########################################################
*/
function mylib_check_exist(){

	$count = func_num_args();
		if($count < 2){
		mylib_error('invalid_argument','mylib_check_exist'); 
		return -1;
	}	
	$arg = func_get_args();
	$list = $arg[0];
	$field= $arg[1];
//mylib_print_pair_array($list);
//echo "field=>".$field."<<br>";
	while(list($key, $value) = each($list)){
		//echo ">".$field."< == >".$value."<<br>";

		if($field == $value){
		   return 0;
		}
	}		
	return 1;
}

/*###########################################################
#   Subname		: mylib_trim
#   Purpose		: Cut space, \r\n, \n from string  
#   Input  		: String - string to be trim. [1]
#   Output 		: String - trimed string    [1]
#   Called Sub	: mylib_error
###########################################################
*/
function mylib_trim() {
    
	$count = func_num_args();
	if($count != 1){
		mylib_error('invalid_argument','mylib_trim');
		return -1;
	}

	$pattern = array("'\r\n$'", "'\n$'", "'^\s+'","'\s+$'" );
	$replace = array("","","","");
	$out = array();

	$arg = func_get_args();
	$value = $arg[0];
//	echo "in trim>".$argx;
//	mylib_print_pair_array($argx);
	$value = preg_replace($pattern, $replace, $value);
	return $value;
}

/*###########################################################
#   Subname		: mylib_trim_array
#   Purpose		: Cut space, \r\n, \n from string  
#   Input  		: Array - array to be trim. [1..n]
#   Output 		: Array - trimed array	    [1..n]
#				  or String - trimed string.[1]
#   Called Sub	: mylib_error
###########################################################
*/
function mylib_trim_array() {
    
	$count = func_num_args();
	if($count < 1){
		mylib_error('invalid_argument','mylib_trim_array');
		return -1;
	}

	$out = array();

	$arg = func_get_args();
	$argx = $arg[0];
//	echo "in trim>".$argx;
//	mylib_print_pair_array($argx);
	while(list($key, $value) = each($argx)){
//		echo $value;
		$value = mylib_trim($value);
		array_push($out,$value);
	}
	return $out;
}

/*###########################################################
#   Subname		: mylib_print_pair_array
#   Purpose		: print pair array  
#   Input  		: Associative array - pair array.	[2..n]
#   Output 		:  
#   Called Sub	: &mylib_error
###########################################################
*/
function mylib_print_pair_array(){

	$count = func_num_args();
	if($count < 1){
		mylib_error('invalid_argument','mylib_print_pair_array');
				return -1;
	}
	
	$arg = func_get_args();
	$arg = $arg[0];
	if(count($arg) <= 0) {
		return;
	}
	print "<p>=== Begin ===<br>\n";
	while(list($key, $value) = each($arg)){

		print "Name = >".$key."< Value = >".$value."<";
		print "<br>\n";
	}
	print "=== End ===<p>\n";
}

/*
###########################################################
#   Subname		: mylib_print_header
#   Purpose		: print header  
#   Input  		: 
#   Output 		:  
#   Called Sub	: 
###########################################################
sub mylib_print_header(){
	print "Content-Type: text/html\n\n";
}

/*###########################################################
#   Subname		: mylib_print_result
#   Purpose		: print specify string  
#   Input  		: String - string to be printed.		   [1]
#   Output 		:  
#   Called Sub	: &mylib_error
###########################################################
*/
function mylib_print_result() {

	$count = func_num_args();
	if($count < 1){
		mylib_error('invalid_argument','mylib_print_result');
				return -1;
	}
	$arg = func_get_args();

	print "<HTML><BODY><p>->$arg[0]<-<p></BODY></HTML>";
}

/*
###########################################################
#   Subname		: mylib_make_link
#   Purpose		: make link of email and URL  
#   Input  		: String - string to be made link.		   [1]
#   Output 		: String.  		  	 		 			   [1]
#   Called Sub	: 
###########################################################
*/
function mylib_make_link(){

	$count = func_num_args();
	if($count < 1){
		mylib_error('invalid_argument','mylib_make_link');
				return -1;
	}
	$arg = func_get_args();

	$string = $arg[0];
	//echo "<br>";
	//echo $string;
	//echo "<br>";

	$pattern = array("/([^\s]+@[^\s]+\.[^\s]+)/", "/\[img\](http:\/\/[^\[]+)\[\/img\]/", "/\[url\](http:\/\/[^\[]+)\[\/url\]/" );
	$replace = array("<a href=\"mailto:\\1\">\\1</a>", "<img src=\"\\1\">" , "<a href=\"\\1\">\\1</a>");

	$string = preg_replace($pattern, $replace, $string);
	return $string;
}

/*###########################################################
#   Subname		: mylib_encode_data
#   Purpose		: Encode specifies string with specifies string
#   Input  		: Associative array  - array of key and value.	   [2..n]
#			 	: Array - string to be encoded.[1..n]
#				: Long - the first parameter length.[1]	   
#   Output 		: Encoded array.Or [1]
#				: Encode  Sting.[1]
#   Called Sub	: 
###########################################################
*/
function mylib_encode_data() {
	$count = func_num_args();
	if($count < 3){
		mylib_error('invalid_argument','mylib_encode_data');
				return -1;
	}
	$arg = func_get_args();
	
	$len = $arg[2];
	$pairs = $arg[0];
	$fields = $arg[1];

	$pattern = array_keys($pairs);
	$replace = array_values($pairs);
	$out =array();

	while(list($key, $value) = each($fields)){
		$string = preg_replace($pattern, $replace, $value);
		$out = array_merge($out, array($key=>$string));
	}

	return $out;
}   

/*###########################################################
#   Subname		: mylib_get_agent
#   Purpose		: Get user ip address
#   Input  		: 	   
#   Output 		: String - ip address.	[1]
#   Called Sub	: mylib_error
###########################################################
*/
function mylib_get_agent(){
	
	global $_SERVER;
	$ip = getenv("REMOTE_ADDR");
	//echo "<br>";
	//echo "ip=".$ip;
	//echo "<br>";
  	if ( preg_match("/.*\..*\..*\..*/", $ip )){
	
	}else{
	   mylib_error('bad_ip_address');
	}

	if ($forward = $_SERVER["HTTP_X_FORWARDED_FOR"]) {
	   $ip .= ':'.$forward;
	}
	return $ip;
}

/*
###########################################################
#   Subname		: mylib_check_index
#   Purpose		: Find the index of array that match specify string
#   Input  		: Array  - array to be checked. 	   [1..n]
#			 	: String - string to be match.		   [1]	   
#   Output 		: Integer - index of matched array.	   [l]
#				: -1 - error
#   Called Sub	: mylib_error
#   Comment     : Can not use with associative array
###########################################################
*/
function mylib_check_index() {

	$count = func_num_args();
	if($count < 2){
		mylib_error('invalid_argument','mylib_check_index');
				return -1;
	}
	$arg = func_get_args();

	$field = $arg[1];
	$index = array_search ($field, $arg[0]);
	if ($index < 0) {	
		return -1;
	}else{
		   return $index;

	}
	
}

/*###########################################################
#   Subname		: mylib_check_blank
#   Purpose		: Find the blank field
#   Input  		: Associative array - array of key and value.	     [2..n]
#				: Array  - array of field to be checked. [1..n]
#			 	: Integer - length of the first argument.[1]	   
#   Output 		: String - blank field.[0..l]
#				: "" - no blank field.[0..1]
#				: -1 - error
#   Called Sub	: mylib_error
###########################################################
*/
	function mylib_check_blank() {
	$count = func_num_args();
	if($count < 2){
		mylib_error('invalid_argument','mylib_check_blank');
				return -1;
	}
	$arg = func_get_args();

	$len = $arg[2];

	$pairs = $arg[0];
	$fields = $arg[1];

	while(list($key, $value) = each($fields)){
	    if (!array_key_exists($value, $pairs) || $pairs[$value] == "") {
			return $value;
		}
	}

	return "";
}   

/*
###########################################################
#   Subname		: mylib_split_loop
#   Purpose		: Split string in specific file name with specific separator
#   Input  		: String - File name of string to be splited.	[1]
#				: String - Loop label to be splited. 			[1]
#   Output 		: Array - splited string.						[3]
#				: -1 - error
#   Called Sub	: mylib_error
#		   		: mylib_split_string
#		   		: mylib_get_data
###########################################################
*/
function mylib_split_loop(){

	$count = func_num_args();
	if($count < 2){
		mylib_error('invalid_argument','mylib_split_loop');
				return -1;
	}
	$arg = func_get_args();

	$data = &mylib_get_data($arg[0]);
    $str = join("", $data);
	return (mylib_split_loop_string($str, $arg[1]));
}

/*
###########################################################
#   Subname		: mylib_split_loop_string
#   Purpose		: Split string with specific separator
#   Input  		: String - String to be splited.	[1]
#				: String - Loop label to be splited.[1]
#   Output 		: Array - splited string.			[3]
#				: -1 - error
#   Called Sub	: mylib_error
###########################################################
*/
function mylib_split_loop_string(){

	$count = func_num_args();
	if($count != 2){
		mylib_error('invalid_argument','mylib_split_loop_string');
				return -1;
	}
	$arg = func_get_args();
	$label = $arg[1];
	$pat = "<!-- LOOP:".$label." -->";
	$out = split($pat, $arg[0]);
	$len = count($out);

	if ( $len != 3 ) {
	   mylib_error('invalid_file_format', $file_name);
 	}
	return $out;
}


/*###########################################################
#   Subname		: mylib_get_data
#   Purpose		: Get all record from data file.
#   Input  		: String - filename.[1]
#   Output 		: Array - Data record.[0..1]
#   Called Sub	: mylib_error.
###########################################################
*/
function mylib_get_data(){

	$count = func_num_args();
	if($count != 1){
		mylib_error('invalid_argument','mylib_get_data');
				return -1;
	}
	$arg = func_get_args();

	if (!file_exists($arg[0])) {
		mylib_error( 'file_not_found', $arg[0]);
	}else{
	 $data = file($arg[0]);
	}
	return($data); 
}

/*
###########################################################
#   Subname		: mylib_get_agent_forward
#   Purpose		: Get agent ip address
#   Input  		: String - ip address.[1]
#   Output 		: String - ip address.[1]
#				: -1 - error
#   Called Sub	: mylib_error
###########################################################
*/
function mylib_get_agent_forward(){

	$count = func_num_args();
	if($count != 1){
		mylib_error('invalid_argument','mylib_get_agent_forward');
		return -1;
	}
	$arg = func_get_args();

	$ip = $arg[0];


	if ( preg_match("/:/", $ip)){
		// Case ip match x.x.x.x:x.x.x.x,x.x.x.x

		$split = split(":", $ip);

		$temp = $split[0];	// 1st set of ip
		$ip = $split[1];

	   if ( preg_match("/,/", $ip)) {
   		  $split = split(",", $ip);
	   	  $ip = $split[0];
	   }
	   if ( !preg_match("/.*\..*\..*\..*/", $ip )){
		  $ip = $temp;
	   }
	}
    if ( !preg_match("/.*\..*\..*\..*/", $ip )){
		mylib_error('bad_ip_address');
	}

	return mylib_trim($ip);
}
/*
###########################################################
#   Subname		: mylib_check_rude_word
#   Purpose		: Check rude word with rude word list in specific file.
#   Input  		: Associative Array  - data to be checked.[2..n]
#        		: String - file name. 		  [1]
#   Output 		: String - matched rude word. [1]
#				: -1 - error
#   Called Sub	: mylib_error
#		   		: mylib_get_data
###########################################################
*/
function mylib_check_rude_word() {

	$count = func_num_args();
	if($count < 2){
		mylib_error('invalid_argument','mylib_check_rude_word');
		return -1;
	}
	$arg = func_get_args();

	$file_name = $arg[1];
	$rude_str = join(" ", $arg[0]);
	$pairs = mylib_get_data($file_name);
	$pairs = mylib_trim_array($pairs);

	while(list($key, $value) = each($pairs)){
		$pat = sprintf("\$result = preg_match(\"/%s/\",\"%s\");", $value, $rude_str);
		eval($pat);
		if( $result > 0 ) {
			return $value;
		}
	}
}
/*
###########################################################
#   Subname		: mylib_date_time_diff
#   Purpose		: Compare the two specific time with specific period.
#   Input  		: String - period of time.[1]
#        		: Long - first time serial.[1]
#        		: Long - second time serial.[1]
#   Output 		: 0 - time2 equals time1 at specific time.[0..1]
#				: 1 - time2 not longer than time1 at specific time.[0..1]
#				: 2 - time2 longer than time1 at specific time.[0..1]
#				: -1 - error
#   Called Sub	: mylib_error
###########################################################
*/
function mylib_date_time_diff() {

	$count = func_num_args();
	if($count != 3){
		mylib_error('invalid_argument','mylib_date_time_diff');
		return -1;
	}

	$allow_unit = array("H");
	$arg = func_get_args();

	$unit = $arg[0];
	$time1 = $arg[1];
    $time2 = $arg[2];

    if( !preg_match("/[0-9]+[H]/", $unit )) {
		mylib_error('function_return_error');
	    return -1;
    }
	
	$diff = preg_replace("/[A-z]/","", $unit);
	$diff = mylib_trim($diff);

	$unit = preg_replace("/[0-9]/","", $unit);
	$unit = mylib_trim($unit);

	if(mylib_check_exist($allow_unit,$unit) != 0){
		mylib_error('function_return_error');
	    return -1;
    }
	   
	if ($unit == "H") {
	   $diff *= ( 60 * 60 );
	   if ( ( $time2 - $time1 ) == $diff ) {
			   # time2 equals time1 at specific time.
	   	  return 0;
       }elseif ( ( $time2 - $time1 ) < $diff ) {
			   # time2 not longer than time1 at specific time
			   return 1;
	   }else {
			   # time2 longer than time1 at specific time.
			   return 2;
	   } 
	}
	mylib_error('invalid_argument','mylib_date_time_diff');
}
/*
###########################################################
#   Subname		: mylib_get_date_time
#   Purpose		: Get current date time as specific format.
#   Input  		: Integer - GMT.[1]
#        		: String - format.[1]
#   Output 		: String - date time.[1]
#				: -1 - error
#   Called Sub	: mylib_error.
#		   		: mylib_check_exist.
###########################################################
*/
function mylib_get_date_time() {
	
	$count = func_num_args();
	if($count != 2){
		mylib_error('invalid_argument','mylib_get_date_time');
		return -1;
	}
	$arg = func_get_args();
   
   $gmt = $arg[0];
   $format = $arg[1];
   $allow_format = array('THAILONGDATETIME',   'THAILONGDATE',   'LONGDATETIME',
   				    'LONGDATE', 'SHORTDATETIME', 'YYYYMMDDDATE',
					'SHORTDATE', 'SERIAL', 'DATEHOURMIN' );
   
   if(mylib_check_exist($allow_format,$format) != 0){
		mylib_error('function_return_error');
	    return -1;
   }
   
   $emonths = array("January","February","March","April","May","June","July","August","September","October","November","December");
   $tmonths = array("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");

	$current = gmdate("U") + ($gmt * 60 * 60);

   $sec = gmstrftime("%S", $current);
   $min = gmstrftime("%M", $current);
   $hour = gmstrftime("%H", $current);
   $mday = gmstrftime("%d", $current);
   $mon = gmstrftime("%m", $current);
   $year = gmstrftime("%Y", $current);
   $wday = gmstrftime("%w", $current);

	$mon -= 1;
   if ($format == 'THAILONGDATETIME') {
      $year += 543;
	  $date = sprintf("%02d %s %4d %02d:%02d:%02d",$mday,$tmonths[$mon],$year,$hour,$min,$sec);
   }elseif ($format == 'THAILONGDATE') {
   	  $year += 543;
	  $date = sprintf("%02d %s %4d",$mday,$tmonths[$mon],$year);
   }elseif ($format == 'LONGDATETIME') {
   	  $year += 0;
	  $date = sprintf("%02d %s %4d %02d:%02d:%02d",$mday,$emonths[$mon],$year,$hour,$min,$sec);
   }elseif ($format == 'LONGDATE') {
   	  $year += 0;
	  $date = sprintf("%02d %s %4d",$mday,$emonths[$mon],$year);
   }elseif ($format == 'SHORTDATETIME') {
   	  $year += 0;
	  $date = sprintf("%02d/%02d/%04d %02d:%02d:%02d",$mday,$mon+1,$year,$hour,$min,$sec);
   }elseif ($format == 'YYYYMMDDDATE') {
	  $year += 0;
	  $date = sprintf("%04d%02d%02d",$year,$mon+1,$mday);
   }elseif ($format == 'SHORTDATE') {
	  $year += 0;
	  $date = sprintf("%02d/%02d/%04d",$mday,$mon+1,$year);
   }elseif ($format == 'DATEHOURMIN') {
   	  $year += 0;
	  $date = sprintf("%02d/%02d/%04d %02d:%02d",$mday,$mon+1,$year,$hour,$min);
   }elseif ($format == 'SERIAL') {
   		  $date = $current;
   }
   return $date;
}

/*
define(SMTP_HOST, "61.19.246.144");
define(SMTP_AUTH, true);
define(SMTP_USER, "sale@epetthailand.com");
define(SMTP_PASSWORD, "lovewannee");
*/

require($_SERVER["DOCUMENT_ROOT"]."/php/lib/config.php");
require($_SERVER["DOCUMENT_ROOT"]."/php/lib/phpmailer/class.phpmailer.php");

function send_mail_from($from, $from_name, $to, $cc, $bcc, $subject, $message) {
	$mail = new PHPMailer();
	$mail->IsSMTP(); // telling the class to use SMTP
	$mail->Host = SMTP_HOST; // SMTP server
	$mail->Port = SMTP_PORT; // SMTP port
	$mail->Username = SMTP_USER;
	$mail->Password = SMTP_PASSWORD;
	$mail->SMTPAuth = SMTP_AUTH;
	$mail->SMTPSecure = SMTP_SECURE;
	$mail->SMTPDebug = SMTP_DEBUG;
	$mail->CharSet = "TIS620";

	$mail->From = $from;
	$mail->FromName = $from_name;

	$mail->AddAddress($to);
	if (is_array($bcc)) {
		foreach ($bcc as $addr) {
			$mail->AddBCC($addr);
		}
	}
	else {
		$mail->AddBCC($bcc);
	}

	$mail->Subject = $subject;
	$mail->Body = $message;
	$mail->IsHTML(true); 

	if(!$mail->Send()) {
	   echo 'Message was not sent.';
	   echo 'Mailer error: ' . $mail->ErrorInfo;
	}
}


function send_mail($to, $cc, $bcc, $subject, $message) {
	send_mail_from(SMTP_USER, "ePetThailand Sale", $to, $cc, $bcc, $subject, $message);
}

?>