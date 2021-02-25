<!DOCTYPE html>
<!-- <html lang="en" dir="ltr"> -->
  <head>
    <!-- <meta charset="utf-8"> -->
    <title>login page</title>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>

    <script>
    $(document).ready(function() {
    $('#summernote').summernote({
    callbacks: {
        onImageUpload: function(files) {
            for(let i=0; i < files.length; i++) {
                $.upload(files[i]);
            }
        }
    },
    height: 500,
});

$.upload = function (file) {
    let out = new FormData();
    out.append('file', file, file.name);

    $.ajax({
        method: 'POST',
        url: 'upload.php',
        contentType: false,
        cache: false,
        processData: false,
        data: out,
        success: function (img) {
            $('#summernote').summernote('insertImage', img);
            alert(out);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.error(textStatus + " " + errorThrown);
        }
    });
};

});
    </script>



  </head>
  <body>
    <form action=write_ok.php method="post">
    <textarea id="summernote" name="content">

      </textarea>

<div class="button">
  <input type="submit" value="submit">
</div>
</form>
  </body>
</html>
