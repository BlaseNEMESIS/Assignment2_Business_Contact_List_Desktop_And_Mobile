<!--
File Name: logout.php
Author Name: Jonathan Hodder
Website Name: Personal Portfolio Website
File Description: Logout the user
-->
<?php
	//kill the session
	session_start();
	session_destroy();
	header("location:login.html");
?>