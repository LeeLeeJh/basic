<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="form.css"  />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    // 회원가입처리
    $("form").submit(function(){
        var userNM = $("input[name='userNM']");
        if( userNM.val() =='') {
            alert("성명을 입력하세요");
            userNM.focus();
            return false;
        }

        var email = $("input[name='email']");
        if(email.val() == ''){
            alert('이메일을 입력하세요');
            email.focus();
            return false;
        } else {
            var emailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (!emailRegex.test(email.val())) {
                alert('이메일 주소가 유효하지 않습니다. ex)abc@gmail.com');
                email.focus();
                return false;
            }
        }

        var mobileNO = $("input[name='mobileNO']");
        if(mobileNO.val() ==''){
            alert('휴대폰 번호를 입력하세요');
            mobileNO.focus();
            return false;
        } else if(!/^[0-9]{10,11}$/.test(mobileNO.val())){
            alert("휴대폰 번호는 숫자만 10~11자리 입력하세요.");
            return false;
        } else if(!/^(01[016789]{1}|02|0[3-9]{1}[0-9]{1})([0-9]{3,4})([0-9]{4})$/.test(mobileNO.val())){
            alert("유효하지 않은 전화번호 입니다.");
            return false;
        }

        var password = $("input[name='Password']");
        var repassword = $("input[name='rePassword']");
        if(password.val() =='') {
            alert("비밀번호를 입력하세요!");
            password.focus();
            return false;
        }
        if(password.val().search(/\s/) != -1){
            alert("비밀번호는 공백없이 입력해주세요.");
            return false;
        }
        if(!/^[a-zA-Z0-9!@#$%^&*()?_~]{8,20}$/.test(password.val())){
            alert("비밀번호는 숫자, 영문, 특수문자(!@$%^&*?_~ 만 허용) 조합으로 8~20자리를 사용해야 합니다.");
            return false;
        }
        // 영문, 숫자, 특수문자 2종 이상 혼용
        var chk=0;
        if(password.val().search(/[0-9]/g) != -1 ) chk ++;
        if(password.val().search(/[a-z]/ig)  != -1 ) chk ++;
        if(password.val().search(/[!@#$%^&*()?_~]/g) != -1) chk ++;
        if(chk < 2){
            alert("비밀번호는 숫자, 영문, 특수문자를 두가지이상 혼용하여야 합니다.");
            return false;
        }
        // email이 아닌 userID 인 경우에는 체크하면 유용. email은 특수 허용문자에서 걸러진다.
        /*
        if(password.val().search(userID.val())>-1){
            alert("userID가 포함된 비밀번호는 사용할 수 없습니다.");
            return false;
        }
        */
        if(repassword.val() =='') {
            alert("비밀번호를 다시 한번 더 입력하세요!");
            repassword.focus();
            return false;
        }
        if(password.val()!== repassword.val()){
            alert('입력한 두 개의 비밀번호가 일치하지 않습니다');
            return false;
        }

    });

    // userID(e-mail) 가입여부 검사
    $("#checkid").click(function(e){
        e.preventDefault();
        var email = $("input[name='email']");
        if(email.val() == ''){
            alert('이메일을 입력하세요');
            email.focus();
            return false;
        } else {
            var emailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (!emailRegex.test(email.val())) {
                alert('이메일 주소가 유효하지 않습니다. ex)abc@gmail.com');
                email.focus();
                return false;
            }
        }

l

        $.ajax({
            url: 'selectUser.php',
            type: 'POST',
            data: {userID:email.val()},
            dataType: "json",
            success: function (msg) {
                //alert(msg); // 확인하고 싶으면 dataType: "text" 로 변경한 후 확인 가능
                // if(msg.result == 1){
                //     alert('사용 가능합니다');
                // } else if(msg.result == 0){
                //      alert('이미 가입된 아이디입니다');
                //     email.val('');
                // }
                if($row == null){
                  alert('사용 가능합니다');
                } else {
                  alert('이미 가입된 아이디입니다');
                }
            },
            error: function(jqXHR, textStatus, errorThrown){
                alert("arjax error : " + textStatus + "\n" + errorThrown);
            }
        });

        // $("#email").keyup(function(){
        //     //입력한 문자열을 읽어온다.
        //     var email=$(this).val();
        //     //ajax 요청을 해서 서버에 전송한다.
        //     $.ajax({
        //         method:"post",
        //         url:"selectUser.php",
        //         data:{email:email},
        //         success:function(data){
        //             var obj=JSON.parse(data);
        //             if(obj.canUse){//사용 가능한 아이디 라면
        //                 $("#overlapErr").hide();
        //                 // 성공한 상태로 바꾸는 함수 호출
        //                 successState("#email");
        //
        //             }else{//사용 가능한 아이디가 아니라면
        //                 $("#overlapErr").show();
        //                 errorState("#email");
        //             }
        //         }
        //     });
        // });




    });

});
</script>
<style>
body {
    font-family: 나눔바른고딕, NanumBarunGothic, 맑은고딕, "Malgun Gothic", 돋움, Dotum, "Apple SD Gothic Neo", sans-serif;
    font-size: 12px;
    color: rgb(33, 33, 33);
    letter-spacing: 0.03em;
}

table {
    width: 600px;
}

tr {
    height: 50px;
}

input[type=text], input[type=password] {
    padding: 5px 10px; /* 상하 우좌 */
    margin: 3px 0; /* 상하 우좌 */
    font-family: inherit; /* 폰트 상속 */
    border: 1px solid #ccc; /* 999가 약간 더 진한 색 */
    font-size:14pt;
    box-sizing: border-box;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus, input[type=password]:focus {
    border: 2px solid #555;
}

input[type=submit],input[type=button] {
    margin-top: 10px;
    width:100px;
    height:40px;
    line-height: 22px;
    padding: 5px, 10px; /* 상하 우좌 */
    background: #E6E6E6;
    color: #000000;
    font-size: 15px;
    font-weight: normal;
    letter-spacing: 1px;
    border: none;
    cursor: pointer;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
}

input[type=submit]:hover {
    background-color: #FFBF00;
}


</style>
</head>
<body>
<div class="container">
<h2>회원가입</h2>
<form method="post" action="a.register.php">
    <table>
        <tr>
            <td style='width:100px'>이름</td>
            <td><input type="text" size=37 name="userNM" value=""></td>
        </tr>
        <tr>
            <td>E-Mail</td>
            <td>
                <input type="text" size=25 name="email" value="">
                <input type="button" id="checkid" value="중복체크">
            </td>
        </tr>
        <tr>
            <td>휴대폰번호</td>
            <td><input type="text" size=37 name="mobileNO" value=""></td>
        </tr>
        <tr>
            <td>비밀번호</td>
            <td><input type="password" size=37 name="Password"></td>
        </tr>
        <tr>
            <td>비밀번호(확인)</td>
            <td><input type="password" size=37 name="rePassword"></td>
        </tr>
        <tr>
            <td colspan='2' align='center'><input type="submit" value="회원가입"></td>
        </tr>
    </table>
</fom>
</div>
</body>
</html>
