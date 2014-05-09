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
		<a href="index.html"> home</a>
		<a href="register.php"> sign up </a>
		<a href="logout.php"> logout </a>
	</div>
	
	<a href="mod.html"><div id="moderator" > <p>m</p> </div></a>
	<a href="add-content.html"><div id="add-content" > <p>a</p> </div></a>
	
</nav> <!-- END nav here -->

<div class="wrapper" >

<section id="main"> <!-- start Main sectoin -->

<?php 

//Connects to your Database 
$con = mysqli_connect("127.0.0.1", "beta", "beta_2014", "beta"); 
if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
 
//checks cookies to make sure they are logged in 

if(isset($_COOKIE['ID_my_site'])) 
{ 
	$username = $_COOKIE['ID_my_site']; 
	$pass = $_COOKIE['Key_my_site']; 
	$check = mysqli_query($con, "SELECT * FROM users WHERE username = '$username'")or die(mysql_error()); 
	
	while($info = mysqli_fetch_array( $check )) 	 
	{ 
		//if the cookie has the wrong password, they are taken to the login page 
		if ($pass != $info['password']) 
		{ 			
			header("Location: login.php"); 
		} 
		//otherwise they are shown the admin area	 
		else 
		{ 
			echo "You have successfully logged in!";
			echo "<a href='index.html'> Click here to return home</a>";

		}
 	}

} 

else 
//if the cookie does not exist, they are taken to the login screen 
{			 
header("Location: login.php"); 
} 

?>
