
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
    <script src="https://cdn.jsdelivr.net/npm/contentful@latest/dist/contentful.browser.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/products.json"></script>

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



