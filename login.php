<?php

	//Database Variables
	$host="localhost";
	$username="$BlaseNEMESIS";
	$password="$MAXjmhodder44";
	$database="business_contact_list";
	$user_table="bcl_users";
	$username_login;
	$password_login;
	$login_attempt;
	
	// Connect to server if connection fails send an error message.
	mysql_connect("$localhost", "$username", "$password")
				  or die("Connection Failed."); 
	// Select the database if selection fails produce an error message.
	mysql_select_db("$database")
	              or die("Cannot Access Database.");
	
	// username and password the user enters in login html
	$username_login=$_POST['username']; 
	$password_login=$_POST['password']; 
	
	// Preventative measures for mysql injections
	$username_login = stripslashes($myusername);
	$username_login = mysql_real_escape_string($myusername);
	$password_login = stripslashes($mypassword);
	$password_login = mysql_real_escape_string($mypassword);
	$sql="SELECT * FROM $user_table WHERE username='$username_login' and password='$password_login'";
	$login_attempt=mysql_query($sql);
	
	// Mysql_num_row check that the login attempt is in the table
	$count=mysql_num_rows($login_attempt);
	
	// If the login attempt matches the database 	// Save the username and password and direct the user to the business contact screen
	if($count==1)
	{	
		session_register("$username_login");
		session_register("$password_login"); 
		header("location:businessContactsScreen.php");
	}
	//If there is no match in the database create an error message. 
	else 
	{
		echo "Invalid Login Attempt.  Please enter valid username and password.";
	}
?>