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

    case 'shop.php':
        $title = "Shop";
        $PageID = 'Shop';
    break;
    
    case 'contact.php':
        $title = "Contact Us";
        $PageID = 'Contact Us';
    break;

    default:
        $title = THIS_PAGE;
        $logo = '';//no icon by default 
        $PageID = 'Welcome';
   }


//place URL & labels in the array here for navigation:
    $nav1['index.php'] = "Welcome";
    $nav1['about.php'] = "About";
    $nav1['project.php'] = "Project";
    $nav1['photo.php'] = "Photo";
    $nav1['contact.php'] = "Contact";
    


/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}



?>
