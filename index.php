<?php

require_once 'classes/membership.php'; //File that handles a lot of membership functions

$con=mysql_connect("localhost","KyleM","Minshall1!"); //Start a connection to the database. :)
$db_selected = mysql_select_db('Site', $con); //Select the "Site" database

membership::confirm(); //When you get to this site, confirm that the user is in fact logged in. 

?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" /> <!-- UTF is the character encoding -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> <!-- Compatibility junk -->
		<title>Success</title> <!-- Page title -->
		<link rel="stylesheet" type="text/css" href="css/default.css"> <!-- Link the CSS stylesheet for elements-->
		<script src="js/jquery-2.1.1.js" type="text/javascript" charset="utf-8"></script> <!-- Gotta import that jquery -->
	</head>
	<body style="background-image: none;">
		<div id="main">
			<p>
				<?php 
					$username = $_SESSION['username']; //Set the username equal to the session username (Set after authenticating)
					$name_row = mysql_fetch_assoc(mysql_query("SELECT name FROM OGs WHERE username='$username'")); //Get the users real name
					$name = $name_row['name']; //Set the name variable equal to their name returned from the database
				?>
				Successfully authenticated user: <h1><b> <?php echo $name ?> </b></h1> <!-- Displaying that they were successfully authenticated -->
			</p>
			<p style="font-size:22px; text-decoration:none">
				<a style="text-decoration:none" href="profile.php"><button class="turquoise-flat-button">Profile</button></a> <!-- Button to go to the profile page (profile.php) -->
			</p>
			<p style="font-size:22px; text-decoration:none">
				<a style="text-decoration:none" href="comments.php"><button class="turquoise-flat-button">Main Board</button></a> <!-- Button to go to the comments page (comments.php) -->
			</p>
			<p style="font-size:22px; text-decoration:none">
				<a style="text-decoration:none" href="progress.php"><button class="turquoise-flat-button">Progress</button></a> <!-- Link to the stuff that is currently in progress on the site (progress.php) -->
			</p>
			<p style="font-size:22px; text-decoration:none">
				<a style="text-decoration:none" href="logout.php"><button class="turquoise-flat-button" style="background:#FC4144">Log Out</button></a> <!-- Opens the logout.php to sign the user out of the site -->
			</p>
		</div><!-- end main --> 
		<div id="sidebar">
			<h1 style="text-align:center">Activity</h1>
			<hr style="color:black" noshade>
			<div id="activity">
				<p class="element"><b>Kilenaitor</b> posted on the Main board!</p>
			</div>
			<hr style="color:black" noshade>
			<div id="activity">
				<p class="element"><b>parablooper</b> replied to a post by <b>Divine</b>!</p>
			</div>
			<hr style="color:black" noshade>
			<div id="sidebar-footer">
				<p style="font-size:22px;text-decoration:none;margin:0;">
					<a style="text-decoration:none" href="#" onclick="remove_activity();return false;">
						<button class="mark-button">Mark As Read</button>
					</a>
				</p>
			</div>
		</div>
	</body>
	<script src="js/main.js" type="text/javascript" charset="utf-8"></script>
</html>