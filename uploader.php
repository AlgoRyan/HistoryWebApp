<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html">
	<meta charset="utf-8">
	<title> upload file </title>
</head>

<body>

<?php
$target_path = "uploads/"; 

$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);  
	
	if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) { 
	echo "The file ".  basename( $_FILES['uploadedfile']['name']).  
	" has been uploaded"; 
} else{ 
	echo "There was an error uploading the file, please try again!"; 
} 

?>

</body>
</html>
