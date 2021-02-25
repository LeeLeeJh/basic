<?php
$email=$_POST["email"];
$name=$_POST["name"];
$pw=$_POST["pw"];
$pwc=$_POST["pwc"];

if($pw!=$pwc)
{
  ?> <script> alert("비밀번호와 비밀번호 확인이 서로 다릅니다."); location.replace("./signUp.html")</script>
  <?php
  echo "<a href=signUp.html> back page </a>";
  exit();
}
if($email==NULL || $pw==NULL || $name==NULL)
{
  ?> <script> alert("빈 칸을 모두 채워주세요."); location.replace("./signUp.html")</script>
  <?php
  echo "<a href=signUp.html> back page </a>";
  exit();
}

 $db_host = "127.0.0.1";
 $db_user = "admin";
 $db_password = "Myadmin@02;;";
 $db_name = "db";
 $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
 mysqli_set_charset($conn, "utf8");
// if(mysqli_connect_errno($conn)){
//   echo "failed : " . mysqli_connect_error();
// } else {
//   echo "connect success";
//}


   $check="SELECT * FROM member WHERE email='$email'";

   $result=$conn->query($check);

   if($result->num_rows==1){
     ?> <script> alert("중복된 이메일입니다."); location.replace("./signUp.html")</script>
     <?php
     echo "<a href=signUp.html>back page</a>";
     exit();
   }



$signup=mysqli_query($conn,"insert into member (email, name, pw)
 values ('$email', '$name', '$pw')");


  if($signup){
?> <script> alert("회원가입이 완료되었습니다."); location.replace("./main.php")</script>
<?php
 //echo "회원가입이 완료되었습니다.";
   } else {

    echo "no!!";
    mysqli_query_error($signup);
  }

//mysqli_close($conn);


?>
