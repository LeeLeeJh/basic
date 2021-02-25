<?php

  $db_host = "127.0.0.1";
  $db_user = "admin";
  $db_password = "Myadmin@02;;";
  $db_name = "db";
  $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
  // mysqli_set_charset($conn, "utf8");
  $conn->set_charset("utf8");

  if($conn->connect_errno){
    die('connect error : '.$conn->connect_error);
  }



?>
