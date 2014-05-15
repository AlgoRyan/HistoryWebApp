<!DOCTYPE html>
<!-- created on 28/4/14 by Cornelis -->
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
			echo "<a href=\"index.php\"> home</a>";
			echo "<a href=\"logout.php\"> logout </a>";		
		}
		else{
			echo "<a href=\"index.php\"> home</a>";
			echo "<a href=\"login.php\"> log in</a>";
			echo "<a href=\"register.php\"> sign up </a>";
		}
		?>
	</div>
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
	
		<div id="slide-content"> <!-- START slide-content -->
			
			<div class="item">
			<div id="template-img" class="content-box added-image"> <!-- START content-box -->
				
				<img src="img/image-here.jpg" />
				<h2 id="template-h2">My dog</h2>
				<p id="template-p">Remember that day bring your dog to work... good memories</p>
			
			</div> <!-- END content-box -->
			
			<div class="added-content"> <!-- START added-content -->
				
				<div id="user-div">
					<img id="userimg" src="img/dijk.jpg"/>
					<span id="user-span"> Dijkstra</span>
					<span id="date-span">1-May-2014 @ 00:11:22 </span>
				</div>
				<div id="details">
					<p> the user added a new photo </p>
				</div>
				
			</div> <!-- END added-content -->
			
			<div class="mod-buttons"> <!-- START mod-buttons -->
				
				<div id="mod-accept" onClick="function()">a</div> 
				<div id="mod-reject" onClick="function()">x</div>
			
			</div>  <!-- END mod-buttons -->
			</div>
		</div> <!-- END slide-content -->
		
	</div> <!-- END slide1 -->	
	
</section> <!-- end MAIN section -->


</div> <!-- wrapper -->

<!-- all the js scripts used -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/mod-functions.js"></script>
</body>

</html>
