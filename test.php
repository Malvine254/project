<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Tracking Example</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="col-md-4">
            <div class="modal-buttons mt-5">
                <button id="acceptAll" class="btn btn-outline-light">Accept All</button>
                <button id="openModalBtn4" class="btn btn-outline-secondary">Customize</button>
                <button id="rejectAll" class="btn btn-outline-danger">Reject All</button>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#acceptAll').on('click', function() {
                setCookie('userConsent', 'accepted', 365);
                trackUser();
            });

            $('#rejectAll').on('click', function() {
                setCookie('userConsent', 'rejected', 365);
            });

            function setCookie(name, value, days) {
                var expires = "";
                if (days) {
                    var date = new Date();
                    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                    expires = "; expires=" + date.toUTCString();
                }
                document.cookie = name + "=" + (value || "") + expires + "; path=/";
            }

            function getCookie(name) {
                var nameEQ = name + "=";
                var ca = document.cookie.split(';');
                for(var i=0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
                }
                return null;
            }

            function trackUser() {
                $.get("php/cookies", function(data) {
                    console.log("User tracked:", data);
                });
            }
        });
    </script>
</body>
</html>
