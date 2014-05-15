<!DOCTYPE html>

<html>
<title> History of CIS </title>

<head>
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
<nav> <!-- START nav here -->
	<div id="nav-heading">
		University of Melbourne
	</div>
	<div id="nav-login">
		<a href="index.php"> home</a>
		<a href="register.php"> sign up </a>
		<a href="login.php"> log in</a>
	</div>
	
	<a href="mod.php"><div id="moderator" > <p>m</p> </div></a>
	<a href="add-content.php"><div id="add-content" > <p>a</p> </div></a>
	
</nav> <!-- END nav here -->

<div class="wrapper" >


<section id="main"> <!-- start Main sectoin -->

<?php 

$past = time() - 100; 

//this makes the time in the past to destroy the cookie 

setcookie(ID_my_site, gone, $past); 
setcookie(Key_my_site, gone, $past); 
echo "You have successfully logged out!";
echo "<a href='index.php'> Click here to return home</a>";

?> 
