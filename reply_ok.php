
<?php
$db_host = "127.0.0.1";
$db_user = "admin";
$db_password = "Myadmin@02;;";
$db_name = "db";
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

	$bno = $_POST['bno'];
	$userpw = password_hash($_POST['dat_pw'], PASSWORD_DEFAULT);
	$sql = mysqli_query($conn,"insert into reply(con_num,name,content) values('".$bno."','".$_POST['dat_user']."','".$_POST['content']."')");
?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="common.js"></script>
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


	<h3>댓글목록</h3>
		<?php
			$sql3 = mysqli_query($conn,"select * from reply where con_num='".$bno."' order by idx desc");
      echo "bno" .$bno;
			while($reply = $sql3->fetch_array()){
		?>
		<div class="dap_lo">
			<div><b><?php echo $reply['name'];?></b></div>
			<div class="dap_to comt_edit"><?php echo nl2br("$reply[content]"); ?></div>
			<div class="rep_me dap_to"><?php echo $reply['date']; ?></div>
			<div class="rep_me rep_menu">
				<a class="dat_edit_bt" href="#">수정</a>
				<a class="dat_delete_bt" href="#">삭제</a>
			</div>
			<!-- 댓글 수정 폼 dialog -->
			<div class="dat_edit">
				<form method="post" action="rep_modify_ok.php">
					<input type="hidden" name="rno" value="<?php echo $reply['idx']; ?>" /><input type="hidden" name="b_no" value="<?php echo $bno; ?>">
					<input type="password" name="pw" class="dap_sm" placeholder="비밀번호" />
					<textarea name="content" class="dap_edit_t"><?php echo $reply['content']; ?></textarea>
					<input type="submit" value="수정하기" class="re_mo_bt">
				</form>
			</div>
			<!-- 댓글 삭제 비밀번호 확인 -->
			<div class='dat_delete'>
				<form action="reply_delete.php" method="post">
					<input type="hidden" name="rno" value="<?php echo ['idx']; ?>" /><input type="hidden" name="b_no" value="<?php echo $bno; ?>">
			 		<p>비밀번호<input type="password" name="pw" /> <input type="submit" value="확인"></p>
				 </form>
			</div>
		</div>
	<?php } ?>

	<!--- 댓글 입력 폼 -->
	<div class="dap_ins">
		<form method="post" class="reply_form">
			<input type="hidden" name="bno" value="<?php echo $bno; ?>">
			<input type="text" name="dat_user" id="dat_user" size="15" placeholder="아이디">
			<input type="password" name="dat_pw" id="dat_pw" size="15" placeholder="비밀번호">
			<div style="margin-top:10px; ">
				<textarea name="content" class="reply_content" id="re_content" ></textarea>
				<button type="submit" id="rep_bt" class="re_bt">댓글</button>
			</div>
		</form>
	</div>
