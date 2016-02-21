<?
session_start(); 
if ($_SESSION['login'] != "true") {
	header("Location: login.htm"); 
}

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
		$order["remark"] = $row["remark"];
		$order["comment"] = $row["comment"];
	}

	mysql_free_result($result);
	mysql_close($conn);
	return $order;
}

function update_status() {
	$conn = get_connection();
	$current_time = date("Y-m-d H:i:s");
	$sql = "UPDATE ep_order_status SET `email` = '".$_REQUEST['email']."' ".
		   ", `name` = '".$_REQUEST['name']."' ".
		   ", `address` = '".$_REQUEST['address']."' ".
		   ", `telephone` = '".$_REQUEST['telephone']."' ".
		   "WHERE (`order` = '".$_REQUEST['order']."')";
	print("<code><font color='blue'>".$sql."</font></code>");

	$result = mysql_query($sql, $conn);
	print(mysql_error());

	mysql_close($conn);

	if ($_REQUEST["sendMail"] == "true") {
		handle_send_mail();
	}
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>ปรับปรุงสถานะการสั่งซื้อ</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
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
      <td><input type="text" name="email" value="<?= $order["email"] ?>"></td>
    </tr>
    <tr> 
      <td><div align="right"><strong>สถานะการสั่งซื้อ</strong></div></td>
      <td><?= get_status($order["status"]) ?></td>
    </tr>
    <tr> 
      <td><div align="right">วันที่บันทึกรายการ</div></td>
      <td><?= $order["create_time"] ?></td>
    </tr>
    <tr> 
      <td><div align="right">วันที่ปรับปรุงล่าสุด</div></td>
      <td> 
        <?= FncChangeTimestamp($order["modify_time"], "YYYY-MM-DD hh:mm:ss") ?>
      </td>
    </tr>
    <tr> 
      <td><div align="right"></div></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td><div align="right">ชื่อ - นามสกุล</div></td>
      <td><input type="text" name="name" value="<?= $order["name"] ?>"></td>
    </tr>
    <tr> 
      <td><div align="right">เบอร์โทรศัพท์</div></td>
      <td><input type="text" name="telephone" value="<?= $order["telephone"] ?>"></td>
    </tr>
    <tr> 
      <td valign="top"><div align="right">ที่อยู่</div></td>
      <td><textarea name="address" cols="50" rows="5"><?= nl2br($order["address"]) ?></textarea>
      </td>
    </tr>
    <tr> 
      <td valign="top"><div align="right">หมายเหตุ</div></td>
      <td><?= $order["remark"] ?></td>
    </tr>
    <tr> 
      <td valign="top"><div align="right">Private Comment</div></td>
      <td><?= $order["comment"] ?></td>
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
