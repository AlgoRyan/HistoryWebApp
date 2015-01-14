<!--Authored by Chuqi Yang(cqyang@student.unimelb.edu.au) and Ryan Hodgman(contact.hodgman.r@gmail.com)-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>The History of CIS</title>
	<link href="http://fonts.googleapis.com/css?family=Roboto:100,400,300,700" rel="stylesheet" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Aldrich:400,300,700" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/jInvertScroll.css" />
	<link rel="stylesheet" href="css/journeyStyle.css" />
	<script type="text/javascript" src="js/JourneyPage/jquery.min.js"></script>
	<script type="text/javascript" src="js/JourneyPage/jquery.jInvertScroll.js"></script>
	<script type="text/javascript" src="js/JourneyPage/journeyCode.js"></script>
</head>
<body>
	<div class="container" id="main">
		<div id="navbar">
			<a id="nav_Home" class="line home nav_element" href="index.php">Home</a>
			<a id="nav_Intro" class="line year nav_element" href="#Intro">Intro</a>
			<a id="nav_1950" class="line year nav_element" href="#1950">1950</a>
			<a id="nav_1960" class="line year nav_element" href="#1960">1960</a>
			<a id="nav_1970" class="line year nav_element" href="#1970">1970</a>
			<a id="nav_1980" class="line year nav_element" href="#1980">1980</a>
			<a id="nav_1990" class="line year nav_element" href="#1990">1990</a>
			<a id="nav_2000" class="line year nav_element" href="#2000">2000</a>
			<a id="nav_2010" class="line year nav_element" href="#2010">2010</a>
		</div>
		
		<div class="horizon scroll">
			<img src="images/top_layer.png" alt="" />
		</div>
		
		<div class="middle scroll">
			<img src="images/bottom_layer.png" alt="" />
		</div>
		
		<div class="front scroll">
			<div id="front_page" class="page">
				<h4 id="Intro">History of CIS</h4>
				<div class="scroll-instruction">
					<img id="mouse_image" class="line" src="images/mouse_scroll.png" alt="" />
					<h5 class="line">Scroll to start journey</h5>
				</div>
				<img id="computer_image" src="images/old_computer.png" alt="" />
			</div>
			
			<!-----------------------------------------------------------------------------1950------------------>
			<div class="panel_1950 page">
				<h3 id="1950">1950</h3>
				<div class="data">
					<a href="#1" onclick="$.scrollToSubmit(this)" class="add_button">+</a>
					<h2>The First Computer in Australia</h2>
					<p>
					Computing at the University commenced with the arrival of Australia’s first 
					(and at that time, only) computer, the CSIR Mark I. The CSIR computer had been 
					created by Trevor Pearcey and Maston Beard, of the CSIR Division of Radiophysics, 
					over the period 1947–1949. It operated successfully in that group (which was 
					located on the campus of Sydney University) from 1950 until 1955, with a 
					range of modifications and enhancements made to it during that period.
					</p>
					<img class="data_img line" src="images/img_1.jpg" alt="" />
				</div>
				<div class="user_data line">
					<button type="button" class="up-button navigation-button1" onclick="$.scrollFrame(this, 'up', 2)"><i class="arrow arrow-up"></i></button>
				<button type="button" class="top-button navigation-button2" onclick="$.scrollToEnds(this, 'first', 2)"><i class="arrow arrow-up"></i><i class="arrow arrow-up double-arrow-up"></i></button>
				<button type="button" class="down-button navigation-button1" onclick="$.scrollFrame(this, 'down', 2)"><i class="arrow arrow-down"></i></button>
				<button type="button" class="bottom-button navigation-button2" onclick="$.scrollToEnds(this, 'last', 2)"><i class="arrow arrow-down"></i><i class="arrow arrow-down double-arrow-down"></i></button>
					<div class="entry_frame">
						<div class="user_entry">
							<div class="user-info">
							<img id="user-image" src="userimg/frank.jpg"/>
								<div id="user-name">frank</div>
								<div id="user-date"><i id="fancy-date">Fri May 30, 2014, 9:04 am</i></div>
							</div>
							<h2 id="user-title">Hollerith Card Punch Machine</h2>
							<img id="user-added-image" src="uploads/Hollerith Card Punch Machine c1950 ref 188.jpg"/>
							<p id="user-description">This thing was the worst to use</p>
						</div>
						<div class="user_entry">
<form action="add-content.php" method="post" enctype="multipart/form-data">
				<h2 id="user-title">Add Content</h2>
				Title:<br><input onkeydown="$.lengthWarning(this, 35)" class="input_box" name="title" type="text" size="38">
				<p class="warning_message"></p>
				Description: <textarea onkeydown="$.lengthWarning(this, 270)" class="input_box" name="description" rows="7" cols="38"></textarea>
				<p class="warning_message"></p>
				<span id="tag">Add Image: </span> <input type="file" onchange="$.readURL(this)" name="file" id="file">
				<div class="image-wrapper"><img id="user-image-preview" src="img/blank.png"/></div>
				<input type="hidden" name="category" value="none"></input>
				<input type="hidden" name="year" value="1950"></input>
				<input type="submit" name="submit" class="submit_button" value="Submit"></input>
			</form>
</div>
					</div>
				</div>
			</div>
			
			<!-----------------------------------------------------------------------------1954------------------>
			<div class="panel_1954 page">
				<h3>1954</h3>
				<div class="data">
					<a href="#1" onclick="$.scrollToSubmit(this)" class="add_button">+</a>
					<h2>CSIR Termination</h2>
					<p>
					University of Sydney planned to create its own computer, which was called SILLIAC. 
					In part because of this decision, the CSIR computing project was terminated in April 
					1954. Afterwards, University of Melbourne asked for arrangements to get the computer.
					</p>
					<img class="data_img line" src="images/img_2.jpg" alt="" />
				</div>
				<div class="user_data line">
					<button type="button" class="up-button navigation-button1" onclick="$.scrollFrame(this, 'up', 1)"><i class="arrow arrow-up"></i></button>
				<button type="button" class="top-button navigation-button2" onclick="$.scrollToEnds(this, 'first', 1)"><i class="arrow arrow-up"></i><i class="arrow arrow-up double-arrow-up"></i></button>
				<button type="button" class="down-button navigation-button1" onclick="$.scrollFrame(this, 'down', 1)"><i class="arrow arrow-down"></i></button>
				<button type="button" class="bottom-button navigation-button2" onclick="$.scrollToEnds(this, 'last', 1)"><i class="arrow arrow-down"></i><i class="arrow arrow-down double-arrow-down"></i></button>
					<div class="entry_frame">
						<div class="user_entry">
<form action="add-content.php" method="post" enctype="multipart/form-data">
				<h2 id="user-title">Add Content</h2>
				Title:<br><input onkeydown="$.lengthWarning(this, 35)" class="input_box" name="title" type="text" size="38">
				<p class="warning_message"></p>
				Description: <textarea onkeydown="$.lengthWarning(this, 270)" class="input_box" name="description" rows="7" cols="38"></textarea>
				<p class="warning_message"></p>
				<span id="tag">Add Image: </span> <input type="file" onchange="$.readURL(this)" name="file" id="file">
				<div class="image-wrapper"><img id="user-image-preview" src="img/blank.png"/></div>
				<input type="hidden" name="category" value="none"></input>
				<input type="hidden" name="year" value="1954"></input>
				<input type="submit" name="submit" class="submit_button" value="Submit"></input>
			</form>
</div>
					</div>
				</div>
			</div>
			<!-----------------------------------------------------------------------------1955------------------>
			<div class="panel_1955 page">
				<h3>1955</h3>
				<div class="data">
					<a href="#1" onclick="$.scrollToSubmit(this)" class="add_button">+</a>
					<h2>Bringing down CSIR to Melbourne</h2>
					<p>
					After some deliberations, the CSIR was made available to the University of Melbourne. 
					Dr. Frank Hirst, a senior lecturer in Physics at the University of Melbourne, 
					was sent to Sydney to learn about the computer and bring it back. Hirst supervised 
					the dismantling of the CSIR Mark in Sydney and arranged it to be sent to Melbourne.
					</p>
					<img class="data_img line" src="images/img_3_1.jpg" alt="" />
					<img class="data_img line" src="images/img_3_2.jpg" alt="" />
				</div>
				<div class="user_data line">
					<button type="button" class="up-button navigation-button1" onclick="$.scrollFrame(this, 'up', 2)"><i class="arrow arrow-up"></i></button>
				<button type="button" class="top-button navigation-button2" onclick="$.scrollToEnds(this, 'first', 2)"><i class="arrow arrow-up"></i><i class="arrow arrow-up double-arrow-up"></i></button>
				<button type="button" class="down-button navigation-button1" onclick="$.scrollFrame(this, 'down', 2)"><i class="arrow arrow-down"></i></button>
				<button type="button" class="bottom-button navigation-button2" onclick="$.scrollToEnds(this, 'last', 2)"><i class="arrow arrow-down"></i><i class="arrow arrow-down double-arrow-down"></i></button>
					<div class="entry_frame">
						<div class="user_entry">
							<div class="user-info">
							<img id="user-image" src="userimg/cbosua.jpg"/>
								<div id="user-name">cbosua</div>
								<div id="user-date"><i id="fancy-date">Fri May 30, 2014, 8:59 am</i></div>
							</div>
							<h2 id="user-title">The CSIRAC Mark I</h2>
							<img id="user-added-image" src="uploads/CSIRAC on semi-trailer June 1955 ref 56.jpg"/>
							<p id="user-description">This is how we transported the computer. IT was SO big!</p>
						</div>
						<div class="user_entry">
<form action="add-content.php" method="post" enctype="multipart/form-data">
				<h2 id="user-title">Add Content</h2>
				Title:<br><input onkeydown="$.lengthWarning(this, 35)" class="input_box" name="title" type="text" size="38">
				<p class="warning_message"></p>
				Description: <textarea onkeydown="$.lengthWarning(this, 270)" class="input_box" name="description" rows="7" cols="38"></textarea>
				<p class="warning_message"></p>
				<span id="tag">Add Image: </span> <input type="file" onchange="$.readURL(this)" name="file" id="file">
				<div class="image-wrapper"><img id="user-image-preview" src="img/blank.png"/></div>
				<input type="hidden" name="category" value="none"></input>
				<input type="hidden" name="year" value="1955"></input>
				<input type="submit" name="submit" class="submit_button" value="Submit"></input>
			</form>
</div>
					</div>
				</div>
			</div>
			
			<!-----------------------------------------------------------------------------1956------------------>
			<div class="panel_1956 page">
				<h3>1956</h3>
				<div class="data">
					<h2>February, Programming courses commenced </h2>
					<p>
					The first programming courses was undergoing before the computer was fully 
					re-commissioned. This is also before the set up of a computing laboratory, 
					which will be created later in this timeline. 
					</p>
					<img class="data_img line" src="img/csirac_melb.jpg" alt="" />
				</div>
				<div class="data">
					<h2> June 14 ~ Introducing CSIRAC</h2>
					<p>
					At a ceremony, Sir Ian Clunies-Ross, Chair of the CSIRO, certified the indefinite 
					loan of the CSIR MArk I to the University of Melbourne. Then, the computer, which 
					is still the only operation computer in Australia, was renamed CSIRAC. After the 
					ceremony, CSIRAC was formally reopened. Vice Chancellor Professor Paton pressed 
					the button.
				
					When turned on, it executed a simple program that had been pre-loaded by Ron Bowles, 
					which output this message at five characters a second…
					</p>
					<p>						 	 	 		
					Mr Vice Chancellor,
					Thank you for declaring me open. I can add, subtract, and multiply; solve linear and differential equations; play a mediocre game of chess and also some music. 
					</p>
					<p>
					CSIRAC went on to be used for another maintained for another eight years. It completed around thirty thousand hours of operations, with an average unavailability of just 10% of operational time. This means that CSIRAC ran operations approximately 10 hours for every single day for more than eight years.
					CSIRAC Specs: 256 20bit of memory. Magnetic drum for 1024 words of storage. It had 2000 valves, which could compute around 1000 operations per second. Required 30kW of power. Weighed approximately two tonnes.
					</p>
				</div>
				<div class="data">
					<a href="#1" onclick="$.scrollToSubmit(this)" class="add_button">+</a>
					<h2>September ~ Computer Lab at the University</h2>
					<p>
					The CSIRAC was then set up in a newly created Computation Laboratory in the 
					School of Natural Philosophy Building, which is now known as Old Physics. Hirst 
					was placed in charge of the Computation Laboratory along with two engineers, 
					Ron Bowles from Sydney and Jurij (George) Semkiw who knew Hirst while taking 
					a course at Melbourne Technical College (now RMIT).
				
					Academic computing operations in the University were conducted in the 
					Computation LAboratory, subsequently renamed the Computation Department
					</p>
					<img class="data_img line" src="img/jurij.jpg" alt="" />
					<img class="data_img line" src="img/ron.jpg" alt="" />
				</div>
				<div class="user_data line">
					<button type="button" class="up-button navigation-button1" onclick="$.scrollFrame(this, 'up', 5)"><i class="arrow arrow-up"></i></button>
				<button type="button" class="top-button navigation-button2" onclick="$.scrollToEnds(this, 'first', 5)"><i class="arrow arrow-up"></i><i class="arrow arrow-up double-arrow-up"></i></button>
				<button type="button" class="down-button navigation-button1" onclick="$.scrollFrame(this, 'down', 5)"><i class="arrow arrow-down"></i></button>
				<button type="button" class="bottom-button navigation-button2" onclick="$.scrollToEnds(this, 'last', 5)"><i class="arrow arrow-down"></i><i class="arrow arrow-down double-arrow-down"></i></button>
					<div class="entry_frame">
						<div class="user_entry">
							<div class="user-info">
							<img id="user-image" src="userimg/no-user-image4.jpg"/>
								<div id="user-name">cat</div>
								<div id="user-date"><i id="fancy-date">Thu May 29, 2014, 1:04 am</i></div>
							</div>
							<h2 id="user-title">Beuatiful landscape</h2>
							<img id="user-added-image" src="uploads/reflexos_2-wallpaper-1280x800.jpg"/>
							<p id="user-description">just a beautiful landscape pic</p>
						</div>
						<div class="user_entry">
							<div class="user-info">
							<img id="user-image" src="userimg/no-user-image4.jpg"/>
								<div id="user-name">cat</div>
								<div id="user-date"><i id="fancy-date">Thu May 29, 2014, 1:08 am</i></div>
							</div>
							<h2 id="user-title">another test</h2>
							<img id="user-added-image" src="uploads/alligator-belly-521114-lw.jpg"/>
							<p id="user-description">test pic</p>
						</div>
						<div class="user_entry">
							<div class="user-info">
							<img id="user-image" src="userimg/frank.jpg"/>
								<div id="user-name">frank</div>
								<div id="user-date"><i id="fancy-date">Fri May 30, 2014, 9:05 am</i></div>
							</div>
							<h2 id="user-title">Control Panel</h2>
							<img id="user-added-image" src="uploads/Control panel on console c1956 ref 49.jpg"/>
							<p id="user-description">A control panel built by my supervisor. I got to be involved with the design. Was so cool in the day.</p>
						</div>
						<div class="user_entry">
							<div class="user-info">
							<img id="user-image" src="userimg/frank.jpg"/>
								<div id="user-name">frank</div>
								<div id="user-date"><i id="fancy-date">Fri May 30, 2014, 9:06 am</i></div>
							</div>
							<h2 id="user-title">Hole Tape Reader</h2>
							<img id="user-added-image" src="uploads/12hole tape reader c1956 ref 43.jpg"/>
							<p id="user-description">This thing is ancient</p>
						</div>
						<div class="user_entry">
<form action="add-content.php" method="post" enctype="multipart/form-data">
				<h2 id="user-title">Add Content</h2>
				Title:<br><input onkeydown="$.lengthWarning(this, 35)" class="input_box" name="title" type="text" size="38">
				<p class="warning_message"></p>
				Description: <textarea onkeydown="$.lengthWarning(this, 270)" class="input_box" name="description" rows="7" cols="38"></textarea>
				<p class="warning_message"></p>
				<span id="tag">Add Image: </span> <input type="file" onchange="$.readURL(this)" name="file" id="file">
				<div class="image-wrapper"><img id="user-image-preview" src="img/blank.png"/></div>
				<input type="hidden" name="category" value="none"></input>
				<input type="hidden" name="year" value="1956"></input>
				<input type="submit" name="submit" class="submit_button" value="Submit"></input>
			</form>
</div>
					</div>
				</div>
			</div>
			
			<!-----------------------------------------------------------------------------1961------------------>
			<div class="panel_1961 page">
				<h3 id="1960">1961</h3>
				<div class="data">
					<a href="#1" onclick="$.scrollToSubmit(this)" class="add_button">+</a>
					<h2>Contribution to Research</h2>
					<p>
					The Computer Laboratory provided computing service to the University, to 
					CSIRO staff, and even to the wider community. Moreover, it also provided 
					academic courses and undertook research. One CSIRO staff member, Geoff Hill, 
					a research on programming languages. He wrote and implemented an early 
					high-level language, the Interprogram. In 1961, Hill’s PhD thesis titled 
					Advance Programming of Digital Computer was among the first computer 
					science doctorate awarded in Australia.
				
					The Computer Laboratory was also used by University staff outside the field 
					of computer science. For example, it was used for pioneering work in loan 
					repayment scheduling, weather forecasting, civil engineering, and many other 
					projects.

				</p>
				</div>
				<div class="user_data line">
					<button type="button" class="up-button navigation-button1" onclick="$.scrollFrame(this, 'up', 1)"><i class="arrow arrow-up"></i></button>
				<button type="button" class="top-button navigation-button2" onclick="$.scrollToEnds(this, 'first', 1)"><i class="arrow arrow-up"></i><i class="arrow arrow-up double-arrow-up"></i></button>
				<button type="button" class="down-button navigation-button1" onclick="$.scrollFrame(this, 'down', 1)"><i class="arrow arrow-down"></i></button>
				<button type="button" class="bottom-button navigation-button2" onclick="$.scrollToEnds(this, 'last', 1)"><i class="arrow arrow-down"></i><i class="arrow arrow-down double-arrow-down"></i></button>
					<div class="entry_frame">
						<div class="user_entry">
<form action="add-content.php" method="post" enctype="multipart/form-data">
				<h2 id="user-title">Add Content</h2>
				Title:<br><input onkeydown="$.lengthWarning(this, 35)" class="input_box" name="title" type="text" size="38">
				<p class="warning_message"></p>
				Description: <textarea onkeydown="$.lengthWarning(this, 270)" class="input_box" name="description" rows="7" cols="38"></textarea>
				<p class="warning_message"></p>
				<span id="tag">Add Image: </span> <input type="file" onchange="$.readURL(this)" name="file" id="file">
				<div class="image-wrapper"><img id="user-image-preview" src="img/blank.png"/></div>
				<input type="hidden" name="category" value="none"></input>
				<input type="hidden" name="year" value="1961"></input>
				<input type="submit" name="submit" class="submit_button" value="Submit"></input>
			</form>
</div>
					</div>
				</div>
			</div>
			
			<!-----------------------------------------------------------------------------1964------------------>
			<div class="panel_1964 page">
				<h3>1964</h3>
				<div class="data">
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
					<img class="data_img line" src="img/ron2.jpg" alt="" />
				</div>
				<div class="data">
					<a href="#1" onclick="$.scrollToSubmit(this)" class="add_button">+</a>
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
				<div class="user_data line">
					<button type="button" class="up-button navigation-button1" onclick="$.scrollFrame(this, 'up', 1)"><i class="arrow arrow-up"></i></button>
				<button type="button" class="top-button navigation-button2" onclick="$.scrollToEnds(this, 'first', 1)"><i class="arrow arrow-up"></i><i class="arrow arrow-up double-arrow-up"></i></button>
				<button type="button" class="down-button navigation-button1" onclick="$.scrollFrame(this, 'down', 1)"><i class="arrow arrow-down"></i></button>
				<button type="button" class="bottom-button navigation-button2" onclick="$.scrollToEnds(this, 'last', 1)"><i class="arrow arrow-down"></i><i class="arrow arrow-down double-arrow-down"></i></button>
					<div class="entry_frame">
						<div class="user_entry">
<form action="add-content.php" method="post" enctype="multipart/form-data">
				<h2 id="user-title">Add Content</h2>
				Title:<br><input onkeydown="$.lengthWarning(this, 35)" class="input_box" name="title" type="text" size="38">
				<p class="warning_message"></p>
				Description: <textarea onkeydown="$.lengthWarning(this, 270)" class="input_box" name="description" rows="7" cols="38"></textarea>
				<p class="warning_message"></p>
				<span id="tag">Add Image: </span> <input type="file" onchange="$.readURL(this)" name="file" id="file">
				<div class="image-wrapper"><img id="user-image-preview" src="img/blank.png"/></div>
				<input type="hidden" name="category" value="none"></input>
				<input type="hidden" name="year" value="1964"></input>
				<input type="submit" name="submit" class="submit_button" value="Submit"></input>
			</form>
</div>
					</div>
				</div>
			</div>
			
			<!-----------------------------------------------------------------------------1966------------------>
			<div class="panel_1966 page">
				<h3>1966</h3>
				<div class="data">
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
					<img class="data_img line" src="img/pdp_8.jpg" alt="" />
				</div>
				<div class="data">
					<a href="#1" onclick="$.scrollToSubmit(this)" class="add_button">+</a>
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
				<div class="user_data line">
					<button type="button" class="up-button navigation-button1" onclick="$.scrollFrame(this, 'up', 2)"><i class="arrow arrow-up"></i></button>
				<button type="button" class="top-button navigation-button2" onclick="$.scrollToEnds(this, 'first', 2)"><i class="arrow arrow-up"></i><i class="arrow arrow-up double-arrow-up"></i></button>
				<button type="button" class="down-button navigation-button1" onclick="$.scrollFrame(this, 'down', 2)"><i class="arrow arrow-down"></i></button>
				<button type="button" class="bottom-button navigation-button2" onclick="$.scrollToEnds(this, 'last', 2)"><i class="arrow arrow-down"></i><i class="arrow arrow-down double-arrow-down"></i></button>
					<div class="entry_frame">
						<div class="user_entry">
							<div class="user-info">
							<img id="user-image" src="userimg/cbosua.jpg"/>
								<div id="user-name">cbosua</div>
								<div id="user-date"><i id="fancy-date">Fri May 30, 2014, 8:58 am</i></div>
							</div>
							<h2 id="user-title">Alan Head</h2>
							<img id="user-added-image" src="uploads/Alan Head c1966 ref 106.jpg"/>
							<p id="user-description">Alan head was my favourite lecturer back in the day</p>
						</div>
						<div class="user_entry">
<form action="add-content.php" method="post" enctype="multipart/form-data">
				<h2 id="user-title">Add Content</h2>
				Title:<br><input onkeydown="$.lengthWarning(this, 35)" class="input_box" name="title" type="text" size="38">
				<p class="warning_message"></p>
				Description: <textarea onkeydown="$.lengthWarning(this, 270)" class="input_box" name="description" rows="7" cols="38"></textarea>
				<p class="warning_message"></p>
				<span id="tag">Add Image: </span> <input type="file" onchange="$.readURL(this)" name="file" id="file">
				<div class="image-wrapper"><img id="user-image-preview" src="img/blank.png"/></div>
				<input type="hidden" name="category" value="none"></input>
				<input type="hidden" name="year" value="1966"></input>
				<input type="submit" name="submit" class="submit_button" value="Submit"></input>
			</form>
</div>
					</div>
				</div>
			</div>
			
			<!-----------------------------------------------------------------------------1969------------------>
			<div class="panel_1969 page">
				<h3>1969</h3>
				<div class="data">
					<a href="#1" onclick="$.scrollToSubmit(this)" class="add_button">+</a>
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
				<div class="user_data line">
					<button type="button" class="up-button navigation-button1" onclick="$.scrollFrame(this, 'up', 1)"><i class="arrow arrow-up"></i></button>
				<button type="button" class="top-button navigation-button2" onclick="$.scrollToEnds(this, 'first', 1)"><i class="arrow arrow-up"></i><i class="arrow arrow-up double-arrow-up"></i></button>
				<button type="button" class="down-button navigation-button1" onclick="$.scrollFrame(this, 'down', 1)"><i class="arrow arrow-down"></i></button>
				<button type="button" class="bottom-button navigation-button2" onclick="$.scrollToEnds(this, 'last', 1)"><i class="arrow arrow-down"></i><i class="arrow arrow-down double-arrow-down"></i></button>
					<div class="entry_frame">
						<div class="user_entry">
<form action="add-content.php" method="post" enctype="multipart/form-data">
				<h2 id="user-title">Add Content</h2>
				Title:<br><input onkeydown="$.lengthWarning(this, 35)" class="input_box" name="title" type="text" size="38">
				<p class="warning_message"></p>
				Description: <textarea onkeydown="$.lengthWarning(this, 270)" class="input_box" name="description" rows="7" cols="38"></textarea>
				<p class="warning_message"></p>
				<span id="tag">Add Image: </span> <input type="file" onchange="$.readURL(this)" name="file" id="file">
				<div class="image-wrapper"><img id="user-image-preview" src="img/blank.png"/></div>
				<input type="hidden" name="category" value="none"></input>
				<input type="hidden" name="year" value="1969"></input>
				<input type="submit" name="submit" class="submit_button" value="Submit"></input>
			</form>
</div>
					</div>
				</div>
			</div>

			<!-----------------------------------------------------------------------------1970------------------>
			<div class="panel_1970 page">
				<h3 id="1970">1970</h3>
				<div class="data">
					<a href="#1" onclick="$.scrollToSubmit(this)" class="add_button">+</a>
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
				<div class="user_data line">
					<button type="button" class="up-button navigation-button1" onclick="$.scrollFrame(this, 'up', 1)"><i class="arrow arrow-up"></i></button>
				<button type="button" class="top-button navigation-button2" onclick="$.scrollToEnds(this, 'first', 1)"><i class="arrow arrow-up"></i><i class="arrow arrow-up double-arrow-up"></i></button>
				<button type="button" class="down-button navigation-button1" onclick="$.scrollFrame(this, 'down', 1)"><i class="arrow arrow-down"></i></button>
				<button type="button" class="bottom-button navigation-button2" onclick="$.scrollToEnds(this, 'last', 1)"><i class="arrow arrow-down"></i><i class="arrow arrow-down double-arrow-down"></i></button>
					<div class="entry_frame">
						<div class="user_entry">
<form action="add-content.php" method="post" enctype="multipart/form-data">
				<h2 id="user-title">Add Content</h2>
				Title:<br><input onkeydown="$.lengthWarning(this, 35)" class="input_box" name="title" type="text" size="38">
				<p class="warning_message"></p>
				Description: <textarea onkeydown="$.lengthWarning(this, 270)" class="input_box" name="description" rows="7" cols="38"></textarea>
				<p class="warning_message"></p>
				<span id="tag">Add Image: </span> <input type="file" onchange="$.readURL(this)" name="file" id="file">
				<div class="image-wrapper"><img id="user-image-preview" src="img/blank.png"/></div>
				<input type="hidden" name="category" value="none"></input>
				<input type="hidden" name="year" value="1970"></input>
				<input type="submit" name="submit" class="submit_button" value="Submit"></input>
			</form>
</div>
					</div>
				</div>
			</div>
			
			<!-----------------------------------------------------------------------------1976------------------>
			<div class="panel_1976 page">
				<h3>1976</h3>
				<div class="data">
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
					<h2>The Department’s Trendy Name</h2>
					<p>
					In August 1975, Professor Peter C. Poole commenced as the foundation chair 
					of computing at the University of Melbourne. In 1976, Poole requested a name 
					change for the Department to become the Computer Science Department. This brings 
					the department name in line with the trend in English and North American 
					universities.
					</p>
				</div>
				<div class="data">
					<a href="#1" onclick="$.scrollToSubmit(this)" class="add_button">+</a>
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
				<div class="user_data line">
					<button type="button" class="up-button navigation-button1" onclick="$.scrollFrame(this, 'up', 4)"><i class="arrow arrow-up"></i></button>
				<button type="button" class="top-button navigation-button2" onclick="$.scrollToEnds(this, 'first', 4)"><i class="arrow arrow-up"></i><i class="arrow arrow-up double-arrow-up"></i></button>
				<button type="button" class="down-button navigation-button1" onclick="$.scrollFrame(this, 'down', 4)"><i class="arrow arrow-down"></i></button>
				<button type="button" class="bottom-button navigation-button2" onclick="$.scrollToEnds(this, 'last', 4)"><i class="arrow arrow-down"></i><i class="arrow arrow-down double-arrow-down"></i></button>
					<div class="entry_frame">
						<div class="user_entry">
							<div class="user-info">
							<img id="user-image" src="userimg/cbosua.jpg"/>
								<div id="user-name">cbosua</div>
								<div id="user-date"><i id="fancy-date">Thu May 29, 2014, 10:41 am</i></div>
							</div>
							<h2 id="user-title">This is a test</h2>
							<img id="user-added-image" src="uploads/pc1.jpg"/>
							<p id="user-description">la da d ad ada da da dad</p>
						</div>
						<div class="user_entry">
<form action="add-content.php" method="post" enctype="multipart/form-data">
				<h2 id="user-title">Add Content</h2>
				Title:<br><input onkeydown="$.lengthWarning(this, 35)" class="input_box" name="title" type="text" size="38">
				<p class="warning_message"></p>
				Description: <textarea onkeydown="$.lengthWarning(this, 270)" class="input_box" name="description" rows="7" cols="38"></textarea>
				<p class="warning_message"></p>
				<span id="tag">Add Image: </span> <input type="file" onchange="$.readURL(this)" name="file" id="file">
				<div class="image-wrapper"><img id="user-image-preview" src="img/blank.png"/></div>
				<input type="hidden" name="category" value="none"></input>
				<input type="hidden" name="year" value="1976"></input>
				<input type="submit" name="submit" class="submit_button" value="Submit"></input>
			</form>
</div>
					</div>
				</div>
			</div>
			
			<!-----------------------------------------------------------------------------1980------------------>
			<div class="panel_1980 page">
				<h3 id="1980">1980</h3>
				<div class="data">
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
					<h2>The kre (1980's)</h2>
					<p>
					Professor Poole saw an important role of open source operating systems. 
					To do more research on this area, he appointed K. Robert Elz (widely known 
					as kre)to do work on the development of the Berkeley Unix systems that 
					ran on the newly purchased VAX 11/780. KRE went on to become a very 
					important figure in Australian computing.
					</p>
				</div>
				<div class= "data">
					<a href="#1" onclick="$.scrollToSubmit(this)" class="add_button">+</a>
					<h2> Internet and Email in Australia (1980's)</h2>
					<p>
					K. Robert Elz was a pivotal figure in establishing electronic mail links 
					between Australia and the rest of the world. Moreover, Elz also had role 
					in bringing the internet to Australia. He also managed all the internet 
					domain name registrations in Australia for several years.
					</p>
					<img class="data_img line" src="img/kre.jpg" alt="" />
					<img class="data_img line" src="img/penington.jpg" alt="" />
				</div>
				<div class="user_data line">
					<button type="button" class="up-button navigation-button1" onclick="$.scrollFrame(this, 'up', 3)"><i class="arrow arrow-up"></i></button>
				<button type="button" class="top-button navigation-button2" onclick="$.scrollToEnds(this, 'first', 3)"><i class="arrow arrow-up"></i><i class="arrow arrow-up double-arrow-up"></i></button>
				<button type="button" class="down-button navigation-button1" onclick="$.scrollFrame(this, 'down', 3)"><i class="arrow arrow-down"></i></button>
				<button type="button" class="bottom-button navigation-button2" onclick="$.scrollToEnds(this, 'last', 3)"><i class="arrow arrow-down"></i><i class="arrow arrow-down double-arrow-down"></i></button>
					<div class="entry_frame">
						<div class="user_entry">
							<div class="user-info">
							<img id="user-image" src="userimg/no-user-image4.jpg"/>
								<div id="user-name">shark</div>
								<div id="user-date"><i id="fancy-date">Thu May 29, 2014, 12:32 am</i></div>
							</div>
							<h2 id="user-title">cheetahs</h2>
							<img id="user-added-image" src="/home/www/cbosua/HistoryWebApp/uploads/cheetah_lying_down-wallpaper-1280x800.jpg"/>
							<p id="user-description">this photo was not take in 1980 but simply a test to see if it will display</p>
						</div>
						<div class="user_entry">
							<div class="user-info">
							<img id="user-image" src="userimg/no-user-image4.jpg"/>
								<div id="user-name">cj</div>
								<div id="user-date"><i id="fancy-date">Thu May 29, 2014, 4:45 pm</i></div>
							</div>
							<h2 id="user-title">titl</h2>
							<img id="user-added-image" src="uploads/1.jpg"/>
							<p id="user-description">hello</p>
						</div>
						<div class="user_entry">
<form action="add-content.php" method="post" enctype="multipart/form-data">
				<h2 id="user-title">Add Content</h2>
				Title:<br><input onkeydown="$.lengthWarning(this, 35)" class="input_box" name="title" type="text" size="38">
				<p class="warning_message"></p>
				Description: <textarea onkeydown="$.lengthWarning(this, 270)" class="input_box" name="description" rows="7" cols="38"></textarea>
				<p class="warning_message"></p>
				<span id="tag">Add Image: </span> <input type="file" onchange="$.readURL(this)" name="file" id="file">
				<div class="image-wrapper"><img id="user-image-preview" src="img/blank.png"/></div>
				<input type="hidden" name="category" value="none"></input>
				<input type="hidden" name="year" value="1980"></input>
				<input type="submit" name="submit" class="submit_button" value="Submit"></input>
			</form>
</div>
					</div>
				</div>
			</div>
			
			<!-----------------------------------------------------------------------------1989------------------>
			<div class="panel_1989 page">
				<h3>1989</h3>
				<div class="data">
					<a href="#1" onclick="$.scrollToSubmit(this)" class="add_button">+</a>
					<h2> One computer for every desk (1989)</h2>
					<p>
					Professor Poole advised the Vice Chancellor, Professor David Penington, 
					that a networked computer on every desk was a vision worth pursuing. 
					Afterwards, Macintosh computers was arranged.
				
					The late 1980s also marked the beginnings of the multi-media revolution. 
					Anecdote: Poole was very enthusiastic of all things.
					
					At one memorable departmental teaching committee meeting, discussing 
					(in the absence of Poole) a number of curriculum related issues, a 
					staff member re- marked that anytime you wanted Poole to appear, you 
					simply chanted multi-media, multi-media, multi-media. There was enormous 
					hilarity when Poole entered the room just a few seconds later. 
					</p>
				</div>
				<div class="user_data line">
					<button type="button" class="up-button navigation-button1" onclick="$.scrollFrame(this, 'up', 1)"><i class="arrow arrow-up"></i></button>
				<button type="button" class="top-button navigation-button2" onclick="$.scrollToEnds(this, 'first', 1)"><i class="arrow arrow-up"></i><i class="arrow arrow-up double-arrow-up"></i></button>
				<button type="button" class="down-button navigation-button1" onclick="$.scrollFrame(this, 'down', 1)"><i class="arrow arrow-down"></i></button>
				<button type="button" class="bottom-button navigation-button2" onclick="$.scrollToEnds(this, 'last', 1)"><i class="arrow arrow-down"></i><i class="arrow arrow-down double-arrow-down"></i></button>
					<div class="entry_frame">
						<div class="user_entry">
<form action="add-content.php" method="post" enctype="multipart/form-data">
				<h2 id="user-title">Add Content</h2>
				Title:<br><input onkeydown="$.lengthWarning(this, 35)" class="input_box" name="title" type="text" size="38">
				<p class="warning_message"></p>
				Description: <textarea onkeydown="$.lengthWarning(this, 270)" class="input_box" name="description" rows="7" cols="38"></textarea>
				<p class="warning_message"></p>
				<span id="tag">Add Image: </span> <input type="file" onchange="$.readURL(this)" name="file" id="file">
				<div class="image-wrapper"><img id="user-image-preview" src="img/blank.png"/></div>
				<input type="hidden" name="category" value="none"></input>
				<input type="hidden" name="year" value="1989"></input>
				<input type="submit" name="submit" class="submit_button" value="Submit"></input>
			</form>
</div>
					</div>
				</div>
			</div>
			
			<!-----------------------------------------------------------------------------1990------------------>
			<div class="panel_1990 page">
				<h3 id="1990">1990</h3>
				<div class="data">
					<h2> Computing under Faculty of Engineering </h2>
					<p>
					Professor Poole was involved in a review of the Department of Electrical Engineering. The review suggested a revamp to the management structure of the electrical engineering area. It was suggested that a School of Information Technology and Electrical Engineering (SITEE) be formed within the Faculty Engineering.   
					</p>
					<h2>World-Class Facilities</h2>
					<p>
					In 1990, Peter Throne became the new head of the Department of Computer Science. 
					One of Thorne's most important contributions during the early 1990s was his work with the architects designing a new building for the Department. Throughout the 1980s the Department had jostled and jousted with the Departments of Mathematics and Statistics in the Richard Berry Building, with space acquired in a range of deals, and sometimes by adverse possession. The new building, in Bouverie Street, was a chance to obtain world-class facilities for staff and students, and Thorne (as- sisted by technical staff Robert Elz, David Hornsby, and Andrew Peel) invested enormous effort into the design, construction, and the eventual move in July 1993.
					</p>
				</div>
				<div class="data">
					<a href="#1" onclick="$.scrollToSubmit(this)" class="add_button">+</a>
					<img class="data_img line" src="img/peter_thorne.jpg" alt="" />
				</div>
				<div class="user_data line">
					<button type="button" class="up-button navigation-button1" onclick="$.scrollFrame(this, 'up', 1)"><i class="arrow arrow-up"></i></button>
				<button type="button" class="top-button navigation-button2" onclick="$.scrollToEnds(this, 'first', 1)"><i class="arrow arrow-up"></i><i class="arrow arrow-up double-arrow-up"></i></button>
				<button type="button" class="down-button navigation-button1" onclick="$.scrollFrame(this, 'down', 1)"><i class="arrow arrow-down"></i></button>
				<button type="button" class="bottom-button navigation-button2" onclick="$.scrollToEnds(this, 'last', 1)"><i class="arrow arrow-down"></i><i class="arrow arrow-down double-arrow-down"></i></button>
					<div class="entry_frame">
						<div class="user_entry">
<form action="add-content.php" method="post" enctype="multipart/form-data">
				<h2 id="user-title">Add Content</h2>
				Title:<br><input onkeydown="$.lengthWarning(this, 35)" class="input_box" name="title" type="text" size="38">
				<p class="warning_message"></p>
				Description: <textarea onkeydown="$.lengthWarning(this, 270)" class="input_box" name="description" rows="7" cols="38"></textarea>
				<p class="warning_message"></p>
				<span id="tag">Add Image: </span> <input type="file" onchange="$.readURL(this)" name="file" id="file">
				<div class="image-wrapper"><img id="user-image-preview" src="img/blank.png"/></div>
				<input type="hidden" name="category" value="none"></input>
				<input type="hidden" name="year" value="1990"></input>
				<input type="submit" name="submit" class="submit_button" value="Submit"></input>
			</form>
</div>
					</div>
				</div>
			</div>
			
			<!-----------------------------------------------------------------------------1994------------------>
			<div class="panel_1994 page">
				<h3>1994</h3>
				<div class="data">
					<a href="#1" onclick="$.scrollToSubmit(this)" class="add_button">+</a>
					<h2>Department of Information Systems</h2>
					<p>
					The Department of Information Systems was formed in the Faculty of Science, with the focus of teaching Information Systems. The first students of the department were enrolled in 1995.
					</p>
				</div>
				<div class="user_data line">
					<button type="button" class="up-button navigation-button1" onclick="$.scrollFrame(this, 'up', 1)"><i class="arrow arrow-up"></i></button>
				<button type="button" class="top-button navigation-button2" onclick="$.scrollToEnds(this, 'first', 1)"><i class="arrow arrow-up"></i><i class="arrow arrow-up double-arrow-up"></i></button>
				<button type="button" class="down-button navigation-button1" onclick="$.scrollFrame(this, 'down', 1)"><i class="arrow arrow-down"></i></button>
				<button type="button" class="bottom-button navigation-button2" onclick="$.scrollToEnds(this, 'last', 1)"><i class="arrow arrow-down"></i><i class="arrow arrow-down double-arrow-down"></i></button>
					<div class="entry_frame">
						<div class="user_entry">
<form action="add-content.php" method="post" enctype="multipart/form-data">
				<h2 id="user-title">Add Content</h2>
				Title:<br><input onkeydown="$.lengthWarning(this, 35)" class="input_box" name="title" type="text" size="38">
				<p class="warning_message"></p>
				Description: <textarea onkeydown="$.lengthWarning(this, 270)" class="input_box" name="description" rows="7" cols="38"></textarea>
				<p class="warning_message"></p>
				<span id="tag">Add Image: </span> <input type="file" onchange="$.readURL(this)" name="file" id="file">
				<div class="image-wrapper"><img id="user-image-preview" src="img/blank.png"/></div>
				<input type="hidden" name="category" value="none"></input>
				<input type="hidden" name="year" value="1994"></input>
				<input type="submit" name="submit" class="submit_button" value="Submit"></input>
			</form>
</div>
					</div>
				</div>
			</div>
			
			<!-----------------------------------------------------------------------------1999------------------>
			<div class="panel_1999 page">
				<h3>1999</h3>
				<div class="data">
					<a href="#1" onclick="$.scrollToSubmit(this)" class="add_button">+</a>
					<h2>The emerging of Software Engineering</h2>
					<p>
					Another department name change came in 1999. The new name – Computer Science and Software Engineering – reflected a growing acceptance of the positioning of the Department within the Faculty of Engineering, and a growing maturity in its understanding of the educational requirements of software engineers. The BE(SE) program was provisionally accredited by IEAust (now Engineers Australia) in late 1993, and fully accredited in November 1996; and was the first such program in Australia to be accredited. 
					</p>
					<h2>December The Melbourne IT</h2>
					<p>
					Elz's success in establishing guidelines and system for internet domain name registration was an essential part in the sucess of the company Melbourne IT. The company started with an original investment of $350.000. In December 1999, the company raised nearly 80 million dollars for the University at the height of the internet boom.
					</p>
				</div>
				<div class="user_data line">
					<button type="button" class="up-button navigation-button1" onclick="$.scrollFrame(this, 'up', 2)"><i class="arrow arrow-up"></i></button>
				<button type="button" class="top-button navigation-button2" onclick="$.scrollToEnds(this, 'first', 2)"><i class="arrow arrow-up"></i><i class="arrow arrow-up double-arrow-up"></i></button>
				<button type="button" class="down-button navigation-button1" onclick="$.scrollFrame(this, 'down', 2)"><i class="arrow arrow-down"></i></button>
				<button type="button" class="bottom-button navigation-button2" onclick="$.scrollToEnds(this, 'last', 2)"><i class="arrow arrow-down"></i><i class="arrow arrow-down double-arrow-down"></i></button>
					<div class="entry_frame">
						<div class="user_entry">
							<div class="user-info">
							<img id="user-image" src="userimg/no-user-image4.jpg"/>
								<div id="user-name">lucy</div>
								<div id="user-date"><i id="fancy-date">Wed June 18, 2014, 4:05 pm</i></div>
							</div>
							<h2 id="user-title">some titlejlsdhfl;sjfdhkslajdhfksdjfhk</h2>

							<p id="user-description">slkadjfls;d</p>
						</div>
						<div class="user_entry">
<form action="add-content.php" method="post" enctype="multipart/form-data">
				<h2 id="user-title">Add Content</h2>
				Title:<br><input onkeydown="$.lengthWarning(this, 35)" class="input_box" name="title" type="text" size="38">
				<p class="warning_message"></p>
				Description: <textarea onkeydown="$.lengthWarning(this, 270)" class="input_box" name="description" rows="7" cols="38"></textarea>
				<p class="warning_message"></p>
				<span id="tag">Add Image: </span> <input type="file" onchange="$.readURL(this)" name="file" id="file">
				<div class="image-wrapper"><img id="user-image-preview" src="img/blank.png"/></div>
				<input type="hidden" name="category" value="none"></input>
				<input type="hidden" name="year" value="1999"></input>
				<input type="submit" name="submit" class="submit_button" value="Submit"></input>
			</form>
</div>
					</div>
				</div>
			</div>
			
			<!-----------------------------------------------------------------------------2002------------------>
			<div class="panel_2002 page">
				<h3 id="2000">2002</h3>
				<div class="data">
					<h2>New Head of Department: Professor Rao Kotagiri </h2>
					<p>
					Kotagiri's experience as a researcher led in 2004 to the establishment of a NICTA (National ICT Australia) node at the University, jointly housed with the Department of Electrical and Electronics Engineering. This large research initiative, with multiple linkages, and the ability to support both additional research staff and postgraduate students, was a considerable coup, and provided the potential for a significant boost in research profile, and for a shift in the balance between undergraduate and postgraduate teaching. In 2006, with additional support from the Victorian State Government, the NICTA funding agreement was extended into the life sciences area.
					</p>
					<img class="data_img line" src="img/ict_building.jpg" alt="" />
				</div>
				<div class="data">
					<a href="#1" onclick="$.scrollToSubmit(this)" class="add_button">+</a>
					<h2>CIS new location ~ December</h2>
					<p>
					The new ICT Building at 111 Barry Street denoted as Building on the plans for the University Square development – was designed by Metier 3 for the developer Equiset, and built by Grocon. The fit-out was designed for the two departments by Lyons Architects and built by L U Simon Builders, at a further cost of approximately $20 million. The project commenced in 1999, the building was completed mid-2001, and the fitout completed in late 2002.
					University facilities in the building include lecture theatres of 180, 80, and 80 seats; an adjacent foyer area for functions; three computer tutorial rooms equipped with projection whiteboards and designed for collaborative learning; and another twelve tutorial rooms. The two departments also share a pool of project rooms for student meetings; a range of student study areas, some equipped with network data points; a staff common room; a seminar room; a range of meeting rooms; and a dedicated computer room. As well, each of the two departments has extensive laboratory space for undergraduate students; staff research laboratories; and space to house large numbers of postgraduate research students.
					</p>
				</div>
				<div class="user_data line">
					<button type="button" class="up-button navigation-button1" onclick="$.scrollFrame(this, 'up', 2)"><i class="arrow arrow-up"></i></button>
				<button type="button" class="top-button navigation-button2" onclick="$.scrollToEnds(this, 'first', 2)"><i class="arrow arrow-up"></i><i class="arrow arrow-up double-arrow-up"></i></button>
				<button type="button" class="down-button navigation-button1" onclick="$.scrollFrame(this, 'down', 2)"><i class="arrow arrow-down"></i></button>
				<button type="button" class="bottom-button navigation-button2" onclick="$.scrollToEnds(this, 'last', 2)"><i class="arrow arrow-down"></i><i class="arrow arrow-down double-arrow-down"></i></button>
					<div class="entry_frame">
						<div class="user_entry">
							<div class="user-info">
							<img id="user-image" src="userimg/cbosua.jpg"/>
								<div id="user-name">cbosua</div>
								<div id="user-date"><i id="fancy-date">Thu May 29, 2014, 4:52 am</i></div>
							</div>
							<h2 id="user-title">titlle test</h2>
							<img id="user-added-image" src="uploads/a_kings_demise-wallpaper-1280x800.jpg"/>
							<p id="user-description">This is another teeststa</p>
						</div>
						<div class="user_entry">
<form action="add-content.php" method="post" enctype="multipart/form-data">
				<h2 id="user-title">Add Content</h2>
				Title:<br><input onkeydown="$.lengthWarning(this, 35)" class="input_box" name="title" type="text" size="38">
				<p class="warning_message"></p>
				Description: <textarea onkeydown="$.lengthWarning(this, 270)" class="input_box" name="description" rows="7" cols="38"></textarea>
				<p class="warning_message"></p>
				<span id="tag">Add Image: </span> <input type="file" onchange="$.readURL(this)" name="file" id="file">
				<div class="image-wrapper"><img id="user-image-preview" src="img/blank.png"/></div>
				<input type="hidden" name="category" value="none"></input>
				<input type="hidden" name="year" value="2002"></input>
				<input type="submit" name="submit" class="submit_button" value="Submit"></input>
			</form>
</div>
					</div>
				</div>
			</div>
			
			<!-----------------------------------------------------------------------------2013------------------>
			<div class="panel_2013 page">
				<h3 id="2010">2013</h3>
				<div class="data">
					<a href="#1" onclick="$.scrollToSubmit(this)" class="add_button">+</a>
					<h2>The New Microsoft  Research Centre for Social NUI (Natural User Interface) at Melbourne University</h2>
					<p>
					The centre for Social NUI is a research partnership between Microsoft and the University of Melbourne, with support from the Victorian State Government. It is a centre for academics and students wishing to collaborate with leading researchers dedicated to understanding and creating NUI for social interactions.
					For more information about this new research centre : <a href='http://www.socialnui.unimelb.edu.au/'>www.socialnui.unimelb.edu.au</a>
					</p>
				</div>
				<div class="user_data line">
					<button type="button" class="up-button navigation-button1" onclick="$.scrollFrame(this, 'up', 1)"><i class="arrow arrow-up"></i></button>
				<button type="button" class="top-button navigation-button2" onclick="$.scrollToEnds(this, 'first', 1)"><i class="arrow arrow-up"></i><i class="arrow arrow-up double-arrow-up"></i></button>
				<button type="button" class="down-button navigation-button1" onclick="$.scrollFrame(this, 'down', 1)"><i class="arrow arrow-down"></i></button>
				<button type="button" class="bottom-button navigation-button2" onclick="$.scrollToEnds(this, 'last', 1)"><i class="arrow arrow-down"></i><i class="arrow arrow-down double-arrow-down"></i></button>
					<div class="entry_frame">
						<div class="user_entry">
<form action="add-content.php" method="post" enctype="multipart/form-data">
				<h2 id="user-title">Add Content</h2>
				Title:<br><input onkeydown="$.lengthWarning(this, 35)" class="input_box" name="title" type="text" size="38">
				<p class="warning_message"></p>
				Description: <textarea onkeydown="$.lengthWarning(this, 270)" class="input_box" name="description" rows="7" cols="38"></textarea>
				<p class="warning_message"></p>
				<span id="tag">Add Image: </span> <input type="file" onchange="$.readURL(this)" name="file" id="file">
				<div class="image-wrapper"><img id="user-image-preview" src="img/blank.png"/></div>
				<input type="hidden" name="category" value="none"></input>
				<input type="hidden" name="year" value="2013"></input>
				<input type="submit" name="submit" class="submit_button" value="Submit"></input>
			</form>
</div>
					</div>
				</div>
			</div>
			
			<!-----------------------------------------------------------------------------2014------------------>
			<div class="panel_2014 page">
				<h3>2014</h3>
				<div class="data">
					<a href="#1" onclick="$.scrollToSubmit(this)" class="add_button">+</a>
					<h2>The CIS Department leadership</h2>
					<p>
					Professor Justin Zobel is Head of the Department of Computing & Information Systems. He received his PhD from the University of Melbourne and for many years was based in the School of CS&IT at RMIT University, where he led the Search Engine group. In 2007-8 he was a Principle Senior Researcher in NICTA, leading the Computing in Health area, and in 2010 was interim Director of the Victorian Life Sciences Computation Initiative.
					Since 2013, Lars Kulikis is Deputy Head of the CIS Department after his research is the fields od Spatial Information Science and Engineering.
					Dr Simon Milton is Associate Professor of Information Systems in the Department of Computing and Information Systems at The University of Melbourne.He received his PhD from the Department of Information Systems at the University of Tasmania in which he reported the first comprehensive analysis of data modelling languages using a common-sense realistic ontology.
					Professor Frank Vetere is Deputy Head (Research) in the CIS Department and lead the Interaction Design Laboratory which explores the design and use of technology across a range of human activities. He is also the Director of the Microsoft Research Centre for Social NUI at Melbourne University
					</p>
				</div>
				<div class="user_data line">
					<button type="button" class="up-button navigation-button1" onclick="$.scrollFrame(this, 'up', 26)"><i class="arrow arrow-up"></i></button>
				<button type="button" class="top-button navigation-button2" onclick="$.scrollToEnds(this, 'first', 26)"><i class="arrow arrow-up"></i><i class="arrow arrow-up double-arrow-up"></i></button>
				<button type="button" class="down-button navigation-button1" onclick="$.scrollFrame(this, 'down', 26)"><i class="arrow arrow-down"></i></button>
				<button type="button" class="bottom-button navigation-button2" onclick="$.scrollToEnds(this, 'last', 26)"><i class="arrow arrow-down"></i><i class="arrow arrow-down double-arrow-down"></i></button>
					<div class="entry_frame">
						<div class="user_entry">
							<div class="user-info">
							<img id="user-image" src="userimg/no-user-image4.jpg"/>
								<div id="user-name">cj</div>
								<div id="user-date"><i id="fancy-date">Tue May 27, 2014, 12:56 am</i></div>
							</div>
							<h2 id="user-title">Website created</h2>

							<p id="user-description">In 2014 the website was created by a groupd of students for a project for the subject INFO30005: Web Information Technologies. The subject coordinator was Mitchell Harrop and the Group was known as the History group.</p>
						</div>
						<div class="user_entry">
							<div class="user-info">
							<img id="user-image" src="userimg/no-user-image4.jpg"/>
								<div id="user-name">cj</div>
								<div id="user-date"><i id="fancy-date">Tue May 27, 2014, 1:07 am</i></div>
							</div>
							<h2 id="user-title">Website created</h2>

							<p id="user-description">In 2014 the website was created by a groupd of students for a project for the subject INFO30005: Web Information Technologies. The subject coordinator was Mitchell Harrop and the Group was known as the History group.</p>
						</div>
						<div class="user_entry">
							<div class="user-info">
							<img id="user-image" src="userimg/cbosua.jpg"/>
								<div id="user-name">cbosua</div>
								<div id="user-date"><i id="fancy-date">Wed May 28, 2014, 11:44 am</i></div>
							</div>
							<h2 id="user-title">koala</h2>
							<img id="user-added-image" src="/home/www/cbosua/HistoryWebApp/uploads/Koala.jpg"/>
							<p id="user-description">this is koala</p>
						</div>
						<div class="user_entry">
							<div class="user-info">
							<img id="user-image" src="userimg/no-user-image4.jpg"/>
								<div id="user-name">random</div>
								<div id="user-date"><i id="fancy-date">Fri May 30, 2014, 10:19 am</i></div>
							</div>
							<h2 id="user-title">Justin Zobel</h2>
							<img id="user-added-image" src="uploads/justin-zobel.jpg"/>
							<p id="user-description">Head of CIS dept</p>
						</div>
						<div class="user_entry">
							<div class="user-info">
							<img id="user-image" src="userimg/no-user-image4.jpg"/>
								<div id="user-name">ryan</div>
								<div id="user-date"><i id="fancy-date">Fri June 6, 2014, 1:20 pm</i></div>
							</div>
							<h2 id="user-title">Test</h2>

							<p id="user-description">Test upload</p>
						</div>
						<div class="user_entry">
							<div class="user-info">
							<img id="user-image" src="userimg/no-user-image4.jpg"/>
								<div id="user-name">Ryan the Mighty</div>
								<div id="user-date"><i id="fancy-date">Wed June 18, 2014, 3:04 pm</i></div>
							</div>
							<h2 id="user-title">Hello</h2>

							<p id="user-description">This is our first test upload!</p>
						</div>
						<div class="user_entry">
							<div class="user-info">
							<img id="user-image" src="userimg/no-user-image4.jpg"/>
								<div id="user-name">Ryan the Mighty</div>
								<div id="user-date"><i id="fancy-date">Wed June 18, 2014, 3:29 pm</i></div>
							</div>
							<h2 id="user-title">Hello this is dog</h2>

							<p id="user-description">Test upload</p>
						</div>
						<div class="user_entry">
<form action="add-content.php" method="post" enctype="multipart/form-data">
				<h2 id="user-title">Add Content</h2>
				Title:<br><input onkeydown="$.lengthWarning(this, 35)" class="input_box" name="title" type="text" size="38">
				<p class="warning_message"></p>
				Description: <textarea onkeydown="$.lengthWarning(this, 270)" class="input_box" name="description" rows="7" cols="38"></textarea>
				<p class="warning_message"></p>
				<span id="tag">Add Image: </span> <input type="file" onchange="$.readURL(this)" name="file" id="file">
				<div class="image-wrapper"><img id="user-image-preview" src="img/blank.png"/></div>
				<input type="hidden" name="category" value="none"></input>
				<input type="hidden" name="year" value="2014"></input>
				<input type="submit" name="submit" class="submit_button" value="Submit"></input>
			</form>
</div>
					</div>
				</div>
			</div>

	</div>
	<!------------------------------------------------ SCROLL NAV --------->
	<script type="text/javascript">
	(function($) {
		$.jInvertScroll(['.scroll'], 
			{
				onScroll: function(percent) {
					// NOTE: Dependent upon page width!
					if(percent <= 0.0405) {
						$.setNavCSS("#nav_Intro");
					} else if(percent <= 0.260) {
						$.setNavCSS("#nav_1950");
					} else if(percent <= 0.480) {
						$.setNavCSS("#nav_1960");
					} else if(percent <= 0.585) {
						$.setNavCSS("#nav_1970");
					} else if(percent <= 0.698) {
						$.setNavCSS("#nav_1980");
					} else if(percent <= 0.850) {
						$.setNavCSS("#nav_1990");
					} else if(percent <= 0.915) {
						$.setNavCSS("#nav_2000");
					} else {
						$.setNavCSS("#nav_2010");
					}
				}
			}			
		);
		// Sets the CSS of the specified navbar element and resets all other elements.
		$.setNavCSS = function(element) {
			// Resets the CSS of all the nav elements.
			$("#nav_Home").css({'background-color':'transparent', 'font-size':'160%'});
			$("#nav_Intro").css({'background-color':'transparent', 'font-size':'160%'});
			$("#nav_1950").css({'background-color':'transparent', 'font-size':'160%'});
			$("#nav_1960").css({'background-color':'transparent', 'font-size':'160%'});
			$("#nav_1970").css({'background-color':'transparent', 'font-size':'160%'});
			$("#nav_1980").css({'background-color':'transparent', 'font-size':'160%'});
			$("#nav_1990").css({'background-color':'transparent', 'font-size':'160%'});
			$("#nav_2000").css({'background-color':'transparent', 'font-size':'160%'});
			$("#nav_2010").css({'background-color':'transparent', 'font-size':'160%'});
			// Sets the CSS of the specified element.
			$(element).css({'background-color':'silver', 'font-size':'200%'});
		}
	}(jQuery));
	</script>
	<!------------------------------------------------ SCROLL NAV END ----->
		
</body>
</html>