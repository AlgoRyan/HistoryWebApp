<!DOCTYPE html>
<!-- created on 28/4/14 by Cornelis -->
<html>
<title> History of CIS </title>

<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="js/dropzone.js"></script>

</head>
<body>
<nav> <!-- START nav here -->
	<div id="nav-heading">
		University of Melbourne
	</div>
	<div id="nav-login">
		<a href="index.html"> home</a> 
		<a href="register.php"> sign up </a>
		<a href="logout.php"> logout </a>
	</div>
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
			<p><i id="result" opacity="50%"></i></p>
			
			<div>
			<form visibility="none" action="upload_file.php" method="post" enctype="multipart/form-data">
				<label for="file">Filename:</label>
				<input type="file" name="file" id="file"><br>
				<input type="submit" name="submit" value="upload">
			</form>
			</div>
			
						
			<div id="file-drop">
			
			<form action="uploaded_file.php" class="dropzone" id="my-awesome-dropzone">
				<input type="submit" name="submit" value="upload">
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

<?php
error_reporting(E_ALL ^ E_NOTICE); // turns off all the notices showing in browser

function saveFile() {
	$allowedExts = array("gif", "jpeg", "jpg", "png", "JPG");
	$temp = explode(".", $_FILES["file"]["name"]);
	$extension = end($temp);

	if ((($_FILES["file"]["type"] == "image/gif")
	|| ($_FILES["file"]["type"] == "image/jpeg")
	|| ($_FILES["file"]["type"] == "image/jpg")
	|| ($_FILES["file"]["type"] == "image/pjpeg")
	|| ($_FILES["file"]["type"] == "image/x-png")
	|| ($_FILES["file"]["type"] == "image/png")
	|| ($_FILES["file"]["type"] == "image/JPG"))
	&& ($_FILES["file"]["size"] < 1000000)
	&& in_array($extension, $allowedExts)) {
	  if ($_FILES["file"]["error"] > 0) {
		echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
	  } else {
		echo "Upload: " . $_FILES["file"]["name"] . "<br>";
		echo "Type: " . $_FILES["file"]["type"] . "<br>";
		echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
		echo "Temp file: " . $_FILES["file"]["tmp_name"] . C;
		if (file_exists("upload/" . $_FILES["file"]["name"])) {
		  echo $_FILES["file"]["name"] . " already exists. ";
		} else {
		  move_uploaded_file($_FILES["file"]["tmp_name"],
		  __DIR__ . "/uploads/". $_FILES["file"]["name"]);
		  echo "Stored in: " . __DIR__ . "/uploads/" . $_FILES["file"]["name"];
		}
	  }
	} else {
	  echo "Invalid file";
	}
}
?>

</body>

</html>
