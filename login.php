<!DOCTYPE html>
<html>


<head>
<title> History of CIS </title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/unimelb.css">
<link rel="stylesheet" type="text/css" href="css/footer-style.css">

</head>
<body id="login">
<nav> <!-- START nav here -->
	<div id="nav-heading">
		University of Melbourne
	</div>
	
	<a href="mod.php"><div id="moderator" > <p>m</p> </div></a>
	<a href="controller.php?action=add-content"><div id="add-content" > <p>a</p> </div></a>
	
<!-- melb uni header START -->
<div id="g-header" role="banner"> <!-- banner div START -->

       <div class="wrapper"> <!-- wrapper class div start -->
            <ol id="g-breadcrumb-menu">
             <li id="g-breadcrumb-home"><a href="//www.unimelb.edu.au/">University Home</a></li>
            </ol>

        <div id="g-global-search"> <!-- Global Search div START -->
        	<a href="http://search.unimelb.edu.au/" id="g-search-button" role="button" aria-haspopup="true">Search</a>
			<ul id="g-audience-links">
    
			    <?php if(isset($_COOKIE['ID_my_site'])){
					echo "Welcome " . $_COOKIE['ID_my_site']."!";
					echo '<li><a href="controller.php?action=logout"> logout </a></li>';		
				}
				else{
					echo '<li><a href="controller.php?action=login"> log in</a></li>';
					echo '<li><a href="controller.php?action=register"> sign up </a></li>';
				}
				?>
			</ul>
	
           <div id="g-global-search-overlay">
             <form method="get" action="http://search.unimelb.edu.au/" name="g-searchform" id="g-searchform" role="search">
               <label for="q"><span>Search the university</span></label>
               <input accesskey="s" type="search" name="q" id="q" value="" title="Search the University">
               <input type="submit" name="sa" id="g-global-search-submit" value="Search">
             </form>
           </div>
         
         </div> <!-- Global Search div START -->
         
         <hr>
         <ol id="g-global-menu" role="navigation" aria-labelledby="g-global-menu-label">
           <a id="g-global-menu-logo" href="http://www.unimelb.edu.au">The University of Melbourne</a>
           <li id="g-global-menu-label">Browse the History of CIS Site</li>
           <li><a href="index.php" id="header-index">Home</a></li>
           <li><a href="about.php" id="header-about">About Us</a></li>
           <li><a href="journey.php" id="header-journey">Journey</a></li>
           <li><a href="media-index.php" id="header-media">Media Gallery</a></li>
         </ol>
         <hr class="g-clear-floats">
         
       </div> <!-- wrapper class div end -->
</div> <!-- banner div END -->

<!-- melb uni header END -->

	
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
if($loggedin)
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
			$msg = 'You did not fill in a required field.';
			echo "<script type='text/javascript'>alert('$msg');location='controller.php?action=login';</script>";
			die();
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
		$msg = 'That user does not exist in our database';
 		echo "<script type='text/javascript'>alert('$msg');location='controller.php?action=login';</script>";
	}
		// checks it against the database
		if (!get_magic_quotes_gpc()) 
		{
			$_POST['email'] = addslashes($_POST['email']);
		}
	
		$check = mysqli_query($con, "SELECT * FROM users WHERE username = '".$_POST['username']."'")or die(mysqli_error());
	
	
		while($info = mysqli_fetch_array( $check )) 	
		{
			$_POST['pass'] = stripslashes($_POST['pass']);
			$info['password'] = stripslashes($info['password']);
			$_POST['pass'] = md5($_POST['pass']);
		
			//gives error if the password is wrong
			if ($_POST['pass'] != $info['password']) 
			{
				$msg = 'Incorrect password, please try again.';
				echo "<script type='text/javascript'>alert('$msg');location='controller.php?action=login';</script>";
			}
			else 
			{
				// if login is ok then we add a cookie
				$_POST['username'] = stripslashes($_POST['username']); 
				$hour = time() + 3600; 
				setcookie(ID_my_site, $_POST['username'], $hour); 
				setcookie(Key_my_site, $_POST['pass'], $hour);	 
				 
				// redirect them to the index page. Might be changed for member profile when created or to previous page
				$msg = 'You have successfully logged in!';
				echo "<script type='text/javascript'>alert('$msg');location='index.php';</script>";
			} 
		} 
  	//}
	
} 

else 

{	 



// if they are not logged in
?>
<div id="login-container" class="container">
    <div id="login-heading">
        <h1>Login</h1>
    </div>

    <div id="login-form" class="login-box">
    
         <form action="<?php echo 'controller.php?action=login'?>" method="post"> 
             <table align="center" border="0">
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" maxlength="40"></td>
                </tr> 
             <tr>
                <td>Password:</td>
                <td><input type="password" name="pass" maxlength="50"></td>
             </tr> 
             <?php
                //require_once('recaptchalib.php');
                //$publickey = "your_public_key"; // you got this from the signup page
                //echo recaptcha_get_html($publickey);
             ?>
             
             <tr>
                <td colspan="1"></td>
                <td><br><input id="submit-button" type="submit" name="submit" value="Login"></td>
             </tr>
             </table>
         </form>
    </div>
    
    <div id="register-redirect">
    	<form action="register.php"> <!--For some reason controller.php?action=register does not work. But if this page is displayed it means the user state has been verified already-->
    		<button id="register-redirect-button" type="submit" value="Go to register page">Not registered yet?<button>
    	</form>
    </div>
</div>

<?php 

} 
?>
	
	
</section> <!-- end MAIN section -->


</div> <!-- wrapper -->

<!-- unimelb footer START -->
<div id="footernav" role="contentinfo">       
	<div class="wrapper">         
		<p id="backtotop">
		<a href="#g-breadcrumb-menu">Back to top</a></p>         
		<a href="http://unimelb.edu.au" id="footernav-logo">
		<img src="img/unimelb-logo-lge.png" alt="The University of Melbourne logo"></a>
  		<dl id="footernav-required">           
  			<dt>Phone:</dt>
  			<dd>13 MELB (13 6352) | International: +(61 3) 9035 5511</dd><br>           
  			<dt>The University of Melbourne ABN:</dt>           
  			<dd>84 002 705 224</dd><br>           
  			<dt>CRICOS Provider Code:</dt>           
  			<dd>00116K <a href="http://www.services.unimelb.edu.au/international/visas/index.html">(visa information)</a></dd><br>           
  			<dt><a href="http://brand.unimelb.edu.au/web/docs">Web brand guidelines</a> created by <a href="http://marcom.unimelb.edu.au">Marketing</a></dt>           
  			<dd></dd>         
  		</dl>         
  	<ul id="footernav-social">           
  		<li><a href="http://www.twitter.com/unimelb"><img src="img/icon-twitter.png" alt="Connect with us on Twitter"></a></li>           
  		<li><a href="http://www.facebook.com/melbuni"><img src="img/icon-facebook.png" alt="Connect with us on Facebook"></a></li>           
  		<li><a href="http://au.linkedin.com/pub/the-university-of-melbourne/61/430/215"><img src="img/icon-linkedin.png" alt="Connect with us on Facebook"></a></li>       
  	</ul>        
   	<ul id="footernav-legals">          
    	<li><a href="http://www.unimelb.edu.au/disclaimer/">Disclaimer &amp; copyright</a></li>       
        <li><a href="http://www.unimelb.edu.au/accessibility/index.html">Accessibility</a></li>         
        <li><a href="http://www.unimelb.edu.au/disclaimer/privacy.html">Privacy</a></li>
      </ul>
 	</div>
 </div>
 
 <!-- unimelb footer END -->

<!-- all the javascript references -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/functions.js"></script>


</body>

</html>
