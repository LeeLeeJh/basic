<?php

session_start(); // 세션데이터 초기화
$id=$_POST['id'];
$pw=$_POST['pw'];
$mysqli=mysqli_connect("127.0.0.1","admin","Myadmin@02;;","db");

$check="SELECT * FROM memberlist WHERE id='$id'";
$result=$mysqli->query($check);
if($result->num_rows==1){
  $row=$result->fetch_array(MYSQLI_ASSOC);
  if($row['pw']==$pw){
    $_SESSION['id']=$id;
    if(isset($_SESSION['id'])) // 값이 있는지 없는지 판단 true와 false를 반환 (empty와 반대)
    {
      header('Location: ./a_product_feed.php');
    }
    else {
      echo "세션 저장 실패";

    }
  }
  else {
    ?> <script> alert("이메일 또는 비밀번호가 일치하지 않습니다."); history.back(); </script>
    <?php
  }
}
else {
  ?> <script> alert("이메일 또는 비밀번호가 일치하지 않습니다."); history.back(); </script>
  <?php
}

 ?>
