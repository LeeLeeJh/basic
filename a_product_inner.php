<?php

include("a_top_menu.php");

$bno = $_GET['idx'];

$sql = mysqli_query($conn, "select * from feedboard where idx ='".$bno."'");
$board = $sql->fetch_array();

$idx=$board["idx"];
$title=$board["title"];
$sub_title=$board["sub_title"];
$price=$board["price"];
$jeago=$board["jeago"];
$content=$board["content"];
$rep_picture=$board["rep_picture"];

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>상품페이지</title>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/top-menu.css">
    <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/latest/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/jquery.number.min.js"></script>



    <script>
    $(function(){

    $('.plus').click(function(){

      var sum = $('.sum').val();
      var sum = rm_comma(sum);
      var price = $(".sell_price").val();
      var num = $(".count").val();
      num = $(".count").val(num*1+1);
      var num = $(".count").val();
      sum = $(".sum").val(num*price);
      var sum = $('.sum').val();
      var sum = comma(sum);
      $('.sum').val(sum);

    })

    $('.minus').click(function(){

      var num = $(".count").val();
      if(num > 1){
      var sum = $(".sum").val();
      var sum = rm_comma(sum);
      var price = $(".sell_price").val();
      num = $(".count").val(num*1-1);
      var num = $(".count").val();
      sum = $(".sum").val(num*price);
      var sum = $('.sum').val();
      var sum = comma(sum);
      $('.sum').val(sum);
      }

    })

    //세번째 자리 콤마
    function comma(num){
       var len, point, str;

       num = num + "";
       point = num.length % 3 ;
       len = num.length;

       str = num.substring(0, point);
       while (point < len) {
          if (str != "") str += ",";
          str += num.substring(point, point + 3);
          point += 3;
       }

       return str;
    }

    function rm_comma(num){
      var number = num + "";
      return number.replace(",","");
    }

  })


</script>

    <!-- <script language="JavaScript">

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
    </script> -->



<style>

.product_line {
  margin-top: 150px;
}
.product {
  margin: 25%;
  /* padding-left: 30px; */
  text-decoration: none;
  display: inline;
  /* margin-left: 250px; */
}
.product .productImg {
  margin: 0 auto;
  /* padding-left: 300px; */
  margin-top: -20px;
  display: inline-block;
}

.productImg img {
  width: 450px;
  height: 450px;
}

.product .prouctExplain {
  margin-left: 80px;
  margin-top: 30px;
  display: inline-block;
  /* float: right; */
  padding-right: 200px;
}

.choice {
  font-size: 10px;
}

.choice p {
  margin-top: 10px;
  margin-bottom: -0.5px;
}

.total_price p {
    display: inline-block;
}

#paymentBtn {
  color: white;
  background-color: black;
  margin-top: 20px;
}


.paymentBtn {
  width: 140px;
  float: left;
  text-decoration: none;
  padding: 5px;
  vertical-align: middle;
  text-align: center;
  list-style: none;
  color: white;
  background-color: black;
  border: 1px solid #00000000;
}

.paymentBtn:hover {
  text-decoration: none;
  color: black;
  background-color: white;
  border: 1px solid #000000;
}

.paymentBtn li {
  text-decoration: none;
  color: white;
}

.paymentBtn:hover li{
  text-decoration: none;
  color: black;
}

.paymentBtn:hover a {
  text-decoration: none;
}

.cartBtn {
  width: 100px;
  margin-left: 20px;
  float: left;
  text-decoration: none;
  padding: 5px;
  vertical-align: middle;
  text-align: center;
  list-style: none;
  color: black;
  background-color: white;
  border: 1px solid #000000;
}

.cartBtn:hover {
  text-decoration: none;
  color: white;
  background-color: black;
  border: 1px solid #000000;
}

.cartBtn li {
text-decoration: none;
  color: black;
}

.cartBtn:hover li{
  text-decoration: none;
  color: white;
}

#re {
  margin-left: 23%;
  margin-bottom: 150px;
  margin-top: 50px;
}
/*
.cartBtn:hover a {
  text-decoration: none;
}

.service {
  margin-top: 80px;
  margin-left: 140px;
  width: 470px;
  height: 50px;
  outline: 1px solid lightgray;
  font-size: 13px;
  text-color: black;
}


.service li {
  list-style: none;
}

.service ul li {
 float: left;
 margin-right: 10px;
 height: 50px;
 line-height: 50px;
 text-align: center;
 display: block;
}
.service ul li a {
  color: black;
}

.service ul li a:hover {
  background: #FFFFFF;
} */

.service {
  margin-top: 70px;
  margin-left: 36.8%;
  height: 30px;
  width: 600px;
  }

.service ul li {
     list-style: none;
     color: black;
     background-color: #FFFFFF;
     float: left;
     line-height: 30px;
     vertical-align: middle;
     text-align: center;
    }

     .service .productEx {
       outline: 1px solid lightgray;
       text-decoration:none;
       color: black;
       display: block;
       width: 100px;
       font-size: 12px;
       font-weight: bold;
       font-family: "Trebuchet MS", Dotum, Arial;
      }

.product_explain {
  margin-top: 10px;
}

.productEx_line {
  width: 1200px;
  margin: 0 auto;
  margin-top: -20px;
}

.editBtn {
  float: right;
  margin-right: 300px;
}

table {
  border-top: 2px solid lightgray;
  border-collapse: collapse;
}

td {
  border-bottom: 1px solid lightgray;
  padding: 5px;
}

.container {
  width: 150px;
}

.row .star1 {
    width:10%;
}
.row .star2 {
    width:10%;
}
.row .star3 {
    width:10%;
}
.row .star4 {
    width:10%;
}
.row .star5 {
    width:10%;
}
</style>

  </head>

    <div class="product_line">
    <hr />
    </div>

    <?php
    if(isset($_SESSION['id'])){
      if($_SESSION['id'] == "admin"){
        ?>
        <div class="editBtn">
          <button onclick="location.href='a_modify_product.php?idx=<?php echo $idx;?>'">수정</button>
          <button onclick="location.href='a_delete.php?idx=<?php echo $idx;?>'">삭제</button>
          </div>
        <?php
      }
    }
    ?>



      <!-- <li>
        <a href="a_modify_product.php?idx=<?php echo $idx;?>"> [ 수정 ] </a>
      </li>

      <li>
        <a href="a_delete.php?idx=<?php echo $idx;?>"> [ 삭제 ] </a>
      </li> -->




    <div class="product">
    <div class="productImg">
      <img src="uploads/<?php echo $rep_picture; ?>" />
      </div>
    <div class="prouctExplain">
      <div class="product_title">
        <p><b><h4><?php echo $title; ?></h4></b></p>
      </div>

        <div class="buyEx">
         <b><?php echo $sub_title; ?></b><br />
        </div>

         <div class="price">
           <input style="display:inline-block; font-size:13px; border:none; background-color:white;"class="price" id="price" type="text" value="<?php echo number_format($price);?>" readonly>
           <p style="display:inline-block; margin-left:-135px;">원</>
           <br />
             </div>



             <form name="form" method="post" id="fileForm" action="a_payment_now.php">

             <!-- <form name="form" method="get" action="a_cart_ok.php"> -->
             <input type="hidden" id="idx" name="idx" value="<?php echo $_GET['idx'];?>">
               <div class="choice">
                 <p><b>구매수량</b></p>
               </div>
               <div class="numBtn">
             <input type=hidden class="sell_price" name="sell_price" value="<?php echo $price;?>">
             <input class="minus" id="minus" type="button" value=" - ">
             <input class="count" type="text" id="amount" name="amount" value="1" size="3">
             <input class="plus" id="plus" type="button" value=" + "><br>
               </div>

               <div class="total_price">
                 <p><b>총 상품금액</b></p>&ensp;&ensp;&ensp;<b><input type="text" style="font-size:18px; margin-top: 20px; border:none; background-color:white;" value="<?php echo number_format($price);?>" type="text" class="sum" name="sum" size="6" readonly>원</b>
               </div>
           <!-- 금액 : <input type="text" name="sum" size="11" readonly>원 -->
           <!-- </form> -->


             <table>
             <!-- <form name=frm> -->
                                              <!-- <tr><td>
                                                <div class="choice">
                                                  <p><b>구매수량</b></p>
                                                </div> -->
                                                <div class="numBtn">

                                                  <!-- <input class="minus" type=button value="-" onclick="down(this.form.ea.value)" name=minus>
                                                  <input class="count" type="text" readonly="readonly" name="ea" class="form" size="2" value=1 maxlength=2 onblur="numcheck(this.form.ea.value,10)" onkeyup="if(isNaN(this.value)) {alert('숫자만 입력해 주세요.');this.value=''};">
                                                  <input class="plus" type=button value="+" onclick="up(this.form.ea.value,10)" name=plus><br> -->
                                                </div>

                              <!-- <td valign=middle height=25> -->
                                <!-- <input type=button value="-" onclick="down(this.form.ea.value)" STYLE="background-color:white;border:0; height:10px;font-size:12px" name=minus> -->
                                <!-- <input type=button value="+" onclick="up(this.form.ea.value,10)" STYLE="background-color:lightgrey;border:none;height:25px;font-size:15px" name=plus><br> -->
                              <!-- </td> -->
                            </td></tr>

                            <!-- </form> -->
             </table>


             <!-- <div class="choice">
               <p><b>중량 선택</b></p>
            <select name="" id="select">
              <option value="" selected>
                [필수]옵션을 선택해주세요
              </option>
              <option valut="">1kg</option>
              <option valut="">3kg(+20,000원)</option>
              <option valut="">5kg(+30,000원)</option>
            </select>
            <br />
            <br />
             </div>

             <div class="total_price">

               <p>총 상품금액</p>&ensp;&ensp;&ensp;<p><b>15,000원</b></p>
             </div> -->

        <!-- <button id="paymentBtn" class="btn btn-warning" type="submit" >바로구매</button> -->
      <!-- <button id="paymentBtn" type="submit" >바로구매</button> -->


      <div class="productBtn">
      <!-- <div class="paymentBtn"><a href="#">
        <li><b>바로구매</b></li>
      </a></div> -->
      <button type="button" id="nowpay" style="border:none; background-color: black; color:white; height:30px; width:100px; font-size:15px;"><b>바로구매</b></button>

      <button type="button" class="cartbutton" id="insidecart" style="border:1px solid black; background-color: white; color:black; height:30px; width:100px; font-size:15px;"><b>장바구니</b></button>


      <!-- <div class="cartBtn"><a type="submit" href="#">
        <li><b>장바구니</b></li>
      </a></div> -->
      </div>


      </div>
    </div> <!-- product end -->

    </form>

    <script>
    $("#nowpay").click(function() {

     $("#fileForm").submit();

   })
    </script>

    <div class="service">
      <ul>
    <li><a name="serviceExplain" style="background-color: black; color: white;" class="productEx" href="#serviceExplain">상품 설명</a></li>
    <li><a class="productEx" href="#shippingInfo">배송/교환/환불</a></li>
    <li><a class="productEx" href="#serviceComment">상품 후기</a></li>
    <li><a class="productEx" href="#serviceInquiry">상품 문의</a></li>
     </ul>
    </div>

    <div class="productEx_line">
    <hr />
    </div>

    <div class="product_explain">
      <center>
        <?php echo $content; ?>
        <!-- <img src="https://happypangpang.net/web/upload/201810newsaro_01.jpg" /><br />
        <img src="https://happypangpang.net/web/upload/201810lightsaro_02.jpg" /><br />
        <img src="https://happypangpang.net/web/upload/201810lightsaro_03.jpg" /><br /> -->
      </center>
    </div>

    <div class="service">
      <ul>
    <li><a class="productEx" href="#serviceExplain">상품 설명</a></li>
    <li><a name="shippingInfo" style="background-color: black; color: white;" class="productEx" href="#cancel">배송/교환/환불</a></li>
    <li><a class="productEx" href="#serviceComment">상품 후기</a></li>
    <li><a class="productEx" href="#serviceInquiry">상품 문의</a></li>
     </ul>
    </div>

    <div class="productEx_line">
    <hr />
    </div>

    <center>
      <img src="https://happypangpang.net/web/upload/2015detail02.jpg" />
    </center>

    <div class="service">
      <ul>
    <li><a class="productEx" href="#serviceExplain">상품 설명</a></li>
    <li><a class="productEx" href="#shippingInfo">배송/교환/환불</a></li>
    <li><a name="serviceComment" style="background-color: black; color: white;" class="productEx" href="#serviceComment">상품 후기</a></li>
    <li><a class="productEx" href="#serviceInquiry">상품 문의</a></li>
     </ul>
    </div>

    <div class="productEx_line">
    <hr />
    </div>

    <div class="revice_comment">
    <table id="re" width="1000px">
        <tr align="center">
            <!-- <th width="4%"></th> -->
            <td width="10%">번호</td>
            <td width="45%">제목</td>
            <td width="15%">작성자</td>
            <td width="15%">작성일</td>
            <td width="15%">평점</td>
        </tr>
        <?php
        $sql = mysqli_query($conn, "select * from review where pid ='".$idx."'");
        while($review = $sql->fetch_array())
        {
          $num++;
          $uid=$review["uid"];
          $title=$review["title"];
          $date=$review["date"];
          $star=$review["star"];
          $text=$review["text"];
          $photo=$review["photo"];

          $sql2 = mysqli_query($conn, "select * from memberlist where idx ='".$uid."'");
          $member = $sql2->fetch_array();

          $id=$member['id'];
          ?>
        <tr align="center">
            <!-- <td><div class="a"></div></td> -->
            <td width="5%"><div class="a"></div><?php echo $num;?></td>
            <td align="left" width="50%"><?php echo $title;?></td>
            <td width="15%"><?php echo $id;?></td>
            <td width="15%"><?php echo $date;?></td>
            <td width="15%"><div class="container">
            	<div class="row">
                <input style="display:inline-block; border:none; color:lightgray;" type="text" class="star1" id="star1" value="★">
                <input style="display:inline-block; border:none; color:lightgray;" type="text" class="star2" id="star2" value="★">
                <input style="display:inline-block; border:none; color:lightgray;" type="text" class="star3" id="star3" value="★">
                <input style="display:inline-block; border:none; color:lightgray;" type="text" class="star4" id="star4" value="★">
                <input style="display:inline-block; border:none; color:lightgray;" type="text" class="star5" id="star5" value="★">
                <input type="hidden" id="star" class="star" value="<?php echo $star;?>">
              </div>
            </div></td>
        </tr>

        <tr>
          <td colspan="5">

           <?php if($photo != null){ ?>
          <center>
            <img style="margin-top:30px;" width="400px" src="uploads/<?php echo $photo;?>" />
          </center><br />
        <?php } ?>
        <p style="margin-left:30px; margin-top:30px; margin-bottom:30px;"><?php echo $text;?></p>

          </td>
        </tr>
        <!-- <tr align="center">
          <td width="5%"><div class="a"></div>02</td>
          <td align="left" width="50%">연유라떼 먹고싶다??</td>
          <td width="15%">고혜림</td>
          <td width="15%">2019-09-25</td>
          <td width="15%">★★★★★</td>
        </tr>
        <tr>
          <td colspan="5">
            <center>
            <img style="margin-top:30px;" width="50%" src="https://i.ytimg.com/vi/LH0QqBajPRU/maxresdefault.jpg" />
          </center><br />
              <p style="margin-bottom:30px;"> 연유라떼 맛있어 초코가 더 맛있어 >ㅅ<</p>
          </td>
        </tr> -->
        <script>
           $(document).ready(function() {
          var i = <?php echo $num;?>-1;
          var star = $(".star:eq("+i+")").val();
          if(star == 1){
            $(".star1:eq("+i+")").css("color", "#FFCC00");
          } else if(star == 2){
            $(".star1:eq("+i+")").css("color", "#FFCC00");
            $(".star2:eq("+i+")").css("color", "#FFCC00");
          } else if(star == 3){
            $(".star1:eq("+i+")").css("color", "#FFCC00");
            $(".star2:eq("+i+")").css("color", "#FFCC00");
            $(".star3:eq("+i+")").css("color", "#FFCC00");
          } else if(star == 4){
            $(".star1:eq("+i+")").css("color", "#FFCC00");
            $(".star2:eq("+i+")").css("color", "#FFCC00");
            $(".star3:eq("+i+")").css("color", "#FFCC00");
            $(".star4:eq("+i+")").css("color", "#FFCC00");
          } else if(star == 5){
            $(".star1:eq("+i+")").css("color", "#FFCC00");
            $(".star2:eq("+i+")").css("color", "#FFCC00");
            $(".star3:eq("+i+")").css("color", "#FFCC00");
            $(".star4:eq("+i+")").css("color", "#FFCC00");
            $(".star5:eq("+i+")").css("color", "#FFCC00");
          }

         });

        </script>
      <?php } ?>

    </table>

    </div>



    <script>
    $(document).ready(function() {
      $('#insidecart').click(function (event) {

        var form = $('#fileForm')[0];

        var data = new FormData(form);

          $.ajax({
            data: data,
            type: 'post',
            url: "a_cart_ok.php",
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {
               alert(data);
              },
                error : function(e) {
                      alert("실패");
                }
        });

  });

  // $(document).ready(function(){

      $("#re tr:odd").addClass("odd");
      $("#re tr:not(.odd)").hide();
      $("#re tr:first-child").show(); //열머리글 보여주기

      $("#re tr.odd").click(function(){
          $(this).next("tr").toggle();
          $(this).find(".a").toggleClass("up");

      });


  // });

  });
    </script>


  </body>
</html>
