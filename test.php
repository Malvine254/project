<!DOCTYPE html>
<html>
<head>
    <title>CKEditor with Copy-Paste Functionality</title>
    <script src="https://cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
</head>
<body>
    <textarea name="editor1"></textarea>
    <script>
        CKEDITOR.replace('editor1', {
            extraPlugins: 'clipboard',
            on: {
                paste: function(evt) {
                    // Modify the data before it is processed
                    let data = evt.data.dataValue;
                    data = data.replace(/foo/g, 'bar'); // Example: Replace 'foo' with 'bar'
                    evt.data.dataValue = data;
                },
                copy: function(evt) {
                    console.log('Copy event triggered');
                },
                cut: function(evt) {
                    console.log('Cut event triggered');
                }
            }
        });

        // Example using Clipboard API for advanced handling
        document.addEventListener('copy', function(e) {
            e.clipboardData.setData('text/plain', 'Custom text to copy');
            e.preventDefault(); // Prevent the default copy action
        });

        document.addEventListener('paste', function(e) {
            let pastedData = e.clipboardData.getData('text');
            console.log('Pasted data: ' + pastedData);
            e.preventDefault(); // Prevent the default paste action
        });
    </script>
</body>
</html>
