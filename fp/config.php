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
        $title = "Welcome to erintheworld";
        $logo = 'fa-home fa-2x';
    break;

    case 'about.php':
        $title = "About";
        $logo = 'fa-user fa-2x';
        $PageID = 'About Me';
    break;

    case 'project.php':
        $title = "Project";
        $logo = "fa-eye fa-2x";
        $PageID = 'Project';
    break;

    case 'photo.php':
        $title = "Gallery";
        $logo = 'fa-instagram fa-2x';
        $PageID = 'Gallery';
    break;
    
    case 'contact.php':
        $title = "Contact JY";
        $logo = "fa-envelope fa-2x";
        $PageID = 'Contact JY';
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
