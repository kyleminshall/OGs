<?php

	session_start(); //Start PHP session
	
	require_once 'classes/membership.php'; //Gotta include that membership confirmation class
	require_once 'classes/submit.php'; //Class for submitting comments and posts
	membership::confirm(); //Confirm the current user session

/*	Comment out if adding features. It displays SQL errors on the page for you.
	
	ini_set('display_errors',1);
	error_reporting(E_ALL);
*/
	$con=mysql_connect("localhost","KyleM","Minshall1!"); //Connect to the database TODO: Do this in a separate class
	$db_selected = mysql_select_db("Site", $con);
	
	$offset = 10;
	
	$current_page = 1;
	
	if(isset($_GET["page"]))
	{
		$current_page = $_GET["page"];
	}
	else if($current_page < 1) 
	{
		$current_page = 1;
	}
	else 
	{
		$current_page = 1;
	}
	
	$total = mysql_result(mysql_query("SELECT COUNT(id) FROM posts WHERE deleted=0"),0);
	
	$inf = "SELECT * FROM posts WHERE deleted=0 ORDER BY date DESC"; //Query string for posts in descending order by time

	$info = mysql_query($inf) or trigger_error(mysql_error()." ".$inf); // Do the query
	
	if(!$info) //If there's an error in the query, die and show the error
	{
		die(mysql_error()); 
	}

	$info_rows = mysql_num_rows($info);  //Get the number of posts 
	
	$username = $_SESSION['username']; //Set the $username = to the username of the current logged in user
	echo '<head>'; //Echo means print. So start showing this HTML. 
	echo '<title>Main Board</title>'; //Title of the page is Main Board
	echo '<link rel="stylesheet" type="text/css" href="css/default.css">'; //Import the stylesheet
	echo '<script src="js/jquery-2.1.1.js" type="text/javascript" charset="utf-8"></script>'; //Import jQuery! 
	echo '</head>'; //Close the header
	echo '<body style="font-family:helvetica;background-image:none;">'; //Initiailize the body

	if(isset($_POST['submit'])) //Check if someone submitted a post
	{ 
		$comment = addslashes(nl2br($_POST['comment'])); //Add slashes to the post 
		
		//Request post submit
		submit::post($username,$comment); //Call the submit class to parse the submitted text for links and add href tags
	
		header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); //Refresh the page after a submission to show the change
	} 
	else if(isset($_POST['comment'])) //Check if someone replied to a post
	{ 
		$reply = addslashes($_POST['reply']); //Add html slasehs to the reply
		
		//Knowing which post the user replied to
		$post_num = $_POST['post']; 
		
		//Add comment 
		submit::comment($username, $post_num, $reply);

		//Refresh page so they can see new comment 
		header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . '#post_' . $post_num); 
	} 
	else 
	{  //display form 
		?> 
		<div align="center">
			<p style="font-size:22px; text-decoration:none">
				<a style="text-decoration:none" href="index.php"><button class="turquoise-flat-button" style="background:#FC4144">Go Home</button></a> <!-- Button for returning to the home page -->
			</p>
		</div>
		<br>
		<br>
		<div align="center">
			<form name="comments" action="" method="post"> <!-- Form for comment submission -->
				<table width="500px" border="0" cellspacing="0" cellpadding="0" style="box-shadow: 0px 0px 3px #484848;"> 
					<tr style="background-color: #f6f6f6"> 
						<td>
							<textarea class='autoExpand' data-min-rows='3' name="comment" placeholder="Submit a post..." style="width:500px;resize:none;border:none;padding:10px;background:transparent;font-size:18px;outline:none;" rows="3" wrap="VIRTUAL"></textarea></textarea> <!-- Text area for typing into the post -->
						</td> 
					</tr> 
					<tr align="right" style="background-color: #dddddd"> 
						<td>
							<input type="submit" name="submit" value="Submit"> <!-- Button to submit the post -->
						</td> 
					</tr> 
				</table> 
			</form>
		</div> 
		<br>
		<?php
		echo '<hr width="50%" noshade>'; //Horizontal line. Separates the submission form and the posts
	} // end else 
	echo '<div align="center" display="inline-block;">'; //Center the posts
	while($info2 = mysql_fetch_object($info)) //Cycle through all posts and print the HTML for each of them
	{        
		//MASS OF VARIABLES. DEAL WITH IT
		
		$post_number = $info2->id; //Current ID of the post
		
		$time = strtotime($info2->date); //Date the post was submitted
		$submitted = date("m/d/y \a\\t g:i A", $time); //Date formatted properly to 'Month/Day/Year at Minute:Second A/PM'
		
		$rep = "SELECT * FROM replies WHERE post='$info2->id' AND deleted=0"; //Select all the replies to this post using the ID as the indentifier
		$replies = mysql_query($rep) or trigger_error(mysql_error())." ".$rep;
		$count = mysql_num_rows($replies); //Count the number of replies
		
		$likes = mysql_result(mysql_query("SELECT likes FROM posts WHERE id='$post_number'"),0); //Get the number of likes on the post
		
		$unlike = (mysql_result(mysql_query("SELECT COUNT(id) FROM likes WHERE username='$username' AND post='$post_number'") , 0) == 0) ? false : true; //Check if current user viewing the page has liked the post
		$button = $unlike == true ?'Unlike':'Like'; //Set the button text to like or unlike 
		
		$people = mysql_query("SELECT username FROM likes WHERE post='$post_number'"); //Get the users who liked the post
		$user_liked = mysql_num_rows(mysql_query("SELECT username FROM likes WHERE username='$username' AND post='$post_number'")) > 0;
		
		$profile = mysql_result(mysql_query("SELECT profile FROM OGs WHERE username='$info2->username'"),0); //Get the profile photo of OP (Original Poster)
		
		echo '<table id="post_'.$post_number.'" style="border-collapse:collapse;table-layout:fixed;box-shadow: 0px 0px 3px #484848;margin:40px 0 40px 0" width="500px" cellpadding="10px">'; 
		echo '<tr>'; 
		
		echo '<td style="width:40px">
				<img src="'.$profile.'" alt="Profile" height="50px" width="50px"/>
			  </td>'; //Show the profile picture
			  
		echo '<td style="width:65%">
				<p style="font-size:18px;color:000;">
					<b>'.stripslashes($info2->username).'</b>
					<br>
					<span style="font-size:12px;color:#494949;">'.$submitted.'</span>
				</p>
			  </td>';  //Show their username and the date the post was submitted on
			  
		echo '<td style="width:30%;padding:0;">
				<p style="font-size:14px;color:000;text-align:right">Likes :<br>Comments :
				</p>
			  </td>'; //Show likes and comments
			  
		echo '<td style="width:5%;padding:0;">
				<p style="font-size:14px;color:000;text-align:center">
					<span id="post_'.$post_number.'_likes">'.$likes.'</span><br>'.$count.' 
				</p>
			  </td>'; //Actual numbers for each
		echo '</tr>';
		
		echo '<tr>'; 
		echo '<td colspan="4" style="word-wrap:break-word"> 
				<p style="font-size:18px;color:000">'.stripslashes(submit::auto_link_text($info2->comment)).'</p>
				<br>
			  </td>'; //Display the text of the post
		echo '</tr>';
		
		$count = mysql_num_rows($people); //Count the number of likes
		$only = false; //Only is a flag used to check and see if the current user viewing the page is the only person to have liked the post
		
		echo '<tr style="background-color:#f6f6f6;">';
		echo '<td colspan="4" style="padding-left: 10px;">';
		echo '<p id="likes_'.$post_number.'" style="font-size:12px;padding:0;text-align:left">'; //ID of the p tag is the post number so that it's unique and identifiable 
		if($count > 0) //If people liked the post
		{
			if($user_liked) //If that person that liked it is the current user viewing the page, always show them first!
			{
				echo 'You';
				$count--; //Subtract one from the total count of likes (for obvious reasons)
				if($count > 0)  //If there are other people besides the current user, 
				{
					echo ', '; //add a comma and a space
				}
				else //otherwise
				{
					echo ' like this.'; //finish it up
					$only = true; //and set the $only value to true
				}
			}
			while($people2 = mysql_fetch_object($people)) //Cycle through all the people that liked the post
			{
				if($people2->username === $username) //If you're one of them
				{
					//Don't print anything because you don't want the repeat
				}
				else 
				{
					echo '<b>'.$people2->username.'</b>'; //Otherwise, print the username of the person who liked it
				}
				if($count > 1) echo ', '; //And add a comma and a space
				$count--; //And subtract one from the count
			}
			if(!$only) //If other people besides the current user liked the post
			{
				$num = mysql_num_rows($people) > 1 ? ' like this.' : ' likes this.'; //s for plurality
				echo $num;
			}
		}
		else //If nobody has liked the post
		{
			echo 'No one likes this.'; //Say so
		}
		echo '</p>';
		echo '</td>';
		echo '</tr>';
		
		echo '<tr style="background-color:#dddddd;">'; 
		echo '<td colspan="4" style="padding-left: 10px;">
				<span style="font-size:12px;padding:0;display:block;float:left">
					<a id="like_'.$post_number.'" style="text-decoration:none;color:#1F80C9;" href="#" onclick="like_add('.$post_number.');return false;">'.$button.'</a> 
				</span>';  //HTML for the Like button (Not actually a button. It's a link. Hence the href=#. Executes like_add on click)
		if($info2->username === $username)
		{
			echo '<span style="font-size:12px;padding:0;display:block;float:right">
						<a id="delete_'.$post_number.'" style="text-decoration:none;color:#FD0D1B;" href="#" onclick="delete_post('.$post_number.');return false;">Delete</a> 
				  </span>'; //HTML for the Delete button (Not actually a button. It's a link. Hence the href=#. Executes like_add on click)
		}
		echo '</td>';
		echo '</tr>';
		
		while($replies2 = mysql_fetch_object($replies)) //QUERY for all of the comments on this post
		{
			//VARIABLES
			
			$profile = mysql_result(mysql_query("SELECT profile FROM OGs WHERE username='$replies2->username'"),0); //Get the profile picture of the comment OP
			
			$time = strtotime($replies2->date); //Get the posting date
			$replied = date("m/d/y \a\\t g:i A", $time); //Format the posting date
			$reply_id = $replies2->id;
			
			$reply = stripslashes(submit::auto_link_text($replies2->reply)); //Check the reply for links
			
  			echo '<tr id="reply_'.$reply_id.'" style="background-color:#f6f6f6;">'; //Time for some HTML
  			echo '<td colspan="4" style="position:relative"> 
					<div style="float:left;position:absolute;padding-right:10px"> 
						<img src="'.$profile.'" alt="Profile" height="30px" width="30px"/>
					</div>';
			if($replies2->username === $username)
			{		
				echo '<div style="float:right;display:block;">
							<span style="color:ddd;font-size:12px">
								<a class="reply_delete" style="text-decoration:none;color:#ddd;" href="#" onclick="delete_reply('.$reply_id.');return false;">X</a> 
							</span>
						</div>';
			}
			echo '<p style="font-size:14px;color:000;margin:0;padding-left:40px;padding-right:20px;">
						<b>'.stripslashes($replies2->username).'</b> '.stripslashes($reply).'<br>
						<span style="font-size:12px;color:#494949;">'.$replied.'</span>
					</p>
				  </td>'; //Kind of a little weird way of doing things. The DIV position is absolute so it doesn't conflict with the column spacing set by the top column. 
				  		  //Then the Profile Picture is shown in the div. And then the comment is shown in the TD padded out away from the image so that it wraps cleanly. :)
  			echo '</tr>';
		}
		
		echo '<tr style="background-color:#f6f6f6;border-top:1px solid black;">'; //Form for entering a reply. Black border is to show separation from the actual comments
		echo '<td colspan="4" style="padding:5px">
				<form style="margin:0;" name="like" action="" method="post">
					<textarea name="reply" class="autoExpand" placeholder="Reply..." style="width:100%;resize:none;border:none;background:transparent;font-size:12px;outline:none;" rows="1" wrap="physical"></textarea>
					<input type="hidden" name="post" value="'.$post_number.'">
					<div align="right">
					  <input style="vertical-align:top;align:right" type="submit" name="comment" value="Post">
					</div>
				</form>
			  </td>';	//Should be pretty straightforward. Creates a text area for input and then submits when the user clicks the submit button
		echo '</tr>';
		
		echo '</table>'; //ALWAYS CLOSE YOUR TAGS. This is closing the entire table containing the header info, the username and picture, the post text, the likes, and the comments
	}//end while 
	
	echo '<span>
			<a href="http://'.$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"].'?page='.($current_page-1).'">Previous </a> | 
			<a href="http://'.$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"].'?page='.($current_page+1).'">Next</a>
		  </span>';
	
	echo '</div>'; //Close the div that is holding all of these table elements
	echo '</body>'; //Close the body
	
	//Always load your javascript at the end. You need to make sure it loads after all of the elements on the page have already loaded or else things might not run properly
  	echo '<script src="js/expand.js" type="text/javascript" charset="utf-8"></script>'; //Import the expand.js class
  	echo '<script src="js/like.js" type="text/javascript"></script>'; //Import the like.js class
	
?> 