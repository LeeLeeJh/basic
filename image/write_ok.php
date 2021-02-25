
<?php


$db_host = "127.0.0.1";
$db_user = "admin";
$db_password = "Myadmin@02;;";
$db_name = "db";
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);


$date = date('Y-m-d');
// $userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
// if(isset($_POST['lockpost'])){
// 	$lo_post = '1';
// }else{
// 	$lo_post = '0';
// }

$tmpfile =  $_FILES['b_file']['tmp_name'];
$o_name = $_FILES['b_file']['name'];
$filename = iconv("UTF-8", "EUC-KR",$_FILES['b_file']['name']);
$folder = "uploads/".$filename;
echo "t" .$folder;
//move_uploaded_file($tmpfile,$folder);
if(move_uploaded_file($tmpfile,$folder)){
  echo "ㅇㅇ";
} else {
  echo "here info:";
  print_r($_files);
}

// $sql = mq("insert into board(name,pw,title,content,date,lock_post,file) values('".$_POST['name']."','".$userpw."','".$_POST['title']."','".$_POST['content']."','".$date."','".$lo_post."','".$o_name."')");

$freewrite = mysqli_query($conn,"insert into freeboard(name,title,content,wdate,view,file) values('".$_POST['name']."','".$_POST['title']."','".$_POST['content']."', '".$date."', 0, '".$o_name."')");
// $freewrite = mysqli_query($conn,"insert into free(name,pw,title,content,date) values('".$_POST['name']."','".$userpw."','".$_POST['title']."','".$_POST['content']."','".$date."')");
if($freewrite){
  ?>
  <script type="text/javascript">alert("글쓰기 완료되었습니다.");</script>
  <meta http-equiv="refresh" content="0 url=freeTable.php" />
  <?php
} else {
    echo "no!!";
    echo "nope :" .mysqli_query_error();
    echo "nope2 :" .mysqli_error();

}
