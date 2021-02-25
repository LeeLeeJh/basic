<?php
include("a_top_menu.php");
 ?>
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

// 전체선택 초기값 true
  $('#all_check').val(function(){
    if($("#all_check").prop("checked")) {
      $("input[class=checkbox]").prop("checked",true);
    }
  });


  })

  </script>


<style>
 .cart_title {
   margin-top: 8%;
   margin-left: 47%;
 }

 .cart_titlebottom_line {
   margin-left: 25%;
   margin-bottom: -20px;
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
   padding-top: 13px;
   /* padding-bottom: -50px; */
   /* margin-top: 10px; */
   margin-left: 67%;
   width: 900px;
   height: 120px;
   /* border-bottom: 1px solid #cecece; */
   /* text-align: center; */
   }

   .cartitem p {
     display: inline-block;
   }

   .cartitem img{
   width: 60px;
   height: 80px;
   border: 1px solid #cecece;
   margin-left: 35px;
   text-align: center;
   display: inline-block;
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
  margin-top: 22px;
  float:right;
  margin-right: 61px;
  display: inline-block;
}

.price {
  margin-top: 23px;
  float:right;
  /* display: inline-block; */
  /* margin-right: : -50px; */
}

.product_title {
  font-size:15px;
  margin-left:40px;
  display: inline-block;
  margin-top: 23px;
}

.total_price {
  padding: 5%;
  width: 1085px;
  margin-left: 20.5%;
  margin-bottom: -5%;
}

 /* table {
   width: 900px;
   border: 1px solid lightgray;
   border-collapse: collapse;
 }

 th {
   border-top: 1px solid lightgray;
   border-right: 1px solid lightgray;
   padding: 10px;
   text-align: center;
 }

 td {
   border-top: 1px solid lightgray;
   border-right: 1px solid lightgray;
   padding: 10px;
   text-align: center;
 } */

.cartBtn_delete {
  margin-top: 20px;
  float:right;
  margin-right: 25.7%;
}

.cartBtn_order {

}

</style>

</head>


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
    <form name="form" method="post" action="a_payment.php">
<input style="margin-left:8px;" type="checkbox" name="all_check" class="all_check" id="all_check" checked/>
<p style="display: inline-block; margin-left:16px;">전체선택</p>
<p style="display: inline-block; margin-left:250px;">상품정보</p>
<p style="display: inline-block; margin-left:290px;">상품수량</p>
<p style="display: inline-block; margin-left:70px;">상품금액</p>
 </div>
</div>

 <hr class="cart_titlebottom_line" width="50%" align="center" border="5px">

<?php
 if(isset($_SESSION['id'])){
?>

    <div class="cartwrapper">

   <?php

   $sql = mysqli_query($conn,"select * from cart where uid='".$user_idx."'");

   while($shopinfo = $sql->fetch_array())
   {
   $cart_idx = $shopinfo['idx'];
   $cart_pic = $shopinfo['rep_picture'];
   $cart_title = $shopinfo['title'];
   $cart_price = $shopinfo['price'];
   $cart_num = $shopinfo['num'];

   ?>
       <div class="cartitem">
        <input style="display: inline-block;" class="checkbox" type="checkbox" name="checkbox[]" id="checkbox" value="<?php echo $cart_idx;?>"/>
        <img src="uploads/<?php echo $cart_pic;?>" />

        <div class="product_title">
          <!-- <p style="font-size:15px; margin-left:30px;"> -->
           <b> <?php echo $cart_title;?> </b>
          <!-- </p> -->
        </div>

        <!-- <p style="margin-left: -59px;font-size:12px;"><br /><?php echo $cart_price;?>원</p> -->

        <div class="price">

          <b><input style="border:none; background-color:white;" type="text" value="<?php echo number_format($cart_price*$cart_num);?>" class="sum" name="sum" size="6" readonly>원</b>


        </div>

          <div class="numBtn">
        <input type=hidden class="sell_price" name="sell_price" value="<?php echo $cart_price;?>">
        <input class="minus" id="minus" type="button" value=" - ">
        <input class="count" type="text" name="amount" value="<?php echo $cart_num;?>" size="3">
        <input class="plus" id="plus" type="button" value=" + "><br>
          </div>


          <hr class="cart_cart_line" width="100%" border="5px">



      <!-- 금액 : <input type="text" name="sum" size="11" readonly>원 -->
</div>
    <?php } ?>
    </div>
    <script>
    $(function(){
            // 상품 선택시 가격 계산
            $('.checkbox').click(function(){
                var n = $('.checkbox').index(this);
              if($(".checkbox:eq("+n+")").prop("checked")){
                // var n = $('.checkbox').index(this);
                // alert("인덱스1 : " +n);
                var total = $('.total').val();
                var num = $('.total').val();
                var num = rm_comma(num);
                var sum = $(".sum:eq("+n+")").val();
                var sum = rm_comma(sum);
                total = parseInt(num) + parseInt(sum);
                var total = comma(total);
                $('.total').val(total);


                $('.shipping_cost').val("3000");
                var shippingcost = $('.shipping_cost').val();
                var totalprice = $('.orderprice').val();
                var total = $('.total').val();
                var total = rm_comma(total);
                totalprice = parseInt(total) + parseInt(shippingcost);
                $('.orderprice').val(totalprice);

                var orderprice = $('.orderprice').val();
                var val = comma(orderprice);
                $('.orderprice2').val(val);

            } else {

                var total = $('.total').val();
                var num = $('.total').val();
                var num = rm_comma(num);
                var sum = $(".sum:eq("+n+")").val();
                var sum = rm_comma(sum);
                total = parseInt(num) - parseInt(sum);
                var total = comma(total);
                $('.total').val(total);


                $('.shipping_cost').val("3000");
                var shippingcost = $('.shipping_cost').val();
                var totalprice = $('.orderprice').val();
                var total = $('.total').val();
                var total = rm_comma(total);
                totalprice = parseInt(total) + parseInt(shippingcost);
                $('.orderprice').val(totalprice);
                $('.orderprice2').val(totalprice);

                var orderprice = $('.orderprice').val();
                var val = comma(orderprice);
                $('.orderprice2').val(val);



                if($('.total').val() == "0"){
                  $('.shipping_cost').val("0");
                  $('.orderprice').val("0");
                  $('.orderprice2').val("0");
                }
              }
            });


            // 체크박스 하나라도 선택 안했을시에 전체선택체크 해제
            $('.checkbox').click(function(){
              var length = $('.checkbox').length;
              if($("input[class=checkbox]:checked").length == length){
                $("#all_check").prop("checked",true);
              } else {
                $("#all_check").prop("checked",false);
              }
            })


              // 전체선택버튼 클릭시 전체선택 = 전체상품가격총합, 전체해제 = 0원
              $("#all_check").click(function(){
                if($("#all_check").prop("checked")){
                  $("input[class=checkbox]").prop("checked",true);
                $("input[class=checkbox]:checked").each(function(){
                  var n = $('.checkbox').index(this);
                  var total = $('.total').val();
                  var num = $('.total').val();
                  var num = rm_comma(num);
                  var sum = $(".sum:eq("+n+")").val();
                  var sum = rm_comma(sum);
                  total = parseInt(num) + parseInt(sum);
                  var total = comma(total);
                  $('.total').val(total);

                  $('.shipping_cost').val("3000");
                  var shippingcost = $('.shipping_cost').val();
                  var totalprice = $('.orderprice').val();
                  var total = $('.total').val();
                  var total = rm_comma(total);

                  totalprice = parseInt(total) + parseInt(shippingcost);
                  $('.orderprice').val(totalprice);

                  var orderprice = $('.orderprice').val();
                  var val = comma(orderprice);
                  $('.orderprice2').val(val);

                });

            } else {
                $("input[class=checkbox]").prop("checked",false);
                var total = $('.total').val();
                total = $('.total').val("0");

                var shippingcost = $('.shipping_cost').val();
                shippingcost = $('.shipping_cost').val("0");
                var totalprice = $('.orderprice').val();
                totalprice = $('.orderprice').val("0");
                $('.orderprice2').val("0");
              }
            });


     })
    </script>


    <script>

    $(function(){

    $('.plus').click(function(){
      var n = $('.plus').index(this);
      var sum = $(".sum:eq("+n+")").val();
      var price = $(".sell_price:eq("+n+")").val();
      var price = rm_comma(price);
      var num = $(".count:eq("+n+")").val();
      num = $(".count:eq("+n+")").val(num*1+1);
      var num = $(".count:eq("+n+")").val();
      sum = $(".sum:eq("+n+")").val(num*price);
      var sum = $('.sum').val();
      var sum = comma(sum);
      $('.sum').val(sum);

      var value = $(".checkbox:eq("+n+")").val();
      $(".checkbox:eq("+n+")").prop("checked",true);
      // 수량 증감 db저장
      $.post("a_cart_update.php", { idx : value, num : num },
                  function(returnedData){

                  }).fail(function(){
                    alert("실패");
                  });


      var total = $('.total').val();
      var num = $('.total').val();
      var num = rm_comma(num);
      total = parseInt(num) + parseInt(price);
      var total = comma(total);
      $('.total').val(total);

      $('.shipping_cost').val("3000");
      var shippingcost = $('.shipping_cost').val();
      var totalprice = $('.orderprice').val();
      var total = $('.total').val();
      var total = rm_comma(total);
      totalprice = parseInt(total) + parseInt(shippingcost);
      $('.orderprice').val(totalprice);


      var shippingcost = comma(shippingcost);
      $('.shipping_cost').val(shippingcost);

      var orderprice = $('.orderprice').val();
      var val = comma(orderprice);
      $('.orderprice2').val(val);

    })

    $('.minus').click(function(){
      var n = $('.minus').index(this);
      var num = $(".count:eq("+n+")").val();
      if(num > 1){
      var sum = $(".sum:eq("+n+")").val();
      var price = $(".sell_price:eq("+n+")").val();
      var price = rm_comma(price);
      num = $(".count:eq("+n+")").val(num*1-1);
      var num = $(".count:eq("+n+")").val();
      sum = $(".sum:eq("+n+")").val(num*price);
      var sum = $('.sum').val();
      var sum = comma(sum);
      $('.sum').val(sum);

      var value = $(".checkbox:eq("+n+")").val();
      $(".checkbox:eq("+n+")").prop("checked",true);
      // 수량 증감 db저장
      $.post("a_cart_update.php", { idx : value, num : num },
                  function(returnedData){

                  }).fail(function(){
                    alert("실패");
                  });

      var total = $('.total').val();
      var num = $('.total').val();
      var num = rm_comma(num);
      var sum = $(".sum:eq("+n+")").val();
      total = parseInt(num) - parseInt(price);
      var total = comma(total);
      $('.total').val(total);
      // total = $('.total').val(total);

      $('.shipping_cost').val("3000");
      var shippingcost = $('.shipping_cost').val();
      var totalprice = $('.orderprice').val();
      var total = $('.total').val();
      var total = rm_comma(total);
      totalprice = parseInt(total) + parseInt(shippingcost);
      $('.orderprice').val(totalprice);

      var shippingcost = comma(shippingcost);
      $('.shipping_cost').val(shippingcost);

      var orderprice = $('.orderprice').val();
      var val = comma(orderprice);
      $('.orderprice2').val(val);

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


<?php
if(empty($cart_pic)){
  ?>
  <center>
  <p style="margin-top:150px; "><h4>장바구니에 담긴 상품이 없습니다.</h4></p>
  </center>

  <b><hr style="margin-top:150px ;" class="cart_bottom_line" width="50%" align="center" border="10px"></b>

  <?php
}

 } else {
?>

<script>location.href='a_login.php'</script>

<?php
 }
?>

<!-- <b><hr style="margin-top:150px ;" class="cart_bottom_line" width="50%" align="center" border="10px"></b> -->
<div class="cartBtn_delete">
<button type="button" id="deleteBtn" style="margin-top:10px; border:1px solid black; background-color:white; color:black; height:30px;">선택삭제</button>
</div>

<div class="total_price">
<hr class="cart_price_line" width="100%" align="center" border="5px">
  <p style="margin-left:140px; display: inline-block;">총 상품금액&ensp;</p>
  <b><input style="border:none; background-color:white; margin-right:-10px;" type="text" value="0" class="total" name="total" size="6" readonly></b>
  <p style="display: inline-block;">+&emsp;배송비&ensp; </p>
  <b><input style="border:none; background-color:white;" type="text" value="3,000" class="shipping_cost" name="shipping_cost" size="4" readonly></b>
  <p style="display: inline-block; margin-left:150px;">=&emsp;결제예정금액&ensp;</p>
  <b><input type="hidden" value="0" class="orderprice" name="orderprice" size="6" readonly></b>
  <b><input style="border:none; background-color:white; margin-right:-10px;" class="orderprice2" name="orderprice2" size="6" readonly>원</b>
<hr class="cart_price_line" width="100%" align="center" border="5px">
</div>

<script>
$(function(){
  // 총합계 처음 불러올 때
    $('.total').val(function(){
      $("input[class=checkbox]:checked").each(function(){
        var n = $('.checkbox').index(this);
        var total = $('.total').val();
        var num = $('.total').val();
        var num = rm_comma(num);
        var sum = $(".sum:eq("+n+")").val();
        var sum = rm_comma(sum);
        total = parseInt(num) + parseInt(sum);
        var total = comma(total);
        $('.total').val(total);
      });
      total = $('.total').val(total);
     });
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
</script>

<script>
// 결제예정금액 초기화
$(function(){

 $('.orderprice').val(function(){

  var shippingcost = $('.shipping_cost').val();
  var shippingcost = rm_comma(shippingcost);
  var totalprice = $('.orderprice').val();
  var totalprice = rm_comma(totalprice);
  var total = $('.total').val();
  var total = rm_comma(total);
  totalprice = parseInt(total) + parseInt(shippingcost);

  $('.orderprice').val(totalprice);
  $('.orderprice2').val(totalprice);

  var orderprice = $('.orderprice').val();
  var val = comma(orderprice);
  $('.orderprice2').val(val);

 });

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
// $('.total').val(function(){
//   return $.number($(this).val());
// });
//
// $('.shipping_cost').val(function(){
//   return $.number($(this).val());
// });

})
</script>

<!-- <form method="post" action="test/order.php"> -->
<!-- <input type="hidden" id="data" name="data"> -->

<center>
<div class="cartBtn_order">
<button type="submit" id="orderBtn" style="margin-bottom:50px; font-size:18px; border:none; background-color:black; color:white; width: 150px; height:50px;"><b>주문하기</b></button>
<!-- <button onclick="location.href='a_payment_order.php'" id="orderBtn" style="margin-bottom:50px; font-size:18px; border:none; background-color:black; color:white; width: 150px; height:50px;"><b>주문하기</b></button> -->
</div>
</center>

</form>

<script>
$(function(){

  // $("#orderBtn").click(function(){
  //    var list = [];
  //   $("input[class=checkbox]:checked").each(function(){
  //     var value = $(this).val();
  //     list.push(value);
  //   });
  //
  //   $("#data").val(list);
  //   alert($("#data").val());

    // $.post("test/order.php", { idx : list },
    //             function(returnedData){
    //               location.href = "test/order.php";
    //             }).fail(function(){
    //               alert("실패");
    //             });

  // });

// $("#orderBtn").click(function(){
//
//   $("input[name=checkbox]:checked").each(function(){
//     var value = $(this).val();
//
//
//     $.post("a_payment_cart.php", { idx : value },
//                 function(returnedData){
//                   alert("성공");
//                   location.href = "a_payment.php";
//                 }).fail(function(){
//                   alert("실패");
//                 });
//   });
//
// });

$("#deleteBtn").click(function(){
  if(confirm("삭제하시겠습니까?")){
    $("input[class=checkbox]:checked").each(function(){
      var value = $(this).val();

      // function createData() {
      //   var sendData = {idx:value};
      //   return sendData;
      // }

      $.post("a_cart_delete.php", { idx : value },
                  function(returnedData){
                    location.href = "a_cart.php";
                  }).fail(function(){
                    alert("실패");
                  });

          //   $.ajax({
          //     data: {idx:value},
          //     // datatype: 'json',
          //     type: 'post',
          //     url: "a_cart_delete.php",
          //     cache: false,
          //     contentType: false,
          //     processData: false,
          //     success: function(data) {
          //        alert(data);
          //       },
          //         error : function(e) {
          //               alert("실패");
          //         }
          // });
    });
  } else {
    return false;
  }
});


    // function requestPay() {
    //
    //   // IMP.request_pay(param, callback) 호출
    //   IMP.request_pay({ // param
    //       pg: "inicis",
    //       pay_method: "card",
    //       merchant_uid: <php echo $user_idx;?>,
    //       name: <php echo $cart_title;?>,
    //       amount: $("#sum").val();,
    //       buyer_email: "gildong@gmail.com",
    //       buyer_name: "홍길동",
    //       buyer_tel: "010-4242-4242",
    //       buyer_addr: "서울특별시 강남구 신사동",
    //       buyer_postcode: "01181"
    //   }, function (rsp) { // callback
    //       if (rsp.success) {
    //         $cart_idx = $shopinfo['idx'];
    //         $cart_pic = $shopinfo['rep_picture'];
    //         $cart_title = $shopinfo['title'];
    //         $cart_price = $shopinfo['price'];
    //         $cart_num = $shopinfo['num'];
    //           ...,
    //           // 결제 성공 시 로직,
    //           ...
    //       } else {
    //           ...,
    //           // 결제 실패 시 로직,
    //           ...
    //       }
    //   });
    // }
    //

})
</script>


</body>
</html>
