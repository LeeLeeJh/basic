<?php
include("/바탕화면/basic/db.php");

$conn = dbconn();
if (isset($_GET['user_id'])) {
  $user_id = $conn->real_escape_string($_GET['user_id']);
  $sql = "select * from user where user_id='$user_id'";
}
$result = $conn->query($sql);
if ($result) {
  $row = $result->fetch_object();
    if($row == null)
      echo false;
    else
      echo true;
}
 ?>
