<!DOCTYPE html>
<!-- created on 28/4/14 by Cornelis -->
<html>
<title> History of CIS </title>

<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/unimelb.css">
<link rel="stylesheet" type="text/css" href="css/footer-style.css">

<script src="js/dropzone.js"></script>

</head>
<body class='grad'>
<nav> <!-- START nav here -->
	<div id="nav-heading">
		University of Melbourne
	</div>
	<div class='user'> <!-- START user image if logged in -->
		<?php  if(isset($_COOKIE['ID_my_site'])){
			//this code shows the user's image
			$con = mysqli_connect("127.0.0.1", "beta", "beta_2014", "beta"); 
			if (mysqli_connect_errno()) {
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			$id = $_COOKIE['ID_my_site'];
			$sql = "SELECT * FROM users WHERE username = '{$id}'";
			$sth = $con->query($sql);
			$result=mysqli_fetch_array($sth);
			echo '<img class="user-image" src="data:image/jpeg;base64,'.base64_encode( $result['img'] ).'"/>';
			echo '<h6>logged in as '. $_COOKIE['ID_my_site'] .'</h6>';
			}
			else{
				//echo '<h1 color=red>photo goes here<h1>';
			}
		?>
	</div> <!-- END user image if logged in -->

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

<section id="add-homesection"> <!-- homesection start -->
	
	<div id="homebg" class='align-center' >
	<div id="welcome-title"> <!-- welcome start -->
		<p id="title">add content</p>
	</div> <!-- welcome end -->
	</div> <!-- homebg end -->

</section> <!-- homesection end -->


<section id="add-main"> <!-- start Main sectoin -->
	
	<div id="slide1" class="align-center grad"> <!-- start slide1 -->
	
		<div id="img-content"> <!-- START img-content -->
		
		<?php
		displayForm();
		?>
		
		</div> <!-- END img-content -->
	
		<div id="slide-content"> <!-- START slide-content -->
			
			<!-- empty -->
			
		</div> <!-- END slide-content -->
		
	</div> <!-- END slide1 -->	
	
</section> <!-- end MAIN section -->


</div> <!-- wrapper -->

<!-- all the js scripts used -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/add-functions.js"></script>


<?php

function displayForm() {
    echo '<div class="container">
    <div id="login-heading">
        <h1>Enter the details of the content you would like to add</h1>
    </div>
    
    <div id="register-form"
     class="login-box">';
    echo ' <form action="add-content.php" ';
    echo 'method="post" enctype="multipart/form-data">
            <table align="center" border="0">
            <tr>
                <td>Category</td>
                <td><input type="text" name="category" maxlength="60"></td>
            </tr>
            <tr>
                <td>Title</td>
                <td><input type="text" name="title" maxlength="60"></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><input type="text" name="description" width="500px"></td>
            </tr>
            <tr>
                <td>Choose User Image :  </td>
                <td><input type="file" name="file" id="file"><br></td>
            </tr>
            
            <tr>
                <td colspan="1"></td>
                <td><input id="submit-button" type="submit" name="submit" value="add content"></td>
            </tr>    
            </table>
                
        </form>
    
    </div>
</div>';
}

function displayFooter() {
echo '
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
 
 <!-- unimelb footer END -->';
}

displayFooter();

$con = mysqli_connect("127.0.0.1", "beta", "beta_2014", "beta");
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else {
	echo "Worked fine connecting<br>";
}

$username = $_COOKIE['ID_my_site'];

if (!$username) {
	
} else {
	
	$sql = "SELECT id FROM users WHERE username = '{$id}'";
	$sth = $con->query($sql);
	$result2=mysqli_fetch_array($sth2);
	echo "<h2> id = " . $result2[0] . "</h2>";
	
	$id = mysqli_query($con, "SELECT id FROM users WHERE username = '$username'")or die(mysqli_error());
	echo "the id is: " . $id;
	
	$array = array(addslashes($_POST['category']),addslashes($_POST['title']),addslashes($_POST['description']),addslashes($_POST[__DIR__]));
	
	insertSQL($con, $id, $array);
	
	//error_reporting(E_ALL ^ E_NOTICE); // turns off all the notices showing in browser
	$allowedExts = array("gif", "jpeg", "jpg", "png", "JPG");
	$temp = explode(".", $_FILES["file"]["name"]);
	$extension = end($temp);
	
	if (
		(($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg")
			|| ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/pjpeg")
			|| ($_FILES["file"]["type"] == "image/x-png") || ($_FILES["file"]["type"] == "image/png")
			|| ($_FILES["file"]["type"] == "image/JPG")) && ($_FILES["file"]["size"] < 1000000)
			&& in_array($extension, $allowedExts)
			) {
			if ($_FILES["file"]["error"] > 0) {
				echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
			}
			else {
				echo "Upload: " . $_FILES["file"]["name"] . "<br>";
				echo "Type: " . $_FILES["file"]["type"] . "<br>";
				echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
				echo "Temp file: " . $_FILES["file"]["tmp_name"] . C;
				
				if (file_exists("upload/" . $_FILES["file"]["name"])) {
					echo $_FILES["file"]["name"] . " already exists. ";
				} 
				else {
					echo "<br>trying to add now";
					//$image = addslashes(file_get_contents($_FILES['file']['name']));
					$image = addslashes(file_get_contents($_FILES['file']['tmp_name']));
					$image_name = addslashes($_FILES['image']['name']);
					
					if (!mysqli_query($con, $insert)) { // Error handling
						echo "<br><br><h2><i>Something went wrong!</i> :(<h2>"; 
					}
					//move_uploaded_file($_FILES["file"]["tmp_name"], //__DIR__ . $_FILES["file"]["name"]);
					//	 __DIR__ . "uploads/". $_FILES["file"]["name"]);
					//"//info30005.cis.unimelb.edu.au/cbosua/www/test.jpg");
					//"http:\\info30005.cis.unimelb.edu.au\cbosua\home\www\HistoryWebApp\ZWWWWWOOOOOOOOOW.jpg");
					//echo "<br>Stored in: " . __DIR__ . "/uploads/" . $_FILES["file"]["name"];
					//echo "<br><br> Server Name: " . $_SERVER['DOCUMENT_ROOT'];
				}
			}
	}	
	else {
		echo "Invalid file";
		echo "\n file type is - " . $_FILES["file"]["size"];
	}
	
	function insertSQL($con, $user, $ar) {
		echo "<br>into the funciton<br>";
		
		//$insert = "INSERT INTO UserContent (UserID, Category, Title, Date, Description, contentDirectory) 
		//	VALUES (".$user.",".$ar[0].",".$ar[1].",".date('l jS \of F Y h:i:s A').",".$ar[2].",".$ar[3].")";
		$insert = "INSERT INTO UserContent (UserID, Category, Title, Date, Description, contentDirectory) 
			VALUES ($user,'t','t','t','t','t')";
				
			if (!mysqli_query($con, $insert)) { // Error handling
				echo "<br><br><h2><i>Something went wrong!</i> :(<h2>"; 
			} else {
				echo "just inserted<br>";
			}
			
		
	}
}

?>


</body>

</html>
