<?php

$db_host = "127.0.0.1";
$db_user = "admin";
$db_password = "Myadmin@02;;";
$db_name = "db";
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
$conn->set_charset("utf8");

$idx = $_POST['idx'];
$state = $_POST['category'];
$a = "배송중";
$b = "결제취소";
$c = "환불완료";
$d = "교환중";

if($state == "발송완료"){
  $update = mysqli_query($conn,"update orderlist set state='".$a."',adminstate='$state' where idx='".$idx."'");
} else if ($state == "취소승인") {
  $update = mysqli_query($conn,"update orderlist set state='".$b."',adminstate='$state' where idx='".$idx."'");
} else if ($state == "환불승인") {
  $update = mysqli_query($conn,"update orderlist set state='".$c."',adminstate='$state' where idx='".$idx."'");
} else if ($state == "교환제품발송") {
  $update = mysqli_query($conn,"update orderlist set state='".$d."',adminstate='$state' where idx='".$idx."'");
}
