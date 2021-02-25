<style>
.rating {
      float:left;
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
        font-size:300%;
        /* line-height:1.2; */
        color:#ddd;
    }

    .rating:not(:checked) > label:before {
        content: '★ ';
    }

    .rating > input:checked ~ label {
        color: dodgerblue;

    }

    .rating:not(:checked) > label:hover,
    .rating:not(:checked) > label:hover ~ label {
        color: dodgerblue;

    }

    .rating > input:checked + label:hover,
    .rating > input:checked + label:hover ~ label,
    .rating > input:checked ~ label:hover,
    .rating > input:checked ~ label:hover ~ label,
    .rating > label:hover ~ input:checked ~ label {
        color: dodgerblue;

    }

    .rating > label:active {
        position:relative;
        top:2px;
        left:2px;
    }
    </style>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row">
	<div class="rating">
      <!-- <input type="radio" id="star10" name="rating" value="10" /><label for="star10" title="Rocks!">5 stars</label>
      <input type="radio" id="star9" name="rating" value="9" /><label for="star9" title="Rocks!">4 stars</label>
      <input type="radio" id="star8" name="rating" value="8" /><label for="star8" title="Pretty good">3 stars</label>
      <input type="radio" id="star7" name="rating" value="7" /><label for="star7" title="Pretty good">2 stars</label>
      <input type="radio" id="star6" name="rating" value="6" /><label for="star6" title="Meh">1 star</label> -->
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
