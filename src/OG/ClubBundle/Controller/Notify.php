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
        
        $q3 = "SELECT * FROM OGs WHERE username='$target' AND Yo IS NOT NULL ";
        $info = mysql_query($q3) or trigger_error(mysql_error()." ".$q3);
        
        while($info2 = mysql_fetch_object($info))
        {
            $url = 'http://api.justyo.co/yo/';
            $data = array('api_token' => '24bab569-ffb8-4faf-b287-ff81559c9e4e', 'username' => $info2->Yo);

            $options = array(
                'http' => array(
                    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method'  => 'POST',
                    'content' => http_build_query($data),
                ),
            );
            $context  = stream_context_create($options);
            $result = file_get_contents($url, false, $context);

            var_dump($result);
        }
	}
    
    static function notify_mention($target, $sender, $id)
    {
        if(!isset($_SESSION))
            session_start();
        
        $con=mysql_connect("localhost", "KyleM", "Minshall1!");
        $db_selected = mysql_select_db("Site", $con);
        
        $server = $_SERVER['REQUEST_URI']."?post=$id";
        $color = "#1F80C9";
        $message = "<b>$sender</b> mentioned you in a <a style=\"text-decoration:none;color:$color\" href=\"$server\"> post</a>!";

        mysql_query("INSERT INTO notifications (user, message) VALUES ('$target', '$message')");
    }
}

?>