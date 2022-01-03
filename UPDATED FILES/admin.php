<?php 
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="refresh" content="1" >
	<title>Admin Page</title>
</head>
<body>
	<?php
		include 'includes/conn.php';
		include 'includes/functions.inc.php'
	?>
	<div>
		
	<h1>Welcome Admin!</h1>
	<input style="float: right" type="button" value="Logout" onclick="window.location.href='http://localhost/capstone/index.php';">
	</div>

	<div>
		<?php 
			echo "Today is " . date("l-Y-m-d") . "<br>";
			date_default_timezone_set("Asia/Manila");
echo "The time is " . date("h:i:sa");
		 ?>
		
		<br><br>
		<a href="account_manage.php">Account Management</a>
		<a href="#">Certificate Management</a>
		<a href="#">Messages and Notification</a>
		<a href="#">Database Management</a>
		<a href="#">General Settings</a>
	</div>

</body>
</html>