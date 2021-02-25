<?php
include("a_top_menu.php");
 ?>
 <style>

 .myMenu {
   margin-left: -750px;
        margin-top: 153px;
        width: 160px;
        margin-bottom: 20px;
        float: left;
        border: 1px solid #bcbcbc;
      }

  .myMenu ul {
    font-size: 13px;
    list-style: none;
    padding-left: 0px;
    margin-left: 25px;
  }

  .myMenu li {
    margin-top: 3px;
  }

  .myMenu a {
      text-decoration: none;
      color: black;
  }

  .myMenu_title {
    margin-top: 15px;
    font-size: 14px;
    margin-left: 25px;
  }

  .shipping_process {
    margin-left: 32.7%;
    margin-top: 200px;
    width: 820px;
    height: 150px;
    background-color: black;
    color: white;
  }

  .order_list { /*구매내역부터*/
    margin-left: 160px;
  }

.list_title {
  height: 30px;
  text-align: center;
  font-size: 17px;
  width: 130px;
  margin-top: 50px;
  margin-left: 450px;
  /* border-top: 1px solid gray;
  border-left: 1px solid gray;
  border-right: 1px solid gray; */
}
  .listwrapper {
    color:black;
    margin-left: 470px;
    margin-top: 30px;
    width: 700px;
    text-align: left;
  }

  .iteminfo {
    width: 20%;
    float:left;
    text-align: center;
    /* margin-left: 480px;
    display: inline-block; */
  }

  .listitem {
    width: 50%;
    height: 80px;
    float: left;
    text-align: left;
    }

    .shipping_state {
      width: 15%;
      float: right;
      margin-right: 30px;
      text-align: center;
    }

    .shipping_state p {
     margin-top: 30px;
    }

    .listitem p {
      display: inline-block;
    }

    .listitem img{
    width: 60px;
    height: 80px;
    border: 1px solid #cecece;
    margin-left: 35px;
    text-align: center;
    margin-top: -50px;
    }

    /* .price {
      margin-top: 23px;
      float:right;
    } */

    .product_info {
      font-size:15px;
      margin-left:40px;
      display: inline-block;
      margin-top: 10px;
    }

    .shippingBtn {
       width: 15%;
       float: right;
       margin-bottom: -25px;
       margin-right: -220px;
       text-align: center;
    }

    .shippingBtn button {
    }

    .shipping_process p {
     width: 24%;
     margin-bottom: 3px;
    }

  .mypage {
    margin-top: 20px;
    text-align: center;
    font-size: 18px;
  }

  .vl {
    border-left: 1px solid white;
    height: 70px;
    display:inline-block;
  }

  .product_title {
    /* float:left; */
    display:inline-block;
    font-size:16px;
    height: 50px;
    /* font-weight: bold; */
    margin-left: 10px;
  }

  /* #modal .modal_layer {
  position:fixed;
  top:0;
  left:0;
  width:100%;
  height:100%;
  background:rgba(0, 0, 0, 0.5);
  z-index:-1;
  } */

#modal {
display: none;
position: fixed;
z-index: 1;
top:0;
left:0;
width:100%;
height:100%;
overflow: scroll;
background-color: rgb(0,0,0);
background-color: rgba(0, 0, 0, 0.5);
}

.button {
margin-left: 23%;
}

#modal button {
display:inline-block;
width:100px;
}

.modal_content {
width:420px;
margin:10% auto;
padding:20px;
background:#fff;
border:1px solid #666;
}


.rating {
    float:left;
    display: inline-block;
  }

  /* :not(:checked) is a filter, so that browsers that don’t support :checked don’t
    follow these rules. Every browser that supports :checked also supports :not(), so
    it doesn’t make the test unnecessarily selective */
  .rating:not(:checked) > input {
      position:absolute;
      top:-9999px;
      clip:rect(0,0,0,0);
  }

  .rating:not(:checked) > label {
      float:right;
      width:1em;
      /* padding:0 .1em; */
      overflow:hidden;
      white-space:nowrap;
      cursor:pointer;
      font-size:200%;
      /* line-height:1.2; */
      color:#ddd;
  }

  .rating:not(:checked) > label:before {
      content: '★ ';
  }

  .rating > input:checked ~ label {
      color: #FFCC00;

  }

  .rating:not(:checked) > label:hover,
  .rating:not(:checked) > label:hover ~ label {
    color: #FFCC00;

  }

  .rating > input:checked + label:hover,
  .rating > input:checked + label:hover ~ label,
  .rating > input:checked ~ label:hover,
  .rating > input:checked ~ label:hover ~ label,
  .rating > label:hover ~ input:checked ~ label {
    color: #FFCC00;

  }

  .rating > label:active {
      position:relative;
      top:2px;
      left:2px;
  }

  .container {
    margin-top: 20px;
    display: inline-block;
  }
  .review_photo label {
    margin-top: 30px;
    margin-bottom: 20px;
    display: inline-block;
    padding: .5em .75em;
    color: #999;
    font-size: inherit; line-height: normal;
    vertical-align: middle; background-color: #fdfdfd;
    cursor: pointer; border: 1px solid #ebebeb; border-bottom-color: #e2e2e2;
    border-radius: .25em;
   }

  .review_photo input[type="file"] {
     position: absolute;
     width: 1px; height: 1px;
     padding: 0; margin: -1px; overflow: hidden;
     clip:rect(0,0,0,0);
     border: 0; }

     .review_input {
       /* margin-top: -30px; */
     }

.img_wrap {
display: none;
width: 100px; margin-top: 50px;
margin-bottom: 50px;
     }

.img_wrap img {
max-width: 100%;
     }

h4 {
margin-left: 20px;
}

/* .modal_body {
  margin-top: -300px;
} */
 </style>


 <div class="myMenu">
 <div class="mypage">
   <b><?php echo $user_id;?> 님</b>
 </div>
 <p style="margin-top: 30px;" class="myMenu_title"><b>주문배송</b></p>
 <ul>
   <li><a href="a_order_list.php">구매내역</a></li>
   <li>취소/환불내역</li>
 </ul>
 <hr class="my_line" width="5%" border="5px">
<p class="myMenu_title"><b>문의내역</b></p>
 <ul>
   <li>문의/답변내역</li>
 </ul>
 <hr class="my_line" width="5%" border="5px">
 <p class="myMenu_title"><b>회원정보</b></p>
  <ul>
    <li>회원정보수정</li>
  </ul>
 <hr class="my_line" width="5%" border="5px">
 </div>

 <div class="shipping_process">
   <h3><b><p style="margin-left: 20px; padding-top:20px; margin-bottom:20px; width:820px;">주문현황</p></b></h3>
   <hr style="color:white;" class="my_line" width="100%" border="5px">
   <p style="text-align: center; font-size:16px; display:inline-block;">결제완료</p>
   <!-- <div class="vl"></div> -->
   <p style="font-size:16px; text-align: center; display:inline-block;">배송중</p>
   <p style="font-size:16px; text-align: center; display:inline-block;">환불/교환중</p>
   <p style="font-size:16px; text-align: center; display:inline-block;">배송완료</p>
   <?php
   $state = "결제완료";
   $sql = mysqli_query($conn,"select * from orderlist where state='$state' AND uid='".$user_idx."'");
   $count = mysqli_num_rows($sql);
   ?>
   <p style="font-size:18px; text-align: center; display:inline-block; margin-top: -3px;"><?php echo $count;?></p>
   <?php
   $state = "배송중";
   $sql = mysqli_query($conn,"select * from orderlist where state='$state' AND uid='".$user_idx."'");
   $count = mysqli_num_rows($sql);
   ?>
   <p style="font-size:18px; text-align: center; display:inline-block;"><?php echo $count;?></p>
   <?php
   $a = "교환요청";
   $sql1 = mysqli_query($conn,"select * from orderlist where state='$a' AND uid='".$user_idx."'");
   $count1 = mysqli_num_rows($sql1);
   $b = "환불요청";
   $sql2 = mysqli_query($conn,"select * from orderlist where state='$b' AND uid='".$user_idx."'");
   $count2 = mysqli_num_rows($sql2);
   $c = "교환중";
   $sql3 = mysqli_query($conn,"select * from orderlist where state='$c' AND uid='".$user_idx."'");
   $count3 = mysqli_num_rows($sql3);
   $d = "환불중";
   $sql4 = mysqli_query($conn,"select * from orderlist where state='$d' AND uid='".$user_idx."'");
   $count4 = mysqli_num_rows($sql4);
   $count = $count1 + $count2 + $count3 + $count4;
   ?>
   <p style="font-size:18px; text-align: center; display:inline-block;"><?php echo $count;?></p>
   <?php
   $state = "배송완료";
   $sql = mysqli_query($conn,"select * from orderlist where state='$state' AND uid='".$user_idx."'");
   $count = mysqli_num_rows($sql);
   ?>
   <p style="font-size:18px; text-align: center; display:inline-block;"><?php echo $count;?></p>
 </div>



<div class="order_list">
  <div class="list_title">
    <b><p>상품 구매내역</p></b>
  </div>
  <hr style="margin-left: 448px;" class="my_list_line" width="822px;" border="5px">

  <div class="listwrapper">

  <?php

  $sql = mysqli_query($conn,"select * from orderlist where uid='".$user_idx."'");

  while($shopinfo = $sql->fetch_array())
  {
  $order_idx = $shopinfo['idx'];
  $order_pid = $shopinfo['pid'];
  $order_pic = $shopinfo['rep_picture'];
  $order_title = $shopinfo['title'];
  $order_price = $shopinfo['price'];
  $order_num = $shopinfo['num'];
  $order_state = $shopinfo['state'];
  $order_date = $shopinfo['date'];
  $order_ordernum = $shopinfo['ordernum'];
  ?>

  <div class="iteminfo">
  <p><?php echo $order_date;?></p>
  <p>주문번호</p>
  <p><?php echo $order_ordernum;?></p>
  </div>

     <div class="listitem">
      <img class="listimg" src="uploads/<?php echo $order_pic;?>" />

      <div class="product_info">
         <p class="listtitle"><?php echo $order_title;?> </p><br />
         <b><?php echo number_format($order_price)?>원</b><br />
         <p style="font-size:12px;">구매 수량 <?php echo $order_num;?>개</p><br />
      </div>

      <!-- <div class="price">
        <b><input style="border:none; background-color:white;" type="text" value="28000" class="sum" name="sum" size="6" readonly>원</b>
      </div> -->

      <!-- <input style="margin-top:23px; float:right; margin-right:70px; border:none; background-color:white; display:inline-block;" class="count" type="text" name="amount" value="3" size="3"> -->


  </div>

  <div class="shipping_state">
    <p><?php echo $order_state;?></p>
    <!-- <p>롯데택배</p>
    <p>231155243560</p> -->
  </div>



  <div class="shippingBtn">
  <?php
  if($order_state == "결제완료") { ?>
    <button value="<?php echo $order_idx;?>" class="cancle" id="cancle" style="margin-top:23px;">결제취소</button>
    <button value="<?php echo $order_pid;?>" style="display:none;" class="reviewBtn" id="reviewBtn">리뷰쓰기</button>
    <button value="<?php echo $order_pid;?>" style="display:none;" class="viewBtn" id="viewBtn">리뷰보기</button>
  <?php } else if ($order_state == "배송중" or $order_state == "배송완료") {
    $review_check = mysqli_query($conn,"select * from review where pid='$order_pid' AND uid='".$user_idx."'");
    $review_count = mysqli_num_rows($review_check);
    if($review_count > 0){ ?>
    <button value="<?php echo $order_pid;?>" style="display:none;" class="reviewBtn" id="reviewBtn">리뷰쓰기</button>
    <button value="<?php echo $order_idx;?>" class="exchange" id="exchange" style="margin-top:-8px;">교환요청</button>
    <button value="<?php echo $order_idx;?>" class="refund" id="refund">환불요청</button>
    <button value="<?php echo $order_pid;?>" onclick="location.href='a_product_inner.php?idx=<?php echo $order_pid;?>'" class="viewBtn" id="viewBtn">리뷰보기</button>
  <?php } else { ?>
    <button value="<?php echo $order_idx;?>" class="exchange" id="exchange" style="margin-top:-8px;">교환요청</button>
    <button value="<?php echo $order_idx;?>" class="refund" id="refund">환불요청</button>
    <button value="<?php echo $order_pid;?>" class="reviewBtn" id="reviewBtn">리뷰쓰기</button>
  <?php } ?>
  <?php } else if ($order_state == "취소요청") {?>
    <button value="<?php echo $order_idx;?>" class="cancle" id="cancle" style="margin-top:23px;">취소철회</button>
    <button value="<?php echo $order_pid;?>" style="display:none;" class="reviewBtn" id="reviewBtn">리뷰쓰기</button>
    <button value="<?php echo $order_pid;?>" style="display:none;" class="viewBtn" id="viewBtn">리뷰보기</button>
  <?php } else { ?>
    <button value="<?php echo $order_idx;?>" style="display:none;" class="cancle" id="cancle" style="margin-top:23px;">취소철회</button>
    <button value="<?php echo $order_pid;?>" style="display:none;" class="reviewBtn" id="reviewBtn">리뷰쓰기</button>
    <button value="<?php echo $order_pid;?>" style="display:none;" class="viewBtn" id="viewBtn">리뷰보기</button>
  <?php } ?>
  </div>


  <hr style="margin-left: -20px; float:left;" class="list_item_line" width="117%" border="5px">

<?php } ?>
  </div>

</div>



<div id="modal">
  <form type="form" name="form" id="form" action="a_review_ok.php" method="post" enctype="multipart/form-data">
        <div class="modal_content">
          <div class="modal_body">
      <input type="hidden" name="pid" id="product_id"/>
      <input type="hidden" name="uid" id="uid" value="<?php echo $user_idx;?>">
        <h4>리뷰작성</h4>
        <hr />
        <img class="product_img" style="width:80px; display:inline-block;" src="uploads/<?php echo $order_pic;?>" />
        <p class="product_title"><?php echo $order_title;?></p>
        <div class="container">
          <div class="row">
            <p style="margin-left:23px; float:left; display:inline-block;">만족도</p>

          <div style="margin-top:-10px; margin-left:35px;" class="rating">
              <input type="radio" class="stars" id="star5" name="rating" value="5" /><label for="star5" title="Meh">5 stars</label>
              <input type="radio" class="stars" id="star4" name="rating" value="4" /><label for="star4" title="Kinda bad">4 stars</label>
              <input type="radio" class="stars" id="star3" name="rating" value="3" /><label for="star3" title="Kinda bad">3 stars</label>
              <input type="radio" class="stars" id="star2" name="rating" value="2" /><label for="star2" title="Sucks big tim">2 stars</label>
              <input type="radio" class="stars" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
            </div>
          </div>
        </div>

        <script>
        $("input[name=rating]").click(function(){
        var value = $("input[name=rating]:checked").val();
        })
        </script>

        <script>



        var sel_file;

        $(document).ready(function(){

          $("#infile").on("change", handleImgFileSelect);
        });

        function handleImgFileSelect(e) {
          var files = e.target.files;
          var filesArr = Array.prototype.slice.call(files);

          filesArr.forEach(function(f){
            if(!f.type.match("image.*")) {
              alert("확장자는 이미지 확장자만 가능합니다.");
              return;
            }

            sel_file = f;

            var reader = new FileReader();
            reader.onload = function(e){
              $('.img_wrap').show();
              $("#img").attr("src", e.target.result);
            }
            reader.readAsDataURL(f);
          });
        }

        </script>

      <div class="review_input">
        <input style="border: 1px solid lightgray; margin-bottom:5px; width:348px;"placeholder="제목" id="review_title" name="title" />
        <textarea placeholder="최소 10자 ~ 최대 500자 이하 작성 가능" name="text" id="review_text" cols="40" rows="5" autofocus required wrap="hard" maxlength="500"></textarea>
      </div>

      <div class="review_photo">
      <label for="infile">사진등록</label>
      <input type="file" id="infile" name="file">
      </div>
      <div class="img_wrap">
        <img id="img" />
      </div>

      </div>
      <div class="button">
        <button type="button" style="display:inline-block;" id="modal_register_btn">등록</button>
        <button type="button" style="display:inline-block;" id="modal_close_btn">취소</button>
      </div>

    </div>

    <!-- <div class="modal_layer"></div> -->
  </form>

</div>


<script>
$("#modal_register_btn").click(function(){
  // var uid = $("#uid").val();
  // alert(uid);
  // var idx = $("#product_id").val();
  // alert(idx);
  // var star = $("input[name=rating]:checked").val();
  // alert(star);
  //
  // var review = $("#review_text").val();
  // alert(review);
  //
  // var photo = $("input[name=file]")[0].files[0];
  // alert(photo);
  var form = $('#form')[0];

  var data = new FormData(form);

$.ajax({
  data: data,
  type: 'post',
  url: "a_review_ok.php",
  cache: false,
  contentType: false,
  processData: false,
  success: function(data) {
    $("#modal").attr("style", "display:none");
    // $("#img").attr("src", "");
    // $('.stars').val(0);
  },
    error : function(jqXHR, textStatus, errorThrown) {
          alert(textStatus+" "+errorThrown);
    }

});

 var n = $("#product_id").val();
 $(".viewBtn:eq("+n+")").show();
 $(".reviewBtn:eq("+n+")").hide();
})

$("button[id=reviewBtn]").click(function(){
var n = $("button[id=reviewBtn]").index(this);
$("#modal").attr("style", "display:block");
// alert(n);
var idx = $(".reviewBtn:eq("+n+")").val();
// alert(idx);
var img = $(".listimg:eq("+n+")").attr("src");
// alert(img);
var title = $(".listtitle:eq("+n+")").text();
// alert(title);

$("#product_id").val(idx);
$('.product_img').attr("src", img);
$('.product_title').text(title);

});

$("#modal_close_btn").click(function(){
$("#modal").attr("style", "display:none");
$("#img").attr("src", "");
$('.stars').val(0);
});

$("button[id=cancle]").click(function(){
  if(confirm("취소하시겠습니까?")){
  var n = $('.cancle').index(this);
  var value = $(".cancle:eq("+n+")").val();

    $.post("a_state_cancle.php", { idx : value },
                function(returnedData){
                  location.href = "a_order_list.php";
                }).fail(function(){
                  alert("실패");
                });
  }
});

$("button[id=exchange]").click(function(){
  if(confirm("교환하시겠습니까?")){
  var n = $('.exchange').index(this);
  var value = $(".exchange:eq("+n+")").val();

    $.post("a_state_change.php", { idx : value },
                function(returnedData){
                  location.href = "a_order_list.php";
                }).fail(function(){
                  alert("실패");
                });
  }
});

$("button[id=refund]").on('click', function(){
  if(confirm("환불하시겠습니까?")){
  var n = $('#refund').index(this);
  var value = $("#refund:eq("+n+")").val();

    $.post("a_state_refund.php", { idx : value },
                function(returnedData){
                  location.href = "a_order_list.php";
                }).fail(function(){
                  alert("실패");
                });
  }
});
</script>
</body>
