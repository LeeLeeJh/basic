
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
// $rep_name = $_POST['file'];
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

$date = date('Y-m-d');


// $freewrite = mysqli_query($conn,"insert into freeboard(name,title,content,wdate,view,file) values('".$_POST['name']."','".$_POST['title']."','".$_POST['content']."', '".$date."', 0, '".$o_name."')");
 $post = mysqli_query($conn,"insert into review(date,uid,pid,star,title,text,photo) values('$date','".$_POST['uid']."','".$_POST['pid']."','".$_POST['rating']."','".$_POST['title']."','".$_POST['text']."','$rep_name')");

 if($post){
    ?>
    <script type="text/javascript">alert("리뷰 작성 완료되었습니다."); location.href = 'javascript:history.go(-2);';</script>

    <?php
  } else {
    echo $_POST['uid'];
    echo $_POST['pid'];
    echo $_POST['rating'];
    echo $_POST['text'];
    echo $rep_name;

    ?>
    <?php
  }

?>
