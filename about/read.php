
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
		$sql = mysqli_query($conn,"select * from editor_test"); /* 받아온 idx값을 선택 */
		$board = $sql->fetch_array();
	?>
<!-- 글 불러오기 -->
<div id="board_read">


			<div id="bo_content">
				<?php echo ("$board['content']"); ?>
			</div>

	</div>

</body>
</html>
