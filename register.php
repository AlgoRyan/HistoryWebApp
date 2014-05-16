<!DOCTYPE html>
<html>
<title> History of CIS </title>

<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/unimelb.css">
<link rel="stylesheet" type="text/css" href="css/footer-style.css">

</head>
<body class="grad">
<nav> <!-- START nav here -->
	<div id="nav-heading">
		University of Melbourne
	</div>
	
	<a href="mod.php"><div id="moderator" > <p>m</p> </div></a>
	<a href="add-content.php"><div id="add-content" > <p>a</p> </div></a>
	
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
					echo '<li><a href="logout.php"> logout </a></li>';		
				}
				else{
					echo '<li><a href="login.php"> log in</a></li>';
					echo '<li><a href="register.php"> sign up </a></li>';
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

<section id="login-page"> <!-- start Main sectoin -->

<?php 
//Connects to your Database 
$con = mysqli_connect("127.0.0.1", "beta", "beta_2014", "beta"); 
if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//This code runs if the form has been submitted
if (isset($_POST['submit']))
{ 	
	
	//inserting the user picture
	$allowedExts = array("gif", "jpeg", "jpg", "png", "JPG");
	$temp = explode(".", $_FILES["file"]["name"]);
	$extension = end($temp);
	
	// this makes sure the image is in the approved extensions
	if (
		(($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg")
			|| ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/pjpeg")
			|| ($_FILES["file"]["type"] == "image/x-png") || ($_FILES["file"]["type"] == "image/png")
			|| ($_FILES["file"]["type"] == "image/JPG")) && ($_FILES["file"]["size"] < 10000000)
			&& in_array($extension, $allowedExts)
			) {
			if ($_FILES["file"]["error"] > 0) {
				echo "There was an error in the upload - Return Code: " . $_FILES["file"]["error"] . "<br>";
			}
			else {
				
				//adding the image to the database
				$image = addslashes(file_get_contents($_FILES['file']['tmp_name'])); // to stop SQL injections
				$image_name = addslashes($_FILES['image']['name']);
				//$insert = "INSERT INTO users (img) VALUES ('{$image}')";
				
				/*
				if (!mysqli_query($con, $insert)) { // Error handling
				//echo "<br><br><h2><i>Something went wrong!</i> :(<h2>";
				}*/
				
			}
			
	}
			
	// // // // // END adding image // // // // //
	
	// this makes sure the image is valid and it is actually there
	if($_FILES['file']['name']=='') {
		die("did not work image");
		echo "FAILED";
	}
	
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
 	$insert = "INSERT INTO users (username, password, img)
 			VALUES ('".$_POST['username']."', '".$_POST['pass']."','{$image}')";
 	$add_member = mysqli_query($con, $insert);
 	?>

 	<h1>Registered</h1>
 	<p>Thank you, you have registered - you may now <a href="login.php">login</a>.</p>
 	<?php 
} 

else 
 
{	
?>
<div class='container'>
<div id="login-box">
	
	<div>
		<h1>Please choose a new Username and Password</h1>
	</div>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
	
	<table align="middle" border="0">
	
	<tr>
		<td>Username:</td>
		<td><input type="text" name="username" maxlength="60"></td>
	</tr>
	
	<tr>
		<td>Password:</td>
		<td><input type="password" name="pass" maxlength="10"></td>
	</tr>
	
	<tr>
		<td>Confirm Password:</td>
		<td><input type="password" name="pass2" maxlength="10"></td>
	</tr>
	
	<tr>
		<td><input type='file' name='file' id='file'><br></td>
	</tr>

	</table>
	
	
	
	<input id="submit-button" type="submit" name="submit" value="Register">
	
	</form>
</div>
</div>
<?php

}
?>

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

</body>
</html>
