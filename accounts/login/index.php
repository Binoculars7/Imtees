<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imtees</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <link rel="icon" href="../../home/assets/img/logo.png" type="image/png">
</head>
<body>
    <div class="container">
        <div class="image-section" style="background:#700FDC;">
            <img src="person2.jpg" alt="Happy Woman with Mobile" class="hero-image" style="opacity: 0.85;">
        </div>
        <div class="form-section">
            <h1>Welcome Back</h1><br>
            <button class="google-signup"> 
                <img src="google-logos.png" alt="Google Icon" width="27px"> Continue with Google
            </button>
            <div class="separator">- OR -</div>
            <form>
                <input type="email" placeholder="Email Address" class="input-field" required>
                <div class="password-wrapper">
                    <input type="password" placeholder="Password" class="input-field" required>
                    <button type="button" class="toggle-password" style="margin-top:-0.3em"><i class="fa fa-eye-slash"></i></button>
                </div>
                <label>
                    <a href="#">Forgot Password?</a> 
                </label>
                <button type="submit" class="submit-button">Sign In</button>
            </form>
            <p>Don't have an account? <a href="../signup/">Signup</a></p>
        </div>
    </div>
</body>
</html>
