<!DOCTYPE html>

<html>


<head>
<title> History of CIS </title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/unimelb.css">
<link rel="stylesheet" type="text/css" href="css/footer-style.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/slideshow.js"></script>


</head>
<body class="grad">
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
			
			echo '<img class="user-image" src="userimg/'.$id.'.jpg"/>';
			echo '<h6>logged in as '. $id .'</h6>';
			
			/* viewing the image from the db
			$sql = "SELECT img FROM users WHERE username = '{$id}'";
			$sth = $con->query($sql);
			$result=mysqli_fetch_array($sth);
			echo '<img class="user-image" src="data:image/jpeg;base64,'.base64_encode( $result['img'] ).'"/>';
			echo '<h6>logged in as '. $_COOKIE['ID_my_site'] .'</h6>';
			*/
			}
			else{
				//echo '<h1 color=red>photo goes here<h1>';
			}
		?>
	</div> <!-- END user image if logged in -->
	
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
					echo '<li><a href="controller.php?action=logout"> logout </a></li><li></li><li></li> ';		
				}
				else{
					echo '<li><a href="controller.php?action=login"> log in</a></li><li></li><li>|</li>   ';
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
           <li id="g-global-menu-label">Browse the University</li>
           <li><a href="about.php" id="header-about">About Us</a></li>
           <li><a href="journey.php" id="header-journey">Journey</a></li>
           <li><a href="media-index.php" id="header-media">Media Gallery</a></li>
         </ol>
         <hr class="g-clear-floats">
         
       </div> <!-- wrapper class div end -->
</div> <!-- banner div END -->

<!-- melb uni header END -->

	
	
</nav> <!-- END nav here -->

<div id='index-wrapper' class="wrapper grad-white" >

<section id="homesection"> <!-- homesection start -->
	
	<div id="index-homebg" class='align-center' >
	<div id="welcome-title-index">
        <div id="welcome-title-index"> <!-- welcome start -->
            <p id="title">History of CIS</p>
            <p><i> at the University of Melbourne</i></p>
        </div> <!-- welcome end -->
	</div>
	<div id="slideshow"> <!-- START slideshow div -->
        <div>
            <img class='centerall' src="img/ss1.jpg">
        </div>
        <div>
            <img class='centerall' src="img/ss2.jpg">
        </div>
        <div>
            <img class='centerall' src="img/ss3.jpg">
        </div>
        <div>
            <img class='centerall' src="img/ss4.jpg">
        </div>
        <div>
            <img class='centerall' src="img/ss5.jpg">
        </div>
        <div>
            <img class='centerall' src="img/ss6.jpg">
        </div>
    
    </div> <!-- END slideshow div -->

    <ul id="ulss"></ul> <!-- items for slideshow -->

	</div> <!-- homebg end -->

</section> <!-- homesection end -->

<section id="main"> <!-- start Main sectoin -->
	
	<div id="slide1" class="align-center"> <!-- start slide1 -->
		<br>
		<div class='section-heading'><p>"An entry point into the History of Computing..."</p></div> <!-- heading for section-->
		<br>
		<div id="slide-content" class="slide-content"> <!-- START slide-content -->
		<a href="about.php">
			<div id="about" class="content-box" >
			<img src="img/about2.jpg" />
			<h2>About</h2>
			<hr color='black' size='3px'/>
			<p>The History of CIS at the university is quite remarkable, click for a short summary</p>
			</div>
		</a>
		<a href="journey.php">
			<div id="journey" class="content-box">
			<img src="img/journey.jpg" />
			<h2 margin='5px'>Journey</h2>
			<hr color='black' size='3px'/>
			<p>journey through the history and add your own story - insert paralax link here -</p>
			</div>
		</a>
		<a href="media-index.php">
			<div id="media" class="content-box" onClick=goToURL(http://www.google.com.au)>
			<img src="img/gallery1.jpg" />
			<h2>Media Gallery</h2>
			<hr color='black' size='3px'/>
			<p>click to see more media</p>
			</div>
		</a>
		</div> <!-- END slide-content -->
		
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

<!-- all the javascript references -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/functions.js"></script>

</body>

</html>
