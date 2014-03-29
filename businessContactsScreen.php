<!--
File Name: businessContactsScreen.php
Author Name: Jonathan Hodder
Website Name: Personal Portfolio Website
File Description: Provides user with Business Contacts loaded from the database
-->
<?php 
	//start the session and verify the login
	session_start();
	if(!isset($_SESSION['loggedIn']))
	{
		header("location:login.html");
	}
	//database variables
	$host="localhost"; 
	$dbUserName="BlaseNEMESIS"; 
	$dbPassword="MAXjmhodder44";  
	$database="business_contact_list";
	$dbTable="bcl_contacts";
	$name;
	$contactId;
	
	// Connect to server and select database.
	mysql_connect("$host", "$dbUserName", "$dbPassword")
				 or die("cannot connect"); 
	mysql_select_db("$database")
				 or die("cannot select DB");
	
	$sqlSelect = "SELECT * FROM $dbTable ORDER BY name";
  	$selectResult = mysql_query($sqlSelect)or die(mysql_error());
?>

<html class="no-js" lang="en">	
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Business Contacts Screen</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <script src="detectmobilebrowaer.js"></script>
    <script src="js/modernizr.js"></script>
  </head>
  <body>
  	<div class="row">
      <div class="large-12 columns">
      	<!-- Header for Business Contacts Page -->
		<h1>Business Contacts</h1>
	  </div>
    </div>	
 	<div class="row">
		<div class="large-2 columns">
		    <!-- Side Navigation Bar -->
			<ul>
	    		<!-- Side Navigation Bar -->
	    		<li><a href="index.html" class="small button">Home</a></li>
	    		<li><a href="aboutMe.html" class="small button">About Me</a></li>
	    		<li><a href="projects.html" class="small button">Projects</a></li>
	    		<li><a href="services.html" class="small button">Services</a></li>
	    		<li><a href="https://github.com/BlaseNEMESIS/" class="small button">GitHub</a></li>
	    		<li><a href="contactMe.html" class="small button">Contact Me</a></li>
	    		<li><a href="businessContactsScreen.php" class="small success button">Business Contacts</a></li>   
	    	</ul>	 
	    </div>
	   	<div class="large-8 columns">
			<div class="callout panel">
				<?php
					echo"<h3>Contact Name<br><br></h3>";    
		            while($row = mysql_fetch_array($selectResult))
		  			{
 						$name = $row['name'];
						$address = $row['address'];
						$phoneNumber = $row['phone_number'];
			 			// For each name in the database populate them
			 			echo"<h5><a href='#' onclick='alert($name <br /> $address <br /> $phoneNumber)'>$name</a></h5>"; 
					} 
				?>	
			</div>
	    	<div class="callout panel">
	    		<h5><a href="logout.php">Logout Here</a></h5>
			</div>
		</div>
    
    <script src="js/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>