<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your E-commerce Website</title>
    <style>
        /* Basic styles for the cookie consent modal */
        .cookie-consent-modal {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .cookie-consent-content {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            width: 80%;
            max-width: 400px;
        }

        .cookie-consent-content p {
            margin-bottom: 20px;
        }

        .cookie-consent-content button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            margin: 5px;
        }

        .cookie-consent-content button.reject {
            background-color: #dc3545;
        }
    </style>
</head>
<body>

<!-- Your website content -->

<div class="cookie-consent-modal" id="cookieConsentModal">
    <div class="cookie-consent-content">
        <p>This website uses cookies to ensure you get the best experience.</p>
        <button id="acceptCookiesBtn">Accept</button>
        <button id="rejectCookiesBtn" class="reject">Reject</button>
    </div>
</div>

<script>
    // Check if the user has already made a decision about cookies
    if (!localStorage.getItem('cookiesAccepted') && !localStorage.getItem('cookiesRejected')) {
        document.getElementById('cookieConsentModal').style.display = 'flex';
    }

    // Handle the cookie acceptance
    document.getElementById('acceptCookiesBtn').addEventListener('click', function() {
        localStorage.setItem('cookiesAccepted', 'true');
        document.getElementById('cookieConsentModal').style.display = 'none';
    });

    // Handle the cookie rejection
    document.getElementById('rejectCookiesBtn').addEventListener('click', function() {
        localStorage.setItem('cookiesRejected', 'true');
        document.getElementById('cookieConsentModal').style.display = 'none';
    });
</script>

</body>
</html>
