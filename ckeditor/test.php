<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CKEditor Image Upload</title>
<script src="https://cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
</head>
<body>
    <textarea name="editor1" style="height: 1800px;"></textarea>
    <script>
        CKEDITOR.replace('editor1', {
            filebrowserUploadUrl: 'upload.php',
            filebrowserUploadMethod: 'form',
              height: '900px'

        });
    </script>
</body>
</html>
