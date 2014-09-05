<?php

	if(!isset($_SESSION)) //Pretty much included in every single class. Have to make sure the session is set
	{ 
		session_start(); 
	} 
	
	$con=mysql_connect("localhost","KyleM","Minshall1!"); //Connect to the database
	$db_selected = mysql_select_db("Site", $con);
	
	/*
	
	$post_id is the id of the post you want to check and see if it exists
	
	Does a query to make sure that the post you're trying to like actually exists
	
	*/
	function exists($post_id)
	{
		$post_id = (int)$post_id;
		return (mysql_result(mysql_query("SELECT COUNT(id) FROM posts WHERE id='$post_id'"), 0) == 0) ? false : true;
	}
	
	/*
	
	$post_id is the id of the post you want to check
	
	Checks to see if the user has already liked the post
	
	*/
	function liked($post_id)
	{
		$post_id = (int)$post_id;
		$username = $_SESSION['username'];
		return (mysql_result(mysql_query("SELECT COUNT(id) FROM likes WHERE username='$username' AND post='$post_id'"), 0) == 0) ? false : true;
	}
	
	/*
	
	$post_id is the id of the post you want to check
	
	Returns the number of likes on the post (So that you can add 1 to it)
	
	*/
	function like_count($post_id)
	{
		$post_id = (int)$post_id;
		return (int)mysql_result(mysql_query("SELECT likes FROM posts WHERE id='$post_id'"), 0);
	}
	
	/*
	
	$post_id is the id of the post you want to check 
	
	Adds 1 to the like count of the post
	
	*/
	function add_like($post_id)
	{
		$post_id = (int)$post_id;
		mysql_query("UPDATE posts SET likes = likes + 1 WHERE id='$post_id'");
		$username = $_SESSION['username'];
		mysql_query("INSERT INTO likes (username, post) VALUES ('$username', '$post_id')");
	}
	
	/*
	
	$post_id is the id of the post you want to check 
	
	Subtracts 1 from the like count of the post
	
	*/
	function delete_like($post_id)
	{
		$post_id = (int)$post_id;
		mysql_query("UPDATE posts SET likes = likes - 1 WHERE id='$post_id'");
		$username = $_SESSION['username'];
		mysql_query("DELETE FROM likes WHERE username='$username' AND post='$post_id'");
	}

?>