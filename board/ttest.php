<p class="cartStock">
 <span>구입 수량</span>
 <button type="button" class="plus">+</button>
 <input type="number" class="numBox" min="1" max="${view.gdsStock}" value="1" readonly="readonly"/>
 <button type="button" class="minus">-</button>

 <button type="button" class="plus">+</button>
 <input type="number" class="numBox" min="1" max="${view.gdsStock}" value="1" readonly="readonly"/>
 <button type="button" class="minus">-</button>

 <button type="button" class="plus">+</button>
 <input type="number" class="numBox" min="1" max="${view.gdsStock}" value="1" readonly="readonly"/>
 <button type="button" class="minus">-</button>

 <script>
  $(".plus").click(function(){
   var num = $(".numBox").val();
   var plusNum = Number(num) + 1;

   if(plusNum >= ${view.gdsStock}) {
    $(".numBox").val(num);
   } else {
    $(".numBox").val(plusNum);
   }
  });

  $(".minus").click(function(){
   var num = $(".numBox").val();
   var minusNum = Number(num) - 1;

   if(minusNum <= 0) {
    $(".numBox").val(num);
   } else {
    $(".numBox").val(minusNum);
   }
  });
 </script>

</p>
