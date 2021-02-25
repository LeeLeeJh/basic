
<?php

session_start();


if(isset($_SESSION['email']))
{
 $db_host = "127.0.0.1";
 $db_user = "admin";
 $db_password = "Myadmin@02;;";
 $db_name = "db";
 $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);


 $user_email = $_SESSION['email'];
 //echo "email : " .$user_email;

//  $sql = mysqli_query($conn,"select * from freeboard where id='".$bno."'");
 $sql = mysqli_query($conn, "select * from member where email='$user_email'");
 $board = $sql->fetch_array();
 // echo "name : " .$board['name'];
 $user_name = $board['name'];
 $uid = $board['uid'];

 //$globals['user_name'];


} else {    // 로그인창 띄워주기

// <!-- <li class="test"><a href="#"><p>회원가입</p></a></li>

// <a href="#none" onclick="location.href='login.html'"><p>로그인</p></a>

}

// $option = $_POST['areaOption'];
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
//echo "t" .$folder;
//move_uploaded_file($tmpfile,$folder);
if(move_uploaded_file($tmpfile,$folder)){
  echo "ㅇㅇ" .$option;
} else {
  echo "here info:";
  print_r($_files);
}

// $sql = mq("insert into board(name,pw,title,content,date,lock_post,file) values('".$_POST['name']."','".$userpw."','".$_POST['title']."','".$_POST['content']."','".$date."','".$lo_post."','".$o_name."')");

$freewrite = mysqli_query($conn,"insert into market_info(uid,name,title,start,end,content,img,wdate) values('".$uid."','".$user_name."','".$_POST['title']."','".$_POST['start_date']."','".$_POST['end_date']."','".$_POST['content']."', '".$o_name."', '".$date."')");
// $freewrite = mysqli_query($conn,"insert into free(name,pw,title,content,date) values('".$_POST['name']."','".$userpw."','".$_POST['title']."','".$_POST['content']."','".$date."')");
if($freewrite){
  ?>
  <script type="text/javascript">alert("글쓰기 완료되었습니다.");</script>
  <meta http-equiv="refresh" content="0 url=market_info_list.php" />
  <?php
} else {
    echo "no!!";
    echo "nope :" .mysqli_query_error();
    echo "nope2 :" .mysqli_error();

}
