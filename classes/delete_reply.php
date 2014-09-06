<?php

	include 'reply.php';
	
	if(isset($_POST['reply_id'], $_SESSION['username']) && exists($_POST['reply_id']))
	{
		$reply_id = (int)$_POST['reply_id'];

		mysql_query("UPDATE replies SET deleted=1 WHERE id='$reply_id'");
	}	
	
?>