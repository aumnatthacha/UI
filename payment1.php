<html>
<head>
<title>ThaiCreate.Com PHP Sending Email</title>
</head>
<body>
<?
$strphone = $_POST["txtphone"];
$strtotal = $_POST["txttotal"];
$strHeader = "Content-type: text/html; charset=windows-874\n";
$strHeader .= "From: ".$_POST["txtFormName"]."<".$_POST["txtFormEmail"].">\nReply-To: ".$_POST["txtFormEmail"]."";
if($flgSend)
{
echo "ทางเราได้รับการแจ้งยืนยันโอนเรียบร้อยแล้ว จะทำการส่งสินค้าให้ท่านภายใน 48 ชั่วโมง";
}
else
{
echo "เกิดเหตุขัดข้อง ไม่สามารถแจ้งยืนยันการโอนเงินได้ กรุณาลองใหม่อีกครั้ง";
}
?>
</body>
</html>
