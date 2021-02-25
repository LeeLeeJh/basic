<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<style>
.bms-list-tr {
  clear:both;
  height: 50px;
  border-top:1px solid #dcdcdc;
  cursor: pointer;
  text-align: center;
}
.bms-list-tr-active{
  background:#f6f6f6 !important;
}
.bms-list-tr li{
  float:left;
  padding: 16px 0 0 0px;
  height: 100%;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
</style>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<meta charset="utf-8" />
<title>Expand table rows with jQuery - jExpand plugin</title>
<style>

        /* body { font-family:Arial, Helvetica, Sans-Serif; font-size:0.8em;} */
        #re { border-collapse:collapse; width:700px}
        #re h4 { margin:0px; padding:0px;}
        #re th { background:#7CB8E2 url(header_bkg.png) repeat-x scroll center left; color:#fff; padding:7px 15px; text-align:left; font-size: 13px;}
        #re td { background:#fff none repeat-x scroll center left; color:#000; padding:7px 15px; }
        #re tr.odd td { background:#fff url(row_bkg.png) repeat-x scroll center left; cursor:pointer; }
        #re div.a { background:transparent url(arrows.png) no-repeat scroll 0px -16px; width:16px; height:16px; display:block;}
        #re div.up { background-position:0px 0px;}

</style>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
    $(document).ready(function(){

        $("#re tr:odd").addClass("odd");
        $("#re tr:not(.odd)").hide();
        $("#re tr:first-child").show(); //열머리글 보여주기

        $("#re tr.odd").click(function(){
            $(this).next("tr").toggle();
            $(this).find(".a").toggleClass("up");

        });


    });

</script>
</head>

<body>
  <h1>Demos</h1>
    <p>Demo for <a href="http://www.jankoatwarpspeed.com/post/2009/07/19/Expand-table-rows-with-jQuery-jExpand-plugin.aspx">Expand table rows with jQuery - jExpand plugin</a></p>

    <table id="re">
        <tr>
            <!-- <th width="4%"></th> -->
            <th width="6%" align="center">번호</th>
            <th width="30%" align="left">제목</th>
            <th width="20%" align="center">구매자</th>
            <th width="20%" align="center">날짜</th>
            <th width="20%" align="center">평점</th>
        </tr>
        <tr>
            <!-- <td><div class="a"></div></td> -->
            <td><div class="a"></div>01</td>
            <td>저희 강아지가 좋아하는 간식이에요!</td>
            <td>김태풍</td>
            <td>2019-09-25</td>
            <td>★★★★★</td>
        </tr>
        <tr>
          <td colspan="5">
              단호박케이크 너무 잘먹어요 >ㅅ<
          </td>
        </tr>
        <tr>
            <td><div class="a"></div></td>
            <td>02</td>
            <td>제가 직접 먹어보았습니다ㅎㅎ</td>
            <td>박보틀</td>
            <td>2019-09-25</td>
            <td>★★★★★</td>
        </tr>
        <tr>
          <td colspan="6">
              단호박케이크 너무 맛있어5 >ㅅ<
          </td>
        </tr>
    </table>
    <!-- <em>* sample page</em>

    <br/> -->

</body>
</html>


<!-- <ul class="bms-list-tr">
	<li>가능</li>
</ul>
<section id="show6359" class="show-open" >
  jhjjjjjjjjjjj
</section>

<ul class="bms-list-tr">
	<li>가능</li>
</ul>
<section id="show6359" class="show-open" >
  ddddddddddddddd
</section>

<ul class="bms-list-tr" >
	<li>가능</li>
</ul>
<section id="show6359" class="show-open" >
  ????
</section>



<script>
$(document).ready(function(){
	/*list 안의 내용 열리기 새거 열면 전에꺼 닫히고, 열린거 누르면 다시 닫힘*/
	$(".show-open").css('display','none'); //우선 내용부분을 모두 감춰줍니다
	$(".bms-list-tr").click(function(){ //클릭했을때
		var check = $(this).next().css("display") == "none"; //변수로, 열릴 부분의 display 상태 체크
		$(this).siblings().removeClass('bms-list-tr-active');//클릭하는 부분의 형제들에 배경색을 제거해줍니다
		var except = $(this).next();//선택된부분의 다음(내용)부분만 열리기 위해, 변수를 선언해주는데요. 이는 다음을 보시면 이해가 가실겁니다.
		if(check)// 열릴부분의 display가 none으로 되어있다면,
		{
			$(this).next().css('display','block'); //열릴부분의 display를 block으로 변경해주고,
			$(".show-open").not(except).css('display','none'); //그외의 내용부분(.not() 으로 제어함) 은 display를 none으로 안보이게 변경시킵니다.
			$(this).addClass('bms-list-tr-active');//클릭한 부분에 클래스를 더해 배경색을 보여줍니다.
        }else{ //클릭 2번했을 경우 check는 display block으로 변했기때문에 그때의 상황에 맞춰 상태조절,
			$(this).next().css('display','none'); //선택된 다음 부분의 display를 감춥니다.
			$(this).removeClass('bms-list-tr-active');//선택된 부분의 배경색을 뺍니다.
		}
	});
})
</script> -->
