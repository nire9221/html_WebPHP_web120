<?php

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//prevents data from being sent early
ob_start();

// this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));



switch(THIS_PAGE){

    case 'index.php':
        $title = "Welcome to Big Page!";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;

    case 'research1.php':
        $title = "Mobile Responsive";
        $PageID = 'Mobile Responsive';
    break;

    case 'research2.php':
        $title = "Gallery";
        $PageID = 'Gallery';
    break;

    case 'research3.php':
        $title = "Flexbox";
        $PageID = 'Flexbox';
    break;
    
    case 'research4.php':
        $title = "Shopping Cart";
        $PageID = 'Shopping Cart';
    break;

    case 'map.php':
        $title = "Map";
        $PageID = 'Map';
    break;

    case 'calendar.php':
        $title = "Calendar";
        $PageID = 'Calendar';
    break;
    
    case 'youtube.php':
        $title = "Youtube";
        $PageID = 'Youtbube';
    break;

    case 'webcam.php':
        $title = "Webcam";
        $logo = 'fa fa-play-circle';
        $PageID = 'Webcam';
    break;

    case 'contact.php':
        $title = "Contact Jinyoung";
        $logo = "fa fa-envelope";
        $PageID = 'Contact Jinyoung';
    break;

    default:
        $title = THIS_PAGE;
        $logo = '';//no icon by default 
        $PageID = 'Welcome';
   }


//place URL & labels in the array here for navigation:
    $nav1['index.php'] = "Welcome";
    $nav1['research.php'] = "researcj";
    $nav1['gooogle.php'] = "google";
    $nav1['webcam.php'] = "Webcam";
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
