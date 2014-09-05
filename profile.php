<?php

require_once 'classes/membership.php';

/*
ini_set('display_errors',1);
error_reporting(E_ALL);
*/

membership::confirm(); //Confirm the member is valid
$username = $_SESSION['username'];

$con=mysql_connect("localhost","KyleM","Minshall1!"); //Connect to the database
$db_selected = mysql_select_db('Site', $con);

$uploadDir = 'images/'; //Image Upload Folder

if(isset($_POST['Submit'])) //ALL THIS JUNK IS FOR UPLOADING A PROFILE PICTURE AND MOVING IT INTO THE IMAGES DIRECTORY
{
	$fileName = $_FILES['Photo']['name']; //Name of the uploaded photo
	$tmpName  = $_FILES['Photo']['tmp_name']; //Temp Name of the uploaded photo (Dunno why thi sis ever used)
	$fileSize = $_FILES['Photo']['size']; //Size of the photo
	$fileType = $_FILES['Photo']['type']; //Type of photo uploaded
	
	$temp = explode(".",$_FILES['Photo']['name']); //Separate the photo name from the extension
	$newfilename = $username . '.' .end($temp); //Rename the photo to be $username.extension
	
	$filePath = $uploadDir . $newfilename; //File path that is uploaded
	
	$result = move_uploaded_file($tmpName, $filePath); //Move the photo to the photos directory
	
	if (!$result) {
		echo "Error uploading file"; //If something breaks, show an error!
		exit; //Stop the upload process
	}
	
	if(!get_magic_quotes_gpc()) //I dunno what this does! :)
	{
	    $fileName = addslashes($fileName);
		$filePath = addslashes($filePath);
	}
	
	$query = "UPDATE OGs SET profile='$filePath' WHERE username='$username'"; //Set the profile picture in the user table to be the path of the newly uploaded photo
	mysql_query($query) or trigger_error(mysql_error()." ".$query); //Do the query or output an error
}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<title>Profile</title> <!-- Page title -->
		<link rel="stylesheet" type="text/css" href="css/default.css"> <!-- If you don't know what this does by now you need to read up on HTML. Like seriously. -->
	</head>
	<body style="background-image: none;">
		<div align="center">
			<?php
			$sql = "SELECT profile FROM OGs WHERE username='$username'"; //Get the profile picture of the user
			$profile_pic = mysql_result(mysql_query($sql), 0);
			?>
			<p>
				Current profile picture:<br><br>
				<img src="<?php echo $profile_pic ?>" 
					alt="Profile" 
					height="200px" 
					width="200px"
				/> <!-- Show the profile picture the user currently has set -->
			</p>
			<p>
				<form name="Image" enctype="multipart/form-data" action="" method="POST"> <!-- Form to upload a new picture -->
					<input type="file" name="Photo" size="2000000" accept="image/jpg, image/jpeg, image/png, image/x-png" size="26"></input> <!-- File upload submission button -->
					<input type="submit" class="button" name="Submit" value="Submit"></input> <!-- Submit button -->
					<input type="reset" class="button" value="Cancel"></input> <!-- Cancel/Clear button -->
				</form>
			</p>
			<p style="font-size:22px; text-decoration:none">
				<a style="text-decoration:none" href="index.php"><button class="turquoise-flat-button" style="background:#FC4144">Go Home</button></a> <!-- Button to return back to the home direcotry -->
			</p>
		</div><!-- end main --> 
	</body>
</html>