<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Sign Up </title>
    <link rel="stylesheet" href="/css/bootstrap.css"/>
  </head>
  <body>
    <form>
       <h1>회원 가입</h1>
       <br />이름 <input type="text" id="Name" value="이름을 입력하세요" required>
       <br />ID <input type="text" id="Id" required>
       <br />PW <input type="password" id="Pw" required>
       <br />PW 확인 <input type="password" id="PwCheck" required>

       <br />이메일<input type="email" name="Email">

       <br />성별
       <input type="radio" name="gender" value="male" checked>남자
       <input type="radio" name="gender" value="female">여자
       <input type="radio" name="gender" value="other">그외

       <br />전화번호<input type="tel" name="Tel">

       <br />홈페이지<input type="url" name="Homepage">

       <br />생일<input type="date" name="Bd">

       <br />좋아하는 색깔 <input type="color" name="Color" value="#000000">

       <br />관심분야
       <br /><input type="checkbox" id="interest1" value="Economy">경제
       <input type="checkbox" id="interest2" value="IT">IT
       <input type="checkbox" id="interest3" value="Society">사회
       <input type="checkbox" id="interest4" value="Science">과학
       <input type="checkbox" id="interest5" value="Music">음악
       <input type="checkbox" id="interest6" value="Art">미술

       <br /><br />
       <input type="submit" value="확인">
       <input type="reset" value="취소">
   </form><p><br /></p>
  </body>
</html>
</html>
