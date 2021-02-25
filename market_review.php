<?php


session_start();

$db_host = "127.0.0.1";
$db_user = "admin";
$db_password = "Myadmin@02;;";
$db_name = "db";
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);



if(isset($_SESSION['email']))
{
 $db_host = "127.0.0.1";
 $db_user = "admin";
 $db_password = "Myadmin@02;;";
 $db_name = "db";
 $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);


 $user_email = $_SESSION['email'];
 //echo "email : " .$user_email;

//  $sql = mysqli_query($conn,"select * from freeboard where id='".$bno."'");
 $sql = mysqli_query($conn, "select * from member where email='$user_email'");
 $board = $sql->fetch_array();
 // echo "name : " .$board['name'];
 $user_name = $board['name'];
 $uid = $board['uid'];

 //$globals['user_name'];


} else {    // 로그인창 띄워주기

// <!-- <li class="test"><a href="#"><p>회원가입</p></a></li>
// <li class="test"><a href="#none" onclick="location.href='login.html'"><p>로그인</p></a></li> -->

} ?>






<!doctype html>
<head>
<meta charset="UTF-8">
<title>마켓정보</title>
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>

<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
<style>
#board_write {
 width:900px;
 position:relative;
 margin:0 auto;
}
#write_area {
 margin-top:70px;
 font-size:14px;}
#in_name {
 margin-top:30px;
}
#in_name textarea {
 font-weight:bold;
 font-size:26px;
 color:#333;
 width: 900px;
 border:none;
 resize: none;
}
#in_title {
 margin-top:30px;
}
#in_title textarea {
 font-weight:bold;
 font-size:26px;
 color:#333;
 width: 900px;
 border:none;
 resize: none;
}
.wi_line {
 border:solid 1px lightgray;
 margin-top:10px;
}
#in_content {
 margin-top:10px;
}
#in_content textarea {
 font:14px;
 color:#333;
 width: 900px;
 height: 400px;
 resize: none;
}
#in_pw input {
 font:14px;
 margin-top:10px;
}
.bt_se {
 margin-top:20px;
 text-align:center;
}
.bt_se button {
 width:100px;
 height:30px;
}

.img_wrap {
 width: 300px;
 margin-top: 50px;
}

.img_wrap img {
 max-width: 100%;
}

</style>
</head>



<body>
  <div id="summernote">
    <p>

      </p>
    </div>
    <form action="saveimage.php" method="post" enctype="multipart/form-data">
<script>

    $(document).ready(function() {
        $('#summernote').summernote({
            height: 300,
            onImageUpload: function(files, editor, welEditable) {
                sendFile(files[0], editor, welEditable);
            }
        });


        function sendFile(file, editor, welEditable) {
            data = new FormData();
            data.append("file", file);
            $.ajax({
                data: data,
                type: "POST",
                url: "saveimage.php",
                cache: false,
                contentType: false,
                processData: false,
                success: function(url) {
                    editor.insertImage(welEditable, url);
                }
            });
        }

    });





//   $(document).ready(function() {
//        $('#summernote').summernote({
//                width: 900,
//                height: 300,                 // set editor height
//                minHeight: null,             // set minimum height of editor
//                maxHeight: null,             // set maximum height of editor
//                focus: true,                  // set focus to editable area after initializing summernote
//                callbacks: {
//                  onImageUpload : function(files){
//                   // console.log('image upload:', files);
//                    sendFile(files, $(this));
//                  }
//                }
//        });
//
// function sendFile(file, editor){
//   data = new FormData();
//   len = files.length;
//   $.each(files, function(idx, val){
//     data.append("images[]", val);
//   });
// //  data.append("file", file);
//   $.ajax({
//     url:"saveimage.php",
//     data:data,
//     contentType:false,
//     processData:false,
//     type:'post',
//     success:function(data){
//       alert(data);
//
//       $.each(data.urls,function(idx,url){
//         editor.summernote('editor.insertImage.url');
//       });
//       // var image = $('<img>').attr('src', ''+data);
//       // $('#summernote').summernote("insertNode", image[0]);
//       // editor.insertImage(welEditable, data);
//     }
//     // error:function(jqXHR, testStatus, errorThrown){
//     //   console.log(textStatus+""+errorThrown);
//
//   });
//
// // $('form').on('submit', function(e){
// //   e.preventDefault();
// //   alert($('#summernote').summernote('code'));
// //   alert($('#summernote').val());
//  }
// });
</script>
   <div class="button">
     <input type="submit" value="submit">
   </div>
 </form>
     </body>
