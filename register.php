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
		<a href="login.php"> log in</a>
	</div>
	
	<a href="mod.php"><div id="moderator" > <p>m</p> </div></a>
	<a href="add-content.php"><div id="add-content" > <p>a</p> </div></a>
	
</nav> <!-- END nav here -->

<div class="wrapper" >


<section id="main"> <!-- start Main sectoin -->

<?php 
//Connects to your Database 
$con = mysqli_connect("127.0.0.1", "beta", "beta_2014", "beta"); 
if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//This code runs if the form has been submitted
if (isset($_POST['submit']))
{ 
	
	//This makes sure they did not leave any fields blank
	if (!$_POST['username'] | !$_POST['pass'] | !$_POST['pass2'] ) 
	{
		die('You did not complete all of the required fields');
		echo "<a href='index.php'> Click here to return home</a>";
 	}

 	// checks if the username is in use
 	if (!get_magic_quotes_gpc()) 
 	{
 		$_POST['username'] = addslashes($_POST['username']);
 	}

	$usercheck = $_POST['username'];
	$check = mysqli_query($con, "SELECT username FROM users WHERE username = '$usercheck'") 
	or die(mysqli_error());
	$check2 = mysqli_num_rows($check);
	
	//if the name exists it gives an error
 	if ($check2 != 0) 
 	{
 		die('Sorry, the username '.$_POST['username'].' is already in use.');
 		echo "<a href='index.php'> Click here to return home</a>";
	}

	// this makes sure both passwords entered match
 	if ($_POST['pass'] != $_POST['pass2']) {
 		die('Your passwords did not match. ');
 		echo "<a href='index.php'> Click here to return home</a>";
 	}

 	// here we encrypt the password and add slashes if needed
 	$_POST['pass'] = md5($_POST['pass']);
 	
 	if (!get_magic_quotes_gpc()) 
 	{
 		$_POST['pass'] = addslashes($_POST['pass']);
 		$_POST['username'] = addslashes($_POST['username']);
 	}



 	// now we insert it into the database
 	$insert = "INSERT INTO users (username, password)
 			VALUES ('".$_POST['username']."', '".$_POST['pass']."')";
 	$add_member = mysqli_query($con, $insert);
 	?>

 	<h1>Registered</h1>
 	<p>Thank you, you have registered - you may now <a href="login.php">login</a>.</p>
 	<?php 
} 

else 
 
{	
?>

 
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<table border="0">

<tr><td>Username:</td><td>

<input type="text" name="username" maxlength="60">

</td></tr>

<tr><td>Password:</td><td>

<input type="password" name="pass" maxlength="10">

</td></tr>

<tr><td>Confirm Password:</td><td>

<input type="password" name="pass2" maxlength="10">

</td></tr>

<tr><th colspan=2><input type="submit" name="submit" 
value="Register"></th></tr> </table>

</form>


<?php

}
?>

</body>
</html>
