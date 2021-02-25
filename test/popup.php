<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<!doctype html>
<html>
<head>
    <title>Modal</title>
    <style>

    .product_title {
      /* float:left; */
      display:inline-block;
      font-size:16px;
      height: 50px;
      /* font-weight: bold; */
      margin-left: 10px;
    }
#modal {
  position:relative;
  width:100%;
  height:100%;
  z-index:1;
}

.modal-body {
  margin-top: -25px;
}

#modal h2 {
  margin:0;
}

.button {
  margin-left: 30%;
}

#modal button {
  display:inline-block;
  width:100px;
}

#modal .modal_content {
  width:420px;
  margin:100px auto;
  padding:20px 10px;
  background:#fff;
  border:2px solid #666;
}

#modal .modal_layer {
  position:fixed;
  top:0;
  left:0;
  width:100%;
  height:100%;
  background:rgba(0, 0, 0, 0.5);
  z-index:-1;
}

.rating {
      float:left;
      display: inline-block;
    }

    /* :not(:checked) is a filter, so that browsers that don’t support :checked don’t
      follow these rules. Every browser that supports :checked also supports :not(), so
      it doesn’t make the test unnecessarily selective */
    .rating:not(:checked) > input {
        position:absolute;
        top:-9999px;
        clip:rect(0,0,0,0);
    }

    .rating:not(:checked) > label {
        float:right;
        width:1em;
        /* padding:0 .1em; */
        overflow:hidden;
        white-space:nowrap;
        cursor:pointer;
        font-size:200%;
        /* line-height:1.2; */
        color:#ddd;
    }

    .rating:not(:checked) > label:before {
        content: '★ ';
    }

    .rating > input:checked ~ label {
        color: #FFCC00;

    }

    .rating:not(:checked) > label:hover,
    .rating:not(:checked) > label:hover ~ label {
      color: #FFCC00;

    }

    .rating > input:checked + label:hover,
    .rating > input:checked + label:hover ~ label,
    .rating > input:checked ~ label:hover,
    .rating > input:checked ~ label:hover ~ label,
    .rating > label:hover ~ input:checked ~ label {
      color: #FFCC00;

    }

    .rating > label:active {
        position:relative;
        top:2px;
        left:2px;
    }

    .container {
      margin-top: 20px;
      display: inline-block;
    }
    .review_photo label {
      margin-top: 30px;
      display: inline-block; padding: .5em .75em; color: #999;
      font-size: inherit; line-height: normal;
      vertical-align: middle; background-color: #fdfdfd;
      cursor: pointer; border: 1px solid #ebebeb; border-bottom-color: #e2e2e2;
      border-radius: .25em;
     }

    .review_photo input[type="file"] {
       position: absolute; width: 1px; height: 1px;
       padding: 0; margin: -1px; overflow: hidden;
       clip:rect(0,0,0,0);
       border: 0; }

.img_wrap {
  display: none;
  width: 100px; margin-top: 50px;
  margin-bottom: 50px;
       }

.img_wrap img {
  max-width: 100%;
       }

h4 {
  margin-left: 20px;
}
</style>

</head>
<body>

<div id="root">

    <button type="button" id="modal_opne_btn">리뷰쓰기</button>

</div>

<div id="modal">

    <div class="modal_content">
        <h4>리뷰작성</h4>
        <hr />
        <div class="modal-body">
        <img style="width:80px; display:inline-block;" src="https://happypangpang.net/web/product/big/eunsohee_69.jpg" />
        <p class="product_title">붕어빵 데일리랩 네이처 80매 10팩</p>
        <div class="container">
        	<div class="row">
            <p style="margin-left:23px; float:left; display:inline-block;">만족도</p>

        	<div style="margin-top:-10px; margin-left:35px;" class="rating">
              <input type="radio" class="stars" id="star5" name="rating" value="5" /><label for="star5" title="Meh">5 stars</label>
              <input type="radio" class="stars" id="star4" name="rating" value="4" /><label for="star4" title="Kinda bad">4 stars</label>
              <input type="radio" class="stars" id="star3" name="rating" value="3" /><label for="star3" title="Kinda bad">3 stars</label>
              <input type="radio" class="stars" id="star2" name="rating" value="2" /><label for="star2" title="Sucks big tim">2 stars</label>
              <input type="radio" class="stars" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
            </div>
        	</div>
        </div>

        <script>
        $("input[name=rating]").click(function(){
        var value = $("input[name=rating]:checked").val();
        alert(value);
        })
        </script>

        <script>



        var sel_file;

        $(document).ready(function(){

          $("#infile").on("change", handleImgFileSelect);
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
              $('.img_wrap').show();
              $("#img").attr("src", e.target.result);
            }
            reader.readAsDataURL(f);
          });
        }

        </script>

      <div class="review_input">
        <input style="width:350px;"placeholder="제목" id="review_title" name="review_title" />
        <p style="color:lightgray;">최소 10자 ~ 최대 500자 이하 작성 가능</p>
        <textarea id="review_text" cols="40" rows="5" autofocus required wrap="hard" maxlength="500"></textarea>
      </div>

      <div class="review_photo">
      <!-- <p style="color:lightgray;">이미지 최대 4장 등록 가능</p> -->
      <label for="infile">사진등록</label>
      <input type="file" id="infile">
      </div>
      <div class="img_wrap">
        <img id="img" />
      </div>

      </div>
      <div class="button">
        <button type="button" style="display:inline-block;" id="modal_register_btn">등록</button>
        <button type="button" style="display:inline-block;" id="modal_close_btn">취소</button>
      </div>

    </div>

    <div class="modal_layer"></div>
</div>

<script>
$("#modal_register_btn").click(function(){
  var uid = $("#review_text").val();
  var idx = $("#review_text").val();
  var star = $("input[name=rating]:checked").val();
  var review = $("#review_text").val();
  var photo =
})



    $("#modal_opne_btn").click(function(){
        $("#modal").attr("style", "display:block");
    });

     $("#modal_close_btn").click(function(){
        $("#modal").attr("style", "display:none");
    });
</script>
</body>

</html>
