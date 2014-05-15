<!DOCTYPE html>

<html>

<head>
	<title> History of CIS </title>
	<link rel="stylesheet" type="text/css" href="css/paralax-style.css">
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

</head>

<body>
<nav> 
		<p>
		<?php if(isset($_COOKIE['ID_my_site'])){
			echo "Welcome " .$_COOKIE['ID_my_site']."!";
			echo "<a href=\"index.php\"> home</a>";
			echo "<a href=\"logout.php\"> logout </a>";		
		}
		else{
			echo "<a href=\"index.php\"> home</a>";
			echo "<a href=\"login.php\"> log in</a>";
			echo "<a href=\"register.php\"> sign up </a>";
		}
		?>
		</p>
</nav>

<div class="wrapper" >

<!-- for parallax testing
<div id="box1">box1</div>
<div id="box2">box2</div>
<div id="box3">box3</div>
-->

<section id="homesection" class="bcg"> <!-- homesection start -->
	
	<div id="homebg" class='align-center' >
	<div id="welcome"> <!-- welcome start -->
		<p id="title">Engaging</p>
		<p><i> History</i></p>
	</div> <!-- welcome end -->
	</div> <!-- homebg end -->
	
</section> <!-- homesection end -->


<section id="section-1" class="bcg"> <!-- START section-1 -->
	<div id="slide1" class="align-center slide"> <!-- start slide1 -->
		<div class="time-line">
			<p>1955</p>
		</div>
		
		<div class='section-heading'><p>This Story begins in 1955....</p></div> <!-- heading for section-->
	
		<div id="slide1-content" class="slide-content"> <!-- START slide-content -->
			
			<div id="content1" class="img-box">
				<img src="img/p2.jpg" />
				<h2>Photo 1</h2>
				<p>First ever photo taken in 1955</p>
			</div>
			
			<a href="add-content.php" class="nyroModal"><div class="add-img">+<p>click to add photo</p></div></a>
			
			<div id="content2" class="txt-box">
			
				<img id="userimg" src="img/dijk.jpg"/>
				<div class="user-info"> Dijkstra</div>
				<div class="date">1-May-2014 @ 16:42:01 </div>
				
				<h2>Summary of the beginnings</h2>
				<p>On June 16, 2006, the Department of Computer Science and Software Engineering, and the Department of Information Systems at the University of Melbourne celebrated Fifty Years of Computing at The University of Melbourne. The event commemorated was the June 14 1956 re-commissioning of the CSIRAC computer, the first at the University, and, until a few months later, when the Sydney University SILLIAC computer became operational, the only one in the country./p>
			</div>
		
		</div> <!-- END slide-content -->
		</div> <!-- END slide1 -->
		
</section> <!-- end section-1 -->

<section id="section-2" class="bcg"> <!-- START section-2 -->	
	
	<div id="slide2" class="align-center slide"> <!-- start slide2 -->
		<div class="time-line">
			<p>1960</p>
		</div>
	
		<div class='section-heading'><p>This is Lorem Ipsum 2</p></div> <!-- heading for section-->
	
		<div class="slide-content"> <!-- START slide-content -->
			
			<div id="content1" class="img-box">
				<img src="img/image-here.jpg" />
				<h2>The dog of Dijkstra</h2>
				<p>Remember the day I brought my dog in...</p>
			</div>
			
			<div class="added-content"> <!-- START added-content -->
				
				<div id="user-div">
					<img id="userimg" src="img/dijk.jpg"/>
					<div class="user-info"> Dijkstra</div>
					<div class="date">2-May-2014 @ 00:11:22 </div>
				</div>
				<div id="details">
					<p> the user added a new photo </p>
				</div>
				
			</div> <!-- END added-content -->
			
		</div> <!-- START slide-content -->
	
	</div> <!-- END slide2 -->

</section> <!-- end section-2 -->

<section id="section-3" class="bcg"> <!-- START section-3 -->

	<div id="slide3" class="align-center slide"> <!-- start slide3 -->
		<div class="time-line">
			<p>1965</p>
			<p>1966</p>
			<p>1967</p>
			<p>1969</p>
		</div>
		<div class='section-heading'><p>This is Lorem Ipsum three</p></div> <!-- heading for section-->
	</div> <!-- END slide3 -->	
	
</section> <!-- end section-3 -->

<section id="section-4" class="bcg">	<!-- START section-4 -->
	
	<div id="slide4" class="align-center slide"> <!-- start slide4 -->
		<div class="time-line">
			<p>1970</p>
			<p>1971</p>
			<p>1976</p>
		</div>
		<div class='section-heading'><p>This is Lorem Ipsum number 4 is here</p></div> <!-- heading for section-->
	</div> <!-- END slide4-->	
	
</section> <!-- end section-4 -->


</div> <!-- wrapper -->

<!-- all the js scripts and libraries used-->

<!-- found from working paralax -->
<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="http://prinzhorn.github.io/skrollr/dist/skrollr.min.js"></script>

<script type="text/javascript" src="js/paralax-functions.js"></script>

<!--
<script type="text/javascript" src="js/skrollr.stylesheets.min.js"\></script>
<script type="text/javascript" src="js/skrollr.js"></script>
<script type="text/javascript">
    skrollr.init();
</script> -->

<script type="text/javascript" src="js/jquery.nyroModal.custom.js"></script>
 <!--[if IE 6]>
 	<script type="text/javascript" src="js/jquery.nyroModal-ie6.js"></script>
 <![endif]-->
<script type="text/javascript">
	$(function() {
	  $('.nyroModal').nyroModal();
	});
</script>

</body>

</html>
