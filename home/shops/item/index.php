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



$sense_emails = isset($_GET['email']);
//echo $sense_email;

if ($sense_emails == "" || $_GET['email'] == "") {
 // header("location: ../");
 $sense_email = '';
}else{
  $sense_email = 'WHERE EMAIL ='.$sense_emails;
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="shops.css">
  <link rel="stylesheet" href="cloths.css">
  <link rel="stylesheet" href="carts.css">
  <link rel="stylesheet" href="marks.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link rel="icon" href="../../assets/img/logo.png" type="image/png">

  <link rel="stylesheet" href="../../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../../assets/css/maicons.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

  <div>
    <header class="menu-bar">
      <!-- Logo Section -->
      <div class="menu-logo">
        <img src="../../assets/img/logo.png" alt="Brand Logo" class="brand-logo" />
      </div>
    
      <!-- Navigation Links -->
      <nav class="menu-nav">
        <ul class="nav-links">
        <li><a href="../../" class="nav-link"><b>Home</b></a></li>
          <li><a href="../../shops" class="nav-link active"><b>Shops</b></a></li>
          <li><a href="../../how-it-works" class="nav-link"><b>How it works</b></a></li>
          <li><a href="../../../store" class="nav-link"><b>Store</b></a></li>
        </ul>
      </nav>
    
      <!-- Search Bar and Icons -->
      <div class="menu-actions">
        <div class="search-bar">
          <input type="text" placeholder="Search for product..." class="search-input" />
          <button class="search-btn">
            <i class="fas fa-search"></i>
          </button>
        </div>
        <div class="action-icons">
          <a href="cart/" class="cart-icon">
            <i class="fas fa-shopping-cart"></i> 
            <small><span style="color:white; background:red; margin-top:0em; margin-left:-1em; position:absolute; border-radius:50%; font-size:12px; font-weight:bold; padding:0em 0.45em 0.15em 0.45em;"><small>
            <?php
include "../config.php";

if (!isset($_SESSION['order_id'])) {
  echo 0;
}else{
  $order_id = $_SESSION['order_id'];

// Fetch data from the database
$sql = "SELECT `ID`, `NAME`, `SIZE`, `QTY`, `PRODUCT_ID`, `ORDER_ID`, `PRICE`, `IMAGE_URL` 
        FROM `addcart` 
        WHERE `ORDER_ID` = '$order_id'";
$query = mysqli_query($conn, $sql);

// Initialize total amount
echo mysqli_num_rows($query);
}

?>
            </small></span></small>
          </a>
          <a href="#" class="heart-icon">
            <i class="fas fa-heart"></i>
          </a>
        </div>
      </div>
    </header>
    
    
  </div>

  <main>


    



    <br>
     <div class="main-wall">

      
      
<div class="wall2">

  <div class="container">


  <?php
include "../config.php";

$product_ids = isset($_GET['id']);
//echo $product_ids;

if ($product_ids == "" || $_GET['id'] == "") {
  header("location: ../");
}

$product_id = $_GET['id'];

$_SESSION['product_id'] = $product_id;


if(!isset($_SESSION['email']) || $_SESSION['email'] == 0){
    if (!isset($_SESSION['order_id'])) {
      $random_id_1 = rand(111, 99998);
      $random_id_2 = rand(32, 109);
      $order_id = $random_id_1.$random_id_2;
      $_SESSION['order_id'] = $order_id;
    }else{
      $_SESSION['order_id'] = $_SESSION['order_id'];
    }
}else{
  $_SESSION['order_id'] = $_SESSION['email'];
}






if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID, NAME, CATEGORY, DESCRIPTION, PRICE, DATES, EMAIL FROM items WHERE ID='$product_id'";
$result = $conn->query($sql);

$productData = [];
if ($result->num_rows > 0) {
   $row = $result->fetch_array();
    $id = $row['ID'];

    if ($id == $product_id) {
      $name = $row['NAME'];
      $_SESSION['img_url'] = $name;
    $category = $row['CATEGORY'];
    $description = $row['DESCRIPTION'];
    $price = $row['PRICE'];
    $_SESSION['pricing'] = $price;
    $dates = $row['DATES'];
    $email = $row['EMAIL'];  
    }else{
      $name = "Empty ID";
    $category = "Empty ID";
    $description = "Empty ID";
    $price = "Empty ID";
    $dates = "Empty ID";
    $email = "Empty ID";
    }

    
        // <div><a href='#' class='minus'>-</a><a href='#' class='num'>1</a><a href='#' class='plus'>+</a></div>      
} else {
    //echo "No records found.";
    exit;
}
?>





    <div class="cart-product">

     
      <div id="uniqueCart_container">
        <div id="uniqueCart_imageContainer">
          <img src="../images/<?php echo $name;?>" alt="T-Shirt" id="uniqueCart_productImage">
        </div>
        <div id="uniqueCart_detailsContainer">
          <h2 id="uniqueCart_productName"><?php echo $description;?></h2>
          <p id="uniqueCart_designer">Designed by <span><?php echo $email;?></span></p>
    
          <!-- Color Selection -->
<form id="uniqueCart_form" method="POST">
          <div id="uniqueCart_colorContainer">
            <p>Color:</p>
            <div class="uniqueCart_colorOptions">
              <button type="button" class="uniqueCart_color uniqueCart_black selected" data-color="Black"></button>
              <button type="button" class="uniqueCart_color uniqueCart_white" data-color="White"></button>
              <button type="button" class="uniqueCart_color uniqueCart_red" data-color="Red"></button>
              <button type="button" class="uniqueCart_color uniqueCart_yellow" data-color="Yellow"></button>
              <button type="button" class="uniqueCart_color uniqueCart_teal" data-color="Teal"></button>
            </div>
          </div>
    
          <!-- Size Selection -->
          <div id="uniqueCart_sizeContainer">
            <p>Size:</p>
            <div class="uniqueCart_sizes">
              <button type="button" class="uniqueCart_size" data-size="S">S</button>
              <button type="button" class="uniqueCart_size" data-size="M">M</button>
              <button type="button" class="uniqueCart_size" data-size="L">L</button>
              <button type="button" class="uniqueCart_size" data-size="XL">XL</button>
              <button type="button" class="uniqueCart_size" data-size="XXL">XXL</button>
              <button type="button" class="uniqueCart_size" data-size="XXXL">XXXL</button>
            </div>
          </div>
    
          <!-- Price and Quantity -->
          <p id="uniqueCart_price">$<?php echo $price;?></p>
          <div id="uniqueCart_quantityContainer">
            <button type="button" id="uniqueCart_decreaseQty">-</button>
            <span id="uniqueCart_quantity">1</span>
            <button type="button" id="uniqueCart_increaseQty">+</button>
          </div>
          
          <!-- Add to Cart -->
          <button type="button" id="uniqueCart_addToCart">Add to Cart</button>

</form>




<script>
$(document).ready(function(){
    let selectedColor = 'Black'; // Default color
    let selectedSize = 'M'; // Default size
    let quantity = 1; // Default quantity

    // Color selection handler
    $('.uniqueCart_color').click(function(){
        selectedColor = $(this).data('color');
        $('.uniqueCart_color').removeClass('selected');
        $(this).addClass('selected');
    });

    // Size selection handler
    $('.uniqueCart_size').click(function(){
        selectedSize = $(this).data('size');
        $('.uniqueCart_size').removeClass('selected');
        $(this).addClass('selected');
    });

    // Quantity increase/decrease
    $('#uniqueCart_increaseQty').click(function(){
        quantity++;
        $('#uniqueCart_quantity').text(quantity);
    });

    $('#uniqueCart_decreaseQty').click(function(){
        if (quantity > 1) {
            quantity--;
            $('#uniqueCart_quantity').text(quantity);
        }
    });

    // Add to Cart button click
    $('#uniqueCart_addToCart').click(function(){
        $.ajax({
            url: 'process_cart.php',
            type: 'POST',
            data: {
                color: selectedColor,
                size: selectedSize,
                quantity: quantity
            },
            success: function(response) {
                var result = JSON.parse(response);
                if (result.status === 'success') {
                    alert(result.message);
                    window.location.href = '';
                } else {
                    alert(result.message);
                }
            },
            error: function() {
                alert('Error adding item to cart');
            }
        });
    });
});
</script>











        </div>
      </div>

  
    

    </div>
    

<br><br>
    <div class="header">
      <h1>Get this designs on other product</h1>
    </div>
    <div class="buttons" style="text-align: center !important; align-items: center !important; justify-content: center !important;">
      <button class="product-btn active" data-product="youth-tshirt">All</button>
      <button class="product-btn" data-product="crewneck">Men</button>
      <button class="product-btn" data-product="kid-tees">Women</button>
      <button class="product-btn" data-product="long-sleeve">Kids</button>
      <button class="product-btn" data-product="adult-tshirt">Accessories</button>
    </div><br>
    <div class="product-preview" id="product-preview">
      <div class="product-card">
        <img src="images/cloth1.png" alt="Youth Tshirt Front">

        <div class='cart-section'>
          <div style='margin-top: 0.3em;'>
            <div style='font-size: 13px;'>Round Neck</div>
            <div style='font-size: 20px;'>$20</div>
          </div>
          <div style='right: 1em; position: absolute;'>
            <div><a href='#' class='minus'>-</a><a href='#' class='num'>1</a><a href='#' class='plus'>+</a></div>
            <div style='margin-top: 1.1em;'><a href='#' class='shop-now'><span class='fa fa-shopping-cart'></span> Shop</a></div>
          </div>
        </div>
      </div>
      <div class="product-card">
        <img src="images/cloth3.png" alt="Youth Tshirt Back">
        
        <div class='cart-section'>
          <div style='margin-top: 0.3em;'>
            <div style='font-size: 13px;'>Round Neck</div>
            <div style='font-size: 20px;'>$20</div>
          </div>
          <div style='right: 1em; position: absolute;'>
            <div><a href='#' class='minus'>-</a><a href='#' class='num'>1</a><a href='#' class='plus'>+</a></div>
            <div style='margin-top: 1.1em;'><a href='#' class='shop-now'><span class='fa fa-shopping-cart'></span> Shop</a></div>
          </div>
        </div>

      </div>


      <div class="product-card">
        <img src="images/cloth1.png" alt="Youth Tshirt Front">

        <div class='cart-section'>
          <div style='margin-top: 0.3em;'>
            <div style='font-size: 13px;'>Round Neck</div>
            <div style='font-size: 20px;'>$20</div>
          </div>
          <div style='right: 1em; position: absolute;'>
            <div><a href='#' class='minus'>-</a><a href='#' class='num'>1</a><a href='#' class='plus'>+</a></div>
            <div style='margin-top: 1.1em;'><a href='#' class='shop-now'><span class='fa fa-shopping-cart'></span> Shop</a></div>
          </div>
        </div>
      </div>
      <div class="product-card">
        <img src="images/cloth2.png" alt="Youth Tshirt Back">
        
        <div class='cart-section'>
          <div style='margin-top: 0.3em;'>
            <div style='font-size: 13px;'>Round Neck</div>
            <div style='font-size: 20px;'>$20</div>
          </div>
          <div style='right: 1em; position: absolute;'>
            <div><a href='#' class='minus'>-</a><a href='#' class='num'>1</a><a href='#' class='plus'>+</a></div>
            <div style='margin-top: 1.1em;'><a href='#' class='shop-now'><span class='fa fa-shopping-cart'></span> Shop</a></div>
          </div>
        </div>

      </div>
    </div>
  </div>
  
</div>
</div>


<br><br>

<div id="custom-pagination-container">
  <button id="custom-pagination-prev" disabled>Previous</button>
  <div id="custom-pagination-pages">
    <!-- Dynamic pages will be inserted here -->
  </div>
  <button id="custom-pagination-next">Next</button>
</div>




  </main>
 

  <br><br>



<footer class="page-footer" style="background: #36313C; color: white;">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div>
        <h3 style="color: white; margin-left: -1em; margin-top: -1em;"><img src="../../assets/img/logo.png" width="50px" alt=""></h3>
        
      </div>
      <div class="col-lg-2 py-3">
        <h5 style="color: white;">Quick Links</h5>
        <ul class="footer-menu">
          <li><a style="color: white;" href="#">Products</a></li>
          <li><a style="color: white;" href="#">Shops</a></li>
          <li><a style="color: white;" href="#">How it works</a></li>
        </ul>
      </div>
      <div class="col-lg-2 py-3">
        <h5 style="color: white;">Integrations</h5>
        <ul class="footer-menu">
          <li><a style="color: white;" href="#">Tiktok</a></li>
          <li><a style="color: white;" href="#">Etsy</a></li>
          <li><a style="color: white;" href="#">Shopify</a></li>
          <li><a style="color: white;" href="#">ebay</a></li>
        </ul>
      </div>
      <div class="col-lg-2 py-3">
        <h5 style="color: white;">Useful Links</h5>
        <ul class="footer-menu">
          <li><a style="color: white;" href="#">Privacy Policy</a></li>
          <li><a style="color: white;" href="#">Refund Policy</a></li>
          <li><a style="color: white;" href="#">Terms of Service</a></li>
          <li><a style="color: white;" href="#">Contact Information</a></li>
        </ul>
      </div>
      <div class="col-lg-4 py-3">
        <h5 style="color: white;">Subscribe to our Newsletter</h5>
        <ul class="footer-menu">
          <li style="margin-top: -1em;"><small>Get the inside scoop on sales and events</small></li>
          </ul>
        <form action="#" style="display: flex; border: 1px solid white; border-radius: 25px;">
          <input type="text" class="form-control" placeholder="Your email address" style="background: none; border:none; color: white;">
          <input type="submit" value="Subscribe" class="btn btn-primary ml-2" class="form-control" style="border-radius: 25px; background: #700FDC;" class="gogog">
        </form>

        <div class="sosmed-button mt-4">
          <a href="#"><span class="mai-logo-twitter"></span></a>
          <a href="#"><span class="mai-logo-instagram"></span></a>
          <a href="#"><span class="mai-logo-facebook-f"></span></a>
        </div>
      </div>
    </div>

    <div style="text-align: center;">
      <div>
        <p id="copyright">&copy; 2022 <a href="#">Frybix Inc.</a> All Rights Reserved</p>
      </div>
    </div>
  </div> <!-- .container -->
</footer> <!-- .page-footer -->





<script src="script.js"></script>


<script src="scripts.js"></script>



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
          { src: "images/cloth1.png", description: "Youth tshirt", price: "$2.43" },
          { src: "images/cloth3.png", description: "Youth tshirt", price: "$2.43" },
          { src: "images/cloth2.png", description: "Kid tees", price: "$4.00" },
          { src: "images/cloth4.png", description: "Kid tees", price: "$4.00" }
        ],
        "crewneck": [
          { src: "images/cloth2.png", description: "Crewneck", price: "$3.50" },
          { src: "images/cloth2.png", description: "Crewneck", price: "$3.50" },
          { src: "images/cloth2.png", description: "Kid tees", price: "$4.00" },
          { src: "images/cloth2.png", description: "Kid tees", price: "$4.00" }
        ],
        "kid-tees": [
          { src: "images/cloth1.png", description: "Kid tees", price: "$4.00" },
          { src: "images/cloth1.png", description: "Kid tees", price: "$4.00" },
          { src: "images/cloth1.png", description: "Kid tees", price: "$4.00" },
          { src: "images/cloth1.png", description: "Kid tees", price: "$4.00" }
        ],
        "long-sleeve": [
          { src: "images/cloth3.png", description: "Long sleeve", price: "$4.00" },
          { src: "images/cloth3.png", description: "Long sleeve", price: "$4.00" },
          { src: "images/cloth3.png", description: "Long sleeve", price: "$4.00" },
          { src: "images/cloth3.png", description: "Long sleeve", price: "$4.00" }
        ],
        "adult-tshirt": [
          { src: "images/cloth4.png", description: "Adult tshirt", price: "$3.00" },
          { src: "images/cloth4.png", description: "Adult tshirt", price: "$3.00" },
          { src: "images/cloth4.png", description: "Adult tshirt", price: "$3.00" },
          { src: "images/cloth4.png", description: "Adult tshirt", price: "$3.00" }
        ]
      };

      // Update product preview section
      const productPreview = document.getElementById('product-preview');
      productPreview.innerHTML = productData[productType].map(item => `
        <div class="product-card">
          <img src="${item.src}" alt="${item.description}">

           <div class="cart-section">
          <div style="margin-top: 0.3em;">
            <div style="font-size: 13px;">${item.description}</div>
            <div style="font-size: 20px;">${item.price}</div>
          </div>
          <div style="right: 1em; position: absolute;">
            <div><a href="#" class="minus">-</a><a href="#" class="num">1</a><a href="#" class="plus">+</a></div>
            <div style="margin-top: 1.1em;"><a href="#" class="shop-now"><span class="fa fa-shopping-cart"></span> Shop</a></div>
          </div>
        </div>
          
        </div>
      `).join('');
    });
  });
</script>



</body>
</html>