<!DOCTYPE html>
<html>


<head>
<title> History of CIS </title>
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body id="login">
<nav> <!-- START nav here -->
	<div id="nav-heading">
		University of Melbourne
	</div>
	<div id="nav-login">
		<a href="index.php"> home </a> 
		<a href="register.php"> sign up </a>
		
	</div>
	
	<a href="mod.php"><div id="moderator" > <p>m</p> </div></a>
	<a href="add-content.php"><div id="add-content" > <p>a</p> </div></a>
	
</nav> <!-- END nav here -->

<div class="wrapper" >

<section id="login-page"> <!-- start Main sectoin -->


<?php 
error_reporting(E_ALL ^ E_NOTICE  ^ E_WARNING); // turns off all the notices showing in browser


//Connects to your Database 
$con = mysqli_connect("127.0.0.1", "beta", "beta_2014", "beta");
if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//Checks if there is a login cookie
if(isset($_COOKIE['ID_my_site']))
//if there is, it logs you in and directes you to the members page
{ 
	$username = $_COOKIE['ID_my_site']; 
 	$pass = $_COOKIE['Key_my_site'];
 	$check = mysqli_query($con, "SELECT * FROM users WHERE username = '$username'")or die(mysqli_error());

 	while($info = mysqli_fetch_array( $check )) 	
 	{
 		if ($pass != $info['password']) 
 		{
 			
 		}
 		else
 		{
 			header("Location: members.php");
 		}
 	}
}


//if the login form is submitted
if (isset($_POST['submit'])) { // if form has been submitted
	//require_once('recaptchalib.php');
	//$privatekey = "your_private_key";
	//$resp = recaptcha_check_answer ($privatekey,
        //                       $_SERVER["REMOTE_ADDR"],
        //                        $_POST["recaptcha_challenge_field"],
        //                        $_POST["recaptcha_response_field"]);

        //if (!$resp->is_valid) {
        // What happens when the CAPTCHA was entered incorrectly
        //die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
        //	"(reCAPTCHA said: " . $resp->error . ")");
        //} 
        //else {
		 // Your code here to handle a successful verification
		 // makes sure they filled it in
		if(!$_POST['username'] | !$_POST['pass']) 
		{
			die('You did not fill in a required field.');
			echo "<a href='index.php'> Click here to return home</a>";
		}
	
		// checks it against the database
		if (!get_magic_quotes_gpc()) 
		{
			$_POST['email'] = addslashes($_POST['email']);
		}
	
		$check = mysqli_query($con, "SELECT * FROM users WHERE username = '".$_POST['username']."'")or die(mysqli_error());
	
		//Gives error if user dosen't exist
		$check2 = mysqli_num_rows($check);
		if ($check2 == 0) {
			die('That user does not exist in our database.<a href=register.php>Click Here to Register</a>');
			echo "<a href='index.php'> Click here to return home</a>";
		}
		
		while($info = mysqli_fetch_array( $check )) 	
		{
			$_POST['pass'] = stripslashes($_POST['pass']);
			$info['password'] = stripslashes($info['password']);
			$_POST['pass'] = md5($_POST['pass']);
		
			//gives error if the password is wrong
			if ($_POST['pass'] != $info['password']) 
			{
				die('Incorrect password, please try again.');
				echo "<a href='index.php'> Click here to return home</a>";
			}
			else 
			{
				// if login is ok then we add a cookie
				$_POST['username'] = stripslashes($_POST['username']); 
				$hour = time() + 3600; 
				setcookie(ID_my_site, $_POST['username'], $hour); 
				setcookie(Key_my_site, $_POST['pass'], $hour);	 
				 
				//then redirect them to the members area
				header("Location: members.php"); 	
			} 
		} 
  	//}
	
} 

else 

{	 



// if they are not logged in
?>

<div id="login-box" class="centerall" >
 <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post"> 

 <table border="0"> 

 <tr><td colspan=2><h1>Login</h1></td></tr> 

 <tr><td>Username:</td><td> 

 <input type="text" name="username" maxlength="40"> 

 </td></tr> 

 <tr><td>Password:</td><td> 

 <input type="password" name="pass" maxlength="50"> 

 </td></tr> 

 <tr><td colspan="2" align="right"> 

 </td></tr> 
 
<?php
	//require_once('recaptchalib.php');
	//$publickey = "your_public_key"; // you got this from the signup page
	//echo recaptcha_get_html($publickey);
?>
 </table> 
	<input id="submit-button" type="submit" name="submit" value="Login"> 
 </form> 
	
 
</div>


<?php 

} 
?>
	
	
</section> <!-- end MAIN section -->


</div> <!-- wrapper -->

<!-- all the javascript references -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/functions.js"></script>


</body>

</html>
