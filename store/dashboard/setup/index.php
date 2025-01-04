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
      <ul class="menu">
        <li class="menu-item active">
          <i class="fa-solid fa-house"></i> Dashboard
        </li>
        <li class="menu-item">
          <i class="fa-solid fa-list"></i> Catalogs
        </li>
        <li class="menu-item">
          <i class="fa-solid fa-wallet"></i> Wallet
        </li>
        <li class="menu-item">
          <i class="fa-solid fa-box"></i> Orders
        </li>
        <li class="menu-item">
          <i class="fa-solid fa-boxes-stacked"></i> My Products
        </li>
        <li class="menu-item">
          <i class="fa-solid fa-gear"></i> Store Settings
        </li>
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
<form action="">

    <div class="form-info">
        <div class="part1">
          <div class="form-titles">Store Name</div>
          <input type="text" placeholder="Store Name">
        </div>

         <div>
          <div class="form-titles">URL Preview</div>
          <input type="text" placeholder="URL Preview" disabled>
        </div>

    </div>

  <div class="form-info" style="margin-top: 2em;">
    <div class="part1">
      <div class="form-titles">Country of tax residence</div>
      <select name="" id="">
        <option value="">Select a Country</option>
        <option value="">USA</option>
        <option value="">NIGERIA</option>
      </select>
    </div>

    <div class="btnn">
      <input type="submit" value="Next">
    </div>

  </div>
  

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
