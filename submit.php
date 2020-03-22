<?php

$name=$_POST["username"];
$gender=$_POST["gender"];
$birth=$_POST["date"];
$userid=$_POST["userid"];
$phone=$_POST["userphone"];
$family=$_POST["family"];
$familyrelation=$_POST["familyname"];
$familyphone=$_POST["familyphone"];
$city=$_POST["city"];
$interest=$_POST["interest"];
echo "您的姓名:".$name."<br/>";
echo "您的性別:".$gender."<br/>";
echo "您的生日:".$birth."<br/>";
echo "您的身分證字號:".$userid."<br/>";
echo "您的手機號碼:".$phone."<br/>";
echo "緊急聯絡人姓名 :".$family."<br/>";
echo "緊急聯絡人關係:".$familyrelation."<br/>";
echo "緊急聯絡人電話:".$familyphone."<br/>";
$citynum=count($city);
echo $citynum."<br/>";

for($i=0;$i<$citynum;$i++)
{
  echo "您的居住地:" .$city[$i]."<br/>";
}

$address=$_POST["address"];
echo "通訊地址:".$address."<br/>";
$mail=$_POST["mail"];
echo "電子信箱:".$mail."<br/>";
$school=$_POST["school"];
echo "就讀學校:".$school."<br/>";
$class=$_POST["class"];
echo "班級:".$class."<br/>";
$cloth=$_POST["cloth"];
echo "衣服尺寸:".$cloth."<br/>";
$food=$_POST["food"];
echo "葷食/素食:".$food."<br/>";
$specialfood=$_POST["specialfood"];
echo "特殊飲食習慣:".$specialfood."<br/>";
$specialdi=$_POST["specialdi"];
echo "特殊疾病:".$specialdi."<br/>";
$trans=$_POST["trans"];
echo "如何前來營隊:".$trans."<br/>";
$home=$_POST["home"];
echo "營隊結束後回家方式:".$home."<br/>";

$interestno=count($interest);
for($j=0;$j<$interestno;$j++)
{
    echo "您最初是如何得知本營隊之訊息 :" .$interest[$j]."<br/>";
}

$will=$_POST["will"];
echo "是否全程參與營隊:".$will."<br/>";

$commenttext=$_POST["commenttext"];
echo "自我介紹及營隊期許（字數不限）:"."<br/>";
echo nl2br($commenttext);

$comment=$_POST["comment"];
echo "<br/>"."備註:"."<br/>";
echo nl2br($comment);

?>