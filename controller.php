//This file is not working yet, just a template if someone wants to work on it

<?php
//Connects to your Database 
$con = mysqli_connect("127.0.0.1", "beta", "beta_2014", "beta");
if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//Checks if there is a login cookie
$loggedin = (isset($_COOKIE['ID_my_site']));
$redirection = $GET['action'];

switch($redirection) {
	case "addcontent":
		if ($loggedin == True) {
			include 'addcontent.php';
		} else {
			include 'register.php';
		} break;
	case "login": 
		if ($loggedin == True) {
			echo "already logged in!";
		} else {
			include 'login.php';
		} break;
	case "register":
		if ($loggedin == True) {
			echo "already logged in!";
		} else {
			include 'register.php';
		} break;
	case "logout":
		if ($loggedin == True) {
			include 'logout.php';
		} else {
			echo 'You are not logged in';
		} break;
	}
?>
