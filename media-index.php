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

<section id="media-homesection"> <!-- homesection start -->
	
	<div id="homebg" class='align-center' >
	<div id="welcome-title"> <!-- welcome start -->
		<p id="title">Media Gallery</p>
	</div> <!-- welcome end -->
	</div> <!-- homebg end -->

</section> <!-- homesection end -->


<section id="main"> <!-- start Main sectoin -->
	
	<div id="slide1" class="align-center"> <!-- start slide1 -->
	
		<div id="img-content"> <!-- START img-content -->
		
		<div id="search-box"><!-- START search-box -->
			<div>
				<span>Filter images</span>
				<input id="filter-img" class='search-bar' onkeyup="search()" type="search"/> <!--search bar-->
			</div>
			
			<div>
				<span>Image Title</span>
				<input id="add-img-title" class='search-bar' type="search"/> <!--search bar-->
			</div>
			
			<div>
				<span>Image Description</span>
				<input id="add-img-description" class='search-bar' type="search"/> <!--search bar-->
			</div>
			<br>
			<button id="add-image-button" class="button" onClick="addImage()">ADD IMAGE</button>
			<button id="add-images-button" class="button" onClick="addImages()">ADD IMAGES(out of action)</button>
			<p>there are: <i id="result" opacity="50%">some</i> results</p>
		</div> <!-- END Search-box -->
		</div> <!-- END img-content -->
	
		<div id="slide-content"> <!-- START slide-content -->
			
			<div id="template-img" class="content-box added-image">
			<img src="img/image-here.jpg" />
			<h2 id="template-h2">This is a dog</h2>
			<p id="template-p">This part of will describe the above photo</p>
			</div>
			
			<div id="template-img2" class="content-box added-image">
			<img src="img/Numbers.jpg" />
			<h2 id="template-h2">Numbers</h2>
			<p id="template-p">Just some binary digits</p>
			</div>
			
			<div id="template-img3" class="content-box added-image">
			<img src="img/Desert.jpg" />
			<h2 id="template-h2">This is a Desert</h2>
			<p id="template-p">landscape picture</p>
			</div>
			
			<div id="template-img3" class="content-box added-image">
			<img src="img/circuits.jpg" />
			<h2 id="template-h2">Circuit</h2>
			<p id="template-p">Graphically drawn circuit board</p>
			</div>
			
			<div id="template-img3" class="content-box added-image">
			<img src="img/pc1.jpg" />
			<h2 id="template-h2">Compact PC</h2>
			<p id="template-p">Old compact pc used for stats</p>
			</div>
			
			<div id="template-img3" class="content-box added-image">
			<img src="img/pc2.jpg" />
			<h2 id="template-h2">Blue Screen</h2>
			<p id="template-p">AKA the blue screen of death in modern computers</p>
			</div>
			
			<div id="template-img3" class="content-box added-image">
			<img src="img/pc3.jpg" />
			<h2 id="template-h2">1 Terabyte</h2>
			<p id="template-p">1000 years ago	</p>
			</div>
		
		</div> <!-- END slide-content -->
		
	</div> <!-- END slide1 -->	
	
</section> <!-- end MAIN section -->

<!-- all the js scripts used -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/media-functions.js"></script>

</div> <!-- wrapper -->
</body>

</html>
