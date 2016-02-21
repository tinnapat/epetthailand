<!-- SiteSearch Google -->
<FORM method=GET action="http://www.google.com/search">
<TABLE bgcolor="#FFFFFF"><tr><td>
<A HREF="http://www.google.com/">
<IMG SRC="http://www.google.com/logos/Logo_40wht.gif" 
border="0" ALT="Google"></A>
</td>
<td>
<INPUT TYPE=text name=q size=31 maxlength=255 value="">
<INPUT type=submit name=btnG VALUE="Google Search">
<font size=-1>
<input type=hidden name=domains value="http://thaipetlover.com"><br><input type=radio name=sitesearch value=""> WWW <input type=radio name=sitesearch value="http://thaipetlover.com" checked> http://thaipetlover.com <br>
</font>
<input name=hl type=hidden value=th>
</td></tr></TABLE>
</FORM>
<!-- SiteSearch Google -->
<hr>

<?
require("common.inc.php");
require("../../lib/db.php");
require("../../lib/mylib.php");

$g_error	= "";
$g_message	= "";
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>ตรวจสอบสถานะการสั่งซื้อ</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
</head>

<body>
<p>ตรวจสอบสถานะการสั่งซื้อ<br>
  กรุณากรอก E-Mail Address ของคุณ</p>
<form name="form1" method="post" action="">
  <table width="75%" border="0">
    <tr>
      <td><div align="right">E-Mail Address</div></td>
      <td><input name="email" type="text" id="email"></td>
    </tr>
  </table>
  <p>
    <input type="submit" name="Submit" value="Submit">
    <input type="hidden" name="submitted" value="true">
  </p>
</form>

<?
if (isset($_REQUEST["submitted"])) {
	$_REQUEST["email"] = trim($_REQUEST["email"]);

	$conn = get_connection();
	$sql = "SELECT * FROM ep_order_status WHERE (`email` = '".$_REQUEST['email']."')";
	$result = mysql_query($sql, $conn);
?>
<hr>
<p>สถานะการสั่งซื้อของคุณ <font color="blue"><?= $_REQUEST["email"] ?></font></p>
<table width="75%" border="1">
  <tr> 
    <td><div align="center"><strong>หมายเลขการสั่งซื้อ</strong></div></td>
    <td><div align="center"><strong>สถานะการสั่งซื้อ</strong></div></td>
    <td><div align="center"><strong>ปรับปรุงล่าสุด</strong></div></td>
    <td><div align="center"><strong>หมายเหตุ</strong></div></td>
  </tr>
  <?
if (mysql_num_rows($result) == 0) {
	?>
  <tr> 
    <td colspan="4" align="center">ไม่พบรายการสั่งซื้อค่ะ</td>
  </tr>
  <?
}
else {
while ($row = mysql_fetch_array($result)) {
?>
  <tr> 
    <td align="right"><?= $row["order"] ?></td>
    <td><?= get_status($row["status"]) ?></td>
    <td><?= FncChangeTimestamp($row["modify_time"], "DD-MM-YYYY hh:mm:ss") ?></td>
    <td><?= nl2br($row["remark"]) ?></td>
  </tr>
  <?
}
}
?>
</table>

<?
}
?>

<p>&nbsp;</p>
</body>
</html>