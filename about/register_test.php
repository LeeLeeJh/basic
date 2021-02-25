<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>회원가입</title>
    <link rel="stylesheet" href="/css/top-menu.css">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" />
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/latest/css/bootstrap.min.css"> -->

    <style>

.container .title {
  margin-top: 150px;
  margin-left: 46%;
}

.form-horizontal {
  margin-top: 50px;
  margin-left: 250px;

}

.form-group input {
  width: 400px;
}

.radio-inline input {
  width: 50px;
}

.form-control {
  width: 400px;
}

.radio input {
   width: 50px;
}

.registerBtn {
  margin-top: 20px;
  margin-left: 50%;
}

.container .form-control .zipCode {
  width: 50px;
}
    </style>

  </head>
  <body>
    <div class="top">
      <div class="wrapper">
        <ul class="top-menu">
          <li class="sometimes"><a href="#"><p><h2>With meal</h2></p></a></li>
          <?php
          if(isset($_SESSION['email']))
          {
            $db_host = "127.0.0.1";
            $db_user = "admin";
            $db_password = "Myadmin@02;;";
            $db_name = "db";
            $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);


            $user_email = $_SESSION['email'];
            //echo "email : " .$user_email;

          //  $sql = mysqform-horizontalli_query($conn,"select * from freeboard where id='".$bno."'");
            $sql = mysqli_query($conn, "select name from member where email='$user_email'");
            $board = $sql->fetch_array();
          //  echo "name : " .$board['name'];
            $user_name = $board['name'];

            $globals['user_name'];
            ?>
            <ul id="usermenu">
            <!-- <li class="test"><a href="#"><p><?php echo "{$_SESSION['email']}"?>님</p></a> -->
            <li class="test"><a href="#"><p><?php echo $board['name']?>님</p></a>
           <ul>
                  <li class="child"><a href="#none" onclick="location.href='logout.php'"> 로그아웃 </a></li>

           </ul>
           </li>
           </ul>
            <?php

          } else {
            ?>

          <li class="test"><a href="#"><p>회원가입</p></a></li>
          <li class="test"><a href="#none" onclick="location.href='login.html'"><p>로그인</p></a></li>
          <li class="test"><a href="#"><p>마이페이지</p></a></li>
          <li class="test"><a href="#"><p>장바구니</p></a></li>
         <?php
       } ?>

          <div class="search">
          <form>
          <input type="text" placeholder="검색어 입력">
          <button type="submit"></button>
          </form>
          </div>
        </ul>

        <nav id="middle_top_menu" >
          <ul>
            <li><a class="menuLink" href="#">수제사료</a></li>
            <li><a class="menuLink" href="#">수제간식</a></li>
            <li><a class="menuLink" href="#">천연수제껌</a></li>
            <li><a class="menuLink" href="#">케이크·쿠키</a></li>
            <li><a class="menuLink" href="#">천연파우더</a></li>
            <!-- <li><a class="menuLink" href="freeTable.php">자유게시판</a></li> -->
          </ul>
        </nav>
      </div>
    </div>


    <div class="container"><!-- 좌우측의 공간 확보 -->
           <!-- 헤더 들어가는 부분 -->

           <!-- <div class="row">
               <p></p>
               <div class="col-md-6">
                   <small>
                   <a href="#">로그인</a> | <a href="/user/signUp">회원가입</a>
                   </small></div>
               <div class="col-md-6">
                   <p class="text-right">
                       <a href="http://www.naver.com" target="_blank"><img src="/resources/image/icon/naverIcon.png" alt="네이버 블로그" width="20" height="20" class="img-rounded"></a>
                       <a href="http://www.facebook.com" target="_blank"><img src="/resources/image/icon/facebookIcon.png" alt="네이버 블로그" width="20" height="20" class="img-rounded"></a>
                       <a href="http://www.twitter.com" target="_blank"><img src="/resources/image/icon/twitterIcon.png" alt="네이버 블로그" width="21" height="21" class="img-rounded"></a>
                   </p>
               </div>
           </div> -->
           <!--// 헤더 들어가는 부분 -->
           <!-- 모달창 -->
           <!-- <div class="modal fade" id="defaultModal">
               <div class="modal-dialog">
                   <div class="modal-content">
                       <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h4 class="modal-title">알림</h4>
                       </div>
                       <div class="modal-body">
                           <p class="modal-contents"></p>
                       </div>
                       <div class="modal-footer">
                           <button type="button" class="btn btn-default" data-dismiss="modal">닫기</button>
                       </div>
                   </div>/.modal-content -->
               <!-- </div> /.modal-dialog
           </div> /.modal  -->
           <!--// 모달창 -->
           <!-- <hr/>  -->
               <!-- 본문 들어가는 부분 -->
               <div class="title">
                 <p><h4><b>회원가입</b></h4></p>
               </div>


       <form class="form-horizontal" role="form" method="post" action="javascript:alert( 'success!' );">


           <div class="form-group" id="divId">
               <label for="inputId" class="col-lg-2 control-label">아이디</label>
               <div class="col-lg-10">
                   <input type="text" class="form-control onlyAlphabetAndNumber" id="id" data-rule-required="true" placeholder="20자이내의 알파벳, 언더스코어(_), 숫자만 입력 가능합니다." maxlength="20">
               </div>
           </div>
           <div class="form-group" id="divPassword">
               <label for="inputPassword" class="col-lg-2 control-label">패스워드</label>
               <div class="col-lg-10">
                   <input type="password" class="form-control" id="password" name="excludeHangul" data-rule-required="true" placeholder="비밀번호를 입력해주세요." maxlength="30">
               </div>
           </div>
           <div class="form-group" id="divPasswordCheck">
               <label for="inputPasswordCheck" class="col-lg-2 control-label">패스워드 확인</label>
               <div class="col-lg-10">
                   <input type="password" class="form-control" id="passwordCheck" data-rule-required="true" placeholder="비밀번호를 한번 더 입력해주세요." maxlength="30">
               </div>
           </div>
           <div class="form-group" id="divName">
               <label for="inputName" class="col-lg-2 control-label">이름</label>
               <div class="col-lg-10">
                   <input type="text" class="form-control onlyHangul" id="name" data-rule-required="true" placeholder="한글만 입력 가능합니다." maxlength="15">
               </div>
           </div>



           <div class="form-group" id="divEmail">
               <label for="inputEmail" class="col-lg-2 control-label">이메일</label>
               <div class="col-lg-10">
                   <input type="email" class="form-control" id="email" data-rule-required="true" placeholder="이메일을 입력해주세요." maxlength="40">
               </div>
           </div>
           <div class="form-group" id="divPhoneNumber">
               <label for="inputPhoneNumber" class="col-lg-2 control-label">휴대폰 번호</label>
               <div class="col-lg-10">
                   <input type="tel" class="form-control onlyNumber" id="phoneNumber" data-rule-required="true" placeholder="-를 제외하고 숫자만 입력하세요." maxlength="11">
               </div>
           </div>

           <div class="form-group" id="divAddress">
               <label for="inputAddress" class="col-lg-2 control-label">주소</label>
               <div class="col-lg-10">
                 <div class="zipCode">
                   <!-- <input type="adress" style="width: 130px;" class="form-control" id="adress" data-rule-required="true" placeholder="우편번호" maxlength="40"> -->
                    <button type="submit" style="display:inline;"class="btn btn-default">주소검색</button>
                 </div>
<input type="adress" style="margin-top:5px;" class="form-control" id="adress" data-rule-required="true" placeholder="기본주소" maxlength="60">
<input type="adress" style="margin-top:5px;" class="form-control" id="adress" data-rule-required="true" placeholder="나머지주소" maxlength="60">
               </div>
           </div>

           <div class="form-group">
               <label for="inputEmailReceiveYn" class="col-lg-2 control-label">이메일 수신여부</label>
               <div class="col-lg-10">
                   <label class="radio-inline">
                       <input type="radio" id="emailReceiveYn" name="emailReceiveYn" value="Y" checked> 동의합니다.
                   </label>
                   <label class="radio-inline">
                       <input type="radio" id="emailReceiveYn" name="emailReceiveYn" value="N"> 동의하지 않습니다.
                   </label>
               </div>
           </div>
           <div class="form-group">
               <label for="inputPhoneNumber" class="col-lg-2 control-label">SMS 수신여부</label>
               <div class="col-lg-10">
                   <label class="radio-inline">
                       <input type="radio" id="smsReceiveYn" name="smsReceiveYn" value="Y" checked> 동의합니다.
                   </label>
                   <label class="radio-inline"5>
                       <input type="radio" id="smsReceiveYn" name="smsReceiveYn" value="N"> 동의하지 않습니다.
                   </label>
               </div>
           </div>


           <div class="form-group">
               <label for="provision" class="col-lg-2 control-label">회원가입약관</label>
               <div class="col-lg-10" id="provision">
                   <textarea class="form-control" rows="8" style="resize:none">
약관동의
                   </textarea>
                   <div class="radio">
                       <label>
                           <input type="radio" id="provisionYn" name="provisionYn" value="Y" autofocus="autofocus" checked>
                           동의합니다.
                       </label>
                   </div>
                   <div class="radio">
                       <label>
                           <input type="radio" id="provisionYn" name="provisionYn" value="N">
                           동의하지 않습니다.
                       </label>
                   </div>
               </div>
           </div>
           <div class="form-group">
               <label for="memberInfo" class="col-lg-2 control-label">개인정보취급방침</label>
               <div class="col-lg-10" id="memberInfo">
                   <textarea class="form-control" rows="8" style="resize:none">
개인정보의 항목 및 수집방법
                   </textarea>
                   <div class="radio">
                       <label>
                           <input type="radio" id="memberInfoYn" name="memberInfoYn" value="Y" checked>
                           동의합니다.
                       </label>
                   </div>
                   <div class="radio">
                       <label>
                           <input type="radio" id="memberInfoYn" name="memberInfoYn" value="N">
                           동의하지 않습니다.
                       </label>
                   </div>
               </div>
           </div>

               </div>
           </div>

           <div class="form-group">
               <div class="registerBtn">
                   <button type="submit" class="btn btn-default">가입하기</button>
               </div>
           </div>
       </form>


       <script>

           $(function(){
               //모달을 전역변수로 선언
               var modalContents = $(".modal-contents");
               var modal = $("#defaultModal");

               $('.onlyAlphabetAndNumber').keyup(function(event){
                   if (!(event.keyCode >=37 && event.keyCode<=40)) {
                       var inputVal = $(this).val();
                       $(this).val($(this).val().replace(/[^_a-z0-9]/gi,'')); //_(underscore), 영어, 숫자만 가능
                   }
               });

               $(".onlyHangul").keyup(function(event){
                   if (!(event.keyCode >=37 && event.keyCode<=40)) {
                       var inputVal = $(this).val();
                       $(this).val(inputVal.replace(/[a-z0-9]/gi,''));
                   }
               });

               $(".onlyNumber").keyup(function(event){
                   if (!(event.keyCode >=37 && event.keyCode<=40)) {
                       var inputVal = $(this).val();
                       $(this).val(inputVal.replace(/[^0-9]/gi,''));
                   }
               });

               //------- 검사하여 상태를 class에 적용
               $('#id').keyup(function(event){

                   var divId = $('#divId');

                   if($('#id').val()==""){
                       divId.removeClass("has-success");
                       divId.addClass("has-error");
                   }else{
                       divId.removeClass("has-error");
                       divId.addClass("has-success");
                   }
               });

               $('#password').keyup(function(event){

                   var divPassword = $('#divPassword');

                   if($('#password').val()==""){
                       divPassword.removeClass("has-success");
                       divPassword.addClass("has-error");
                   }else{
                       divPassword.removeClass("has-error");
                       divPassword.addClass("has-success");
                   }
               });

               $('#passwordCheck').keyup(function(event){

                   var passwordCheck = $('#passwordCheck').val();
                   var password = $('#password').val();
                   var divPasswordCheck = $('#divPasswordCheck');

                   if((passwordCheck=="") || (password!=passwordCheck)){
                       divPasswordCheck.removeClass("has-success");
                       divPasswordCheck.addClass("has-error");
                   }else{
                       divPasswordCheck.removeClass("has-error");
                       divPasswordCheck.addClass("has-success");
                   }
               });

               $('#name').keyup(function(event){

                   var divName = $('#divName');

                   if($.trim($('#name').val())==""){
                       divName.removeClass("has-success");
                       divName.addClass("has-error");
                   }else{
                       divName.removeClass("has-error");
                       divName.addClass("has-success");
                   }
               });

               $('#nickname').keyup(function(event){

                   var divNickname = $('#divNickname');

                   if($.trim($('#nickname').val())==""){
                       divNickname.removeClass("has-success");
                       divNickname.addClass("has-error");
                   }else{
                       divNickname.removeClass("has-error");
                       divNickname.addClass("has-success");
                   }
               });

               $('#email').keyup(function(event){

                   var divEmail = $('#divEmail');

                   if($.trim($('#email').val())==""){
                       divEmail.removeClass("has-success");
                       divEmail.addClass("has-error");
                   }else{
                       divEmail.removeClass("has-error");
                       divEmail.addClass("has-success");
                   }
               });

               $('#phoneNumber').keyup(function(event){

                   var divPhoneNumber = $('#divPhoneNumber');

                   if($.trim($('#phoneNumber').val())==""){
                       divPhoneNumber.removeClass("has-success");
                       divPhoneNumber.addClass("has-error");
                   }else{
                       divPhoneNumber.removeClass("has-error");
                       divPhoneNumber.addClass("has-success");
                   }
               });


               //------- validation 검사
               $( "form" ).submit(function( event ) {

                   var provision = $('#provision');
                   var memberInfo = $('#memberInfo');
                   var divId = $('#divId');
                   var divPassword = $('#divPassword');
                   var divPasswordCheck = $('#divPasswordCheck');
                   var divName = $('#divName');
                   var divNickname = $('#divNickname');
                   var divEmail = $('#divEmail');
                   var divPhoneNumber = $('#divPhoneNumber');

                   //회원가입약관
                   if($('#provisionYn:checked').val()=="N"){
                       modalContents.text("회원가입약관에 동의하여 주시기 바랍니다."); //모달 메시지 입력
                       modal.modal('show'); //모달 띄우기

                       provision.removeClass("has-success");
                       provision.addClass("has-error");
                       $('#provisionYn').focus();
                       return false;
                   }else{
                       provision.removeClass("has-error");
                       provision.addClass("has-success");
                   }

                   //개인정보취급방침
                   if($('#memberInfoYn:checked').val()=="N"){
                       modalContents.text("개인정보취급방침에 동의하여 주시기 바랍니다.");
                       modal.modal('show');

                       memberInfo.removeClass("has-success");
                       memberInfo.addClass("has-error");
                       $('#memberInfoYn').focus();
                       return false;
                   }else{
                       memberInfo.removeClass("has-error");
                       memberInfo.addClass("has-success");
                   }

                   //아이디 검사
                   if($('#id').val()==""){
                       modalContents.text("아이디를 입력하여 주시기 바랍니다.");
                       modal.modal('show');

                       divId.removeClass("has-success");
                       divId.addClass("has-error");
                       $('#id').focus();
                       return false;
                   }else{
                       divId.removeClass("has-error");
                       divId.addClass("has-success");
                   }

                   //패스워드 검사
                   if($('#password').val()==""){
                       modalContents.text("패스워드를 입력하여 주시기 바랍니다.");
                       modal.modal('show');

                       divPassword.removeClass("has-success");
                       divPassword.addClass("has-error");
                       $('#password').focus();
                       return false;
                   }else{
                       divPassword.removeClass("has-error");
                       divPassword.addClass("has-success");
                   }

                   //패스워드 확인
                   if($('#passwordCheck').val()==""){
                       modalContents.text("패스워드 확인을 입력하여 주시기 바랍니다.");
                       modal.modal('show');

                       divPasswordCheck.removeClass("has-success");
                       divPasswordCheck.addClass("has-error");
                       $('#passwordCheck').focus();
                       return false;
                   }else{
                       divPasswordCheck.removeClass("has-error");
                       divPasswordCheck.addClass("has-success");
                   }

                   //패스워드 비교
                   if($('#password').val()!=$('#passwordCheck').val() || $('#passwordCheck').val()==""){
                       modalContents.text("패스워드가 일치하지 않습니다.");
                       modal.modal('show');

                       divPasswordCheck.removeClass("has-success");
                       divPasswordCheck.addClass("has-error");
                       $('#passwordCheck').focus();
                       return false;
                   }else{
                       divPasswordCheck.removeClass("has-error");
                       divPasswordCheck.addClass("has-success");
                   }

                   //이름
                   if($('#name').val()==""){
                       modalContents.text("이름을 입력하여 주시기 바랍니다.");
                       modal.modal('show');

                       divName.removeClass("has-success");
                       divName.addClass("has-error");
                       $('#name').focus();
                       return false;
                   }else{
                       divName.removeClass("has-error");
                       divName.addClass("has-success");
                   }

                   //별명
                   if($('#nickname').val()==""){
                       modalContents.text("별명을 입력하여 주시기 바랍니다.");
                       modal.modal('show');

                       divNickname.removeClass("has-success");
                       divNickname.addClass("has-error");
                       $('#nickname').focus();
                       return false;
                   }else{
                       divNickname.removeClass("has-error");
                       divNickname.addClass("has-success");
                   }

                   //이메일
                   if($('#email').val()==""){
                       modalContents.text("이메일을 입력하여 주시기 바랍니다.");
                       modal.modal('show');

                       divEmail.removeClass("has-success");
                       divEmail.addClass("has-error");
                       $('#email').focus();
                       return false;
                   }else{
                       divEmail.removeClass("has-error");
                       divEmail.addClass("has-success");
                   }

                   //휴대폰 번호
                   if($('#phoneNumber').val()==""){
                       modalContents.text("휴대폰 번호를 입력하여 주시기 바랍니다.");
                       modal.modal('show');

                       divPhoneNumber.removeClass("has-success");
                       divPhoneNumber.addClass("has-error");
                       $('#phoneNumber').focus();
                       return false;
                   }else{
                       divPhoneNumber.removeClass("has-error");
                       divPhoneNumber.addClass("has-success");
                   }


               });

           });

       </script>
               <!--// 본문 들어가는 부분 -->
           <hr/>
           <!-- 푸터 들어가는 부분 -->

           <div>
               <p class="text-center">
                   <small><strong> 사거리</strong></small><br>
                   <small>대표 : 홍길동 ㆍ 주소 :  사거리 ㆍ 사업자등록번호:123-12-12345 ㆍ 전화 : 064-123-1234</small><br>
                   <small>Copyrightⓒ test.com All rights reserved.</small>
               </p>
           </div>
           <!--// 푸터 들어가는 부분 -->
       </div>



  </body>
</html>
