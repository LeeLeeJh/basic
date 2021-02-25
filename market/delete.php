
<?php
	include "db.php";

	$bno = $_GET['id'];
	$sql = mysqli_query($conn,"delete from freeboard where id='$bno';");
?>
<script type="text/javascript">alert("삭제되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=freeTable.php" />
