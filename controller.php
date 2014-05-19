<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php 
//Connects to your Database 
$con = mysqli_connect("127.0.0.1", "beta", "beta_2014", "beta");
if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//Checks if there is a login cookie
$loggedin = (isset($_COOKIE['ID_my_site'])); 
$redirection =  $_GET['action'];

switch($redirection) {
	case "addcontent":
		if ($loggedin == True) {
			require_once 'add-content.php';
		} else {
			require_once 'login.php';
		} break;
	case "login": 
		if ($loggedin == True) {
			echo '<script type="text/javascript">alert("You are already logged in");location="index.php";</script>';
		} else {
			require_once 'login.php';
		} break;
	case "register":
		if ($loggedin == True) {
			echo '<script type="text/javascript">alert("You are already logged in");location="index.php";</script>';
		} else {
			require_once 'register.php';
		} break;
	case "logout":
		if ($loggedin == True) {
			require_once 'logout.php';
		} else {
			echo '<script type="text/javascript">alert("You are not logged in");location="index.php";</script>';
		} break;
	} 
?>
</body>
</html>
