<?php

include('mysql.php');

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
		$ensure_credentials = mysql::signup($key, $fname, $lname, $username, $password, $cpassword); //Calls the signup method in the database class
		
		if(is_null($ensure_credentials)) //ensure_credentials stores the error returned by signup. If it's null, there's no error aka successful registration
		{
			header("location: login.php"); //Re-direct the user to the login page so they can log in 
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
	static function confirm()
	{
		if(!isset($_SESSION)) //Checks if the session is set
		{ 
			session_start(); //Starts a PHP session (cookie)
		} 
		
		$maintenance = true; //SET TRUE IF ON MAINTENANCE
		if($maintenance)
		{
			header("location: down.php"); //Show the maintenance page
		}
		else if($_SESSION['status'] != 'authorized') //If they are not authorized in the session
		{
			header("location: login.php"); //Lock them out of the site and send them to the login page
		}
	}
	
	/*
	
	Login method
	$username = the username the visitor enters on the login page
	$password = the password the visitor enters on the login page
	
	Sends the username and password to the mysql::verify method to confirm the entry in the database.
	If the info matches, they're logged into the site. Otherwise they're kept out.
	
	*/
	static function validateUser($username, $password)
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
		$ensure_credentials = mysql::verify($username, $password); //Call the verify method in the mysql class
		
		if(!is_null($ensure_credentials)) //No errors means successful authentication
		{
			$_SESSION['status'] = 'authorized'; //Set their session status to authorized
			$_SESSION['username'] = $username; //Set their session username to their username for global access throughout the site
			header("location: index.php"); //Redirect them to the index.php page - the main page of the site
		} 
		else 
		{
			return "Incorrect Username or Password"; //Otherwise return an error that they had an incorrect username or password
		}
	}
}

?>