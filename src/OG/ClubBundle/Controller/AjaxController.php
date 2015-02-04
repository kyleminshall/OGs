<?php

namespace OG\ClubBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AjaxController extends Controller
{
    public function removeActivityAction()
    {
    	$con=mysql_connect("localhost","KyleM","Minshall1!"); //Connect to the database
    	$db_selected = mysql_select_db("Site", $con);
	
        $session = $this->getRequest()->getSession();
        $username = $session->get('username');
        
    	$date = date("Y-m-d H:i:s");
    	mysql_query("UPDATE OGs SET last_login = '$date' WHERE username='$username'");
        
        $return=array('responseCode' => 200,);
        return new Response(json_encode($return),$return['responseCode']); 
    }
    
    public function removeNotifsAction()
    {
    	$con=mysql_connect("localhost","KyleM","Minshall1!"); //Connect to the database
    	$db_selected = mysql_select_db("Site", $con);
	
        $session = $this->getRequest()->getSession();
        $username = $session->get('username');
	
    	mysql_query("DELETE FROM notifications WHERE user='$username'");
        
        $return=array('responseCode' => 200,);
        return new Response(json_encode($return),$return['responseCode']); 
    }
    
    public function likeAddAction()
    {
        $session = $this->getRequest()->getSession();
        $username = $session->get('username');
        
    	if(isset($_POST['post_id'], $username) && self::exists($_POST['post_id']))
    	{
    		$post_id = (int)$_POST['post_id']; //Casts the post id as an int
		
    		if(self::liked($post_id)) //Checks if the user already liked the post
    			self::delete_like($post_id); //If they did, it removes a like (from the table `likes`)
    		else
    			self::add_like($post_id); //Otherwise it adds one to the table
    	}
        
        $return=array('responseCode' => 200,);
        return new Response(json_encode($return),$return['responseCode']); 
    }
    
    public function likeGetAction()
    {
        $session = $this->getRequest()->getSession();
        $username = $session->get('username');
        
    	if(isset($_POST['post_id'], $session) && self::exists($_POST['post_id']))
    		$return=array('responseCode' => 200, 'likes' => self::like_count($_POST['post_id']));
        else
            $return=array('responseCode' => 400);
        
        return new Response(json_encode($return), $return['responseCode']); 
    }
    
	function liked($post_id)
	{
    	$con=mysql_connect("localhost","KyleM","Minshall1!"); //Connect to the database
    	$db_selected = mysql_select_db("Site", $con);
	
        $session = $this->getRequest()->getSession();
        $username = $session->get('username');
        
		$post_id = (int)$post_id;
		return (mysql_result(mysql_query("SELECT COUNT(id) FROM likes WHERE username='$username' AND post='$post_id'"), 0) == 0) ? false : true;
	}
    
	function like_count($post_id)
	{
    	$con=mysql_connect("localhost","KyleM","Minshall1!"); //Connect to the database
    	$db_selected = mysql_select_db("Site", $con);
	
        $session = $this->getRequest()->getSession();
        $username = $session->get('username');
        
		$post_id = (int)$post_id;
		return (int)mysql_result(mysql_query("SELECT likes FROM posts WHERE id='$post_id'"), 0);
	}
    
	function add_like($post_id)
	{
    	$con=mysql_connect("localhost","KyleM","Minshall1!"); //Connect to the database
    	$db_selected = mysql_select_db("Site", $con);
	
        $session = $this->getRequest()->getSession();
        $username = $session->get('username');
        
		$post_id = (int)$post_id;
		mysql_query("UPDATE posts SET likes = likes + 1 WHERE id='$post_id'");
		mysql_query("INSERT INTO likes (username, post) VALUES ('$username', '$post_id')");
	}
    
	function delete_like($post_id)
	{
    	$con=mysql_connect("localhost","KyleM","Minshall1!"); //Connect to the database
    	$db_selected = mysql_select_db("Site", $con);
	
        $session = $this->getRequest()->getSession();
        $username = $session->get('username');
        
		$post_id = (int)$post_id;
		mysql_query("UPDATE posts SET likes = likes - 1 WHERE id='$post_id'");
		mysql_query("DELETE FROM likes WHERE username='$username' AND post='$post_id'");
	}
    
    function exists($post_id)
	{
    	$con=mysql_connect("localhost","KyleM","Minshall1!"); //Connect to the database
    	$db_selected = mysql_select_db("Site", $con);
	
        $session = $this->getRequest()->getSession();
        $username = $session->get('username');
        
		$post_id = (int)$post_id;
		return (mysql_result(mysql_query("SELECT COUNT(id) FROM posts WHERE id='$post_id'"), 0) == 0) ? false : true;
	}
    
    public function deletePostAction()
	{
    	$con=mysql_connect("localhost","KyleM","Minshall1!"); //Connect to the database
    	$db_selected = mysql_select_db("Site", $con);
	
        $session = $this->getRequest()->getSession();
        $username = $session->get('username');
        
    	if(isset($_POST['post_id'], $username) && self::exists($_POST['post_id']))
    	{
    		$post_id = (int)$_POST['post_id'];
    		mysql_query("UPDATE posts SET deleted=1 WHERE id='$post_id'");
    	}	
        
        $return=array('responseCode' => 200,);
        return new Response(json_encode($return), $return['responseCode']);
	}
    
    public function deleteReplyAction()
	{
    	$con=mysql_connect("localhost","KyleM","Minshall1!"); //Connect to the database
    	$db_selected = mysql_select_db("Site", $con);
	
        $session = $this->getRequest()->getSession();
        $username = $session->get('username');
        
    	if(isset($_POST['reply_id'], $username) && self::replyExists($_POST['reply_id']))
    	{
    		$reply_id = (int)$_POST['reply_id'];
    		mysql_query("UPDATE replies SET deleted=1 WHERE id='$reply_id'");
    	}	
        
        $return=array('responseCode' => 200,);
        return new Response(json_encode($return), $return['responseCode']);
	}
	
	public function addReplyAction()
	{
    	$con=mysql_connect("localhost","KyleM","Minshall1!"); //Connect to the database
    	$db_selected = mysql_select_db("Site", $con);
		
        $session = $this->getRequest()->getSession();
        $username = $session->get('username');
		
		$reply = addslashes($_POST['form'][0]['value']); //Add html slashes to the reply

		//Knowing which post the user replied to
		$post_num = $_POST['form'][1]['value']; 

		//Add comment 
		$id = Submit::comment($username, $post_num, $reply);
        
        $return=array('id' => $id);
        return new Response(json_encode($return), 200);
	}
    
	function replyExists($reply_id)
	{
		$reply_id = (int)$reply_id;
		return (mysql_result(mysql_query("SELECT COUNT(id) FROM replies WHERE id='$reply_id'"), 0) == 0) ? false : true;
	}
    
    function getUsernameAction()
    {
        $session = $this->getRequest()->getSession();
        $username = $session->get('username');
        
        $return=array('username' => $username);
        return new Response(json_encode($return), 200);
    }
}
