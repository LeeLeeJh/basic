
<?php


$db_host = "127.0.0.1";
$db_user = "admin";
$db_password = "Myadmin@02;;";
$db_name = "db";

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
$conn->set_charset("utf8");



// if($_FILES['file']['name']){
//   if(!$_FILES['file']['error']){
//     $name = md5(rand(100,200));
//     $ext = explode('.',$_FILES['file']['name']);
//     $rep_name = $name. '.' .$ext[1];
//     $destination = "uploads/" .$rep_name;
//     $location = $_FILES["file"]["tmp_name"];
//     move_uploaded_file($location, $destination);
//     echo '이미지 저장위치 url' .$rep_name;
//   } else {
//     echo $message = 'error : '.$FILES['file']['error'];
//   }
// }

$tmpfile =  $_FILES['file']['tmp_name'];
$rep_name = $_FILES['file']['name'];
$filename = iconv("UTF-8", "EUC-KR",$_FILES['file']['name']);
$folder = "uploads/".$filename;
move_uploaded_file($tmpfile,$folder);


// if(move_uploaded_file($tmpfile,$folder)){
//   echo "ㅇㅇ";
// } else {
//   echo "here info:";
//   print_r($_files);
// }

// echo $_POST['category'];
// echo $_POST['title'];
// echo $_POST['sub_title'];
// echo $_POST['price'];
// echo $_POST['jeago'];
// echo $_POST['content'];
// echo $rep_name;

// $title = $_POST[title];
// echo $title;



// $freewrite = mysqli_query($conn,"insert into freeboard(name,title,content,wdate,view,file) values('".$_POST['name']."','".$_POST['title']."','".$_POST['content']."', '".$date."', 0, '".$o_name."')");
 $post = mysqli_query($conn,"insert into feedboard(title,sub_title,price,jeago,content,rep_picture,category) values('".$_POST['title']."','".$_POST['sub_title']."','".$_POST['price']."','".$_POST['jeago']."','".$_POST['content']."','$rep_name','".$_POST['category']."')");

 if($post){
    ?>
    <script type="text/javascript">alert("글쓰기 완료되었습니다."); location.href = 'javascript:history.go(-2);';</script>

    <?php
  } else {
    ?>
    <script type="text/javascript">alert("글쓰기 실패했습니다.");</script>
    <?php
  }





// $sql = mq("insert into board(name,pw,title,content,date,lock_post,file) values('".$_POST['name']."','".$userpw."','".$_POST['title']."','".$_POST['content']."','".$date."','".$lo_post."','".$o_name."')");

// if($_POST['category'] == "수제사료") {
//   $post = mysqli_query($conn,"insert into feedTable(title,sub_title,price,jeago,content,rep_picture) values('".$_POST['title']."','".$_POST['sub_title']."','".$_POST['price']."','".$_POST['jeago']."','".$_POST['content']."','".$rep_name."')");
//   // $post = mysqli_query($conn,"insert into feedTable(title,sub_title,price,jeago,content) values('".$_POST['title']."','".$_POST['sub_title']."','".$_POST['price']."','".$_POST['jeago']."','".$_POST['content']."')");
//
//   if($post){
//      ?>
<!-- //      <script type="text/javascript">alert("글쓰기 완료되었습니다.");</script>
//      <meta http-equiv="refresh" content="0 url=freeTable.php" /> -->
      <?php
//   } else {
//     echo "글쓰기 실패하였습니다.";
//   }
// }

// $freewrite = mysqli_query($conn,"insert into freeboard(name,title,content,wdate,view,file) values('".$_POST['name']."','".$_POST['title']."','".$_POST['content']."', '".$date."', 0, '".$o_name."')");
// // $freewrite = mysqli_query($conn,"insert into free(name,pw,title,content,date) values('".$_POST['name']."','".$userpw."','".$_POST['title']."','".$_POST['content']."','".$date."')");
// if($freewrite){
//   ?>
   <!-- <script type="text/javascript">alert("글쓰기 완료되었습니다.");</script>
   <meta http-equiv="refresh" content="0 url=freeTable.php" />
   <?php
// } else {
//     echo "no!!";
//     echo "nope :" .mysqli_query_error();
//     echo "nope2 :" .mysqli_error();
//
// }
?>
