<?php include 'includes/header.php';?>
<h2 class="pageID"><?=$PageID?></h2>
<div class ="contactPage">

<?php

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "erintheworld@gmail.com";  //place your/your client's email address here
        $toName = "erintheworld"; //place your client's name here
        $website = "contact form";  //place NAME of your client's website

        echo loadContact('simple.php');
?>
</div>

<div class ="map">
<h3>Ecole de flower</h3>        
<address><i class="fa fa-map-marker"></i> Seoul, Korea </address>
<a href="tel:8227320214">+82-2-732-0214</a>
</div>

<div class='embed-container'><iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3162.2893428109637!2d126.97248581524661!3d37.57180383158431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca398154697af%3A0x5a8a829c438fcff3!2z6rSR7ZmU66y46r2D7KeRIOyEuOyiheusuO2ZlO2ajOq0gOq9g-ynkSDsl5DqvLTrk5ztlIzrnbzsm4w!5e0!3m2!1sen!2sus!4v1584235320422!5m2!1sen!2sus' width='300' height='450' frameborder='0' style='border:0;' allowfullscreen='' aria-hidden='false' tabindex='0'></iframe></div>

<?php include 'includes/footer.php';