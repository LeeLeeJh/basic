<?php

$db_host = "127.0.0.1";
$db_user = "admin";
$db_password = "Myadmin@02;;";
$db_name = "db";
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
$conn->set_charset("utf8");

$bno = $_GET['idx'];

$post = mysqli_query($conn, "delete from feedboard where idx='$bno'");

if($post){
   ?>
   <script type="text/javascript">alert("삭제되었습니다."); location.href = 'javascript:history.go(-2);';</script>
   <!-- <meta http-equiv="refresh" content="0 url=a_product_inner.php?idx=<?php echo $bno;?>"/> -->
   <?php
 } else {
   echo "삭제 실패했습니다.";
 }
?>
