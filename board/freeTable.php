<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>
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
        $db_host = "127.0.0.1";
        $db_user = "admin";
        $db_password = "Myadmin@02;;";
        $db_name = "db";
        $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

        $list = mysqli_query($conn, "select * from freeboard");


        while($board = $list->fetch_array())
        {
          $id=$board["id"];
          $title=$board["title"];
          // $pw=$board["pw"];
          $name=$board["name"];
          $date=date("Y-m-d",  strtotime($board["wdate"]));
          $view=$board["view"]
          // $content=$board["content"];

       ?>





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
        <a class="btn btn-default pull-right" href=write.php>글쓰기</a>
        <div class="text-center">
          <ul class="pagination">
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            </ul>
          </div>
  <script src="js/jquery-3.1.1.js"></script>
  <script src="js/bootstrap.js"></script>
      </div>
  </body>
</html>
