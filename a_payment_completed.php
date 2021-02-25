<?php
include("a_top_menu.php");

$order_num = $_POST['ordernum'];

?>

<style>
button {
  display: inline-block;
}
.shippingInfo {
  margin-top: 15px;
  margin-bottom: 15px;
  width: 600px;
  text-align: left;
  margin-left: 33.5%;
  background-color: #EEE;
  border: 1px solid #CCC;
}
.shippingInfo p {
  margin-top: 20px;
  margin-bottom: 20px;
  margin-left: 30px;
}
</style>

 <b><hr style="margin-top:150px ;" class="payment_top_line" width="50%" align="center" border="10px"></b>

 <center>
   <?php
   $sql = mysqli_query($conn,"select * from orderlist where ordernum='$order_num' AND uid='".$user_idx."'");
   $count = mysqli_num_rows($sql);
   $cnt = $count - 1;
   $shopinfo = $sql->fetch_array();
   $title = $shopinfo['title'];

   ?>
 <p style="margin-top:150px; "><h3>주문이 완료되었습니다.</h3></p>
 <?php
 if($count == 1){ ?>
   <p style=""><?php echo $title;?></p>
<?php
 } else { ?>
 <p style=""><?php echo $title;?> 외 <?php echo $cnt;?>건</p>
 <?php
} ?>
 주문번호 : <b><?php echo $order_num;?></b></br>
 </center>
 <div class="shippingInfo">
 <p style="font-size:20px;"><b>배송정보</b></p>
 <p><b>수취인</b> : <?php echo $_POST['name'];?></p>
 <p><b>연락처</b> : <?php echo $_POST['phone'];?></p>
 <p><b>배송지</b> : <?php echo $_POST['roadAddress'];?> <?php echo $_POST['detailAddress'];?></p>
 <p><b>배송메세지</b> : <?php echo $_POST['shipMessage'];?></p>

 </div>
 <center>
 <button onclick="location.href='a_order_list.php'">주문내역보기</button>
 <button>메인으로가기</button>
 </center>



 <b><hr style="margin-top:150px ;" class="payment_bottom_line" width="50%" align="center" border="10px"></b>
