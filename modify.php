<?php
	include "db.php";

	$bno = $_GET['id'];
	$sql = mysqli_query($conn,"select * from freeboard where id='$bno';");
	$board = $sql->fetch_array();
 ?>
<!doctype html>
<head>
<meta charset="UTF-8">
<title>게시판</title>
<link rel="stylesheet" href="/css/style.css" />
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
<style>
.img_wrap {
  width: 300px;
  margin-top: 50px;
}

.img_wrap img {
  max-width: 100%;
}

</style>
</head>
<body>
    <div id="board_write">
        <h1>자유게시판</h1>
        <h4></h4>
            <div id="write_area">
                <form action="modify_ok.php?<?php echo $board['id']; ?>" method="post">
                    <input type="hidden" name="id" value="<?=$bno?>" />
                    <div id="in_title">
                        <textarea name="title" id="utitle" rows="1" cols="55" placeholder="제목" maxlength="100" required><?php echo $board['title']; ?></textarea>
                    </div>
                    <div class="wi_line"></div>
                    <div id="in_name">
                        <textarea name="name" id="uname" rows="1" cols="55" placeholder="글쓴이" maxlength="100" required><?php echo $board['name']; ?></textarea>
                    </div>
                    <div class="wi_line"></div>
                    <div id="in_content">
                        <textarea name="content" id="ucontent" placeholder="내용" required><?php echo $board['content']; ?></textarea>
                    </div>

										<div id="in_file">
										<input type="file" name="b_file" id="file">

										<script>
                    if("#file" == null){
										<img src="uploads/<? echo $board['file'];?>">
									} else {
										<div class="img_wrap">
                      <img id="img"/>
                    </div>
									}
                   </script>
										</div>
                    <!-- <div id="in_pw">
                        <input type="password" name="pw" id="upw"  placeholder="비밀번호" required />
                    </div> -->
                    <div class="bt_se">
                        <button type="submit">글 작성</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
