<?
session_start();
if ($_SESSION['login'] != "true") {
	header("Location: login.htm");
}
?>

<?
include_once("../../lib/config.php");

require("common.inc.php");
require("../../lib/db.php");
require("../../lib/mylib.php");
require("../../lib/mylib2.php");

$g_error	= "";
$g_message	= "";

$g_mail_template_dir = getenv('DOCUMENT_ROOT')."/php/epetshop/tracking/template/";

// Trim all inputs
trim_all_params();

if (isset($_REQUEST["update"])) {
	update_status();
	$g_message = "Order status updated.";
}

function get_order($order_no) {
	global $g_error;

	// Result
	$order = array();

	$conn = get_connection();
	$sql = "SELECT * FROM ep_order_status WHERE (`order` = '$order_no')";
	$result = mysql_query($sql, $conn);

	// Check existence
	if (mysql_num_rows($result) > 0) {
		$row = mysql_fetch_array($result);

		// Populate result
		$order["order"] = $row["order"];
		$order["email"] = $row["email"];
		$order["status"] = $row["status"];
		$order["create_time"] = $row["create_time"];
		$order["modify_time"] = $row["modify_time"];
		$order["name"] = $row["name"];
		$order["telephone"] = $row["telephone"];
		$order["address"] = $row["address"];
		$order["total_cost"] = $row["total_cost"];
		$order["remark"] = $row["remark"];
		$order["sent_date"] = $row["sent_date"];
		$order["comment"] = $row["comment"];
	}

	mysql_free_result($result);
	mysql_close($conn);
	return $order;
}

function update_status() {
	$conn = get_connection();
	$sent_date = "NULL";
	$current_time = date("Y-m-d H:i:s");
	if ($_REQUEST['status'] >= "40") {
		if ($_REQUEST['SentDate'] == "") {
			$sent_date = "'".date("Y-m-d H:i:s")."'";
		} else {
			$sent_date = "'".$_REQUEST['SentDate']."'";
		}
	}
	$sql = "UPDATE ep_order_status SET `status` = '".$_REQUEST['status']."' ".
		   ", `modify_time` = '".$current_time."' ".
		   ", `remark` = '".$_REQUEST['remark']."' ".
		   ", `comment` = '".$_REQUEST['comment']."' ".
		   ", `sent_date` = ".$sent_date." ".
		   "WHERE (`order` = '".$_REQUEST['order']."')";
	print("<code><font color='blue'>".$sql."</font></code>");

	$result = mysql_query($sql, $conn);
	print(mysql_error());

	mysql_close($conn);

	if ($_REQUEST["sendMail"] == "true") {
		handle_send_mail();
	}
}

function handle_send_mail() {
	global $g_mail_template_dir;

	// Get mail template
	$template_file = "";
	if ($_REQUEST['status'] == "20")			{ $template_file = "ordergot.txt"; }
	else if ($_REQUEST['status'] == "30")		{ $template_file = "pay.txt"; }
	else if ($_REQUEST['status'] == "40")		{ $template_file = "sent.txt"; }
	else if ($_REQUEST['status'] == "85")		{ $template_file = "paymentnotfound.txt"; }
	else if ($_REQUEST['status'] == "90")		{ $template_file = "cancelorder.txt"; }
	else return;

	// Retrieve order information
	$order = get_order($_REQUEST['order']);
	
	// Read mail template file.
	$template = read_file($g_mail_template_dir.$template_file);

	// Replace mail template with actual values.
	$pattern = array();
	$replace = array();

	$dttm = $_REQUEST['SentDate'];
	if (trim($dttm) == "") {
		$dttm = mylib_get_date_time($g_gmt, 'THAILONGDATE');
	}

	array_push($pattern, 
		"'<!-- ORDER_NO -->'", 
		"'<!-- SENT_DATE -->'", 
		"'<!-- COMMENT -->'"
	);
	array_push($replace, 
		$_REQUEST['order'], 
		$dttm, 
		$order["remark"]
	);

	$template = preg_replace($pattern, $replace, $template);

	// Cut first line of template as subject.
	$pos = strpos($template, "\n");
	$mail_subject = substr($template, 0, $pos);
	$mail_body = substr($template, $pos + 1);

	// Create mail header.
	$mail_header = create_mail_header();

	//mail($order["email"], $mail_subject, $mail_body, $mail_header);

	// BEGIN : Send mail
	include_once($_SERVER["DOCUMENT_ROOT"]."/php/lib/phpmailer/class.phpmailer.php");

	$mail = new PHPMailer();
	$mail->IsSMTP(); // telling the class to use SMTP
	$mail->Host = SMTP_HOST; // SMTP server
	$mail->Port = SMTP_PORT;
	$mail->Username = SMTP_USER;
	$mail->Password = SMTP_PASSWORD;
	$mail->SMTPAuth = SMTP_AUTH;
	$mail->SMTPSecure = SMTP_SECURE;
	$mail->SMTPDebug = SMTP_DEBUG;

	$mail->CharSet = "TIS620";

	$mail->From = "sale@epetthailand.com";
	$mail->FromName = "sale@epetthailand.com";
	$mail->AddAddress($order["email"]);
	$mail->AddBCC("sale@epetthailand.com", "ePetThailand Sale");
	$mail->AddBCC("epetthailand@gmail.com", "ePetThailand Sale");

	$mail->Subject = $mail_subject;
	$mail->Body = $mail_body;

	if(!$mail->Send()) {
	   echo 'Message was not sent.';
	   echo 'Mailer error: ' . $mail->ErrorInfo;
	}
	// END : Send mail
}

function create_mail_header() {
    $header = '';
    $header .= "From: ePetThailand Sale <sale@epetthailand.com>\r\n";
    $header .= "BCC: ePetThailand Sale <sale@epetthailand.com>\r\n";
    return $header;
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>ปรับปรุงสถานะการสั่งซื้อ</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
<!-- Loading Theme file(s) -->
    <link rel="stylesheet" href="../../../common/calendar/zpcal/themes/winter.css" />

<!-- Loading Calendar JavaScript files -->
    <script type="text/javascript" src="/common/calendar/utils/zapatec.js"></script>
    <script type="text/javascript" src="/common/calendar/zpcal/src/calendar.js"></script>
<!-- Loading language definition file -->
    <script type="text/javascript" src="/common/calendar/zpcal/lang/calendar-th.js"></script>

</head>

<body>
<form name="form1" method="post" action="">
  <p>
    <font color="blue"><strong><?= $g_message ?></strong></font>
    <font color="red"><strong><?= $g_error ?></strong></font>
  </p>
  <table width="75%" border="0">
    <tr> 
      <td><div align="right">หมายเลขการสั่งซื้อ</div></td>
      <td><input name="order" type="text" id="order" size="10" maxlength="10"></td>
    </tr>
  </table>
  <p> 
    <input name="submit" type="submit" id="submit" value="Submit">
    <input type="hidden" name="search" value="true">
  </p>
  </form>
<?
if (isset($_REQUEST["search"])) {
	$order = get_order(trim($_REQUEST["order"]));
	if (count($order) == 0) {
		print("Order #".$_REQUEST["order"]." not found!!");
	}
	else {
?>
  <hr>
  <form name="form2" method="post" action="">
  <table width="75%" border="0">
    <tr> 
      <td><div align="right"><strong>หมายเลขการสั่งซื้อ</strong></div></td>
      <td> 
        <?= $order["order"] ?>
      </td>
      <input type="hidden" name="order" value="<?= $order["order"] ?>">
    </tr>
    <tr> 
      <td><div align="right"><strong>E-Mail Address</strong></div></td>
      <td> 
        <?= $order["email"] ?>
      </td>
    </tr>
    <tr> 
      <td><div align="right"><strong>สถานะการสั่งซื้อ</strong></div></td>
      <td> <select name="status">
          <?
		$statuses = get_all_statuses();
		while (list($code, $description) = each ($statuses)) {
			$check = "";
			if ($code == $order["status"]) {
				$check = "selected";
			}
		?>
          <option value="<?= $code ?>" <?= $check ?>> 
          <?= $description ?>
          </option>
          <?
		}
		?>
        </select> </td>
    </tr>
    <tr> 
      <td><div align="right">วันที่บันทึกรายการ</div></td>
      <td><?= $order["create_time"] ?></td>
    </tr>
    <tr> 
      <td><div align="right">วันที่ปรับปรุงล่าสุด</div></td>
      <td> 
		<?= $order["modify_time"] ?>
		<!--
        <?= FncChangeTimestamp($order["modify_time"], "YYYY-MM-DD hh:mm:ss") ?>
		-->
      </td>
    </tr>
    <tr> 
      <td><div align="right"></div></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td><div align="right">ราคาทุน</div></td>
      <td><?= $order["total_cost"] ?></td>
    </tr>
    <tr> 
      <td><div align="right"></div></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td><div align="right">ชื่อ - นามสกุล</div></td>
      <td> 
        <?= $order["name"] ?>
      </td>
    </tr>
    <tr> 
      <td><div align="right">เบอร์โทรศัพท์</div></td>
      <td> 
        <?= $order["telephone"] ?>
      </td>
    </tr>
    <tr> 
      <td valign="top"><div align="right">ที่อยู่</div></td>
      <td> 
        <?= nl2br($order["address"]) ?>
      </td>
    </tr>
    <tr> 
      <td valign="top"><div align="right">Sent Date</div></td>
      <td><input type="text" name="SentDate" id="SentDate" value="<?= $order["sent_date"] ?>"> 
		<button id="trigger">ปฏิทิน</button>
		<script type="text/javascript">//<![CDATA[
		  Zapatec.Calendar.setup({
			electric          : false,
			inputField        : "SentDate",
			button            : "trigger",
			ifFormat          : "%Y-%m-%d",
			daFormat          : "%Y-%m-%d"
		  });
		//]]></script> <font color="blue">(ใช้ได้แล้ว ถ้าไม่ใส่ จะเป็นวันที่ปัจจุบัน)</font>
	  </td>
     </tr>
    <tr> 
      <td valign="top"><div align="right">หมายเหตุ</div></td>
      <td><textarea name="remark" cols="50" rows="5"><?= $order["remark"] ?></textarea></td>
    </tr>
    <tr> 
      <td valign="top"><div align="right">Private Comment</div></td>
      <td><textarea name="comment" cols="50" rows="5"><?= $order["comment"] ?></textarea></td>
    </tr>
    <tr> 
      <td valign="top"><div align="right">Send E-Mail</div></td>
      <td><input type="checkbox" name="sendMail" value="true" checked></td>
    </tr>
  </table>
  <p>
    <input name="submit" type="submit" id="update" value="Update">
    <input type="hidden" name="update" value="true">
  </p>
</form>
<? 
	}
}
?>
<p>&nbsp;</p>
</body>
</html>