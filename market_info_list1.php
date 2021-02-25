<?php
$db_host = "127.0.0.1";
$db_user = "admin";
$db_password = "Myadmin@02;;";
$db_name = "db";
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

$list = mysqli_query($conn, "select * from market_info");
?>
<style>
.info {
  height: auto;
  width: 800px;
  border: 1px solid grey;
  margin-top: 70px;

}
</style>
<link rel="stylesheet" href="market.css">
<nav id="topMenu" >
  <ul>
    <li><a class="menuLink" href="#">마켓정보</a></li>
    <li><a class="menuLink" href="#">마켓홍보</a></li>
    <li><a class="menuLink" href="#">마켓스토리</a></li>
    <li><a class="menuLink" href="#">참여후기</a></li>
    <li><a class="menuLink" href="freeTable.php">자유게시판</a></li>
  </ul>
</nav>
<div class="date">
  <ul>
    <li><a class="menuLink" href="market_info_list0.php">진행예정</a></li>
    <li><a class="menuLink" href="market_info_list.php">진행중</a></li>
    <li><a class="menuLink" href="market_info_list1.php">진행종료</a></li>
  </ul>
</div>
<?php
while($board = $list->fetch_array())
{
  $id=$board["id"];
  $title=$board["title"];
  // $start=date("Y-m-d", $board["start"]);
  $start=date($board["start"]);
  $end=date($board["end"]);
  $content=$board["content"];
  $image=$board["img"];
  // $pw=$board["pw"];
  $name=$board["name"];
  $date=date("Y-m-d",  strtotime($board["wdate"]));
  $view=$board["view"];
  $now = date("Y-m-d");
   // $sql2 = mysqli_query($conn, "select * from reply where con_num='$id'");
   // $rep_count = mysqli_num_rows($sql2);

  // $content=$board["content"];
//echo "staed" .$start;

if($now > $end){
?>



<!-- <span class="re_ct">[<?php echo $rep_count; ?>]</span> -->



<body>

      <div class="info">
        <ul class="info_img"><img src="uploads/<?php echo $board["img"];?>"></ul>

        <ul class="info_title" width="500"><a href="read.php?id=<?php echo $board["id"];?>"><?php echo $title;?></a></ul>
        <ul class="info_content"><?php echo $content; ?>
        <!-- <ul class="info_name"><?php echo $name; ?></ul> -->
    <ul><?php echo $start; ?> ~ <?php echo $end; ?></ul>
        <!-- <ul>작성일 : <?php echo $date; ?></ul> -->
      </div>

</body>
<?php }
}?>
