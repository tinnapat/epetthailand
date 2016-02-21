<?

require($_SERVER["DOCUMENT_ROOT"]."/php/lib/mylib.php");

$g_base = "http://www.epetthailand.com/perl_com/mailform/";

$message_header     = "";
$message_body       = "";

$error              = "";

if (!validate_required_fields()) {
    $error = "กรุณากรอกข้อมูลให้ครบถ้วนด้วยค่ะ";
}

$message = create_mail_body();
//print($message);

//ini_set("SMTP", "smtp.se-ed.net");
//ini_set("SMTP", "/usr/lib/sendmail");

if ($error != "") {
    $message_header = "เกิดข้อผิดพลาดค่ะ";
    $message_body = $error;
}
else {
    //mail($_REQUEST['MailTo'], $_REQUEST['MailSubject'], $message, create_mail_header());
	if (send_mail_from($_REQUEST["MailFrom"], $_REQUEST["MailFrom"], $_REQUEST['MailTo'], $_REQUEST['MailCC'], $_REQUEST['MailBCC'], $_REQUEST['MailSubject'], $message)) {
		$message_body = "ระบบได้ทำการส่งเมล์เรียบร้อยแล้วค่ะ";
	}
}

/*********************************** BEGIN HTML ***********************************/
?>

<html><base href="<?= $g_base ?>">
    <head>
   <TITLE>ส่งคำถาม, คำแนะนำ</TITLE>
<meta name="keywords"
content="แกสบี้,หนู,เควี่,หนูเควี่,หนูแกสบี้,site,สัตว์เลี้ยง,gasby,gasbies,pet,cavy; charset=windows-874">
<link rel="stylesheet" href="./image/css.css">
<style type="text/css">
</style>
    </head>
    <!--template=uploadsuccess.tpl-->
    
<body bgcolor="#FFFFFF" background="image/bg_feet.gif">
<table width="599" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="465">&nbsp;</td>
    <td width="10">&nbsp;</td>
  </tr>
  <tr> 
    <td><img src="image/sendalready.gif" width="455" height="63"><img src="image/go.jpg" width="86" height="54"></td>
    <td width="10">&nbsp;</td>
  </tr>
  <tr> 
    <td width="465" class="hdrorange"> 
      <div align="center" class="NormalBold"><br>
        <?= $message_header ?></div>
    </td>
    <td width="10">&nbsp;</td>
  </tr>
  <tr> 
    <td width="465" class="fontorange"> 
      <p align="center" class="normal"> <BR>
        <?= $message_body ?><p>
        <a href="javascript:history.back()">&lt;&lt; ย้อนกลับ</a>
      </p>
    </td>
    <td width="10">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="2"> 
      <hr>
    </td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td width="10">&nbsp;</td>
  </tr>
</table>

</body>
    </html>

<?

/*********************************** HELPER FUNCTIONS ***********************************/

function create_mail_body() {
    $message = '<pre>';
    while (list ($key, $val) = each($_REQUEST)) {
        $message .= $key.":\t".$val."\r\n";
    }
    $message .= "IP_ADDRESS:\t".$_SERVER['REMOTE_ADDR']."\r\n";
	$message .= "</pre>";
    return $message;
}

function validate_required_fields() {
    $requires = split(",", $_REQUEST['Require']);
    for ($i = 0; $i < count($requires); $i++) {
        if (trim($_REQUEST[$requires[$i]]) == "") {
            return false;
        }
    }
    return true;
}

function create_mail_header() {
    $header = '';
    $header .= "From: ".$_REQUEST['MailFrom']."\r\n";
    $header .= "BCC: ".$_REQUEST['MailBCC']."\r\n";
    return $header;
}

?>