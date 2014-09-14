<?php
	session_start(); //Always start the session. Just always.
	
	include('classes/membership.php'); //Include the membership file for verifying the user

	if($_POST && !empty($_POST['username']) && !empty($_POST['password']))
	{
		$response = membership::validateUser($_POST['username'], $_POST['password']);	//Validate the user when they click submit on the login
	}
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<title>We're the OGs</title> <!-- Website title -->
		<link rel="stylesheet" type="text/css" href="css/default.css"> <!-- CSS stylesheet -->
		<link rel="stylesheet" type="text/css" href="css/component.css" /> <!-- CSS Stylesheet -->
	</head>
	<body>
		<div id="login">
			<div id="box">
				<form method="post" action="">
					<img class="profile-img" src="css/avatar_2x.png" alt=""><!-- Green man profile picture -->
					<p>
						<input class="form" id="Username" name="username" type="text" placeholder="Username" ><br> <!-- Username input box -->
						<input class="form" id="Password" name="password" type="password" placeholder="Password"><br> <!-- Password input box -->
						<button type="submit" name="submit" class="btn btn-4 btn-4a icon-arrow-right">Login</button> <!-- Login (submit) button -->
					</p>
				</form>
				<?php if(isset($response)) echo "<h4 class='alert'>" . $response . "</h4>";?> <!-- Show an error if one is returned -->
			</div>
		</div><!-- end login --> 
	</body>
	<script src="js/modernizr.custom.js"></script> <!-- Javascript -->
</html>