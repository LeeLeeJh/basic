<html>
<head>
	<title>BLUEB</title>
</head>

<body onload="init();">

	<!-- <script>
	var sell_price = [];
	var amount = [];
	$("input[name=sum]").each(function(idx)){
		amount.push($("input[name=sell_price]").val());
	});
	</script> -->

<script language="JavaScript">


var sell_price = [];
var amount = [];


function init () {
	var index = document.querySelectorAll("input[name=sell_price]");
	for(int i=0; i<index.length; i++){
	sell_price = document.form.sell_price[i].value;
	amount = document.form.amount[i].value;
	document.form.sum[i].value = sell_price;
	change();
}
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
	hm = document.form.amount[i];
	sum = document.form.sum[i];

		if (hm.value < 0) {
			hm.value = 0;
		}
	sum.value = parseInt(hm.value) * sell_price;
}

</script>

<form name="form" method="get">
수량 : <input type=hidden name="sell_price" value="5500">
<input type="text" name="amount" value="1" size="3" onchange="change();">
<input type="button" value=" + " onclick="add();"><input type="button" value=" - " onclick="del();"><br>

금액 : <input type="text" name="sum" size="11" readonly>원
</form>

<form name="form" method="get">
수량 : <input type=hidden name="sell_price" value="5500">
<input type="text" name="amount" value="1" size="3" onchange="change();">
<input type="button" value=" + " onclick="plus(this);"><input type="button" value=" - " onclick="del();"><br>

금액 : <input type="text" name="sum" size="11" readonly>원
</form>


</body>
