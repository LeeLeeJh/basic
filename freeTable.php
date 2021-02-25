<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/mainmenu.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

  <style>
  .title p {
    width: 100%;
    margin-left: 50px;
    text-align: center;
  }

  .re_ct {
    font-weight: bold;
    color:blue;
  }


   #page_num {

	font-size: 14px;
	margin-left: 260px;
	margin-top:30px;
}
 #page_num ul li {
  list-style: none;
	float: left;
	margin-left: 10px;
	text-align: center;
}
.fo_re {
	font-weight: bold;
	color:red;
}



  </style>
  </head>
  <body>


    <div class="top">
      <div class="wrapper">
        <ul class="ctop-menu">
          <li class="sometimes"><a href="#"><p><h1>logo</h1></p></a></li>
          <?php
          if(isset($_SESSION['email']))
          { ?>
            <ul id="usermenu">
            <li class="test"><a href="#"><p><?php echo "{$_SESSION['email']}"?>님</p></a>
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

          <div class="d5">
          <form>
          <input type="text" placeholder="검색어 입력">
          <button type="submit"></button>
          </form>
          </div>
        </ul>
      </div>
    </div>


    <div class="top-menu">
      <ul>
        <li>
          <a href="#"><image class="menu-icon"></image></a>
        </li>
        <li><a href="#">마켓정보</a></li>
        <li><a href="#">마켓홍보</a></li>
        <li><a href="#">마켓스토리</a></li>
        <li><a href="#">참여후기</a></li>
        <li><a href="#">자유게시판</a></li>

      </ul>
    </div>


    <br />
    <div class="title">

      <p>
        <h1>자유게시판</h1>
      </p>

    <br />
    </div>

    <div class="container">
      <table class="table table-hover">
        <thead>
        <tr>
          <th>번호</th>
          <th>제목</th>
          <th>작성자</th>
          <th>날짜</th>
          <th>조회수</th>
          </tr>
        </thead>
        <?php
        if(isset($_GET['page'])){
                      $page = $_GET['page'];
                        }else{
                          $page = 1;
                        }

        $db_host = "127.0.0.1";
        $db_user = "admin";
        $db_password = "Myadmin@02;;";
        $db_name = "db";
        $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
        $conn->set_charset("utf8");


        $sql = mysqli_query($conn, "select * from freeboard");
                         $row_num = mysqli_num_rows($sql); //게시판 총 레코드 수
                         $list = 15; //한 페이지에 보여줄 개수
                         $block_ct = 5; //블록당 보여줄 페이지 개수

                         $block_num = ceil($page/$block_ct); // 현재 페이지 블록 구하기
                         $block_start = (($block_num - 1) * $block_ct) + 1; // 블록의 시작번호
                         $block_end = $block_start + $block_ct - 1; //블록 마지막 번호

                         $total_page = ceil($row_num / $list); // 페이징한 페이지 수 구하기
                         if($block_end > $total_page) $block_end = $total_page; //만약 블록의 마지박 번호가 페이지수보다 많다면 마지박번호는 페이지 수
                         $total_block = ceil($total_page/$block_ct); //블럭 총 개수
                         $start_num = ($page-1) * $list; //시작번호 (page-1)에서 $list를 곱한다.

                         $sql2 = mysqli_query($conn,"select * from freeboard order by id desc limit $start_num, $list");





        while($board = $sql2->fetch_array())
        {
          $id=$board["id"];
          $title=$board["title"];
          // $pw=$board["pw"];
          $name=$board["name"];
          $date=date("Y-m-d",  strtotime($board["wdate"]));
          $view=$board["view"]
           // $sql2 = mysqli_query($conn, "select * from reply where con_num='$id'");
           // $rep_count = mysqli_num_rows($sql2);

          // $content=$board["content"];


          // $sql3 = mysqli_query($conn,"select * from reply where con_num='".$board['id']."'");
          //                    $rep_count = mysqli_num_rows($sql3);


       ?>



<!-- <span class="re_ct">[<?php echo $rep_count; ?>]</span> -->

        <tbody>
            <tr>
            <td><?php echo $id; ?></td>
            <td width="500"><a href="read.php?id=<?php echo $board["id"];?>"><?php echo $title;?></a></td>
            <!-- <td><a href="#">$title; ?></a></td> -->
            <td><?php echo $name; ?></td>
            <!-- <td><// $pw; ?></td> -->
            <td><?php echo $date; ?></td>
            <td><?php echo $view; ?></td>
            <!-- <td> //$content; ?></td> -->
          </tr>
        </tbody>
      <?php } ?>


        </table>
        <div id="page_num">
            <ul>
                <?php
                  if($page <= 1)
                  { //만약 page가 1보다 크거나 같다면
                    echo "<li class='fo_re'>처음</li>"; //처음이라는 글자에 빨간색 표시
                  }else{
                    echo "<li><a href='?page=1'>처음</a></li>"; //알니라면 처음글자에 1번페이지로 갈 수있게 링크
                  }
                  if($page <= 1)
                  { //만약 page가 1보다 크거나 같다면 빈값

                  }else{
                  $pre = $page-1; //pre변수에 page-1을 해준다 만약 현재 페이지가 3인데 이전버튼을 누르면 2번페이지로 갈 수 있게 함
                    echo "<li><a href='?page=$pre'>이전</a></li>"; //이전글자에 pre변수를 링크한다. 이러면 이전버튼을 누를때마다 현재 페이지에서 -1하게 된다.
                  }
                  for($i=$block_start; $i<=$block_end; $i++){
                    //for문 반복문을 사용하여, 초기값을 블록의 시작번호를 조건으로 블록시작번호가 마지박블록보다 작거나 같을 때까지 $i를 반복시킨다
                    if($page == $i){ //만약 page가 $i와 같다면
                      echo "<li class='fo_re'>[$i]</li>"; //현재 페이지에 해당하는 번호에 굵은 빨간색을 적용한다
                    }else{
                      echo "<li><a href='?page=$i'>[$i]</a></li>"; //아니라면 $i
                    }
                  }
                  if($block_num >= $total_block){ //만약 현재 블록이 블록 총개수보다 크거나 같다면 빈 값
                  }else{
                    $next = $page + 1; //next변수에 page + 1을 해준다.
                    echo "<li><a href='?page=$next'>다음</a></li>"; //다음글자에 next변수를 링크한다. 현재 4페이지에 있다면 +1하여 5페이지로 이동하게 된다.
                  }
                  if($page >= $total_page){ //만약 page가 페이지수보다 크거나 같다면
                    echo "<li class='fo_re'>마지막</li>"; //마지막 글자에 긁은 빨간색을 적용한다.
                  }else{
                    echo "<li><a href='?page=$total_page'>마지막</a></li>"; //아니라면 마지막글자에 total_page를 링크한다.
                  }
                ?>
              </ul>
            </div>





        <a class="btn btn-default pull-right" href=write.php>글쓰기</a>
        <!-- <div class="text-center">
          <ul class="pagination">
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            </ul>
          </div> -->
    <script src="js/jquery-3.1.1.js"></script>
    <script src="js/bootstrap.js"></script>
      </div>



  </body>
</html>
