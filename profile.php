<?php

require_once 'classes/membership.php';

$con=mysql_connect("localhost","KyleM","Minshall1!");
$db_selected = mysql_select_db('Site', $con);

membership::confirm();
$username = $_SESSION['username'];

if(isset($_POST['Submit']))
{
	echo "Upload: " . $_FILES["file"]["name"] . "<br>";
	echo "Type: " . $_FILES["file"]["type"] . "<br>";
	echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
	echo "Stored in: " . $_FILES["file"]["tmp_name"];
	
	move_uploaded_file($_FILES["file"]["tmp_name"],
	      "upload/" . $_FILES["file"]["name"]);
	      echo "Stored in: " . "images/" . $_FILES["file"]["name"];
	
	if (!$result) {
		echo "Error uploading file";
		exit;
	}

	//$query = "INSERT INTO OGs ( profile ) VALUES ('$filePath') WHERE username='$username'";
	//mysql_query($query) or die('Error, query failed'); 
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
				<form action="" method="post"
					enctype="multipart/form-data">
					<label for="file">Filename:</label>
					<input type="file" name="file" id="file"><br>
					<input type="submit" name="submit" value="Submit">
				</form>
			</p>
		</div><!-- end main --> 
	</body>
</html>