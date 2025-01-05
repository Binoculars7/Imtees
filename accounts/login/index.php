<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imtees</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <link rel="icon" href="../../home/assets/img/logo.png" type="image/png">
    <script src="https://accounts.google.com/gsi/client" async defer></script>
</head>
<body>
    <div class="container">
        <div class="image-section" style="background:#700FDC;">
            <img src="person2.jpg" alt="Happy Woman with Mobile" class="hero-image" style="opacity: 0.85;">
        </div>
        <div class="form-section">
            <h1>Welcome Back</h1><br>
            

            
<div id="g_id_onload"
         data-client_id="1080576136500-um163d5rivtckbg994glt1pg5p625abs.apps.googleusercontent.com"
         data-context="signin"
         data-ux_mode="popup"
         data-callback="handleCredentialResponse"
         data-auto_prompt="false">
    </div>
    <div class="g_id_signin"
         data-type="standard"
         data-shape="rectangular"
         data-theme="outline"
         data-text="signin_with"
         data-size="large"
         data-logo_alignment="left">
    </div>

    <script>
        function handleCredentialResponse(response) {
            // Decode the JWT token from Google
            const data = JSON.parse(atob(response.credential.split('.')[1]));

            // Send data to your backend for login
            fetch('google-login.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({
                    google_id: data.sub, // Google user ID
                    name: data.name,     // User's full name
                    email: data.email    // User's email address
                })
            })
            .then(res => res.text())
            .then(message => alert(message))
            .catch(err => console.error('Error:', err));
        }
    </script>



            <div class="separator">- OR -</div>
            <form method="POST">



            <?php
include "../config.php"; // Include database connection file

if (isset($_POST['submit'])) {
    // Collect form data
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    // Query to find user with the given email
    $query = "SELECT * FROM signup WHERE EMAIL = '$email'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Fetch the user record
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $user['PASS'])) {
            echo "<div style='color:blue; font-size:14px;'>Login successful. Welcome, " . $user['FNAME'] . "!</div>";
            // Redirect to dashboard or home page
            // header("Location: dashboard.php");
        } else {
            echo "<div style='color:red; font-size:14px;'>Incorrect password.</div>";
        }
    } else {
        echo "<div style='color:red; font-size:14px;'>No account found with this email.</div>";
    }
} else {
    //echo "<div style='color:red; font-size:14px;'>Invalid request.</div>";
}
?>



                <input name="email" type="email" placeholder="Email Address" class="input-field" required style="margin-top:0.5em;">
                <div class="password-wrapper">
                    <input name="password" type="password" placeholder="Password" class="input-field" required>
                    <button type="button" class="toggle-password" style="margin-top:-0.3em"><i class="fa fa-eye-slash"></i></button>
                </div>
                <label>
                    <a href="#">Forgot Password?</a> 
                </label>
                <button name="submit" type="submit" class="submit-button">Sign In</button>
            </form>
            <p>Don't have an account? <a href="../signup/">Signup</a></p>
        </div>
    </div>
</body>
</html>
