<head>
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.min.js"></script>
</head>

<body>
<textarea id="summernote" name="content">
  </textarea>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: "300px",
            dialogsInBody: true,
            callbacks: {
                onImageUpload: function(files) {
                    uploadFile(files[0]);
                }
            }
        });
    });

    function uploadFile(file) {
        data = new FormData();
        data.append("file", file);

        $.ajax({
            data: data,
            type: "POST",
            url: "uploader.php", //replace with your url
            cache: false,
            contentType: false,
            processData: false,
            success: function(url) {
                $('#summernote').summernote("insertImage", url);
            }
        });
    }
</script>
</body>
