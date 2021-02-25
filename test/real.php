<!-- <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<style>
table {
  border-top: 2px solid lightgray;
  border-collapse: collapse;
}

td {
  border-bottom: 1px solid lightgray;
  padding: 5px;
}
</style>
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
    <table id="re" width="1000px">
        <tr align="center">
            <!-- <th width="4%"></th> -->
            <td width="10%">번호</td>
            <td width="45%">제목</td>
            <td width="15%">작성자</td>
            <td width="15%">작성일</td>
            <td width="15%">평점</td>
        </tr>
        <tr align="center">
            <!-- <td><div class="a"></div></td> -->
            <td width="5%"><div class="a"></div>01</td>
            <td align="left" width="50%">저희 강아지가 좋아하는 간식이에요!</td>
            <td width="15%">김태풍</td>
            <td width="15%">2019-09-25</td>
            <td width="15%">★★★★★</td>
        </tr>
        <tr>
          <td colspan="5">
              단호박케이크 너무 잘먹어요 >ㅅ<
          </td>
        </tr>
        <tr align="center">
          <td width="5%"><div class="a"></div>02</td>
          <td align="left" width="50%">연유라떼 먹고싶다??</td>
          <td width="15%">고혜림</td>
          <td width="15%">2019-09-25</td>
          <td width="15%">★★★★★</td>
        </tr>
        <tr>
          <td colspan="5">
            <center>
            <img style="margin-top:30px;" width="50%" src="https://i.ytimg.com/vi/LH0QqBajPRU/maxresdefault.jpg" />
          </center><br />
              <p style="margin-bottom:30px;"> 연유라떼 맛있어 초코가 더 맛있어 >ㅅ<</p>
          </td>
        </tr>
    </table>

</body>
</html>
