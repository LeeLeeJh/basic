 <?php

session_start();

$db_host = "127.0.0.1";
$db_user = "admin";
$db_password = "Myadmin@02;;";
$db_name = "db";
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);



if(isset($_SESSION['email']))
{
  $db_host = "127.0.0.1";
  $db_user = "admin";
  $db_password = "Myadmin@02;;";
  $db_name = "db";
  $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);


  $user_email = $_SESSION['email'];
  //echo "email : " .$user_email;

//  $sql = mysqli_query($conn,"select * from freeboard where id='".$bno."'");
  $sql = mysqli_query($conn, "select * from member where email='$user_email'");
  $board = $sql->fetch_array();
  // echo "name : " .$board['name'];
  $user_name = $board['name'];
  $uid = $board['uid'];

  //$globals['user_name'];


} else {    // 로그인창 띄워주기
  ?>
<!-- <li class="test"><a href="#"><p>회원가입</p></a></li>
<li class="test"><a href="#none" onclick="location.href='login.html'"><p>로그인</p></a></li> -->
<?php
} ?>






<!doctype html>
<head>
<meta charset="UTF-8">
<title>마켓정보</title>

<style>

h1 {
  color:black;
}
#board_write {
	width:900px;
	position:relative;
	margin:0 auto;
}
#write_area {
	margin-top:70px;
	font-size:14px;}
#in_name {
  display: none;
	margin-top:30px;
}
#in_name textarea {
	font-weight:bold;
	font-size:26px;
	color:#333;
	width: 900px;
	border:none;
	resize: none;
}
#in_title {
	margin-top:30px;
}
#in_title textarea {
	font-weight:bold;
	font-size:23px;
	color:#333;
	width: 900px;
	border:none;
	resize: none;
}
.wi_line {
	border:solid 1px lightgray;
	/* margin-top:5px; */
}
#in_content {
	margin-top:10px;
}
#in_content textarea {
	font:14px;
	color:#333;
	width: 900px;
	height: 400px;
	resize: none;
}
#in_pw input {
	font:14px;
	margin-top:10px;
}
.bt_se {
	margin-top:20px;
	text-align:center;
}
.bt_se button {
	width:100px;
	height:30px;
}

.img_wrap {
  width: 300px;
  margin-top: 50px;
}

.img_wrap img {
  max-width: 100%;
}

</style>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>

var sel_file;

$(document).ready(function(){
  $("#file").on("change", handleImgFileSelect);
});

function handleImgFileSelect(e) {
  var files = e.target.files;
  var filesArr = Array.prototype.slice.call(files);

  filesArr.forEach(function(f){
    if(!f.type.match("image.*")) {
      alert("확장자는 이미지 확장자만 가능합니다.");
      return;
    }

    sel_file = f;

    var reader = new FileReader();
    reader.onload = function(e){
      $("#img").attr("src", e.target.result);
    }
    reader.readAsDataURL(f);
  });
}

</script>

</head>



<body>
    <div id="board_write">
        <h1>마켓정보 등록</h1>

            <div id="write_area">
                <form action="market_info_ok.php" method="post" enctype="multipart/form-data">
                    <div id="in_title">
                        <textarea name="title" id="utitle" rows="1" cols="55" placeholder="제목" maxlength="100" required></textarea>
                    </div>
                    <div class="wi_line"></div>
                    <div id="in_name">
                        <div name="name" id="uname" rows="1" cols="55" placeholder="글쓴이" maxlength="100" required>글쓴이 <?php echo $user_name;?></div>
                    </div>
                    <!-- <div id="in_area">
                        <select name="areaOption">
                          <option value="서울권">서울권</option>
                          <option value="경기권">경기권</option>
                          <option value="강원권">강원권</option>
                          <option value="충북권">충북권</option>
                          <option value="충남권">충남권</option>
                          <option value="전북권">전북권</option>
                          <option value="전남권">전남권</option>
                          <option value="경북권">경북권</option>
                          <option value="경남권">경남권</option>
                          <option value="제주권">제주권</option>
                        </select>
                    </div> -->
                    <div class="wi_line">
                      <div id="date">
                        시작 날짜 :
                        <input type='date' name="start_date" />
                        종료 날짜 :
                        <input type='date' name="end_date" />
                      </div>
                    </div>
                    <div class="wi_line"></div>
                    <div id="in_content">
                        <textarea name="content" id="ucontent" placeholder="내용" required></textarea>
                    </div>

                    <div>
                        <label for="upfile">사진첨부</label>
                        <input type="file" name="b_file" id="file" />
                    </div>
                    <div class="img_wrap">
                      <img id="img" />
                    </div>
                    </div>
                    <div class="bt_se">
                        <button type="submit">등록</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
