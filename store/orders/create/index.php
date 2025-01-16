<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connect Your Store</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="../turn.css">
  <link rel="stylesheet" href="create.css">
</head>


<body>
  <div class="container">
    <!-- Sidebar -->
    <aside class="sidebar">
      <h2 class="store-title"><br>
        <img src="../../../home/assets/img/logo.png" width="50px" alt=""><p><br>My New Store</p> 
      </h2><br>
      <ul class="menu"><a href="../../dashboard" style="text-decoration: none;">
        <li class="menu-item">
          <i class="fa-solid fa-house"></i> Dashboard
        </li></a><a href="#" style="text-decoration: none;">
        <li class="menu-item">
          <i class="fa-solid fa-wallet"></i> Wallet
        </li></a><a href="../" style="text-decoration: none;">
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
    
        

     
        <div class="create-order-container-unique">
            <!-- Back Navigation -->
             <a href="../" style="text-decoration:none;">
            <div class="back-to-products-unique">
              <i class="fas fa-arrow-left"></i>
              <span>Back to my Orders</span>
            </div></a>
          
            <!-- Header -->
            <div class="header-container-unique">
              <h1>Create order</h1>
              <button class="discard-order-button-unique">
                <i class="fas fa-trash"></i> Discard order
              </button>
            </div>
          
            <!-- Steps -->
            <div class="order-steps-unique">
              <span class="active-step-unique">Products</span>
              <span>&gt;</span>
              <span>Shipping</span>
              <span>&gt;</span>
              <span>Submit order</span>
            </div>
          
            <!-- Add Products Section -->
            <div class="add-products-container-unique">
              <div class="add-products-box-unique">
                <i class="fas fa-plus"></i>
                <span>Add products to order</span>
              </div>
            </div>
          
            <!-- Summary -->
            <div class="order-summary-unique">
              <span>Subtotal: USD 0.00</span>
              <button class="next-step-button-unique">Shipping &gt;</button>
            </div>
          </div>
          
     
        



    </main>
  </div>

  <script src="../script.js"></script>

<script>
    // Discard order button functionality
const discardOrderButton = document.querySelector('.discard-order-button-unique');
discardOrderButton.addEventListener('click', () => {
  alert('Order discarded');
});

// Add products to order functionality
const addProductsBox = document.querySelector('.add-products-container-unique');
addProductsBox.addEventListener('click', () => {
  alert('Redirecting to add products...');
});

// Navigate to shipping
const nextStepButton = document.querySelector('.next-step-button-unique');
nextStepButton.addEventListener('click', () => {
  alert('Proceeding to shipping...');
});

</script>

  
</body>
</html>
