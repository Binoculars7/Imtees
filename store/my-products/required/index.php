<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connect Your Store</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="turn.css">
  <link rel="stylesheet" href="product.css">
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
        </li></a><a href="../../orders" style="text-decoration: none;">
        <li class="menu-item">
          <i class="fa-solid fa-box"></i> Orders
        </li></a><a href="../" style="text-decoration: none;">
        <li class="menu-item active">
          <i class="fa-solid fa-boxes-stacked"></i> My Products
        </li></a><a href="../../store-settings" style="text-decoration: none;">
        <li class="menu-item">
          <i class="fa-solid fa-gear"></i> Store Settings
        </li></a>
      </ul>
      <div class="account">
        <p><i class="fa-solid fa-user"></i> Account</p>
        <p class="mailer">orderimtees@gmail.com</p>
      </div>
    </aside>

    <!-- Hamburger Menu -->
    <button class="hamburger" id="hamburger">
      <i class="fa-solid fa-bars"></i>
    </button>

    <!-- Main Content -->
    <main class="content"><br><br>
    
        
      <div id="unique-container">
        <div class="unique-header">
          <h2>My Products</h2>
          <div class="unique-buttons">
            <a href="../favorite"><button class="unique-btn" id="favorites">My Favourites</button></a>
            <button class="unique-btn" id="visit-store">Visit Store</button>
            <a href="../../orders"><button class="unique-btn active" id="create-order">Create Order</button></a>
          </div>
        </div>
        <div class="unique-tabs">
          <button class="unique-tab" id="hhh">My Products</button>
          <button class="unique-tab">Personalized</button>
          <button class="unique-tab active">Requires action</button>
        </div>
      </div>
      <br>
      
      <div class="custom-ui-container">
        <div class="search-bar">
          <input type="text" class="custom-search-input" placeholder="Search for product...">
          <button class="custom-search-button">
            <i class="fas fa-search"></i>
          </button>
        </div>
        <div class="filter-options">
          <select class="custom-dropdown">
            <option>Print Provider</option>
          </select>
          <select class="custom-dropdown">
            <option>Brand</option>
          </select>
          <select class="custom-dropdown">
            <option>Delivery option</option>
          </select>
          <select class="custom-dropdown">
            <option>Recently Option</option>
          </select>
        </div>
      </div>
      




      
<br><br>

      <div class="custom-product-list">
        <!-- Table Header -->
        <ul class="list-header">
          <li>
            <input type="checkbox" id="select-all" />
            <label for="select-all">Select all</label>
          </li>
          <li>Product</li>
          <li>Inventory</li>
          <li>Shipping</li>
          <li>Status</li>
          <li></li>
        </ul>
    
      
        <!-- Duplicate Item Example -->
        <ul class="product-item">
          <div style="margin-top: 3.5em; margin-left: 22em; font-size: 18px; color: #B3B3B3;">
            No item yet
          </div>
        </ul>
      </div>
      
     
        



    </main>
  </div>

  <script src="../script.js"></script>

<script>
  // Add click functionality for buttons
document.querySelectorAll('.unique-btn').forEach((btn) => {
  btn.addEventListener('click', () => {
    // Remove active class from all buttons
    document.querySelectorAll('.unique-btn').forEach((b) => b.classList.remove('active'));
    // Add active class to the clicked button
    btn.classList.add('active');
  });
});

// Add click functionality for tabs
document.querySelectorAll('.unique-tab').forEach((tab) => {
  tab.addEventListener('click', () => {
    // Remove active class from all tabs
    document.querySelectorAll('.unique-tab').forEach((t) => t.classList.remove('active'));
    // Add active class to the clicked tab
    tab.classList.add('active');
  });
});

</script>


<script>
  document.getElementById('hhh').addEventListener('click', function() {
    // Redirect to the desired page
    window.location.href = '../';
});
</script>
  
</body>
</html>
