<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connect Your Store</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="turn.css">
  <link rel="stylesheet" href="settings.css">
</head>


<body>
  <div class="container">
    <!-- Sidebar -->
    <aside class="sidebar">
      <h2 class="store-title" style="text-align:center;"><br>
        <img src="../../home/assets/img/logo.png" width="50px" alt=""><p><br>My New Store</p> 
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
        </li></a><a href="../../my-products" style="text-decoration: none;">
        <li class="menu-item">
          <i class="fa-solid fa-boxes-stacked"></i> My Products
        </li></a><a href="../" style="text-decoration: none;">
        <li class="menu-item active">
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
    
        
      <div id="unique-container">
        
        
        <div class="unique-tabs">
          <button class="unique-tab" id="hhh">Store Name</button>
          <button class="unique-tab active">Order Settings</button>
          <button class="unique-tab">Connects</button>
          <button class="unique-tab">Shipping Profiles</button>
        </div>
      </div>

      <br>
      
      
      <br>
      

      <div class="ship-from-address">
        <h2 class="address-title">Ship from Address</h2>
        <p class="address-description">
          Brand your packaging by adding your company address and a phone number
        </p>
      
        <div class="address-tab">
          <span class="address-tab-label">US address</span>
        </div>
      
        <p class="address-subtitle">Address for shipments from the United States</p>
      
        <div class="address-options">
          <label class="address-option">
            <input type="radio" name="address" class="address-radio" checked />
            <span class="option-label">Imtees default</span>
            <span class="option-description">
              The return address will be the location where the product was printed
            </span>
          </label>
      
          <label class="address-option">
            <input type="radio" name="address" class="address-radio" />
            <span class="option-label">Custom address</span>
            <span class="option-description">
              Must be a valid United State address
            </span>
          </label>
        </div>
      
        <div class="address-actions">
          <a href=""><button class="cancel-btn">Cancel</button></a>
          <button onclick="alertme()" id="save-btnn" class="save-btn">Save</button>
        </div>
      </div>

      <script>
        function alertme() {
          alert('Your setting is updated');
        }
      </script>
      
      



      

      
     
        



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
