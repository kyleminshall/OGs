<?php

require_once 'classes/membership.php'; //Requried in every page for confirming membership

$con=mysql_connect("localhost","KyleM","Minshall1!"); //Connect to the database, yo
$db_selected = mysql_select_db('Site', $con);

membership::confirm(); //Make sure they're successfully authenticated in the site before showing the page

?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Current Work in Progress</title> <!-- Page title -->
		<link rel="stylesheet" type="text/css" href="css/default.css">
	</head>
	<body style="background-image: none;">
		<div id="top">
			<center>
				<p>
					Website Version : 1.0.0<br> <!-- Current version of the site -->
					The OG Social Network <!-- Working title -->
				</p>
			</center>
		</div>
		<div id="main" style="width:100%;margin-left:-50%;line-height:28px;">
			<p>
				<b>Work in Progress:</b> <!-- Feature that is currently being worked on -->
				<br>
				<br>
			</p>
			<p>
				<b>Features to be worked on:</b> <!-- Features to be worked on at a later time -->
				<br>
				- Notifications for replies to a post <br>
				- Notifications for replies in a post you have commented on <br>
				- @mentions (this will take a while) <br>
				- Image posts (this will also take a while) <br>
				- Chat system for messaging users <br>
				<br>
				<br>
			</p>
			<p>
				<b>If you guys want to start developing:</b>
				<br>
				<a href="https://docs.google.com/document/d/1A2_5uLfmEyhjBgcmf-18gLY7lN3o17iSmO3ci6hDMRQ/edit?usp=sharing">Engineering Intro!</a>
				<br>
			</p>
			<p style="font-size:22px; text-decoration:none">
				<a style="text-decoration:none" href="index.php"><button class="turquoise-flat-button" style="background:#FC4144">Go Home</button></a> <!-- Button to send the user back to the main page -->
			</p>
		</div><!-- end main -->
	</body>
</html>
