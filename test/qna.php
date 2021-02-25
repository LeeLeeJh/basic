<style>
.table_title {
  color: white;
}

#review {
   border-collapse:collapse; width:800px;
 }
#review th {
   background:#7CB8E2 url(header_bkg.png) repeat-x scroll center left;
   color:#fff; padding:7px 15px; text-align:left;
 }
#review td {
   background:#C7DDEE none repeat-x scroll center left;
   color:#000; padding:7px 15px;
 }
#review tr.odd td {
   background:#fff url(row_bkg.png) repeat-x scroll center left;
   cursor:pointer;
 }
#review div.content {
   background:transparent url(arrow.png) no-repeat scroll 0px -16px;
   width:16px; height:16px; display:block;
 }
#review div.up {
   background-position:0px 0px;
 }
</style>


<!-- <span id="test" style="CURSOR: hand" onclick="if(plain.style.display=='none')
{plain.style.display=''; test.innerText = '저희 강아지가 참 잘먹어요~!'} else {plain.style.display = 'none';
test.innerText = '누르면 펼치기'}"> 저희 강아지가 참 잘먹어요~! </span>
<div id="plain" style="display:none">
  <HR>여기에 내용을 입력하면 펼쳤을 때 표시됩니다.<HR>
</div> -->

<!-- <span id="test" style="CURSOR: hand" onclick="if(plain.style.display=='none') {plain.style.display='';test.innerText='➤ 누르면 접기'} else {plain.style.display='none';test.innerText='➤ 누르면 펼치기'}">➤ 누르면 펼치기</span> -->
<!-- <div id="plain" style="display: none;"><hr>여기에 내용을 입력하시면 펼쳤을 시 표시됩니다.<hr></div> -->





<!-- <hr class="cart_cart_line" width="100%" border="5px">
<span id="test" style="CURSOR: hand" onclick="if(plain.style.display=='none')
{plain.style.display='';} else {plain.style.display = 'none';}"> 저희 강아지가 참 잘먹어요~! </span>
<hr class="cart_cart_line" width="100%" border="5px">

<div id="plain" style="display:none">
  다음에 또 주문할게요~~★<HR>
</div> -->
<script>
    $(document).ready(function(){

        $("#review tr:odd").addClass("odd");
        $("#review tr:not(.odd)").hide();
        $("#review tr:first-child").show(); //열머리글 보여주기

        $("#review tr.odd").click(function(){
            $(this).next("tr").toggle();
            $(this).find(".content").toggleClass("up");

        });


    });

</script>

<table id="review">
    <tr>
      <th width="4%"></th>
      <th>번호</th>
      <th>제목</th>
      <th>구매자</th>
      <th>날짜</th>
      <th>평점</th>
    </tr>

    <tr>
      <td><div class="content"></div></td>
      <td>1</td>
      <td>저희 강아지가 좋아하는 간식이에요!</td>
      <td>김태풍</td>
      <td>2019-09-25</td>
      <td>★★★★★</td>
    </tr>
    <tr>
        <td colspan="6">
            단호박케이크 너무 잘먹어요 >ㅅ<
        </td>
    </tr>

</table>

<table id="report">
    <tr>
        <th width="4%"></th>
        <th width="20%" align="center">과목번호</th>
        <th width="50%" align="center">과목명</th>
        <th width="26%" align="center">과목구분</th>

    </tr>
    <tr>
        <td><div class="arrow"></div></td>
        <td>0101</td>
        <td>자바 프로그래밍</td>
        <td>전공필수</td>

    </tr>
    <tr>
        <td colspan="5">

            Java는 뛰어난 객체 지향 특성과 플랫폼 독립성을 가진 프로그래밍 언어로 인터넷 기반의 프로그램과 응용 프로그램 개발에 널리 사용되고 있다. 본 교과의 목적은 Java 언어의 기능과 특성을 이해하고 기초적 Java 프로그래밍 기술을 익히는 것이다. 차후 Java 언어를 이용한 고급 프로그래밍 기술을 학습하려면 반드시 수강하여야 한다. 선수과목은 객체지향 프로그래밍으로 객체지향 개념과 객체지향 언어의 기본 지식을 갖추고 있어야 한다. 교재를 중심으로 Java 언어의 기초적 프로그래밍 기술을 이해하고 나아가 최신 기술들인 GUI, 입출력, 멀티스레딩, 예외처리, 데이터베이스 연동 및 네트워크 프로그래밍 등의 내용을 학습하도록 한다. 예제로 주어지는 소스 코드를 분석하며 실습 위주의 강의를 통해 학생 스스로 원리를 이해하고 문제를 풀고 응용할 수 있는 능력과 기회를 제공하도록 한다.

        </td>
    </tr>
