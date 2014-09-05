<?php
	session_start();
	$error = false;
	
	include('classes/membership.php');

	if($_POST && !empty($_POST['key']) && !empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['cpassword']))
	{
		$response = membership::signup($_POST['key'], $_POST['firstName'], $_POST['lastName'], $_POST['username'], $_POST['password'], $_POST['cpassword']);
		$error = false;	
	}
	else
	{
		$error = true;
	}
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<title>Welcome to the Site</title> <!-- Site title -->
		<link rel="stylesheet" type="text/css" href="css/default.css"> <!-- CSS Stylesheet link -->
		<link rel="stylesheet" type="text/css" href="css/component.css" /> <!-- CSS Stylesheet link -->
	</head>
	<body>
		<div id="login">
			<div id="box">
				<p>
					<h1 style="color:#494949">Register</h1> <!-- Register header text -->
				</p>
				<form method="post" action="">
					<p>
						<input class="form" id="number" name="key" type="text" placeholder="Permission Key" ><br> <!-- Box to type in the permission key -->
						<input class="form" id="Password" name="firstName" type="text" placeholder="First Name" ><br> <!-- Box to type in first name -->
						<input class="form" id="Password" name="lastName" type="text" placeholder="Last Name" ><br> <!-- Box to type in last name -->
						<input class="form" id="Password" name="username" type="text" placeholder="Username" ><br> <!-- Box to type in desired username -->
						<input class="form" id="Password" name="password" type="password" placeholder="Password"><br> <!-- Box to type in password -->
						<input class="form" id="Password" name="cpassword" type="password" placeholder="Confirm Password"><br> <!-- Box to confirm password -->
						<button type="submit" name="submit" class="btn btn-4 btn-4a icon-arrow-right" style="padding:10px 62px !important;">Sign Up!</button> <!-- Signup/Submission button -->
					</p>
				</form>
				<?php if(isset($response)) echo "<h4 class='alert'>" . $response . "</h4>";?>
			</div>
		</div><!-- end signup --> 
	</body>
	<script src="js/modernizr.custom.js"></script> <!-- Javascript -->
</html>