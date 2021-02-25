<?php
$db_host = "127.0.0.1";
$db_user = "admin";
$db_password = "Myadmin@02;;";
$db_name = "db";
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

$bno = $_POST['bno'];
//echo "bno" .$bno;
$userpw = password_hash($_POST['dat_pw'], PASSWORD_DEFAULT);
$sql = mysqli_query($conn,"insert into reply(con_num,name,content) values('".$bno."','".$_POST['dat_user']."','".$_POST['content']."')");




if($sql){
  ?>
  <script type="text/javascript">alert("댓글 작성 완료");</script>
  <meta http-equiv="refresh" content="0 url=read.php?id=<?php echo $bno ?>">

  <?php
} else {
    echo "no!!";
    echo "nope :" .mysqli_query_error();
    echo "nope2 :" .mysqli_error();

}

?>
