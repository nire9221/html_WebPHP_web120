<?php include 'includes/header.php';?>

<!-- hero -->
<header class="hero">
<div class="banner">
<h1 class="banner-title">Ecole de flower collection</h1>
<button class="banner-btn">shop now</button>
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
<img src="./images/1.jpg" alt="flower" class="product-img"/>
<button class="bag-btn" data-id="1">
<i class="fas fa-shopping-cart"></i>add to bag</button>
</div>

<h3>flower1</h3>
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
</div>
<div class="cart-footer">
  <h3>your total : $<span class="cart-total">0</span></h3>
  <button class="clear-cart banner-btn">clear cart</button>
  </div>
  </div>
</div>
<!-- end of cart -->



<?php include 'includes/footer.php';?>
