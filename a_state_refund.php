<?php

$db_host = "127.0.0.1";
$db_user = "admin";
$db_password = "Myadmin@02;;";
$db_name = "db";
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
$conn->set_charset("utf8");

$idx = $_POST['idx'];
$a = "환불요청";


$update = mysqli_query($conn,"update orderlist set state='".$a."' where idx='".$idx."'");
?>
