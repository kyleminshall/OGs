<?php

namespace OG\ClubBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\File;
use Symfony\Component\HttpFoundation\Request;

class PageController extends Controller
{
    public function indexAction()
    {
        if(!self::confirm($this->getRequest()->getSession()))
            return $this->redirect($this->generateUrl('login'));
        
        $session = $this->getRequest()->getSession();
        
        $con=mysql_connect("localhost","KyleM","Minshall1!"); //Start a connection to the database. :)
        $db_selected = mysql_select_db('Site', $con); //Select the "Site" database
        
        $username = $session->get('username');
        $name = mysql_result(mysql_query("SELECT name FROM OGs WHERE username='$username'"), 0);
        
        $notifications = self::getNotifications();
        $activity = self::getActivity();
    
        return $this->render('OGClubBundle:Page:home.html.twig', array('name' => $name, 'activity' => $activity, 'notifications' => $notifications));
    }
    
    public function progressAction()
    {
        if(!self::confirm($this->getRequest()->getSession()))
            return $this->redirect($this->generateUrl('login'));
        
        return $this->render('OGClubBundle:Page:progress.html.twig');
    }
    
    public function profileAction()
    {
        if(!self::confirm($this->getRequest()->getSession()))
            return $this->redirect($this->generateUrl('login'));
        
        $con=mysql_connect("localhost","KyleM","Minshall1!"); //Start a connection to the database. :)
        $db_selected = mysql_select_db('Site', $con); //Select the "Site" database
        
        $session = $this->getRequest()->getSession();
        $username = $session->get('username');
        
        $request = Request::createFromGlobals();
        $directory = $this->container->get('kernel')->locateResource('@OGClubBundle/Resources/public/images');
        $error = "";
        $color = "#89DC90";
        if($request->getMethod() == "POST")
        {
            foreach($request->files as $uploadedFile) {
                if(!isset($uploadedFile))
                {
                    $error = "You forgot to select a photo!";
                    $color = "#F9434A";
                }
                else if($uploadedFile->isValid())
                {
                    $date = date("Ymd");
                    $ext = $uploadedFile->guessExtension();
                    $name = $username.$date.'.'.$ext;
                    $file = $uploadedFile->move($directory, $name);
                    $query = "UPDATE OGs SET profile='$name' WHERE username='$username'"; //Set the profile picture in the user table to be the path of the newly uploaded photo
                    mysql_query($query);
                    $error = "Successfully updated!";
                }
                else
                {
                    $error = "Error uploading file!";
                    $color = "#F9434A";
                }
            }
        }
        
		$picture = mysql_result(mysql_query("SELECT profile FROM OGs WHERE username='$username'"), 0);
        
        return $this->render('OGClubBundle:Page:profile.html.twig', array('picture' => $picture, 'error' => $error, 'color' => $color));
    }
    
    public function mainAction()
    {
        if(!self::confirm($this->getRequest()->getSession()))
            return $this->redirect($this->generateUrl('login'));
        
        $con=mysql_connect("localhost","KyleM","Minshall1!"); //Start a connection to the database. :)
        $db_selected = mysql_select_db('Site', $con); //Select the "Site" database
        
        $session = $this->getRequest()->getSession();
        $username = $session->get('username');
        
        $current_page = 1;
        $total = mysql_result(mysql_query("SELECT COUNT(id) FROM posts WHERE deleted=0"),0);
        $num_results = 10;
		$last_page = $_GET["page"] == $total/$num_results;
        
        if(isset($_GET["page"])) //Checks if there is a ?page= in the url
    	{
			$last_page = $_GET["page"]-1 > $total/$num_results;
    		if($_GET["page"]-1 > $total/$num_results) //Makes sure you can't enter a page that doesn't exist
    		{
    				$current_page = ceil($total/$num_results); //If you do, it does a ceiling function to calculate the last page
                    return $this->redirect('main?page='.$current_page);//Redirect them to the last page if they enter a page that doesn't exist
    		}
	    	else if($_GET["page"] < 1) //If they enter something like ?page=0
	    	{
	    		$current_page = 1; //Set the default to page 1
				return $this->redirect('main?page='.$current_page);//Redirect them to the last page if they enter a page that doesn't exist
	    	}
    		else
    		{
    			$current_page = $_GET["page"]; //Otherwise, give them the page they asked for
    		}
    	}
        
        $max = 'LIMIT '.($current_page - 1 ) * $num_results.','.$num_results; 
        $inf = "SELECT * FROM posts WHERE deleted=0 ORDER BY date DESC $max";
        
        if(isset($_GET["post"]))
    	{
            $id = $_GET["post"];
            $inf = "SELECT * FROM posts WHERE id=$id AND deleted=0 ORDER BY date DESC $max";
    	}
        
        $info = mysql_query($inf) or trigger_error(mysql_error()." ".$inf); 
        $info_rows = mysql_num_rows($info);
        
        $temp_user = $session->get('username');
        $username = mysql_result(mysql_query("SELECT username FROM OGs WHERE username='$temp_user'"), 0);
        
        if(isset($_POST['submit'])) //Check if someone submitted a post
    	{ 
    		$comment = addslashes(nl2br($_POST['comment'])); //Add slashes to the post 
	
    		//Request post submit
    		Submit::post($username,$comment); //Call the submit class to parse the submitted text for links and add href tags

    		return $this->redirect($this->generateUrl('main')); //Refresh the page after a submission to show the change
    	} 
    	else if(isset($_POST['comment'])) //Check if someone replied to a post
    	{ 
    		$reply = addslashes($_POST['reply']); //Add html slasehs to the reply
	
    		//Knowing which post the user replied to
    		$post_num = $_POST['post']; 
	
    		//Add comment 
    		Submit::comment($username, $post_num, $reply);

    		//Refresh page so they can see new comment 
    		return $this->redirect($this->generateUrl('main'));
    	} 
        
        $posts = array();
        
        while($info2 = mysql_fetch_object($info))
        {
            $post_number = ($info2->id);
            $time = strtotime($info2->date);
            $submitted = date("m/d/y \a\\t g:i A", $time);
            $rep = "SELECT * FROM replies WHERE post='$info2->id' AND deleted=0";
            $results = mysql_query($rep);
            $count = mysql_num_rows($results);
            $likes = mysql_result(mysql_query("SELECT likes FROM posts WHERE id='$post_number'"), 0);
            $unlike = (mysql_result(mysql_query("SELECT COUNT(id) FROM likes WHERE username='$username' AND post='$post_number'") , 0) == 0) ? false : true;
            $button = $unlike == true ?'Unlike':'Like';
            $people = mysql_query("SELECT username FROM likes WHERE post='$post_number'");
            $user_liked = mysql_num_rows(mysql_query("SELECT username FROM likes WHERE username='$username' AND post='$post_number'")) > 0;
            $profile = mysql_result(mysql_query("SELECT profile FROM OGs WHERE username='$info2->username'"),0);
            $poster = stripslashes($info2->username);
            $message = stripslashes(Submit::auto_link_text($info2->comment));
            $deletable = $info2->username === $username;
            $like = "";
            $only = false;
            $like_num = mysql_num_rows($people);
            
            if($like_num > 0)
            {
                if($user_liked) //If that person that liked it is the current user viewing the page, always show them first!
				{
					$like .= "You";
					$like_num--;
					if($like_num > 0)  //If there are other people besides the current user, 
						$like .= ", "; //add a comma and a space
					else //otherwise
					{
						$like .= " like this."; //finish it up
						$only = true; //and set the $only value to true
					}
                }
                while($people2 = mysql_fetch_object($people)) //Cycle through all the people that liked the post
				{
					if($people2->username === $username){}
					else 
						$like .= $people2->username; //Otherwise, print the username of the person who liked it
					if($like_num > 1) 
                        $like .= ", "; //And add a comma and a space
					$like_num--; //And subtract one from the count
				}
                if(!$only) //If other people besides the current user liked the post
				{
					$num = mysql_num_rows($people) > 1 ? " like this." : " likes this."; //s for plurality
					$like .= $num;
				}
            }
            else //If nobody has liked the post
				$like = "No one likes this."; //Say so
            
            $replies = self::getReplies($results);
            
            $posts[] = array('post_number' => $post_number, 'submitted' => $submitted, 
                             'count' => $count, 'likes' => $likes, 'unlike' => $unlike, 
                             'people' => $people, 'user_liked' => $user_liked, 
                             'profile' => $profile, 'replies' => $replies, 'poster' => $poster,
                             'message' => $message, 'like' => $like, 'deletable' => $deletable,
                             'button' => $button);
        }
        
        return $this->render('OGClubBundle:Page:main.html.twig', array('posts' => $posts, 'total' => $total,'current_page' => $current_page, 'last_page' => $last_page));
    }
    
    public function loginAction()
    {
		$session = $this->getRequest()->getSession();
		
    	if($_POST && !empty($_POST['username']) && !empty($_POST['password']))
    		$response = Membership::validateUser($_POST['username'], $_POST['password'], $session);	//Validate the user when they click submit on the login

		if(self::checkLoggedIn($session))
			return $this->redirect($this->generateUrl('index'));
		
        if(isset($response) && $response)
            return $this->redirect($this->generateUrl('index'));
        else if(isset($response))
            return $this->render('OGClubBundle:Page:login.html.twig', array('error' => $response));
        else
            return $this->render('OGClubBundle:Page:login.html.twig');
    }
    
    public function logoutAction()
    {
        $session = $this->getRequest()->getSession();
        $session->clear();
        return $this->redirect($this->generateUrl('index'));
    }
    
    public function signupAction()
    {
        if($_POST && !empty($_POST['key']) && !empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['cpassword']))
        	$response = Membership::signup($_POST['key'], $_POST['firstName'], $_POST['lastName'], $_POST['username'], $_POST['password'], $_POST['cpassword']);
        
        if(isset($response) && $response)
            return $this->redirect($this->generateUrl('index'));
        else if(isset($response))
            return $this->render('OGClubBundle:Page:signup.html.twig', array('error' => $response));
        else
            return $this->render('OGClubBundle:Page:signup.html.twig');
    }
    
    public function confirm($session)
    {
        $session = $this->getRequest()->getSession();
        return Membership::confirm($session);
    }
    
    public function getActivity()
    {
        $con=mysql_connect("localhost","KyleM","Minshall1!"); //Start a connection to the database. :)
        $db_selected = mysql_select_db('Site', $con); //Select the "Site" database
        
        $session = $this->getRequest()->getSession();
        $username = $session->get('username');
        
        $last_login = mysql_result(mysql_query("SELECT last_login FROM OGs WHERE username='$username'"),0);

        $result = array();

		$query = "SELECT CONCAT(posts.username, ' posted on the Main Board.') as msg, date, id, username
				  FROM posts WHERE date > '$last_login' AND deleted=0
				  UNION
				  SELECT CONCAT(replies.username, ' commented on a post by ', (SELECT username FROM posts WHERE id=replies.post), '.') as msg, date, replies.post as id, username
				  FROM replies WHERE date > '$last_login' AND deleted=0
				  ORDER BY date DESC";
                  
        $results = mysql_query($query); 
        $num_results = mysql_num_rows($results);
                 
        while ($results2 = mysql_fetch_object($results))
        {
            if($results2->username !== $username)
            {
                $temp = strtotime($results2->date); //Date the post was submitted
                $time = date("m/d/y \a\\t g:i A", $temp);
            
                $currentUrl = $this->getRequest()->getUri();
                
                $server = $currentUrl."main?post=$results2->id";
                $message = ($results2->msg);
                
                $result[] = array('time' => $time, 'message' => $message, 'server' => $server);
            }
            else
                $num_results--;
        }         
        return $result;
    }
    
    public function getNotifications()
    {
        $con=mysql_connect("localhost","KyleM","Minshall1!"); //Start a connection to the database. :)
        $db_selected = mysql_select_db('Site', $con); //Select the "Site" database
        
        $session = $this->getRequest()->getSession();
        $username = $session->get('username');
        
        $query = "SELECT message FROM notifications WHERE user='$username'";
		$results = mysql_query($query);
		$num_results = mysql_num_rows($results);
        
        $result = array();
        
        while($results2 = mysql_fetch_object($results)) //Cycle through all posts and print the HTML for each of them
		{
			$message = ($results2->message);
            $result[] = array('message' => $message);
		}
        return $result;
    }
    
    public function getReplies($results)
    {
        $con=mysql_connect("localhost","KyleM","Minshall1!"); //Start a connection to the database. :)
        $db_selected = mysql_select_db('Site', $con); //Select the "Site" database
        
        $session = $this->getRequest()->getSession();
        $username = $session->get('username');
        
        $total = array();
        
        while($replies2 = mysql_fetch_object($results))
        {
            $profile = mysql_result(mysql_query("SELECT profile FROM OGs WHERE username='$replies2->username'"), 0);
            $time = strtotime($replies2->date);
            $replied = date("m/d/y \a\\t g:i A", $time);
            $reply_id = $replies2->id;
            $text = stripslashes(submit::auto_link_text($replies2->reply));
            $deletable = $replies2->username === $username;
            $commenter = stripslashes($replies2->username);
            $total[] = array('profile' => $profile, 'replied' => $replied, 'reply_id' => $reply_id, 'text' => $text, 'deletable' => $deletable, 'commenter' => $commenter);
        }
        return $total;
    }
	
	public function checkLoggedIn($session)
	{
		return Membership::confirm($session);
	}
}