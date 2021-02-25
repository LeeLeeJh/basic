
<?php


// $db_host = "127.0.0.1";
// $db_user = "admin";
// $db_password = "Myadmin@02;;";
// $db_name = "db";
// $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);


// if($_FILES['file']['name']){
//   if(!$_FILES['file']['error']){
//     $name = md5(rand(100,200));
//     $ext = explode('.',$_FILES['file']['name']);
//     $filename = $name. '.' .$ext[1];
//     $destination = "uploads/" .$filename;
//     $location = $_FILES["file"]["tmp_name"];
//     move_uploaded_file($location, $destination);
//     echo '이미지 저장위치 url' .$filename;
//   } else {
//     echo $message = 'error : '.$FILES['file']['error'];
//   }
// }

// $tmpfile =  $_FILES['file']['tmp_name'];
// $o_name = $_FILES['file']['name'];
// $filename = iconv("UTF-8", "EUC-KR",$_FILES['file']['name']);
// $folder = "uploads/".$filename;
//move_uploaded_file($tmpfile,$folder);


$name = md5(rand(100,200));
    $ext = explode('.',$_FILES['file']['name']);
    $filename = $name. '.' .$ext[1];
    $destination = "about/".$filename;
    $location = $_FILES["file"]["tmp_name"];
if(move_uploaded_file($location, $destination)){
  echo 'about/' . $filename;
} else {
echo $message = 'error : '.$_FILES['file']['error'];
}




// $tmpfile =  $_FILES['file']['name'];
// $o_name = $_FILES['file']['name'];
// $filename = iconv("UTF-8", "EUC-KR",$_FILES['file']['name']);
// $folder = "uploads/".$filename;

// $name = md5(rand(100,200));
// $ext = explode('.',$_FILES['file']['name']);
// $filename = $name.'.'.$ext[1];
// $destination = 'uploads'. $filename;
// echo "t" .$folder;
//move_uploaded_file($tmpfile,$folder);
// if(move_uploaded_file($tmpfile,$folder)){
//   echo "ㅇㅇ";
// } else {
//    echo "here info: ".$_FILES['file']['error'];
//   // print_r($_files);
// }


?>
