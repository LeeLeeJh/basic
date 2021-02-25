<?php

if ($_FILES['file']['name']) {
            if (!$_FILES['file']['error']) {
                $name = md5(rand(100, 200));
                $ext = explode('.', $_FILES['file']['name']);
                $filename = $name . '.' . $ext[1];
                $destination = "uploads/" .$filename; //change this directory
                $location = $_FILES["file"]["tmp_name"];
                if(move_uploaded_file($location, $destination)){
                  echo "열려라 참깨 : " . $filename;//change this URL
                } else {
                  echo "nono";
                }

            }
            else
            {
              echo  $message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['file']['error'];
            }
        } else {
          echo "??";
        }

        // $tmpfile =  $_FILES['b_file']['tmp_name'];
        // $o_name = $_FILES['b_file']['name'];
        // $filename = iconv("UTF-8", "EUC-KR",$_FILES['b_file']['name']);
        // $folder = "uploads/".$filename;
        // echo "t" .$folder;
        // //move_uploaded_file($tmpfile,$folder);
        // if(move_uploaded_file($tmpfile,$folder)){
        //   echo "ㅇㅇ";
        // } else {
        //   echo "here info:";
        //   print_r($_files);
        // }

// $allowed = array('png', 'jpg', 'gif', 'zip');
//
// if(isset($_FILES['file']) && $_FILES['file']['error'] == 0){
//   $extention = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
//   if(!in_array(strtolower($extention), $allowed)){
//     echo '{"status":"error"}';
//     exit;
//   }
//
//   if(move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/'.$_FILES['file']['name'])){
//     $tmp='/uploads/'.$_FILES['file']['name'];
//     echo '/uploads/'.$_FILES['file']['name'];
//     exit;
//   }
// }
//
// echo '{"status":"error"}';
// exit;


// if($_FILES['file']['name']){
//   if(!$_FILES['file']['error']){
//     $name = md5(rand(100,200));
//     $ext = explode('.', $_FILES['file']['name']);
//     $filename = $name . '.' . $ext[1];
//     $destination = 'uploads/' . $filename;
//     $location = $_FILES["file"]["tmp_name"];
//     move_uploaded_file($location, $destination);
//     echo '위치' . $filename;
//   } else {
//     echo $message = 'Ooops! Your upload triggerd the following error :'.$_FILES['file']['error'];
//   }
// }
?>
