<?php

$db_host = "127.0.0.1";
$db_user = "admin";
$db_password = "Myadmin@02;;";
$db_name = "db";
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
mysqli_set_charset($conn, "utf8");


$id=$_POST["id"];
$email=$_POST["email"];
$name=$_POST["name"];
$pw=$_POST["pw"];
$pwc=$_POST["pwc"];
$phone=$_POST["phone"];
$postcode=$_POST["postCode"];
$roadaddress=$_POST["roadAddress"];
$detailaddress=$_POST["detailAddress"];


// echo $id;
// echo $email;
// echo $name;
// echo $pw;
// echo $postCode;
// echo $roadAddress;
// echo $detailAddress;
// echo $phone;

if($pw!=$pwc)
{
  ?> <script> alert("비밀번호와 비밀번호 확인이 서로 다릅니다."); location.replace("./register.php")</script>
  <?php
  echo "<a href=register.php> back page </a>";
  exit();
}
if($email==NULL || $pw==NULL || $name==NULL)
{
  ?> <script> alert("빈 칸을 모두 채워주세요."); location.replace("./register.php")</script>
  <?php
  echo "<a href=register.php> back page </a>";
  exit();
}


// if(mysqli_connect_errno($conn)){
//   echo "failed : " . mysqli_connect_error();
// } else {
//   echo "connect success";
// }


   // $check="SELECT * FROM member WHERE id='$id'";
   //
   // $result=$conn->query($check);
   //
   // if($result->num_rows==1){
      ?>
     <!-- <script> alert("중복된 아이디입니다."); location.replace("./register.php")</script> -->
      <?php
   //   echo "<a href=register.php>back page</a>";
   //   exit();
   // }



$signup = mysqli_query($conn,"insert into memberlist(id,pw,name,email,phone,postcode,roadaddress,detailaddress) values('".$_POST['id']."','".$_POST['pw']."','".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['postCode']."','".$_POST['roadAddress']."',
'".$_POST['detailAddress']."')");


// $signup=mysqli_query($conn,"insert into member (id, email, name, pw, phone, postcode, roadaddress, detailaddress)
 // values ('$id', '$email', '$name', '$pw', '$phone', '$postCode', '$roadAddress', '$detailAddress')");

  if($signup){
?> <script> alert("회원가입이 완료되었습니다."); location.replace("./a_login.php")</script>
<?php
 //echo "회원가입이 완료되었습니다.";
   } else {

    echo "오류 발생 : ".mysqli_error($signup);

  }

//mysqli_close($conn);


?>
