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

$date = date('Y-m-d');
$name = $_POST['name'];
$phone = $_POST['phone'];
$postcode = $_POST['postcode'];
$roadaddress = $_POST['roadaddress'];
$detailaddress = $_POST['detailaddress'];
$message = $_POST['message'];
$ordernum = $_POST['ordernum'];
$state = "결제완료";
$adminstate = "주문확인";



$sql = mysqli_query($conn,"select * from cart where uid='".$user_idx."'");

while($shopinfo = $sql->fetch_array())
{
$cart_idx = $shopinfo['idx'];
$cart_pic = $shopinfo['rep_picture'];
$cart_title = $shopinfo['title'];
$cart_price = $shopinfo['price'];
$cart_num = $shopinfo['num'];
$total_price = ($cart_num*$cart_price);




$complete = mysqli_query($conn,"insert into orderlist(uid,name,phone,postcode,roadaddress,detailaddress,message,
rep_picture,title,price,num,ordernum,date,state,adminstate) values('$user_idx','$name',
'$phone','$postcode','$roadaddress','$detailaddress','$message','$cart_pic','$cart_title','$total_price',
'$cart_num','$ordernum','$date','$state','$adminstate')");

if($complete){

$delete = mysqli_query($conn, "delete from cart where uid='".$user_idx."'");

} else {
  echo $total_price;
  echo $date;
  echo $user_idx;
  echo $name;
  echo $phone;
  echo $postcode;
  echo $roadaddress;
  echo $detailaddress;
  echo $message;
  echo $ordernum;
  echo $state;
}

} //반복 완료

} else {
  echo "<script>location.href='a_login.php'</script>";
}
  ?>
