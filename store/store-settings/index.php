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
      <ul class="menu"><a href="../dashboard" style="text-decoration: none;">
        <li class="menu-item">
          <i class="fa-solid fa-house"></i> Dashboard
        </li></a><a href="#" style="text-decoration: none;">
        <li class="menu-item">
          <i class="fa-solid fa-wallet"></i> Wallet
        </li></a><a href="../orders" style="text-decoration: none;">
        <li class="menu-item">
          <i class="fa-solid fa-box"></i> Orders
        </li></a><a href="../my-products" style="text-decoration: none;">
        <li class="menu-item">
          <i class="fa-solid fa-boxes-stacked"></i> My Products
        </li></a><a href="" style="text-decoration: none;">
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
          <button class="unique-tab active">Store Name</button>
          <button class="unique-tab" id="hhh">Order Settings</button>
          <button class="unique-tab">Connects</button>
          <button class="unique-tab">Shipping Profiles</button>
        </div>
      </div>

      <br>
      
      
      <br>
      <div class="unique-store-name">
        <h2 class="store-title">Store Name</h2>
        <p class="store-description">
          Your store name will be shown on the ship from field on shipping labels
        </p><br>
        <label for="store-input" class="store-label">Type in your Store name</label>
        <input type="text" id="store-input" class="store-input" placeholder="Input your name" />
        <div class="store-actions">
          <a href=""><button class="cancel-btn">Cancel</button></a>
          <button onclick="alertme()"  class="save-btn">Save</button>
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
    window.location.href = 'order';
});
</script>


  
</body>
</html>
