<?php

include("a_top_menu.php");

$search = $_GET['search'];

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/top-menu.css">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


<style>
.search_title {
  margin-top: 8%;
  margin-left: 47%;
}
.search_condition p {
  display: inline-block;
  margin-left: -4%;
  margin-right: 80px;
}

.search_condition input {
  width: 500px;
}

.search_condition button {

}

.search_product_line {
  margin-top: 20px;
}


.search_result_comment {
  margin-left: 495px;
}

.card p {
  color:black;
}

</style>

  </head>
  <body>


    <div class="search_title">
    <p><h3>상품검색</h3></p>
    </div>

    <hr class="search_title_line" width="50%" align="center" border="5px">

    <center>
    <div class="search_condition">
      <form action="a_search_result.php" method="get">
    <p><b>검색조건</b></p>
    <input type="text" name="search" value="<?php echo $search;?>">
    <button type="submit">검색하기</button>
    </form>
    </div>
    </center>

    <hr class="search_title_line" width="50%" align="center" border="5px">
   <?php
    // $sql = mysqli_query($conn, "select * from feedboard where title like '%search%' order by idx desc");
    $sql2 = mysqli_query($conn, "select * from feedboard where title like '%$search%'");
    $search_count = mysqli_num_rows($sql2);
    ?>
    <div class="result">
    <p class="search_result_comment">총 <?php echo $search_count;?>개의 상품이 검색되었습니다.</p>
    <hr class="search_product_line" width="50%" align="center" border="5px">
    </div>



    <!-- <td width="500"><a href="read.php?id=<php echo $board["id"];?>"><php echo $title;?></a></td> -->




        <div class="cardwrapper">

          <?php
          $sql = mysqli_query($conn, "select * from feedboard where title like '%$search%'");
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
