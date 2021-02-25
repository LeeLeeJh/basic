<?php

$db_host = "127.0.0.1";
$db_user = "admin";
$db_password = "Myadmin@02;;";
$db_name = "db";
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if($_POST['userid'] != NULL {
  $id_check = mysqli_query($conn,"select * from member where uid='{$_POST['userid']}'");
  $id_check = $id_check->fetch_array();

if($id_check >= 1){
   echo "존재하는 아이디입니다.";
} else {
   echo "존재하지 않는 아이디입니다.";
}

}

?>
