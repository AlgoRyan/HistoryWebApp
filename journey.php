<!DOCTYPE html>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html">
	<meta charset="utf-8">
	<title> History of CIS </title>
	<link rel="stylesheet" type="text/css" href="css/paralax-style.css">
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/nyroModal.css">
</head>

<body>
<nav> 
		<p>
		<?php if(isset($_COOKIE['ID_my_site'])){
			echo "Welcome " .$_COOKIE['ID_my_site']."!";
			echo "<a href=\"index.php\"> home</a>";
			echo "<a href=\"controller.php?action=logout\"> logout </a>";		
		}
		else{
			echo "<a href=\"index.php\"> home</a>";
			echo "<a href=\"controller.php?action=login\"> log in</a>";
			echo "<a href=\"controller.php?action=register\"> sign up </a>";
		}
		?>
		</p>
</nav>

<div class="wrapper" id="skrollr-body">

<!-- for parallax testing
<div id="box1">box1</div>
<div id="box2">box2</div>
<div id="box3">box3</div>
-->
<div class="time-line" >
	<p><a href="index.php" >Home</a></p>
	<p><a href="#homesection" >Top &times</a></p>
	<p><a href="#section-1" >1956 &times</a></p>
	<p><a href="#section-2" >1960 &times</a></p>
	<p><a href="#section-3" >1969 &times</a></p>
	<p><a href="#section-4" >1970 &times</a></p>
</div>


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
		
		<div class='section-heading'>
		    <p>14th June 1956</p>
		    <p> Australia's first computer... and it begins</p>
		</div> <!-- heading for section-->
	
		<div id="slide1-content" class="slide-content"> <!-- START slide-content -->
			
			<div id="content1-1" class="txt-box">
			
				<img id="userimg" src="img/dijk.jpg"/>
				<div class="user-info"> Dijkstra</div>
				<div class="date">1-May-2014 @ 16:42:01 </div>
				
				<h2>Summary of the beginnings</h2>
				<p>On June 16, 2006, the Department of Computer Science and Software Engineering, and the Department of Information Systems at the University of Melbourne celebrated Fifty Years of Computing at The University of Melbourne. The event commemorated was the June 14 1956 re-commissioning of the CSIRAC computer, the first at the University, and, until a few months later, when the Sydney University SILLIAC computer became operational, the only one in the country./p>
			</div>
			
			<div id="content1-2" class="img-box">
				<img src="img/p2.jpg" />
				<h2>Photo 1</h2>
				<p>First ever photo taken in 1955</p>
			</div>
			
			<a href="controller.php?action=addcontent" class="nyroModal"><div class="add-img">+<p>click to add photo</p></div></a>
		
		</div> <!-- END slide-content -->
		</div> <!-- END slide1 -->
		
</section> <!-- end section-1 -->

<section id="section-2" class="bcg"> <!-- START section-2 -->	
	
	<div id="slide2" class="align-center slide"> <!-- start slide2 -->
		
		<div class='section-heading'>
		    <p>1956 &#45 1971</p>
		    <p>The First Department</p>
		</div> <!-- heading for section-->
	
		<div class="slide-content"> <!-- START slide-content -->
			
			<div id="content2-1" class="txt-box">
				
				<h2>&#126 Computational Department</h2>
                <p> During the period 1956–1971, academic computing operations in the University were conducted by
the Computation Laboratory, subsequently renamed the Computation Department.
2During the 1960s, new computing subjects were developed and provided as part of the BSc degree.
Undergraduate exposure to computing expanded as courses migrated from later year specialist subjects
to second, and ultimately, by 1970, to ﬁrst year.</p>
                
			</div>
			
		</div> <!-- END slide-content -->
	
	</div> <!-- END slide2 -->

</section> <!-- end section-2 -->

<section id="section-3" class="bcg"> <!-- START section-3 -->

	<div id="slide3" class="align-center slide"> <!-- start slide3 -->
		
		<div class='section-heading'>
		    <p>1969 ~ The Split</p>
		    <p>The Information System Department</p>
		    
		</div> <!-- heading for section-->
		
		<div class="slide-content"> <!-- START slide-content -->
           
            <div id="content3-1" class="txt-box">
                <p>
                In 1969 the University took the decision to split the Department into two components – a computing
                services component, and a teaching unit to be known as the Department of Information Science,
                located in the Faculty of Science. At this time, Dr. Frank Hirst (by now a Reader) was invited to take
                up the foundation chair in computing at the University of Adelaide, creating vacancies at the top of
                both units. Bill Flower was appointed as Acting Head of Information Science, the other academic
                staff being Rex Harris, and Peter Thorne (who, after his undergraduate Physics degree, had worked
                with Hirst to complete another of the ﬁrst computing PhDs in Australia, in 1967). Ian Robinson was
                appointed as a further staff member in 1971. He had completed his undergraduate study at Melbourne,
                including several subjects in computation during 1965–1967, and completed a PhD in 1973 under Dr
                B.W. Thompson, in the Department of Mathematics. Robinson moved to La Trobe University in
                August 1975, where he is now Head of the School of Engineering and Mathematical Sciences.
                </p>
            </div> 
		
		</div> <!-- END slide-content -->
		
	</div> <!-- END slide3 -->	
	
</section> <!-- end section-3 -->

<section id="section-4" class="bcg">	<!-- START section-4 -->
	
	<div id="slide4" class="align-center slide"> <!-- start slide4 -->
		
		<div class='section-heading'>
		    <p>1969 ~ The Other Half</p>
		    <p>Department of Computer Science</p>
		    
		</div> <!-- heading for section-->
		
		<div class="slide-content"> <!-- START slide-content -->
           
            <div id="content4-1" class="txt-box">
                <p>
                Professor Peter C. Poole commenced in August 1975 as the foundation chair of computing at the University.
                Poole had completed an undergraduate science degree (Physics) at the University of Queensland,
                and a PhD at the University of Sydney in 1964 under the supervision of Professor C.B.A. McCushen,
                working on SILLIAC computer. Two well-known contemporaries of Poole's at Sydney
                were Professor John Bennett, the first Australian Chair of Computing; and fellow PhD student Christ
                Wallace, who went on to become Professor and Head of Computer Science at Monash University in
                Melbourne, and one of Australia's most notable academics in the area. On Wallace's death in 2004, the
                Computing Research and Education (CORE) prize for Research Excellence was renamed the Wallace
                Award, in recognition of his long-term and seminal contributions to Australian computing.
                </p>

            </div> 
		
		</div> <!-- END slide-content -->
		
	</div> <!-- END slide4 -->
</section> <!-- end section-4 -->


</div> <!-- wrapper -->

<!-- all the js scripts and libraries used-->

<!-- found from working paralax -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://prinzhorn.github.io/skrollr/dist/skrollr.min.js"></script>
<script type="text/javascript" src="js/skrollr.menu.js"></script>
<script type="text/javascript" src="js/paralax-functions.js"></script>

<!--
<script type="text/javascript" src="js/skrollr.stylesheets.min.js"\></script>
<script type="text/javascript" src="js/skrollr.js"></script>
<script type="text/javascript">
    skrollr.init();
</script> -->


<!-- To display in a Modal box -->
<script type="text/javascript" src="js/jquery.nyroModal.custom.js"></script>
 <!--[if IE 6]>
 	<script type="text/javascript" src="js/jquery.nyroModal-ie6.js"></script>
 <![endif]-->
<script type="text/javascript">
	$(function() {
	  $('.nyroModal').nyroModal();
	});
</script>

<!--Visitors with out-dated browser will be informed by a little, undisturbing bar, that his browser is not up-to-date and it is recommended to update (JS Source : http://www.browser-update.org/)-->
<script type="text/javascript"> 
	var $buoop = {}; 
	$buoop.ol = window.onload; 
	window.onload=function(){ 
	 try {if ($buoop.ol) $buoop.ol();}catch (e) {} 
	 var e = document.createElement("script"); 
	 e.setAttribute("type", "text/javascript"); 
	 e.setAttribute("src", "//browser-update.org/update.js"); 
	 document.body.appendChild(e); 
	} 
</script> 

</body>

</html>
