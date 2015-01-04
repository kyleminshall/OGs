<?php
namespace OG\ClubBundle\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

include 'Notify.php';

class Submit{

	/*

	$username = the username of the person submitting the post
	$comment = the text of the submission

	Adds the post to the posts table in the database

	*/
	static function post($username, $comment)
	{
		if(!addslashes($comment)) 
		{
			return; //breaks because of an error
		}
		
		$con=mysql_connect("localhost","KyleM","Minshall1!"); //Connects to the database
		$db_selected = mysql_select_db("Site", $con);
		
		$date = date("Y-m-d H:i:s"); //Gets the current date
		
		$q ="INSERT INTO posts (username, comment, date)  
			VALUES ('$username', '$comment','$date')"; //String for the sql query. 
		
		$q2 = mysql_query($q) or trigger_error(mysql_error()." ".$q); //Runs the query
		
		if(!$q2) 
		{
			die(mysql_error()); //Close if there's an error
		}
        
        //Sending a Yo Message on posts :)
        
        $q3 = "SELECT * FROM OGs WHERE Yo IS NOT NULL";
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
        
        $parse = self::mentions($comment, $username);
	}
	
	/*

	$username = the username of the person commenting on the post
	$post = the id of the post being replied to 
	$reply = the text of the submission

	Adds a reply to the database given a post id

	*/
	static function comment($username, $post, $reply)
	{
		if(!addslashes($reply)) 
		{
			return; 
		}
		
		$date = date("Y-m-d H:i:s"); //Gets the current date
		
		$con=mysql_connect("localhost","KyleM","Minshall1!"); //Connect to the database
		$db_selected = mysql_select_db("Site", $con);
		
		$q ="INSERT INTO replies (post, username, reply, date)  
			VALUES ('$post', '$username', '$reply','$date')"; //Insert the reply into the replies table
		
		$q2 = mysql_query($q) or trigger_error(mysql_error()." ".$q); //Execute the query
		
		$target = mysql_result(mysql_query("SELECT username FROM posts WHERE id='$post'"),0);
		
		if($target !== $username) notify::notify_reply($target, $username, $post);
		
		if(!$q2) 
		{
			die(mysql_error()); //Break if there's an error
		}
	}
	
	/*

	$text = Text to be checked for links
	
	Formats links with a href tag.
	Not going to comment these because I didn't write them. They're just here to use.

	*/
	static function auto_link_text($text) {
	    $pattern  = '#\b(([\w-]+://?|www[.])[^\s()<>]+(?:\([\w\d]+\)|([^[:punct:]\s]|/)))#'; //This is a regular expression. Yikes.
	    return preg_replace_callback($pattern, array(get_class(), 'auto_link_text_callback'), $text);
	}

	//See above
	
	static function auto_link_text_callback($matches) {
	    $max_url_length = 100;
	    $max_depth_if_over_length = 3;
	    $ellipsis = '&hellip;';

	    $url_full = $matches[0];
	    $url_short = '';

	    if (strlen($url_full) > $max_url_length) {
	        $parts = parse_url($url_full);
	        $url_short = $parts['scheme'] . '://' . preg_replace('/^www\./', '', $parts['host']) . '/';

	        $path_components = explode('/', trim($parts['path'], '/'));
	        foreach ($path_components as $dir) {
	            $url_string_components[] = $dir . '/';
	        }

	        if (!empty($parts['query'])) {
	            $url_string_components[] = '?' . $parts['query'];
	        }

	        if (!empty($parts['fragment'])) {
	            $url_string_components[] = '#' . $parts['fragment'];
	        }

	        for ($k = 0; $k < count($url_string_components); $k++) {
	            $curr_component = $url_string_components[$k];
	            if ($k >= $max_depth_if_over_length || strlen($url_short) + strlen($curr_component) > $max_url_length) {
	                if ($k == 0 && strlen($url_short) < $max_url_length) {
	                    // Always show a portion of first directory
	                    $url_short .= substr($curr_component, 0, $max_url_length - strlen($url_short));
	                }
	                $url_short .= $ellipsis;
	                break;
	            }
	            $url_short .= $curr_component;
	        }

	    } else {
	        $url_short = $url_full;
	    }

	    return "<a style=\"text-decoration:none;color:#1F80C9;\" target=\"_blank\" rel=\"nofollow\" href=\"$url_full\">$url_short</a>";
	}
    
    static function mentions($text, $username) {
        $pattern = '/@(\w+)/';
        preg_match_all($pattern, $text, $matches);
        foreach (array_unique($matches[0]) as $match)
        {
    		$con=mysql_connect("localhost","KyleM","Minshall1!"); //Connects to the database
    		$db_selected = mysql_select_db("Site", $con);

    		$post = mysql_result(mysql_query("SELECT id FROM posts WHERE username='$username' ORDER BY id DESC"), 0);  
        
            Notify::notify_mention(preg_replace("/[^A-Za-z0-9 ]/", '', $match), $username, $post);
        }
    }
    
    static function mention($text) {
        $pattern = '/@(\w+)/';
        return preg_replace_callback($pattern, array(get_class(), 'mentions_callback'), $text);
    }
    
    static function mentions_callback($matches)
    {
		$con=mysql_connect("localhost","KyleM","Minshall1!"); //Connects to the database
		$db_selected = mysql_select_db("Site", $con);

        $name = preg_replace("/[^A-Za-z0-9 ]/", '', $matches[0]);
		$user_num = mysql_num_rows(mysql_query("SELECT * FROM OGs WHERE username='$name'"));  
    
        if($user_num > 0) {
            $result = preg_replace('/(^|\s)@(\w+)/', "<span style=\"color:#1F80C9\">".$matches[0]."</span>", $matches[0]);
            return $result;
        }
        else {
            return $matches[0];
        }
    }
}