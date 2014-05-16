<!DOCTYPE html>

<html>
<title> History of CIS </title>

<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/unimelb.css">

</head>
<body>
<nav> <!-- START nav here -->
	<div id="nav-heading">
		University of Melbourne
	</div>
	
	<a href="mod.php"><div id="moderator" > <p>m</p> </div></a>
	<a href="add-content.php"><div id="add-content" > <p>a</p> </div></a>
	


<div id="g-header" role="banner">

       <div class="wrapper">

            <ol id="g-breadcrumb-menu">

             <li id="g-breadcrumb-home"><a href="//www.unimelb.edu.au/">University Home</a></li>

            </ol>

            

        <div id="g-global-search">

        	<a href="http://search.unimelb.edu.au/" id="g-search-button" role="button" aria-haspopup="true">Search</a>

			<ul id="g-audience-links">
    
            <?php if(isset($_COOKIE['ID_my_site'])){
			echo "Welcome " .$_COOKIE['ID_my_site']."!";
			echo "<li><a href=\"logout.php\"> logout </a></li>";		
		}
		else{
			echo "<li><a href=\"login.php\"> log in</a></li>";
			echo "<li><a href=\"register.php\"> sign up </a></li>";
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

         </div>

         <hr>

         <ol id="g-global-menu" role="navigation" aria-labelledby="g-global-menu-label">

           <a id="g-global-menu-logo" href="http://www.unimelb.edu.au">The University of Melbourne</a>

           <li id="g-global-menu-label">Browse the University</li>

           <li><a href="about.html" id="header-about">About Us</a></li>

           <li><a href="journey.html" id="header-journey">Journey</a></li>

           <li><a href="media-index.html" id="header-media">Media Gallery</a></li>

         </ol>

         <hr class="g-clear-floats">

       </div> 

    </div>





<!-- endd -->


	
	
</nav> <!-- END nav here -->

<div class="wrapper" >

<section id="homesection"> <!-- homesection start -->
	
	<div id="index-homebg" class='align-center' >
	<div id="welcome-title"> <!-- welcome start -->
		<p id="title">History of CIS</p>
		<p><i> at the University of Melbourne</i></p>
	</div> <!-- welcome end -->
	</div> <!-- homebg end -->

</section> <!-- homesection end -->


<section id="main"> <!-- start Main sectoin -->
	
	<div id="slide1" class="align-center"> <!-- start slide1 -->
		<br>
		<div class='section-heading'><p>"An entry point into the History Computers..."</p></div> <!-- heading for section-->
		<br>
		<div id="slide-content" class="slide-content"> <!-- START slide-content -->
		<a href="http://people.eng.unimelb.edu.au/ammoffat/fifty-years/">
			<div id="about" class="content-box" >
			<img src="img/about2.jpg" />
			<h2>About</h2>
			<p>The History of CIS at the university is quite remarkable, click for a short summary</p>
			</div>
		</a>
		<a href="journey.php">
			<div id="journey" class="content-box">
			<img src="img/journey.jpg" />
			<h2>Journey</h2>
			<p>journey through the history and add your own story - insert paralax link here -</p>
			</div>
		</a>
		<a href="media-index.php">
			<div id="media" class="content-box" onClick=goToURL(http://www.google.com.au)>
			<img src="img/gallery1.jpg" />
			<h2>Media Gallery</h2>
			<p>click to see more media</p>
			</div>
		</a>
		</div> <!-- END slide-content -->
		
	</div> <!-- END slide1 -->	
	
</section> <!-- end MAIN section -->


</div> <!-- wrapper -->

<!-- all the javascript references -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/functions.js"></script>

</body>

</html>
