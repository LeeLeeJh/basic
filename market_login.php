<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>login page</title>
    <link rel="stylesheet" href="/css/bootstrap.css"/>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <style>
    .input-group {

        margin-top: 1em;
        margin-bottom: 1em;
    }


    .login-box {
        line-height: 2.3em;
        font-size: 1em;
        color: #aaa;
        margin-top: 1em;
        margin-bottom: 1em;
        padding-top: 0.5em;
        padding-bottom: 0.5em;
    }

    .login {
      width: 300px;
    }

    .form-group{
      margin-top: 10px;
    }
    </style>
  </head>
  <body>

<div class="login">

      <div class="login-box well">
                             <form accept-charset="UTF-8" role="form" method="post" action="./login_check.php">
                                 <legend>로그인</legend>
                                 <div class="input-group">
                                     <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                     <input type="text" id="email" name="email" value='' placeholder="E-mail을 입력하세요" class="form-control" />
                                 </div>
                                 <div class="input-group">
                                     <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                     <input type="password" id="pw" name="pw" value='' placeholder="비밀번호를 입력하세요" class="form-control" />
                                 </div>
                                 <button type="submit" id="login-submit" class="btn btn-default btn-block"/>로그인</button>
                                 <!-- <span class='text-center'><a href="" class="text-sm">비밀번호 찾기</a></span> -->
                                 <div class="form-group">
                                     <a href="signUp.html" class="btn btn-default btn-block"> 회원가입</a>
                                 </div>
                             </form>
                             </div>
                             </div>
  </body>
</html>
