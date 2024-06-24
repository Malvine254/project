<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speech to Speech Chat</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Full viewport height */
        }
        .container {
            text-align: center;
            max-width: 600px; /* Adjust as per your design */
        }
    </style>
    <script>
        let listening = false;

        async function startListening() {
            listening = true;
            while (listening) {
                const response = await fetch('/listen', {
                    method: 'POST'
                });
                const data = await response.json();
                if (data.status === "success") {
                    document.getElementById('recognizedText').innerText = "Recognized: " + data.message;
                    document.getElementById('aiResponse').innerText = "Response: " + data.response;
                } else if (data.status === "end") {
                    alert(data.message);
                    document.getElementById('recognizedText').innerText = "";
                    document.getElementById('aiResponse').innerText = "";
                    listening = false;
                } else {
                    console.error(data.message);
                    document.getElementById('recognizedText').innerText = "Error: " + data.message;
                    document.getElementById('aiResponse').innerText = "";
                }
            }
        }

        function stopListening() {
            listening = false;
        }
    </script>
</head>
<body>

    <div class="container">
        <h1>Speech to Speech Chat</h1>
        <button class="btn btn-primary" onclick="startListening()">Start Listening</button>
        <button class="btn btn-danger" onclick="stopListening()">Stop Listening</button>
        <p id="recognizedText"></p>
        <p id="aiResponse"></p>
    </div>

    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
