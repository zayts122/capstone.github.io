<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login</title>
</head>
<body>
	<form method="post" action="includes/login.inc.php">
		<img src="images/image2.jpg" alt="Logo"
		style="margin-top:5%;">
		<img src="images/image1.png" alt="Background" 
		style="float:right;margin-top:5%;width:74%;height:25%;">
		<!-- <h1>Login as: <select>
			<option value="admin">Admin</option>
			<option value="mdstaff">Medical Staff</option>
		</select></h1> -->
		<h1>ADMIN LOGIN</h1>

		Username: <input type="text" placeholder="Username..." name="user"
		style="margin-left:5px;">
		</br>

		Password: <input type="password" name="pass" placeholder="Password..." 
		style="margin-left:9px;"><br><br>
		<button type="submit" name="submit">Login</button>
		<input type="button" onclick="window.location.href='http://localhost/capstone/homepage-login.php';" value="Go back"/>
	</form>
	<?php
		if (isset($_GET["error"])) {
		 	// code...
		 	if ($_GET["error"] == "emptyinput") {
		 		// code...
		 		echo "<p>Fill in all fields!</p>";
		 	}
		 	else if ($_GET["error"] == "wronglogin") {
		 		// code...
		 		echo "<p>Wrong Username or Password.</p>";
		 	}
		
		 	else if ($_GET["error"] == "none") {
		 		// code...
		 		echo "<p>Logged in.</p>";
		 	}
		 } 
	 ?>
</body>
</html>