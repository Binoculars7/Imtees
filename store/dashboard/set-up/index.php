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


<style>
  .one-title{
    text-align: center;
    font-size: 18px;
    margin-left: -17em;
  }
  .store-detail{
    font-weight: bold;
    font-size: 18px;
    margin-bottom: 0.3em;
  }
  .store-detail-small{
    font-size: 14px;
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
      



<div class="form-bodies">

  <div class="one-title">
    Set Up your Store
  </div>
<br><br>

      <div>
        <div class="store-detail">Store Details</div>
        <div class="store-detail-small">Choose your Special name for a new store that will show in your URL, store webpage and shipping labels</div>
      </div>
      <br><br>
<form method="post">

    <div class="form-info">
        <div class="part1">
          <div class="form-titles">Store Name</div>
          <input name="sname" type="text" placeholder="Store Name">
        </div>

         <div>
          <div class="form-titles">URL Preview</div>
          <input type="text" placeholder="URL Preview" disabled value="store?id=<?php echo rand(113, 29874); ?>">
        </div>

    </div>

  <div class="form-info" style="margin-top: 2em;">
    <div class="part1">
      <div class="form-titles">Country of tax residence</div>
      <select name="country" id="">
        <option value="">Select a Country</option>
        <option value="USA">USA</option>
        <option value="NIGERIA">NIGERIA</option>
      </select>
    </div>

    <div class="btnn">
      <input name="submit" type="submit" value="Next" style="cursor:pointer;">
    </div>

  </div>




  <?php
include "../../config.php";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $sname = mysqli_real_escape_string($conn, $_POST['sname']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $email = $_SESSION['email']; // Use the email stored in the session
    $dates = date('Y-m-d'); // Current date and time

    // Check if the email already exists in the database
    $check_sql = "SELECT * FROM store_info WHERE EMAIL = '$email'";
    $result = mysqli_query($conn, $check_sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Store already exists.');</script>";
    } else {
        // Insert the data into the database
        $insert_sql = "INSERT INTO store_info (SNAME, COUNTRY, EMAIL, DATES) 
                       VALUES ('$sname', '$country', '$email', '$dates')"; 

        if (mysqli_query($conn, $insert_sql)) {
            echo "<script>alert('Your store is now registered';</script>";
            echo "<script>window.location.href = '../create';</script>";
        } else {
            echo "<p>Error: " . mysqli_error($conn) . "</p>"; 
        }
    }
}


    // Check if the email already exists in the database
    $check_sql = "SELECT * FROM store_info WHERE EMAIL = '$email'";
    $result = mysqli_query($conn, $check_sql);

    if (mysqli_num_rows($result) > 0) {
      echo "<script>window.location.href = '../create';</script>";
  } else {

  }




?>



<?php


?>



  

</form>
      

<br><br><br>
<div>
  <div class="store-detail" style="margin-bottom: 1em;">Frequently Asked Questions</div>
  <div class="form-info">
    <div class="part1">
      <select name="" id="" class="hots">
        <option value="">What is IMtees Store</option>
      </select>
    </div>
    <div>
      <select name="" id="" class="hots">
        <option value="">What is IMtees Store</option>
      </select>
    </div>
  </div>
<br>
  <div class="form-info">
    <div class="part1">
      <select name="" id="" class="hots">
        <option value="">What is IMtees Store</option>
      </select>
    </div>
    <div>
      <select name="" id="" class="hots">
        <option value="">What is IMtees Store</option>
      </select>
    </div>
  </div>
<br>
  <div class="form-info">
    <div class="part1">
      <select name="" id="" class="hots">
        <option value="">What is IMtees Store</option>
      </select>
    </div>
    <div>
      <select name="" id="" class="hots">
        <option value="">What is IMtees Store</option>
      </select>
    </div>
  </div>


</div>

</div>

    </main>
  </div>

  <script src="script.js"></script>
</body>
</html>
