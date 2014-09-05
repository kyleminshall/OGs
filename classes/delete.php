<?php

	if(!isset($_SESSION)) //Pretty much included in every single class. Have to make sure the session is set
	{ 
		session_start(); 
	}
	
	$con=mysql_connect("localhost","KyleM","Minshall1!"); //Connect to the database
	$db_selected = mysql_select_db("Site", $con);
	
	if(isset($_POST['post_id'], $_SESSION['username']) && exists($_POST['post_id']))
	{
		$post_id = (int)$_POST['post_id'];

		mysql_query("UPDATE posts SET deleted=1 WHERE id='$post_id'");
		return "Success";
	}	
	else 
	{
		return "Error somewhere";
	}
	
?>