<?php
	
namespace OG\ClubBundle\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
    
ini_set('display_errors',1);
error_reporting(E_ALL);

class Notify {
	
	static function notify_reply($target, $sender, $id)
	{
		if(!isset($_SESSION)) //Pretty much included in every single class. Have to make sure the session is set
		{ 
			session_start(); 
		} 

		$con=mysql_connect("localhost","KyleM","Minshall1!"); //Connect to the database
		$db_selected = mysql_select_db("Site", $con);
		
		$server = $_SERVER['REQUEST_URI']."?post=$id";
		$color = "#1F80C9";
		$message = "<b>$sender</b> commented on <a style=\"text-decoration:none;color:$color\" href=\"$server\">your post</a>!";
		
		mysql_query("INSERT INTO notifications (user, message) VALUES ('$target', '$message')");
	}
}

?>