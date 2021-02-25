<?php
session_start();
$res=session_destroy();
if($res){
  header('Location: ./a_login.php');
} ?>
