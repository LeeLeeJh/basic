

    <?
     $connect=mysqli_connect("127.0.0.1",  "admin",  "Myadmin@02;;", "db");
     $query= "select id, title, width, height from  images order by id DESC " ;
     $result=mysqli_query($query,$connect );
     $row=mysqli_fetch_array($result);
     echo "<a href=test.php>그림 올리기</a>";
     echo( "<table bordr=1 width=90% align=center>
    < tr> <td>이미지</td>
       <td>제목</td>
    < /tr>
     ");
     while($row){
         echo ( "<tr><td><a href=view.html?id=$row[id]><img src=./view.html?id=$row[id]
     width=$row[width] height=$row[height] ></a></td>
    < td>$row[title]</td> ");
       $row=mysqli_fetch_array($result);
       }
       echo( "</table>");
     ?>
