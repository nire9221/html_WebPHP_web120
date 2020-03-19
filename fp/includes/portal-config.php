<?php

ob_start();
date_default_timezone_set('America/Los_Angeles');

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));



switch(THIS_PAGE){

    case 'index.php':
        $title = "Welcome to Ecole de flower";
        $logo = '';
    break;

    case 'about.php':
        $title = "About";
        $PageID = 'About Us';
    break;

    case 'gallery.php':
        $title = "Gallery";
        $PageID = 'Gallery';
    break;
    
    case 'contact.php':
        $title = "Contact Us";
        $PageID = 'Contact Us';
    break;

    default:
        $title = THIS_PAGE;
        $logo = '';//no icon by default 
        $PageID = 'Ecole de flower';
   }


