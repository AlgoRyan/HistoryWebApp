<?php
$con = mysqli_connect("127.0.0.1", "beta", "beta_2014", "beta");
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else {
	echo "Worked fine connecting<br>";
}

//error_reporting(E_ALL ^ E_NOTICE); // turns off all the notices showing in browser
$allowedExts = array("gif", "jpeg", "jpg", "png", "JPG");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

if (
	(($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg")
		|| ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/pjpeg")
		|| ($_FILES["file"]["type"] == "image/x-png") || ($_FILES["file"]["type"] == "image/png")
		|| ($_FILES["file"]["type"] == "image/JPG")) && ($_FILES["file"]["size"] < 1000000)
		&& in_array($extension, $allowedExts)
		) {
		if ($_FILES["file"]["error"] > 0) {
			echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
		}
		else {
			echo "Upload: " . $_FILES["file"]["name"] . "<br>";
			echo "Type: " . $_FILES["file"]["type"] . "<br>";
			echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
			echo "Temp file: " . $_FILES["file"]["tmp_name"] . C;
			
			if (file_exists("upload/" . $_FILES["file"]["name"])) {
				echo $_FILES["file"]["name"] . " already exists. ";
			} 
			else {
				echo "<br>trying to add now";
				//$image = addslashes(file_get_contents($_FILES['file']['name']));
				$image = addslashes(file_get_contents($_FILES['file']['tmp_name']));
				$image_name = addslashes($_FILES['image']['name']);
				
				$insert = "INSERT INTO users (img) VALUES ('{$image}')";
				
				//$insert = "INSERT INTO users (username, password, img) VALUES ('usernamehere', 'pword', '{$image}')";
				//$insert = "INSERT INTO users (username, password, img) VALUES ('usernamehere', 'pword', '{$_FILES["file"]["tmp_name"]}')";
				//$insert = "INSERT INTO users (username, password)
				//		VALUES ('test', 'pword')";
				
				//$insert_image = "INSERT INTO `users` (`ID`,`username`,`password`,`img`) VALUES (`NULL`,`test`,`pword`, `NULL`)";
				//mysql_query($con, $insert_image);
				
				//$add_image = mysqli_query($con, $insert);
				
				if (!mysqli_query($con, $insert)) { // Error handling
					echo "<br><br><h2><i>Something went wrong!</i> :(<h2>"; 
				}
				//move_uploaded_file($_FILES["file"]["tmp_name"], //__DIR__ . $_FILES["file"]["name"]);
				//	 __DIR__ . "uploads/". $_FILES["file"]["name"]);
				//"//info30005.cis.unimelb.edu.au/cbosua/www/test.jpg");
				//"http:\\info30005.cis.unimelb.edu.au\cbosua\home\www\HistoryWebApp\ZWWWWWOOOOOOOOOW.jpg");
				//echo "<br>Stored in: " . __DIR__ . "/uploads/" . $_FILES["file"]["name"];
				//echo "<br><br> Server Name: " . $_SERVER['DOCUMENT_ROOT'];
			}
		}
}	
else {
	echo "Invalid file";
	echo "\n file type is - " . $_FILES["file"]["size"];
}

// echo "<script>window.location = 'add-content.php'</script>";
/* to see details of the uploaded file
echo "<pre>";
echo "POST:";
print_r($_POST);
echo "FILES:";
print_r($_FILES);
echo "</pre>";

*/

// old path "/Users/cornelisbosua/HistoryWebApp/uploads/"

?>

