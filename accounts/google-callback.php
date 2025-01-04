<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Signup</title>
    <script src="https://accounts.google.com/gsi/client" async defer></script>
</head>
<body>
    <div id="g_id_onload"
         data-client_id="YOUR_CLIENT_ID"
         data-context="signup"
         data-ux_mode="popup"
         data-callback="handleCredentialResponse"
         data-auto_prompt="false">
    </div>
    <div class="g_id_signin"
         data-type="standard"
         data-shape="rectangular"
         data-theme="outline"
         data-text="signup_with"
         data-size="large"
         data-logo_alignment="left">
    </div>

    <script>
        function handleCredentialResponse(response) {
            // Parse JWT token
            const data = JSON.parse(atob(response.credential.split('.')[1]));

            // Send data to your server
            fetch('google-signup.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({
                    fname: data.name,
                    email: data.email,
                    googleId: data.sub
                })
            })
            .then(res => res.text())
            .then(message => alert(message))
            .catch(err => console.error('Error:', err));
        }
    </script>
</body>
</html>
