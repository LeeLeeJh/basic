<?php

// $db_host = "127.0.0.1";
// $db_user = "admin";
// $db_password = "Myadmin@02;;";
// $db_name = "db";
// $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
// if(mysqli_connect_errno($conn)){
//   echo "failed : " . mysqli_connect_error();
// } else {
//   echo "success~!!!";
// }

$db_host = "127.0.0.1";
$db_user = "admin";
$db_password = "Myadmin@02;;";
$db_name = "db";

$conn=mysqli_connect($db_host, $db_user, $db_password, $db_name);
if(mysqli_connect_errno($conn)){
  echo "shit : " . mysqli_connect_error();
} else {
  echo "hoho"
}
?>
