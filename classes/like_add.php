<?php
	include 'like.php';
	
	if(isset($_POST['post_id'], $_SESSION['username']) && exists($_POST['post_id']))
	{
		$post_id = (int)$_POST['post_id']; //Casts the post id as an int
		
		if(liked($post_id)) //Checks if the user already liked the post
		{
			delete_like($post_id); //If they did, it removes a like (from the table `likes`)
		}
		else
		{
			add_like($post_id); //Otherwise it adds one to the table
		}
	}
?>