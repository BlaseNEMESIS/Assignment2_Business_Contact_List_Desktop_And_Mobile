<!doctype html> 
<!--
File Name: m.PersonalPortfolioWebsite.html
Author Name: Jonathan Hodder
Website Name: Personal Portfolio Website Mobile Look up 
-->
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mobile Portfolio Home</title>
	<link href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" rel="stylesheet" type="text/css"/>
	<script src="http://code.jquery.com/jquery-1.6.4.min.js" type="text/javascript"></script>
	<script src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js" type="text/javascript"></script> 
	<link rel="stylesheet" href="nivo-slider/nivo-slider.css" type="text/css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
	<script src="nivo-slider/jquery.nivo.slider.pack.js" type="text/javascript"></script>
	<link rel="stylesheet" href="nivo-slider/themes/default/default.css" type="text/css" />
	<link rel="stylesheet" href="css/themes/my-custom-theme.css" />
  	<link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
  	<link rel="stylesheet" href="css/mobileCustom.css" media="screen and (min-device-width: 320px) and (max-device-width: 480px)"/>
  </head>
<body>
	
<!--
Page Name: Home Mobile
Page Description: Provides user with basic information about Jonathan Hodder's Portfolio and useful links for a Mobile View.
--> 
<div data-role="page" id="home">
	<div data-role="header">
		<!-- Company Logo-->
		<img src="img/Bug.png" alt="Company Logo" id="imageCompanyLogo" style="width:200px;height:200px;"/>	
		<div data-role="navbar">
		<!-- Nav Menu -->
			<ul>
				<li><a href="#home" data-icon="home" class="ui-btn-active ui-state-persist" data-theme="b">Home</a></li>
				<li><a href="#aboutMe" data-icon="star" data-theme="b">About Me</a></li>
		    	<li><a href="#contactMe" data-icon="grid" data-theme="b">Contact Me</a></li>
		    	<li><a href="#businessContactsScreen" data-icon="grid" data-theme="b">Business Contacts</a></li>
	    	</ul>
		</div>
	</div>
	<div data-role="content">	
		<div data-role="navbar">
			<ul>
				<!-- Nav Menu Image Links -->
				<li><a href="#projects" data-theme="b"><img src="img/projectsLink.png" style="width:50%;" alt="Projects"/></a></li>
				<li><a href="#services" data-theme="b"><img src="img/servicesLink.png" style="width:50%;"alt="Services"/></a></li>
	    	</ul>
		</div>	
		<!-- Featured Work Nivo Slider -->
		<div class="slider-wrapper theme-default">
    		<div class="ribbon"></div>
			<div id="slider" class="nivoSlider">
			    <a href="https://github.com/BlaseNEMESIS/Assignment1-Fallout_Survival"><img src="img/fallout.jpg" alt="Fallout Survival" id="FalloutSurvival" title="Fallout Survival Project."></a>
			    <a href="https://github.com/BlaseNEMESIS/Quidditch_ProjectB"><img src="img/quidditch.jpg" alt="Quidditch Project" id="QuidditchProject" title="Quidditch Project."></a>
			    <a href="https://github.com/BlaseNEMESIS/Assignment_4_Balloon_Man"><img src="img/balloonMan.jpg" alt="Balloon Man" id="BalloonMan" title="Balloon Man Project."></a>
			</div>
		</div>
	</div>
	<div data-role="footer">
		<!--footer and Desktop site link-->
		<h4>Copyright 2013</h4>
		<h4><a href="index.html">Full Site</a></h4>
	</div>
</div> 

<!--
Website Page: About Me Mobile
File Description: Provides user with information about Jonathan Hodder on a Mobile View
-->
<div data-role="page" id="aboutMe">
	<div data-role="header">
		<h1>About Me</h1>
		<!-- Nav Menu -->
		<div data-role="navbar">
			<ul>
				<li><a href="javascript:history.go(-1)" data-icon="back" data-theme="b">Back</a></li>
				<li><a href="#home" data-icon="home" data-theme="b">Home</a></li>
				<li><a href="#aboutMe" data-icon="star" class="ui-btn-active ui-state-persist" data-theme="b">About Me</a></li>
		    	<li><a href="#contactMe" data-icon="grid" data-theme="b">Contact Me</a></li>
	    		<li><a href="#businessContactsScreen" data-icon="grid" data-theme="b">Business Contacts</a></li>
	    	</ul>
		</div>
	</div>
	<div data-role="content">	
		<!-- Nav Menu Image Links-->
		<div data-role="navbar">
			<ul>
				<li><a href="#projects" data-theme="b"><img src="img/projectsLink.png" style="width:50%;" alt="Projects"/></a></li>
				<li><a href="#services" data-theme="b"><img src="img/servicesLink.png" style="width:50%;" alt="Services"/></a></li>
	    	</ul>
		</div>
		<h2>We take your bugs and remove them from your life.</h2>	
		<!-- Mission Statement -->
		<div data-role="collapsible">
			<h3>Mission Statement</h3>
			<p>All Your Bugs is a group of contractors that helps businesses big or small with their development and management of technology projects.
			We provide companies with on-call workers who can help businesses with Web Design and Development of Web Pages, Applications and Programs.
			Throughout the creation of your product our employees offer their experience with Performance Testing and Functionality Testing.
			Our company also provides employees who can be contractually hired to work with your team on Project Management throughout your 		projects.</p>
		</div>	
		<!-- Profile Information -->
		<div class="ui-grid-a">		
      		<div class="ui-block-a">
      			<div data-role="collapsible">
      				<h3>Profile</h3>
					<p>Name: Jonathan Hodder</p>
					<p>Age: 20</p>
					<p>Gender: Male</p>
					<p>Profession: Computer Programmer Analyst</p>
					<p>Hobbies: Video Games, Reading and Rowing</p>
				</div>
			</div>	
		<!-- Profile Picture -->
			<div class="ui-block-b">
				<div data-role="collapsible">
					<h3>Picture</h3>
					<img src="img/profilePicture.png" alt="Profile Picture" style="width:80%;height:250px;" id="ProfilePicture">
				</div>
			</div>
		</div>
		<!-- Resume -->
		<div data-role="collapsible">
  			<h2>Resume</h2>
  			<h5>Jonathan M. Hodder</h5>
			<h5>17 Carley Crescent</h5>
			<h5>Barrie, Ontario L4N 0M9</h5>
			<h5>(705)300-3515</h5>
			<h5>jonmhodder@yahoo.com</h5>
			<h4><strong>Profile:</strong></h4>
			<p>A georgian college student seeking a co-op placement to apply academic knowledge and skills, while gaining more experience in a 
			business environment.</p>
			<h4><strong>Education:</strong></h4>
			<p>2011 – Present	 Computer Programmer Analyst 3 year Co-op Program Georgian College, Barrie, Ontario </p>
			<p>June 2011         Ontario Secondary School Diploma (OSSD) Major: Maths, Business, Physics, and Computers Innisdale Secondary 			School</p>
			<h4><strong>Summary of Skills:</strong></h4>
			<h4><strong>Technical</strong></h4>
			<ul>
				<li>Knowledge and experience using Python, Visual Basic, Java, Javascript, C++, C#, MySQL, PHP web design, HTML, CSS, 
				troubleshooting servers and the monitoring programs applied to Windows, Unix, Linux, and Solaris servers 
				(HPSA, OMW, OMU, NNM, OVPI, and SiteScope).</li>
				<li>Capable of creating and delivering presentations through Power Point, Prezi and Excel spreadsheets in a timely and concise 
				manner.</li>
				<li>Created mainframe applications with COBOL.</li>
				<li>Developed and maintained Relational Databases using SQL and the SQL procedural language.</li>
				<li>Ability to develop web based products that allow the integration of multiple computers through the internet and enterprise 
				networks.</li>
				<li>Used ASP.NET framework to develop web applications with client/server interactions.</li> 
				<li>Experience with graphics programming in a variety of applications (such as games, animation, and geographical information 
				systems).  For example using Python.</li>
				<li>Interacted with VM’s when working on Relational Databases with SQL.</li>
			</ul>
			<h4><strong>Interpersonal</strong></h4>
			<ul>
				<li>Learned how to apply social science theory to the business world, the different kinds of organizations and productivity 
				and motivations in the workplace.</li>
				<li>Project Management:</li>
				<ul>
					<li>Understand in detail, the five phases of the systems development life cycle(SDLC).</li>
					<li>Understand the importance of communications, economic analysis and project planning skills in all the phases of the 
					SDLC.</li>
				</ul>
				<li>Organizational Skills - Managed inventory and scheduled loans of media equipment.</li>
				<li>Customer Service - Provided assistance to media problems through email, phone and in person.</li>
				<li>DECA - Presented and solved multiple business case studies in front of judges.</li>
			</ul>
			<h4><strong>Employment:</strong></h4>
			<ul>
				<li>Barrie Public Library – Volunteered – July 2007 to May 2008</li>
				<li>Innisdale High School – Summer School Slushy Machine Sales for DECA Club – July 2009</li>
				<li>Ontario government - Tools and Automation Department - first co-op - May – August 2012.</li>
				<li>Georgian College - Media Services Department – second co-op - January - May 2013.</li>
			</ul>
			<h4><strong>Achievements:</strong></h4>
			<ul>
				<li>Red Cross First Aid Certificate</li>
				<li>Worksmart Campus Transcript – (89%)</li>
				<li>Ontario Scholarship/Academic Letter and Business Studies Certificates</li>
				<li>Member of the DECA club – 2007-2011; Vice President/Achievement Award - 2011</li>
				<li>Qualified for Provincial DECA competition for all 4 years and won top 10 each year</li>
			</ul>
			<h4><strong>References available upon request</strong></h4>		
		</div>					
	</div>
	<div data-role="footer">
		<!-- Footer -->
		<h4>Copyright 2013</h4>
	</div>
</div>

<!--
Page Name: Contact Me Mobile
File Description: Provides user with contact information to contact Jonathan Hodder on a Mobile View
-->
<div data-role="page" id="contactMe">
	<div data-role="header">
		<h1>Contact Me</h1>
		<div data-role="navbar">
			<ul>
				<!-- Nav Menu -->
				<li><a href="javascript:history.go(-1)" data-icon="back" data-theme="b">Back</a></li>
				<li><a href="#home" data-icon="home" data-theme="b">Home</a></li>
				<li><a href="#aboutMe" data-icon="star" data-theme="b">About Me</a></li>
		    	<li><a href="#contactMe" data-icon="grid" class="ui-btn-active ui-state-persist" data-theme="b">Contact Me</a></li>
	    		<li><a href="#businessContactsScreen" data-icon="grid" data-theme="b">Business Contacts</a></li>
	    	</ul>
		</div>
	</div>
	<div data-role="content">	
		<div data-role="navbar">
			<ul>
				<!-- Nav Menu Image Link-->
				<li><a href="#projects" data-theme="b"><img src="img/projectsLink.png" style="width:50%;" alt="Projects"/></a></li>
				<li><a href="#services" data-theme="b"><img src="img/servicesLink.png" style="width:50%;" alt="Services"/></a></li>
	    	</ul>
		</div>
		<!-- Contact Information -->
		<div class="ui-grid-a">		
      		<div class="ui-block-a">
				<div data-role="collapsible">
					<!--Contact Information-->
		      		<h3>Contact Info</h3>
					<p>Home Phone: <a href="tel:+17053003515">705-300-3515</a></p>
					<p>Work Offices: 1st Georgian Drive, 17 Carley Cres.</p>
					<p>Cell Phone: N/A</p>
					<p>Email: jonmhodder@yahoo.com</p>	
				</div>
			</div>
			<div class="ui-block-b">
				<div data-role="collapsible">
					<h3>Keep Connected...</h3>
					<div data-role="navbar">
	         			<ul>	
	         				<!--Keep Connected Links-->	
	         				<li><a href="https://www.facebook.com/jonathan.hodder.507" data-theme="b"><img src="img/facebook.png" style="width:50px;height:50px;" alt="Facebook Link" /></a></li>
	        				<li><a href="https://www.youtube.com/blaseNEMESIS" data-theme="b"><img src="img/youtube_icon.png" style="width:50px;height:50px;" alt="Youtube Link" /></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div data-role="footer">
		<!-- Footer -->
		<h4>Copyright 2013</h4>
	</div>
</div>

<!--
File Page: Projects Mobile
File Description: Provides user with links to websites created by Jonathan Hodder for Mobile View
-->
<div data-role="page" id="projects">
	<div data-role="header">
		<h1>Projects</h1>
		<div data-role="navbar">
			<!-- Nav Menu-->
			<ul>
				<li><a href="javascript:history.go(-1)" data-icon="back" data-theme="b">Back</a></li>
				<li><a href="#home" data-icon="home" data-theme="b">Home</a></li>
				<li><a href="#aboutMe" data-icon="star" data-theme="b">About Me</a></li>
		    	<li><a href="#contactMe" data-icon="grid" data-theme="b">Contact Me</a></li>
		    	<li><a href="#businessContactsScreen" data-icon="grid" data-theme="b">Business Contacts</a></li>
	    	</ul>
		</div>
	</div>
	<div data-role="content">	
		<div data-role="navbar">
			<ul>
				<!-- Nav Menu Image links -->
				<li><a href="#projects" data-theme="b" class="ui-btn-active ui-state-persist"><img src="img/projectsLink.png" style="width:50%;" alt="Projects"/></a></li>
				<li><a href="#services" data-theme="b"><img src="img/servicesLink.png" style="width:50%;" alt="Services"/></a></li>
	    	</ul>
		</div>	
		<div class="ui-grid-b">
			<!-- Project Image Links -->
      		<div class="ui-block-a">
				<h5>Fallout _Survival</h5>
				<a href="https://github.com/BlaseNEMESIS/Assignment1-Fallout_Survival"><img src="img/fallout.jpg" alt="Fallout Survival" style="width:80%;height:200px;"></a>
			</div>
			<div class="ui-block-b">
				<h5>Quidditch Project</h5>
				<a href="https://github.com/BlaseNEMESIS/Quidditch_ProjectB"><img src="img/quidditch.jpg" alt="Quidditch Project" style="width:80%;height:200px;"></a>
			</div>
			<div class="ui-block-c">
				<h5>Balloon ManGame</h5>
				<a href="https://github.com/BlaseNEMESIS/Assignment_4_Balloon_Man"><img src="img/balloonMan.jpg" alt="Balloon Man" style="width:80%;height:200px;"></a>
			</div>
		</div>			
	</div>
	<div data-role="footer">
		<!-- Footer -->
		<h4>Copyright 2013</h4>
	</div>
</div>

<!--
File Page: Services Mobile
File Description: Provides user with the services that All Your Bugs can provide for Mobile View
-->
<div data-role="page" id="services">
	<div data-role="header">
		<h1>Services</h1>
		<div data-role="navbar">
			<ul>
				<!-- Nav Menu -->
				<li><a href="javascript:history.go(-1)" data-icon="back" data-theme="b">Back</a></li>
				<li><a href="#home" data-icon="home" data-theme="b">Home</a></li>
				<li><a href="#aboutMe" data-icon="star" data-theme="b">About Me</a></li>
		    	<li><a href="#contactMe" data-icon="grid" data-theme="b">Contact Me</a></li>
		    	<li><a href="#businessContactsScreen" data-icon="grid" data-theme="b">Business Contacts</a></li>
	    	</ul>
		</div>
	</div>
	<div data-role="content">	
		<div data-role="navbar">
			<ul>
				<!-- Nav Menu Image Links -->
				<li><a href="#projects" data-theme="b"><img src="img/projectsLink.png" alt="Projects" style="width:50%;"/></a></li>
				<li><a href="#services" data-theme="b" class="ui-btn-active ui-state-persist"><img src="img/servicesLink.png" alt="Services" style="width:50%;"/></a></li>
	    	</ul>
		</div>	
		<!-- Testing Service -->
		<div data-role="collapsible">
			<h4>Testing</h4>
			<div class="ui-grid-a">		
				<div class="ui-block-a">	
					<p>Software testing is an investigation provided by All Your Bugs of your product and services that can be used to 
					provide status updates to Stakeholders. Software testing can also provide an objective, independent view of the software to allow the 
					business to appreciate and understand the risks of software implementation.  It can also be used to determine where defects and bugs
					in the software tested.</p>
				</div>	
				<div class="ui-block-b">
					<img src="img/testing.jpg" alt="Testing" style="width:80%;height:207px;" id="testingPicture" >
				</div>
			</div>
		</div>
		<!-- Web Design Service -->
		<div data-role="collapsible">
			<h4>Web Design</h4>	
			<div class="ui-grid-a">		
				<div class="ui-block-a">		
	 				<p>Web design encompasses many different skills and disciplines in the production and maintenance of websites. The different areas of 
	 				web design provided by All Your Bugs include web graphic design; interface design; authoring, including standardised 
	 				code and proprietary software; user experience design; and search engine optimization.</p>
				</div>	
				<div class="ui-block-b">
					<img src="img/webDesign.jpg" alt="Web Design" style="width:80%;height:207px;" id="webDesignPicture">
				</div>
			</div>
		</div>
		<!-- Development Service -->
		<div data-role="collapsible">
			<h4>Development</h4> 
			<div class="ui-grid-a">		
				<div class="ui-block-a">								
				<p>All Your Bugs  provides Software development. Our group can write and maintain the source code, and involve
				ourselves in the conception of the desired software through to the final manifestation of the software, in a planned and structured 
				process.  Our group can supply our expertise in include research, new development, prototyping, modification, reuse, re-engineering, and
				maintenance.</p>
				</div>	
				<div class="ui-block-b">
					<img src="img/development.png" alt="Development" style="width:80%;height:207px;" id="devlopmentPicture">
				</div>
			</div>
		</div>	
		<!-- Project Management Service -->
		<div data-role="collapsible">
			<h4>Project Management</h4>	
			<div class="ui-grid-a">		
				<div class="ui-block-a">						
	 				<p>Project management provided All Your Bugs is the process and activity of planning, organizing, motivating, and 
	 				controlling resources to achieve specific goals. Our group can assist your company with achieving all of your project goals and 
	 				objectives while honoring your preconceived constraints.</p> 
				</div>	
				<div class="ui-block-b">
					<img src="img/projectManagement.png" alt="Project Management" style="width:80%;height:207px;" id="projectManagementPicture">
				</div>
			</div>
		</div>							
	</div>
	<div data-role="footer">
		<!-- Footer -->
		<h4>Copyright 2013</h4>
	</div>
</div>

<!--
File Page: Business Contacts
File Description: Provides user with Business Contacts loaded from the database on a mobile platform
-->
<div data-role="page" id="businessContactsScreen">
	<?php 
		//start the session and verify the login
		session_start();
		if(!isset($_SESSION['loggedIn']) & $_SERVER['REQUEST_URI'] == 'm.PersonalPortofolioWebsite.php#businessContactsScreen')
		{
			$_SESSION['mobile'] = 'Yes';
			header("location:login.html");
		}
	?>
	<div data-role="header">
		<h1>Business Contacts</h1>
		<div data-role="navbar">
			<ul>
				<!-- Nav Menu -->
				<li><a href="javascript:history.go(-1)" data-icon="back" data-theme="b">Back</a></li>
				<li><a href="#home" data-icon="home" data-theme="b">Home</a></li>
				<li><a href="#aboutMe" data-icon="star" data-theme="b">About Me</a></li>
		    	<li><a href="#contactMe" data-icon="grid" data-theme="b">Contact Me</a></li>
	    		<li><a href="#businessContactsScreen" data-icon="grid" class="ui-btn-active ui-state-persist" data-theme="b">Business Contacts</a></li>
	    	</ul>
		</div>
	</div>
	<div data-role="content">	
		<div data-role="navbar">
			<ul>
				<!-- Nav Menu Image Link-->
				<li><a href="#projects" data-theme="b"><img src="img/projectsLink.png" style="width:50%;" alt="Projects"/></a></li>
				<li><a href="#services" data-theme="b"><img src="img/servicesLink.png" style="width:50%;" alt="Services"/></a></li>
	    	</ul>
		</div>
		<div class="ui-grid-a">		
			<?php
				//database variables
				$host="localhost"; 
				$dbUserName="BlaseNEMESIS"; 
				$dbPassword="MAXjmhodder44";  
				$database="business_contact_list";
				$dbTable="bcl_contacts";	
						
				// Connect to server and select database.
				mysql_connect("$host", "$dbUserName", "$dbPassword")
							 or die("cannot connect"); 
				mysql_select_db("$database")
				    			or die("cannot select DB");
			
				$sqlSelect = "SELECT * FROM $dbTable ORDER BY name";
				$selectResult = mysql_query($sqlSelect)or die(mysql_error());
			?>
			<div class="ui-block-a">
				<?php
					echo"<h3>Contact Name</h3>";    
					while($row = mysql_fetch_array($selectResult))
					{
						$name = $row['name'];
						$address = $row['address'];
						$phoneNumber = $row['phone_number'];
						// For each name in the database populate them
						echo"<h5><a href='#' onClick='javascript:alert(\"". 'Name: '. $name . '\n\n'. 'Address: ' . $address . '\n\n'. 'Phone Number: ' . $phoneNumber ."\"); return false;'>".$name."</a></h5>"; 
					} 
				?>
			</div>
			<div class="ui-block-b">
				<?php
					$sqlSelect = "SELECT phone_number FROM $dbTable ORDER BY name";
					$selectResult = mysql_query($sqlSelect)or die(mysql_error());
					echo"<h3>Phone Number</h3>";    
					while($row = mysql_fetch_array($selectResult))
					{
						$phoneNumber = $row['phone_number'];
						// For each name in the database populate them
					 	echo'<p><a href="tel:".$phoneNumber>'.$phoneNumber.'</a></p>';
					} 
				?>
			</div>			
		</div>		
	</div>
	<div data-role="footer">
		<!-- Footer -->
		<h4><a href="logout.php">Logout</a></h4>
		<h4>Copyright 2013</h4>
	</div>
</div>
				
<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider();
});
</script>
</body>
</html>