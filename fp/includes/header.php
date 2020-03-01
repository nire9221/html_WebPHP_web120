
<?php include 'portal-config.php'?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?=$title?></title>
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
              <h4>queen bed</h4>
              <h5>$9.00</h5>
              <span class="remove-item">remove</span>
            </div>
            <div>
              <i class="fas fa-chevron-up"></i>
              <p class="item-amount">
                1
              </p>
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