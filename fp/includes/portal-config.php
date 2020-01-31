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
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;


    case 'about.php':
        $title = "About";
        $logo = 'fa-pencil-square-o';
        $PageID = 'about';
    break;

    case 'project.php':
        $title = "Project";
        $logo = "fa-universal-access";
        $PageID = 'AIA';
    break;

    case 'gallery.php':
        $title = "Gallery";
        $logo = 'fa-pencil-square-o';
        $PageID = 'gallery';
    break;
    
    case 'contact.php':
        $title = "Contact Jinyoung";
        $logo = "fa-paper-plane-o";
        $PageID = 'Contact Jinyoung';
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
    $nav1['gallery.php'] = "Gallery";
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
