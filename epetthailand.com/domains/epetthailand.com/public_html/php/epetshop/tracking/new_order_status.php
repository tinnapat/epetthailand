<?
require("common.inc.php");
require("../../lib/db.php");
require("../../lib/mylib.php");

session_start(); 
if ($_SESSION['login'] != "true") {
	header("Location: login.htm"); 
}

$g_error		= "";
$g_message		= "";
$g_init_status	= "10";

if (isset($_REQUEST["submit"])) {

	// Trim all input
	trim_all_params();

	if (add_order_status()) {
		$g_message = "Record successfully added";
	}
}

function add_order_status() {
	global $g_error, $g_init_status;

	if (is_order_exist($_REQUEST["order"])) {
		$g_error = "Order #".$_REQUEST["order"]." already exist";
		return false;
	}

	$current_time = date("Y-m-d H:i:s");
	$conn = get_connection();
	$sql = "INSERT INTO ep_order_status".
		   "	(`order`, `email`, `status`, `name`, `telephone`, `address`, `remark`,`create_time`, `modify_time`) ".
		   "VALUES('".$_REQUEST['order']."', '".$_REQUEST['email']."', '".$g_init_status."',".
		   "	'".$_REQUEST['name']."', '".$_REQUEST['telephone']."', '".$_REQUEST['address']."',".
		   "	'".$_REQUEST['remark']."', '".$current_time."', '".$current_time."')";
	print("\n<code><font color='blue'>".$sql."</font></code>");

	$result = mysql_query($sql, $conn);
	print(mysql_error());
	return $result;
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<title>�ѹ�֡��¡����觫�������</title>
		<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
	</head>
	<body>
	  <p>�ѹ�֡��¡����觫�������</p>
	  <p>��س��к� �����Ţ�����觫���<br>
		��� E-mail Address �ͧ�����觫���</p>
	  <p>ʶҹТͧ��¡����觫��͹�� ����<br>
		<strong>���ѧ��Ǩ�ͺ�Թ��Ҥ������</strong></p>
	  
<p>��ҵ�ͧ�������¹�ŧʶҹС����觫��� <a href="update_order_status.php">��ԡ�����</a><br>
  ��ҵ�ͧ��õ�Ǩ�ͺʶҹС����觫��� <a href="view_order_status.php">��ԡ�����</a></p>
		<form name="form1" method="post" action="">
		  <p>
			<font color="blue"><strong><?= $g_message ?></strong></font>
			<font color="red"><strong><?= $g_error ?></strong></font>
		  </p>
		  
  <table width="75%" border="0">
    <tr> 
      <td><div align="right"><strong>�����Ţ�����觫���</strong></div></td>
      <td><input name="order" type="text" id="order" size="10" maxlength="10"></td>
    </tr>
    <tr> 
      <td><div align="right"><strong>E-Mail Address</strong></div></td>
      <td><input name="email" type="text" id="email" size="40"></td>
    </tr>
    <tr> 
      <td><div align="right"></div></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td><div align="right">���� - ���ʡ��</div></td>
      <td><input name="name" type="text" id="name" size="40"></td>
    </tr>
    <tr> 
      <td><div align="right">�����Ţ���Ѿ��</div></td>
      <td><input name="telephone" type="text" id="telephone" size="40"></td>
    </tr>
    <tr> 
      <td><div align="right">�������</div></td>
      <td><textarea name="address" cols="50" rows="5" id="address"></textarea></td>
    </tr>
    <tr> 
      <td><div align="right">�����˵�</div></td>
      <td><textarea name="remark" cols="50" rows="5" id="remark"></textarea></td>
    </tr>
  </table>
		  <p>
			<input name="submit" type="submit" id="submit" value="Submit">
		  </p>
		</form>
	</body>
</html>