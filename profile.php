<?php

require_once 'classes/membership.php';

ini_set('display_errors',1);
error_reporting(E_ALL);

$con=mysql_connect("localhost","KyleM","Minshall1!");
$db_selected = mysql_select_db('Site', $con);

membership::confirm();
$username = $_SESSION['username'];

$uploadDir = 'images/'; //Image Upload Folder

if(isset($_POST['Submit']))
{
	$fileName = $_FILES['Photo']['name'];
	$tmpName  = $_FILES['Photo']['tmp_name'];
	$fileSize = $_FILES['Photo']['size'];
	$fileType = $_FILES['Photo']['type'];
	
	$temp = explode(".",$_FILES['Photo']['name']);
	$newfilename = $username . '.' .end($temp);
	
	$filePath = $uploadDir . $newfilename;
	
	$result = move_uploaded_file($tmpName, $filePath);
	
	if (!$result) {
		echo "Error uploading file";
		exit;
	}
	
	if(!get_magic_quotes_gpc())
	{
	    $fileName = addslashes($fileName);
		$filePath = addslashes($filePath);
	}
	
	$query = "UPDATE OGs SET profile='$filePath' WHERE username='$username'";
	mysql_query($query) or trigger_error(mysql_error()." ".$query); 
}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<title>Profile</title>
		<link rel="stylesheet" type="text/css" href="css/default.css">
	</head>
	<body style="background-image: none;">
		<div align="center">
			<?php
			$sql = "SELECT profile FROM OGs WHERE username='$username'";
			$profile_pic = mysql_result(mysql_query($sql), 0);
			?>
			<p>
				Current profile picture:<br><br>
				<img src="<?php echo $profile_pic ?>" 
					alt="Profile" 
					height="200px" 
					width="200px"
				/>
			</p>
			<p>
				<form name="Image" enctype="multipart/form-data" action="" method="POST">
					<input type="file" name="Photo" size="2000000" accept="image/jpg, image/jpeg, image/png, image/x-png" size="26"></input>
					<input type="submit" class="button" name="Submit" value="Submit"></input>
					<input type="reset" class="button" value="Cancel"></input>
				</form>
			</p>
		</div><!-- end main --> 
	</body>
</html>