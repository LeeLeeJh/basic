
<?php
include "db.php";

$bno = $_POST['id'];
$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
$sql = mysqli_query($conn,"update freeboard set name='".$_POST['name']."',title='".$_POST['title']."',content='".$_POST['content']."' where id='".$bno."'");
?>

<script type="text/javascript">alert("수정되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=read.php?id=<?php echo $bno ?>">
<!-- <meta http-equiv="refresh" content="0 url=freeTable.php"/> -->
