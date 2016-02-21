<?
//	require('../checkip.php');
require('../lib/db.php');
require('../lib/other.php');
require('../lib/mylib.php');
require('../lib/mylib2.php');
require('../lib/daolib.php');

require_once('../lib/classes.php'); 

session_start(); 

?>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-4020494-1");
pageTracker._trackPageview();
} catch(err) {}</script>

<?

$g_maintaining = 0;
$g_init_allow_jam = 1;
$g_allow_jam = 1;


# Define global variables
## define string variable
//$g_document_root = getenv('DOCUMENT_ROOT');
$g_document_root = "/home/epetthai/public_html";

$g_basedir = $g_document_root."/php/epetshop";
$g_wwwdir = $g_document_root."/php_com/epetshop";
$g_logdir = $g_document_root."/perl/epetshop";
#$g_basedir = "../../html"."/perl/epetshop";
#$g_wwwdir = "../../html"."/perl_com/epetshop";

#$g_basedir = ".";
#$g_wwwdir = "../../perl_com/epetshop";

$g_image_url = "http://www.epetthailand.com/php_com/epetshop/";

$g_cgi_url = "http://".$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'];
$g_base = "http://www.epetthailand.com/php_com/epetshop/";
#$g_image_url = "http://203.78.110.37/epetthailand.com/perl_com/epetshop/";
#$g_cgi_url = "http://203.78.110.37/epetthailand.com/perl/epetshop";
#$g_base = "http://203.78.110.37/epetthailand.com/perl_com/epetshop/";

$g_template_dir = $g_wwwdir;
$g_price_list_template= $g_template_dir."/PriceList.html";
$g_mail_url = "http://www.epetthailand.com/php/epetshop/shoppingcart.php?Menu=SendMail";

$g_instock_image = "CavyShop/but_more.gif";
$g_outstock_image = "CavyShop/but_nomore.gif";

######################################
# initial cost
$g_provider_charge = 7;
# global discount
$g_discount = 0;
//$g_sale_master = array("sale@epetthailand.com", "epetthailand@gmail.com");
$g_sale_master = array("epetthailand@gmail.com");

######################################

$g_gmt = 7;
$g_rudewordfile = $g_basedir."/rudeword.txt";
$g_dlm = "=";
$g_cookie_dlm = ";";
$g_product_prefix = "DATA--";
$g_cookie_key = "DATA";
$g_parenturl="http://www.epetthailand.com/index.html";
$g_counterfile = $g_basedir."/counter.txt";
$g_data_file = $g_basedir."/data/Data.txt";

$g_report_password = "givemereporttoday";
$g_short_log = $g_basedir."/log/"."short_log.txt";

## define array variable
#@g_imageurl = ('http://cavythailand.hypermart.net/cgi-bin/board/');

## define pair array variable
$g_encode_data = array("/=/"=>"&eq;","/\n\n/"=>"<p>","/\n/"=>"<br>","/&lt;/"=>"<","/&gt;/"=>">","/&quot;/"=>"\"");
$g_decode_data = array('/&eq;/'=>'=', '/&quot;/'=> '"');
$g_max_len = array("FileName1"=>15360, "Subject"=>200);
$g_field_label = array("ProductId"=>"รหัสสินค้า","Menu"=> "Menu", "Opener"=>"Opener", "Buyer"=>"ชื่อ-นามสกุล",
			   	 "No"=>"บ้านเลขที่", "Soi"=>"ซอย", "Road"=>"ถนน", 
				 "District"=>"ตำบล",
				 "Amphur"=>"อำเภอ", "Province"=>"จังหวัด", "PostCode"=>"รหัสไปรษณีย์", "Telephone"=>"เบอร์โทรศัพท์",
				 "Email"=>"อีเมล์"				 
				 );

$g_additional_cookies=  array( );
#$g_price_list_report = "";
#$g_summary_report = "";

 				 
# Done
###########################################################################
#require by mylib.pl
$g_back_url = "http://epetthailand.com/php/epetshop/shoppingcart.php?Menu=ShopThumb&Page=home.html";
$g_error_template = $g_wwwdir."/Message.tpl";
$g_contact = $g_sale_master;
#
###########################################################################
#require by cklib.pl
$g_path = "";
$g_domain = "";
$g_expire_date = "";
#$g_permanent_expire_date = cklib_get_expire_date($g_gmt, "+10y");

#&mylib_print_header();
# Main Program

/*if ($ENV{'HTTP_USER_AGENT'} !~ /window/i) {
	@error = &error('bad_access');
	&mylib_message($g_error_template, @error);
	exit;
}*/

if(!preg_match("/window/i", $_SERVER[HTTP_USER_AGENT])) {
   $error = error('bad_access', '');
   mylib_message($g_error_template, $error[0], $error[1]);
   exit;
}

if ( $g_maintaining ) {
   $error = error('maintaining', '');
//   @error = &error('maintaining');
   mylib_message($g_error_template, $error[0], $error[1]);

   exit;
}

$FORM = mylib_get_input();
#print "Menu=".$FORM['Menu'];
#mylib_print_pair_array($FORM);

if ($FORM['Menu'] == "ShowDetail") {
    handle_view_product();}
elseif ($FORM['Menu'] == "ShowList") {
    handle_view_list();}
elseif ($FORM['Menu'] == "ShowSearchList") {
    handle_view_search_list();}
elseif ($FORM['Menu'] == "ViewOrderLog") {
	handle_view_order_log();}
elseif ($FORM['Menu'] == "Add2Cart") {
		handle_add_cart();
		if ($FORM['From'] == "List" ) {
			handle_view_list();
		} elseif ($FORM['From'] == "SearchList" ) {
			handle_view_search_list();
		} else {
			handle_view_product();
		}
	}
elseif ($FORM['Menu'] == 'UpdateCart'){
	if( $FORM['Order_x']) {
		handle_view_order();
	}else {
		//handle_update_cart();
		handle_add_cart();
		if( $FORM['From'] == "List" ) {
			handle_view_list();
		} elseif ($FORM['From'] == "SearchList" ) {
			handle_view_search_list();
		}else{
			handle_view_product();
		}

	}
	}
elseif ($FORM['Menu'] == 'Order') {
	if( $FORM['UpdateCart_x']) {
		  handle_add_cart();
	}
	handle_view_order();
	}
elseif ($FORM['Menu'] == "SendOrder") {
	handle_send_order();}
elseif ($FORM['Menu'] == "SendMail") {
	handle_send_mail();}
elseif ($FORM['Menu'] == "PreviewOrder") {
	handle_preview_order();}
elseif ($FORM['Menu'] == "PrintCookies") {
	handle_print_cookie();}
elseif ($FORM['Menu'] == "ShopThumb") {
	handle_show_thumb();}
elseif ($FORM['Menu'] == "ViewOrderHeader") {
	handle_view_log_header();}
elseif ($FORM['Menu'] == "PrintReport") {
	handle_print_report();}
elseif ($FORM['Menu'] == "DisplayReport") {
	handle_display_report();}
else {

	print "wrong dchoice";
}
exit;


function handle_view_product(){
	global $g_template_dir;
	global $g_error_template;
	global $$g_back_url;
	global $g_image_url;
	global $g_base;
	global $g_cgi_url;
	global $FORM;

	$error = func_get_args();

	$product_type =$FORM['ProductId'];
	$product_template=$g_template_dir."/".$product_type.".html";

	$check_blank_field = array('ProductId', 'Menu', 'Opener');
	if($field = mylib_check_blank($FORM, $check_blank_field, mylib_a_length($FORM))){
		mylib_message($g_error_template, error("not_blank", $field));
		exit;
 	}

	$message_str = mylib_get_data($product_template);

	$action="http://".$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'];
	$out_str = join( " ", $message_str );

	$pattern = array();
	$replace = array();
	
	if ($error[0] == "" ){
		$temp_loop = mylib_split_loop_string( $out_str, "ERROR" );
		$out_str = $temp_loop[0].$temp_loop[2];
		$g_back_url="<!-- VAR:CGI_URL -->?Menu=ShopThumb&Page=".$FORM{'Opener'};
	}else{

		array_push($pattern, "'<!-- VAR:MESSAGE_HEADER -->'", "'<!-- VAR:MESSAGE_BODY -->'" );
		array_push($replace, $error[0], $error[1]);

/*		$out_str =~s/<!-- VAR:MESSAGE_HEADER -->/$error[0]/g;
		$out_str =~s/<!-- VAR:MESSAGE_BODY -->/$error[1]/g;*/
		$g_back_url="home.html";
	}

	$price_list_str = handle_price_list();
	$summary_str = handle_prepare_summary($g_template_dir."/Summary.html");

	array_push($pattern, "'<!-- VAR:PRICE_LIST -->'", "'<!-- VAR:SUMMARY -->'" ,"'<!-- VAR:MENU -->'"
	, "'<!-- VAR:PRODUCT_ID -->'", "'<!-- VAR:OPENER -->'" ,"'<!-- VAR:ACTION -->'"
	, "'<!-- VAR:BACK_URL -->'", "'<!-- VAR:IMAGE_URL -->'" ,"'<!-- VAR:BASE -->'"
	,"'<!-- VAR:CGI_URL -->'"
	);
	array_push($replace, $price_list_str, $summary_str, "UpdateCart"
	, $FORM['ProductId'], $FORM['Opener'], $action
	, $g_back_url, $g_image_url, $g_base
	, $g_cgi_url);


	$out_str = preg_replace($pattern, $replace, $out_str);
/*

	$out_str =~s/<!-- VAR:PRICE_LIST -->/$price_list_str/g;
	$out_str =~s/<!-- VAR:SUMMARY -->/$summary_str/g;
	$out_str =~s/<!-- VAR:MENU -->/UpdateCart/g;
	$out_str =~s/<!-- VAR:PRODUCT_ID -->/$FORM{'ProductId'}/g;
	$out_str =~s/<!-- VAR:OPENER -->/$FORM{'Opener'}/g;
	$out_str =~s/<!-- VAR:ACTION -->/$action/g;
	$out_str =~s/<!-- VAR:BACK_URL -->/$g_back_url/g;
	$out_str =~s/<!-- VAR:IMAGE_URL -->/$g_image_url/g;
	$out_str =~s/<!-- VAR:BASE -->/$g_base/g;
	$out_str =~s/<!-- VAR:CGI_URL -->/$g_cgi_url/g;
	
*/
  	print $out_str;
	exit;
}

function handle_show_thumb() {
	global $g_data_file;
	global $FORM;
	global $g_wwwdir;
	global $g_dlm;
	global $g_outstock_image;
	global $g_instock_image;
	global $g_image_url;
	global $g_base;
	global $g_cgi_url;

	$check_blank_field = array("Page");
    if($field = mylib_check_blank($FORM, $check_blank_field, mylib_a_length($FORM))){
	    $error = error("not_blank", $field);
		handle_view_order($error);		
 	}
	if(!preg_match("/html$/i", $FORM['Page'])) {
		$error = error("not_allow");
   		handle_view_order($error);
	}

	$data = mylib_get_data($g_wwwdir."/".$FORM['Page']);
	$out_str = join(" ", $data);

	$first = 1;
	$old_id = "";
	$instock = 0;

	$data = mylib_get_data($g_data_file);
	$data_len = count($data);
	$pattern = array();
	$replace = array();

	for($i=0; $i < $data_len; $i++ ){
		chop($data[$i]);
		$temp_data =  split($g_dlm, $data[$i]);
		$new_id = substr($temp_data[4],0,6);
		if ($new_id != $old_id && !$first) {

			$pat = "'<!-- VAR:INSTOCK_IMAGE_".$old_id." -->'";
			if ($instock == 0){
				$stock_status = $g_outstock_image;
			}else{
				$stock_status = $g_instock_image;
			}
			array_push($pattern, $pat);
			array_push($replace, $stock_status);
			$instock = 0;
		}

		$first = 0;

		if( $temp_data[12] == 0 || $temp_data[12] == 2 || $temp_data[12] == 3){
			$instock = $instock + 0;
		}else{
			$instock = $instock + 1;
		}
		$old_id = $new_id;
	}
	array_push($pattern, "'<!-- VAR:IMAGE_URL -->'", "'<!-- VAR:BASE -->'" ,"'<!-- VAR:CGI_URL -->'");
	array_push($replace, $g_image_url, $g_base, $g_cgi_url);
	$out_str = preg_replace($pattern, $replace, $out_str);

	print $out_str;
	exit;
}

function handle_view_list(){
	global $g_template_dir;
	global $g_error_template;
	global $g_back_url;
	global $FORM;
	global $g_base;
	global $g_cgi_url;

	$count = func_num_args();
	$arg = func_get_args();
	if($count == 1){
		$error = $arg[0];
	}

	$product_type = "OTHER";
	$product_template=$g_template_dir."/".$product_type.".html";

	$check_blank_field = array('ProductId', 'Menu', 'Opener');
	if($field = mylib_check_blank($FORM, $check_blank_field, mylib_a_length($FORM))){
		$error = error("not_blank", $field);
		mylib_message($g_error_template, $error[0], $error[1]);
		exit;
	}
	
	$message_str = mylib_get_data($product_template);

	$action="http://".$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'];
	$out_str = join(" ", $message_str );
	$pattern = array();
	$replace = array();
	if ($count == 0 ){
		$temp_loop = mylib_split_loop_string( $out_str, "ERROR" );
		$out_str = $temp_loop[0].$temp_loop[2];
		$g_back_url = $action."?Menu=ShopThumb&Page=".$FORM{'Opener'};
	}else{
		array_push($pattern, "'<!-- VAR:MESSAGE_HEADER -->'", "'<!-- VAR:MESSAGE_BODY -->'");
		array_push($replace, $error[0], $error[1]);
		$g_back_url="home.html";
	}
	$out_str = preg_replace($pattern, $replace, $out_str);

//	$FORM{'ProductId'} =~s/_/\?/g;
	
	$price_list_str = handle_price_list();
	$summary_str = handle_prepare_summary($g_template_dir."/Summary.html");

	array_push($pattern, "'<!-- VAR:PRICE_LIST -->'", "'<!-- VAR:SUMMARY -->'" ,"'<!-- VAR:MENU -->'", "'<!-- VAR:FROM -->'", 
		"'<!-- VAR:PRODUCT_ID -->'" ,"'<!-- VAR:OPENER -->'", "'<!-- VAR:ACTION -->'", "'<!-- VAR:BACK_URL -->'" ,
		"'<!-- VAR:IMAGE_URL -->'", "'<!-- VAR:BASE -->'", "'<!-- VAR:CGI_URL -->'");
	array_push($replace, $price_list_str, $summary_str, "UpdateCart", "List", $FORM['ProductId'], $FORM['Opener'], $action, $g_back_url, $g_image_url, $g_base, $g_cgi_url );
	$out_str = preg_replace($pattern, $replace, $out_str);
/*	$out_str =~s/<!-- VAR:PRICE_LIST -->/$price_list_str/g;
	$out_str =~s/<!-- VAR:SUMMARY -->/$summary_str/g;
	$out_str =~s/<!-- VAR:MENU -->/UpdateCart/g;
	$out_str =~s/<!-- VAR:FROM -->/List/g;

	$out_str =~s/<!-- VAR:PRODUCT_ID -->/$FORM{'ProductId'}/g;
	$out_str =~s/<!-- VAR:OPENER -->/$FORM{'Opener'}/g;
	$out_str =~s/<!-- VAR:ACTION -->/$action/g;
	$out_str =~s/<!-- VAR:BACK_URL -->/$g_back_url/g;

	$out_str =~s/<!-- VAR:IMAGE_URL -->/$g_image_url/g;
	$out_str =~s/<!-- VAR:BASE -->/$g_base/g;
	$out_str =~s/<!-- VAR:CGI_URL -->/$g_cgi_url/g;*/


  	print $out_str;
	exit;
}

function handle_view_search_list(){
	global $g_template_dir;
	global $g_error_template;
	global $g_back_url;
	global $FORM;
	global $g_base;
	global $g_cgi_url;

	$count = func_num_args();
	$arg = func_get_args();
	if($count == 1){
		$error = $arg[0];
	}

	$product_type = "OTHER";
	$product_template=$g_template_dir."/".$product_type.".html";

	$check_blank_field = array('ProductId', 'Menu', 'Opener');
	if($field = mylib_check_blank($FORM, $check_blank_field, mylib_a_length($FORM))){
		$error = error("not_blank", $field);
		mylib_message($g_error_template, $error[0], $error[1]);
		exit;
	}
	
	$message_str = mylib_get_data($product_template);

	$action="http://".$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'];
	$out_str = join(" ", $message_str );
	$pattern = array();
	$replace = array();
	if ($count == 0 ){
		$temp_loop = mylib_split_loop_string( $out_str, "ERROR" );
		$out_str = $temp_loop[0].$temp_loop[2];
		$g_back_url = $action."?Menu=ShopThumb&Page=".$FORM{'Opener'};
	}else{
		array_push($pattern, "'<!-- VAR:MESSAGE_HEADER -->'", "'<!-- VAR:MESSAGE_BODY -->'");
		array_push($replace, $error[0], $error[1]);
		$g_back_url="home.html";
	}
	$out_str = preg_replace($pattern, $replace, $out_str);

	$price_list_str = handle_search_price_list();
	$summary_str = handle_prepare_summary($g_template_dir."/Summary.html");

	array_push($pattern, "'<!-- VAR:PRICE_LIST -->'", "'<!-- VAR:SUMMARY -->'" ,"'<!-- VAR:MENU -->'", "'<!-- VAR:FROM -->'", 
		"'<!-- VAR:PRODUCT_ID -->'" ,"'<!-- VAR:OPENER -->'", "'<!-- VAR:ACTION -->'", "'<!-- VAR:BACK_URL -->'" ,
		"'<!-- VAR:IMAGE_URL -->'", "'<!-- VAR:BASE -->'", "'<!-- VAR:CGI_URL -->'");
	array_push($replace, $price_list_str, $summary_str, "UpdateCart", "SearchList", $FORM['ProductId'], $FORM['Opener'], $action, $g_back_url, $g_image_url, $g_base, $g_cgi_url );
	$out_str = preg_replace($pattern, $replace, $out_str);

  	print $out_str;
	exit;
}

function handle_price_list() {
	global $g_price_list_template;
	global $g_data_file;
	global $g_dlm;
	global $g_decode_data;
	global $g_cookie_dlm;
	global $FORM;
	global $g_product_prefix;

	$price_list = mylib_split_loop($g_price_list_template, "ITEM");
	
	$data = mylib_get_record_list( "^".$FORM['ProductId'],$g_data_file, 4, $g_dlm);

	$price_list_str = $price_list[0];
	$data_len = count($data);
	$pattern = array();
	array_push($pattern, 
		"'<!-- VAR:PRODUCT_ID -->'", "'<!-- VAR:PRODUCT_ID_REF -->'" ,"'<!-- VAR:DESCRIPTION -->'", "'<!-- VAR:SIZE -->'", 
		"'<!-- VAR:POINT -->'" ,"'<!-- VAR:SHIPPING -->'", "'<!-- VAR:OUT -->'", "'<!-- VAR:DISCOUNT_FROM -->'" ,
		"'<!-- VAR:DISCOUNT_TO -->'", "'<!-- VAR:PRICE -->'", "'<!-- VAR:ITEM_DISCOUNT -->'");

	for($i=0; $i < $data_len; $i++ ){
		$replace = array();

    	$item_str = $price_list[1];
		chop($data[$i]);
		
		$temp_data =  split($g_dlm, $data[$i]);
		$temp_data = mylib_encode_data($g_decode_data, $temp_data, mylib_a_length($g_decode_data));

/*		$item_str =~s/<!-- VAR:PRODUCT_ID -->/$temp_data[4]/g;
		$item_str =~s/<!-- VAR:PRODUCT_ID_REF -->/$g_cookie_dlm$temp_data[4]/g;*/
//		chop($temp_data[4]);
		$product_id_link = substr($temp_data[4], 0, strlen($temp_data[4]) - 1);
		$temp_data[5]="<a href=".$_SERVER['SCRIPT_NAME']."?Menu=ShowDetail&Opener=".$FORM{'Opener'}."&ProductId=".$product_id_link.">".$temp_data[5]."</a>";
		//$temp_data[4] = $g_product_prefix.$temp_data[4];
/*		$item_str =~s/<!-- VAR:DESCRIPTION -->/$temp_data[5]/g;
		$item_str =~s/<!-- VAR:SIZE -->/$temp_data[6]/g;

		$item_str =~s/<!-- VAR:POINT -->/$temp_data[8]/g;
		$item_str =~s/<!-- VAR:SHIPPING -->/$temp_data[9]/g;*/

		if( $temp_data[12] == 0 ){
			  	$quantity_loop = mylib_split_loop_string( $item_str, 'QUANTITY' );
				$item_str = $quantity_loop[0].$quantity_loop[2];
//				$item_str =~s/<!-- VAR:OUT -->/"หมด"/g; 
				$out ="หมด"; 
		} elseif ($temp_data[12] == 2) {
			  	$quantity_loop = mylib_split_loop_string( $item_str, 'QUANTITY' );
				$item_str = $quantity_loop[0].$quantity_loop[2];
//				$item_str =~s/<!-- VAR:OUT -->/"ขาดตลาด"/g; 
				$out = "ขาดตลาด"; 
		} elseif ($temp_data[12] == 3) {
			  	$quantity_loop = mylib_split_loop_string( $item_str, 'QUANTITY' );
				$item_str = $quantity_loop[0].$quantity_loop[2];
//				$item_str =~s/<!-- VAR:OUT -->/"ยกเลิก"/g; 
				$out = "ยกเลิก"; 
		}else{
//				$item_str =~s/<!-- VAR:OUT -->/ /g;
				$out = " ";
		}

		$discount_from = "";
		$discount_to = "";
		if( $temp_data[14] == 1 ){
			$temp_data[13] = $temp_data[7] - $temp_data[13];
			$discount_from = 'discountfrom';
			$discount_to = 'discountto';
#			$item_str =~s/<!-- LOOP:DISCOUNT_FLAG -->/ /g;
			
		}else{
  			$temp_data[13] = $temp_data[7];
#			@temp_loop = &mylib_split_loop_string( $item_str, 'DISCOUNT_FLAG' );

#			$item_str = $temp_loop[0].$temp_loop[2];
		}
/*		$item_str =~s/<!-- VAR:DISCOUNT_FROM -->/$discount_from/g;
		$item_str =~s/<!-- VAR:DISCOUNT_TO -->/$discount_to/g;*/
/*		$temp_data[7] = $temp_data[7];
		$temp_data[13] = $temp_data[13];
*/
/*		$item_str =~s/<!-- VAR:PRICE -->/$temp_data[7]/g;
		$item_str =~s/<!-- VAR:ITEM_DISCOUNT -->/$temp_data[13]/g; */
				

		array_push($replace, 
			$temp_data[4], $g_product_prefix.$temp_data[4], $temp_data[5], $temp_data[6], 
			$temp_data[8], $temp_data[9], $out, $discount_from, 
			$discount_to, format_money($temp_data[7]), format_money($temp_data[13]));

		$item_str = preg_replace($pattern, $replace, $item_str);

		$price_list_str = $price_list_str.$item_str;

	}
	$price_list_str .= $price_list[2];
	return $price_list_str;

}

function handle_search_price_list() {
	global $g_price_list_template;
	global $g_data_file;
	global $g_dlm;
	global $g_decode_data;
	global $g_cookie_dlm;
	global $FORM;
	global $g_product_prefix;

	$price_list = mylib_split_loop($g_price_list_template, "ITEM");
	
	$data = mylib_get_record_list(trim($FORM['ProductId']), $g_data_file, 5, $g_dlm);

	$price_list_str = $price_list[0];
	$data_len = count($data);
	$pattern = array();
	array_push($pattern, 
		"'<!-- VAR:PRODUCT_ID -->'", "'<!-- VAR:PRODUCT_ID_REF -->'" ,"'<!-- VAR:DESCRIPTION -->'", "'<!-- VAR:SIZE -->'", 
		"'<!-- VAR:POINT -->'" ,"'<!-- VAR:SHIPPING -->'", "'<!-- VAR:OUT -->'", "'<!-- VAR:DISCOUNT_FROM -->'" ,
		"'<!-- VAR:DISCOUNT_TO -->'", "'<!-- VAR:PRICE -->'", "'<!-- VAR:ITEM_DISCOUNT -->'");

	for($i=0; $i < $data_len; $i++ ){
		$replace = array();

    	$item_str = $price_list[1];
		chop($data[$i]);
		
		$temp_data =  split($g_dlm, $data[$i]);
		$temp_data = mylib_encode_data($g_decode_data, $temp_data, mylib_a_length($g_decode_data));

		$product_id_link = substr($temp_data[4], 0, strlen($temp_data[4]) - 1);
		$temp_data[5]="<a href=".$_SERVER['SCRIPT_NAME']."?Menu=ShowDetail&Opener=".$FORM{'Opener'}."&ProductId=".$product_id_link.">".$temp_data[5]."</a>";

		if( $temp_data[12] == 0 ){
			  	$quantity_loop = mylib_split_loop_string( $item_str, 'QUANTITY' );
				$item_str = $quantity_loop[0].$quantity_loop[2];
				$out ="หมด"; 
		} elseif ($temp_data[12] == 2) {
			  	$quantity_loop = mylib_split_loop_string( $item_str, 'QUANTITY' );
				$item_str = $quantity_loop[0].$quantity_loop[2];
				$out = "ขาดตลาด"; 
		} elseif ($temp_data[12] == 3) {
			  	$quantity_loop = mylib_split_loop_string( $item_str, 'QUANTITY' );
				$item_str = $quantity_loop[0].$quantity_loop[2];
				$out = "ยกเลิก"; 
		}else{
				$out = " ";
		}

		$discount_from = "";
		$discount_to = "";
		if( $temp_data[14] == 1 ){
			$temp_data[13] = $temp_data[7] - $temp_data[13];
			$discount_from = 'discountfrom';
			$discount_to = 'discountto';
		}else{
  			$temp_data[13] = $temp_data[7];
		}

		array_push($replace, 
			$temp_data[4], $g_product_prefix.$temp_data[4], $temp_data[5], $temp_data[6], 
			$temp_data[8], $temp_data[9], $out, $discount_from, 
			$discount_to, format_money($temp_data[7]), format_money($temp_data[13]));

		$item_str = preg_replace($pattern, $replace, $item_str);

		$price_list_str = $price_list_str.$item_str;

	}
	$price_list_str .= $price_list[2];
	return $price_list_str;

}

function handle_prepare_summary() {
	/*local(@error,@message_str,@message_str,@data_loop,@temp_data);
	local($summary_template,$action,$out_str,$out_str,%cookie,$total_quantity,$total_discount_quantity,$total_price);
	local($total_point,$total_add_price,$row_price,$quantity,$item_str,$key,$discount_from,$discount_to);
	local($total_discount,$total_discount_quantity,$total_unit,$total_row_price,$force_promotion,$promotion_price,$total_shipping_price); */
	global $g_additional_cookies;
	global $g_cookie_key;
	global $g_cookie_dlm;
	global $g_data_file;
	global $g_dlm;
	global $FORM;
	global $g_decode_data;
	global $g_discount;
	global $g_proper_promotion;
	global $g_force_promotion;
	global $g_product_prefix;
	global $g_amount;
	global $g_cost;

	$arg = func_get_args();

	$summary_template = $arg[0];

   	$message_str = mylib_get_data($summary_template);
	$action=$ENV{'SCRIPT_NAME'};
	$out_str = join( " ", $message_str );
	$data_loop = mylib_split_loop_string( $out_str, 'ITEM' );
	$out_str = $data_loop[0];

	if( $FORM['Clear_x'] ) {
		cklib_delete_cookie($g_cookie_key );
		$cookie = array();
	} else {
		$cookie = cklib_get_cookie($g_cookie_key);
		//$cookie = array_merge($cookie, $g_additional_cookies);
	}

	$total_quantity = 0;
	$total_discount_quantity = 0;
	$total_price = 0;
	$total_point = 0;
	$total_add_price = 0;
	$row_price = 0;
	$force_promotion = 0;
	$cookie_len = count($cookie);
	$total_cost = 0;

	while(list($key, $value) = each($cookie)){
		#print $g_product_prefix.">>>".$key."< == >".$value."<<br>";
		$pattern = array();
		$replace = array();

		$quantity = $cookie{$key};

		if( $quantity == 0  || preg_match("/[^0-9]/", $quantity)) {
			next;
		}

    	$item_str = $data_loop[1];
//		$key =~ s/$g_cookie_dlm//g;
		$key = preg_replace("/$g_product_prefix/", "", $key);

		$temp_data = mylib_get_record( $key, $g_data_file, 4, $g_dlm);
		$temp_data = mylib_encode_data($g_decode_data, $temp_data, mylib_a_length($g_decode_data));

/*		$item_str =~s/<!-- VAR:PRODUCT_ID -->/$temp_data[4]/g;
		$item_str =~s/<!-- VAR:PRODUCT_ID_REF -->/$g_cookie_dlm$temp_data[4]/g;
		$item_str =~s/<!-- VAR:DESCRIPTION -->/$temp_data[5]/g;
		$item_str =~s/<!-- VAR:SIZE -->/$temp_data[6]/g;
#		$item_str =~s/<!-- VAR:POINT -->/$temp_data[8]/g;
		$item_str =~s/<!-- VAR:QUANTITY -->/$quantity/g;*/

		$discount_from = '';
		$discount_to = '';
		if ( $temp_data[14] == 1 ) {
			$discount_from = 'discountfrom';
			$discount_to = 'discountto';
			$temp_data[13] = $temp_data[7] - $temp_data[13];
		} else {
  			$temp_data[13] = $temp_data[7];
			$total_discount += $temp_data[13]*$quantity*$g_discount/100;
			$total_discount_quantity += $quantity;
		}
		
		$row_price = $temp_data[13] * $quantity;
		$total_add_price += $temp_data[9] * $quantity;
		$total_unit += $temp_data[10] * $quantity;

		$total_row_price += $row_price;
		$total_quantity += $quantity;
		$total_point += $temp_data[8] * $quantity;

		// Calculate total cost
		$total_cost += $temp_data[15] * $quantity;

		if($temp_data[11] > $force_promotion ){ 
			//print "<BR> in ".$temp_data[11]." > ".$force_promotion."<br>";
			$force_promotion = $temp_data[11];
			$promotion_price += $row_price; 
		}
		
		array_push($pattern, "'<!-- VAR:PRODUCT_ID -->'", "'<!-- VAR:PRODUCT_ID_REF -->'" , "'<!-- VAR:DESCRIPTION -->'",
			"'<!-- VAR:SIZE -->'" , "'<!-- VAR:POINT -->'" , "'<!-- VAR:QUANTITY -->'" , 
			"'<!-- VAR:DISCOUNT_FROM -->'" , "'<!-- VAR:DISCOUNT_TO -->'" , "'<!-- VAR:PRICE -->'" , 
			"'<!-- VAR:ITEM_DISCOUNT -->'" , "'<!-- VAR:ROW_PRICE -->'");

		array_push($replace, $temp_data[4], $g_product_prefix.$temp_data[4], $temp_data[5], 
			$temp_data[6], $temp_data[8], $quantity, 
			$discount_from, $discount_to, format_money($temp_data[7]),
			format_money($temp_data[13]), format_money($row_price));

		$item_str = preg_replace($pattern, $replace, $item_str);
		$out_str = $out_str.$item_str;
    }
	$pattern = array();
	$replace = array();

	//$data_loop[2] =~s/<!-- VAR:TOTAL_QUANTITY -->/$total_quantity/g;
	//$total_row_price = &format_money($total_row_price);
	//$data_loop[2] =~s/<!-- VAR:TOTAL_ROW_PRICE -->/$total_row_price/g;
	
	//$data_loop[2] =~s/<!-- VAR:TOTAL_DISCOUNT_QUANTITY -->/$total_discount_quantity/g;
	//$total_discount = &format_money($total_discount);
	//$data_loop[2] =~s/<!-- VAR:PERCENT_DISCOUNT -->/$g_discount/g;
	//$data_loop[2] =~s/<!-- VAR:TOTAL_DISCOUNT -->/$total_discount/g;
	
	$total_shipping_price = calculate_shipping($total_unit);
	$total_shipping_price += $total_add_price;
	//$total_shipping_price = &format_money($total_shipping_price);
#	$total_shipping_price = $total_shipping_price."/".$total_add_price."/".$g_unit_last."<<";
	//$data_loop[2] =~s/<!-- VAR:TOTAL_SHIPPING_PRICE -->/$total_shipping_price/g;
	
	$total_price = $total_row_price + $total_shipping_price - $total_discount;
	//$total_price = &format_money($total_price);
	//$data_loop[2] =~s/<!-- VAR:TOTAL_PRICE -->/$total_price/g;
	$g_amount = $total_price;

	// Save total cost
	$g_cost = $total_cost;
	
	if( $force_promotion >= ($total_row_price - $promotion_price) ) {
#		&mylib_print_header();				 
		$g_proper_promotion = 0;
		$g_force_promotion = $force_promotion;
	}else{
			$g_proper_promotion = 1;
	}

	array_push($pattern, "'<!-- VAR:TOTAL_QUANTITY -->'", "'<!-- VAR:TOTAL_ROW_PRICE -->'" , "'<!-- VAR:TOTAL_DISCOUNT_QUANTITY -->'",
	"'<!-- VAR:PERCENT_DISCOUNT -->'" , "'<!-- VAR:TOTAL_DISCOUNT -->'" , "'<!-- VAR:TOTAL_SHIPPING_PRICE -->'" , 
	"'<!-- VAR:TOTAL_PRICE -->'" );
	
	array_push($replace, $total_quantity, format_money($total_row_price), $total_discount_quantity, 
	$g_discount, format_money($total_discount), format_money($total_shipping_price), 
	format_money($total_price));
	$data_loop[2] = preg_replace($pattern, $replace, $data_loop[2]);
	
	$out_str .= $data_loop[2];
/*	$out_str =~s/<!-- VAR:PRODUCT_ID -->/$FORM{'ProductId'}/g;*/

	$pattern = array();
	$replace = array();
	array_push($pattern, "'<!-- VAR:PRODUCT_ID -->'");
	array_push($replace, $FORM['ProductId']);

	if( $FORM['Menu'] == 'ShowList' ){
		/*$out_str =~s/<!-- VAR:FROM -->/List/g;*/
		array_push($pattern, "'<!-- VAR:FROM -->'");
		array_push($replace, "List");
	}
	elseif( $FORM['Menu'] == 'ShowSearchList' ){
		array_push($pattern, "'<!-- VAR:FROM -->'");
		array_push($replace, "SearchList");
	}
	$out_str = preg_replace($pattern, $replace, $out_str);
	
	return $out_str;
}

function handle_add_cart(){
#	print "in cart";

	global $g_cookie_key;
	global $FORM;
	global $g_product_prefix;

	$cookie = cklib_get_cookie($g_cookie_key);
	//print "Old cookie = ".$cookie."<br>";
	
	while(list($key, $value) = each($FORM)){
	//print "key=".$key."->".$value."<<br>";
	//foreach (keys %FORM) {
		if( preg_match("/^$g_product_prefix(.*)/", $key, $matches) && ($value != "") && !preg_match("/[^0-9]/", $value)) {
			#print "Match key=".$key."->".$value."<br>";
			//if( $_ =~ /^$g_cookie_dlm/ && $FORM{$_} != 0) {
			//cklib_set_cookie($_, $FORM{$_}, $g_expire_date, $g_path, $g_domain );
			//$g_additional_cookies[$key] = $value;
			//if($old_cookie != "") {
			//	$old_cookie = $old_cookie.$g_cookie_dlm.$matches[0]."=".$value;
			//}else{
			//	$old_cookie = $matches[0]."=".$value;
			//}
			if($value == 0) {
				unset($cookie[$key]);
			} else {
				$cookie[$key] = $value;
			}

//			$new_cookie = $new_cookie.$g_cookie_dlm.$matches[0];
//			print "new Cookie=".$old_cookie."<br>";
		}
	}

	#print "Old Cookie=".$cookie."<br>";
	#mylib_print_pair_array($cookie);
	cklib_set_cookie($g_cookie_key, $cookie);

/*	if( $FORM['From'] == "List" ) {
		handle_view_list();
	}else{
		handle_view_product();
	}*/
}

function calculate_shipping() {
	global $g_unit;
	global $g_provider_charge;

	$arg = func_get_args();
	$total_unit = $arg[0];
#	&mylib_print_header();
#	print "in $total_unit =".$total_unit;
	#@unit = ( 10000, 35, 2500, 22, 1700, 17, 1000, 14, 600, 10, 250, 7 );
	#@g_unit = ( 250,27,  1000, 34, 4950, 37, 10000, 55 );
#	@g_unit = ( 250,22,  1000, 29, 4950, 32, 10000, 50 );
#	$g_unit = array( 250,22,  600, 25, 1000, 29, 4950, 32, 7500, 41, 10000, 50 );
#	$g_unit = array( 250,35,  600, 38, 1000, 42, 4950, 45, 7500, 54, 10000, 63 );
	$g_unit = array( 10000, 40 );

	for($i=0; $i<count($g_unit); $i++) {
		$unit_price[$g_unit[$i]] = $g_unit[++$i];
	}

	//$unit_price = array( "250"=>22, "600"=> 25, "1000"=>29, "4950"=>32, "7500"=> 41, "10000"=> 50 );
	$found = 0;
	$box = 0;
	$total_shipping_price = 0;
	while( $total_unit > 0 ) {
#	print " <br>$total_unit > 0<br>";
#	print "<br>while<br>";
		   $len = count($g_unit);
		   for( $i=0; $i < $len; $i=$i+2 ) {			  
#		   print "<br> @g_unit <br>";
#		   		   print " <br>$i<br> ";

#				print " $total_unit > $g_unit[$i] ";
		   		if( $total_unit > $g_unit[$i] ) {
#					print "<br>in next";
					next;
				} else {
					$box += 1;
					$found = 1;
#					print "<br> g_unit=".$g_unit[$i]." <br>";
#					print "<br>  cal ".$g_unit[$i]." = ".$unit_price[$g_unit[$i]]." =<br>";
					$total_unit -= $g_unit[$i];
					$total_shipping_price += $unit_price[$g_unit[$i]];      
					$g_unit_last = $g_unit[$i+1];
					break;
				}
		   }
#			&mylib_print_header();
#		   	print "<br>total  shipping= $total_shipping_price"; 
		   if( !$found ){
		   	   $box += 1;
			   $total_unit -= $g_unit[$i - 2];
			   $total_shipping_price += $unit_price[$g_unit[$i-2]]; 
		   }
	}
	if( $total_shipping_price > 0 ) {
		$total_shipping_price += $g_provider_charge;
	}
#	print "<br>total = ".$total_shipping_price;
	return ( $total_shipping_price );  
}

function handle_view_order() {
	/*local($photo_add_template, $action, $out_str, @temp_loop);
	local(@error, @message_str);	

	@error = @_;*/
	global $g_template_dir;
	global $g_back_url;
	global $g_cgi_url;
	global $g_base;
	global $FORM;

	
	$order_template=$g_template_dir."/Order.html";
   	$message_str = mylib_get_data($order_template);
	$action=$ENV{'SCRIPT_NAME'};
	$out_str = join( " ", $message_str );
		
	/*if ($error[0] eq "" ){
		@temp_loop = &mylib_split_loop_string( $out_str, "ERROR" );
		$out_str = $temp_loop[0].$temp_loop[2];
		$g_back_url="<!-- VAR:CGI_URL -->/shoppingcart.pl?Menu=ShopThumb&Page=".$FORM{'Opener'};
	}else{
		$out_str =~s/<!-- VAR:MESSAGE_HEADER -->/$error[0]/g;
		$out_str =~s/<!-- VAR:MESSAGE_BODY -->/$error[1]/g;
		$g_back_url="home.html";
	}*/
	$pattern = array();
	$replace = array();
	$arg = func_get_args();
	$error[0] = $arg[0];
	$error[1] = $arg[1];
#	print "<br>Error0=" . $arg[0] . "<br>";
#	print "<br>Error1=" . $arg[1] . "<br>";
	if ($error[0] == ""){
		$temp_loop = mylib_split_loop_string( $out_str, "ERROR" );
		$out_str = $temp_loop[0].$temp_loop[2];
		$g_back_url="<!-- VAR:CGI_URL -->?Menu=ShopThumb&Page=".$FORM['Opener'];

		// First time access. Fill form with logged in user information
		//print_r($_SESSION['member']);
		//print_r($FORM);
		if (isset($_SESSION['member'])) {
			$member = $_SESSION['member'];
			$FORM['Buyer'] = $member->first_name." ".$member->last_name;
			$FORM['No'] = $member->address_1;
			$FORM['Soi'] = $member->soi;
			$FORM['Road'] = $member->road;
			$FORM['District'] = $member->suburb;
			$FORM['Amphur'] = $member->district;
			$FORM['Province'] = $member->province;
			$FORM['Telephone'] = $member->telephone;
			$FORM['Email'] = $member->email;
			$FORM['PostCode'] = $member->postcode;
		}
	}
	// Form validation error.
	else {
		array_push($pattern, "'<!-- VAR:MESSAGE_HEADER -->'", "'<!-- VAR:MESSAGE_BODY -->'" );
		array_push($replace, $error[0], $error[1]);

/*		$out_str =~s/<!-- VAR:MESSAGE_HEADER -->/$error[0]/g;
		$out_str =~s/<!-- VAR:MESSAGE_BODY -->/$error[1]/g;*/
		//$g_back_url="home.html";
	}

	$summary_str = handle_prepare_summary($g_template_dir."/Summary.html");
	array_push($pattern, "'<!-- VAR:BUYER -->'", "'<!-- VAR:NO -->'", "'<!-- VAR:SOI -->'"
	, "'<!-- VAR:ROAD -->'", "'<!-- VAR:DISTRICT -->'", "'<!-- VAR:AMPHUR -->'"
	, "'<!-- VAR:PROVINCE -->'", "'<!-- VAR:TELEPHONE -->'", "'<!-- VAR:EMAIL -->'"
	, "'<!-- VAR:POST_CODE -->'", "'<!-- VAR:COMMENT -->'", "'<!-- VAR:PRICE_LIST -->'"
	, "'<!-- VAR:SUMMARY -->'", "'<!-- VAR:PRODUCT_ID -->'", "'<!-- VAR:MENU -->'"
	, "'<!-- VAR:OPENER -->'", "'<!-- VAR:ACTION -->'", "'<!-- VAR:BACK_URL -->'"
	, "'<!-- VAR:CGI_URL -->'", "'<!-- VAR:BASE -->'");
	array_push($replace, $FORM['Buyer'], $FORM['No'], $FORM['Soi']
		, $FORM['Road'], $FORM['District'], $FORM['Amphur']
		, $FORM['Province'], $FORM['Telephone'], $FORM['Email']
		, $FORM['PostCode'], $FORM['Comment'], $price_list_str
		, $summary_str, $FORM['ProductId'], "Order"
		, $FORM['Opener'], $action, $g_back_url
		, $g_cgi_url, $g_base);

	$out_str = preg_replace($pattern, $replace, $out_str);

/*	$out_str =~s/<!-- VAR:BUYER -->/$FORM{'Buyer'}/g;
	$out_str =~s/<!-- VAR:NO -->/$FORM{'No'}/g;
	$out_str =~s/<!-- VAR:SOI -->/$FORM{'Soi'}/g;

	$out_str =~s/<!-- VAR:ROAD -->/$FORM{'ing( $out_str, 'CUT_BACK' );
	$out_str = $cut_button[0].$cut_button[2];
*/

 	$cut_button = mylib_split_loop_string( $out_str, "CUT_ORDER" );
	$out_str = $cut_button[0].$cut_button[2];

 	$cut_button = mylib_split_loop_string( $out_str, "CUT_BACK" );
	$out_str = $cut_button[0].$cut_button[2];

	print $out_str;
	exit;
}

function handle_send_order(){
	global $g_rudewordfile;
	global $g_gmt;
	global $g_template_dir;
	global $g_proper_promotion;
	global $g_force_promotion;
	global $g_amount;
	global $g_base;
	global $g_sale_master_2;
	global $g_sale_master;
	global $g_basedir;
	global $FORM;
	global $g_cookie_key;
	global $g_back_url;
	global $g_logdir;
	global $g_cost;
	
	$check_blank_field = array('Buyer', 'No', 'Soi', 'Road', 'District', 'Amphur', 'Province', 'PostCode', 'Telephone', 'Email');
    if($field = mylib_check_blank($FORM, $check_blank_field, mylib_a_length($FORM))){
		$error = error("not_blank", $field);
		handle_view_order($error[0], $error[1]);		
	}

	if($field = mylib_check_rude_word($FORM, $g_rudewordfile)) {
		$error = error("rude_word");
		handle_view_order($error[0], $error[1]);		
	}
	
	if ($FORM['Email'] && mylib_check_email_format($FORM['Email'])) {
		$error = error('invalid', 'Email');
		handle_view_order($error[0], $error[1]);
	}

	$dttm = mylib_get_date_time($g_gmt, 'THAILONGDATETIME');
	$order_no = mylib_get_date_time($g_gmt, 'SERIAL');
	$ip = mylib_get_agent();
	$mail_str = handle_prepare_summary($g_template_dir."/OrderAccept.html");
	### this block must be after calling handle_prepare_summary ###

	if( $g_amount <= 0 ) {
#		&mylib_print_header();
#print "Error CART";
   	  	$error = error('cart_empty');
		handle_view_order($error[0], $error[1]);
	}
	
	if( !$g_proper_promotion ) {
		print "Error Promotion";
   	  	$error = error('inproper_promotion', $g_force_promotion);
		handle_view_order($error[0], $error[1]);
	}   

	$pattern = array();
	$replace = array();
	array_push($pattern, "'<!-- VAR:ORDER_NO -->'", "'<!-- VAR:DATE_TIME -->'", "'<!-- VAR:AMOUNT -->'"
	, "'<!-- VAR:IP -->'"
	, "'<!-- VAR:BUYER -->'", "'<!-- VAR:NO -->'", "'<!-- VAR:SOI -->'"
	, "'<!-- VAR:ROAD -->'", "'<!-- VAR:DISTRICT -->'", "'<!-- VAR:AMPHUR -->'"
	, "'<!-- VAR:PROVINCE -->'", "'<!-- VAR:TELEPHONE -->'", "'<!-- VAR:EMAIL -->'"
	, "'<!-- VAR:POST_CODE -->'", "'<!-- VAR:COMMENT -->'", "'<!-- VAR:BASE -->'");
	array_push($replace, $order_no, $dttm, $g_amount
		, $ip
		, $FORM['Buyer'], $FORM['No'], $FORM['Soi']
		, $FORM['Road'], $FORM['District'], $FORM['Amphur']
		, $FORM['Province'], $FORM['Telephone'], $FORM['Email']
		, $FORM['PostCode'], $FORM['Comment'], $g_base);

	$mail_str = preg_replace($pattern, $replace, $mail_str);

	/****************************** SAVE TO DATABASE ******************************/
	$address = "เลขที่: ".$FORM['No']."\nซอย: ".$FORM['Soi']."\nถนน: ".$FORM['Road']."\nตำบล/แขวง: ".$FORM['District']
		."\nอำเภอ/เขต: ".$FORM['Amphur']."\nจังหวัด: ".$FORM['Province']."\nรหัสไปรษณีย์: ".$FORM['PostCode'];
	$current_time = date("Y-m-d H:i:s");
	$conn = get_connection();

	$sql = "INSERT INTO ep_order_status".
		   "	(`order`, `email`, `status`, `name`, `telephone`, `address`, `total_cost`, `remark`,`create_time`, `modify_time`) ".
		   "VALUES('".$order_no."', '".$FORM['Email']."', '10',".
		   "	'".$FORM['Buyer']."', '".$FORM['Telephone']."', '".$address."', ".$g_cost.",".
		   "	'".$FORM['Comment']."', '".$current_time."', '".$current_time."')";

	//print $sql;
	$result = mysql_query($sql, $conn);
	print mysql_error();
	mysql_close($conn);
	/******************************************************************************/

/*	$mail_str =~s/<!-- VAR:ORDER_NO -->/$order_no/g;
	$mail_str =~s/<!-- VAR:DATE_TIME -->/$dttm/g;
	$mail_str =~s/<!-- VAR:AMOUNT -->/$g_amount/g;
	$mail_str =~s/<!-- VAR:IP -->/$ip/g;
	$mail_str =~s/<!-- VAR:BUYER -->/$FORM{'Buyer'}/g;
	$mail_str =~s/<!-- VAR:NO -->/$FORM{'No'}/g;
	$mail_str =~s/<!-- VAR:SOI -->/$FORM{'Soi'}/g;
	$mail_str =~s/<!-- VAR:ROAD -->/$FORM{'Road'}/g;
	$mail_str =~s/<!-- VAR:DISTRICT -->/$FORM{'District'}/g;
	$mail_str =~s/<!-- VAR:AMPHUR -->/$FORM{'Amphur'}/g;
	$mail_str =~s/<!-- VAR:PROVINCE -->/$FORM{'Province'}/g;
	$mail_str =~s/<!-- VAR:TELEPHONE -->/$FORM{'Telephone'}/g;
	$mail_str =~s/<!-- VAR:EMAIL -->/$FORM{'Email'}/g;
	$mail_str =~s/<!-- VAR:POST_CODE -->/$FORM{'PostCode'}/g;
	$mail_str =~s/<!-- VAR:COMMENT -->/$FORM{'Comment'}/g;
	$mail_str =~s/<!-- VAR:BASE -->/$g_base/g;*/
#	local($mail_from, $mail_to, $mail_cc, $mail_bcc, $mail_subject, $mail_message, $mail_type) = @_;
#	&maillib_send_mail_html($FORM{'Email'}, $g_sale_master, "OrderAccept", $mail_str);
#	&maillib_send_mail_html($g_sale_master, $g_sale_master,  "OrderAccept", $mail_str);
#	&maillib_send_mail_html($g_sale_master_2, $g_sale_master,  "OrderAccept", $mail_str);
//	maillib_send_mail($g_sale_master, $FORM['Email'], "",$g_sale_master.", ".$g_sale_master_2,  "OrderAccept (".$order_no.")", $mail_str, 'HTML');
	
	// BEGIN : Send mail
	send_mail($FORM['Email'], null, $g_sale_master, "OrderAccept (".$order_no.")", $mail_str);
	// END : Send mail

	// Save log file
	$log_file = $g_logdir."/log/".$order_no.".html";
	mylib_append_data(array($mail_str), $log_file, " ");
	chmod($log_file, 0755);

	// Prepare invoice file
	$invoice_str = handle_prepare_summary($g_template_dir."/PrintOrder.html");
	$invoice_str = preg_replace($pattern, $replace, $invoice_str);
	
	// Save invoice file
	$invoice_file = $g_logdir."/invoice/".$order_no.".html";
	mylib_append_data(array($invoice_str), $invoice_file, " ");
	chmod($invoice_file, 0755);

	$out_str = handle_prepare_summary($g_template_dir."/OrderAccept.html");
	#$out_str = join(/ /, @data);
/*	$out_str =~s/<!-- VAR:ORDER_NO -->/$order_no/g;
	$out_str =~s/<!-- VAR:AMOUNT -->/$g_amount/g;
	$out_str =~s/<!-- VAR:BUYER -->/$FORM{'Buyer'}/g;
	$out_str =~s/<!-- VAR:NO -->/$FORM{'No'}/g;
	$out_str =~s/<!-- VAR:SOI -->/$FORM{'Soi'}/g;
	$out_str =~s/<!-- VAR:ROAD -->/$FORM{'Road'}/g;
	$out_str =~s/<!-- VAR:DISTRICT -->/$FORM{'District'}/g;
	$out_str =~s/<!-- VAR:AMPHUR -->/$FORM{'Amphur'}/g;
	$out_str =~s/<!-- VAR:PROVINCE -->/$FORM{'Province'}/g;
	$out_str =~s/<!-- VAR:TELEPHONE -->/$FORM{'Telephone'}/g;
	$out_str =~s/<!-- VAR:EMAIL -->/$FORM{'Email'}/g;
	$out_str =~s/<!-- VAR:POST_CODE -->/$FORM{'PostCode'}/g;
	$out_str =~s/<!-- VAR:COMMENT -->/$FORM{'Comment'}/g;
	$out_str =~s/<!-- VAR:BASE -->/$g_base/g;
*/
	$out_str = preg_replace($pattern, $replace, $out_str);

	cklib_delete_cookie($g_cookie_key);

	print $out_str;
	exit;
}

function format_money(){
	$arg = func_get_args();
	$baht = sprintf("%.2f", $arg[0]);

	return($baht);
}

/*function handle_update_cart(){
	foreach (keys %FORM) {
		
	if( $_ =~ /^$g_cookie_dlm/ ) {
		&cklib_set_cookie($_, $FORM{$_}, $g_expire_date, $g_path, $g_domain );
		$g_additional_cookies{$_} = $FORM{$_};
 
		}
	}

	//print "Old cookie = ".$cookie."<br>";
	
	while(list($key, $value) = each($FORM)){
	//print "key=".$key."->".$value."<<br>";
	//foreach (keys %FORM) {
		if( preg_match("/^$g_product_prefix(.*)/", $key, $matches) && ($value != "") && !preg_match("/[^0-9]/", $value)) {
			print "Match key=".$key."->".$value."<br>";
			//if( $_ =~ /^$g_cookie_dlm/ && $FORM{$_} != 0) {
			//cklib_set_cookie($_, $FORM{$_}, $g_expire_date, $g_path, $g_domain );
			//$g_additional_cookies[$key] = $value;
			//if($old_cookie != "") {
			//	$old_cookie = $old_cookie.$g_cookie_dlm.$matches[0]."=".$value;
			//}else{
			//	$old_cookie = $matches[0]."=".$value;
			//}
			if($value == 0) {
				unset($cookie[$key]);
			} else {
				$cookie[$key] = $value;
			}

//			$new_cookie = $new_cookie.$g_cookie_dlm.$matches[0];
//			print "new Cookie=".$old_cookie."<br>";
		}
	}

	return;
}*/



###########################################################
#   Subname		: maillib_send_mail
#   Purpose		: Send mail.
#   Input  		: String - From.[1]
#			: String - To.[1..n]
#			: String - Cc.[0..n]
#			: String - Bcc.[0..n]
#			: String - Subject.[1]
#			: String - Message.[1]
#   Output 		: 
#   Called Sub	: mylib_error.
###########################################################
function maillib_send_mail(){

	$arg = func_get_args();

	$mail_from = $arg[0];
	$mail_to = $arg[1];
	$mail_cc = $arg[2];
	$mail_bcc = $arg[3];
	$mail_subject = $arg[4];
	$mail_message = $arg[5];
	$mail_type = $arg[6];

//	open(MAIL,"|$g_mailprog") || &maillib_error();

//	@_ = join(" , ", @_);
	
	$header = "From: ".$mail_from."\r\n";
	if($mail_cc != "") {
		$header .= "Cc: ".$mail_cc."\r\n";
	}

	if($mail_bcc != "") {
		$header .= "Bcc: ".$mail_bcc."\r\n";
	}

	$header .= "Content-Type: text/html\r\n";
	$header .= "MIME-Version: 1.0\r\n";

	mail($mail_to, $mail_subject, $mail_message, $header);
	return 0;
	//print "Send mail error<br>Please contact <a href=mailto:".$g_contact.">".$g_contact."</a>";
	//exit;
}


###########################################################
#   Subname		: cklib_delete_cookie
#   Purpose		: Delete session variable
#   Input  		: String - session key[1]
#   Output 		: 0 - success
#			  1 - fail
#			 -1 - error
#   Called Sub 		: 
###########################################################
function cklib_delete_cookie(){

	$count = func_num_args();
	if($count <1){
		mylib_error('invalid_argument','cklib_delete_cookie');
		return -1;
	}
	
	$arg = func_get_args();
	session_start();
	unset($_SESSION[$arg[0]]);
	return 0;
}

###########################################################
#   Subname		: cklib_set_cookie
#   Purpose		: Set cookie's value. 
#   Input  		: String - cookie's key[1].
#   	  		: String - cookie's value to be set[1].
#   Output 		: 0 - success
#			  1 - fail
#			 -1 - error
#   Called Sub	   	: cklib_error
###########################################################
function cklib_set_cookie() {

	$count = func_num_args();
	if($count < 2){
		mylib_error('invalid_argument','cklib_set_cookie');
		return -1;
	}

	$arg = func_get_args();
	session_start();

	$_SESSION[$arg[0]] = $arg[1];

	return 0;
} 

###########################################################
#   Subname		: cklib_get_cookie_as_array
#   Purpose		: Get cookie using key. 
#   Input  		: String - cookie's key[1].
#   	  		: String - cookie's delimeter[1]
#   Output 		: Associative array of specific session variable.
#   Called Sub	   	: 
###########################################################
function cklib_get_cookie_as_array() { 

	$count = func_num_args();
	if($count < 2){
		mylib_error('invalid_argument','cklib_get_cookie_as_array');
		return -1;
	}

	$arg = func_get_args();
	$out = array();
	$data = cklib_get_cookie($arg[0]);
	$data_array = split ($arg[1], $data); 
	$data_len = count($data_array);

	for($i=0; $i<$data_len; $i++){
		$temp = split ("/=/",$data_array[$i]); 
		$out[$temp[0]] = $temp[1]; 
	}
	return $out; 
} 

###########################################################
#   Subname		: cklib_get_cookie
#   Purpose		: Get cookie using key. 
#   Input  		: String - cookie's key[1].
#   Output 		: value of sepecific session variable.
#   Called Sub	: 
###########################################################
function cklib_get_cookie() { 

	$count = func_num_args();
	if($count < 1){
		mylib_error('invalid_argument','cklib_get_cookie');
		return -1;
	}
	$out = array();
	$arg = func_get_args();
	session_start();
	if (isset($_SESSION[$arg[0]])) {
		return $_SESSION[$arg[0]];
	} else {
		return array();
	}
}


###########################################################
#   Subname		: error
#   Purpose		: Handle error message.
#   Input  		: String - error type.[1]
#				: String - argument 1.[0..1]
#   Output 		: 
#   Called Sub	: error.
#		   		: message.
###########################################################
function error() {	
/*   local($error, $message_header, $message_body, $label, @error, $name,$file_name,$field_name,$system_error,$error_head,$error_type);
#&mylib_print_result("in error");
   @error = @_;
   $error_head = "ข้อผิดพลาด";
   $system_error = "ข้อผิดพลาดของระบบ";
   $information = "Information";
   $file_name = $error[1];
   $field_name = $error[1];
   $message = $error[1];  
   $error_type = $error[0];
*/
	global $g_contact;
	$count = func_num_args();
	if($count <1){
		mylib_error('invalid_argument','error');
		return -1;
	}
	$arg = func_get_args();

   $error = $arg;
   $error_head = "ข้อผิดพลาด";
   $system_error = "ข้อผิดพลาดของระบบ";
   $information = "Information";
   $error_type = $error[0];
	if($count == 2) {
	   $file_name = $error[1];
	   $field_name = $error[1];
	   $message = $error[1];  
	}

   if ($error_type == 'field_size') {
      $message_header = "$error_head: ขนาดของข้อมูล";
	  $name = get_label($field_name);
	  $message_body = "$name ต้องมีขนาดไม่เกิน $g_max_len{$field_name}";

   }elseif ($error_type == 'file_type') {
      $message_header = "$error_head: ชนิดของไฟล์";
	  $message_body = "ชนิดของไฟล์ต้องเป็น .\"$file_name\"";

   }elseif ($error_type == 'inproper_promotion') {
      $message_header = "$error_head:สินค้าโปรโมชันไม่ถูกต้อง";
	  $message_body = "คุณต้องสั่งซื้อสินค้าปกติเป็นจำนวน $message บาทจึงจะสามารถสั่งซื้อสินค้าโปรโมชั่นได้";

   }elseif ($error_type == 'cart_empty') {
      $message_header = "$error_head:กรุณาเลือกซื้อสินค้า";
	  $message_body = "ไม่พบสินค้าอยู่ในรายการซื้อ  กรุณาเลือกซื้อสินค้าก่อนสั่งซื้อ";

   }elseif ($error_type == 'not_blank') {
      $message_header = "$error_head: ไม่สามารถเว้นว่างได้";
	  $name = get_label($field_name);
	  $message_body = "กรุณาใส่ข้อมูลในช่องต่อไปนี้ \"$name\"";

   }elseif ($error_type == 'invalid_input') {
      $message_header = "$error_head: ใส่ข้อมูลไม่ถูกต้อง";
	  $name = get_label($field_name);
	  $message_body = "ข้อมูลในช่องต่อไปนี้  \"$name\" ไม่ถูกต้อง";

   }elseif ($error_type == 'rude_word') {
      $message_header = "$error_head: คำหยาบ";
	  $message_body = "กรุณาอย่าใส่คำหยาบ";

   }elseif ($error_type == 'invalid') {
      $message_header = "$error_head: ใส่ข้อมูลผิดพลาด";
	  $name = get_label($field_name);
	  $message_body = " กรุณาใส่ \"$name\" ให้ถูกต้อง";

   }elseif ($error_type == 'record_duplicate') {
      $message_header = "$error_head: มีการใส่ข้อมูลซ้ำ";
	  $message_body = "กรุณาตรวจสอบการใส่ข้อมูล";

   }elseif ($error_type == 'not_allow') {
      $message_header = "$error_head: ระบบนี้ไม่อนุญาตให้ให้ใช้";
	  $message_body = "กรุณางดใช้ระบบนี้จนกว่าจะอนุณาตให้ใช้";

   }elseif ($error_type == 'bad_access') {
      $message_header = "$error_head: คุณใช้ระบบนี้ด้วยวิธีการที่ไม่ถูกต้อง";
	  $message_body = "กรุณาติดต่อ $g_contact";

  }elseif ($error_type == 'bad_ip_address') {
      $message_header = "$error_head: มีการโหวตผิดวิธี";
	  $message_body = "ip address ของคุณมีรูปแบบไม่ถูกต้อง";
	  
   }elseif ($error_type == 'file_not_found') {
      $message_header = "$system_error: ไม่สามารถเปิดไฟล์";
	  $message_body = "ไม่สามารถเปิดไฟล์ $file_name ได้";
  	  $message_body .= "<br>กรุณาติดต่อ $g_contact";

   }elseif ($error_type == 'file_duplicate') {
      $message_header = "$system_error: ไม่สามารถบันทึกไฟล์";
	  $message_body = "ไม่สามารถบันทึกไฟล์ เกิดไฟล์ $file_name ซ้ำ";
  	  $message_body .= "<br>กรุณาติดต่อ $g_contact";

   }elseif ($error_type == 'file_write_error') {
      $message_header = "$system_error: ไม่สามารถบันทึกไฟล์";
	  $message_body = "ไม่สามารถบันทึกไฟล์ $file_name ได้";
  	  $message_body .= "<br>กรุณาติดต่อ $g_contact";

   }elseif ($error_type == 'invalid_file_format') {
      $message_header = "$system_error: รูปแบบไฟล์ไม่ถูกต้อง";
	  $message_body = "ไม่สามารถอ่านไฟล์ $file_name ได้เนื่องจากรูปแบบไม่ถูกต้อง";
  	  $message_body .= "<br>กรุณาติดต่อ $g_contact";

   }elseif ($error_type == 'invalid_argument') {
      $message_header = "$system_error: โปรแกรมผิดพลาด";
	  $message_body = "ส่ง argument ผิดพลาด";

   }elseif ($error_type == 'function_return_error') {
      $message_header = "$system_error: โปรแกรมผิดพลาด";
	  $message_body = "เรียกโปรแกรมผิดพลาด";
	  
   }elseif ($error_type == 'maintaining') {
      $message_header = "$information: กำลังปรับปรุงระบบ";
	  $message_body = "ขอขอบคุณทุกท่านที่ให้ความสนใจระบบของเรา<br>ขณะนี้กำลังปรับปรุงระบบ  ท่านจะกลับมาใช้ระบบอีกครั้ง<br>ภายใน 10 นาที";
	  $message_body .= "<br>ขออภัยในความไม่สะดวกค่ะ";
	    
   }elseif ($error_type == 'message') {
      $message_header = "$information: ";
	  $message_body = "$message";
	  
   }else {
      $message_header = "$system_error: Undefine Error";
      $message_body = "กรุณาติดต่อ $g_contact";
   }
   return array($message_header, $message_body);
}

function get_label(){
	global $g_field_label;
	$count = func_num_args();
	if($count <1){
		mylib_error('invalid_argument','get_label');
		return -1;
	}
	$arg = func_get_args();
	if(!($name = $g_field_label[$arg[0]])) {
		$name = $arg[0];
	}
	return $name;
}
?>

/*

sub handle_print_report() {
	local($report_input_file, $from_date, $to_date, @data, $out_str);

	$report_input_file = $g_wwwdir."/Report.html";

	$from_date = &mylib_get_date_time($g_gmt, "SHORTDATE", time);
	$to_date =  $from_date;

	@data = &mylib_get_data($report_input_file );
	$out_str = join(" ", @data);


	$out_str =~s/<!-- VAR:BASE -->/$g_base/g;
	$out_str =~s/<!-- VAR:ACTION -->/$g_cgi_url\/shoppingcart.pl?Menu=DisplayReport/g;
	$out_str =~s/<!-- VAR:FROM_DATE -->/$from_date/g;
	$out_str =~s/<!-- VAR:TO_DATE -->/$to_date/g;
	&mylib_print_header();
	print $out_str;

}

sub handle_display_report() {
	local(@data, @report_template, @temp_data);
	local($report_template_file, $out_str, $from_date,  $to_date, $from_date_str, $to_date_str);
	local($i, $date, $len, $data_str, $day, $month, $year);
	$report_template_file = $g_wwwdir."/ReportTemplate.html";

	if ($FORM{'Password'} eq "" || $FORM{'Password'} ne $g_report_password) {
		&mylib_print_header();
		print "FUCK";
		exit;
	}
	@report_template = &mylib_split_loop($report_template_file, "SHORT_LOG");
	$out_str = $report_template[0];

	$from_date_str = $FORM{'FromDate'};
	$to_date_str = $FORM{'ToDate'};
#&mylib_print_header();
	$day = $from_date_str;
	$day =~ /(\d\d)\/(\d\d)\/(\d\d\d\d)/;
	
	$day = $1;
	$month = $2;
	$year = $3;
#	print "day=".$day."month".$month."year".$year;
	use Time::Local;
	$from_date = timegm(0,0,0,$day,$month-1,$year);
	#$from_date = $from_date + ($g_gmt * 60 * 60);
#	print &mylib_get_date_time(0, "SHORTDATETIME", $from_date);
#	print "From date=".$from_date;
#	print "<br>time=".time."<br>";
	$day = $to_date_str;
	$day =~ /(\d\d)\/(\d\d)\/(\d\d\d\d)/;
	
	$day = $1;
	$month = $2;
	$year = $3;
	$to_date = timegm(59,59,23,$day,$month-1,$year);

#	print &mylib_get_date_time(0, "SHORTDATETIME", $to_date);
#	print "To date=".$to_date;

#	$from_date_str = &mylib_get_date_time($g_gmt, "SHORTDATETIME", $from_date_str);
#	$to_date_str = &mylib_get_date_time($g_gmt, "SHORTDATETIME", $to_date_str);
	$out_str =~s/<!-- VAR:FROM_DATE -->/$from_date_str/g;
	$out_str =~s/<!-- VAR:TO_DATE -->/$to_date_str/g;
	@data = &mylib_get_data($g_short_log);

	for($i=0; $i < @data; $i++ ){


		@temp_data =  split($g_dlm, $data[$i]);
		$date = $temp_data[0];
		if($date >= $from_date && $date <= $to_date) {

			$len = @temp_data;
			$date = $temp_data[1];
			@temp_data = @temp_data[2..$len-1];
			$temp_str = $report_template[1];

			$data_str = join($g_dlm, @temp_data);
			$temp_str =~ s/<!-- VAR:DATE -->/$date/;	
			$temp_str =~ s/<!-- VAR:MESSAGE -->/$data_str/;
			$out_str = $out_str.$temp_str;
		}

	}
	$out_str = 	$out_str.$report_template[2];
#	$out_str =~s/<!-- VAR:BASE -->/$g_base/g;
	&mylib_print_header();
	print $out_str;
	exit;
}

sub handle_send_mail(){
	local($order_no,$out_str,$log_str, $log_dttm, $log_long_dttm);
	local(@short_log_loop);
	@check_blank_field = ('Message', 'MailTo');
	if($field = &mylib_check_blank(%FORM, @check_blank_field, &mylib_a_length(%FORM))){
	  @error = &error("not_blank", $field);
	  exit;		
	}

	$order_no = $FORM{'Message'};
	@data = &mylib_get_data($g_basedir."/log/".$order_no.".html");
	$out_str = join(" ", @data);

## Start write short log
	$log_str = $out_str;

	@short_log_loop = &mylib_split_loop_string( $log_str, 'SHORT_LOG' );
	$log_dttm = &mylib_get_date_time($g_gmt, 'SERIAL');
	$log_long_dttm = &mylib_get_date_time($g_gmt, 'SHORTDATETIME');
	$log_str = $short_log_loop[1];

	$log_str =~ s/>\s+</></g;

	$log_str = &mylib_trim($log_str);
	$log_str = join(" ", split("\n", $log_str));

	&mylib_append_data(($log_dttm, $log_long_dttm, $log_str), $g_short_log, $g_dlm);	

## End write short log

#	$TEMP{'MailStr'} = $FORM{'Message'};
#	%TEMP = &mylib_encode_data(%g_decode_data, %TEMP, &mylib_a_length(%g_decode_data));
	&maillib_send_mail($g_sale_master, $FORM{'MailTo'}, "",$g_sale_master.", ".$g_sale_master_2, "OrderAccept: ".$order_no, $out_str, 'HTML');
	&mylib_message($g_error_template,'Information',"ส่งเมล์เรียบร้อยแล้ว" );
	exit;
}



sub handle_view_order_log() {
	local(@data, @check_blank_field);
	@check_blank_field = ('OrderNo');
    if($field = &mylib_check_blank(%FORM, @check_blank_field, &mylib_a_length(%FORM))){
	    @error = &error("not_blank", $field);
   		&handle_view_order(@error);		
 	}
	@data = &mylib_get_data($g_basedir."/log/".$FORM{'OrderNo'}.".html");
	$out_str = join(" ", @data);
#	$out_str =~s/\n/<br>/g;
	&mylib_print_header();
	print $out_str;
	exit;
}		

sub handle_view_log_header() {
	local(@data, @check_blank_field);
	@data = &mylib_get_data($g_basedir."/log/header.txt");
	$out_str = join("<br>", @data);
	&mylib_print_header();
	print $out_str;
	exit;
}	
	
	
sub handle_preview_order{
#&mylib_print_header();
#&mylib_print_pair_array();
	local( $photo_add_template, $field, $id, $dttm,$log_str );
	local( $dttms, $access_count, $jam_count, $allow_image, $allow_jam );
	local( $ip, $FILE_CONTENT1, $image_url, $image_name, $imagefilename, $str, $data_file );
	local( @check_blank_field, @error ,@log_loop);

    $g_back_url=$g_back_url;
	
	@check_blank_field = ('Buyer', 'No', 'Soi', 'Road', 'District', 'Amphur', 'Province', 'PostCode', 'Telephone', 'Email');
    if($field = &mylib_check_blank(%FORM, @check_blank_field, &mylib_a_length(%FORM))){
	    @error = &error("not_blank", $field);
   		&handle_view_order(@error);		
 	}

	if($field = &mylib_check_rude_word(%FORM, $g_rudewordfile)) {
	    @error = &error("rude_word");
   		&handle_view_order(@error);		
    }
	
   if ($FORM{'Email'} && &mylib_check_email_format($FORM{'Email'})) {
   	  @error = &error('invalid', 'Email');
   		&handle_view_order(@error);			  
   }

	$dttm = &mylib_get_date_time($g_gmt, 'THAILONGDATETIME');
	$order_no = &mylib_get_date_time($g_gmt, 'SERIAL');
	$ip = &mylib_get_agent();
	$out_str = &handle_prepare_summary($g_template_dir."/OrderPreview.html");

	### this block must be after calling handle_prepare_summary ###
	if( $g_amount <= 0 ) {
#		&mylib_print_header();
   	  	@error = &error('cart_empty');
   		&handle_view_order(@error);			  
	}
	
	if( !$g_proper_promotion ) {
   	  	@error = &error('inproper_promotion', $g_force_promotion);
   		&handle_view_order(@error);			  
	}   

	$out_str =~s/<!-- VAR:DATE_TIME -->/$dttm/g;
	$out_str =~s/<!-- VAR:IP -->/$ip/g;		
	$out_str =~s/<!-- VAR:ORDER_NO -->/$order_no/g;
	$out_str =~s/<!-- VAR:AMOUNT -->/$g_amount/g;
	$out_str =~s/<!-- VAR:BUYER -->/$FORM{'Buyer'}/g;
	$out_str =~s/<!-- VAR:NO -->/$FORM{'No'}/g;
	$out_str =~s/<!-- VAR:SOI -->/$FORM{'Soi'}/g;
	$out_str =~s/<!-- VAR:ROAD -->/$FORM{'Road'}/g;
	$out_str =~s/<!-- VAR:DISTRICT -->/$FORM{'District'}/g;
	$out_str =~s/<!-- VAR:AMPHUR -->/$FORM{'Amphur'}/g;
	$out_str =~s/<!-- VAR:PROVINCE -->/$FORM{'Province'}/g;
	$out_str =~s/<!-- VAR:TELEPHONE -->/$FORM{'Telephone'}/g;
	$out_str =~s/<!-- VAR:EMAIL -->/$FORM{'Email'}/g;
	$out_str =~s/<!-- VAR:POST_CODE -->/$FORM{'PostCode'}/g;
	$out_str =~s/<!-- VAR:COMMENT -->/$FORM{'Comment'}/g;
	$out_str =~s/<!-- VAR:BASE -->/$g_base/g;

	#$TEMP{'MailStr'} = $out_str;
	#%TEMP = &mylib_encode_data(%g_encode_data, %TEMP, &mylib_a_length(%g_encode_data));

	#$out_str =~s/<!-- VAR:MESSAGE -->/$TEMP{'MailStr'}/g;
	$out_str =~s/<!-- VAR:MESSAGE -->/$order_no/g;

	$out_str =~s/<!-- VAR:ACTION -->/$g_mail_url/g;
	$out_str =~s/<!-- VAR:MAIL_TO -->/$FORM{'Email'}/g;
			
	$log_str = $out_str;
	@log_loop = &mylib_split_loop_string( $log_str, 'NO_SUBMIT_LOOP' );

	$log_str = $log_loop[0].$log_loop[2];

	$log_file = $g_basedir."/log/".$order_no.".html";
	&mylib_append_data($log_str, $log_file, " ");

	$header_log_file = $g_basedir."/log/header.txt";
	&mylib_append_data($order_no, $FORM{'Buyer'}, $dttm, $header_log_file, $g_dlm);

	&cklib_delete_cookie();
	&cklib_delete_cookie();
	&mylib_print_header();
	print $out_str;
	exit;
}


*/
