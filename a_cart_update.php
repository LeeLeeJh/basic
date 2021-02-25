<?php

$db_host = "127.0.0.1";
$db_user = "admin";
$db_password = "Myadmin@02;;";
$db_name = "db";
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
$conn->set_charset("utf8");

$bno = $_POST['idx'];
$num = $_POST['num'];

// echo $user_idx;


$post = mysqli_query($conn,"update cart set num='$num' where idx='".$bno."'");

if($post){
   echo "장바구니 수정 ok.";
 } else {
   echo "수정 실패했습니다.";
 }
?>
