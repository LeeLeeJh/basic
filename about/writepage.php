<main>

				<div>

					<form action="./write.php" method="post">

						<!-- <input type="hidden" name="userIndex" value="<?php //echo $_SESSION['userIndex'] ?>">-->

						<p>제목<input type ="text" name = "subject"></p>

						<textarea name="content" id="summernote"></textarea>





						<p><input type = "submit" value = "작성"></p>

					</form>

				</div>

				<script>

        $(document).ready(function() {
             $('#summernote').summernote({

                     width: 900,
                     height: 400,                 // set editor height
                     minHeight: null,             // set minimum height of editor
                     maxHeight: null,             // set maximum height of editor
                     focus: true,                  // set focus to editable area after initializing summernote
		  callbacks: {
	          onImageUpload: function(files, editor, welEditable) {
	        	  console.log(files);
	        	  console.log(editor);
	        	  console.log(welEditable);
	        	  var opt = {};
		          for (var i = files.length - 1; i >= 0; i--) {
		        	files[i]; //해당파일들을 ajax로 한번씩 FormData로담아서 보내거나 다양하게 처리하시믄됩니다.
		          }
	          }
	      }
	  });

					function sendFile(file,editor,welEditable) {

					data = new FormData();

					data.append("file", file);

					 $.ajax({

						 url: "./saveimage.php",

						 data: data,

						 cache: false,

						 contentType: false,

						 processData: false,

						 type: 'POST',

						 success: function(data){

						 alert(data);

							editor.insertImage(welEditable, data);

						 },

						error: function(jqXHR, textStatus, errorThrown) {

						  console.log(textStatus+" "+errorThrown);

						}

					 });

					}

				});



				</script>

			</main>
