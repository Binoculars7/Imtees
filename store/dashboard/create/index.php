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
  <title>Connect Your Store</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>


<style>
  .create-btn button{
    padding: 0.8em 1.2em;
    color: white;
    background: #700FDC;
    border-radius: 15px;
    border: none;
    margin-top: 2em;
    cursor: pointer;
  }

  .create-btns button{
    padding: 0.8em 2.5em;
    background: none;
    color: #700FDC;
    border-radius: 15px;
    border: 1px solid #700FDC;
    margin-top: 2em;
    cursor: pointer;
  }

  .create-btns button:hover{
    color: #700FDC;
    background: #e2c9ff;
  }

  .create-btn button:hover{
    background: #8628f0;
    color: white;
  }

  .one-title{
    text-align: left;
    font-size: 18px;
  }
  .parting1{
    width: 800px;
    background: #F4EAFF;
    padding:2em;
    border-radius: 20px;
  }
  .store-detail{
    font-weight: bold;
    font-size: 30px;
    margin-bottom: 0.3em;
  }
  .store-detail-small{
    font-size: 17px;
  }
  .form-info{
    display: flex;
  }
  .form-titles{
    font-size: 14px;
    margin-bottom: 0.5em;
  }
  .form-info input{
    width: 20em;
    font-size: 19px;
    padding: 0.3em 0.5em;
    border-radius: 10px;
    border:1px solid rgb(163, 157, 157);
    
  }
  select{
    width: 20em;
    font-size: 19px;
    padding: 0.3em 0.5em;
    border-radius: 10px;
    border:1px solid rgb(163, 157, 157);
  }
  .part1{
    margin-right: 3em;
  }
  .form-bodies{
    width: 85%;
    margin: auto;
  }
  .btnn input{
    margin-top: 1em;
    height: 40px;
    background: #700FDC;
    color: white;
  }
  option{
    font-size: 15px;
  }
  .hots{
    font-size: 15px;
    width: 25.5em;
    padding: 0.6em 1em;
  }
</style>


<body>
  <div class="container">
    <!-- Sidebar -->
    <aside class="sidebar">
      <h2 class="store-title"><br>
        <img src="../../../home/assets/img/logo.png" width="50px" alt=""><p><br>My New Store</p> 
      </h2><br>
      <ul class="menu"><a href="../" style="text-decoration: none;">
        <li class="menu-item">
          <i class="fa-solid fa-house"></i> Dashboard
        </li></a><a href="#" style="text-decoration: none;">
        <li class="menu-item">
          <i class="fa-solid fa-wallet"></i> Wallet
        </li></a><a href="../../orders" style="text-decoration: none;">
        <li class="menu-item active">
          <i class="fa-solid fa-box"></i> Orders
        </li></a><a href="../../my-products" style="text-decoration: none;">
        <li class="menu-item">
          <i class="fa-solid fa-boxes-stacked"></i> My Products
        </li></a><a href="../../store-settings" style="text-decoration: none;">
        <li class="menu-item">
          <i class="fa-solid fa-gear"></i> Store Settings
        </li></a>
      </ul>
      <div class="account">
        
      </div>
    </aside>

    <!-- Hamburger Menu -->
    <button class="hamburger" id="hamburger">
      <i class="fa-solid fa-bars"></i>
    </button>

    <!-- Main Content -->
    <main class="content"><br><br>
      



<div class="form-bodies">

  <div class="one-title">
    Set Up your Store
  </div>
<br><br>

      <div class="parting1">
        <div class="store-detail">Create your first Product</div>
        <div class="store-detail-small">Choose a product you like and add your design and see how easy to you Imtees.</div>

        <div class="create-btn">
          <form method="POST">
            <button name="submit" type="submit"><i class="fa fa-rocket"></i> Create Now</button>
          </form>
          
          <?php
include "../../config.php";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $ppname = 'created';
    $email = $_SESSION['email']; // Use the email stored in the session
    $dates = date('Y-m-d'); // Current date and time

    // Check if the email already exists in the database
    $check_sql = "SELECT * FROM create_product WHERE EMAIL = '$email'";
    $result = mysqli_query($conn, $check_sql);

    if (mysqli_num_rows($result) > 0) {
      echo "<script>window.location.href = '../choose-product';</script>";
    } else {
        // Insert the data into the database
        $insert_sql = "INSERT INTO create_product (EMAIL, PNAME, DATES) 
                       VALUES ('$email', '$ppname', '$dates')";

        if (mysqli_query($conn, $insert_sql)) {
            echo "<script>alert('Your store is now registered';</script>";
            echo "<script>window.location.href = '../choose-product';</script>";
        } else {
            echo "<p>Error: " . mysqli_error($conn) . "</p>"; 
        }
    }
}



?>







        </div>
      </div>
      <br><br>
  


      
      <div class="parting1">
        <div class="store-detail">Connect to a Sale Channel</div>
        <div class="store-detail-small">Sell on other marketplace like Shopify, etsy, tiktok etc</div>

        <div class="create-btns">
          <button>Connect</button>
        </div>
      </div>

<br><br><br>


</div>

    </main>
  </div>

  <script src="script.js"></script>
</body>
</html>
