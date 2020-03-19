<?php include 'includes/header.php';?>

<h2 class="pageID"><?=$PageID?></h2>

<div class ="gallery">
<img src="images/logo2.png">
<h2>click to view our work!</h2><br>
<h4>For more information, Follow us on Instagram <a href="https://www.instagram.com/ecoledeflower/?igshid=1to9832qkcd6d" target="_blank"> @ecoledeflower</a></h4>
</div>

<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="images/1.jpg"  style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="images/2.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="images/3.jpg"  style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="images/4.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="images/5.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="images/6.jpg" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="images/1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Hydrangea Flower basket">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Golden dry rose">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Iris Tulips">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Golden Tulip Bouquet">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Fresh flower bouquet">
    </div>    
    <div class="column">
      <img class="demo cursor" src="images/6.jpg" style="width:100%" onclick="currentSlide(6)" alt="Flower gift box">
    </div>
  </div>
</div>



<?php include 'includes/footer.php';?>
