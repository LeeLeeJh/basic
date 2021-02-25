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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/latest/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <script>
      $(document).ready(function(){
        $('.bxslider').bxSlider({
        auto: true,
        speed: 500,
        pause: 5000,
        mode: 'horizontal',
        autoControls: true,
        pager: true,
        captions: true,
      });
    });
    </script>


    <style>
    /* * {box-sizing: border-box;
  } */

  #myCarousel {
    margin-left: 150px;
    width: 1000px;

    object-fit: cover;
  }



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

     .top-menu:hover {
       background-color: antiquewhite;
     }

     .top-menu ul {
       margin-top: 30px;
       list-style: none;
       text-align: left;
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
       /* margin-left: 30px; */
     }
     .top-menu ul li a {
       color: black;
       text-decoration: none;
     }
     .top-menu ul li:hover {
       /* background-color: antiquewhite; */
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
          {
            $db_host = "127.0.0.1";
            $db_user = "admin";
            $db_password = "Myadmin@02;;";
            $db_name = "db";
            $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);


            $user_email = $_SESSION['email'];
            //echo "email : " .$user_email;

          //  $sql = mysqli_query($conn,"select * from freeboard where id='".$bno."'");
            $sql = mysqli_query($conn, "select name from member where email='$user_email'");
            $board = $sql->fetch_array();
          //  echo "name : " .$board['name'];
            $user_name = $board['name'];

            $globals['user_name'];
            ?>
            <ul id="usermenu">
            <!-- <li class="test"><a href="#"><p><?php echo "{$_SESSION['email']}"?>님</p></a> -->
            <li class="test"><a href="#"><p><?php echo $board['name']?>님</p></a>
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
        <li><a href="#">마켓정보</a></li>
        <li><a href="#">마켓홍보</a></li>
        <li><a href="#">마켓스토리</a></li>
        <li><a href="#">참여후기</a></li>
        <li><a href="freeTable.php">자유게시판</a></li>

      </ul>
    </div>


    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="5000">

    	<!--페이지-->
    	<ol class="carousel-indicators">
    		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    		<li data-target="#myCarousel" data-slide-to="1"></li>
    		<li data-target="#myCarousel" data-slide-to="2"></li>
    	</ol>
    	<!--페이지-->

    	<div class="carousel-inner">
    		<!--슬라이드1-->
    		<div class="item active">
    			<img src="http://www.wedding21news.co.kr/news/photo/201904/208859_16501_3044.jpg" style="width:1000px; height: 500px;"  alt="First slide">
    			<div class="container">
    				<div class="carousel-caption">
    					<h1>Slide 1</h1>
    					<p>텍스트 1</p>
    				</div>
    			</div>
    		</div>
    		<!--슬라이드1-->

    		<!--슬라이드2-->
    		<div class="item">
    			<img src="https://post-phinf.pstatic.net/MjAxODA1MzBfMjQ1/MDAxNTI3NjM4NjU4OTYw.hTC45JdIXbfNNxHie3ToYqUghEvji_z15EEuzfiTK50g.8-5ntIpL8xAEtfapU0aCKvOcetF3B1kkEHMYQY6Rn7Yg.JPEG/0529_%EA%B3%A0%EB%A5%B4%EB%9D%BC_%EB%B2%84%ED%82%B7%EB%A6%AC%EC%8A%A4%ED%8A%B8%28%ED%94%8C%EB%A6%AC%EB%A7%88%EC%BC%93%29_%EB%8C%80%EC%A7%80_4.jpg?type=w1200" style="width:100%; height: 500px;" data-src="" alt="Second slide">
    			<div class="container">
    				<div class="carousel-caption">
    					<h1></h1>
    					<p>텍스트 2</p>
    				</div>
    			</div>
    		</div>
    		<!--슬라이드2-->

    		<!--슬라이드3-->
    		<div class="item">
    			<img src="https://payload.cargocollective.com/1/4/158985/13793053/-2019-02-16--3.59.09_2000_c.png" style="width:100%; height: 500px;" data-src="" alt="Third slide">
    			<div class="container">
    				<div class="carousel-caption">
    					<h1>Slide 3</h1>
    					<p>텍스트 3</p>
    				</div>
    			</div>
    		</div>
    		<!--슬라이드3-->
    	</div>

    	<!--이전, 다음 버튼-->
    	<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    	<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>


   <!-- <div>
     <ul class="bxslider">
       <li><a href="#"><img src="http://www.sba.seoul.kr/fileup/editor/images/000112/20190703153759266_WZQLHGK2.jpg" alt="" title="image1"</a></li>
      <li><a href="#"><img src="https://t1.daumcdn.net/liveboard/interstella-story/f3dea31ab5844bd7afe56ee55a2282a5.JPG" alt="" title="image1"</a></li>
      <li><a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfEnAcbA1iQ2QLuWHYL6D6eyLA-j2Dwieq58UYTeEDmYxaclFP-w" alt="" title="image1"</a></li>
     </ul>
   </div> -->

    <!-- <div id="page-wrapper">

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
    </div> -->


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
