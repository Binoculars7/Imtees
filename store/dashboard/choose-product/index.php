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
  <title>Choose Product</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <div class="header">
      <img src="../../../home/assets/img/logo.png" alt="Logo" class="logo">
    <a href="../create" style="text-decoration:none; color:#700FDC;padding:0.2em 0.7em; border-radius:20px;">Go Back</a>  <h1>Choose your Product</h1>
    </div>
    
      <div class="buttons">
        <button name="youth-tshirt" class="product-btn active" data-product="youth-tshirt">Youth tshirt</button>
        <button name="crewneck" class="product-btn" data-product="crewneck">Crewneck</button>
        <button name="kid-tees" class="product-btn" data-product="kid-tees">Kid tees</button>
        <button name="long-sleeve" class="product-btn" data-product="long-sleeve">Long sleeve</button>
        <button name="adult-tshirt" class="product-btn" data-product="adult-tshirt">Adult tshirt</button>
        <button name="tank-top" class="product-btn" data-product="tank-top">Tank Top</button>
      </div>
    
    <div class="product-preview" id="product-preview">
      <div class="product-card">
        <img src="cloth1.jpg" alt="Youth Tshirt Front">
        <p>Youth tshirt - front</p>
      </div>
      <div class="product-card">
        <img src="cloth2.jpg" alt="Youth Tshirt Back">
        <p>Youth tshirt - back</p>
      </div>
    </div>
    <br><br><br>
    <a href="../start-design" style="text-decoration:none;" class="product-btn">Continue</a>
    <div id="response"></div>
  </div>


 


  <script>
    // JavaScript to handle button clicks and image updates
    document.querySelectorAll('.product-btn').forEach(button => {
      button.addEventListener('click', () => {
        // Remove active class from all buttons
        document.querySelectorAll('.product-btn').forEach(btn => btn.classList.remove('active'));
        
        // Add active class to clicked button
        button.classList.add('active');

        // Get the product type from data attribute
        const productType = button.getAttribute('data-product');

        // Define image data for each product type
        const productData = {
          "youth-tshirt": [
            { src: "cloth1.jpg", description: "Youth tshirt - front", price: "USD 2.43" },
            { src: "cloth2.jpg", description: "Youth tshirt - back", price: "USD 2.43" }
          ],
          "crewneck": [
            { src: "cloth3.png", description: "Crewneck - front", price: "USD 3.50" },
            { src: "cloth4.png", description: "Crewneck - back", price: "USD 3.50" }
          ],
          "kid-tees": [
            { src: "cloth5.png", description: "Kid tees - front", price: "USD 4.00" },
            { src: "cloth6.png", description: "Kid tees - front", price: "USD 4.00" },
            { src: "cloth7.png", description: "Kid tees - front", price: "USD 4.00" },
            { src: "cloth8.png", description: "Kid tees - back", price: "USD 4.00" }
          ],
          "long-sleeve": [
            { src: "cloth9.png", description: "Long sleeve - front", price: "USD 4.00" },
            { src: "cloth10.png", description: "Long sleeve - front", price: "USD 4.00" },
          ],
          "adult-tshirt": [
            { src: "cloth11.png", description: "Adult tshirt - front", price: "USD 3.00" },
            { src: "cloth12.png", description: "Adult tshirt - back", price: "USD 3.00" }
          ],
          "tank-top": [
            { src: "cloth13.png", description: "Tank Top - front", price: "USD 2.50" },
            { src: "cloth14.png", description: "Tank Top - back", price: "USD 2.50" }
          ]
        };

        // Update product preview section
        const productPreview = document.getElementById('product-preview');
        productPreview.innerHTML = productData[productType].map(item => `
          <div class="product-card">
            <img src="${item.src}" alt="${item.description}">
            <p>${item.description}</p>
          </div>
        `).join('');
      });
    });
  </script>
</body>
</html>
