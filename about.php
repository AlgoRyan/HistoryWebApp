<!DOCTYPE html>

<html>

<head>
<title> History of CIS </title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/unimelb.css">
<link rel="stylesheet" type="text/css" href="css/footer-style.css">

</head>
<body id="about-body" class='grad'>
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
			
			displayUserImg($id);
			
			echo '<h6>logged in as '. $id .'</h6>';
			}
		?>
	</div> <!-- END user image if logged in -->
	
	<a href="mod.php"><div id="moderator" > <p>m</p> </div></a>
	<a href="controller.php?action=addcontent"><div id="add-content" > <p>a</p> </div></a>

	
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
					echo '<li><a href="login.php"> log in </a> | </li> ';
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

<div id="about-wrapper" class="wrapper" >

<section id="about-homesection"> <!-- homesection start -->
	
	<div id="homebg" class='align-center' >
	<div id="welcome-title" class='align-center'> <!-- welcome start -->
		<h1 id="about-title">About</h1>
	</div> <!-- welcome end -->
	</div> <!-- homebg end -->

</section> <!-- homesection end -->

<section id="main" class='section-about'> <!-- start Main sectoin -->
	
	<div id="slide1" class="align-center"> <!-- start slide1 -->
		<br>
		<div class='section-heading'><h2> CIS at the University of Melbourne </h2></div> <!-- heading for section-->
		<div class="slide-content">
			
			<p> On June 16, 2006, the Department of Computer Science and Software Engineering, 
			and the Department of Information Systems at the University of Melbourne celebrated Fifty Years 
			of Computing at The University of Melbourne. The event commemorated was the June 14 1956 
			re-commissioning of the CSIRAC computer, the first at the University, and, until a few months 
			later, when the Sydney University SILLIAC computer became operational, the only one in the 
			country.
			</p>
			<p>
			Since then much has happened and Computing at the University of Melbourne has grown to become
			one of the world's best places to study IT. With student interest in IT growing rapidly the
			Department now has to try and keep up with the demand. The Computer and Information System
			Department finds itself under the School of Engineering, currently headed by Professor 
			Justin Zobel shown below.
			</p>
			<hr width='5px'>
			<img src='http://www.cis.unimelb.edu.au/lib/images/justin-zobel.jpg'>
			<div class='caption'> Professor Justin Zobel - current head of CIS </div>
			
			<p>
			Below is a photograph of one of the early staff groups at the department.
			</p>
			<div>
				<img id='group-photo' src="img/p2.jpg">
				<div class='caption'> Staff and students of the Department of Computer Science, approximately 1984
				</div>
			</div>
			
			<p> The University was also part of the history of owning the first computer of Australia, CSIRAC. There is already quie extensive information about CSIRAC, some of which can be seen from clicking on the following link:
			<br>
			<a href="http://www.cis.unimelb.edu.au/about/csirac/index.html">
				<i>Link to the University of Melbourne CSIRAC ~ Australia's First Computer</i>
			</a>
		
		</div>
		
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
<?php

function displayUserImg($username) {
    if (file_exists('userimg/'.$username.'.jpg')) {
        echo '<img class="user-image" src="userimg/'.$username.'.jpg"/>';
    } else {
        echo '<img class="user-image" src="userimg/no-user-image4.jpg"/>';
    }
}


?>

</body>

</html>

<!-- old about link http://people.eng.unimelb.edu.au/ammoffat/fifty-years/ -->
