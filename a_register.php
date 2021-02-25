<?php
include("a_top_menu.php");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>회원가입</title>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" />
    <!-- <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="/css/top-menu.css">
    <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/latest/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>

    <style>

    .register_line {
      margin-top: 150px;
    }

.container .title {
  margin-top: 50px;
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
  margin-top: 30px;
  margin-bottom: 40px;
  margin-left: 47.5%;
}

.container .form-control .zipCode {
  width: 50px;
}
    </style>

  </head>
  <body>

    <div class="register_line">
    <hr />
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


       <form class="form-horizontal" role="form" method="post" action="./a_signUp.php">
         <!-- <form class="form-horizontal" role="form" method="post" action="javascript:alert( 'success!' );"> -->


           <div class="form-group" id="divId">
               <label for="inputId" class="col-lg-2 control-label">아이디</label>
               <div class="col-lg-10">
                   <input type="text" class="form-control onlyAlphabetAndNumber" id="id" name="id" data-rule-required="true" placeholder="20자이내의 영문, 언더스코어(_), 숫자만 입력 가능합니다." maxlength="20">
                   <div id="id_check"></div>
               </div>


           </div>

           <script>
           $(document).ready(function(e) {
           	$("#id").on("keyup", function(){ //check라는 클래스에 입력을 감지
           		var self = $(this);
           		var id;

           		if(self.attr("id") === "id"){
           			id = self.val();
           		}

           		$.post( //post방식으로 id_check.php에 입력한 userid값을 넘깁니다
           			"a_id_check.php",
           			{ id : id },
           			function(data){
           				if(data){ //만약 data값이 전송되면

           					self.parent().parent().find("#id_check").html(data); //div태그를 찾아 html방식으로 data를 뿌려줍니다.
                    self.parent().parent().find("#id_check").css("color", "#F00"); //div 태그를 찾아 css효과로 빨간색을 설정합니다

                      // self.parent().parent().find("#id_check").css("color", "#008000"); //div 태그를 찾아 css효과로 초록색을 설정합니다

           				}
           			}
           		);
           	});
           });
           </script>


           <div class="form-group" id="divPassword">
               <label for="inputPassword" class="col-lg-2 control-label">패스워드</label>
               <div class="col-lg-10">
                   <input type="password" class="form-control" id="password" name="pw" data-rule-required="true" placeholder="비밀번호를 입력해주세요." maxlength="30">
               </div>
           </div>
           <div class="form-group" id="divPasswordCheck">
               <label for="inputPasswordCheck" class="col-lg-2 control-label">패스워드 확인</label>
               <div class="col-lg-10">
                   <input type="password" class="form-control" id="passwordCheck" name="pwc" data-rule-required="true" placeholder="비밀번호를 한번 더 입력해주세요." maxlength="30">
               </div>
           </div>
           <div class="form-group" id="divName">
               <label for="inputName" class="col-lg-2 control-label">이름</label>
               <div class="col-lg-10">
                   <input type="text" class="form-control onlyHangul" id="name" name="name" data-rule-required="true" placeholder="한글만 입력 가능합니다." maxlength="15">
               </div>
           </div>



           <div class="form-group" id="divEmail">
               <label for="inputEmail" class="col-lg-2 control-label">이메일</label>
               <div class="col-lg-10">
                   <input type="email" class="form-control" id="email" name="email" data-rule-required="true" placeholder="이메일을 입력해주세요." maxlength="40">
               </div>
           </div>
           <div class="form-group" id="divPhoneNumber">
               <label for="inputPhoneNumber" class="col-lg-2 control-label">휴대폰 번호</label>
               <div class="col-lg-10">
                   <input type="tel" name="phone" class="form-control onlyNumber" id="phoneNumber" data-rule-required="true" placeholder="-를 제외하고 숫자만 입력하세요." maxlength="11">
               </div>
           </div>

           <div class="form-group" id="divAddress">
               <label for="inputAddress" class="col-lg-2 control-label">주소</label>
               <div class="col-lg-10">
                 <div class="zipCode">
                   <!-- <input type="adress" style="width: 130px;" class="form-control" id="adress" data-rule-required="true" placeholder="우편번호" maxlength="40"> -->
                   <input type="text" style="width: 130px; margin-top:5px; display:inline;" class="form-control" id="postCode" name="postCode" placeholder="우편번호">
                   <input type="button" style="margin-top:-2px; display:inline; text-align:center; width:80px;" class="btn btn-default" value="주소검색" onClick="execDaumPostCode();"/>
                    <!-- <button type="submit" style="display:inline;"class="btn btn-default">주소검색</button> -->
                 </div>
<input type="text" style="margin-top:5px;" class="form-control" id="roadAddress" name="roadAddress" placeholder="도로명주소">
<input type="text" style="margin-top:5px;" class="form-control" id="detailAddress" name="detailAddress" placeholder="상세주소">

<div id="layer" style="display:none;position:fixed;overflow:hidden;z-index:1;-webkit-overflow-scrolling:touch;">
<img src="//i1.daumcdn.net/localimg/localimages/07/postcode/320/close.png" id="btnCloseLayer" style="cursor:pointer;position:absolute;right:-3px;top:-3px;z-index:1" onclick="closeDaumPostcode()" alt="닫기 버튼">

<!-- <input type="adress" style="margin-top:5px;" class="form-control" id="adress" data-rule-required="true" placeholder="기본주소" maxlength="60"> -->
<!-- <input type="adress" style="margin-top:5px;" class="form-control" id="adress" data-rule-required="true" placeholder="나머지주소" maxlength="60"> -->
               </div>
           </div>

           <script>
           // 우편번호 찾기 화면을 넣을 element
           var element_layer = document.getElementById('layer');

           function closeDaumPostcode() {
               // iframe을 넣은 element를 안보이게 한다.
               element_layer.style.display = 'none';
           }

           function execDaumPostCode() {
               new daum.Postcode({
                   oncomplete: function(data) {
                       // 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                       // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                       // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                       var fullAddr = data.address; // 최종 주소 변수
                       var extraAddr = ''; // 조합형 주소 변수

                       // 기본 주소가 도로명 타입일때 조합한다.
                       if(data.addressType === 'R'){
                           //법정동명이 있을 경우 추가한다.
                           if(data.bname !== ''){
                               extraAddr += data.bname;
                           }
                           // 건물명이 있을 경우 추가한다.
                           if(data.buildingName !== ''){
                               extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                           }
                           // 조합형주소의 유무에 따라 양쪽에 괄호를 추가하여 최종 주소를 만든다.
                           fullAddr += (extraAddr !== '' ? ' ('+ extraAddr +')' : '');
                       }

                       // 우편번호와 주소 정보를 해당 필드에 넣는다.
                       document.getElementById('postCode').value = data.zonecode; //5자리 새우편번호 사용
                       document.getElementById('roadAddress').value = fullAddr;

                       document.getElementById('detailAddress').focus();
                       // iframe을 넣은 element를 안보이게 한다.
                       // (autoClose:false 기능을 이용한다면, 아래 코드를 제거해야 화면에서 사라지지 않는다.)
                       element_layer.style.display = 'none';
                   },
                   width : '100%',
                   height : '100%'
               }).embed(element_layer);

               // iframe을 넣은 element를 보이게 한다.
               element_layer.style.display = 'block';

               // iframe을 넣은 element의 위치를 화면의 가운데로 이동시킨다.
               initLayerPosition();
           }

           // 브라우저의 크기 변경에 따라 레이어를 가운데로 이동시키고자 하실때에는
           // resize이벤트나, orientationchange이벤트를 이용하여 값이 변경될때마다 아래 함수를 실행 시켜 주시거나,
           // 직접 element_layer의 top,left값을 수정해 주시면 됩니다.
           function initLayerPosition(){
               var width = 300; //우편번호 서비스가 들어갈 element의 width
               var height = 460; //우편번호 서비스가 들어갈 element의 height
               var borderWidth = 5; //샘플에서 사용하는 border의 두께

               // 위에서 선언한 값들을 실제 element에 넣는다.
               element_layer.style.width = width + 'px';
               element_layer.style.height = height + 'px';
               element_layer.style.border = borderWidth + 'px solid';
               // 실행되는 순간의 화면 너비와 높이 값을 가져와서 중앙에 뜰 수 있도록 위치를 계산한다.
               element_layer.style.left = (((window.innerWidth || document.documentElement.clientWidth) - width)/2 - borderWidth) + 'px';
               element_layer.style.top = (((window.innerHeight || document.documentElement.clientHeight) - height)/2 - borderWidth) + 'px';
           }
           </script>

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
                           <input type="radio" id="provisionYn" name="provisionYn" value="Y">
                           동의합니다.
                       </label>
                   </div>
                   <div class="radio">
                       <label>
                           <input type="radio" id="provisionYn" name="provisionYn" value="N" checked>
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
                           <input type="radio" id="memberInfoYn" name="memberInfoYn" value="Y">
                           동의합니다.
                       </label>
                   </div>
                   <div class="radio">
                       <label>
                           <input type="radio" id="memberInfoYn" name="memberInfoYn" value="N" checked>
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



    // 우편번호 찾기 화면을 넣을 element
    var element_layer = document.getElementById('layer');

    function closeDaumPostcode() {
        // iframe을 넣은 element를 안보이게 한다.
        element_layer.style.display = 'none';
    }

    function execDaumPostCode() {
        new daum.Postcode({
            oncomplete: function(data) {
                // 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                var fullAddr = data.address; // 최종 주소 변수
                var extraAddr = ''; // 조합형 주소 변수

                // 기본 주소가 도로명 타입일때 조합한다.
                if(data.addressType === 'R'){
                    //법정동명이 있을 경우 추가한다.
                    if(data.bname !== ''){
                        extraAddr += data.bname;
                    }
                    // 건물명이 있을 경우 추가한다.
                    if(data.buildingName !== ''){
                        extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                    }
                    // 조합형주소의 유무에 따라 양쪽에 괄호를 추가하여 최종 주소를 만든다.
                    fullAddr += (extraAddr !== '' ? ' ('+ extraAddr +')' : '');
                }

                // 우편번호와 주소 정보를 해당 필드에 넣는다.
                document.getElementById('postCode').value = data.zonecode; //5자리 새우편번호 사용
                document.getElementById('roadAddress').value = fullAddr;

                document.getElementById('detailAddress').focus();
                // iframe을 넣은 element를 안보이게 한다.
                // (autoClose:false 기능을 이용한다면, 아래 코드를 제거해야 화면에서 사라지지 않는다.)
                element_layer.style.display = 'none';
            },
            width : '100%',
            height : '100%'
        }).embed(element_layer);

        // iframe을 넣은 element를 보이게 한다.
        element_layer.style.display = 'block';

        // iframe을 넣은 element의 위치를 화면의 가운데로 이동시킨다.
        initLayerPosition();
    }

    // 브라우저의 크기 변경에 따라 레이어를 가운데로 이동시키고자 하실때에는
    // resize이벤트나, orientationchange이벤트를 이용하여 값이 변경될때마다 아래 함수를 실행 시켜 주시거나,
    // 직접 element_layer의 top,left값을 수정해 주시면 됩니다.
    function initLayerPosition(){
        var width = 300; //우편번호 서비스가 들어갈 element의 width
        var height = 460; //우편번호 서비스가 들어갈 element의 height
        var borderWidth = 5; //샘플에서 사용하는 border의 두께

        // 위에서 선언한 값들을 실제 element에 넣는다.
        element_layer.style.width = width + 'px';
        element_layer.style.height = height + 'px';
        element_layer.style.border = borderWidth + 'px solid';
        // 실행되는 순간의 화면 너비와 높이 값을 가져와서 중앙에 뜰 수 있도록 위치를 계산한다.
        element_layer.style.left = (((window.innerWidth || document.documentElement.clientWidth) - width)/2 - borderWidth) + 'px';
        element_layer.style.top = (((window.innerHeight || document.documentElement.clientHeight) - height)/2 - borderWidth) + 'px';
    }


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
