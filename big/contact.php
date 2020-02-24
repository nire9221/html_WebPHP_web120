<?php include 'includes/header.php';?>

<div class ="content">
<h2 class="pageID"><?=$PageID?></h2>

<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "erintheword@gmail.com";  //place your/your client's email address here
        $toName = "erintheworld"; //place your client's name here
        $website = "contact form";  //place NAME of your client's website

        echo loadContact('multiple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>

</div>    
 
<?php include 'includes/footer.php';?>


