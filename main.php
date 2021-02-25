<?php

session_start();
if(!isset($_SESSION['email']))
{
  header ('Location: ./login.html');
}


echo "<h2>{$_SESSION['name']}님 환영합니다.</h2>";
echo "<a href=logout.php>로그아웃</a>"
 ?>
