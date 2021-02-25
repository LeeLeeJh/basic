
<?php
include "db.php";
$rno = $_POST['rno'];
$sql = mysqli_query($conn,"select * from reply where idx='".$rno."'");
$reply = $sql->fetch_array();

$bno = $_POST['b_no'];
$sql2 = mysqli_query($conn,"select * from board where idx='".$bno."'");
$board = $sql2->fetch_array();

$sql3 = mysqli_query($conn,"update reply set content='".$_POST['content']."' where idx = '".$rno."'"); ?>
<script type="text/javascript">alert('수정되었습니다.'); location.replace("read.php?idx=<?php echo $bno; ?>");</script>
?>
