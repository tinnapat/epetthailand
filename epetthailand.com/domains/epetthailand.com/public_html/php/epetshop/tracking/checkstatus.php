<?

//header("Location: http://www.epetthailand.com/php/epetshop/tracking/checkstatus.php");
//exit;

require("common.inc.php");
require("../../lib/db.php");
require("../../lib/mylib.php");

$g_error	= "";
$g_message	= "";
?>
<HTML>
<HEAD>
<title>ePetShop: Order Status</title>
<meta name="keywords"
content="�ʺ��,˹�,����,˹�����,˹��ʺ��,site,�ѵ������§,gasby,gasbies,pet,cavy; charset="windows-874">
<STYLE><!--
--></STYLE>
<link rel="stylesheet" href="css/cavy1.css">
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
</head>
<BODY TEXT="#000000" BGCOLOR="#FFFFFF" LINK="#CC0000" VLINK="#800000" ALINK="#FF0000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center"> 
  <center>
    <div align="left"> 
      <table width="600" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td width="600" ><img src="image/11.gif" width="285" height="79"><br> 
            <table width="100%" border="0">
              <tr> 
                <td width="39%" height="126"><img src="image/2.jpg" ></td>
                <td width="61%" valign="top"> 
				<form name="form1" method="post" action="">
                    <table width="100%" border="0">
                      <tr> 
                        <td colspan="2" class="fontpinkbold">��Ǩ�ͺʶҹС����觫���</td>
                      </tr>
                      <tr> 
                        <td width="41%" class="normal">�к� e-mail �ͧ��ҹ:</td>
                        <td width="59%"><input name="email" type="text" id="email"></td>
                      </tr>
                      <tr> 
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr> 
                        <td colspan="2"><div align="center"> 
                            <input type="submit" name="Submit" value="�ͺ���">
                            <input type="hidden" name="submit_email" value="true">
                          </div></td>
                      </tr>
                    </table>
                  </form>
                  <span class="normal"> </span></td>
              </tr>
            </table></td>
        </tr>
        <tr> 
          <td width="800"> <table width="90%" border="0" align="center">
              <tr>
                <td>
                  <?
if (isset($_REQUEST["submit_email"])) {
	$_REQUEST["email"] = trim($_REQUEST["email"]);

	$conn = get_connection();
	$sql = "SELECT * FROM ep_order_status ".
		   "WHERE (`email` = '".$_REQUEST['email']."')".
		   "ORDER BY `order` DESC";
	$result = mysql_query($sql, $conn);
?>
                  <hr> <p class="normal">ʶҹС����觫��ͧ͢�س <font color="blue"> <b>
                    <?= $_REQUEST["email"] ?>
                    </b></font></p>
                  <table width="100%" border="1">
                    <tr> 
                      <td><div align="center" class="normal"><strong>Order:</strong></div></td>
                      <td><div align="center" class="normal"><strong>ʶҹ�</strong></div></td>
                      <td><div align="center" class="normal"><strong>��Ѻ��ا����ش</strong></div></td>
                      <td><div align="center" class="normal"><strong>�����˵�</strong></div></td>
                      <td><div align="center" class="normal"><strong>��¡��</strong></div></td>
                    </tr>
                    <?
if (mysql_num_rows($result) == 0) {
	?>
                    <tr> 
                      <td colspan="4" align="center" class="normal"><font color="red">��辺��¡����觫��ͤ��</font></td>
                    </tr>
                    <?
}
else {
while ($row = mysql_fetch_array($result)) {
?>
                    <tr valign="top"> 
                      <td> <span class="normal"> 
                        <?= $row["order"] ?>
                        </span></td>
                      <td> <span class="normal"> 
                        <?= get_status($row["status"]) ?>
                        </span></td>
                      <td> <span class="normal"> 
                        <?= $row["modify_time"] ?>
                        </span></td>
                      <td> <span class="normal"> 
                        <?= nl2br($row["remark"]) ?>
                        </span></td>
                      <td align="center"> <span class="normal"> 
                        <a href="logview.php?id=<?= $row["order"] ?>" target="_blank"><img src="image/b_browse.png" border="0"></a>
                        </span></td>
                    </tr>
                    <?
}
}
?>
                  </table>
                  <span class="normal"> 

                  </span></td>
              </tr>
            </table>
            <br>
            <table width="90%" border="1" align="center" cellpadding="2" cellspacing="0">
              <tr bgcolor="#F5F5F5"> 
                <th width="34%"  class="normal"><div align="center">ʶҹС����觫���</div></td>
                <th width="66%"   class="normal"><div align="center">��������</div></td>
              </tr>
              <tr bgcolor="#F5F5F5"> 
                <td   class="normal">���ѧ��Ǩ�ͺ�Թ��Ҥ������</td>
                <td   class="normal" > �ҧ��ҹ���ѧ��Ǩ����Թ��ҷ���ҹ����� 
                  �դú�������</td>
              </tr>
              <tr bgcolor="#F5F5F5"> 
                <td  class="normal" >�͡���׹�ѹ��ê����Թ</td>
                <td  class="normal" >���Թ��Ҥú �ҧ��ҹ�ͷ�ҹ�����Թ ����駡�Ѻ����ҷ�ҹ�������º�������� 
                  (<font color="#FF0000"><strong>�ҡ��ҹ������駡�Ѻ�� �ҧ��ҹ������Һ��ҷ�ҹ�����Թ����</strong></font>) <p>
                  <strong>��ҹ����ö������</strong><br>
                  1. <a href="http://www.epetthailand.com/php_com/epetshop/paid.html" target="_blank">���׹�ѹ��ҹ˹����� 
                  ����� </a><br>
                  2. ������駷�� <a href="mailto:sale@epetthailand.com">sale@epetthailand.com</a> (�к� �Ţ�����觫��� �����������´��ê����Թ)<br>
                  �� �Ţ���: 1137505666 �����Թ���ѧ�ѭ�� ��ԡ� ���Թ 186.00 
                  �ҷ <br>
                  3. ������ SMS �駷�� (081) 658-6093 ���� (086) 393-3210 (�к� �Ţ�����觫��� �����������´��ê����Թ)<br>
                  �� �Ţ���: 1137505666 �����Թ���ѧ�ѭ�� ��ԡ� ���Թ 186.00 
                  �ҷ <br>
                  <br>
                  (�����˵�: �ҡ��ѧ�ҡ��ҹ�駪����Թ���º�������� ��ʶҹС����觫��ͧ͢��ҹ�������¹�� &quot;���ѧ������Թ���&quot; ���� 1 �ѹ ���ͷ�ҹ������Ѻ������׹�ѹ�ҡ�ҧ��ҹ ��ҹ����ö�Դ������� (081) 658-6093 ���� (086) 393-3210)</td>
              </tr>
              <tr bgcolor="#F5F5F5"> 
                <td  class="normal" >���ѧ������Թ���</td>
                <td class="normal" >�ҧ��ҹ���Ѻ������׹�ѹ��ê����Թ�ҡ��ҹ���� 
                  ���ѧ��Ǩ�ͺ�š�ê����Թ </td>
              </tr>
              <tr bgcolor="#F5F5F5"> 
                <td  class="normal" >���ѧ������Թ���<br>
                  (��ҹ�����Թ���º��������)</td>
                <td class="normal" >�ҧ��ҹ���Ѻ�Թ�ҡ��ҹ���º�������� ���ѧ������Թ�������ҹ</td>
              </tr>
              <tr bgcolor="#F5F5F5"> 
                <td class="normal" >��è��պ������º���� �͡�èѴ��</td>
                <td class="normal" >�Թ��Ңͧ��ҹ���Ѻ��ú�è��պ������º�������� 
                  �͡������ɳ��� </td>
              </tr>
              <tr bgcolor="#F5F5F5"> 
                <td class="normal" >�Ѵ�����º��������</td>
                <td class="normal" >�ҧ��ҹ��Ѵ����ɳ�������ҹ���º��������</td>
              </tr>
            </table>
            <div align="center"></div>
            <hr width="90%" align="center">
            <table width="75%" border="0" align="center" class="normalbold">
              <tr> 
                <td><div align="center">�óշ���ҹ�բ���ͺ����� ����ö�ͺ������ѧ 
                    epetthailand.com</div></td>
              </tr>
            </table>
            <form method="post" action="http://www.thaipetlover.com/php/common/mailform/mailform.php">
              <table width="480" border="0" cellspacing="0" cellpadding="0" align="center">
                <tr> 
                  <td class="tabgreybright" width="86" height="34" valign="bottom">&nbsp;</td>
                  <td class="tabgreybright" width="104" height="34" valign="bottom">&nbsp;</td>
                  <td class="tabgreybright" width="291" height="34" valign="bottom"> 
                    <input type="hidden" name="MailSubject" value="ePetThailand: Order Inquiry"> 
                    <input type="hidden" name="MailFrom" value="<?= $_REQUEST["email"] ?>"> 
                    <input type="hidden" value="MailFrom,MailTo,Information" name="Require"> 
                  </td>
                </tr>
                <tr> 
                  <td class="tabgreybright" width="86">&nbsp;</td>
                  <td class="tabgreybright" width="104"><font color="#330099"><b><span class="normalBoldNavy">����Ѻ</span>&nbsp;</b></font></td>
                  <td class="tabgreybright" width="291"> <font color="#003366"> 
                    <b> 
                    <input type="HIDDEN" name="MailTo" value="sale@epetthailand.com">
                    <input type="HIDDEN" name="MailBCC" value="epetthailand@gmail.com">
                    <span class="normalBoldGrey"> ePetShop</span></b></font></td>
                </tr>
                <tr> 
                  <td class="tabgreybright" width="86">&nbsp;</td>
                  <td class="tabgreybright" width="104"><font color="#330099"><b><span class="normalBoldNavy">��ͤ���</span> 
                    </b></font></td>
                  <td class="tabgreybright" width="291"> <textarea name="Information" cols="40" rows="4"></textarea> 
                  </td>
                </tr>
                <tr> 
                  <td class="tabgreybright" colspan="3" height="42"> <div align="center"> 
                      &nbsp;&nbsp; 
                      <input type="SUBMIT" value="   ��   " name="SUBMIT">
                      <br>
                    </div></td>
                </tr>
              </table>
            </form></td>
        </tr>
      </table>
                  <?
}
?>
      <table border="0" cellpadding="0" cellspacing="0" width="800">
        <tr> 
          <td class=normal colspan=3 align="middle"> <div align="center"> 
              <hr>
              Web Site Copyright ePetThailand.com, 2004. All Rights Reserved<b><span class=normalSmall>.<br>
              </span></b><a href="mailto:sale@epetthailand.com?Subject=QueryOrderStatus"><img height=32 
      src="image/mail.jpg" width=56 border="0"><img src="image/mailme.gif" border="0"> 
              <font size=2>&nbsp;</font></a></div></td>
        </tr>
      </table>
    </div>
  </center>
</div>
</BODY>
</HTML>
