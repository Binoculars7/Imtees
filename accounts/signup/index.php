<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Account</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <div class="image-section">
    
    </div>
    <div class="form-section">
      <div class="form-wrapper">
        <h1 class="title">Create Account</h1>
        <button class="google-signup-btn">
          <img src="google-logo.png" alt="Google Logo" class="google-logo">
          Sign up with Google
        </button>
        <div class="divider">- OR -</div>
        <form class="signup-form">
          <input type="text" placeholder="Full Name" class="input-field">
          <input type="email" placeholder="Email Address" class="input-field">
          <div class="password-container">
            <input type="password" placeholder="Password" class="input-field" id="password">
            <button type="button" class="toggle-password" onclick="togglePassword()">👁️</button>
          </div>
          <button type="submit" class="create-account-btn">Create Account</button>
          <label class="terms">
            <input type="checkbox"> I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policies</a>
          </label>
        </form>
        <p class="login-text">Already have an account? <a href="#">Log in</a></p>
      </div>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>
