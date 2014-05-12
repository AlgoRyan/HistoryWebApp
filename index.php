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
		<?php if(isset($_COOKIE['ID_my_site'])){
			echo "Welcome " .$_COOKIE['ID_my_site']."!";
			echo "<a href=\"logout.php\"> logout </a>";		
		}
		else{
			echo "<a href=\"login.php\"> log in</a>";
			echo "<a href=\"register.php\"> sign up </a>";
		}
		?>
	</div>
	
	<a href="mod.php"><div id="moderator" > <p>m</p> </div></a>
	<a href="add-content.php"><div id="add-content" > <p>a</p> </div></a>
	
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
<script type="text/javascript" src="php/add.php"></script>
<script type="text/javascript" src="php/login.php"></script>
<script type="text/javascript" src="php/logout.php"></script>
<script type="text/javascript" src="php/members.php"></script>

</body>

</html>
