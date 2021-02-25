<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/latest/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/latest/js/bootstrap.min.js"></script>
    <style>
    /* * {box-sizing: border-box;
  } */

  .d5 body{margin: 0;}
  .d5 div {padding: 30px 0}
  .d5 form {
  position: relative;
  width: 300px;
  margin-left: 120px;
  margin-top: -35px;
  }
     .d5 {background: #FFFFFF;}
  .d5 input, .d5 button {
  outline: none;
  background: transparent;
  }
  .d5 input {
  width: 100%;
  height: 42px;
  padding-left: 15px;
  border: 3px solid #E7E600;
  }
  .d5 button {
  border: none;
  height: 44px;
  width: 42px;
  position: absolute;
  top: 0;
  right: 0;
  cursor: pointer;
  }
  .d5 button:before {
  content: "\f002";
  font-family: FontAwesome;
  font-size: 16px;
  color: #E7E600;
  }
  .d5 input:focus {
  border-color: #311c24
  }

     /* .menu-icon {
       background: url('')
     } */
     h1 {
        /* color: black; line-height: 0px; float: left; */
        color: black; line-height: 0px; float: left;
        margin-top: -10px;
     }



     .top-menu ul {
       margin-top: 30px;
       list-style: none;
       text-align: center;
       border-top: 1px solid lightgray;
       border-bottom: 1px solid lightgray;
       padding: 10px 0;
     }
     .top-menu ul li {
       font-family: sans-serif;
       display: inline;
       text-transform: uppercase;
       padding: 0 10px;
       letter-spacing: 1px;
     }
     .top-menu ul li a {
       color: black;
       text-decoration: none;
     }
     .top-menu ul li:hover {
       background-color: antiquewhite;
     }
     .wrapper{
       margin: 0 auto;
       width: 1024px;
     }
     .top {
       background-color: white;
       left: 0;
       padding: 0;
       width: 100%;
       height: 60px;
       padding-top: 35px;
     }
     .top p {
       font-size: 12px;
       line-height: 20px;
     }
     .top p:hover {
       color: #a8a8a8;
     }
     .ctop-menu {
       display: inline;
       font-family: sans-serif;

     }
     .ctop-menu li {
       display: inline-block;
     }

     .sometimes {
       margin-left: -50px;
     }
     .ctop-menu .sometimes a p {
       color: black;

     }
     .ctop-menu .sometimes:hover p {
       color: darkgray;
     }
     .ctop-menu .test {
       float: right;
       padding-right: 20px;
     }
     .ctop-menu .test a p {
       float: right;
       color: black;
     }
     .top-menu .test:hover p {
       color: darkgray;
     }

     #page-wrapper {
       padding-left: 250px;
     }

     #sidebar-wrapper {

       position: fixed;
       width: 250px;
       height: 100%;
       margin-left: -250px;
       background: #FFFFFF;
       overflow-x: hidden;
       overflow-y: auto;
     }


     /* 사이드바 스타일 */

     .sidebar-nav {
       width: 250px;
       margin: 0;
       padding: 0;
       list-style: none;
     }

     .sidebar-nav li {
       text-indent: 1.5em;
       line-height: 2.8em;
     }

     .sidebar-nav li a {
       display: block;
       text-decoration: none;
       color: #000000;
     }

     .sidebar-nav li a:hover {
       color: #a8a8a8;
       background: rgba(255, 255, 255, 0.2);
     }

     .sidebar-brand {
       border-bottom: 2px  solid #E7E600;
       border-bottom-maxlength: 25px;
     }

     .sidebar-nav > .sidebar-brand {
      font-size: 1.3em;
      line-height: 3em;
    }

    .cardwrapper {
      padding-left: 130px;
      width: 1200px;
      text-align: center;
    }
    .card {
      margin-top: 40px;
      margin-left: 15px;
      display: inline-block;
      width: 200px;
      height: 280px;
      border: 1px solid #cecece;
      text-align: center;
      /* margin-top: 5px; */
    }
    .card img{
      width: 170px;
      border: 1px solid #cecece;
       margin-top: 10px;
    }

   #usermenu .test {
     position: relative;
   }
   #usermenu ul {
     list-style: none;
     position: absolute;
     top: 25px;
     display: none;


   }
   #usermenu .test:hover ul {
     display: block;
   }
   #usermenu .child {
     float: right;
     color: black;
     background-color: white;
     font-size: 12px;
     line-height: 20px;
   }


    </style>
  </head>
  <body>


    <div class="top">
      <div class="wrapper">
        <ul class="ctop-menu">
          <li class="sometimes"><a href="#"><p><h1>logo</h1></p></a></li>
          <?php
          if(isset($_SESSION['email']))
          { ?>
            <ul id="usermenu">
            <li class="test"><a href="#"><p><?php echo "{$_SESSION['email']}"?>님</p></a>
           <ul>
                  <li class="child"><a href="#none" onclick="location.href='logout.php'"> 로그아웃 </a></li>

           </ul>
           </li>
           </ul>
            <?php

          } else {
            ?>
          <li class="test"><a href="#"><p>회원가입</p></a></li>
          <li class="test"><a href="#none" onclick="location.href='login.html'"><p>로그인</p></a></li>
         <?php
       } ?>
          <li class="test"><a href="#"><p>전문가 등록</p></a></li>
          <div class="d5">
          <form>
          <input type="text" placeholder="검색어 입력">
          <button type="submit"></button>
          </form>
          </div>
        </ul>
      </div>
    </div>


    <div class="top-menu">
      <ul>
        <li>
          <a href="#"><image class="menu-icon"></image></a>
        </li>
        <li><a href="#">웹사이트 개발</a></li>
        <li><a href="#">쇼핑몰·커머스</a></li>
        <li><a href="#">모바일앱·웹</a></li>
        <li><a href="#">프로그램 개발</a></li>
        <li><a href="#">게임</a></li>
        <li><a href="#">블록체인</a></li>
        <li><a href="#">서버 및 기술지원</a></li>
        <li><a href="#">챗봇</a></li>
      </ul>
    </div>


    <div id="page-wrapper">
      <!-- 사이드바 -->
      <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
           <li class="sidebar-brand">
            카테고리
          </li>
          <li><a href="#">메뉴 1</a></li>
          <li><a href="#">메뉴 2</a></li>
          <li><a href="#">메뉴 3</a></li>
          <li><a href="#">메뉴 4</a></li>
          <li><a href="#">메뉴 5</a></li>
          <li><a href="#">메뉴 6</a></li>
          <li><a href="#">메뉴 7</a></li>
          <li><a href="#">메뉴 8</a></li>
          <li><a href="#">메뉴 9</a></li>
        </ul>
      </div>
    </div>


<div class="cardwrapper">
  <div class="card">
    <img src="http://vrthumb.imagetoday.co.kr/2017/09/13/tid285t000102.jpg" />
    <p>
      title
    </p>
  </div>
  <div class="card">
    <img src="http://vrthumb.imagetoday.co.kr/2017/09/13/tid285t000102.jpg" />
    <p>
      title
    </p>
  </div>
  <div class="card">
    <img src="http://vrthumb.imagetoday.co.kr/2017/09/13/tid285t000102.jpg" />
    <p>
      title
    </p>
  </div>
  <div class="card">
    <img src="http://vrthumb.imagetoday.co.kr/2017/09/13/tid285t000102.jpg" />
    <p>
      title
    </p>
  </div>
  <div class="card">
    <img src="http://vrthumb.imagetoday.co.kr/2017/09/13/tid285t000102.jpg" />
    <p>
      title
    </p>
  </div>
  <div class="card">
    <img src="http://vrthumb.imagetoday.co.kr/2017/09/13/tid285t000102.jpg" />
    <p>
      title
    </p>
  </div>
  <div class="card">
    <img src="http://vrthumb.imagetoday.co.kr/2017/09/13/tid285t000102.jpg" />
    <p>
      title
    </p>
  </div>
  <div class="card">
    <img src="http://vrthumb.imagetoday.co.kr/2017/09/13/tid285t000102.jpg" />
    <p>
      title
    </p>
  </div>


</div>

  </body>
</html>
