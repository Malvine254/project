<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Consent Modal</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .modal {
            display: none; /* Hidden by default */
            position: fixed;
            z-index: 1000; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgba(0, 0, 0, 0.5); /* Black with opacity */
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            width: 90%;
            max-width: 500px;
            text-align: center;
        }

        .modal h2 {
            margin-top: 0;
        }

        .modal-buttons {
            margin-top: 20px;
        }

        .btn-primary {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-right: 10px;
        }

        .btn-secondary {
            background-color: #6C757D;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn-primary:hover, .btn-secondary:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <!-- Cookie Consent Modal -->
    <div id="cookieConsentModal" class="modal">
        <div class="modal-content">
            <h2>We Value Your Privacy</h2>
            <p>We use cookies to enhance your browsing experience, serve personalized content, and analyze our traffic. By clicking "Accept All", you consent to our use of cookies. You can manage your preferences by clicking "Settings".</p>
            <div class="modal-buttons">
                <button id="acceptAll" class="btn-primary">Accept All</button>
                <button id="manageSettings" class="btn-secondary">Settings</button>
            </div>
        </div>
    </div>
    
    <!-- JavaScript to handle modal behavior -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var cookieModal = document.getElementById('cookieConsentModal');
            var acceptAllBtn = document.getElementById('acceptAll');
            var manageSettingsBtn = document.getElementById('manageSettings');

            // Show the modal
            cookieModal.style.display = 'flex';

            // Set a cookie
            function setCookie(name, value, days) {
                var expires = "";
                if (days) {
                    var date = new Date();
                    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                    expires = "; expires=" + date.toUTCString();
                }
                document.cookie = name + "=" + (value || "") + expires + "; path=/";
            }

            // Handle Accept All button click
            acceptAllBtn.onclick = function() {
                setCookie('cookieConsent', 'accepted', 365);
                cookieModal.style.display = 'none';
            };

            // Handle Manage Settings button click
            manageSettingsBtn.onclick = function() {
                // Here you can add functionality to show another modal or section for cookie settings
                alert('Manage your cookie settings here.');
            };

            // Check if the user has already accepted cookies
            function getCookie(name) {
                var nameEQ = name + "=";
                var ca = document.cookie.split(';');
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
                }
                return null;
            }

            if (getCookie('cookieConsent') === 'accepted') {
                cookieModal.style.display = 'none';
            }
        });
    </script>
</body>
</html>
