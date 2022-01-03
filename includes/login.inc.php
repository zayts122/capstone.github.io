<?php 

	if (isset($_POST["submit"])) {
		// code...
		$user = $_POST["user"];
		$pass = $_POST["pass"];

		require_once 'conn.php';
		require_once 'functions.inc.php'; 

		if (emptyInputLogin($user, $pass) !== false) {
			// code...
			header("location: ../loginform.php?error=emptyinput");
			exit();
		}
		else if($user === "admin"){
			loginUser($con, $user, $pass);
			header("location: ../admin_interface.php");
		exit();
		}
		else if($user!== "admin"){
			loginStaff($con, $user, $pass);
			header("location: ../medstaff/med.php");
		exit();
		}

	
	}
	