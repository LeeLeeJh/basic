
<?php
$db_host = "127.0.0.1";
$db_user = "admin";
$db_password = "Myadmin@02;;";
$db_name = "db";
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
?>
<!doctype html>
<head>
<meta charset="UTF-8">
<title>게시판</title>
<!-- <script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="/js/jquery-ui.js"></script>-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="common.js"></script>

<style>

#board_read {
	width:900px;
	position: relative;
	word-break:break-all;
}



#user_info {
	font-size:14px;
}
#user_info ul li {
	float:right;
	margin-right:10px;
}
#bo_line {
	width:880px;
	height:2px;
	background: gray;
	margin-top:20px;
}
#bo_content {
	margin-top:20px;
}
#bo_ser {
	font-size:14px;
	color:#333;
	position: absolute;
	right: 0;
}

#bo_ser li {
  list-style: none;
}

#bo_ser > ul > li {
	float:left;
	margin-left:10px;
}

.reply_view {
	width:900px;
	margin-top:100px;
	word-break:break-all;
}
.dap_lo {
	font-size: 14px;
	padding:10px 0 15px 0;
	border-bottom: solid 1px gray;
}
.dap_to {
	margin-top:5px;
}
.rep_me {
	font-size:12px;
}
.rep_me ul li {
	float:left;
	width: 30px;
}
.dat_delete {
	display: none;
}
.dat_edit {
	display:none;
}
.dap_sm {
	position: absolute;
	top: 10px;
}
.dap_edit_t{
	width:520px;
	height:70px;
	position: absolute;
	top: 40px;
}
.re_mo_bt {
	position: absolute;
	top:40px;
	right: 5px;
	width: 90px;
	height: 72px;
}
#re_content {
	width:700px;
	height: 56px;
}
.dap_ins {
	margin-top:50px;
}
.re_bt {
	position: absolute;
	width:100px;
	height:56px;
	font-size:16px;
	margin-left: 10px;
}
#foot_box {
	height: 50px;
}



</style>
<!-- <link rel="stylesheet" type="text/css" href="/css/style.css" /> -->
</head>
<body>
	<?php
		$bno = $_GET['id']; /* bno함수에 id값을 받아와 넣음*/
    //echo "id:" .$_GET['id'];
		$view = mysqli_fetch_array(mysqli_query($conn,"select * from freeboard where id ='".$bno."'"));
		$view = $view['view'] + 1;
		$fet = mysqli_query($conn,"update freeboard set view = '".$view."' where id = '".$bno."'");
		$sql = mysqli_query($conn,"select * from freeboard where id='".$bno."'"); /* 받아온 idx값을 선택 */
		$board = $sql->fetch_array();
	?>
<!-- 글 불러오기 -->
<div id="board_read">

	<h3>제목 : <?php echo $board['title']; ?></h3>
  <div id="bo_line"></div>
		<div id="user_info">
      작성자 :
			<?php echo $board['name']; ?> <?php echo $board['date']; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;조회:<?php echo $board['view']; ?>
				<div id="bo_line"></div>
			</div>
			<div id="bo_content">
				<?php echo nl2br("$board[content]"); ?>
			</div>

<div>

	<img src="uploads/<?php echo $board['file'];?>">
<!-- 파일 : <a href="uploads/<?php echo $board['file'];?>" download><?php echo $board['file']; ?></a> -->
</div>



	<!-- 목록, 수정, 삭제 -->
	<div id="bo_ser">
		<ul>
			<li><a href="freeTable.php">[목록으로]</a></li>
			<li><a href="modify.php?id=<?php echo $board['id']; ?>">[수정]</a></li>
			<li><a href="delete.php?id=<?php echo $board['id']; ?>">[삭제]</a></li>
		</ul>
	</div>

<!-- 댓글 -->
<div class="reply_view">
	<h4>댓글</h4>
		<?php
			$sql3 = mysqli_query($conn,"select * from reply where con_num='".$bno."' order by idx desc");
			while($reply = $sql3->fetch_array()){
		?>
		<div class="dap_lo">
			<div><b><?php echo $reply['name'];?></b></div>
			<div class="dap_to comt_edit"><?php echo nl2br("$reply[content]"); ?></div>
			<div class="rep_me dap_to"><?php echo $reply['date']; ?></div>
			<div class="rep_me rep_menu">
				<a class="dat_edit_bt" href="#">수정</a>
				<a class="dat_delete_bt" href="reply_delete_ok.php">삭제</a>
			</div>
			<!-- 댓글 수정 폼 dialog -->
			<div class="dat_edit">
				<form method="post" action="reply_modify_ok.php">
					<input type="hidden" name="rno" value="<?php echo $reply['idx']; ?>" /><input type="hidden" name="b_no" value="<?php echo $bno; ?>">
					<input type="password" name="pw" class="dap_sm" placeholder="비밀번호" />
					<textarea name="content" class="dap_edit_t"><?php echo $reply['content']; ?></textarea>
					<input type="submit" value="수정하기" class="re_mo_bt">
				</form>
			</div>
			<!-- 댓글 삭제 비밀번호 확인 -->
			<div class='dat_delete'>
				<form action="reply_delete_ok.php" method="post">
					<input type="hidden" name="rno" value="<?php echo $reply['idx']; ?>" /><input type="hidden" name="b_no" value="<?php echo $bno; ?>">
			 		<p>비밀번호<input type="password" name="pw" /> <input type="submit" value="확인"></p>
				 </form>
			</div>
		</div>
	<?php } ?>

	<!--- 댓글 입력 폼 -->
	<div class="dap_ins">
		 <form method="post" class="reply_form">
       <!-- <form action="reply_ok.php" method="post" class="reply_form"> -->
			<input type="hidden" name="bno" value="<?php echo $bno; ?>">
			<input type="text" name="dat_user" id="dat_user" size="15" placeholder="아이디">
			<!-- <input type="password" name="dat_pw" id="dat_pw" size="15" placeholder="비밀번호"> -->
			<div style="margin-top:10px; ">
				<textarea name="content" class="reply_content" id="re_content" ></textarea>
				<button type="submit" id="rep_bt" class="re_bt">등록</button>
			</div>
		</form>
	</div>
</div><!--- 댓글 불러오기 끝 -->
<div id="foot_box"></div>
</div>
<!-- <script>
$(document).ready(function(){
  $(".re_bt").click(function(){
    var params = $("form").serialize();
        $.ajax({
          type: 'post',
        //	url: 'reply_ok.php',
          url: 'reply_ok.php?=<?php echo $board["id"]; ?>',
          data : params,
          success: function(data){
            $(".reply_view").html(data);
            $(".reply_content").val('');
          }
        });
      });

});
</script> -->
</body>
</html>
