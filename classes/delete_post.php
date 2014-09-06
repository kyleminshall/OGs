<?php

	include 'like.php';
	
	if(isset($_POST['post_id'], $_SESSION['username']) && exists($_POST['post_id']))
	{
		$post_id = (int)$_POST['post_id'];

		mysql_query("UPDATE posts SET deleted=1 WHERE id='$post_id'");
	}	
	
?>