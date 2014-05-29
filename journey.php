<!DOCTYPE html>

<html>

<head>
	<title> History of CIS </title>
	<link rel="stylesheet" type="text/css" href="css/paralax-style.css">
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/nyroModal.css">
<script type="text/javascript">
/* for url popup
<!--
function popup(url) 
{
 var width  = 300;
 var height = 200;
 var left   = (screen.width  - width)/2;
 var top    = (screen.height - height)/2;
 var params = 'width='+width+', height='+height;
 params += ', top='+top+', left='+left;
 params += ', directories=no';
 params += ', location=no';
 params += ', menubar=no';
 params += ', resizable=no';
 params += ', scrollbars=no';
 params += ', status=no';
 params += ', toolbar=no';
 newwin=window.open(url,'windowname5', params);
 if (window.focus) {newwin.focus()}
 return false;
}
// -->

and this goes in html:
			<a href="javascript: void(0)" onclick="popup('display-content.php')">Centered popup window</a>


*/
</script>
	
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
<a href="controller.php?acion=addcontent" class="nyroModal"><div class="add-content-button">+<p>click to add photo</p></div></a>

<div class="wrapper" id="skrollr-body">

<!-- for parallax testing
<div id="box1">box1</div>
<div id="box2">box2</div>
<div id="box3">box3</div>
-->
<div class="time-line" >
	<p><a href="index.php" >Home</a></p>
	<p><a href="#homesection" >Top &times</a></p>
	<p><a href="#1950" >1950 &times</a></p>
	<p><a href="#1954" >1954 &times</a></p>
	<p><a href="#1955" >1955 &times</a></p>
	<p><a href="#1956" >1956 &times</a></p>
	<p><a href="#1961" >1961 &times</a></p>
	<p><a href="#1964" >1964 &times</a></p>
	<p><a href="#1966" >1966 &times</a></p>
	<p><a href="#1969" >1969 &times</a></p>
	<p><a href="#1970" >1970 &times</a></p>
	<p><a href="#1976" >1976 &times</a></p>
	<p><a href="#1980" >1980 &times</a></p>
	<p><a href="#2014" >1989 &times</a></p>
	<p><a href="#1990" >1990 &times</a></p>
	<p><a href="#1994" >1994 &times</a></p>
	<p><a href="#1999" >1999 &times</a></p>
	<p><a href="#2002" >2002 &times</a></p>
	<p><a href="#2013" >2013 &times</a></p>
	<p><a href="#2014" >2014 &times</a></p>
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
		<div id='1950'/>
		<div class='section-heading'>
		    <p> Australia's first computer... and it begins</p>
		    <p> 1950 </p>
		</div> <!-- heading for section-->
	
		<div id="slide1-content" class="slide-content"> <!-- START slide-content -->
			
			
			<div id="content1-1" class="txt-box">
				
				<h2>The First Computer in Australia</h2>
				<p>
				Computing at the University commenced with the arrival of Australia’s first 
				(and at that time, only) computer, the CSIR Mark I. The CSIR computer had been 
				created by Trevor Pearcey and Maston Beard, of the CSIR Division of Radiophysics, 
				over the period 1947–1949. It operated successfully in that group (which was 
				located on the campus of Sydney University) from 1950 until 1955, with a 
				range of modifications and enhancements made to it during that period.
				</p>
			</div>
			
			<div id="content1-2" class="img-box">
				<img src="img/first_computer.jpg" />
				<h2>CSIRAC - Mark I</h2>
				<p>a picture of the first computer</p>
			</div>
					
		</div> <!-- END slide-content -->
		
		<div class='user-content'>
			    <?php displayYearContent('1950');?>
		</div>
		
		</div> <!-- END slide1 -->
		
</section> <!-- end section-1 -->

<section id="section-2" class="bcg"> <!-- START section-1 -->
	<div id="slide2" class="align-center slide"> <!-- start slide2 -->
		<div id='1954'/>
		<div class='section-heading'>
		    <p>1954</p>
		</div> <!-- heading for section-->
	
		<div id="slide2-content" class="slide-content"> <!-- START slide-content -->
			
			
			<div class="txt-box">
				
				<h2>CSIR Termination</h2>
				<p>
				University of Sydney planned to create its own computer, which was called SILLIAC. 
				In part because of this decision, the CSIR computing project was terminated in April 
				1954. Afterwards, University of Melbourne asked for arrangements to get the computer.
				</p>
			</div>
			
			<div class="img-box">
				<img src="img/csirac_sydney.jpg" />
				<h2>CSIRAC and Trevor Pearcy</h2>
				<p>Trevor Pearcey in front of CSIR Mk1 in Sydney 1952 ref 67</p>
			</div>

					
		</div> <!-- END slide-content -->
		
		<div class='user-content'>
			    <?php displayYearContent('1954');?>
		</div>
		
		</div> <!-- END slide2 -->
		
</section> <!-- end section-2-->

<section id="section-3" class="bcg"> <!-- START section-3 -->
	<div id="slide3" class="align-center slide"> <!-- start slide3 -->
		<div id='1955'/>
		<div class='section-heading'>
		    <p> 1955 </p>
		</div> <!-- heading for section-->
	
		<div id="slide3-content" class="slide-content"> <!-- START slide-content -->
			
			
			<div class="txt-box">
				
				<h2>Bringing down CSIR to Melbourne</h2>
				<p>
				After some deliberations, the CSIR was made available to the University of Melbourne. 
				Dr. Frank Hirst, a senior lecturer in Physics at the University of Melbourne, 
				was sent to Sydney to learn about the computer and bring it back. Hirst supervised 
				the dismantling of the CSIR Mark in Sydney and arranged it to be sent to Melbourne.
				</p>
			</div>
			
			<div class="img-box">
				<img src="img/frank_hirst.jpg" />
				<h2>Dr Frank Hirst</h2>
				<p> Hirst was placed in charge of the Computation Laboratory</p>
			</div>
			
			<div class="img-box">
				<img src="img/csirac_loaded.jpg" />
				<h2>CSIRAC Mark I</h2>
				<p> CSIRAC being loaded Uni of Sydney 1955 ref 55 </p>
			</div>
					
			
		</div> <!-- END slide-content -->
		
		<div class='user-content'>
			    <?php displayYearContent('1955');?>
		</div>
		
		</div> <!-- END slide3 -->
		
</section> <!-- end section-3 -->

<section id="section-4" class="bcg"> <!-- START section-4 -->
	<div id="slide4" class="align-center slide"> <!-- start slide4 -->
		<div id='1956'/>
		<div class='section-heading'>
		    <p> 1956 </p>
		</div> <!-- heading for section-->
	
		<div id="slide4-content" class="slide-content"> <!-- START slide-content -->
			
			
			<div class="txt-box">
				
				<h2>February, Programming courses commenced </h2>
				<p>
				The first programming courses was undergoing before the computer was fully 
				re-commissioned. This is also before the set up of a computing laboratory, 
				which will be created later in this timeline. 
				</p>
			</div>
			
			<div class="txt-box">
				
				<h2> June 14 ~ Introducing CSIRAC</h2>
				<p>
				At a ceremony, Sir Ian Clunies-Ross, Chair of the CSIRO, certified the indefinite 
				loan of the CSIR MArk I to the University of Melbourne. Then, the computer, which 
				is still the only operation computer in Australia, was renamed CSIRAC. After the 
				ceremony, CSIRAC was formally reopened. Vice Chancellor Professor Paton pressed 
				the “on” button.
				
				When turned on, it executed a simple program that had been pre-loaded by Ron Bowles, 
				which output this message at five characters a second…
				</p>
				<p>						 	 	 		
				Mr Vice Chancellor,
				Thank you for declaring me open. I can add, subtract, and multiply; solve linear and differential equations; play a mediocre game of chess and also some music. 
				</p>
				<p>
				CSIRAC went on to be used for another maintained for another eight years. It completed around thirty thousand hours of operations, with an average unavailability of just 10% of operational time. This means that CSIRAC ran operations approximately 10 hours for every single day for more than eight years.

				CSIRAC Specs: 256 20bit “words” of memory. Magnetic drum for 1024 words of storage. It had 2000 valves, which could compute around 1000 operations per second. Required 30kW of power. Weighed approximately two tonnes.
				</p>
			</div>
			
			<div class="img-box">
				<img src="img/csirac_melb.jpg" />
				<h2>CSIRAC in Melbourne</h2>
				<p>John Spencer (l), Bowles,Semkiw with CSIRAC at Museum Victo</p>
			</div>
			
			<div class="txt-box">
				
				<h2>September ~ Computer Lab at the University</h2>
				<p>
				The CSIRAC was then set up in a newly created “Computation Laboratory” in the 
				School of Natural Philosophy Building, which is now known as Old Physics. Hirst 
				was placed in charge of the Computation Laboratory along with two engineers, 
				Ron Bowles from Sydney and Jurij (George) Semkiw who knew Hirst while taking 
				a course at Melbourne Technical College (now RMIT).
				
				Academic computing operations in the University were conducted in the 
				Computation LAboratory, subsequently renamed the Computation Department

				</p>
			</div>
			
			<div class="img-box">
				<img src="img/jurij.jpg" />
				<h2>Jurij Semkov</h2>
				<p>Jurij Semkiw displaying mercury delay line c1956 ref 54</p>
			</div>
			<div class="img-box">
				<img src="img/ron.jpg" />
				<h2>Ron Bowles</h2>
				<p>Ron Bowles adjusting Main Clock frequency 15 June 1956 ref 4</p>
			</div>

			
		</div> <!-- END slide-content -->
		
		<div class='user-content'>
			    <?php displayYearContent('1956');?>
		</div>
		
		</div> <!-- END slide4 -->
		
</section> <!-- end section-4 -->

<section id="section-5" class="bcg"> <!-- START section-5 -->
	<div id="slide5" class="align-center slide"> <!-- start slide5 -->
		<div id='1961'/>
		<div class='section-heading'>
		    <p> 1961 </p>
		</div> <!-- heading for section-->
	
		<div id="slide5-content" class="slide-content"> <!-- START slide-content -->
			
			
			<div class="txt-box">
				
				<h2>Contribution to Research</h2>
				<p>
				The Computer Laboratory provided computing service to the University, to 
				CSIRO staff, and even to the wider community. Moreover, it also provided 
				academic courses and undertook research. One CSIRO staff member, Geoff Hill, 
				a research on programming languages. He wrote and implemented an early 
				high-level language, the Interprogram. In 1961, Hill’s PhD thesis titled 
				“Advance Programming of Digital Computer” was among the first “computer 
				science” doctorate awarded in Australia.
				
				The Computer Laboratory was also used by University staff outside the field 
				of computer science. For example, it was used for pioneering work in loan 
				repayment scheduling, weather forecasting, civil engineering, and many other 
				projects.

				</p>
			</div>

		</div> <!-- END slide-content -->
		
		<div class='user-content'>
			    <?php displayYearContent('1961');?>
		</div>
		
		</div> <!-- END slide5 -->
		
</section> <!-- end section-5 -->

<section id="section-6" class="bcg"> <!-- START section-6 -->
	<div id="slide6" class="align-center slide"> <!-- start slide6 -->
		<div id='1964'/>
		<div class='section-heading'>
		    <p> 1964 </p>
		</div> <!-- heading for section-->
	
		<div id="slide6-content" class="slide-content"> <!-- START slide-content -->
			
			
			<div class="txt-box">
				
				<h2>Second Machine for the University</h2>
				<p>
				An IBM 7044 machine was acquired by the University of Melbourne. It was housed 
				initially in IBM premises in St Kilda. Using this new facility, Fortran IV 
				programming was introduced. This greatly increased the scope of computations 
				that could be done.
				
				The IBM 7044 was a batch processing machine using punched card input and magnetic 
				tape storage. It had 32,768 36-bit words, could add two numbers in five 
				microseconds, could print at 600 lines per minute, and could read/punch cards 
				at 800/250 per minute. It was used for teaching, research, and commercial 
				processing.  
				</p>
			</div>
			
			<div class="img-box">
				<img src="img/ron2.jpg" />
				<h2>IBM 7044</h2>
				<p>Ron Bowles at controls of IBM 7044 1401 1964 ref 35</p>
			</div>
					
			<div class="txt-box">
				
				<h2> 24 November. Good bye, CSIRAC!</h2>
				<p>
				CSIRAC was decommissioned. It was carefully dismantled and stored. It was 
				displayed at Caulfield Institute from 1980 to 1992. THen it returned to 
				storage for another 4 years. In 1996, it was displayed at the University of 
				Melbourne for several months as part of a fortieth anniversary celebration. 
				Since 2000, CSIRAC is now a significant attraction at the new Melbourne Museum.
				Contributors of CSIRAC:

				Frank Hirst, Bill Flower, Rex Harris, Alfs Berztiss, Jurij (George) Semkiw, 
				Ron Bowles, Peter Thorne, and Kay Sullivan.
				</p>
			</div>
			
			
		</div> <!-- END slide-content -->
		
		<div class='user-content'>
			    <?php displayYearContent('1964');?>
		</div>
		
		</div> <!-- END slide6 -->
		
</section> <!-- end section-6 -->

<section id="section-7" class="bcg"> <!-- START section-7 -->
	<div id="slide7" class="align-center slide"> <!-- start slide7 -->
		<div id='1966'/>
		<div class='section-heading'>
		    <p>1966 </p>
		</div> <!-- heading for section-->
	
		<div id="slide7-content" class="slide-content"> <!-- START slide-content -->
			
			
			<div class="txt-box">
				
				<h2>1966 Minicomputers, the PDP-8</h2>
				<p>
				Biophysicist David Dewhurst needed computing support for his research. Thus a 
				minicomputer, the PDP-8, was purchased. Dewhurst later on was a contributor to 
				the bionic ear project.
				
				In 1967, a second PDP-8 was purchased for departmental research and postgraduate
				teaching. After this purchase, there was a surge of popularity for the department. 
				An increasing number of postgraduate students undertook research studies in 
				the department. At one stage, the department had more enrolled computation 
				research students than in the rest of Australia, combined.
				</p>
				
			</div>
			
			<div class="img-box">
				<img src="img/pdp_8.jpg" />
				<h2>The PDP-8</h2>
				<p>Uni of Melbourne's first Digital PDP-8 minicomputer 1967 co</p>
			</div>
					
			<div class="txt-box">
				
				<h2>Late 1960s Computing for First Year Students</h2>
				<p>
				With the popularity the postgraduate in computer science, the University 
				considered adding subjects in undergraduate studies. Since the late 1960s, 
				new computing subjects were developed and tested as part of the Bachelor of 
				Science degree. It started specialist subjects for third years, then subjects 
				for second years, and finally in 1970, computing subjects were available for 
				first year students.
				</p>
			</div>
			
		</div> <!-- END slide-content -->
		
		<div class='user-content'>
			    <?php displayYearContent('1966');?>
		</div>
		
		</div> <!-- END slide7 -->
		
</section> <!-- end section-7 -->

<section id="section-8" class="bcg"> <!-- START section-8 -->
	<div id="slide8" class="align-center slide"> <!-- start slide8 -->
		<div id='1969'/>
		<div class='section-heading'>
		    <p> 1969 </p>
		</div> <!-- heading for section-->
	
		<div id="slide8-content" class="slide-content"> <!-- START slide-content -->
			
			
			<div class="txt-box">
				
				<h2>The new department</h2>
				<p>
				The University took the decision to split the Computation Department into two 
				components. A computing services component and a teaching unit called the 
				Department of Information Science, located in the Faculty of Science. The two 
				departments did not immediately settled after the changes. At this time, Dr. 
				Frank Hirst was invited to take up the foundation chair in computing at the 
				University of Adelaide, creating vacancies at the top of both units. Bill 
				Flower was appointed as Acting Head of Information Science, with Rex Harris, 
				Peter Thorne, and Ian Robinson as staff members. So far, the computing services 
				component has not been settled with this arrangment.
				</p>
			</div>
		    
		</div> <!-- END slide-content -->
		
		<div class='user-content'>
			    <?php displayYearContent('1969');?>
		</div>
		
		</div> <!-- END slide8 -->
		
</section> <!-- end section-8 -->

<section id="section-9" class="bcg"> <!-- START section-9 -->
	<div id="slide9" class="align-center slide"> <!-- start slide9 -->
		<div id='1970'/>
		<div class='section-heading'>
		    <p> 1970 </p>
		</div> <!-- heading for section-->
	
		<div id="slide9-content" class="slide-content"> <!-- START slide-content -->
			
			
			<div class="txt-box">
				
				<h2> Early 1970 The Computer Centre</h2>
				<p>
					The splitted Computation Department arrangements were settled enough for 
					the University to move to appoint someone to head the service function – to 
					be called the Computer Centre. The Computer Centre was responsible for
					running the University’s main digital computing resource - the IBM 7044/1401. 
					The University also used an ICL 1004 for certain administrative task.
					
					To explore the development of additional computerised administrative 
					functions, the University purchased time on an IBM 360/30 at one of the 
					banks in Melbourne.

				</p>
			</div>
					
		</div> <!-- END slide-content -->
		
		<div class='user-content'>
			    <?php displayYearContent('1970');?>
		</div>
		
		</div> <!-- END slide9 -->
		
</section> <!-- end section-9 -->

<section id="section-10" class="bcg"> <!-- START section-10 -->
	<div id="slide10" class="align-center slide"> <!-- start slide10 -->
		<div id='1976'/>
		<div class='section-heading'>
		    <p> 1976 </p>
		</div> <!-- heading for section-->
	
		<div id="slide10-content" class="slide-content"> <!-- START slide-content -->
			
			
			<div class="txt-box">
				
				<h2>1975-1976 New Computing Subjects</h2>
				<p>
				These years was filled by the design and approval of a range of subjects to 
				be taught into the BSc and BA programs of the university. A large portion of 
				the new curriculum was adopted from the University of Illinois. The majority 
				of the subjects were taught for the first time in 1977.
				
				A period of rapid growth ensued, as the exciting new discipline caught the 
				attention of both undergraduate and postgraduate students.
				
				The new subjects cover areas from numerical computing through to compiler 
				design through to artificial intelligence. Honours was also available in
				both the BA and BSc. This is what became the combined degree programs which 
				was introduced in 1987.
				</p>
			</div>
		
			<div class="txt-box">
				
				<h2>The Department’s Trendy Name</h2>
				<p>
				In August 1975, Professor Peter C. Poole commenced as the foundation chair 
				of computing at the University of Melbourne. In 1976, Poole requested a name 
				change for the Department to become the Computer Science Department. This brings 
				the department name in line with the trend in English and North American 
				universities.
				</p>
			</div>
			
			<div class="txt-box">
				
				<h2>Computer Science Research Improvements</h2>
				<p>
				Professor Poole had argued for signiicant injection of funds into computer 
				science, by way of the largest setting-up grant ever awarded at the 
				University. As a result, Poole was able to make three immediate academic 
				appointments: Lloyd Allison, Jean-Louis Lassez, and Prabhaker Mateti. 
				Poole also purchased a new computer to be used for departmental research 
				purposes.All undergraduate teaching continued to be carried out on machines 
				owned by the Copmuter Centre.

				</p>
			</div>
			
		</div> <!-- END slide-content -->
		<div class='user-content'>
			    <?php displayYearContent('1976');?>
		</div>
		</div> <!-- END slide10 -->
		
</section> <!-- end section-10 -->

<section id="section-11" class="bcg"> <!-- START section-11 -->
	<div id="slide11" class="align-center slide"> <!-- start slide11 -->
		<div id='1980'/>
		<div class='section-heading'>
		    <p> 1980 </p>
		</div> <!-- heading for section-->
	
		<div id="slide11-content" class="slide-content"> <!-- START slide-content -->
				
			
			<div class="txt-box">
				
				<h2>Surge of staff members</h2>
				<p>
				As student numbers grew, so did the staff. A lot of new staff joined the 
				department, including: Rao Kotagiri, John Lloyd, Rodney Topor, Iain Morrison, 
				Justin Zobel, Liz Sonenberg, T.Y. Chen, Alistair Moffat. Most of them went 
				on and become a lecturer at the university.
				
				Many other staff appointments in the technical and administrative areas 
				were also made. This includes Julien Reid, Pinoo Bharucha, David Hornsby, 
				John Horvath, Andrew Peel, and Thomas Weichert. Many of these staffs are 
				still members of the department.
				</p>
			</div>
			
			<div class="txt-box">
				
				<h2>The kre (1980's)</h2>
				<p>
				Professor Poole saw an important role of open source operating systems. 
				To do more research on this area, he appointed K. Robert Elz (widely known 
				as kre)to do work on the development of the Berkeley Unix systems that 
				ran on the newly purchased VAX 11/780. KRE went on to become a very 
				important figure in Australian computing.
				</p>
			</div>
			
			
			<div class="txt-box">
				
				<h2> Internet and Email in Australia (1980's)</h2>
				<p>
				K. Robert Elz was a pivotal figure in establishing electronic mail links 
				between Australia and the rest of the world. Moreover, Elz also had role 
				in bringing the internet to Australia. He also managed all the internet 
				domain name registrations in Australia for several years.
				</p>
			</div>
			
			<div class="img-box">
				<img src="img/kre.jpg" />
				<h2> K. Robert Elz</h2>
				<p>The man who connected Australia to the internet</p>
			</div>
			
			<div class="img-box">
				<img src="img/penington.jpg" />
				<h2> Professor Emeritus David Geoffrey Penington </h2>
				<p>Vice-Chancellor of the University of Melbourne from 1988 to 1995</p>
			</div>
			
			
			
		</div> <!-- END slide-content -->
		
		<div class='user-content'>
			    <?php displayYearContent('1980');?>
		</div>
		
		</div> <!-- END slide11 -->
</section> <!-- end section-11 -->

<section id="section-12" class="bcg"> <!-- START section-12 -->
	<div id="slide12" class="align-center slide"> <!-- start slide12 -->
		<div id='1989'/>
		<div class='section-heading'>
		    <p> 1989 </p>
		</div> <!-- heading for section-->
	
		<div id="slide12-content" class="slide-content"> <!-- START slide-content -->
			
		<div class="txt-box">
				
				<h2> One computer for every desk (1989)</h2>
				<p>
				Professor Poole advised the Vice Chancellor, Professor David Penington, 
				that a networked computer on every desk was a vision worth pursuing. 
				Afterwards, Macintosh computers was arranged.
				
				The late 1980s also marked the beginnings of the multi-media revolution. 
				Anecdote: Poole was very enthusiastic of all things “multi”. 
					
				At one memorable departmental teaching committee meeting, discussing 
				(in the absence of Poole) a number of curriculum related issues, a 
				staff member re- marked that anytime you wanted Poole to appear, you 
				simply chanted “multi-media, multi-media, multi-media”. There was enormous 
				hilarity when Poole entered the room just a few seconds later. 

				</p>
			</div>
			
					
		</div> <!-- END slide-content -->
		
		<div class='user-content'>
			    <?php displayYearContent('1989');?>
		</div>
		
		</div> <!-- END slide12 -->
		
</section> <!-- end section-12 -->

<section id="section-13" class="bcg"> <!-- START section-13 -->
	<div id="slide13" class="align-center slide"> <!-- start slide13 -->
		<div id='1990'/>
		<div class='section-heading'>
		    <p> 1990 </p>
		</div> <!-- heading for section-->
	
		<div id="slide13-content" class="slide-content"> <!-- START slide-content -->
			
			
			<div class="txt-box">
				
				<h2> Computing under Faculty of Engineering </h2>
				<p>
				Professor Poole was involved in a review of the Department of Electrical Engineering. The review suggested a revamp to the management structure of the electrical engineering area. It was suggested that a School of Information Technology and Electrical Engineering (SITEE) be formed within the Faculty Engineering.   
				</p>
			</div>
			
			<div class="txt-box">
				
				<h2>World-Class Facilities</h2>
				<p>
				In 1990, Peter Throne became the new head of the Department of Computer Science. 
One of Thorne’s most important contributions during the early 1990s was his work with the architects designing a new building for the Department. Throughout the 1980s the Department had jostled and jousted with the Departments of Mathematics and Statistics in the Richard Berry Building, with space acquired in a range of “deals”, and sometimes by adverse possession. The new building, in Bouverie Street, was a chance to obtain world-class facilities for staff and students, and Thorne (as- sisted by technical staff Robert Elz, David Hornsby, and Andrew Peel) invested enormous effort into the design, construction, and the eventual move in July 1993.
				</p>
				
			</div>
					
			<div class="img-box">
				<img src="img/peter_thorne.jpg" />
				<h2>Peter Thorne (1999)</h2>
				<p>The Head of the CS department from 1990</p>
			</div>
					
		</div> <!-- END slide-content -->
		
		<div class='user-content'>
			    <?php displayYearContent('1990');?>
		</div>
		
		</div> <!-- END slide13 -->
		
</section> <!-- end section-13 -->

<section id="section-14" class="bcg"> <!-- START section-14 -->
	<div id="slide14" class="align-center slide"> <!-- start slide14 -->
		<div id='1994'/>
		<div class='section-heading'>
		    <p> 1994 </p>
		</div> <!-- heading for section-->
	
		<div id="slide14-content" class="slide-content"> <!-- START slide-content -->
			
			
			<div class="txt-box">
				
				<h2>Department of Information Systems</h2>
				<p>
				The Department of Information Systems was formed in the Faculty of Science, with the focus of teaching Information Systems. The first students of the department were enrolled in 1995.
				</p>
				
			</div>
					
			 
					
		</div> <!-- END slide-content -->
		
		<div class='user-content'>
			    <?php displayYearContent('1994');?>
		</div>
		
		</div> <!-- END slide14 -->
		
</section> <!-- end section-14 -->

<section id="section-15" class="bcg"> <!-- START section-15 -->
	<div id="slide15" class="align-center slide"> <!-- start slide15 -->
		<div id='1999'/>
		<div class='section-heading'>
		    <p> 1999 </p>
		</div> <!-- heading for section-->
	
		<div id="slide15-content" class="slide-content"> <!-- START slide-content -->
			
			
			<div class="txt-box">
				
				<h2>The emerging of Software Engineering</h2>
				<p>
				Another department name change came in 1999. The new name – Computer Science and Software Engineering – reflected a growing acceptance of the positioning of the Department within the Faculty of Engineering, and a growing maturity in its understanding of the educational requirements of software engineers. The BE(SE) program was provisionally accredited by IEAust (now Engineers Australia) in late 1993, and fully accredited in November 1996; and was the first such program in Australia to be accredited. 
				</p>
			</div>
					
			
			<div class="txt-box">
				
				<h2>December The Melbourne IT</h2>
				<p>
                Elz’s success in establishing guidelines and system for internet domain name registration was an essential part in the sucess of the company Melbourne IT. The company started with an original investment of $350.000. In December 1999, the company raised nearly 80 million dollars for the University at the height of the internet boom.
				</p>
			</div>
					
					

			 
					
		</div> <!-- END slide-content -->
		
		<div class='user-content'>
			    <?php displayYearContent('1999');?>
		</div>
		
		</div> <!-- END slide15 -->
		
</section> <!-- end section-15 -->

<section id="section-16" class="bcg"> <!-- START section-16 -->
	<div id="slide16" class="align-center slide"> <!-- start slide16 -->
		<div id='2002'/>
		<div class='section-heading'>
		    <p> 2002 </p>
		</div> <!-- heading for section-->
	
		<div id="slide16-content" class="slide-content"> <!-- START slide-content -->
			
			
			<div class="txt-box">
				
				<h2>New Head of Department: Professor Rao Kotagiri </h2>
				<p>
				Kotagiri’s experience as a researcher led in 2004 to the establishment of a NICTA (National ICT Australia) node at the University, jointly housed with the Department of Electrical and Electronics Engineering. This large research initiative, with multiple linkages, and the ability to support both additional research staff and postgraduate students, was a considerable coup, and provided the potential for a significant boost in research profile, and for a shift in the balance between undergraduate and postgraduate teaching. In 2006, with additional support from the Victorian State Government, the NICTA funding agreement was extended into the life sciences area.
				</p>
			</div>
			
			<div class="img-box">
				<img src="img/p3.jpg" />
				<h2>Heads of Computer Science in fron of the new building</h2>
				<p> 
				Bill Flower (1970-1975), Peter C. Poole (1975-1990), Peter Thorne (1990-1996), Leon Sterling (1996-2002), and Rao Kotagiri (2002-2006?)
				</p>
			
			</div>
			
			<div class="img-box">
				<img src="img/ict_building.jpg" />
				<h2>New Building (December 2002)</h2>
				<p>Located at 111 Barry St, Melbourne</p>
			</div>
			
			<div class="txt-box">
				
				<h2>CIS new location ~ December</h2>
				<p>
                The new ICT Building at 111 Barry Street – denoted as “Building B” on the plans for the University Square development – was designed by Metier 3 for the developer Equiset, and built by Grocon. The fit-out was designed for the two departments by Lyons Architects and built by L U Simon Builders, at a further cost of approximately $20 million. The project commenced in 1999, the building was completed mid-2001, and the fitout completed in late 2002.
                University facilities in the building include lecture theatres of 180, 80, and 80 seats; an adjacent foyer area for functions; three computer tutorial rooms equipped with projection whiteboards and designed for collaborative learning; and another twelve tutorial rooms. The two departments also share a pool of project rooms for student meetings; a range of student study areas, some equipped with network data points; a staff common room; a seminar room; a range of meeting rooms; and a dedicated computer room. As well, each of the two departments has extensive laboratory space for undergraduate students; staff research laboratories; and space to house large numbers of postgraduate research students.
				</p>
			</div>
					
			
					
		</div> <!-- END slide-content -->
		
		<div class='user-content'>
			    <?php displayYearContent('2002');?>
		</div>
		
		</div> <!-- END slide16 -->
		
</section> <!-- end section-16 -->

<section id="section-17" class="bcg"> <!-- START section-17 -->
	<div id="slide17" class="align-center slide"> <!-- start slide17 -->
		<div id='2013'/>
		<div class='section-heading'>
		    <p> 2013 </p>
		</div> <!-- heading for section-->
	
		<div id="slide17-content" class="slide-content"> <!-- START slide-content -->
			
			
			<div class="txt-box">
				
				<h2>The New Microsoft  Research Centre for Social NUI (Natural User Interface) at Melbourne University
                </h2>
				
				<p>
				
				The centre for Social NUI is a research partnership between Microsoft and the University of Melbourne, with support from the Victorian State Government. It is a centre for academics and students wishing to collaborate with leading researchers dedicated to understanding and creating NUI for social interactions.
                
                For more information about this new research centre : <a href='http://www.socialnui.unimelb.edu.au/'>www.socialnui.unimelb.edu.au</a>
			    
				</p>
			</div>
					
			 
					
		</div> <!-- END slide-content -->
		
		<div class='user-content'>
			    <?php displayYearContent('2013');?>
		</div>
		
		</div> <!-- END slide17 -->
		
</section> <!-- end section-17 -->

<section id="section-18" class="bcg"> <!-- START section-18 -->
	<div id="slide18" class="align-center slide"> <!-- start slide18 -->
		<div id='2014'/>
		<div class='section-heading'>
		    <p> 2014 </p>
		</div> <!-- heading for section-->
	
		<div id="slide18-content" class="slide-content"> <!-- START slide-content -->
			
			
			<div class="txt-box">
				
				<h2>The CIS Department leadership</h2>
				<p>
				Professor Justin Zobel is Head of the Department of Computing & Information Systems. He received his PhD from the University of Melbourne and for many years was based in the School of CS&IT at RMIT University, where he led the Search Engine group. In 2007-8 he was a Principle Senior Researcher in NICTA, leading the Computing in Health area, and in 2010 was interim Director of the Victorian Life Sciences Computation Initiative.
                
                Since 2013, Lars Kulikis is Deputy Head of the CIS Department after his research is the fields od Spatial Information Science and Engineering.
                
                Dr Simon Milton is Associate Professor of Information Systems in the Department of Computing and Information Systems at The University of Melbourne.He received his PhD from the Department of Information Systems at the University of Tasmania in which he reported the first comprehensive analysis of data modelling languages using a common-sense realistic ontology.
                
                Professor Frank Vetere is Deputy Head (Research) in the CIS Department and lead the Interaction Design Laboratory which explores the design and use of technology across a range of human activities. He is also the Director of the Microsoft Research Centre for Social NUI at Melbourne University

				</p>
			</div>
					
					
		</div> <!-- END slide-content -->
		
		<div class='user-content'>
			    <?php displayYearContent('2014');?>
		</div>
		
		</div> <!-- END slide18 -->
		
</section> <!-- end section-18 -->

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

<script type="text/javascript" src="js/jquery.nyroModal.custom.js"></script>
 <!--[if IE 6]>
 	<script type="text/javascript" src="js/jquery.nyroModal-ie6.js"></script>
 <![endif]-->
<script type="text/javascript">
	$(function() {
	  $('.nyroModal').nyroModal();
	});
</script>

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
	
	
	displayArray($con, $result);
}

function displayArray($con, $result_ar) {
	// getting column data
	$i = 0;
	$flag = 0;
	
	while ($i < mysqli_num_rows($result_ar)) {
		$row = $result_ar->fetch_array(MYSQLI_ASSOC);
			
		$userid = $row['UserID'];
		$username = $_COOKIE['ID_my_site'];
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
		
		if (!$row || $moderated == 0) {
			//echo '<h5> No info available</h5><br>';
		}
		else {
		if ($flag == 0) {
		    echo "<h3> User's have uploaded: </h3>";
		    $flag = 1;
		}
			echo '
		<div class="user-added">
			
			<div id="content-'.$row['ID'].'" class="txt-box">';
    
			displayUserImg($username);
	        echo	'
				<div class="user-info">'.$username.'</div> 
				<div class="date">Added on <i id="fancy-date">'.$date.' </i> </div>
			
				<h2>Title: ' . $title  . '  </h2>
				<p>Year: '. $year . '  </p>
				<p>Category: '. $category . '  </p>
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

function displayUserImg($username) {
    if (file_exists('userimg/'.$username.'.jpg')) {
        echo '<img class="user-image" src="userimg/'.$username.'.jpg"/>';
    } else {
        echo '<img class="user-image" src="userimg/no-user-image4.jpg"/>';
    }
}

function displayAddedImg($dir) {
    if (file_exists($dir)) {
        echo '<img class="added-image" src="'.$dir.'"/>';
    }
}

?>

</body>

</html>