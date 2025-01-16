<?php
// Start the session at the very top of the script
session_start();

// Check if the 'email' key exists in the session
if (isset($_SESSION['email']) && $_SESSION['email'] != "") {
    //echo "Email: " . htmlspecialchars($_SESSION['email']);
    $s_email = $_SESSION['email'];
} else {
  $_SESSION['email'] = 0;
}

$email = $_SESSION['email'];
if ($email == 0) {
  echo "<script>window.location.href = '../../../accounts/login';</script>";
}else{
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-shirt Design</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>
<body>
    <div class="highestv"><img src="../../../home/assets/img/logo.png" width="40px" alt=""></div>
    <div class="highest"><a href="../choose-product"><i class="fa fa-arrow-left"></i></a></div>
    <div class="container">
        <div class="image-section">
            <img src="cloth.png" alt="Black T-shirt">
        </div>
        <div class="content-section">
            <h2>Best Price, <br> highest quality.</h2>
            <p>Intros choice gives you the lowest prices and best quality for hassle-free fulfillment – everytime.</p>
            <div class="price-button-container">
                <span class="price">USD 20.09</span>
                <button>Start Design</button>
            </div>
        </div>
    </div>
</body>
</html>
