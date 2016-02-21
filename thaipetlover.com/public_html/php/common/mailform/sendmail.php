<?

session_start(); 
if ($_SESSION['login'] != "true") {
	header("Location: http://www.thaipetlover.com/php/epetshop/tracking/login.htm"); 
}

$message_header     = "";
$message_body       = "";

$error              = "";

$g_bcc_list			= "admin@thaipetlover.com";

if (isset($_REQUEST["Submit"])) {
	if (!validate_required_fields()) {
		$error = "กรุณากรอกข้อมูลให้ครบถ้วนด้วยค่ะ";
	}

	$message = create_mail_body();

	if ($error != "") {
		$message_header = "เกิดข้อผิดพลาดค่ะ";
		$message_body = $error;
	}
	else {
		mail($_REQUEST['MailTo'], $_REQUEST['MailSubject'], $message, create_mail_header());
		$message_body = "ระบบได้ทำการส่งเมล์เรียบร้อยแล้วค่ะ";
	}
}

/*********************************** BEGIN HTML ***********************************/
?>

<html>
<form method="post">
<?= $message_body ?>
<table width="75%"  border="1">
  <tr>
    <td width="35%">From</td>
    <td width="65%"><select name="MailFrom" id="MailFrom">
      <option value="Sale ePetThailand &lt;sale@epetthailand.com&gt;" selected>Sale ePetThailand &lt;sale@epetthailand.com&gt;</option>
      <option value="ThaiPetLover WebMaster &lt;webmaster@thaipetlover.com&gt;">ThaiPetLover WebMaster &lt;webmaster@thaipetlover.com&gt;</option>
    </select></td>
  </tr>
  <tr>
    <td>To</td>
    <td><input name="MailTo" type="text" id="MailTo" size="60"></td>
  </tr>
  <tr>
    <td>CC</td>
    <td><input name="MailCC" type="text" id="MailCC" size="60"></td>
  </tr>
  <tr>
    <td>BCC</td>
    <td><input name="MailBCC" type="text" id="MailBCC" size="60"></td>
  </tr>
  <tr>
    <td>Subject</td>
    <td><input name="MailSubject" type="text" id="MailSubject" size="60"></td>
  </tr>
  <tr>
    <td>Body</td>
    <td><textarea name="MailBody" cols="60" rows="10" id="MailBody"></textarea></td>
  </tr>
</table>
<p>
  <input type="submit" name="Submit" value="Submit">
  <input type="reset" name="Reset" value="Reset">
</p>
</form>
</html>

<?

/*********************************** HELPER FUNCTIONS ***********************************/

function create_mail_body() {
    $message .= $_REQUEST["MailBody"]."\r\n";
	return $message;
}

function validate_required_fields() {
	if (trim($_REQUEST["MailFrom"]) == ""
			|| trim($_REQUEST["MailTo"]) == ""
			|| trim($_REQUEST["MailBody"]) == "") {
		return false;
	}
    return true;
}

function create_mail_header() {
	global $g_bcc_list;

    $header = '';
    $header .= "From: ".$_REQUEST['MailFrom']."\r\n";
    $header .= "CC: ".$_REQUEST['MailCC']."\r\n";
    $header .= "BCC: ".$g_bcc_list.",".$_REQUEST['MailBCC']."\r\n";
    return $header;
}

?>