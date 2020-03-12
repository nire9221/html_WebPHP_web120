
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Ecole de flower </title>
    <link href="https://fonts.googleapis.com/css?family=Neucha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="./css/style.css" />
  </head>
<body id="myPage">
<!-- navbar -->
<nav class="navbar" id="main">
  <div class="navbar-center">
    <span class="nav-icon" style="cursor:pointer" onclick="openNav()"> <i class="fas fa-bars"></i>
    </span>
    <a href="index.php"><img src="./images/logo.png" style="height:60px" alt="store logo" /></a>
  <div class="cart-btn">
    <span class="nav-icon"><i class="fas fa-cart-plus"></i>
    </span>
    <div class="cart-items">0</div>
  </div>
</div>
</nav>

<div id="sidebar" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.php">HOME</a>
  <a href="about.php">ABOUT</a>
  <a href="shop.php">SHOP</a>
  <a href="contact.php">CONTACT</a>
</div>

<!-- end of navbar -->

<!-- hero -->
<header class="hero" >
  <div class="banner">
    <h1 class="banner-title">Ecole de flower collection</h1>
      <button class="banner-btn"><a href="shop.php">shop now</a></button>
  </div>      
</header>
<!-- end of hero -->

<!-- products -->
<section class="products">
  <div class="section-title">
    <h2>our products</h2>
  </div>
<div class="products-center">
<!-- single product -->
<article class="product">
  <div class="img-container">
    <img src="./images/bg3.jpeg" alt="product" class="product-img"/>
    <button class="bag-btn" data-id="1">
      <i class="fas fa-shopping-cart"></i>add to bag</button>
  </div>

  <h3>flower</h3>
  <h4>$16</h4>
  </article>
<!-- end of single product -->
  </div>
</section>
<!-- end of products -->


<!-- cart -->
<div class="cart-overlay">
  <div class="cart">
  <span class="close-cart"><i class="far fa-window-close"></i></span>
    <h2>your cart</h2>
    <div class="cart-content">
<!-- cart item -->
<!-- <div class="cart-item">
<img src="./images/product-1.jpeg" alt="product" />
<div>
<h4>flower</h4>
<h5>$15.00</h5>
<span class="remove-item">remove</span>
</div>
<div>
<i class="fas fa-chevron-up"></i>
<p class="item-amount">1</p>
<i class="fas fa-chevron-down"></i>
</div>
</div> -->

<!-- cart item -->
  </div>
<div class="cart-footer">
  <h3>your total : $<span class="cart-total">0</span></h3>
  <button class="clear-cart banner-btn">clear cart</button>
  </div>
  </div>
</div>
<!-- end of cart -->

<footer>
  <a href="https://www.facebook.com/nire9221"   target="_blank"><i class="fa fa-facebook-official"></i></a>
  <a href="https://instagram.com/ecoledeflower?igshid=1to9832qkcd6d" target="_blank"><i class="fa fa-instagram"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <medium>Copyright © 2020 <a href="https://www.erintheworld.com" target="_blank" class="copyright">Ecole de flower</a></medium>

<div style="position:relative;bottom:100px;z-index:1;" class="gototop">
    <span>Go To Top</span>   
    <a href="#myPage"><span>
    <i class="fa fa-chevron-circle-up" style="color:black; margin-left:5px;"></i></span></a>
</div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/contentful@latest/dist/contentful.browser.min.js"></script>
<script src="js/app.js"></script>
<script src="js/products.json"></script>

  </body>
</html>