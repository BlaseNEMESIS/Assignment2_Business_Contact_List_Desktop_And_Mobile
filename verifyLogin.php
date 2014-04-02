<!--
File Name: verifyLogin.php
Author Name: Jonathan Hodder
Website Name: Personal Portfolio Website
File Description: Verifies a user login
-->
<?php
	//database variables
	$host="localhost"; 
	$dbUserName="BlaseNEMESIS"; 
	$dbPassword="MAXjmhodder44";  
	$database="business_contact_list"; 
	$dbTable="bcl_users";
	$loginUserName;
	$loginPassword;
	
	// Connect to the server and select correct databse.
	mysql_connect("$host", "$dbUserName", "$dbPassword") 
				 or die("cannot connect to the Local Host."); 
	mysql_select_db("$database") 
				 or die("Cannot select the Database.");
				 
	//username and password pulled from the form 
	$loginUserName=$_POST['loginUserName']; 
	$loginPassword=$_POST['loginPassword']; 

	//Protection against MySQL injection
	$loginUserName = stripslashes($loginUserName);
	$loginUserName = mysql_real_escape_string($loginUserName);
	$loginPassword = stripslashes($loginPassword);
	$loginPassword = mysql_real_escape_string($loginPassword);
	//Select the username and password from the database that match the login form information.
	$sqlSelect="SELECT * FROM $dbTable WHERE username='$loginUserName' and password='$loginPassword'";
	$loginResult=mysql_query($sqlSelect);	
	// check if a valid login is in the user table
	$count=mysql_num_rows($loginResult);
	
	if($count==1 & !isset($_SESSION['mobile']))
	{
		session_start();
		$loginPassword = md5($loginPassword);
		// Register the user information and jump to the contacts page
		$_SESSION['loggedIn'] = 'Yes';
		header("location:businessContactsScreen.php");
	}
	else if ($count = 1)
	{
		session_start();
		$loginPassword = md5($loginPassword);
		// Register the user information and jump to the contacts page
		$_SESSION['loggedIn'] = 'Yes';
		header("location:m.PersonalPortofolioWebsite.php#businessContactsScreen");
	}
	else if($loginResult['username'] != $_POST['loginUserName'] && $loginResult['password'] != $_POST['loginPassword'])
	{
		echo '<script type="text/javascript"> alert("The Username and Password are Invalid. Please enter valid login information")</script>';
	}
	else if($loginResult['username'] != $_POST['loginUserName']) 
	{ //If the username is not a valid username
		echo '<script type="text/javascript"> alert("The Username is Invalid.  Please enter a valid username")</script>';
	}
	else if($loginResult['password'] != $_POST['loginPassword']) 
	{ //If the password is not a valid username
		echo '<script type="text/javascript">alert("The Password is Invalid. Please enter a valid password")</script>';
	}
	echo '<script type="text/javascript">window.location.href = "login.html";</script>'
	
?>