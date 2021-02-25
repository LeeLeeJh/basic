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

.top-menu:hover {
  background-color: antiquewhite;
}

.top-menu ul {
  margin-top: 30px;
  list-style: none;
  text-align: left;
  border-top: 1px solid lightgray;
  border-bottom: 1px solid lightgray;
  padding: 10px 0;
}
.top-menu ul li {
  font-family: sans-serif;
  display: inline;
  text-transform: uppercase;
  padding: 0 10px;
  letter-spacing: 1px;
  /* margin-left: 30px; */
}
.top-menu ul li a {
  color: black;
  text-decoration: none;
}
.top-menu ul li:hover {
  /* background-color: antiquewhite; */
}
.wrapper{
  margin: 0 auto;
  width: 1024px;
}
.top {
  background-color: white;
  left: 0;
  padding: 0;
  width: 100%;
  height: 60px;
  padding-top: 35px;
}
.top p {
  font-size: 12px;
  line-height: 20px;
}
.top p:hover {
  color: #a8a8a8;
}

#usermenu .test {
  position: relative;
}
#usermenu ul {
  list-style: none;
  position: absolute;
  top: 25px;
  display: none;


}
#usermenu .test:hover ul {
  display: block;
}
#usermenu .child {
  float: right;
  color: black;
  background-color: white;
  font-size: 12px;
  line-height: 20px;
}
</style>
<link rel="stylesheet" href="market.css">

<div class="top">
  <div class="wrapper">
    <ul class="ctop-menu">
      <li class="sometimes"><a href="#"><p><h1>logo</h1></p></a></li>
      <?php
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
        $sql = mysqli_query($conn, "select name from member where email='$user_email'");
        $board = $sql->fetch_array();
      //  echo "name : " .$board['name'];
        $user_name = $board['name'];

        $globals['user_name'];
        ?>
        <ul id="usermenu">
        <!-- <li class="test"><a href="#"><p><?php echo "{$_SESSION['email']}"?>님</p></a> -->
        <li class="test"><a href="#"><p><?php echo $board['name']?>님</p></a>
       <ul>
              <li class="child"><a href="#none" onclick="location.href='logout.php'"> 로그아웃 </a></li>

       </ul>
       </li>
       </ul>
        <?php

      } else {
        ?>
      <li class="test"><a href="#"><p>회원가입</p></a></li>
      <li class="test"><a href="#none" onclick="location.href='login.html'"><p>로그인</p></a></li>
     <?php
   } ?>
</ul>
</div>
</div>

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

if($start <= $now && $now <= $end){
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
