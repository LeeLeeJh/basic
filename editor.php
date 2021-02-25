<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>login page</title>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>





  </head>
  <body>
    <form action=write_ok.php method="post">
    <textarea id="summernote" name="content">
      <!-- <p>
        Hello summernote
        </p> -->
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

                 alert(data);
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

<!-- <script>
    $(document).ready(function() {
         $('#summernote').summernote({

                 width: 900,
                 height: 300,                 // set editor height
                 minHeight: null,             // set minimum height of editor
                 maxHeight: null,             // set maximum height of editor
                 focus: true                  // set focus to editable area after initializing summernote
         });
    });
</script> -->
<div class="button">
  <input type="submit" value="submit">
</div>
</form>
  </body>
</html>
