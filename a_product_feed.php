
<?php
include("a_top_menu.php");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>상품페이지</title>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/top-menu.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/latest/css/bootstrap.min.css"> -->

<style>
/* .top {
  margin-top: 15px;
} */

.cardwrapper {
  color:black;
  margin-top: 30px;
  margin-left: 26%;
  float:left;
  width: 1000px;
  text-align: center;
}

.cardwrapper a {
  color:black;
}

.card {
  float:left;
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
  height: 170px;
  border: 1px solid #cecece;
   margin-top: 10px;
   margin-bottom: 10px;
}

.product_line {
  margin-top: 150px;
}

</style>
  </head>
  <body>
    <?php
    if(isset($_SESSION['id'])){
      if($_SESSION['id'] == "admin"){
        ?>
        <div class="write_productBtn">
          <button style="border:none; border-radius: 6px; background-color:black; color:white; width:80px; height:30px;"onclick="location.href='a_write_product.php'">상품등록</button>
        </div>
        <?php
      }
    }
    ?>

    <div class="product_line">
    <hr />
    </div>


<div class="menutitle">
  <p class="menu_title" style="text-decoration:underline;">수제사료</p>
</div>





<!-- <td width="500"><a href="read.php?id=<php echo $board["id"];?>"><php echo $title;?></a></td> -->




    <div class="cardwrapper">

      <?php

      $sql = mysqli_query($conn, "select * from feedboard where category='수제사료';");

      while($board = $sql->fetch_array())
      {
      $idx=$board["idx"];
      $title=$board["title"];
      $sub_title=$board["sub_title"];
      $price=$board["price"];
      $jeago=$board["jeago"];
      $content=$board["content"];
      $rep_picture=$board["rep_picture"];

      ?>


      <a href="a_product_inner.php?idx=<?php echo $idx;?>"><div class="card">
        <img src="uploads/<?php echo $rep_picture; ?>" />
        <p style="font-size:15px;">
          <?php echo $title; ?> </p>
        <p style="margin-top: -7px;font-size:13px;">
          <?php echo $sub_title; ?>
        </p>
        <p style="font-size:17px;"><b><?php echo number_format($price); ?>원</b></p>
      </div></a>

      <!-- <a href="#" onclick="location.href='product_inner.php'"><div class="card">
        <img src="https://happypangpang.net/web/product/big/eunsohee_69.jpg" />
        <p style="font-size:15px;">
          위드치킨 <br />
          닭으로 만든 진짜 식사
        </p>
        <p style="font-size:17px;"><b>15,000원</b></p>
      </div></a>
      <a href="#" onclick="location.href='product_inner.php'"><div class="card">
        <img src="https://happypangpang.net/web/product/big/eunsohee_69.jpg" />
        <p style="font-size:15px;">
          위드치킨 <br />
          닭으로 만든 진짜 식사
        </p>
        <p style="font-size:17px;"><b>15,000원</b></p>
      </div></a>
      <a href="#" onclick="location.href='product_inner.php'"><div class="card">
        <img src="https://happypangpang.net/web/product/big/eunsohee_69.jpg" />
        <p style="font-size:15px;">
          위드치킨 <br />
          닭으로 만든 진짜 식사
        </p>
        <p style="font-size:17px;"><b>15,000원</b></p>
      </div></a>
      <a href="#" onclick="location.href='product_inner.php'"><div class="card">
        <img src="https://happypangpang.net/web/product/big/eunsohee_69.jpg" />
        <p style="font-size:15px;">
          위드치킨 <br />
          닭으로 만든 진짜 식사
        </p>
        <p style="font-size:17px;"><b>15,000원</b></p>
      </div></a>
      <a href="#" onclick="location.href='product_inner.php'"><div class="card">
        <img src="https://happypangpang.net/web/product/big/eunsohee_69.jpg" />
        <p style="font-size:15px;">
          위드치킨 <br />
          닭으로 만든 진짜 식사
        </p>
        <p style="font-size:17px;"><b>15,000원</b></p>
      </div></a>
      <a href="#" onclick="location.href='product_inner.php'"><div class="card">
        <img src="https://happypangpang.net/web/product/big/eunsohee_69.jpg" />
        <p style="font-size:15px;">
          위드치킨 <br />
          닭으로 만든 진짜 식사
        </p>
        <p style="font-size:17px;"><b>15,000원</b></p>
      </div></a>
      <a href="#" onclick="location.href='product_inner.php'"><div class="card">
        <img src="https://happypangpang.net/web/product/big/eunsohee_69.jpg" />
        <p style="font-size:15px;">
          위드치킨 <br />
          닭으로 만든 진짜 식사
        </p>
        <p style="font-size:17px;"><b>15,000원</b></p>
      </div></a> -->
<?php } ?>
    </div>


  </body>
</html>
