<?php
	session_start();
	
/*	Uncomment for error logging
	
	ini_set('display_errors',1);
	error_reporting(E_ALL);
*/
	
	//$con=mysql_connect("localhost","KyleM","Minshall1!"); //Connect to the database
	//$db_selected = mysql_select_db('Site', $con);
	
	//$date = date("Y-m-d H:i:s"); //Get the current date
	$username = $_SESSION['username']; //Get the username
	
	//$q ="UPDATE OGs SET last_login = '$date' WHERE username='$username'"; 
	//$q2 = mysql_query($q) or trigger_error(mysql_error()." ".$q); 
	// TODO: Implement use for this...
	
	header("location: login.php");

	session_destroy(); //Destroy the session
	
	$cookieParams = session_get_cookie_params();
	setcookie(session_name(), '', 0, $cookieParams['path'], $cookieParams['domain'], $cookieParams['secure'], $cookieParams['httponly']); //Destroy the session cookie
	$_SESSION = array(); //Clear out the session
?>