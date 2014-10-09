<?php

namespace OG\ClubBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class Membership 
{
	/*
	
	$key = permission key user enters
	$fname = first name
	$lname = last name
	$username = desired username
	$password = password
	$cpassword = confirm password

	Signup method is called from registration and passes in those parameters into the 
	mysql::signup method to add the user to the database upon a successful registration.

	If the registration is successful, they are redirected to the login page.

	If it's not successful, they're shown the error on the page and asked to re-enter their information.
	
	*/
	static function signup($key, $fname, $lname, $username, $password, $cpassword)
	{
		$ensure_credentials = Mysql::signup($key, $fname, $lname, $username, $password, $cpassword); //Calls the signup method in the database class
		
		if(is_null($ensure_credentials)) //ensure_credentials stores the error returned by signup. If it's null, there's no error aka successful registration
		{
			 return true; //Re-direct the user to the login page so they can log in 
		} 
		else 
		{
			return $ensure_credentials; //Otherwise, display the error
		}
	}
	
	/*
	
	Checks to start a user session. 
	Checks to see if the session is authorized. 
	If the session isn't authorized, they're redirected to the login page to sign in.
	
	*/
	static function confirm($session)
	{
		$maintenance = false; //SET TRUE IF ON MAINTENANCE
        
		if($maintenance)
		{
			if(!self::isAdmin($_SESSION['username'])) header("location: down.php"); //Show the maintenance page
		}
        else if(!isset($session))
        {
            return false;
        }
		else if($session->get('status', 'no') != 'authorized') //If they are not authorized in the session
		{
            return false;
		}
        return true;
	}
	
	/*
	
	Login method
	$username = the username the visitor enters on the login page
	$password = the password the visitor enters on the login page
	
	Sends the username and password to the mysql::verify method to confirm the entry in the database.
	If the info matches, they're logged into the site. Otherwise they're kept out.
	
	*/
	static function validateUser($username, $password, $session = null)
	{
		if(is_null($username))
		{
			return "Please enter your username"; //Let them know they forgot to enter a username
		}
		if(is_null($password))
		{
			return "Please enter your password"; //Let them know they forgot to enter a password
		}
		
		$password = hash('sha256', $password); //Hash the input password using SHA256 encryption algorithm (No salt because I'm lame)
		$ensure_credentials = Mysql::verify($username, $password); //Call the verify method in the mysql class
		
		if(!is_null($ensure_credentials)) //No errors means successful authentication
		{
			$session->set('status', 'authorized'); //Set their session status to authorized
			$session->set('username', $username); //Set their session username to their username for global access throughout the site
            
            return true;
		} 
		else 
		{
			return "Incorrect Username or Password"; //Otherwise return an error that they had an incorrect username or password
		}
	}
	
	static function isAdmin($username)
	{
		$con=mysql_connect("localhost","KyleM","Minshall1!"); //Connect to the database
		$db_selected = mysql_select_db('Site', $con); //Select the site database
		
		return mysql_result(mysql_query("SELECT is_admin FROM OGs WHERE username='$username'"), 0) == 1;
	}
}

?>