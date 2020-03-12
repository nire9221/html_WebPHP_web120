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
<?php include 'includes/footer.php';