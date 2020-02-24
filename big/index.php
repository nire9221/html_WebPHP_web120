<?php include "includes/header.php"?>

<!-- Image Header -->
<div class="mainpage">
  <img src="images/background3.jpeg" alt="Pineapple Head" style="width:100%;min-height:350px;max-height:600px;">
 

<!-- bottom box -->
<button onclick="document.getElementById('id01').style.display='block'" title="Big Project" class="popBtn">Click Me!</button>
</div>

<div id="id01" class="modal">
      <span onclick="document.getElementById('id01').style.display='none'"><i class="fa fa-remove"></i></span>
      <h3>Welcome to my big website <i class="fa fa-smile-o"></i></h3>
      <p>If you need more information...</p>
      <p>Go to my <a href="http://www.erintheworld.com/web120/index.php" target=”_blank”> web120 portal</a> to learn more!</p>
</div>

</div>
  <?php include "includes/footer.php"?>