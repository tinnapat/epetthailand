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

// Trim all inputs
trim_all_params();

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>ค้นหารายการสั่งซื้อ</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
<link href="css/cavy1.css" rel="stylesheet" type="text/css">
</head>

<body class="normal">
<p>ค้นหารายการสั่งซื้อ<br>
  กรุณาระบุเงื่อนไขที่ต้องการ</p>
<form name="form1" method="post" action="">
  <table width="100%" border="0" class="normal">
    <tr> 
      <td>หมายเลขการสั่งซื้อ</td>
      <td><input name="order" type="text" id="order"></td>
    </tr>
    <tr>
      <td>ชื่อผู้สั่งซื้อ</td>
      <td><input name="name" type="text" id="name"></td>
    </tr>
    <tr>
      <td>E-Mail Address ของผู้สั่งซื้อ</td>
      <td><input name="email" type="text" id="email"></td>
    </tr>
    <tr> 
      <td>วันที่บันทึก - เดือน</td>
      <td><select name="month" id="month">
          <option value="" selected>ไม่ระบุ</option>
          <option value="01">มกราคม</option>
          <option value="02">กุมภาพันธ์</option>
          <option value="03">มีนาคม</option>
          <option value="04">เมษายน</option>
          <option value="05">พฤษภาคม</option>
          <option value="06">มิถุนายน</option>
          <option value="07">กรกฏาคม</option>
          <option value="08">สิงหาคม</option>
          <option value="09">กันยายน</option>
          <option value="10">ตุลาคม</option>
          <option value="11">พฤศจิกายน</option>
          <option value="12">ธันวาคม</option>
        </select></td>
    </tr>
    <tr> 
      <td>วันที่บันทึก - ปี</td>
      <td><select name="year" id="year">
          <option value="" selected>ไม่ระบุ</option>
          <option value="2004">2547</option>
          <option value="2005">2548</option>
          <option value="2006">2549</option>
          <option value="2007">2550</option>
          <option value="2008">2551</option>
          <option value="2009">2552</option>
          <option value="2010">2553</option>
        </select></td>
    </tr>
    <tr> 
      <td>สถานะ</td>
      <td><select name="status[]" multiple size="9">
          <!--option value="" selected>--- ไม่ระบุ ---</option>
          <option value="problem">--- รายการที่มีปัญหา ---</option-->
          <?
            $statuses = get_all_statuses();
            while (list($code, $description) = each ($statuses)) {
          ?>
          <option value="<?= $code ?>">
          <?= $description ?>
          </option>
          <? } ?>
        </select></td>
    </tr>
  </table>
  <p>
    <input type="submit" name="Submit" value="Submit">
    <input type="hidden" name="submitted" value="true">
  </p>
</form>
<p>
  <?
if (isset($_REQUEST["submitted"])) {
	$conn = get_connection();
	$sql = create_sql();
	$result = mysql_query($sql, $conn);
?>
</p>
พบรายการสั่งซื้อตามเงื่อนไขทั้งสิ้น <font color="red"><b><?= mysql_num_rows($result) ?></b></font> รายการ<br>
<table width="90%" border="1" class="normal">
  <tr> 
    <td></td>
    <td><div align="center"><strong>Order#</strong></div></td>
    <td><strong>ชื่อ</strong></td>
    <td><div align="center"><strong>Email</strong></div></td>
    <td><div align="center"><strong>หมายเลขติดต่อ</strong></div></td>
    <td><div align="center"><strong>สถานะการสั่งซื้อ</strong></div></td>
    <!--td><div align="center"><strong>Cost</strong></div></td-->
    <td><div align="center"><strong>วันที่บันทึกรายการ</strong></div></td>
    <!--td><div align="center"><strong>ปรับปรุงล่าสุด</strong></div></td-->
    <td><div align="center"><strong>วันที่จัดส่ง</strong></div></td>
    <td><div align="center"><strong>หมายเหตุ</strong></div></td>
    <td><div align="center"><strong>comment</strong></div></td>
    <td><div align="center"><strong></strong></div></td>
    <td><div align="center"><strong></strong></div></td>
  </tr>
  <?
if (mysql_num_rows($result) == 0) {
  ?>
  <tr> 
    <td colspan="8" align="center">ไม่พบรายการสั่งซื้อค่ะ</td>
  </tr>
  <?
}
else {
$i = 0;
while ($row = mysql_fetch_array($result)) {
  $i++;
?>
  <tr> 
    <td align="center"><?= $i ?></td>
    <td align="right"> <a href="update_order_status.php?search=true&order=<?= $row["order"] ?>" target="_blank"> 
      <?= $row["order"] ?>
      </a> </td>
    <td>
      <?= $row["name"] ?>
    </td>
    <td> 
      <?= $row["email"] ?>
    </td>
    <td> 
      <?= $row["telephone"] ?>
    </td>
    <td> 
      <?= get_status($row["status"]) ?>
    </td>
    <!--td>
      <?= $row["total_cost"] ?>
    </td-->
    <td>
      <?= $row["create_time"] ?>
    </td>
    <!--td> 
      <?= $row["modify_time"] ?>
      <?= FncChangeTimestamp($row["modify_time"], "YYYY-MM-DD hh:mm:ss") ?>
    </td-->
    <td> 
      <?= nl2br($row["sent_date"]) ?>
    </td>
    <td> 
      <?= nl2br($row["remark"]) ?>
    </td>
    <td> 
      <?= nl2br($row["comment"]) ?>
    </td>
    <td align="center"> 
      <a href="logview.php?id=<?= $row["order"] ?>" target="_blank"><img src="image/b_browse.png" border="0"></a>
    </td>
    <td> 
      <a href="invoiceview.php?id=<?= $row["order"] ?>" target="_blank"><img src="image/e_print_edit.gif" border="0"></a>
    </td>
  </tr>
  <?
}
}
?>
</table>
<?
}
?>
</body>
</html>

<?
function create_sql() {
	//print_r($_REQUEST);
	$sql = "SELECT * FROM ep_order_status WHERE 1 ";

	if ($_REQUEST["order"] != "") {
		$sql .= "AND (`order` = '".$_REQUEST["order"]."') ";
	}
	if ($_REQUEST["name"] != "") {
		$sql .= "AND (`name` LIKE '%".$_REQUEST["name"]."%') ";
	}
	if ($_REQUEST["email"] != "") {
		$sql .= "AND (`email` = '".$_REQUEST["email"]."') ";
	}
	if ($_REQUEST["month"] != "") {
		$sql .= "AND (`create_time` LIKE '____-".$_REQUEST["month"]."-__ __:__:__') ";
	}
	if ($_REQUEST["year"] != "") {
		$sql .= "AND (`create_time` LIKE '".$_REQUEST["year"]."-__-__ __:__:__') ";
	}
	if (count($_POST["status"]) > 0) {
		$sql .= "AND (`status` IN (".implode(",", $_POST["status"]).")) ";
	}
	$sql .= "ORDER BY `order` DESC";

	print("<div align='left'><table width='70%' cellpadding='5'><tr><td bgcolor='yellow'>");
	print("<code><font color='blue'>".$sql."</font></code>");
	print("</td></tr></table></div>");
	return $sql;
}
?>
