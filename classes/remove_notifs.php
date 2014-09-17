<?php
	
	if(!isset($_SESSION)) //Pretty much included in every single class. Have to make sure the session is set
	{ 
		session_start(); 
	} 
	
	$con=mysql_connect("localhost","KyleM","Minshall1!"); //Connect to the database
	$db_selected = mysql_select_db("Site", $con);
	
	$username = $_SESSION['username'];
	
	mysql_query("DELETE FROM notifications WHERE user='$username'");
?>
