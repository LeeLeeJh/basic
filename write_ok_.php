
<?php


  $db_host = "127.0.0.1";
  $db_user = "admin";
  $db_password = "Myadmin@02;;";
  $db_name = "db";
  $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

  if($conn->connect_errno){
    die('connect error : '.$conn->connect_error);
  }


// $email=$_POST["email"];
// $name=$_POST["name"];
// $pw=$_POST["pw"];
// $pwc=$_POST["pwc"];

$date = date('Y-m-d');
//$userpw = "1111";
// $userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
$freewrite = mysqli_query($conn,"insert into freeboard(name,title,content,wdate,view) values('".$_POST['name']."','".$_POST['title']."','".$_POST['content']."', '".$date."', 0)");
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
?>
