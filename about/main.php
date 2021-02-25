<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/top-menu.css">
    <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/latest/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  </head>
  <body>
    <div class="top">
      <div class="wrapper">
        <ul class="top-menu">
            <li class="sometimes"><a style="text-decoration: none;" href="#" onclick="location.href='main.php'"><p><h2>With meal</h2></p></a></li>

          <?php
          if(isset($_SESSION['id']))
          {
            $db_host = "127.0.0.1";
            $db_user = "admin";
            $db_password = "Myadmin@02;;";
            $db_name = "db";
            $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);


            $user_id = $_SESSION['id'];
            //echo "email : " .$user_email;

          //  $sql = mysqli_query($conn,"select * from freeboard where id='".$bno."'");
            $sql = mysqli_query($conn, "select name from member where id='$user_id'");
            $board = $sql->fetch_array();
          //  echo "name : " .$board['name'];
            $user_name = $board['name'];

            $globals['user_name'];
            ?>
            <!-- <ul id="usermenu"> -->
            <!-- <li class="test"><a href="#"><p><?php echo "{$_SESSION['email']}"?>님</p></a> -->
            <!-- <li class="test"><a href="#"><p><?php echo $board['name']?>님</p></a> -->
           <!-- <ul> -->
                  <!-- <li class="test"><a href="#none" onclick="location.href='logout.php'"> 로그아웃 </a></li> -->

           <!-- </ul> -->
           <!-- </li> -->
           <!-- </ul> -->

           <li class="test"><a href="#none" onclick="location.href='logout.php'"><p> 로그아웃 </p></a></li>
           <li class="test"><a href="#"><p>마이페이지</p></a></li>
           <li class="test"><a href="#"><p>장바구니</p></a></li>
            <?php

          } else {
            ?>

          <li class="test"><a href="#" onclick="location.href='register.php'"><p>회원가입</p></a></li>
          <li class="test"><a href="#none" onclick="location.href='login.php'"><p>로그인</p></a></li>
          <li class="test"><a href="#"><p>마이페이지</p></a></li>
          <li class="test"><a href="#"><p>장바구니</p></a></li>
         <?php
       } ?>

          <div class="search">
          <form action="search_result.php" method="get">
          <input type="text" name="search" placeholder="검색어 입력">
          <button type="submit"></button>
          </form>
          </div>
        </ul>

        <nav id="middle_top_menu" >
          <ul>
            <li><a class="menuLink" href="#" onclick="location.href='product.php'">수제사료</a></li>
            <li><a class="menuLink" href="#">수제간식</a></li>
            <li><a class="menuLink" href="#">천연수제껌</a></li>
            <li><a class="menuLink" href="#">케이크·쿠키</a></li>
            <li><a class="menuLink" href="#">천연파우더</a></li>
            <!-- <li><a class="menuLink" href="freeTable.php">자유게시판</a></li> -->
          </ul>
        </nav>

      </div>
    </div>

    <div class="write_productBtn">
      <p>물품등록</p>
    </div>

  </body>
</html>
