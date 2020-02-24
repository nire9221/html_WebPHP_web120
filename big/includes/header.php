<?php include 'big-config.php'?>
<!DOCTYPE html>
<html>
<title><?=$title?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Lacquer|Tomorrow&display=swap" rel="stylesheet">

<body id="myPage">
<!-- Navbar -->
<nav>
  <ul class="nav" id="myNav">
  <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
  <li><a href="index.php" class="menu"><i class="fa fa-home" style="margin-right:5px;"></i>Home</a></li>
  <li><a href="http://erintheworld.com/web120/index.php"><i class="fa fa-location-arrow" style="margin-right:5px;"></i> Web120</a></li>
  
  <li class="dropdown">
  <a href="javascript:void(0)" class="dropbtn menu" >Research<i class="fa fa-caret-down" style="margin-left:5px;"></i></a>  
      <div class="dropdown-content">
       <a href="research1.php" class = "menu">Mobile Responsive</a>
       <a href="research2.php" class = "menu">Gallery</a>
       <a href="research3.php" class = "menu">Flexbox</a>
       <a href="research4.php" class = "menu"> Shopping Cart</a>
      </div>
  </li>

 <li class="dropdown">
      <a href="javascript:void(0)" class="dropbtn menu" >Google<i class="fa fa-caret-down" style="margin-left:5px;"></i></a>  
      <div class="dropdown-content">
        <a href="map.php" class = "menu">Map</a>
        <a href="calendar.php" class = "menu">Calendar</a>
        <a href="youtube.php" class = "menu">Youtube</a>
      </div>
  </li>

  <li><a href="webcam.php" class = "menu"><i class="fa fa-play-circle" style="margin-right:5px;"></i>Webcam</a></li>
  <li><a href="contact.php" class = "menu"><i class="fa fa-envelope" style="margin-right:5px;"></i>Contact</a></li>
  </ul>
 </nav>

<div class ="wrapper">
<!-- header end -->




