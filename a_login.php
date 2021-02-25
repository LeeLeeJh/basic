<?php
include("a_top_menu.php");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>로그인</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" />
    <!-- <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="/css/top-menu.css">
    <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/latest/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="//code.jquery.com/jquery.js"></script>

    <style>
.login_form {
  display: inline-block;
}

    .input {
      margin-left: 350px;
      margin-right: -170px;

    }

    .loginBtn {
      margin-left: 60.5%;
    }

    .registerBtn {
      margin-top: 0px;
      margin-left: 40.5%;
    }

    .findBtn a {
      color: black;
      text-decoration: none;
      padding-top: 3px;
      margin-left: 65%;
      font-size: 10px;
    }

    .btn.outline {
    background: none;
    padding: 12px 22px;
}
.btn-primary.outline {
    border: 2px solid #000000;
    color: #000000;
}
.btn-primary.outline:hover, .btn-primary.outline:focus, .btn-primary.outline:active, .btn-primary.outline.active, .open > .dropdown-toggle.btn-primary {
    color: #33a6cc;
    border-color: #33a6cc;
}
.btn-primary.outline:active, .btn-primary.outline.active {
    border-color: #007299;
    color: #007299;
    box-shadow: none;
}


    /* .loginBtn {
        width: 80px;
        height: 70px;
        text-decoration: none;
        padding: 5px;
        vertical-align: middle;
        text-align: center;
        list-style: none;
        color: white;
        background-color: black;
        border: 1px solid #00000000;
    }

    .loginBtn li {
      text-decoration: none;
      color: white;
    } */

    .register_line {
      margin-top: 150px;
    }

.container .title {
  margin-top: 50px;
  margin-left: 46.5%;
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
                 <p><h4><b>로그인</b></h4></p>
               </div>

               <form class="login_form" method="post" action="./a_login_check.php">
                 <div class="input">

                   <label for="id" class="col-lg-2 control-label">아이디</label>
                   <div class="col-lg-10">
                     <input type="text" name="id">
                   </div>


                     <label for="pw" class="col-lg-2 control-label">비밀번호</label>
                     <div class="col-lg-10">
                     <input type="password" name="pw">
                     </div>

                  </div>

                  <div class="findBtn">
                    <p><a class="" href="#">아이디 / 비밀번호를 잊어버리셨나요?</a></p>
                  </div>

                   <div class="loginBtn">
                     <button type="submit" class="btn btn-default" style="width:187px;">로그인</button>
                     <!-- <a href="#"> -->
                     <!-- <li><b>로그인</b></li></a> -->
                   </div>
                </form>
                   <div class="registerBtn">
                     <button class="btn btn" style="width:187px;" onclick="location.href='a_register.php'"> 회원가입 </button>
                   </div>



<!--
       <form class="form-horizontal" role="form" method="post" action="javascript:alert( 'success!' );">


           <div class="form-group" id="divId">
               <label for="inputId" class="col-lg-2 control-label">아이디</label>
               <div class="col-lg-10">
                   <input type="text" class="form-control onlyAlphabetAndNumber" id="id" data-rule-required="true" maxlength="20">
               </div>
           </div>
           <div class="form-group" id="divPassword">
               <label for="inputPassword" class="col-lg-2 control-label">패스워드</label>
               <div class="col-lg-10">
                   <input type="password" class="form-control" id="password" name="excludeHangul" data-rule-required="true" placeholder="비밀번호를 입력해주세요." maxlength="30">
               </div>
           </div>


           <div class="form-group">
               <div class="registerBtn">
                   <button type="submit" class="btn btn-default">로그인</button>
               </div>
           </div>
       </form> -->



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
