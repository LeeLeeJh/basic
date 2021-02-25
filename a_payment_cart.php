<?php
session_start();
include("db.php");

if(isset($_SESSION['id']))
{

  $user_id = $_SESSION['id'];
  //echo "email : " .$user_email;

//  $sql = mysqli_query($conn,"select * from freeboard where id='".$bno."'");
  $sql = mysqli_query($conn, "select * from memberlist where id='$user_id'");
  $board = $sql->fetch_array();
  $user_idx = $board['idx'];

$list = array($_POST['idx']);


foreach ($list as $value) {
  echo $value;

// $bno = $_POST['idx'];

$sql = mysqli_query($conn,"select * from cart where idx='".$value."'");
$shopinfo = $sql->fetch_array();
$cart_num = $shopinfo['num'];
$cart_pic = $shopinfo['rep_picture'];
$cart_title = $shopinfo['title'];
$cart_price = $shopinfo['price'];

// echo $cart_pic;
// echo $cart_title;

$incart = mysqli_query($conn,"insert into paymentcart(idx,uid,rep_picture,title,price,num) values('$value','$user_idx',
'$cart_pic','$cart_title','$cart_price','$cart_num')");

if($incart){
  echo "장바구니에 담겼습니다.";
} else {
  echo "장바구니 등록 실패하였습니다.";
}
}
} else {
  echo "<script>location.href='a_login.php'</script>";
}
  ?>
