

    <?
     $connect=mysqli_connect("127.0.0.1",  "admin",  "Myadmin@02;;", "db");
     extract($_REQUEST);
     $query= "select * from images where id=$id" ;
     $result=mysqli_query($query,$connect );
     $row=mysqli_fetch_array($result);
        Header("Content-type:  image/jpeg");
        echo $row[image];
      mysqli_close();
     ?>
