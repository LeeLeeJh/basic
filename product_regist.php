<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>wirte page</title>
  </head>
  <body>
    <form method="post" action="./login_check.php">
      <div>
        <label for="email"> 서비스명 </label>
        <input type="text" name="email">
        </div>
        <div>
          <label for="pw"> 가격 </label>
          <input type="password" name="pw">
        </div>
    </form>
        사진등록 </ br>
        <form enctype='multipart/form-data' action='upload.php' method='post'>
	      <input type='file' name='upfile'>
	      <button>보내기</button>
        </form>

        <form action='upload.php' method='POST' enctype='multipart/form-data'>
        <INPUT TYPE=hidden name=mode value=insert>
        <TABLE>
        <TR> <TD>올릴 이미지:</TD>
        <TD><input type='file' name='upfile'></TD></TR>
        <TR> <TD>제목</TD>
        <TD><input type='text' name='title'></TD></TR>
        <TR> <TD colspan = 2>
        <input type='submit' value='이미지 전송 '></TD></TR>
        </TABLE>
        </form>



    <!-- <button onclick="location.href='signUp.html'"> 회원가입 </button> -->
  </body>
</html>
