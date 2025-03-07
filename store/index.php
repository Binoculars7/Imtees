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

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com">
  
  <title>Imtees</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

  <link rel="stylesheet" href="../home/assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../home/assets/css/bootstrap.css">

  <link rel="stylesheet" href="../home/assets/css/maicons.css">

  <link rel="stylesheet" href="../home/assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../home/assets/css/theme.css">
  <link rel="icon" href="../home/assets/img/logo.png" type="image/png">

</head>
<style>
    #activer{
    color: #700FDC;
  }
  footer a, footer li a{
    color:white;
  }
  .minus{
    padding: 0.2em 0.8em;
    border:1px solid black;
    text-decoration: none;
    font-size: 16px;
    border-radius: 10px 0 0 10px;
    border-right: none;
  }
  #growth1, #growth2, #growth3, #growth4{
  display: none; /* Initially hidden */
}
#up1, #up2, #up3, #up4{
  display: none; /* Initially hidden */
}
  .plus{
    padding: 0.2em 0.8em;
    border:1px solid black;
    text-decoration: none;
    font-size: 16px;
    border-radius: 0 10px 10px 0;
    border-left: none;
  }
  .num{
    padding: 0.2em 0.8em;
    border:1px solid black;
    text-decoration: none;
    font-size: 16px;
  }
  .shop-now{
    background: #410784;
    color:white;
    padding: 0.5em 1.5em;
    border-radius: 10px;
  }
  .cart-section{
    display: flex;
    margin-top: 1em;
  }
  @media(max-width:1000px) {
    #flexer{
      flex-wrap: wrap;
      margin: auto;
    }
  }
</style>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header style="padding-top: 0; margin-top: 0;">
    <nav class="navbar navbar-expand-lg navbar-light navbar-float" style="box-shadow: none; font-weight: bold; background:#F9FDFF; margin-top:-1em;">
      <div class="container">
        <a href="index.html" class="navbar-brand"><img src="../home/assets/img/logo.png" width="40"></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-lg-4 pt-3 pt-lg-0">
            <li class="nav-item">
              <a href="../home" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="../home/shops/" class="nav-link">Shops</a>
            </li>
            <li class="nav-item">
              <a href="../home/how-it-works/" class="nav-link">How it works</a>
            </li>
            <li class="nav-item">
              <a href="#" id="activer" class="nav-link">Store</a>
            </li>
          </ul>

          <div class="ml-auto">
          <?php
            if ($_SESSION['email'] != 0) {
              echo '<a href="dashboard/" class="btn btn-primary" style="padding: 0.4em 1.8em; border-radius: 12px;"><small><span class="mai-rocket-outline"></span> Create Now</small></a>';
            }else{
              echo ' <a href="../accounts/signup/" class="btn btn-primary" style="padding: 0.4em 1.8em; border-radius: 12px;"><small><span class="mai-rocket-outline"></span> Signup</small></a> 
            <a href="../accounts/login/" class="btn btn-outline" style="padding: 0.4em 2.6em; border-radius: 12px;"><small>Login</small></a>';
            }
            ?>
           
          </div>
        </div>
      </div>
    </nav>

    <div class="page-banner home-banner" style="background:linear-gradient(to right, #f0f9fe, #f0f9fe, #f0f9fe,#f0f9fe, #f0f9fe, #f2fbff);">
      <div class="container h-100">
        <div class="row align-items-center h-100">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1 class="mb-4" style="font-weight: bold; font-size: 35px; line-height: 1.3;">Launch your sales instantly using <span style="color: #700FDC;">Imtees</span> Store.</h1>
            <p class="text-ls mb-5" style="width: 90%; font-size: 18px;">Boost your profits and sell custom merch with your own unique store link — all at no cost.</p>

            <?php
            if ($_SESSION['email'] != 0) {
              echo '<a href="dashboard/" class="btn btn-primary ml-2" style="border-radius: 11px; margin-top: -1em; margin-bottom: 1em;"><span class="mai-rocket"></span> Create Now </a>';
            }else{
              echo '<a href="../accounts/signup/" class="btn btn-primary ml-2" style="border-radius: 11px; margin-top: -1em; margin-bottom: 1em;"><span class="mai-rocket"></span> Create Now </a>';
            }
            ?>

            <p><img src="heads.PNG" width="150px" alt=""></p>
          </div>
          <div class="col-lg-6 py-3 wow zoomIn">
            <div class="img-place">
              <img src="../home/assets/img/sided.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main>
<br>
    <div class="page-section client-section">
          <div class="item wow zoomIn" style="background: #f9f9f9; padding: 2em 0;">
            <div>Trusted By Countless Brands including some of <br>your favourites.</div>
            <img src="../home/assets/img/company.PNG" alt="" style="width: 60%; margin-top: 1em;">
        </div>
<!-- .container-fluid -->
    </div> <!-- .page-section -->


  
   
  
  
    <div class="page-section" style="margin-top: -1em;">
      <div class="container">
        <div class="text-center wow fadeInUp">
          <h2 class="title-section">Our Features</h2>
          <div class="divider mx-auto" style="margin-top: -0.2em;"></div>
          <div class="subhead" style="margin-top: -1em;">Everything You Need to Design, Integrate and Sell</div>
        </div>
  
        <div id="flexer" style="text-align: center; display: flex; margin: auto;">
          <div style="background: #F8F1FF; border-radius: 20px;   padding:0.4em 0; margin-left: 1em; margin-right: 1em; margin-top: 2em;">
          <br>  <br><div><img src="../home/assets/img/icon1.PNG" width="80" alt=""></div>
            <h5 style="font-weight: bold; margin-top: 1.5em; font-size: 19px;"> Integrate with Popular Stores</h5>
            <p style="padding: 0.2em 1.5em; font-size: 15px; line-height: 1.6em;">Connect instantly with Shopify, Etsy, and more! Manage your designs and sales all in one place with effortless integration.</p>
            <a href="#">See How it works</a><br><br><br>
          </div>
          <div style="background: #F8F1FF; border-radius: 20px;  padding:0.4em 0; margin-left: 1em; margin-right: 1em; margin-top: 2em;">
            <br><br><div><img src="../home/assets/img/icon2.PNG" width="80" alt=""></div>
            <h5 style="font-weight: bold; margin-top: 1.5em; font-size: 19px;">Create & Customize Designs</h5>
            <p style="padding: 0.2em 1.5em; font-size: 15px; line-height: 1.6em;">Our intuitive design tools let you create unique products in minutes. Add text, images, and customize with ease.
            </p>
            <a href="#">Start Designing</a><br><br><br>
          </div>
          <div style="background: #F8F1FF; border-radius: 20px;  padding:0.4em 0; margin-left: 1em; margin-right: 1em; margin-top: 2em;">
           <br><br> <div><img src="../home/assets/img/icon3.PNG" width="80" alt=""></div>
            <h5 style="font-weight: bold; margin-top: 1.5em; font-size: 19px;">Sell Directly from Our Platform</h5>
            <p style="padding: 0.2em 1.5em; font-size: 15px; line-height: 1.6em;">Don’t have a store? No problem! List your designs on our platform and reach customers instantly.</p>
            <a href="#">Open Your Shop</a><br><br><br>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->


    <div class="page-section client-section">
      <div class="item wow zoomIn" style="background:#ffffff; padding: 2em 0;">
        <div class="text-center wow fadeInUp">
          <h2 class="title-section">Connect your store</h2>
          <div class="divider mx-auto" style="margin-top: -0.2em;"></div>
          <div class="subhead" style="margin-top: -1em;">Printify easily integrates with major e-commerce platforms and marketplaces</div>
        </div>
        <img src="../home/assets/img/stuffs.png" alt="" style="width: 70%; margin-top: 1em;">
    </div>
<!-- .container-fluid -->
</div> <!-- .page-section -->


    
    <div class="page-section border-top">
      <div class="container">
        <div class="text-center wow fadeInUp">
          <h2 class="title-section">Our Shop</h2>
          <div class="divider mx-auto"></div>
        </div>
        <div style="margin-bottom: -3em;">Top Rated Seller</div>
        <div class="row my-5 card-blog-row">
          <div class="col-md-6 col-lg-3 py-3 wow fadeInUp">
            <div class="card-blog" style="text-align: center; border: 1px solid rgb(172, 167, 167); box-shadow: none; padding-top: 0; padding-bottom: 0em; background: none; overflow: hidden; position: relative;">
              <img src="../home/assets/img/cloth1.png" width="420px" height="280px" alt="" style="margin-left: -6.5em;">
            </div>
            <div class="cart-section">
              <div style="margin-top: 0.3em;">
                <div style="font-size: 13px;">Round Neck</div>
                <div style="font-size: 20px;">$20</div>
              </div>
              <div style="right: 1em; position: absolute;">
                <div><a href="#" class="minus">-</a><a href="#" class="num">1</a><a href="#" class="plus">+</a></div>
                <div style="margin-top: 0.7em;"><a href="#" class="shop-now"><span class="mai-cart"></span> Shop</a></div>
              </div>
            </div>
          </div>  
          <div class="col-md-6 col-lg-3 py-3 wow fadeInUp">
            <div class="card-blog" style="text-align: center; border: 1px solid rgb(172, 167, 167); box-shadow: none; padding-top: 0; padding-bottom: 0em; background: none; overflow: hidden; position: relative;">
              <img src="../home/assets/img/cloth2.png" width="420px"  height="280px" alt="" style="margin-left: -6em;">
            </div>
            <div class="cart-section">
              <div style="margin-top: 0.3em;">
                <div style="font-size: 13px;">Round Neck</div>
                <div style="font-size: 20px;">$20</div>
              </div>
              <div style="right: 1em; position: absolute;">
                <div><a href="#" class="minus">-</a><a href="#" class="num">1</a><a href="#" class="plus">+</a></div>
                <div style="margin-top: 0.7em;"><a href="#" class="shop-now"><span class="mai-cart"></span> Shop</a></div>
              </div>
            </div>
          </div>  
          <div class="col-md-6 col-lg-3 py-3 wow fadeInUp">
            <div class="card-blog" style="text-align: center; border: 1px solid rgb(172, 167, 167); box-shadow: none; padding-top: 0; padding-bottom: 0em; background: none; overflow: hidden; position: relative;">
              <img src="../home/assets/img/cloth3.jpg" width="200px"  height="280px" alt="">
            </div>
            <div class="cart-section">
              <div style="margin-top: 0.3em;">
                <div style="font-size: 13px;">Hoodie</div>
                <div style="font-size: 20px;">$20</div>
              </div>
              <div style="right: 1em; position: absolute;">
                <div><a href="#" class="minus">-</a><a href="#" class="num">1</a><a href="#" class="plus">+</a></div>
                <div style="margin-top: 0.7em;"><a href="#" class="shop-now"><span class="mai-cart"></span> Shop</a></div>
              </div>
            </div>
          </div>  
          <div class="col-md-6 col-lg-3 py-3 wow fadeInUp">
            <div class="card-blog" style="text-align: center; border: 1px solid rgb(172, 167, 167); box-shadow: none; padding-top: 0; padding-bottom: 0em; background: none; overflow: hidden; position: relative;">
              <img src="../home/assets/img/cloth4.png" width="400px"  height="280px" alt="" style="margin-left: -6.5em;">
            </div>
            <div class="cart-section">
              <div style="margin-top: 0.3em;">
                <div style="font-size: 13px;">Hoodie</div>
                <div style="font-size: 20px;">$20</div>
              </div>
              <div style="right: 1em; position: absolute;">
                <div><a href="#" class="minus">-</a><a href="#" class="num">1</a><a href="#" class="plus">+</a></div>
                <div style="margin-top: 0.7em;"><a href="#" class="shop-now"><span class="mai-cart"></span> Shop</a></div>
              </div>
            </div>
          </div>  
        </div>
  
        <div class="text-center">
          <a href="blog.html" class="btn btn-outline-primary rounded-pill">See More <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-sections -->
  



    <div class="page-section client-section">
      <div class="item wow zoomIn" style="background: #EDF0F1; padding: 2em 0;">
        <div style="font:bold 22px arial;">Frequently Asked Questions</div><br>
        <div style="text-align: left; width: 70%; margin: auto;">
          <div style="border:1px solid #CAC7C7; padding:1.5em; border-radius: 10px;">
            <div style="font:bold 20px arial;">What are promotional products? <span id="lthan1" style="position: absolute; right: 13em; font-weight: bold; cursor: pointer;"><i id="down1" class="fa-solid fa-angle-down"></i><i id="up1" class="fa-solid fa-angle-up"></i></span></div>
            <div id="growth1" style="border-top: 1px solid #CAC7C7; font-size:14px; margin-top: 1.5em; padding-top: 1em;">Promotional products are company-branded merch. Promo items are usually given away as gifts  for customers at
              trade shows and similar events or sold online.</div>
          </div>
          <br>
          <div style="border:1px solid #CAC7C7; padding:1.5em; border-radius: 10px;">
            <div style="font:bold 20px arial;">Why use promotional products? <span id="lthan2" style="position: absolute; right: 13em; font-weight: bold; cursor: pointer;"><i id="down2" class="fa-solid fa-angle-down"></i><i id="up2" class="fa-solid fa-angle-up"></i></span></div>
            <div id="growth2" style="border-top: 1px solid #CAC7C7; font-size:14px; margin-top: 1.5em; padding-top: 1em;">Promotional products can also help you boost brand loyalty within your company. Welcome new employees with 
              complimentary merch and make them feel like part of the team. Or you can use promo merch like t-shirts and athletic 
              wear during team-building and company sports events. </div>
          </div>
          <br>
          <div style="border:1px solid #CAC7C7; padding:1.5em; border-radius: 10px;">
            <div style="font:bold 20px arial;">What are the best promotional items?   <span id="lthan3" style="position: absolute; right: 13em; font-weight: bold; cursor: pointer;"><i id="down3" class="fa-solid fa-angle-down"></i><i id="up3" class="fa-solid fa-angle-up"></i></span></div>
            <div id="growth3" style="border-top: 1px solid #CAC7C7; font-size:14px; margin-top: 1.5em; padding-top: 1em;">Go for products that people use on a daily basis and can’t have too many of. Think coffee mugs, comfy tees or hoodies, 
              blankets, etc. That way you can ensure your promo item will serve its purpose—promoting your brand—instead of being tossed
               aside and forgotten. </div>
          </div>
          <br>
          <div style="border:1px solid #CAC7C7; padding:1.5em; border-radius: 10px;">
            <div style="font:bold 20px arial;">How can i sell promotional products? <span id="lthan4" style="position: absolute; right: 13em; font-weight: bold; cursor: pointer;"><i id="down4" class="fa-solid fa-angle-down"></i><i id="up4" class="fa-solid fa-angle-up"></i></span></div>
            <div id="growth4" style="border-top: 1px solid #CAC7C7; font-size:14px; margin-top: 1.5em; padding-top: 1em;">Promotional products work great not only as gifts but also for retail. This gives loyal fans of your brand the opportunity to 
              show their appreciation as well as share it with their peers. To start selling promo items, create an online store. Using an ecommerce platform or marketplace makes the 
              process fast and easy .</div>
          </div><br><br>
        </div>
    </div>
<!-- .container-fluid -->
</div> <!-- .page-section -->


    
  </main>

  <footer class="page-footer" style="background: #36313C; color: white;">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div>
          <h3 style="color: white; margin-left: -1em; margin-top: -1em;"><img src="../home/assets/img/logo.png" width="50px" alt=""></h3>
          
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
            <input type="submit" value="Subscribe" class="btn btn-primary ml-2" class="form-control" style="border-radius: 25px;">
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



  <script>
    // 1
     const lthan1 = document.getElementById('lthan1');
const up1 = document.getElementById('up1');
const down1 = document.getElementById('down1');

lthan1.addEventListener('click', () => {
  if (growth1.style.display === 'none' || growth1.style.display === '') {
    growth1.style.display = 'block'; // Show the element
    up1.style.display= 'block';
    down1.style.display = 'none';
  } else {
    growth1.style.display = 'none'; // Hide the element
    up1.style.display= 'none';
    down1.style.display = 'block';
  }
});

 // 2
 const lthan2 = document.getElementById('lthan2');
const growth2 = document.getElementById('growth2');
const up2 = document.getElementById('up2');
const down2 = document.getElementById('down2');

lthan2.addEventListener('click', () => {
  if (growth2.style.display === 'none' || growth2.style.display === '') {
    growth2.style.display = 'block'; // Show the element
    up2.style.display= 'block';
    down2.style.display = 'none';
  } else {
    growth2.style.display = 'none'; // Hide the element
    up2.style.display= 'none';
    down2.style.display = 'block';
  }
});


 // 3
 const lthan3 = document.getElementById('lthan3');
const growth3 = document.getElementById('growth3');
const up3 = document.getElementById('up3');
const down3 = document.getElementById('down3');

lthan3.addEventListener('click', () => {
  if (growth3.style.display === 'none' || growth3.style.display === '') {
    growth3.style.display = 'block'; // Show the element
    up3.style.display= 'block';
    down3.style.display = 'none';
  } else {
    growth3.style.display = 'none'; // Hide the element
    up3.style.display= 'none';
    down3.style.display = 'block';
  }
});


 // 4
 const lthan4 = document.getElementById('lthan4');
const growth4 = document.getElementById('growth4');
const up4 = document.getElementById('up4');
const down4 = document.getElementById('down4');

lthan4.addEventListener('click', () => {
  if (growth4.style.display === 'none' || growth4.style.display === '') {
    growth4.style.display = 'block'; // Show the element
    up4.style.display= 'block';
    down4.style.display = 'none';
  } else {
    growth4.style.display = 'none'; // Hide the element
    up4.style.display= 'none';
    down4.style.display = 'block';
  }
});
  </script>



  <script src="../home/assets/js/jquery-3.5.1.min.js"></script>

  <script src="../home/assets/js/bootstrap.bundle.min.js"></script>

  <script src="../home/assets/vendor/wow/wow.min.js"></script>

  <script src="../home/assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

  <script src="../home/assets/vendor/waypoints/jquery.waypoints.min.js"></script>

  <script src="../home/assets/vendor/animateNumber/jquery.animateNumber.min.js"></script>

  <script src="../home/assets/js/google-maps.js"></script>

  <script src="../home/assets/js/theme.js"></script>


</body>
</html>