<!DOCTYPE html>
<!-- created on 28/4/14 by Cornelis -->
<html>
<title> History of CIS </title>

<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/unimelb.css">

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
			$sql = "SELECT img FROM users WHERE username = '{$id}'";
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
			
			<p><i id="result" opacity="50%"></i></p>
						
			<div id="file-drop">
			
				<form id="file-drop-area" action="upload_file2.php" class="dropzone" enctype="multipart/form-data" method="post">
					<input type="submit" name="submit" id='file' value="upload">
				</form>
			
			</div>
			
			
			
		</div> <!-- END Search-box -->
		</div> <!-- END img-content -->
	
		<div id="slide-content"> <!-- START slide-content -->
			
			<div id="template-img" class="content-box added-image">
			<img src="img/image-here.jpg" />
			<h2 id="template-h2">This is the first photo</h2>
			<p id="template-p">This part of will describe the above photo</p>
			</div>
			
		</div> <!-- END slide-content -->
		
	</div> <!-- END slide1 -->	
	
</section> <!-- end MAIN section -->


</div> <!-- wrapper -->

<!-- all the js scripts used -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/add-functions.js"></script>

</body>

</html>
