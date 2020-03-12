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
        $title = "Jinyoung Kang's WEB120 Title Page";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;


    case 'big/index.php':
        $title = "Contact Jinyoung";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Big';
    break;

    case 'aia.php':
        $title = "AIA";
        $logo = "fa-universal-access";
        $PageID = 'AIA';
    break;

    case 'template/template.php':
        $title = "Flow Chart";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Flow Chart';
    break;

    case 'fp/index.php':
        $title = "Final Project";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Final Project';
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
    $nav1['big/index.php'] = "Big";
    $nav1['aia.php'] = "AIA";
    $nav1['template/template.php'] = "Flowchart";
    $nav1['fp/index.php'] = "Final Project";
    $nav1['contact.php'] = "Contact Jinyoung";
    


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
