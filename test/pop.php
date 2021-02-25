<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<style>
.product_title {

  font-size: 16px;
  margin-left: 100px;
  margin-top: -70px;
  margin-bottom: 30px;
}

.button {
margin-left: 30%;
}

#modal button {
display:inline-block;
width:100px;
margin-left: 10px;
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
  margin-bottom: 20px;
  display: inline-block;
  padding: .5em .75em;
  color: #999;
  font-size: inherit; line-height: normal;
  vertical-align: middle; background-color: #fdfdfd;
  cursor: pointer; border: 1px solid #ebebeb; border-bottom-color: #e2e2e2;
  border-radius: .25em;
 }

.review_photo input[type="file"] {
   position: absolute;
   width: 1px; height: 1px;
   padding: 0; margin: -1px; overflow: hidden;
   clip:rect(0,0,0,0);
   border: 0; }

   .review_input {
     /* margin-top: -30px; */
   }

.img_wrap {
display: none;
width: 100px; margin-top: 30px;
margin-bottom: 30px;
}

.img_wrap img {
max-width: 100%;
   }

h4 {
margin-left: 20px;
}
</style>

  <form type="form" name="form" id="form" action="a_review_ok.php" method="post" enctype="multipart/form-data">
        <div class="pop_content">
          <div class="pop_body">
      <input type="hidden" name="pid" id="product_id"/>
      <input type="hidden" name="uid" id="uid" value="<?php echo $user_idx;?>">
        <h4>리뷰작성</h4>
        <hr />
        <img class="product_img" style="width:80px; display:inline-block;" src="uploads/<?php echo $order_pic;?>" />
        <div class="product_title">위드 치킨 1kg</div></br>

        <div class="container">
          <div class="row">
            <p style="margin-top:-15px; margin-left:10px; float:left;">만족도</p>

          <div style="margin-top:-30px; margin-left:35px;" class="rating">
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
        <input style="border: 1px solid lightgray; font-size:16.5px; margin-bottom:8px; width:412px;"placeholder="제목" id="review_title" name="title" /></br>
        <textarea  placeholder="최소 10자 ~ 최대 500자 이하 작성 가능" name="text" id="review_text" cols="22" rows="5" required wrap="hard" maxlength="500"></textarea>
      </div>

      <div class="review_photo">
      <label for="infile">사진등록</label>
      <input type="file" id="infile" name="file">
      </div>
      <div class="img_wrap">
        <img id="img" />
      </div>

      </div>
      <div class="button">
        <button type="button" style="display:inline-block; width:80px;" id="modal_register_btn">등록</button>
        <button type="button" style="display:inline-block; width:80px;" id="modal_close_btn">취소</button>
      </div>
    </div>
  </form>
