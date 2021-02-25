<?php
session_start();

$db_host = "127.0.0.1";
$db_user = "admin";
$db_password = "Myadmin@02;;";
$db_name = "db";
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
$conn->set_charset("utf8");

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


<style>
.cart_title {
  margin-top: 8%;
  margin-left: 47%;
}

.cart_ex p {
  margin-left: 43.4%;
  font-size:10.5px;
}

.cartwrapper {
  color:black;
  margin-top: 30px;
  width: 700px;
  text-align: left;
}

.cartitem {
  margin-top: 5px;
  margin-left: 67%;
  /* display: inline-block; */
  width: 900px;
  height: 120px;
  border-bottom: 1px solid #cecece;
  /* text-align: center; */
  }

  .cartitem p {
    display: inline-block;
  }

  .cartitem img{
  width: 60px;
  height: 80px;
  border: 1px solid #cecece;
  margin-left: 15px;
  text-align: center;
  /* margin-top: 10px;
  margin-bottom: 10px; */
  }

.cartmenuwrapper {
 margin-left: 25%;
}

.cartmenu {
 display: inline-block;
}

.numBtn {
 margin-left: 460px;
 display: inline-block;
}

.total_price {
 display: inline-block;
 margin-left: : 100px;
}

.cartBtn {
 float:right;
 margin-right: 27%;
}

</style>
  </head>


  <body onload="init();">
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
            $sql = mysqli_query($conn, "select * from member where id='$user_id'");
            $board = $sql->fetch_array();
          //  echo "name : " .$board['name'];
            $user_idx = $board['uid'];

            // $globals['user_name'];
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

    <div class="cart_title">
    <p><h3>장바구니</h3></p>
    </div>


     <div class="cart_ex">
     <p>
       주문하실 상품명 및 수량을 정확하게 확인해주세요.
     </p>
   </div>

    <b><hr style="margin-top:50px;" class="cart_title_line" width="50%" align="center" border="10px"></b>

   <div class="cartmenuwrapper">
     <div class="cartmenu">
   <input style="margin-left:8px;" type="checkbox" class="allcheck" />
   <p style="display: inline-block; margin-left:16px;">전체선택</p>
   <p style="display: inline-block; margin-left:250px;">상품정보</p>
   <p style="display: inline-block; margin-left:290px;">상품수량</p>
   <p style="display: inline-block; margin-left:70px;">상품금액</p>
    </div>
   </div>

    <hr class="cart_title_line" width="50%" align="center" border="5px">

   <?php
    if(isset($_SESSION['id'])){
   ?>

   <script language="JavaScript">

   var sell_price;
   var amount;

   function init () {
    sell_price = document.form.sell_price.value;
    amount = document.form.amount.value;
    document.form.sum.value = sell_price;
    change();
   }

   function add () {
    hm = document.form.amount;
    sum = document.form.sum;
    hm.value ++ ;

    sum.value = parseInt(hm.value) * sell_price;
   }

   function del () {
    hm = document.form.amount;
    sum = document.form.sum;
      if (hm.value > 1) {
        hm.value -- ;
        sum.value = parseInt(hm.value) * sell_price;
      }
   }

   function change () {
    hm = document.form.amount;
    sum = document.form.sum;

      if (hm.value < 0) {
        hm.value = 0;
      }
    sum.value = parseInt(hm.value) * sell_price;
   }
   </script>


       <div class="cartwrapper">
        <div class="cartitem">

      <?php
      $conn->set_charset("utf8");
      $sql = mysqli_query($conn,"select * from cart where idx='".$user_idx."'");

      while($shopinfo = $sql->fetch_array())
      {

      $cart_pic = $shopinfo['rep_picture'];
      $cart_title = $shopinfo['title'];
      $cart_price = $shopinfo['price'];
      $cart_num = $shopinfo['num'];

      ?>

           <input type="checkbox" name="" />
           <img src="uploads/<?php echo $cart_pic;?>" />
           <p style="font-size:15px; margin-left:30px;">
            <b> <?php echo $cart_title;?> </b><br /><br />
           </p>
           <p style="margin-left: -59px;font-size:12px;"><br /><?php echo $cart_price;?>원</p>

<form style="display: inline-block;" name="form" method="get">

             <div class="numBtn">
           <input type=hidden name="sell_price" value="5000">
           <input class="minus" type="button" value=" - " onclick="del();">
           <input class="count" type="text" name="amount" value="<?php echo $cart_num;?>" size="3" onchange="change();">
           <input class="plus" type="button" value=" + " onclick="add();"><br>
             </div>

             <div class="total_price">
               <b><input style="border:none; background-color:white;" type="text" name="sum" size="6" readonly>원</b>
             </div>
         <!-- 금액 : <input type="text" name="sum" size="11" readonly>원 -->

       <?php } ?>
        </div>
       </div>
       </form>

   <?php
    } else {
   ?>

   <center>
   <p style="margin-top:150px; "><h4>장바구니에 담긴 상품이 없습니다.</h4></p>
   </center>
   <!-- 아이템 없을때로 해야지... -->
   <?php
    }
   ?>

   <b><hr style="margin-top:150px ;" class="cart_bottom_line" width="50%" align="center" border="10px"></b>

   <div class="cartBtn">
   <button style="border:1px solid black; background-color:white; color:black; height:30px;">선택삭제</button>
   <button style="border:none; background-color:black; color:white; height:30px;">주문하기</button>
   </div>


  </body>
</html>
