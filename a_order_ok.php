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
$postcode = $_POST['postCode'];
$roadaddress = $_POST['roadAddress'];
$detailaddress = $_POST['detailAddress'];
$message = $_POST['shipMessage'];
$ordernum = $_POST['ordernum'];

$state = "결제완료";
$adminstate = "주문확인";

$idx = $_POST['data'];


// foreach ($idx as $value) {
for($i=0; $i<count($idx); $i++){
$sql = mysqli_query($conn,"select * from cart where idx='".$idx[$i]."'");
$shopinfo = $sql->fetch_array();

$cart_pid = $shopinfo['pid'];
$cart_pic = $shopinfo['rep_picture'];
$cart_title = $shopinfo['title'];
$cart_price = $shopinfo['price'];
$cart_num = $shopinfo['num'];
$total_price = ($cart_num*$cart_price);




$complete = mysqli_query($conn,"insert into orderlist(pid,uid,name,phone,postcode,roadaddress,detailaddress,message,
rep_picture,title,price,num,ordernum,date,state,adminstate) values('$cart_pid','$user_idx','$name',
'$phone','$postcode','$roadaddress','$detailaddress','$message','$cart_pic','$cart_title','$total_price',
'$cart_num','$ordernum','$date','$state','$adminstate')");

if($complete){

$delete = mysqli_query($conn, "delete from cart where idx='".$idx[$i]."'");

} else {

}

} //반복 완료

} else {
  echo "<script>location.href='a_login.php'</script>";
}
  ?>
