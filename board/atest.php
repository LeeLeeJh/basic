<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>



<form name="form" method="get">

<div class="total_price">
 <b><input style="border:none; background-color:white;" type="number" value="0" class="sum" name="sum" size="6"></b>
</div>

 <div class="numBtn">
<input type=hidden type="number" class="sell_price" name="sell_price" value=5000>
<input class="minus" type="button" value=" - " onclick="del();">
<input class="count" type="number" name="amount" value=1 size="3" onchange="change();">
<input class="plus" type="button" value=" + " onclick="add();"><br>
 </div>

 <div class="total_price">
  <b><input style="border:none; background-color:white;" type="number" value=0 class="sum" name="sum" size="6"></b>
 </div>

  <div class="numBtn">
 <input type=hidden type="number" class="sell_price" name="sell_price" value=5000>
 <input class="minus" type="button" value=" - " onclick="del();">
 <input class="count" type="number" name="amount" value=1 size="3" onchange="change();">
 <input class="plus" type="button" value=" + " onclick="add();"><br>
  </div>

 <script>
 $(function(){
 $('.plus').click(function(){
   var n = $('.plus').index(this);
   var sum = $(".sum:eq("+n+")").val();

   // if(isNaN(sum)){
   //  var sum = 0;
   // }

   // var price = $(".sell_price:eq("+n+")").val();
   // price = parseInt(price);
   // var num = $(".count:eq("+n+")").val();
   // num = parseInt(num);
   // var numm = Number(num) + Number(1);
   // num = $(".count:eq("+n+")").val(numm);
   // num = parseInt(num);
   // var numm2 = parseInt(num*price);
   // alert(numm2);
   // sum = $(".sum:eq("+n+")").val(numm2);
   // sum = parseInt(sum);
   // num = parseInt(num);
   // alert(num);
   // sum = parseInt(sum);
  // alert(sum);

   var price = $(".sell_price:eq("+n+")").val();
   price = Number(price);
   var num = $(".count:eq("+n+")").val();
   num = $(".count:eq("+n+")").val(num*1+1);
   var num = $(".count:eq("+n+")").val();
   sum = $(".sum:eq("+n+")").val(num*price);


   // $(".sum:eq("+n+")").append(sum);



   // var num = $(".numBox").val();
   // var plusNum = Number(num) + 1;
   // alert(Number(num*price));
 });

 $('.minus').click(function(){
   var n = $('.minus').index(this);
   var num = $(".count:eq("+n+")").val();
   if(num > 1){
   var sum = $(".sum:eq("+n+")").val();
   var price = $(".sell_price:eq("+n+")").val();
   // price = Number(price);
   var num = $(".count:eq("+n+")").val();
   num = $(".count:eq("+n+")").val(num*1-1);
   var num = $(".count:eq("+n+")").val();
   sum = $(".sum:eq("+n+")").val(num*price);
   }
 });

});

 </script>

 <hr class="cart_cart_line" width="100%" border="5px">

</form>

<!-- <div id="goods_list">
  <form>
    <table align='' border='1' cellspacing='0' cellpadding='0'>
      <tr>
        <td>선택</td>
        <td>박스</td>
        <td>입수</td>
        <td>수량</td>
      </tr>
      <tr>
        <td><input type="checkbox" name="checkbox" value="1" style="border:0"></td>
        <td>
          <table>
            <tr>
              <td><input type="text" name="num" value="1" id="" class="num"/></td>
              <td>
                <div>
                  <img src="http://placehold.it/10x10" alt="" width="10" height="10" class="bt_up"/>
                </div>
                <div>
                  <img src="http://placehold.it/10x10" alt="" width="10" height="10" class="bt_down" />
                </div>
              </td>
            </tr>
          </table>
        </td>
        <td>12</td>
        <td><div class="total_num">12</div></td>
      </tr>
    </table>
  </form>

  <form>
    <table align='' border='1' cellspacing='0' cellpadding='0'>
      <tr>
        <td>선택</td>
        <td>박스</td>
        <td>입수</td>
        <td>수량</td>
      </tr>
      <tr>
        <td><input type="checkbox" name="checkbox" value="1" style="border:0"></td>
        <td>
          <table>
            <tr>
              <td><input type="text" name="num" value="1" id="" class="num"/></td>
              <td>
                <div>
                  <img src="http://placehold.it/10x10" alt="" width="10" height="10" class="bt_up"/>
                </div>
                <div>
                  <img src="http://placehold.it/10x10" alt="" width="10" height="10" class="bt_down" />
                </div>
              </td>
            </tr>
          </table>
        </td>
        <td>12</td>
        <td><div class="total_num">12</div></td>
      </tr>
    </table>
  </form>

  <form>
    <table align='' border='1' cellspacing='0' cellpadding='0'>
      <tr>
        <td>선택</td>
        <td>박스</td>
        <td>입수</td>
        <td>수량</td>
      </tr>
      <tr>
        <td><input type="checkbox" name="checkbox" value="1" style="border:0"></td>
        <td>
          <table>
            <tr>
              <td><input type="text" name="num" value="1" id="" class="num"/></td>
              <td>
                <div>
                  <img src="http://placehold.it/10x10" alt="" width="10" height="10" class="bt_up"/>
                </div>
                <div>
                  <img src="http://placehold.it/10x10" alt="" width="10" height="10" class="bt_down" />
                </div>
              </td>
            </tr>
          </table>
        </td>
        <td>12</td>
        <td><div class="total_num">12</div></td>
      </tr>
    </table>
  </form>
</div> -->
