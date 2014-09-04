<?php

require_once 'classes/membership.php';

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
	$filePath = $uploadDir . $fileName;
	
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
	
	$query = "INSERT INTO OGs ( profile ) VALUES ('$filePath') WHERE username='$username'";
	mysql_query($query) or die('Error, query failed'); 
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
				<img src="<?php echo $profile_pic ?>" alt="Profile" height="20%" width="20%">
			</p>
			<p>
				<form name="Image" enctype="multipart/form-data" action="" method="POST">
					<input type="file" name="Photo" size="2000000" accept="image/jpg, image/jpeg, image/png, image/x-png" size="26"><br/>
					<INPUT type="submit" class="button" name="Submit" value="  Submit  "> 
						&nbsp;&nbsp;<INPUT type="reset" class="button" value="Cancel">
				</form>
			</p>
		</div><!-- end main --> 
	</body>
</html>