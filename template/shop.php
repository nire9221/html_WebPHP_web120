<?php include 'includes/header.php';?>
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


<?php include 'includes/footer.php';?>
