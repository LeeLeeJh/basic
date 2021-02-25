<?php
include("a_top_menu.php");

$today = date("Ymd");
$rand = strtoupper(substr(md5(uniqid(time())),0,4));
$ordernum = $today . $rand;

 ?>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
 <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script> -->
 <script type="text/javascript" src="https://service.iamport.kr/js/iamport.payment-1.1.5.js"></script>


 <style>

 .total_price {
   padding-left: 5%;
   padding-right: 5%;
   padding-top: -7%;
   width: 1085px;
   margin-left: 20.3%;
   margin-bottom: -5%;
 }


 .price {
   float:right;
   display:inline-block;
   margin-right: 100px;
   margin-top: 23px;
 }

 .cart_title {
   margin-top: 8%;
   margin-left: 47%;
 }

 .cart_titlebottom_line {
   margin-left: 25%;
   margin-bottom: -20px;
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
   /* margin-top: 10px;
   margin-bottom: 10px; */
   }

   .product_title {
     font-size:15px;
     margin-left:40px;
     display: inline-block;
     margin-top: 23px;
   }


 .cartmenuwrapper {
   margin-left: 25%;
   margin-top:-10px;
 }

 .cartmenu {
   display: inline-block;
 }

.form-horizontal {
  margin-top: 50px;
  margin-left: 250px;

}

.shippingInfo {
 margin-top: 150px;
}

.form-group {
  width: 600px;
  margin-left: 33%;
}

/* .form-group input {
  width: 400px;
  margin-left: 70px;
}

.form-group label {
  width: 100px;
  margin-left: 100px;
}

.radio-inline input {
  width: 50px;
}

.form-control {
  width: 400px;
} */

 #radio {
   margin-left: 20px;
}

.container .form-control .zipCode {
  width: 50px;
}

.paymentBtn {
  margin-top: 100px;
}

 </style>
</head>
<body>

<script>
$(function(){
  // 상품 총액 계산
$('.total').val(function(){
  $("input[name=sum]").each(function(){
    var n = $('.sum').index(this);
    var total = $('.total').val();
    var sum = $(".sum:eq("+n+")").val();

    total = parseInt(total) + parseInt(sum);
    $('.total').val(total);

    var orderprice = $('.orderprice2').val();
    var total = $('.total').val();
    var shippingcost = $('.shipping_cost').val();
    orderprice = parseInt(total) + parseInt(shippingcost);
    $('.orderprice2').val(orderprice);

    // $('.shipping_cost').val("3000");
    // var shippingcost = $('.shipping_cost').val();
    // var totalprice = $('.orderprice').val();
    // var total = $('.total').val();
    //  alert("sum : " +shippingcost);
    //  alert("sum : " +totalprice);
    //  alert("sum : " +total );
    // totalprice = parseInt(total) + parseInt(shippingcost);
    // $('.orderprice').val(totalprice);
    // $('.orderprice2').val(totalprice);
  });
  total = $('.total').val(total);

  $('.total').val(function(){
    return $.number($(this).val());
  });

  $('.orderprice2').val(function(){
    return $.number($(this).val());
  });

  $('.shipping_cost').val(function(){
    return $.number($(this).val());
  });

});
})

// $(function(){
// $('.orderprice2').val(function(){
//     var orderprice = $('.orderprice2').val();
//     alert("orderprice : " +orderprice);
//     var total = $('.total').val();
//     alert("total : " +total);
//     var shippingcost = $('.shipping_cost').val();
//     alert("shippingcost : " +shippingcost);
//     orderprice = parseInt(total) + parseInt(shippingcost);
//     alert("orderprice : " +orderprice);
//     $('.orderprice2').val(orderprice);
// });

</script>

   <b><hr style="margin-top:150px;" class="cart_title_line" width="50%" align="center" border="10px"></b>

   <div class="cartmenuwrapper">
    <div class="cartmenu">
   <p style="display: inline-block; margin-left:250px;">상품정보</p>
   <p style="display: inline-block; margin-left:290px;">상품수량</p>
   <p style="display: inline-block; margin-left:70px;">상품금액</p>
   </div>
   </div>

   <hr style="margin-top:-2px;" class="cart_titlebottom_line" width="50%" align="center" border="5px">




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
          <img src="uploads/<?php echo $cart_pic;?>" />

          <div class="product_title">
             <b> <?php echo $cart_title;?> </b>
          </div>

          <div class="price">
            <b><input style="border:none; background-color:white;" type="text" value="<?php echo ($cart_price*$cart_num);?>" class="sum" name="sum" size="6" readonly>원</b>
          </div>

          <input style="margin-top:23px; float:right; margin-right:70px; border:none; background-color:white; display:inline-block;" class="count" type="text" name="amount" value="<?php echo $cart_num;?>" size="3">

            <hr class="cart_cart_line" width="100%" border="5px">

   </div>
 <?php } ?>
      </div>


      <!-- <form class="form-horizontal" name="form" role="form" method="post"> -->

      <div class="total_price">
      <hr class="cart_price_line" width="100%" align="center" border="5px">
        <p style="margin-left:140px; display: inline-block;">총 상품금액&ensp;</p>
        <b><input style="border:none; background-color:white; margin-right:-10px;" type="text" value="0" class="total" name="total" size="6" readonly></b>
        <p style="display: inline-block;">+&emsp;배송비&ensp; </p>
        <b><input style="border:none; background-color:white;" type="text" value="3000" class="shipping_cost" name="shipping_cost" size="4" readonly></b>
        <p style="display: inline-block; margin-left:150px;">=&emsp;결제예정금액&ensp;</p>
        <b><input type="hidden" value="0" class="orderprice" name="orderprice" size="6" readonly></b>
        <b><input style="border:none; background-color:white; margin-right:-10px;" type="text" value="0" id="orderprice2" class="orderprice2" name="orderprice2" size="6" readonly>원</b>
      <hr class="cart_price_line" width="100%" align="center" border="5px">
      </div>


      <div class="shippingInfo">
        <div class="form-group">
            <label>배송지 선택</label>
                    <input type="radio" id="radio" name="radio" value="Y" checked> 회원 정보와 동일
                    <input type="radio" id="radio" name="radio" value="N"> 새로운 배송지
        </div>


      <div class="form-group" id="divName">
          <label>이름</label>
              <input type="text" class="form-control onlyHangul" id="name" name="name" data-rule-required="true" value="<?php echo $user_name;?>" maxlength="15">
      </div>

      <div class="form-group" id="divAddress">
          <label>주소</label>
            <div class="zipCode">
              <input type="text" style="width: 130px; margin-top:5px; display:inline;" class="form-control" id="postCode" name="postCode" value="<?php echo $user_postcode;?>">
              <input type="button" style="margin-top:-2px; display:inline; text-align:center; width:80px;" class="btn btn-default" value="주소검색" onClick="execDaumPostCode();"/>
            </div>
<input type="text" style="margin-top:5px;" class="form-control" id="roadAddress" name="roadAddress" value="<?php echo $user_roadaddress;?>">
<input type="text" style="margin-top:5px;" class="form-control" id="detailAddress" name="detailAddress" value="<?php echo $user_detailaddress;?>">
</div>

<div id="layer" style="display:none;position:fixed;overflow:hidden;z-index:1;-webkit-overflow-scrolling:touch;">
<img src="//i1.daumcdn.net/localimg/localimages/07/postcode/320/close.png" id="btnCloseLayer" style="cursor:pointer;position:absolute;right:-3px;top:-3px;z-index:1" onclick="closeDaumPostcode()" alt="닫기 버튼">

          </div>
      <script>
      // 우편번호 찾기 화면을 넣을 element
      var element_layer = document.getElementById('layer');

      function closeDaumPostcode() {
          // iframe을 넣은 element를 안보이게 한다.
          element_layer.style.display = 'none';
      }

      function execDaumPostCode() {
          new daum.Postcode({
              oncomplete: function(data) {
                  // 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                  // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                  // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                  var fullAddr = data.address; // 최종 주소 변수
                  var extraAddr = ''; // 조합형 주소 변수

                  // 기본 주소가 도로명 타입일때 조합한다.
                  if(data.addressType === 'R'){
                      //법정동명이 있을 경우 추가한다.
                      if(data.bname !== ''){
                          extraAddr += data.bname;
                      }
                      // 건물명이 있을 경우 추가한다.
                      if(data.buildingName !== ''){
                          extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                      }
                      // 조합형주소의 유무에 따라 양쪽에 괄호를 추가하여 최종 주소를 만든다.
                      fullAddr += (extraAddr !== '' ? ' ('+ extraAddr +')' : '');
                  }

                  // 우편번호와 주소 정보를 해당 필드에 넣는다.
                  document.getElementById('postCode').value = data.zonecode; //5자리 새우편번호 사용
                  document.getElementById('roadAddress').value = fullAddr;

                  document.getElementById('detailAddress').focus();
                  // iframe을 넣은 element를 안보이게 한다.
                  // (autoClose:false 기능을 이용한다면, 아래 코드를 제거해야 화면에서 사라지지 않는다.)
                  element_layer.style.display = 'none';
              },
              width : '100%',
              height : '100%'
          }).embed(element_layer);

          // iframe을 넣은 element를 보이게 한다.
          element_layer.style.display = 'block';

          // iframe을 넣은 element의 위치를 화면의 가운데로 이동시킨다.
          initLayerPosition();
      }

      // 브라우저의 크기 변경에 따라 레이어를 가운데로 이동시키고자 하실때에는
      // resize이벤트나, orientationchange이벤트를 이용하여 값이 변경될때마다 아래 함수를 실행 시켜 주시거나,
      // 직접 element_layer의 top,left값을 수정해 주시면 됩니다.
      function initLayerPosition(){
          var width = 300; //우편번호 서비스가 들어갈 element의 width
          var height = 460; //우편번호 서비스가 들어갈 element의 height
          var borderWidth = 5; //샘플에서 사용하는 border의 두께

          // 위에서 선언한 값들을 실제 element에 넣는다.
          element_layer.style.width = width + 'px';
          element_layer.style.height = height + 'px';
          element_layer.style.border = borderWidth + 'px solid';
          // 실행되는 순간의 화면 너비와 높이 값을 가져와서 중앙에 뜰 수 있도록 위치를 계산한다.
          element_layer.style.left = (((window.innerWidth || document.documentElement.clientWidth) - width)/2 - borderWidth) + 'px';
          element_layer.style.top = (((window.innerHeight || document.documentElement.clientHeight) - height)/2 - borderWidth) + 'px';
      }
      </script>
      <div class="form-group" id="divPhoneNumber">
          <label>휴대폰 번호</label>
              <input type="tel" name="phone" class="form-control onlyNumber" id="phoneNumber" data-rule-required="true" value="<?php echo $user_phone;?>" maxlength="11">
      </div>
      <div class="form-group" id="divShipMessage">
          <label>배송 메세지</label>
              <input type="text" style="height:50px;" name="shipMessage" class="form-control" id="shipMessage" data-rule-required="true" maxlength="50">
      </div>
    </div>
<div class="form-group">
  <div class="paymentBtn">
  <button id="payBtn" class="payBtn">결제하기</button>
  </div>
</div>
 <!-- </form> -->

 <script>
     $("#paBtn").click(function () {
         var IMP = window.IMP; // 생략가능
         IMP.init('imp26380681');
         // 'iamport' 대신 부여받은 "가맹점 식별코드"를 사용
         // i'mport 관리자 페이지 -> 내정보 -> 가맹점식별코드
         IMP.request_pay({
             pg: 'inicis', // version 1.1.0부터 지원.
             /*
                 'kakao':카카오페이,
                 html5_inicis':이니시스(웹표준결제)
                     'nice':나이스페이
                     'jtnet':제이티넷
                     'uplus':LG유플러스
                     'danal':다날
                     'payco':페이코
                     'syrup':시럽페이
                     'paypal':페이팔
                 */
             pay_method: 'card',
             /*
                 'samsung':삼성페이,
                 'card':신용카드,
                 'trans':실시간계좌이체,
                 'vbank':가상계좌,
                 'phone':휴대폰소액결제
             */
             merchant_uid: 'merchant_' + new Date().getTime(),
             /*
                 merchant_uid에 경우
                 https://docs.iamport.kr/implementation/payment
                 위에 url에 따라가시면 넣을 수 있는 방법이 있습니다.
                 참고하세요.
                 나중에 포스팅 해볼게요.
              */
             name: '<?php echo $cart_title;?>',
             //결제창에서 보여질 이름
             amount: 100,
             //가격
             buyer_email: '<?php echo $user_email;?>',
             buyer_name: '구매자이름',
             buyer_tel: '010-1234-5678',
             buyer_addr: '서울특별시 강남구 삼성동',
             buyer_postcode: '123-456',
             m_redirect_url: 'https://www.yourdomain.com/payments/complete'
             /*
                 모바일 결제시,
                 결제가 끝나고 랜딩되는 URL을 지정
                 (카카오페이, 페이코, 다날의 경우는 필요없음. PC와 마찬가지로 callback함수로 결과가 떨어짐)
                 */
         }, function (rsp) {
             console.log(rsp);
             if (rsp.success) {

               $.post("a_order_ok.php",
               {
                 name : $("#name").val(),
                 phone : $("#phoneNumber").val(),
                 postcode : $("#postCode").val(),
                 roadaddress : $("#roadAddress").val(),
                 detailaddress : $("#detailAddress").val(),
                 message : $("#shipMessage").val(),
                 ordernum : '<?php echo $ordernum;?>'
                },
                           function(returnedData){
                             // location.href = "a_payment_completed.php";
                           }).fail(function(){
                             alert("실패");
                           });

                           // $.post("a_payment_completed.php",
                           // {
                           //   name : $("#name").val(),
                           //   phone : $("#phoneNumber").val(),
                           //   postcode : $("#postCode").val(),
                           //   roadaddress : $("#roadAddress").val(),
                           //   detailaddress : $("#detailAddress").val(),
                           //   message : $("#shipMessage").val(),
                           //   ordernum : '<php echo $ordernum;?>'
                           //  },
                           //             function(returnedData){
                           //               location.href = "a_payment_completed.php";
                           //             }).fail(function(){
                           //               alert("실패");
                           //             });
                 // var msg = '결제가 완료되었습니다.';
                 // msg += '고유ID : ' + rsp.imp_uid;
                 // msg += '상점 거래ID : ' + rsp.merchant_uid;
                 // msg += '결제 금액 : ' + rsp.paid_amount;
                 // msg += '카드 승인번호 : ' + rsp.apply_num;
             } else {
                 var msg = '결제에 실패하였습니다.';
                 msg += '에러내용 : ' + rsp.error_msg;
             }


         });
     });
 </script>


 <script>

// $(function(){

  $("#payBtn").click(function () {
    var ordernum = '<?php echo $ordernum;?>';
    $.get("test/order.php", { ordernum : ordernum },
  function(data){
    alert("Data Loaded: " + data);
    location.href = "test/order.php";
  });

    // $.post("a_payment_completed.php",
    // {
    //   ordernum : '<?php echo $ordernum;?>'
    //  },
    //             function(returnedData){
    //                location.href = "a_payment_completed.php";
    //             }).fail(function(){
    //               alert("실패");
    //             });

  })


  // $.post("a_order_ok.php",
  // {
  //   name : $("#name").val(),
  //   phone : $("#phoneNumber").val(),
  //   postcode : $("#postCode").val(),
  //   roadaddress : $("#roadAddress").val(),
  //   detailaddress : $("#detailAddress").val(),
  //   message : $("#shipMessage").val(),
  //   ordernum : '<php echo $ordernum;?>'
  //  },
  //             function(returnedData){

                // $.post("a_payment_completed.php",
                // {
                //   name : $("#name").val(),
                //   phone : $("#phoneNumber").val(),
                //   postcode : $("#postCode").val(),
                //   roadaddress : $("#roadAddress").val(),
                //   detailaddress : $("#detailAddress").val(),
                //   message : $("#shipMessage").val(),
                //   ordernum : '<php echo $ordernum;?>'
                //  },
                //             function(returnedData){
                //               location.href = "a_payment_completed.php";
                //             }).fail(function(){
                //               alert("실패");
                //             });

//               }).fail(function(){
//                 alert("실패");
//               });
// });


$("#paBtn").click(function () {
    var IMP = window.IMP; // 생략가능
    IMP.init('imp26380681');
    // 'iamport' 대신 부여받은 "가맹점 식별코드"를 사용
    // i'mport 관리자 페이지 -> 내정보 -> 가맹점식별코드
    IMP.request_pay({
        pg: 'inicis', // version 1.1.0부터 지원.
        /*
            'kakao':카카오페이,
            html5_inicis':이니시스(웹표준결제)
                'nice':나이스페이
                'jtnet':제이티넷
                'uplus':LG유플러스
                'danal':다날
                'payco':페이코
                'syrup':시럽페이
                'paypal':페이팔
            */
        pay_method: 'card',
        /*
            'samsung':삼성페이,
            'card':신용카드,
            'trans':실시간계좌이체,
            'vbank':가상계좌,
            'phone':휴대폰소액결제
        */
        merchant_uid: 'merchant_' + new Data().getTime(),
        /*
            merchant_uid에 경우
            https://docs.iamport.kr/implementation/payment
            위에 url에 따라가시면 넣을 수 있는 방법이 있습니다.
            참고하세요.
            나중에 포스팅 해볼게요.
         */
         name: '공공칠빵',

         // name: '<php echo $cart_title;?>',
        //결제창에서 보여질 이름
        amount: 100,
        //가격
        buyer_email: '<?php echo $user_email;?>',
        buyer_name: $("#name").val(),
        buyer_tel: $("#phoneNumber").val(),
        buyer_addr: $("#roadAddress").val(),
        buyer_postcode: $("#postCode").val(),
        m_redirect_url: 'https://www.yourdomain.com/payments/complete'
        /*
            모바일 결제시,
            결제가 끝나고 랜딩되는 URL을 지정
            (카카오페이, 페이코, 다날의 경우는 필요없음. PC와 마찬가지로 callback함수로 결과가 떨어짐)
            */
    }, function (rsp) {
        console.log(rsp);
        if (rsp.success) {
            var msg = '결제가 완료되었습니다.';
            msg += '고유ID : ' + rsp.imp_uid;
            msg += '상점 거래ID : ' + rsp.merchant_uid;
            msg += '결제 금액 : ' + rsp.paid_amount;
            msg += '카드 승인번호 : ' + rsp.apply_num;
        } else {
            var msg = '결제에 실패하였습니다.';
            msg += '에러내용 : ' + rsp.error_msg;
        }
        // alert(msg);

        $.post("a_order_ok.php",
        {
          name : $("#name").val(),
          phone : $("#phoneNumber").val(),
          postcode : $("#postCode").val(),
          roadaddress : $("#roadAddress").val(),
          detailaddress : $("#detailAddress").val(),
          message : $("#shipMessage").val(),
          ordernum : '<?php echo $ordernum;?>'
         },
                    function(returnedData){
                      alert(returnedData);
                      // location.href = "a_payment_completed.php";
                    }).fail(function(){
                      alert("실패");
                    });

                    // $.post("a_payment_completed.php",
                    // {
                    //   name : $("#name").val(),
                    //   phone : $("#phoneNumber").val(),
                    //   postcode : $("#postCode").val(),
                    //   roadaddress : $("#roadAddress").val(),
                    //   detailaddress : $("#detailAddress").val(),
                    //   message : $("#shipMessage").val(),
                    //   ordernum : '<php echo $ordernum;?>'
                    //  },
                    //             function(returnedData){
                    //               location.href = "a_payment_completed.php";
                    //             }).fail(function(){
                    //               alert("실패");
                    //             });

    });
 });

// })

// $('.payBtn').click(function(){
//   var IMP = window.IMP; // 생략가능
//   IMP.init('imp26380681'); // 자신의 "가맹점 식별코드"
//   // IMP.request_pay(param, callback) 호출
//   IMP.request_pay({ // param
//       pg: 'kakao',
//       pay_method: 'card',
//       merchant_uid: 'merchant_' + new Data().getTime(),
//       name: '주문명_결제테스트',
//       amount: "3000",
//       // buyer_email: "<php echo $user_phone;?>",
//       buyer_name: "김상상",
//       buyer_tel: "01011111111",
//       buyer_addr: "서울시 강남구 도봉봉아파트 1001동 1001호",
//       buyer_postcode: "94511"
//       // m_redirect_url: "https://www.yourdomain.com/payments/complete"
//       // merchant_uid: "<php $unique;?>",
//       // name: "<php echo $cart_title;?>",
//       // amount: document.form.orderprice2.value,
//       // // buyer_email: "<php echo $user_phone;?>",
//       // buyer_name: "<php echo $user_name;?>",
//       // buyer_tel: "<php echo $user_phone;?>",
//       // buyer_addr: "<php echo $user_roadaddress;?><php echo $user_detailaddress;?>",
//       // buyer_postcode: "<php echo $user_postcode;?>"
//   }, function (rsp) { // callback
//     if (rsp.success) { // 결제 성공 시: 결제 승인 또는 가상계좌 발급에 성공한 경우
//       var msg = '성공';
//    // jQuery로 HTTP 요청
//    // jQuery.ajax({
//    //     url: "https://www.myservice.com/payments/complete", // 가맹점 서버
//    //     method: "POST",
//    //     headers: { "Content-Type": "application/json" },
//    //     data: {
//    //         imp_uid: rsp.imp_uid,
//    //         merchant_uid: rsp.merchant_uid
//    //     }
//    // }).done(function (data) {
//    //   // 가맹점 서버 결제 API 성공시 로직
//    // })
//    } else {
//    alert("결제에 실패하였습니다. 에러 내용: " +  rsp.error_msg);
//    }
//           // 결제 실패 시 로직,
//           ...
//    alert(msg);
//   });
// })

</script>
 </body>
