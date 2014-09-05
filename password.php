<?php

/*

This is the form that is passed when you submit for login login

*/
session_start();

require_once 'classes/membership.php';

if($_POST && !empty($_POST['username']) && !empty($_POST['password']))
{
	$response = membership::validateUser($_POST['username'], $_POST['password']); //Validates the user in the DB
}

?>