<?php     
         session_start();
         @$logged_user_id=$_SESSION['name']; 
         if($logged_user_id==true)
         {
         echo'welcome :'. $logged_user_id.'<br>';
         echo'<a href="signout.php">Signout</a>';
         }
         else
         {
         	echo'welcome :Guest<br>';
         	echo '<a href="signup.html">pls register yourself</a>';
         }      
?>
<?php
	require_once('includes/insert-class.php');
	
	//$logged_user_id = 1;
	
	if ( !empty ( $_POST ) ) 
	{
		$add_status = @$insert->add_status($logged_user_id, $_POST);
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Post Status</title>
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body>
		<div id="navigation">
			<ul>
				<li><a href="welcome.php">Home</a></li>
				<li><a href="view-profile.php">View Profile</a></li>
				<li><a href="edit-profile.php">Edit Profile</a></li>
				<li><a href="friends-directory.php">Member Directory</a></li>
				<li><a href="friends-list.php">Friends List</a></li>
				<li><a href="feed-view.php">View Feed</a></li>
				<li><a href="feed-post.php">Post Status</a></li>
				<li><a href="messages-inbox.php">Inbox</a></li>
				<li><a href="messages-compose.php">Compose</a></li>
			</ul>
		</div>
		<h1>Post Status</h1>
		<div class="content">
			<form method="POST">
					<input name="status_time" type="hidden" value="<?php echo time() ?>" />
				<p>What's on your mind?</p>
				<textarea name="status_content"></textarea>
				<p>
					<input type="submit" value="Submit" />
				</p>
			</form>
		</div>
	</body>
</html>