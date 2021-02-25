<?php

$db_host = "127.0.0.1";
$db_user = "admin";
$db_password = "Myadmin@02;;";
$db_name = "db";
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

  $sql = mysqli_query($conn,"select * from editor_test"); /* 받아온 idx값을 선택 */
  // $board = $sql->fetch_array();

  while($row = mysqli_fetch_array($sql)){
    echo $row['content'];
    // echo ("$board[content]");
  }

//   echo ("$board[content]");
//   echo ("$board");
//
// echo $_POST['content'];
?>
