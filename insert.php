<?php
//데이터 베이스 연결하기
$db_host = "127.0.0.1";
$db_user = "admin";
$db_password = "Myadmin@02;;";
$db_name = "db";
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if($conn->connect_errno){
  die('connect error : '.$conn->connect_error);
}

// $query = "insert into freeboard values ('','"$name"','"$title"','"$comment"',now(),0)";
// $result=mysqli_query($conn, $query);

$freewrite = mysqli_query($conn,"insert into freeboard values ('','".$_POST['name']."','".$_POST['title']."','".$_POST['comment']."',NULL,0)");
if($freewrite){
  echo "yes!!";
  ?>

  <script type="text/javascript">alert("글쓰기 완료되었습니다.");</script>
  <meta http-equiv="refresh" content="0 url=/" />
  <?php
} else {
    echo "no!!";
    echo mysqli_error($freewrite);
    mysqli_query_error($freewrite);
}


//데이터베이스와의 연결 종료
mysqli_close($conn);

// 새 글 쓰기인 경우 리스트로..
echo ("<meta http-equiv='Refresh' content='1; URL=list.php'>");

?>
