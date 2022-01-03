<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Account Management</title>
</head>
<body>
	<div>
	<h1>Manage Accounts</h1>
	<input style="float: right;" type="button" value="Go back" onclick="window.location.href='http://localhost/capstone/admin.php';">
	</div>

	<?php include 'includes/conn.php'; ?>


	<div>
		<form>
			<h1>Medical staff list: </h1>
			<?php
				$sql = "SELECT * FROM staff";
				$result = $con->query($sql);

				if($result->num_rows > 0) {
					while($row = $result->fetch_assoc()){
						echo "<br> id: ". $row["staff_id"]. " - Username: ". $row["staff_uname"]. " - Password " . $row["staff_pass"] . "<br>";
					}
				} else {
					echo "0 results";
				}

			?>
		</form>
	</div>



	<div style="margin-top: 5%;">
		<h1>Add Medical Staff</h1>
	<form action="includes/add_staff.inc.php" method="post">
		<input type="text" name="user" placeholder="Username...">
		<input type="text" name="pass" placeholder="Password...">
		<input type="text" name="num" placeholder="Contact Number...">
		<button type="submit" name="submit">Add Staff</button>
	</form>
	</div>

	<?php
		if (isset($_GET["error"])) {
		 	// code...
		 	if ($_GET["error"] == "emptyinput") {
		 		// code...
		 		echo "<p>Fill in all fields!</p>";
		 	}
		 	else if ($_GET["error"] == "invalidusername") {
		 		// code...
		 		echo "<p>Invalid Username.</p>";
		 	}
		 	else if ($_GET["error"] == "invalidnumber") {
		 		// code...
		 		echo "<p>Invalid Number.</p>";
		 	}
		 	else if ($_GET["error"] == "stmtfailed") {
		 		// code...
		 		echo "<p>Something went wrong.</p>";
		 	}
		 	else if ($_GET["error"] == "takenusername") {
		 		// code...
		 		echo "<p>Username already taken.</p>";
		 	}
		 	else if ($_GET["error"] == "none") {
		 		// code...
		 		echo "<p>Account added.</p>";
		 	}
		 } 
	 ?>
</body>
</html>