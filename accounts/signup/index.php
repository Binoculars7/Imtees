
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
            <img src="person1.jpg" alt="Happy Woman with Mobile" class="hero-image" style="opacity: 0.85;">
        </div>
        <div class="form-section">
            <h1>Create Account</h1><br>
            <!-- <a href="../google-login.php" class="google-signup" style="text-decoration:none;"> 
                <img src="google-logos.png" alt="Google Icon" width="27px"> Sign up with Google
            </a> -->
            
            <div id="g_id_onload"
         data-client_id="1080576136500-um163d5rivtckbg994glt1pg5p625abs.apps.googleusercontent.com"
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
            fetch('google-callback.php', {
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



            <div class="separator">- OR -</div>
            <form method="POST">

<?php

include "../config.php";

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Collect form data and sanitize
    $fname = $conn->real_escape_string($_POST['fname']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    $cpassword = $conn->real_escape_string($_POST['cpassword']);
    $date = date("Y-m-d"); // Current date and time

    // Check if passwords match
    if ($password !== $cpassword) {
        echo "<div style='color:red; font-size:14px;'>Passwords do not match.</div>";
    } else {
        // Check if email already exists
        $emailCheckQuery = "SELECT * FROM signup WHERE EMAIL = '$email'";
        $result = $conn->query($emailCheckQuery);

        if ($result->num_rows > 0) {
            echo "<div style='color:red; font-size:14px;'>Email already exists. Please use a different email.</div>";
        } else {
            // Hash the password for security
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Insert the data into the table
            $sql = "INSERT INTO signup (FNAME, EMAIL, PASS, DATES) VALUES ('$fname', '$email', '$hashedPassword', '$date')";

            if ($conn->query($sql) === TRUE) {
                echo "<div style='color:blue; font-size:14px;'>Account created successfully!</div>";
            } else {
                echo "<div style='color:red; font-size:14px;'>Error: " . $conn->error."</div>";
            }
        }
    }
}
?>


                <input name="fname" type="text" placeholder="Full Name" class="input-field" required style="margin-top:0.5em;">
                <input name="email" type="email" placeholder="Email Address" class="input-field" required>
                <div class="password-wrapper">
                    <input name="password" type="password" placeholder="Password" class="input-field" required>
                    <button type="button" class="toggle-password" style="margin-top:-0.3em"><i class="fa fa-eye-slash"></i></button>
                </div>
                <div class="password-wrapper">
                    <input name="cpassword" type="password" placeholder="Confirm Password" class="input-field" required>
                    <button type="button" class="toggle-password" style="margin-top:-0.3em"><i class="fa fa-eye-slash"></i></button>
                </div>
                <label>
                    <input type="checkbox" required>
                    I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policies</a>
                </label>
                <button name="submit" type="submit" class="submit-button">Create Account</button>
            </form>
            <p>Already have an account? <a href="../login/">Log in</a></p>
        </div>
    </div>
</body>
</html>
