

    <?
     $connect=mysqli_connect("127.0.0.1",  "admin",  "Myadmin@02;;", "db");

     extract($_REQUEST);
     $filename = $_FILES[image][tmp_name];
     $handle = fopen($filename,"rb");
     $size = GetImageSize($_FILES[image][tmp_name]);
     $width = $size[0];
     $height = $size[1];
     $imageblob = addslashes(fread($handle, filesize($filename)));
    $filesize = $filename;
     fclose($handle);
     //메모리 오류 방지
    ini_set("memory_limit" , -1);
     $query="INSERT INTO  images (image,title,width,height) VALUES ('$imageblob', '$title', '$width','$height')" ;
     $result=mysqli_query($query,$connect );
     echo "<script>location.href='images_list.php';</script>";
     ?>
