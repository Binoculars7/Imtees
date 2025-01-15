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

//echo $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connect Your Store</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <!-- Sidebar -->
    <aside class="sidebar">
      <h2 class="store-title"><br>
        <img src="../../home/assets/img/logo.png" width="50px" alt=""><p><br>My New Store</p> 
      </h2><br>
      <ul class="menu"><a href="" style="text-decoration: none;">
        <li class="menu-item active">
          <i class="fa-solid fa-house"></i> Dashboard
        </li></a><a href="" style="text-decoration: none;">
        <li class="menu-item">
          <i class="fa-solid fa-list"></i> Catalogs
        </li></a><a href="" style="text-decoration: none;">
        <li class="menu-item">
          <i class="fa-solid fa-wallet"></i> Wallet
        </li></a><a href="" style="text-decoration: none;">
        <li class="menu-item">
          <i class="fa-solid fa-box"></i> Orders
        </li></a><a href="" style="text-decoration: none;">
        <li class="menu-item">
          <i class="fa-solid fa-boxes-stacked"></i> My Products
        </li></a><a href="" style="text-decoration: none;">
        <li class="menu-item">
          <i class="fa-solid fa-gear"></i> Store Settings
        </li></a>
      </ul>
      <div class="account">
        <p><i class="fa-solid fa-user"></i> Account</p>
        <p class="mailer"><?php if ($_SESSION['email'] != 0) {
          echo $_SESSION['email']; 
        }else{
          echo '-';
        } ?></p>
      </div>
    </aside>

    <!-- Hamburger Menu -->
    <button class="hamburger" id="hamburger">
      <i class="fa-solid fa-bars"></i>
    </button>

    <!-- Main Content -->
    <main class="content"><br><br>
      <h1>Let’s connect your store!</h1><br><br>
      <p class="subheading">Still no sales channel? Our goal is to assist you.</p>
      <p class="bupper">Select the sales channel that best suits your needs and business.</p><br><br>
      <div class="imtees-store">
        <h2>IMTees <span style="font-size: 10px; font-weight: normal;">Store</span></h2>
        <p>Make a sale now. Simply share a special link with your friends, family, and followers; there's no need to build a website.</p>
       <a href="set-up/"> <button class="launch-btn"><i class="fa-solid fa-link"></i> Launch store</button></a>
      </div><br>
      <p class="subheading">Do you currently have a sales channel? Connect your store now.</p>
      <p style="margin-top: -30px;">Choose a sales channel below to connect your store.</p><br><br>
      <div class="channels">
        <button class="channel-btn"><i class="fa-brands fa-etsy"></i> Etsy</button>
        <button class="channel-btn"><i class="fa-brands fa-shopify"></i> Shopify</button>
        <button class="channel-btn"><i class="fa-brands fa-tiktok"></i> TikTok</button>
        <button class="channel-btn"><i class="fa-brands fa-ebay"></i> eBay</button>
        <button class="channel-btn"><i class="fa-solid fa-cart-shopping"></i> WooCommerce</button>
        <button class="channel-btn"><i class="fa-brands fa-wix"></i> Wix</button>
      </div>
    </main>
  </div>

  <script src="script.js"></script>
</body>
</html>
