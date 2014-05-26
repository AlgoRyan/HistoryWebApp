<!DOCTYPE html>
<!-- created on 28/4/14 by Cornelis -->
<html>
<title> History of CIS </title>

<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/unimelb.css">
<link rel="stylesheet" type="text/css" href="css/footer-style.css">
<?php checkLogged(); ?>
</head>
<body>
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
			$sql = "SELECT img FROM users WHERE username = '{$id}'";
			$sth = $con->query($sql);
			$result=mysqli_fetch_array($sth);
			echo '<img class="user-image" src="data:image/jpeg;base64,'.base64_encode( $result['img'] ).'"/>';
			echo '<h6>logged in as '. $_COOKIE['ID_my_site'] .'</h6>';
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

<div class="wrapper" >

<section id="mod-homesection"> <!-- homesection start -->
	
	<div id="homebg" class='align-center' >
	<div id="welcome-title"> <!-- welcome start -->
		<p id="title">moderator</p>
	</div> <!-- welcome end -->
	</div> <!-- homebg end -->

</section> <!-- homesection end -->


<section id="main"> <!-- start Main sectoin -->
	
	<div id="slide1" class="align-center"> <!-- start slide1 -->
	
		<div id="img-content"> <!-- START img-content -->
		
		<div id="search-box"><!-- START search-box -->
			<div>
				<span>Filter Items</span>
				<input id="filter-img" class='search-bar' onkeyup="search()" type="search"/> <!--search bar-->
			</div>
			<br>
			<p><i id="result" opacity="50%"></i></p>
		</div> <!-- END Search-box -->
		</div> <!-- END img-content -->
	
                <?php
				    displayAllContent();
				?>
			
		
			
			<div class="mod-buttons"> <!-- START mod-buttons -->
				
				<div id="mod-accept" onClick="function()">a</div> 
				<div id="mod-reject" onClick="function()">x</div>
			
			</div>  <!-- END mod-buttons -->
			
		
	</div> <!-- END slide1 -->	
	
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

<!-- all the js scripts used -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/mod-functions.js"></script>

<?php

function checkLogged() {
    $con = mysqli_connect("127.0.0.1", "beta", "beta_2014", "beta");
    
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $username = $_COOKIE['ID_my_site'];

    if (!$username) {
        header("location:controller.php?action=login");
    }
}

function displayLatestContent() {
	$con = mysqli_connect("127.0.0.1", "beta", "beta_2014", "beta");
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$sql = "SELECT * FROM UserContent WHERE ID = (SELECT MAX(ID) FROM UserContent);";
	$sth = $con->query($sql);
	$result = mysqli_fetch_array($sth);
	
	$userid = $result['UserID'];
	$category = $result['Category'];
	$date = $result['Date'];
	$title = $result['Title'];
	$year = $result['year'];
	$description = $result['Description'];
	
	$sql = "SELECT * FROM users WHERE ID = '{$userid}'";
	$sth = $con->query($sql);
	$result2 = mysqli_fetch_array($sth);
	$username = $result2['username'];
	$img = $result2['img'];
	
	echo '<div class="container"><div id="content1-1" class="txt-box">
    
    <img class="user-image" src="data:image/jpeg;base64,'.base64_encode( $img ).'"/>
	<div class="user-info">'.$username.'</div> 
	<div class="date">Added on <i>'.$date.' </i> </div>
	
	<h2>'. $title  . ' - ' .  $year . '  </h2>
	<p>'.$description.'</p>
	</div></div>';
}

function displayContent($con, $no) {
	//getting the array with the details
	$sql = "SELECT * FROM UserContent WHERE ID = $no;";
	$sth = $con->query($sql);
	$result = mysqli_fetch_array($sth);
	
	// storing them as variables
	$userid = $result['UserID'];
	$category = $result['Category'];
	$date = $result['Date'];
	$title = $result['Title'];
	$year = $result['year'];
	$description = $result['Description'];
	
	//getting the details from users table (username and image)
	$sql = "SELECT * FROM users WHERE ID = '{$userid}'";
	$sth = $con->query($sql);
	$result2 = mysqli_fetch_array($sth);
	$username = $result2['username'];
	$img = $result2['img'];
	
	echo '<div class="container"><div id="content1-1" class="txt-box">
    
    <img class="user-image" src="data:image/jpeg;base64,'.base64_encode( $img ).'"/>
	<div class="user-info">'.$username.'</div> 
	<div class="date">Added on <i>'.$date.' </i> </div>
	
	<h2>'. $title  . ' - ' .  $year . '  </h2>
	<p>'.$description.'</p>
	</div></div>';
}

function displayAllContent() {
	$con = mysqli_connect("127.0.0.1", "beta", "beta_2014", "beta");
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$sql = "SELECT MAX(ID) from UserContent;";
	$sth = $con->query($sql);
	$result = mysqli_fetch_array($sth);
	$max = $result[0];
	
    for ($i = 0 ; $i < $max ; $i++ ) {
        displayContent($con, $i);
    }
	
}

?>

</body>

</html>
