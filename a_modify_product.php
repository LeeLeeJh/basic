<?php

include("a_top_menu.php");

$bno = $_GET['idx'];

$sql = mysqli_query($conn, "select * from feedboard where idx ='".$bno."'");
$board = $sql->fetch_array();

$idx=$board["idx"];
$category=$board["category"];
$title=$board["title"];
$sub_title=$board["sub_title"];
$price=$board["price"];
$jeago=$board["jeago"];
$content=$board["content"];
$rep_picture=$board["rep_picture"];

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>상품수정페이지</title>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>

    <!-- <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="/css/top-menu.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


  <style>

  .container {
    margin-top: 50px;
    /* margin-left: 36%; */
  }

  .form-horizontal {
    margin-top: 50px;
    margin-left: 250px;

  }

  .form-group input {
    width: 400px;
  }

  .form-control {
    width: 400px;
  }

  .img_wrap {
    /* border: 1px solid lightgray; */
    width: 300px;
    margin-top: 50px;
    margin-bottom: 100px;
  }

  .img_wrap img {
    max-width: 100%;
  }

  .imgs_wrap {
    width: 600px;
    margin-top: 50px;
  }

  .imgs_wrap img {
    max-width: 200px;
  }

  .write_title {
    margin-top: 8%;
    margin-left: 45%;
  }
  </style>

  <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
  <script>

  var sel_file;

  $(document).ready(function(){
    $("#file").on("change", handleImgFileSelect);
  });

  function handleImgFileSelect(e) {
    var files = e.target.files;
    var filesArr = Array.prototype.slice.call(files);

    filesArr.forEach(function(f){
      if(!f.type.match("image.*")) {
        alert("확장자는 이미지 확장자만 가능합니다.");
        return;
      }

      sel_file = f;

      var reader = new FileReader();
      reader.onload = function(e){
        $("#img").attr("src", e.target.result);
      }
      reader.readAsDataURL(f);
    });
  }

  </script>

  <script type="text/javascript">
  function deleteImageAction(index) {
    console.log("index : "+index);
    sel_files.splice(index, 1);

    var img_id = "#img_id_"+index;
    $(img_id).remove();

    console.log(sel_files);
  }
  </script>

  </head>
  <body>






    			<form name="form" id="form" role="form" method="post" action="a_modify_ok.php/<?php echo $idx;?>" enctype="multipart/form-data">
            <div class="container" role="main">

              <div class="write_title">
                <p style=""><h3>상품수정</h3></p>
              </div>

          <input type="hidden" name="idx" value="<?=$bno?>"/>
          <div class="mb-3">
            <label for="title" style="display: inline-block; margin-top:50px;">카테고리</label>
            <div id="in_area">
                <select  name="category" style="height:35px;">
                  <option value="">-- 선택 --</option>
                  <option id="opt1" class="opt" value="수제사료">수제사료</option>
                  <option id="opt2" value="수제간식">수제간식</option>
                  <option id="opt3" value="천연수제껌">천연수제껌</option>
                  <option id="opt4" value="케이크·쿠키">케이크·쿠키</option>
                  <option id="opt5" value="천연파우더">천연파우더</option>


                  <!-- <php if($category == "수제사료"){
                    ?>
                    <option value="수제사료">수제사료</option>
                    <option value="수제간식">수제간식</option>
                    <option value="천연수제껌">천연수제껌</option>
                    <option value="케이크·쿠키">케이크·쿠키</option>
                    <option value="천연파우더">천연파우더</option>
                    <php
                  } if else($category == "수제간식") { ?>
                    <option value="수제간식">수제간식</option>
                    <option value="수제사료">수제사료</option>
                    <option value="천연수제껌">천연수제껌</option>
                    <option value="케이크·쿠키">케이크·쿠키</option>
                    <option value="천연파우더">천연파우더</option>
                    <php
                  } if else($category == "천연수제껌") { ?>
                    <option value="천연수제껌">천연수제껌</option>
                    <option value="수제사료">수제사료</option>
                    <option value="수제간식">수제간식</option>
                    <option value="케이크·쿠키">케이크·쿠키</option>
                    <option value="천연파우더">천연파우더</option>
                    <php
                  } if else($category == "케이크·쿠키") { ?>
                    <option value="케이크·쿠키">케이크·쿠키</option>
                    <option value="수제사료">수제사료</option>
                    <option value="수제간식">수제간식</option>
                    <option value="천연수제껌">천연수제껌</option>
                    <option value="천연파우더">천연파우더</option>
                    <php
                  } if else($category == "천연파우더") {
                     ?>
                  <option value="천연파우더">천연파우더</option>
                  <option value="수제사료">수제사료</option>
                  <option value="수제간식">수제간식</option>
                  <option value="천연수제껌">천연수제껌</option>
                  <option value="케이크·쿠키">케이크·쿠키</option>
                <php } ?> -->
                </select>
            </div>
</div>

<script>

$(document).ready(function(){

$("#opt1").each(function(){

if($(this).val()=="<?php echo $category;?>"){

$(this).prop("selected","selected"); // attr적용안될경우 prop으로

}

});

$("#opt2").each(function(){

if($(this).val()=="<?php echo $category;?>"){

$(this).prop("selected","selected"); // attr적용안될경우 prop으로

}

});

$("#opt3").each(function(){

if($(this).val()=="<?php echo $category;?>"){

$(this).prop("selected","selected"); // attr적용안될경우 prop으로

}

});

$("#opt4").each(function(){

if($(this).val()=="<?php echo $category;?>"){

$(this).prop("selected","selected"); // attr적용안될경우 prop으로

}

});

$("#opt5").each(function(){

if($(this).val()=="<?php echo $category;?>"){

$(this).prop("selected","selected"); // attr적용안될경우 prop으로

}

});

});

</script>


    				<div class="mb-3">

    					<label for="title">상품명</label>

    					<input type="text" class="form-control" name="title" id="title" value="<?php echo $title;?>">

    				</div>



    				<div class="mb-3">

    					<label for="reg_id">상품설명</label>

    					<input type="text" class="form-control" name="sub_title" id="reg_id" value="<?php echo $sub_title;?>">

    				</div>

            <div class="mb-3">

    					<label for="reg_id">기본가격</label>

    					<input type="text" class="form-control" name="price" id="reg_id" value="<?php echo $price;?>">

    				</div>

            <div class="mb-3">

              <label for="reg_id">판매수량</label>

              <input type="text" class="form-control" name="jeago" id="reg_id" value="<?php echo $jeago;?>">

            </div>

    				<!-- <div class="mb-3"> -->

    					<label for="content">상세정보</label>

    					<!-- <textarea class="form-control" rows="5" name="content2" id="content" placeholder="내용을 입력해 주세요" ></textarea> -->

              <textarea id="summernote" name="content">
                <?php echo $content;?>
              </textarea>

                <script type="text/javascript">
                $(document).ready(function() {
                    $('#summernote').summernote({
                      height: 400,
                      focus: true,
                      callbacks: {
                        onImageUpload: function(files, editor, welEditable) {
                                  sendFile(files[0], editor, welEditable);

                            },
                      }

                    });



                  function sendFile(file, editor, welEditable) {
                      var data = new FormData();
                        data.append("file", file);
                        $.ajax({
                          data: data,
                          type: 'POST',
                          url: "write_ok2.php",
                          cache: false,
                          contentType: false,
                          // enctype: "multipart/form-data",
                          processData: false,
                          success: function(data) {
                            // $('#summernote').summernote("insertNode",data.image);
                            // $('#summernote').summernote("insertNode",url);

                           // alert(data);
                            var image = $('<img>').attr('src','' + data);
                            $('#summernote').summernote("insertNode", image[0]);
                            editor.insertImage(welEditable, data);
                          },
                            error : function(jqXHR, textStatus, errorThrown) {
                                  alert(textStatus+" "+errorThrown);
                            }
                        });
                    }
              // $('form').on('submit', function (e) {
              //   e.preventDefault();
              // });
              //
              });
              </script>

              <!-- <div class="button">
              <input type="submit" value="submit">
              </div> -->
              <!-- </form> -->
    				<!-- </div> -->


            <label for="file">대표사진 등록</label>
            <input type="file" name="file" id="file" onchange="javascript:document.getElementById('file').value = "<?php echo $rep_picture;?>"">

              <div class="img_wrap">
                <img id="img" src="uploads/<?php echo $rep_picture;?>"/>
              </div>



    					<!-- <label for="file">사진첨부</label>

    					<input type="file" name="content" id="input_imgs" multiple>

              <div class="imgs_wrap">

              </div> -->

              <script type="text/javascript">





              var sel_files = [];

              $(document).ready(function(){
                $("#input_imgs").on("change", handleImgFileSelect);
              });

              // function fileUploadAction(){
              //   console.log("fileUploadAction");
              //   $("input_imgs").trigger('click');
              // }

              function handleImgFileSelect(e) {

                sel_files = [];
                var files = e.target.files;
                var filesArr = Array.prototype.slice.call(files);

                var index = 0;

                filesArr.forEach(function(f){
                  if(!f.type.match("image.*")) {
                    alert("확장자는 이미지 확장자만 가능합니다.");
                    return;
                  }

                  sel_files.push(f);

                  var reader = new FileReader();
                  reader.onload = function(e){
                    // var img_html = "<img src=\"" + e.target.result + "\" / />";
                    var html = "<a href=\"javascript:void(0);\" onclick=\"deleteImageAction("+index+")\" id=\"img_id_"+index+"\"><img src=\"" + e.target.result + "\" data-file='"+f.name"' class='selProductFile' title='Click to remove'></a>";
                    $(".imgs_wrap").append(html);
                    index++;
                  }
                  reader.readAsDataURL(f);
                });
              }
              </script>

              <!-- <div class="button">
                <input type="submit" value="submit">
              </div> -->
              <button type="submit" style="border:none; background-color: black; color:white; height:30px; width:60px; font-size:15px;" id="btnSave">등록</button>

      				<button type="button" onclick="history.go(-1);" style="border:1px solid black; background-color: white; color:black; height:30px; width:60px; font-size:15px; margin-bottom:50px;" id="btnList">취소</button>

</div>
    			</form>








  </body>
</html>
