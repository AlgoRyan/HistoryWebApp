<!DOCTYPE html>

<html>

<body>
<?php
function displayYearContent($year) {
	$con = mysqli_connect("127.0.0.1", "beta", "beta_2014", "beta");
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	// get the array in descending order
	$sql = "SELECT * FROM UserContent WHERE Year = '".$year."'";
	
	$result = mysqli_query($con, $sql);
	
	// display all the info
	displayArray($result);
}

function displayArray($result_ar) {
	// getting column data
	$i = 0;
	
	while ($i < mysqli_num_rows($result_ar)) {
		$row = $result_ar->fetch_array(MYSQLI_ASSOC);
			
		$userid = $row['UserID'];
		$category = $row['Category'];
		$date = $row['Date'];
		$title = $row['Title'];
		$year = $row['year'];
		$description = $row['Description'];
		$dir = $row['contentDirectory'];
		$moderated = $row['moderated'];
		
		if (!$row || $moderated == 0) {
			//echo '<h5> No info available</h5><br>';
		}
		else {
			echo '
		<div class="user-added">
			
			<div id="content-'.$row['ID'].'" class="txt-box">';
    
			displayUserImg($username);
	        echo	'
				<div class="user-info">'.$username.'</div> 
				<div class="date">Added on <i>'.$date.' </i> </div>
			
				<h2>Title: ' . $title  . '  </h2>
				<p>Year: '. $year . '  </p>
				<p>Category: '. $category . '  </p>
				<p>Date Added: '. $date  . '  </p>
				<p>'.$description.'</p>
				';
			displayAddedImg($dir);	
			echo	'
			</div>
		</div>
			';
		}
		$i++;
	}
	
	mysqli_free_result($result);
}
?>

</body>

</html>