<!DOCTYPE html>
<!-- created on 28/4/14 by Cornelis -->
<html>
<title> History of CIS </title>

<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/unimelb.css">
<link rel="stylesheet" type="text/css" href="css/footer-style.css">
<?php checkLogged(); ?>

<script>
function search() {
	var found_id;
	var len = document.getElementById("filter-img").value.length;
	
	var search_string = document.getElementById("filter-img").value;
	//document.getElementById("template-p").innerHTML = search_string;
	var myPattern = new RegExp(search_string, "i");
	
	console.log(myPattern);
	
	var array_len = document.getElementsByClassName("added-content-mod").length;
	var results_count = 0;
	
	for (var n=0; n < array_len; n++) {
		var z =(myPattern.test(document.getElementsByClassName("added-content-mod")[n].innerHTML) && len > 0);
		console.log(z);
		
		if (myPattern.test(document.getElementsByClassName("added-content-mod")[n].innerHTML) && len >= 0) {
			//document.getElementsByClassName("added-content-mod")[n].style.visibility = "visible";
			document.getElementsByClassName("added-content-mod")[n].style.display = "block";
			
		} else {
			//document.getElementsByClassName("added-content-mod")[n].style.visibility = "hidden";
			document.getElementsByClassName("added-content-mod")[n].style.display = "none";
		}
		
	}
	
	for (var n=0; n < array_len; n++) {
		if (document.getElementsByClassName("added-content-mod")[n].style.display === "block") {
			results_count++;
		}
	}
	
	//results_count = countByClass("added-content-mod");
	
	document.getElementById("result").innerHTML = "There are: " + results_count + " results";
	
	//adjustDivHeight("#slide-content",results_count,290,3);

}

function acceptItem(item) {
	var $parent = $(item).parent().parent();
	
}

function accept(item) {
	// get the parent and iniate variables
	console.log($(item).parent().parent().attr("id"));
	var $parent = $(item).parent().parent();
	$parent_id = $parent.attr('id');
	$n = $parent_id.split('-')[1];
	$no = parseInt($n);
	
	// for debugging
	console.log('Parents class is ' + $parent.attr('class'));
	console.log('Parents ID is ' + $parent.attr('id'));
	console.log('Content ID is ' + $no);
	
	//$parent.style.background = 'green';
	document.getElementById($parent_id).style.backgroundColor="green";
	
	// add it to an array
	var accepted_ids = [];
	accepted_ids.push($no);
	accepted_ids.push(1);
	
	for(var i=0 ; i < accepted_ids.length ; i++ ) {
		console.log(accepted_ids[i]);
	}
	
	$.ajax({
            url: "mod.php",
            type: "POST",
            data: {
                'arrayID': accepted_ids
            }
     });
    
    // send the array value to the php function to update the sql
    <?php acceptThis($_POST['arrayID'],1); ?>
    
	}

function reject(item) {
	// get the parent and iniate variables
	console.log($(item).parent().parent().attr("id"));
	var $parent = $(item).parent().parent();
	$parent_id = $parent.attr('id');
	$n = $parent_id.split('-')[1];
	$no = parseInt($n);
	
	// for debugging
	console.log('Parents class is ' + $parent.attr('class'));
	console.log('Parents ID is ' + $parent.attr('id'));
	console.log('Content ID is ' + $no);
	
	//$parent.style.background = 'green';
	document.getElementById($parent_id).style.backgroundColor="red";
	
	// add it to an array
	var accepted_ids = [];
	accepted_ids.push($no);
	
	for(var i=0 ; i < accepted_ids.length ; i++ ) {
		console.log(accepted_ids[i]);
	}
	
	$.ajax({
            url: "mod.php",
            type: "POST",
            data: {
                'arrayID': accepted_ids
            }
     });
    
    // send the array value to the php function to update the sql
    <?php acceptThis($_POST['arrayID'],0); ?>
    
	}

</script>


</head>
<body>
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
			
			displayUserImg($id);
			
			echo '<h6>logged in as '. $id .'</h6>';
			}
		?>
	</div> <!-- END user image if logged in -->
	
<!-- melb uni header START -->
<div id="g-header" role="banner"> <!-- banner div START -->

       <div class="wrapper"> <!-- wrapper class div start -->
            <ol id="g-breadcrumb-menu">
             <li id="g-breadcrumb-home"><a href="//www.unimelb.edu.au/">University Home</a></li>
            </ol>

        <div id="g-global-search"> <!-- Global Search div START -->
        	<a href="http://search.unimelb.edu.au/" id="g-search-button" role="button" aria-haspopup="true">Search</a>
			<ul id="g-audience-links">
    
			    <?php if(isset($_COOKIE['ID_my_site'])){
					echo "Welcome " . $_COOKIE['ID_my_site']."!";
					echo '<li><a href="logout.php"> logout </a></li>';		
				}
				else{
					echo '<li><a href="login.php"> log in</a></li>';
					echo '<li><a href="register.php"> sign up </a></li>';
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
         
         </div> <!-- Global Search div START -->
         
         <hr>
         <ol id="g-global-menu" role="navigation" aria-labelledby="g-global-menu-label">
           <a id="g-global-menu-logo" href="http://www.unimelb.edu.au">The University of Melbourne</a>
           <li id="g-global-menu-label">Browse the History of CIS Site</li>
           <li><a href="index.php" id="header-index">Home</a></li>
           <li><a href="about.php" id="header-about">About Us</a></li>
           <li><a href="journey.php" id="header-journey">Journey</a></li>
           <li><a href="media-index.php" id="header-media">Media Gallery</a></li>
         </ol>
         <hr class="g-clear-floats">
         
       </div> <!-- wrapper class div end -->
</div> <!-- banner div END -->

<!-- melb uni header END -->
	
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
		<h2 id='mod-heading'> Items yet to be moderated </h2>
		<div id="search-box"><!-- START search-box -->
			<div>
				<span>Filter Items</span>
				<input id="filter-img" class='search-bar' onkeyup="search()" type="search"/> <!--search bar-->
			</div>
			<br>
			<p><i id="result" opacity="50%"></i></p>
		</div> <!-- END Search-box -->
		</div> <!-- END img-content -->
	
                <?php
                	//displayLatestContent();
				    displayAllContent();
				?>
			
		
			
			<div class="mod-submit"> <!-- START mod-buttons --
				
				<div id="mod-accept" onClick="">a</div> 
				<div id="mod-reject" onClick="">x</div>
			
			</div>  <!-- END mod-buttons -- 
			
			
		
	</div> <!-- END slide1 -->	
	
</section> <!-- end MAIN section -->
<?php
//acceptContent();
?>
</div> <!-- wrapper -->

<!-- unimelb footer START -->
<div id="footernav" role="contentinfo">       
	<div class="wrapper">         
		<p id="backtotop">
		<a href="#g-breadcrumb-menu">Back to top</a></p>         
		<a href="http://unimelb.edu.au" id="footernav-logo">
		<img src="img/unimelb-logo-lge.png" alt="The University of Melbourne logo"></a>
  		<dl id="footernav-required">           
  			<dt>Phone:</dt>
  			<dd>13 MELB (13 6352) | International: +(61 3) 9035 5511</dd><br>           
  			<dt>The University of Melbourne ABN:</dt>           
  			<dd>84 002 705 224</dd><br>           
  			<dt>CRICOS Provider Code:</dt>           
  			<dd>00116K <a href="http://www.services.unimelb.edu.au/international/visas/index.html">(visa information)</a></dd><br>           
  			<dt><a href="http://brand.unimelb.edu.au/web/docs">Web brand guidelines</a> created by <a href="http://marcom.unimelb.edu.au">Marketing</a></dt>           
  			<dd></dd>         
  		</dl>         
  	<ul id="footernav-social">           
  		<li><a href="http://www.twitter.com/unimelb"><img src="img/icon-twitter.png" alt="Connect with us on Twitter"></a></li>           
  		<li><a href="http://www.facebook.com/melbuni"><img src="img/icon-facebook.png" alt="Connect with us on Facebook"></a></li>           
  		<li><a href="http://au.linkedin.com/pub/the-university-of-melbourne/61/430/215"><img src="img/icon-linkedin.png" alt="Connect with us on Facebook"></a></li>       
  	</ul>        
   	<ul id="footernav-legals">          
    	<li><a href="http://www.unimelb.edu.au/disclaimer/">Disclaimer &amp; copyright</a></li>       
        <li><a href="http://www.unimelb.edu.au/accessibility/index.html">Accessibility</a></li>         
        <li><a href="http://www.unimelb.edu.au/disclaimer/privacy.html">Privacy</a></li>
      </ul>
 	</div>
 </div>
 
 <!-- unimelb footer END -->

<!-- all the js scripts used -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<?php

function checkLogged() {
    $con = mysqli_connect("127.0.0.1", "beta", "beta_2014", "beta");
    
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $username = $_COOKIE['ID_my_site'];

    if (!$username) {
        header("location:controller.php?action=login");
    }
}

function displayLatestContent() {
	$con = mysqli_connect("127.0.0.1", "beta", "beta_2014", "beta");
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$sql = "SELECT * FROM UserContent WHERE ID = (SELECT MAX(ID) FROM UserContent);";
	$sth = $con->query($sql);
	$result = mysqli_fetch_array($sth);
	
	$userid = $result['UserID'];
	$category = $result['Category'];
	$date = $result['Date'];
	$title = $result['Title'];
	$year = $result['year'];
	$description = $result['Description'];
	$moderated = $result['moderated'];
	
	$sql = "SELECT * FROM users WHERE ID = '{$userid}'";
	$sth = $con->query($sql);
	$result2 = mysqli_fetch_array($sth);
	$username = $result2['username'];
	
	echo '
	<div class="added-content-mod">
		<div class="container">
		<div id="content-" class="txt-box">';
    
			displayUserImg($username);
	echo	'
			<div class="user-info">'.$username.'</div> 
			<div class="date">Added on <i>'.$date.' </i> </div>
		
			<h2>Title: ' . $title  . '  </h2>
			<p>Year: '. $year . '  </p>
			<p>Category: '. $category . '  </p>
			<p>Date Added: '. $date  . '  </p>
			<p>'.$description.'</p>
			<div class="mod-buttons"><span id="mod-accept">accept</span><span id="mod-reject">reject</span></div>
			
			</div>
		</div>
	</div>
		';
}

function displayAllContent() {
	$con = mysqli_connect("127.0.0.1", "beta", "beta_2014", "beta");
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	// get the array in descending order
	$sql = "SELECT * FROM UserContent ORDER BY `id` DESC";
	$result = mysqli_query($con, $sql);
	
	// display all the info
	displayArray($con, $result);
	
}

function displayArray($con, $result_ar) {
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
		
		$sql = "SELECT * FROM users WHERE ID = '{$userid}'";
        $sth = $con->query($sql);
        $result2 = mysqli_fetch_array($sth);
        $username = $result2['username'];
		
		if (!$row || $moderated != NULL) {
			//echo '<h5> No info available</h5><br>';
		}
		else {
			echo '
		<div class="added-content-mod">
			<div class="container">
			<div id="content-'.$row['ID'].'" class="txt-box">';
    
			displayUserImg($username);
	echo	'
				<div class="user-info">'.$username.'</div> 
				<div class="date">Added on <i>'.$date.' </i> </div>
			
				<h2>Title: ' . $title  . '  </h2>
				<p>Year: '. $year . '  </p>
				<p>Category: '. $category . '  </p>
				<p>Date Added: '. $date  . '  </p>
				<p>'.$description.'</p>';
			 displayAddedImg($dir);	
		echo		'
				<div class="mod-buttons">
					<div id="mod-accept" onClick="accept(this)">accept</div>
					<div id="mod-reject" onClick="reject(this)">reject</div>
				</div>
				
				</div>
			</div>
		</div>
			';
		}
		$i++;
	}
	
	mysqli_free_result($result);
}

function acceptThis($ar, $mod) {
	$con = mysqli_connect("127.0.0.1", "beta", "beta_2014", "beta");
    
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    $array = $ar;
    
    foreach ( $array as $no ){
    	
    	$i = intval($no);
    	$j = $ar[1];
    	if ($j == 1) {
    		$sql = "UPDATE UserContent SET moderated = 1 WHERE ID = {$i}";
    		
    	} else if ($j == 0) {
    		$sql = "UPDATE UserContent SET moderated = 0 WHERE ID = {$i}";
    		
    	}
		mysqli_query($con, $sql);
		//echo "THIS HAS BEEN DONE<br>";
	}
}

function displayUserImg($username) {
    if (file_exists('userimg/'.$username.'.jpg')) {
        echo '<img class="user-image" src="userimg/'.$username.'.jpg"/>';
    } else {
        echo '<img class="user-image" src="userimg/no-user-image4.jpg"/>';
    }
}

function displayAddedImg($dir) {
    if (file_exists($dir)) {
        echo '<img class="added-content-mod" src="'.$dir.'"/>';
    }
}


?>

</body>

</html>
