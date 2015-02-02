<?php


	if(!isset($_SESSION)) //Pretty much included in every single class. Have to make sure the session is set
	{ 
		session_start(); 
	} 
	
	$con=mysql_connect("localhost","KyleM","Minshall1!"); //Connect to the database
	$db_selected = mysql_select_db("Site", $con);
	
	
	function exists($reply_id)
	{
		$reply_id = (int)$reply_id;
		return (mysql_result(mysql_query("SELECT COUNT(id) FROM replies WHERE id='$reply_id'"), 0) == 0) ? false : true;
	}
	
	
?>