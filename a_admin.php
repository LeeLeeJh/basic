<?php
include("db.php");
?>
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="/css/top-menu.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/jquery.number.min.js"></script>

<style>
 .order_list {
   margin-left: 10%;
 }

 .table_title {
   color: white;
 }
</style>

</head>
<body>
<div class="top">
  <div class="wrapper">
    <ul class="top-menu">

       <li class="test"><a href="#none" onclick="location.href='logout.php'"><p>주문내역관리</p></a></li>
       <li class="test"><a href="#"><p>상품관리</p></a></li>
       <li class="test"><a href="#" onclick="location.href='a_cart.php'"><p>회원관리</p></a></li>

    </ul>
  </div>
 </div>

 <div class="order_list">
   <div class="list_title">
     <b><p>상품주문내역</p></b>
   </div>
   <!-- <hr style="float:left;" class="my_list_line" width="1200px;" border="5px"> -->

   <!-- <div class="listwrapper"> -->


   <table width="1200px">
       <tr class="table_title" bgcolor="black" align="center">
         <td><b>번호</b></td>
         <td><b>주문일</b></td>
         <td><b>주문번호</b></td>
         <td><b>상품정보</b></td>
         <td><b>구매자</b></td>
         <td><b>연락처</b></td>
         <td><b>결제상황</b></td>
         <td><b>처리상황</b></td>
         <td><b>업데이트</b></td>
       </tr>


   <?php
   $sql = mysqli_query($conn,"select * from orderlist");

   while($shopinfo = $sql->fetch_array())
   {
   $num++;
   $order_idx = $shopinfo['idx'];
   $order_uid = $shopinfo['uid'];
   $order_pic = $shopinfo['rep_picture'];
   $order_title = $shopinfo['title'];
   $order_price = $shopinfo['price'];
   $order_num = $shopinfo['num'];
   $order_state = $shopinfo['state'];
   $admin_state = $shopinfo['adminstate'];
   $order_date = $shopinfo['date'];
   $order_ordernum = $shopinfo['ordernum'];

   $sql2 = mysqli_query($conn,"select * from memberlist where idx='".$order_uid."'");
   $memberinfo = $sql2->fetch_array();

   $member_name = $memberinfo['name'];
   $member_phone = $memberinfo['phone'];

   ?>



   <tr align="center">
   <td><?php echo $num;?></td>
   <td><?php echo $order_date;?></td>
   <td><?php echo $order_ordernum;?></td>
   <td align="left"><?php echo $order_title;?></td>
   <td><?php echo $member_name;?></td>
   <td><?php echo $member_phone;?></td>
   <td><?php echo $order_state;?></td>
   <td><?php echo $admin_state;?></td>
   <td>
     <select class="category" name="category" style="height:35px;">
     <option value="" selected disabled>-- 선택 --</option>
     <option value="발송완료">발송완료</option>
     <option value="취소승인">취소승인</option>
     <option value="환불승인">환불승인</option>
     <option value="교환제품발송">교환제품발송</option>
   </select>
   <button value="<?php echo $order_idx;?>" id="stateBtn" class="stateBtn">적용</button>
   </td>
   </tr>
   <?php } ?>
     </table>

</div>

<script>
$("button[id=stateBtn]").click(function(){
  var n = $('.stateBtn').index(this);
  var idx = $(".stateBtn:eq("+n+")").val();
  var value = $(".category:eq("+n+")").val();

    $.post("a_order_state.php", {
      category : value,
      idx : idx },
                function(returnedData){
                  location.href = "a_admin.php";
                }).fail(function(){
                  alert("실패");
                });

});

</script>









   <!-- <div class="iteminfo">
   <p><php echo $order_date;?></p>
   <p>주문번호</p>
   <p><php echo $order_ordernum;?></p>
   </div>

      <div class="listitem">
       <img src="uploads/<php echo $order_pic;?>" />

       <div class="product_info">
          <php echo $order_title;?> <br />
          <b><php echo number_format($order_price)?>원</b><br />
          <p style="font-size:12px;">구매 수량 <php echo $order_num;?>개</p><br />
       </div>



   </div>

   <div class="shipping_state">
     <p><php echo $order_state;?></p>
     <p>롯데택배</p>
     <p>231155243560</p>
   </div>

   <div class="shippingBtn">
     <button>결제취소</button>
   </div>
   <hr style="margin-left: -20px; float:left;" class="list_item_line" width="117%" border="5px">
 <php } ?>
   </div>

 </div> -->
