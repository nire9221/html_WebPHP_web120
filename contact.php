
<?php include 'includes/header.php';?>

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->

<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "ecoledeflowerbiz@gmail.com";  //place your/your client's email address here
        $toName = "ecole de flower"; //place your client's name here
        $website = "contact form";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>


</section>
<!-- END LEFT COL -->

 
<?php include 'includes/footer.php';?>


