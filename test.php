<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Save Div Content as PDF</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
</head>
<body>
    <div id="content-to-save">
        <h1>Hello, World!</h1>
        <p>This content will be saved as a PDF.</p>
    </div>
    <button id="save-as-pdf">Save as PDF</button>

    <script>
        $(document).ready(function() {
            $("#save-as-pdf").click(function() {
                var element = document.getElementById('content-to-save');
                html2pdf().from(element).save();
            });
        });
    </script>
</body>
</html>
