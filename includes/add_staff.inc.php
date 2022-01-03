<?php

if(isset ($_POST["submit"])) { 


	$user = $_POST["user"];
	$pass = $_POST["pass"];
	$num = $_POST["num"];

	require_once 'conn.php';
	require_once 'functions.inc.php';


	if (emptyInputSignup($user, $pass, $num) !== false) {
		// code...
		header("location: ../account_manage.php?error=emptyinput");
		exit();
	}
	if (invalidUser($user) !== false) {
		// code...
		header("location: ../account_manage.php?error=invalidusername");
		exit();
	}
	if (invalidNum($num) !== false) {
		// code...
		header("location: ../account_manage.php?error=invalidnumber");
		exit();
	}
	if (userExists($con, $user) !== false) {
		// code...
		header("location: ../account_manage.php?error=takenusername");
		exit();
	}


	createUser($con, $user, $pass, $num);


}
	else {
		header("location: ../account_manage.php");
		exit();
}