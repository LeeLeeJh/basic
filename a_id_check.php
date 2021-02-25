
<?php
$db_host = "127.0.0.1";
$db_user = "admin";
$db_password = "Myadmin@02;;";
$db_name = "db";
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
mysqli_set_charset($conn, "utf8");

	if($_POST['id'] != NULL){

	$id_check = mysqli_query($conn,"select * from memberlist where id='{$_POST['id']}'");
	$id_check = $id_check->fetch_array();

	if($id_check >= 1){
		echo "이미 가입된 아이디입니다.";
	} else {
		// echo "사용가능한 아이디입니다.";
	}
} ?>
