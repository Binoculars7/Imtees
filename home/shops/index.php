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
 $sense_email = "SELECT ID, NAME, CATEGORY, DESCRIPTION, PRICE, DATES, EMAIL FROM items";
}else{
  $doe = $_GET['email'];
  $sense_email = "SELECT ID, NAME, CATEGORY, DESCRIPTION, PRICE, DATES, EMAIL FROM items WHERE EMAIL='$doe'";
  
}


?>




<?php
include "config.php";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = $sense_email;
$result = $conn->query($sql);

$productData = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id = $row['ID'];
        $category = strtolower(str_replace(' ', '-', $row['CATEGORY']));
        $product = [
            "id" => $id,
            "src" => "images/" . strtolower(str_replace(' ', '', $row['NAME'])),
            "description" => $row['DESCRIPTION'],
            "price" => "$" . number_format((float)$row['PRICE'], 2)
        ];
        $productData[$category][] = $product;
    }
} else {
    echo "No records found.";
    exit;
}
?>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const productData = <?php echo json_encode($productData, JSON_PRETTY_PRINT); ?>;
        console.log(productData);

        document.querySelectorAll('.product-btn').forEach(button => {
            button.addEventListener('click', () => {
                document.querySelectorAll('.product-btn').forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');

                const productType = button.getAttribute('data-product');
                const productPreview = document.getElementById("product-preview");

                if (productData[productType]) {
                    productPreview.innerHTML = productData[productType].map(item => `
                        <div class="product-card">
                            <img src="${item.src}" alt="${item.description}">
                            <div class="cart-section">
<div style="margin-top: 0.3em;">
<div style="font-size: 13px;">${item.description}</div>
<div style="font-size: 20px;">${item.price}</div>
</div>
<div style="right: 1em; position: absolute;">
<div style="margin-top: 1.1em;"><a href="item/?id=${item.id}" class="shop-now"><span class="fa fa-shopping-cart"></span> Shop</a></div>
</div>
                            </div>
                        </div>
                    `).join("");
                } else {
                    //productPreview.innerHTML = "<p>No products available.</p>";
                }
            });
        });
    });
</script>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="shop.css">
  <link rel="stylesheet" href="cloth.css">
  <link rel="stylesheet" href="cart.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link rel="icon" href="../assets/img/logo.png" type="image/png">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/css/maicons.css">
</head>
<body>

  <div>
    <header class="menu-bar">
      <!-- Logo Section -->
      <div class="menu-logo">
        <img src="../assets/img/logo.png" alt="Brand Logo" class="brand-logo" />
      </div>
    
      <!-- Navigation Links -->
      <nav class="menu-nav">
        <ul class="nav-links">
          <li><a href="../" class="nav-link"><b>Home</b></a></li>
          <li><a href="../shops" class="nav-link active"><b>Shops</b></a></li>
          <li><a href="../how-it-works" class="nav-link"><b>How it works</b></a></li>
          <li><a href="../../store" class="nav-link"><b>Store</b></a></li>
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
          <a href="item/cart/" class="cart-icon">
            <i class="fas fa-shopping-cart"></i>
            <small><span style="color:white; background:red; margin-top:0em; margin-left:-1em; position:absolute; border-radius:50%; font-size:12px; font-weight:bold; padding:0em 0.45em 0.15em 0.45em;"><small>
            <?php
include "config.php";

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
     <div class="main-wall">
    <div class="wall1">

<div id="custom-filter-container">
  <h3>Filters</h3>

  <!-- Sort By -->
  <div class="filter-section">
    <div class="filter-header" data-target="sort-by-options">
      Sort By <span class="arrow">&#9662;</span>
    </div>
    <div class="filter-options hidden" id="sort-by-options">
      <label><input type="radio" name="sort" value="newest"> Newest</label><br>
      <label><input type="radio" name="sort" value="relevance"> Relevance</label>
    </div>
  </div>

  <!-- Price Range -->
  <div class="filter-section">
    <div class="filter-header" data-target="price-range-options">
      Price Range <span class="arrow">&#9662;</span>
    </div>
    <div class="filter-options hidden" id="price-range-options">
      <div class="price-slider">
        <span id="price-min">$5</span>
        <input type="range" id="price-slider" min="5" max="100" value="50">
        <span id="price-max">$100</span>
      </div>
    </div>
  </div>

 <!-- Colors -->
<div class="filter-section">
  <div class="filter-header" data-target="colors-options">
    Colors <span class="arrow">&#9662;</span>
  </div>
  <div class="filter-options hidden" id="colors-options">
    <div class="color-circle black" data-color="black"></div>
    <div class="color-circle gray" data-color="gray"></div>
    <div class="color-circle red" data-color="red"></div>
    <div class="color-circle yellow" data-color="yellow"></div>
    <div class="color-circle white" data-color="white"></div>
    <div class="color-circle teal" data-color="teal"></div>
  </div>
</div>


  <!-- Embroidery -->
  <div class="filter-section">
    <div class="filter-header" data-target="embroidery-options">
      Embroidery <span class="arrow">&#9662;</span>
    </div>
    <div class="filter-options hidden" id="embroidery-options">
      <label><input type="checkbox" value="floral"> Floral</label><br>
      <label><input type="checkbox" value="geometric"> Geometric</label><br>
      <label><input type="checkbox" value="abstract"> Abstract</label>
    </div>
  </div>
</div>



</div>
<div class="wall2">
<br>

<?php
  if (isset($_POST['refresh'])) {
    echo "<script>
        window.href.location = 'index.php';
    </script>";
  }
?>

<script>
        function handleClick(event) {
            event.preventDefault(); // Prevent the default form submission
            //alert("Button clicked without refreshing!");
        }
    </script>

  <div class="containers">
    <div class="header">
      <h1>Categories</h1>
    </div>
    <div class="buttons">
      <form method="POST">
    <button submit="refresh" id="refresh" class="product-btn active">All</button>

      <button onclick="handleClick(event)" class="product-btn" data-product="youth-tshirt">Youth Tshirt</button>
      <button onclick="handleClick(event)" class="product-btn" data-product="crewneck">Crewneck</button>
      <button onclick="handleClick(event)" class="product-btn" data-product="kid-tees">Kid Tees</button>
      <button onclick="handleClick(event)" class="product-btn" data-product="long-sleeve">Long Sleeve</button>
      <button onclick="handleClick(event)" class="product-btn" data-product="adult-tshirt">Adult Tshirt</button>
    </div><br>
    <div class="product-preview" id="product-preview">
</form>

    
<?php

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = $sense_email;
$result = $conn->query($sql);

$productData = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id = $row['ID'];
        $name = $row['NAME'];
        $category = $row['CATEGORY'];
        $description = $row['DESCRIPTION'];
        $price = $row['PRICE'];
        $dates = $row['DATES'];
        $email = $row['EMAIL'];  
        // <div><a href='#' class='minus'>-</a><a href='#' class='num'>1</a><a href='#' class='plus'>+</a></div>
        
        echo "<div class='product-card'>
        <img src='images/".$name."' alt='".$description."'>

        <div class='cart-section'>
          <div style='margin-top: 0.3em;'>
            <div style='font-size: 13px;'>".$category."</div>
            <div style='font-size: 20px;'>$".$price."</div>
          </div>
          <div style='right: 1em; position: absolute;'>
           
            <div style='margin-top: 1.1em;'><a href='item/?id=".$id."' class='shop-now'><span class='fa fa-shopping-cart'></span> Shop</a></div>
          </div>
        </div>
      </div>";
    }
} else {
    echo "No records found.";
    exit;
}
?>


    </div>
  </div>
  
</div>
</div>
  </main>
 

  <br><br>



<footer class="page-footer" style="background: #36313C; color: white;">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div>
        <h3 style="color: white; margin-left: -1em; margin-top: -1em;"><img src="../assets/img/logo.png" width="50px" alt=""></h3>
        
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






</body>
</html>