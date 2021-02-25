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

$bno = $_POST['idx'];
// echo $bno;
// echo $user_idx;

$cart_num = $_POST['amount'];
$sql = mysqli_query($conn,"select * from feedboard where idx='".$bno."'");
$shopinfo = $sql->fetch_array();

$cart_pic = $shopinfo['rep_picture'];
$cart_title = $shopinfo['title'];
$cart_price = $shopinfo['price'];

// echo $cart_pic;
// echo $cart_title;

$incart = mysqli_query($conn,"insert into cart(pid,uid,rep_picture,title,price,num) values('$bno','$user_idx',
'$cart_pic','$cart_title','$cart_price','$cart_num')");

if($incart){
  echo "장바구니에 담겼습니다.";
} else {
  echo "장바구니 등록 실패하였습니다.";
}

} else {
  echo "<script>location.href='a_login.php'</script>";
}
 ?>
