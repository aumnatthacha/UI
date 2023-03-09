<html>
<head>
<title>ThaiCreate.Com PHP Sending Email</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
</head>
<body>
<form action="payment1.php" method="post" ">
<table width="604" border="0">

<td width="182" bgcolor="#FFFFFF" class=catbox><font color=#FC245C><b>-----------</b></b></font></td>
</tr>





<tr>
<td>ชื่อ-นามสกุล <span class="style1">*</span></td>
<td><input name="txtFormName" type="text"></td>
</tr>
<tr>
<td>เบอร์โทรศัพท์ <span class="style1">*</span></td>
<td><input name="txtphone" type="text" id="txtphone"></td>
</tr>
<tr>
<tr>
<td>อีเมล์ <span class="style1">*</span></td>
<td><input name="txtFormEmail" type="text"></td>
</tr>
<tr>
<td>จำนวนเงิน <span class="style1">*</span></td>
<td><input name="txttotal" type="text" id="txttotal">
บาท</td>
</tr>


<tr>
<td width="34%" valign="top"><div align="center"> <strong> </strong> </div>

 
<strong>
ชำระเข้าธนาคาร </strong><font class="red style1">**</font></td>
<td width="66%"><p>
<input name="rdoBank" type="radio" value="REG" onClick="JavaScript:frmMain.hdnBank.value='กสิกรไทย [730-2-44715-7]';">

กสิกรไทย [011-2-25379-3] <br>
<input name="rdoBank" type="radio" value="REG" onClick="JavaScript:frmMain.hdnBank.value='กรุงไทย [690-0-00278-1]';">

กรุงไทย [023-1-19265-7] <br>
<input name="rdoBank" type="radio" value="REG" onClick="JavaScript:frmMain.hdnBank.value='กรุงเทพ [068-0-16334-2]';">

กรุงเทพ [152-0-00001-7] <br>
<input name="rdoBank" type="radio" value="REG" onClick="JavaScript:frmMain.hdnBank.value='ไทยพาณิชย์ [256-2-01317-7]';">

ไทยพาณิชย์ [045-2-35809-1] </p></td>
</tr>




<tr bgcolor="#F9F9F9"><td>รูป Slip [&#3617;&#3637;&#3627;&#3619;&#3639;&#3629;&#3652;&#3617;&#3656;&#3585;&#3655;&#3652;&#3604;&#3657;]</td><td><input type=file name=sem9><br><font class=small>(นามสกุลไฟล์ควรเป็น [ jpg , gif ] และขนาดไม่เกิน 100 Kb)</font></td></tr>



<?php  //เวลา
echo "Time in Bangkok\n";
$date2 = new DateTime();
$date2->setTimezone(new DateTimeZone('Asia/Bangkok'));
echo $date2->format(DateTime::RFC1123) . "\n";
?>

<tr>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Send"></td>
</tr>
</table>
<br>
<br>
<br>
</form>
</body>
</html>






