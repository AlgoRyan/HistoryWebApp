<!DOCTYPE html>
<!-- created on 28/4/14 by Cornelis -->
<html>
<title> History of CIS </title>

<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/unimelb.css">
<link rel="stylesheet" type="text/css" href="css/footer-style.css">
<script>
function search() {
	var found_id;
	var len = document.getElementById("filter-img").value.length;
	
	var search_string = document.getElementById("filter-img").value;
	//document.getElementById("template-p").innerHTML = search_string;
	var myPattern = new RegExp(search_string, "i");
	
	console.log(myPattern);
	var array_len = document.getElementsByClassName("added-image").length;
	var results_count = 0;
	
	for (var n=0; n < array_len; n++) {
		var z =(myPattern.test(document.getElementsByClassName("added-image")[n].innerHTML) && len > 0);
		console.log(z);
		
		if (myPattern.test(document.getElementsByClassName("added-image")[n].innerHTML) && len >= 0) {
			//document.getElementsByClassName("added-image")[n].style.visibility = "visible";
			document.getElementsByClassName("added-image")[n].style.display = "block";
			
		} else {
			//document.getElementsByClassName("added-image")[n].style.visibility = "hidden";
			document.getElementsByClassName("added-image")[n].style.display = "none";
		}
		
	}
	
	for (var n=0; n < array_len; n++) {
		if (document.getElementsByClassName("added-image")[n].style.display === "block") {
			results_count++;
		}
	}
	
	//results_count = countByClass("added-image");
	
	document.getElementById("result").innerHTML = results_count ;
	
	//adjustDivHeight("#slide-content",results_count,290,3);

}

</script>
</head>
<body class='about-body grad'>
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
			echo '<img class="user-image" src="userimg/'.$id.'.jpg"/>';
			echo '<h6>logged in as '. $id .'</h6>';
			}
			else{
				//echo '<h6>photo goes here<h6>';
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
					echo '<li><a href="controller.php?action=logout"> logout </a></li>';		
				}
				else{
					echo '<li><a href="controller.php?action=login"> log in</a></li>';
					echo '<li><a href="controller.php?action=register"> sign up </a></li>';
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

<div id='media-wrapper' class="wrapper" >

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
				<span>Search images: </span>
				<input id="filter-img" class='search-bar' onkeyup="search()" type="search"/> <!--search bar-->
			</div>
			
			<br>
			<p>there are: <i id="result" opacity="50%">some</i> results</p>
		</div> <!-- END Search-box -->
		</div> <!-- END img-content -->
	
		<div id="media-slide-content"> <!-- START slide-content -->
            
            <?php
            
            connectShow()
            
            ?>
            
		    <br> <div id='end-res'> <p> ... end of results ... <p></div>
		</div> <!-- END slide-content -->
		
		
	</div> <!-- END slide1 -->	
	
</section> <!-- end MAIN section -->

<!-- all the js scripts used -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


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

<?php
function connectShow() {
    $con = mysqli_connect("127.0.0.1", "beta", "beta_2014", "beta"); 
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $sql = "SELECT * FROM Hardware";
    $result = mysqli_query($con, $sql);
    $sql = "SELECT * FROM `Photographs - CSIRAC`;";
    $CSIRAC_array = mysqli_query($con, $sql);

    if (!$result || !$CSIRAC_array) {
        die('Query Failed: ' . mysqli_error());	
    }
    
    displayArray($result,'HardwareID','HardwareComments');
	displayArray($CSIRAC_array,'Title','Notes');

}

function displayArray($result_ar, $_title, $_comments) {
    // getting column data
    $i = 0;

    while ($i < mysqli_num_rows($result_ar)) {
        $row = $result_ar->fetch_array(MYSQLI_ASSOC);
    
        if (!$row) {
            echo '<h5> No info available</h5><br>';
        }
    
        //echo '<pre>' . $row[$_title] . '</pre><br>';
    
        $exploded = multiexplode(array(";"),$row['ImageLocation']);
        $comments = $row[$_comments];
        
        foreach ( $exploded as $dir) {
       // if (file_exists("uploads/" . $_FILES["file"]["name"])) {
            if (file_exists($dir)) {
                $title = $row[$_title];
                
                makeContentDiv($dir,$title,$comments,$i);
            }
        }
    
        $i++;
    }

    mysqli_free_result($result);
   
}

function makeContentDiv($url, $id, $descript,$i) {
    echo "
    <div class='added-image'>
        <div id='img". $i ."' class='content-box'>";
    echo '
            <div><img src="' . $url . '" /></div>';
    echo "
            <h2 margin='5px'>" . $id . "</h2>
            <hr color='black' size='3px'/>
            <p>". $descript . "</p>
        </div>
    </div>";
}

function multiexplode ($delimiters,$string) {
    
    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;
}

?>



</body>

</html>
