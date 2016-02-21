<? 

/* Check User Script */ 
session_start();  // Start Session 

// Conver to simple variables 
$username = $_POST['login']; 
$password = $_POST['password']; 

if ($username == "epet" && $password == "4success") {
	// Register session variables! 
	session_register('login'); 
	$_SESSION['login'] = "true";
	echo "You are now logged in!";
?>

<html>
<head>
	<script language="JavaScript" src="/common/tell/w4ftell.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874"></head>
<body>
<font size="2">
<!--
<p><strong><font size="2">Disk Space Usage</font></strong></p>
<table cellpadding="5">
	<tr>
		<th>Disk Free Space:</th>
		<td><?//= number_format(disk_free_space("/")) ?> Bytes</td>
	</tr>
	<tr>
		<th>access_log size:</th>
		<td><?//= number_format(filesize(getenv("SITE_ROOT")."/var/log/httpd/access_log")) ?> Bytes</td>
	</tr>
	<tr>
		<th>error_log size:</th>
		<td><?//= number_format(filesize(getenv("SITE_ROOT")."/var/log/httpd/error_log")) ?> Bytes</td>
	</tr>
</table>
<ul>
  <li><font size="2"><a href="delete_log_files.php">Clear Log Files</a></font></li>
</ul>
<hr>
-->
<p><strong><font size="2">Order Status</font></strong></p>
<ul>
  <li><font size="2"><a href="query_order_status.php" target="_blank">เรียกดูรายการสั่งซื้อ</a></font></li>
  <li><font size="2"><a href="update_order_status.php" target="_blank">ปรับปรุงสถานะ</a></font></li>
  <li><font size="2"><a href="http://www.thaipetlover.com/php/common/mailform/sendmail.php" target="_blank">ส่งเมลล์</a></font></li>
</ul>
<p><strong><font size="2">Order Maintain</font></strong></p>
<ul>
  <li><font size="2"><a href="new_order_status.php" target="_blank">บันทึกรายการสั่งซื้อใหม่ 
    </a></font></li>
  <li><font size="2"><a href="update_order_detail.php" target="_blank">แก้ไขข้อมูลรายการสั่งซื้อ</a></font></li>
  <li><font size="2"><a href="http://www.epetthailand.com/php/epetshop/maintain/stock.php" target="_blank">Maintain 
    Stock</a></font></li>
</ul>
<p><strong><font size="2">Admin Web</font></strong></p>
<ul>
  <li><font size="2"><a href="/phpMyAdmin" target="_blank">DB Admin</a></font></li>
  <li><font size="2"><a href="/squirrelmail" target="_blank">Web Mail</a></font></li>
</ul>
<p><strong><font size="2">e-Banking:</font></strong></p>
<ul>
  <li><font size="2"><a href="https://ibanking.bangkokbank.com" target="_blank">Bangkok Bank</a></font></li>
  <li><font size="2"><a href="http://www.scbeasy.com" target="_blank">SCB</a></font></li>
  <li><font size="2"><a href="http://www.kasikornbank.com" target="_blank">Kasikorn Bank</a></font></li>
</ul>
<p><strong><font size="2">Post Service</font></strong></p>
<ul>
  <li><font size="2"><a href="http://www.thailandpost.co.th/search_address.asp" target="_blank">หาเบอร์โทรไปรษณีย</a>์</font></li>
  <li><font size="2"><a href="http://www.geocities.com/my_track/postcode.html" target="_blank">หารหัสไปรณีย์</a></font></li>
  <li><font size="2"><a href="http://www.thailandpost.co.th/search_ems_result.asp" target="_blank">ค่าส่ง</a></font></li>
  <li><font size="2"><a href="http://phonebook.tot.co.th/" target="_blank">เบอร์โทร</a><br>
    </font> </li>
</ul>
<p>
<a href="javascript:newWindow('/common/tell/sendpage.php?'+document.location.href,'tell',400,300,'')">Tell-a-friend about this page</a>
</font>
</body>
</html>

<?
}
else {
    echo "You could not be logged in!"; 
} 
?> 