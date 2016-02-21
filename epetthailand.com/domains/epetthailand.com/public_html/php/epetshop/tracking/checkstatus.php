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
content="แกสบี้,หนู,เควี่,หนูเควี่,หนูแกสบี้,site,สัตว์เลี้ยง,gasby,gasbies,pet,cavy; charset="windows-874">
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
                        <td colspan="2" class="fontpinkbold">ตรวจสอบสถานะการสั่งซื้อ</td>
                      </tr>
                      <tr> 
                        <td width="41%" class="normal">ระบุ e-mail ของท่าน:</td>
                        <td width="59%"><input name="email" type="text" id="email"></td>
                      </tr>
                      <tr> 
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr> 
                        <td colspan="2"><div align="center"> 
                            <input type="submit" name="Submit" value="สอบถาม">
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
                  <hr> <p class="normal">สถานะการสั่งซื้อของคุณ <font color="blue"> <b>
                    <?= $_REQUEST["email"] ?>
                    </b></font></p>
                  <table width="100%" border="1">
                    <tr> 
                      <td><div align="center" class="normal"><strong>Order:</strong></div></td>
                      <td><div align="center" class="normal"><strong>สถานะ</strong></div></td>
                      <td><div align="center" class="normal"><strong>ปรับปรุงล่าสุด</strong></div></td>
                      <td><div align="center" class="normal"><strong>หมายเหตุ</strong></div></td>
                      <td><div align="center" class="normal"><strong>รายการ</strong></div></td>
                    </tr>
                    <?
if (mysql_num_rows($result) == 0) {
	?>
                    <tr> 
                      <td colspan="4" align="center" class="normal"><font color="red">ไม่พบรายการสั่งซื้อค่ะ</font></td>
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
                <th width="34%"  class="normal"><div align="center">สถานะการสั่งซื้อ</div></td>
                <th width="66%"   class="normal"><div align="center">ความหมาย</div></td>
              </tr>
              <tr bgcolor="#F5F5F5"> 
                <td   class="normal">กำลังตรวจสอบสินค้าคงเหลือ</td>
                <td   class="normal" > ทางร้านกำลังตรวจว่าสินค้าที่ท่านสั่งมา 
                  มีครบหรือไม่</td>
              </tr>
              <tr bgcolor="#F5F5F5"> 
                <td  class="normal" >รอการยืนยันการชำระเงิน</td>
                <td  class="normal" >มีสินค้าครบ ทางร้านรอท่านชำระเงิน และแจ้งกลับมาว่าท่านชำระเรียบร้อยแล้ว 
                  (<font color="#FF0000"><strong>หากท่านไม่ได้แจ้งกลับมา ทางร้านจะไม่ทราบว่าท่านชำระเงินแล้ว</strong></font>) <p>
                  <strong>ท่านสามารถแจ้งได้โดย</strong><br>
                  1. <a href="http://www.epetthailand.com/php_com/epetshop/paid.html" target="_blank">แจ้งยืนยันผ่านหน้าเว็บ 
                  ที่นี่ </a><br>
                  2. เมลล์แจ้งที่ <a href="mailto:sale@epetthailand.com">sale@epetthailand.com</a> (ระบุ เลขที่สั่งซื้อ และรายละเอียดการชำระเงิน)<br>
                  เช่น เลขที่: 1137505666 ชำระเงินมายังบัญชี กสิกร เป็นเงิน 186.00 
                  บาท <br>
                  3. โทรหรือ SMS แจ้งที่ (081) 658-6093 หรือ (086) 393-3210 (ระบุ เลขที่สั่งซื้อ และรายละเอียดการชำระเงิน)<br>
                  เช่น เลขที่: 1137505666 ชำระเงินมายังบัญชี กสิกร เป็นเงิน 186.00 
                  บาท <br>
                  <br>
                  (หมายเหตุ: หากหลังจากท่านแจ้งชำระเงินเรียบร้อยแล้ว แต่สถานะการสั่งซื้อของท่านไม่เปลี่ยนเป็น &quot;กำลังเตรียมสินค้า&quot; ภายใน 1 วัน หรือท่านไม่ได้รับเมลล์ยืนยันจากทางร้าน ท่านสามารถติดต่อได้ที่ (081) 658-6093 หรือ (086) 393-3210)</td>
              </tr>
              <tr bgcolor="#F5F5F5"> 
                <td  class="normal" >กำลังเตรียมสินค้า</td>
                <td class="normal" >ทางร้านได้รับการแจ้งยืนยันการชำระเงินจากท่านแล้ว 
                  กำลังตรวจสอบผลการชำระเงิน </td>
              </tr>
              <tr bgcolor="#F5F5F5"> 
                <td  class="normal" >กำลังเตรียมสินค้า<br>
                  (ท่านชำระเงินเรียบร้อยแล้ว)</td>
                <td class="normal" >ทางร้านได้รับเงินจากท่านเรียบร้อยแล้ว กำลังเตรียมสินค้าให้ท่าน</td>
              </tr>
              <tr bgcolor="#F5F5F5"> 
                <td class="normal" >บรรจุหีบห่อเรียบร้อย รอการจัดส่ง</td>
                <td class="normal" >สินค้าของท่านได้รับการบรรจุหีบห่อเรียบร้อยแล้ว 
                  รอการส่งไปรษณีย์ </td>
              </tr>
              <tr bgcolor="#F5F5F5"> 
                <td class="normal" >จัดส่งเรียบร้อยแล้ว</td>
                <td class="normal" >ทางร้านได้จัดส่งไปรษณีย์ให้ท่านเรียบร้อยแล้ว</td>
              </tr>
            </table>
            <div align="center"></div>
            <hr width="90%" align="center">
            <table width="75%" border="0" align="center" class="normalbold">
              <tr> 
                <td><div align="center">กรณีที่ท่านมีข้อสอบถามใดๆ สามารถสอบถามมายัง 
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
                  <td class="tabgreybright" width="104"><font color="#330099"><b><span class="normalBoldNavy">ผู้รับ</span>&nbsp;</b></font></td>
                  <td class="tabgreybright" width="291"> <font color="#003366"> 
                    <b> 
                    <input type="HIDDEN" name="MailTo" value="sale@epetthailand.com">
                    <input type="HIDDEN" name="MailBCC" value="epetthailand@gmail.com">
                    <span class="normalBoldGrey"> ePetShop</span></b></font></td>
                </tr>
                <tr> 
                  <td class="tabgreybright" width="86">&nbsp;</td>
                  <td class="tabgreybright" width="104"><font color="#330099"><b><span class="normalBoldNavy">ข้อความ</span> 
                    </b></font></td>
                  <td class="tabgreybright" width="291"> <textarea name="Information" cols="40" rows="4"></textarea> 
                  </td>
                </tr>
                <tr> 
                  <td class="tabgreybright" colspan="3" height="42"> <div align="center"> 
                      &nbsp;&nbsp; 
                      <input type="SUBMIT" value="   ส่ง   " name="SUBMIT">
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
