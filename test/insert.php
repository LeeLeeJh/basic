<?php
    //데이터 베이스 연결하기
    $db_host = "127.0.0.1";
    $db_user = "admin";
    $db_password = "Myadmin@02;;";
    $db_name = "db";
    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    if(mysqli_connect_errno()){
      echo "db 실패" . mysqli_connect_error();
    } else {
      echo "db 성공";
    }

    $id = "id";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $REMOTE_ADDR = $_SERVER['REMOTE_ADDR'];



    // $query = "insert into board
    // (id, name, email, pass, title, content, wdate, ip, view)
    // values ('', '".$name."', '".$email."', '".$pass."', '".$title."',
    // '".$content."', now(), '".$REMOTE_ADDR."', 0)";
    $writeresult= mysqli_query("insert into board(id, name, email, pass, title, content, wdate, ip, view)
    values('', '".$_POST['name']."', '".$_POST['email']."', '".$_POST['pass']."', '".$_POST['title']."',
    '".$_POST['content']."', now(), '".$_SERVER['REMOTE_ADDR']."', 0)", $conn);
    // $writeresult=mysqli_query($query, $conn) or die(mysqli_error());

    if($writeresult){
      ?> <script> alert("글쓰기 완료"); location.replace("./main.php")</script>
      <?php


    //echo "회원가입이 완료되었습니다.";
     } else {
       echo ("쿼리오류 :" . mysqli_error($writeresult));

    }

    //데이터베이스와의 연결 종료
  //  mysqli_close($conn);



?>
