<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connect Your Store</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="turn.css">
  <link rel="stylesheet" href="others.css">
</head>


<body>
  <div class="container">
    <!-- Sidebar -->
    <aside class="sidebar">
      <h2 class="store-title"><br>
        <img src="../../home/assets/img/logo.png" width="50px" alt=""><p><br>My New Store</p> 
      </h2><br>
      <ul class="menu"><a href="../dashboard" style="text-decoration: none;">
        <li class="menu-item">
          <i class="fa-solid fa-house"></i> Dashboard
        </li></a><a href="#" style="text-decoration: none;">
        <li class="menu-item">
          <i class="fa-solid fa-wallet"></i> Wallet
        </li></a><a href="" style="text-decoration: none;">
        <li class="menu-item active">
          <i class="fa-solid fa-box"></i> Orders
        </li></a><a href="../my-products" style="text-decoration: none;">
        <li class="menu-item">
          <i class="fa-solid fa-boxes-stacked"></i> My Products
        </li></a><a href="../store-settings" style="text-decoration: none;">
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
    
        

        <div class="orders-container-unique">
          <div class="orders-header-unique">
            <h2>Orders</h2>
            <div class="orders-actions-unique">
              <button class="csv-button-unique">CSV Import/Export <i class="fas fa-caret-down"></i></button>
              <a href="create/"><button class="create-order-button-unique">Create order <i class="fas fa-caret-down"></i></button></a>
            </div>
          </div>
          <div class="orders-settings-unique">
            <div class="setting-item-unique">
              <span>Routing:</span>
              <span class="disabled-text-unique">Disabled</span>
              <i class="fas fa-question-circle"></i>
            </div>
            <div class="setting-item-unique">
              <span>Approval:</span>
              <span class="automatic-text-unique">Automatic</span>
              <i class="fas fa-question-circle"></i>
            </div>
            <div class="setting-item-unique">
              <span>Tracking notifications:</span>
              <span class="automatic-text-unique">Automatic</span>
              <i class="fas fa-question-circle"></i>
            </div>
            <div class="setting-item-unique">
              <span>Delayed orders:</span>
              <span class="disabled-text-unique">Disabled</span>
              <i class="fas fa-question-circle"></i>
            </div>
          </div>
        </div>
        
        <br><br>
        <div class="orders-tab-container-unique">
          <!-- Tabs -->
          <div class="orders-tabs-unique">
            <span class="active-tab-unique">IMTees orders</span>
            <span>Other orders</span>
          </div>
        
          <!-- Search and Filters -->
          <div class="orders-filters-unique">
            <div class="search-bar-unique">
              <input
                type="text"
                placeholder="Search by order number, customer or product name"
              />
              <i class="fas fa-search"></i>
            </div>
            <div class="filters-buttons-unique">
              <button class="active-filter-unique">All</button>
              <button>On hold</button>
              <button>In production</button>
              <button>Ready to ship</button>
              <button>On the way</button>
              <button>...</button>
            </div>
          </div>
        
          <!-- Orders Table -->
          <div class="orders-table-container-unique">
            <div class="orders-table-header-unique">
              <span><input type="checkbox" /></span>
              <span>Order</span>
              <span>Sent to production</span>
              <span>Customer</span>
              <span>Sent to production</span>
              <span>Customer</span>
              <span>Status</span>
            </div>
            <div class="orders-empty-state-unique">
              <img src="img/cart.png" alt="Shopping cart with a discount" class="empty-cart-icon-unique"/>
              <p>No orders found</p>
            </div>
          </div>
        </div>
        



    </main>
  </div>

  <script src="script.js"></script>

  <script>
    // Tab switching functionality
const tabs = document.querySelectorAll('.orders-tabs-unique span');
tabs.forEach(tab => {
  tab.addEventListener('click', () => {
    tabs.forEach(t => t.classList.remove('active-tab-unique'));
    tab.classList.add('active-tab-unique');
  });
});

// Filter buttons functionality
const filters = document.querySelectorAll('.filters-buttons-unique button');
filters.forEach(filter => {
  filter.addEventListener('click', () => {
    filters.forEach(f => f.classList.remove('active-filter-unique'));
    filter.classList.add('active-filter-unique');
  });
});

  </script>

  
</body>
</html>
