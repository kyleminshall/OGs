<?php
	
ini_set('display_errors',1);
error_reporting(E_ALL);

class Mysql {
	
	/*
	
	This is a HUGE method. Super important.
	
	$key = permission key user enters
	$fname = first name
	$lname = last name
	$username = desired username
	$password = password
	$cpassword = confirm password
	
	
	Checks to make sure the passwords match. Then hashes the password input by the user to be added to the database.
	Connecs to the database. Checks the Key. If it's invalid, returns an error. Checks if the key is used. If it is,
	returns an error. Checks to see if the username is not already taken. 
	
	If all those checks pass, then it adds the user to the OGs (Users) table and marks the key as used.
	
	*/
	
	static function signup($fname, $lname, $username, $password, $cpassword)
	{
		if($password !== $cpassword)
		{
			return "Passwords do not match."; //Obvious error message is obvious
		}
		
		$password = hash('sha256', $password); //Hash password
		
		$con=mysql_connect("localhost","KyleM","Minshall1!"); //Connect to database
		$db_selected = mysql_select_db('Site', $con); //Chose the database
		
		if(mysqli_connect_errno()) 
		{
		  echo "Failed to connect to MySQL: " . mysqli_connect_error(); //If that fails, display an error (obviously)
		}
		
		$user = "SELECT * FROM OGs WHERE username='$username'"; //Lookup username in table
		$check = mysql_query($user, $con);
		$row = mysql_fetch_assoc($check); //Return result as associative array
		
		if(!empty($row))
		{
			return "This username has already been taken."; //Let them know that username is taken
		}
			
		//If all of those checks pass, insert their info into the database.
		$insert = "INSERT INTO OGs (name, username, password) VALUES ('".$fname." ".$lname."', '$username', '$password')";
		$return = mysql_query($insert, $con) or trigger_error(mysql_error()." ".$insert);
		
		return;
	}
	
	/*
	
	Login method
	$username = the username the visitor enters on the login page
	$password = the password the visitor enters on the login page
	
	If the info matches, they're logged into the site. Otherwise they're kept out.
	
	*/
	static function verify($username, $password)
	{
		$con=mysql_connect("localhost","KyleM","Minshall1!"); //Connect to the database
		$db_selected = mysql_select_db('Site', $con); //Select the site database
		
		if(mysqli_connect_errno()) 
		{
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		
		$query = "SELECT * FROM OGs WHERE username='$username'"; //Lookup username
		
		$result = mysql_query($query, $con) or trigger_error(mysql_error()." ".$query);
		
		$row = mysql_fetch_assoc($result);
		
		if($password === $row['password']) //Check to see if their entered password matches the one from their table entry
		{
			mysql_close($con);
			return $row['username']; //If it matches, they're in!
		}
		else
		{
			mysql_close($con);
			return; //Otherwise, kick them out
		}
	}
}

?>