<?php

$db_host = "127.0.0.1";
$db_user = "admin";
$db_password = "Myadmin@02;;";
$db_name = "db";
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
$conn->set_charset("utf8");

$bno = $_POST['idx'];

// if($_FILES['file']['name']){
//   if(!$_FILES['file']['error']){
//     $name = md5(rand(100,200));
//     $ext = explode('.',$_FILES['file']['name']);
//     $rep_name = $name. '.' .$ext[1];
//     $destination = "uploads/" .$rep_name;
//     $location = $_FILES["file"]["tmp_name"];
//     move_uploaded_file($location, $destination);
//   } else {
//     echo $message = 'error : '.$FILES['file']['error'];
//   }
// }
$tmpfile =  $_FILES['file']['tmp_name'];
$rep_name = $_FILES['file']['name'];
$filename = iconv("UTF-8", "EUC-KR",$_FILES['file']['name']);
$folder = "uploads/".$filename;

if(move_uploaded_file($tmpfile,$folder)){
  // echo '/uploads/' . $rep_name;
} else {
echo $message = 'error : '.$_FILES['file']['error'];
}


$post = mysqli_query($conn,"update feedboard set category='".$_POST['category']."',title='".$_POST['title']."',sub_title='".$_POST['sub_title']."',price='".$_POST['price']."',jeago='".$_POST['jeago']."',content='".$_POST['content']."',rep_picture='$rep_name' where idx='".$bno."'");

// $sql = mysqli_query($conn, "select * from feedboard where idx ='".$bno."'");
// $board = $sql->fetch_array();
//
// $idx=$board["idx"];
// $title=$board["title"];
// $sub_title=$board["sub_title"];
// $price=$board["price"];
// $jeago=$board["jeago"];
// $content=$board["content"];
// $rep_picture=$board["rep_picture"];
//
// $post = mysqli_query($conn,"insert into feedboard(title,sub_title,price,jeago,content,rep_picture) values('".$_POST['title']."','".$_POST['sub_title']."','".$_POST['price']."','".$_POST['jeago']."','".$_POST['content']."','$rep_name')");

if($post){
   ?>
   <script type="text/javascript">alert("수정되었습니다."); location.href = 'javascript:history.go(-2);';</script>
   <!-- <meta http-equiv="refresh" content="0 url=a_product_inner.php?idx=<?php echo $bno;?>"/> -->
   <?php
 } else {
   echo "수정 실패했습니다.";
 }
?>
