<?php

$db_host = "127.0.0.1";
$db_user = "admin";
$db_password = "Myadmin@02;;";
$db_name = "db";
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);


if (isset($_POST['email'])) {
  $email = $conn->real_escape_string($_POST['email']);
  $sql = "select * from member where email='$email'";
}

$result = mysqli_query($conn,$sql);
if ($result) {
  $row = $result->fetch_object();
    if($row == null)
      echo false;
    else
      echo true;
}
 ?>
