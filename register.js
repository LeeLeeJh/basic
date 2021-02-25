 $("#id").keyup(function(){
     //입력한 문자열을 읽어온다.
    var id=$(this).val();
    //ajax 요청을 해서 서버에 전송한다.
     $.ajax({
        method:"post",
        url:"selectUser.php",
        data:{id:id},
         success:function(data){
            var obj=JSON.parse(data);
             if(obj.canUse){//사용 가능한 아이디 라면
                $("#overlapErr").hide();
                 // 성공한 상태로 바꾸는 함수 호출
                 successState("#id");

             }else{//사용 가능한 아이디가 아니라면
                 $("#overlapErr").show();
                 errorState("#id");
             }
         }
     });
 });

    $(function()){
        $("#email").keyup(function(){
            var email=$("#email").val();
            // 이메일 검증할 정규 표현식
            var reg=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
           if(reg.test(email)){//정규표현식을 통과 한다면
                       $("#emailErr").hide();
                       // successState("#email");
            }else{//정규표현식을 통과하지 못하면
                       $("#emailErr").show();

                       // errorState("#email");
           }
        });
 });


 $("#pw").keyup(function(){
     var pw=$("#pw").val();
     // 비밀번호 검증할 정규 표현식
     var reg=/^.{8,}$/;
     if(reg.test(pw)){//정규표현식을 통과 한다면
                 $("#pwRegErr").hide();
               //  successState("#pw");
     }else{//정규표현식을 통과하지 못하면
                 $("#pwRegErr").show();
               //  errorState("#pw");
     }
 });
 $("#pwc").keyup(function(){
     var pwc=$(this).val();
     var pw=$("#pw").val();
     // 비밀번호 같은지 확인
     if(pwc==pw){//비밀번호 같다면
         $("#pwcErr").hide();
       //  successState("#pwc");
     }else{//비밀번호 다르다면         $
       ("#pwcErr").show();
       errorState("#pwc");
     }
 });





// 성공 상태로 바꾸는 함수
// function successState(sel){
//     $(sel)
//     .parent()
//     .removeClass("has-error")
//     .addClass("has-success")
//     .find(".glyphicon")
//     .removeClass("glyphicon-remove")
//     .addClass("glyphicon-ok")
//     .show();
//
//     $("#myForm button[type=submit]")
//                 .removeAttr("disabled");
// };
// // 에러 상태로 바꾸는 함수
// function errorState(sel){
//     $(sel)
//     .parent()
//     .removeClass("has-success")
//     .addClass("has-error")
//     .find(".glyphicon")
//     .removeClass("glyphicon-ok")
//     .addClass("glyphicon-remove")
//     .show();
//
//     $("#myForm button[type=submit]")
//                 .attr("disabled","disabled");
// };
