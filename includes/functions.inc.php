<?php 

function emptyInputSignup($user, $pass, $num) {
	$result;
	if (empty($user) || empty($pass) || empty($num)) {
		// code...
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function invalidUser($user) {
	$result;
	if (!preg_match("/^[a-zA-Z0-9]*$/", $user)) {
		// code...
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function invalidNum($num) {
	$result;
	if (!preg_match("/^[0-9]*$/", $num)) {
		// code...
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function userExists($con, $user) {
	$sql = "SELECT * FROM staff WHERE staff_uname = ?;";
	$stmt = mysqli_stmt_init($con);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		// code...
		header("location: ../account_manage.php");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "s", $user);
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultData)) {
		// code...
		return $row;
	}
	else {
		$result = false;
		return $result;
	}

	mysqli_stmt_close($stmt);


}
function createUser($con, $user, $pass, $num) {
	$sql = "INSERT INTO staff (staff_uname, staff_pass, staff_cnumber) VALUES (?, ?, ?);";
	$stmt = mysqli_stmt_init($con);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		// code...
		header("location: ../account_manage.php=stmtfailed");
		exit();
	}
	
	mysqli_stmt_bind_param($stmt, "sss", $user, $pass, $num);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("location: ../account_manage.php?error=none");
		exit();
}

function emptyInputlogin($user, $pass) {
	$result;
	if (empty($user) || empty($pass)) {
		// code...
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function adminExists($con, $user) {
	$sql = "SELECT * FROM admin WHERE username = ?;";
	$stmt = mysqli_stmt_init($con);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		// code...
		header("location: ../loginform.php?error=nouser");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "s", $user);
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultData)) {
		// code...
		return $row;
	}
	else {
		$result = false;
		return $result;
	}
}

function staffExists($con, $user) {
	$sql = "SELECT * FROM staff WHERE staff_uname = ?;";
	$stmt = mysqli_stmt_init($con);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		// code...
		header("location: ../loginform.php?error=nouser");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "s", $user);
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultData)) {
		// code...
		return $row;
	}
	else {
		$result = false;
		return $result;
	}
}

function loginUser($con, $user, $pass) {
	$adminExists = adminExists($con, $user);
	



	if ($adminExists === false) {
		header("location: ../loginform.php?error=wronglogin");
		
		}
	
		$pwd = $adminExists["password"];


		// $formPass = $adminExists["password"];
		$checkPwd = password_verify($pass, $pwd);
		// // $checkPwd = ($_POST['pass'] === $row['staff_pass']);

		if ($pass !== $pwd) {
			// code...
			header("location: ../loginform.php?error=wronglogin");
		
		exit();
		}
		else if ($pass === $pwd) {
			// code...
			session_start();
			$_SESSION["id"] = $adminExists["id"];
			$_SESSION["name"] = $adminExists["username"];
			header("location: ../admin_interface.php");
			exit();
		}
	
}
function loginStaff($con, $user, $pass) {
	$staffExists = staffExists($con, $user);
	



	if ($staffExists === false) {
		header("location: ../loginform.php?error=wronglogin");
		
		}
	
		$pwd = $staffExists["staff_pass"];


		// $formPass = $adminExists["password"];
		$checkPwd = password_verify($pass, $pwd);
		// // $checkPwd = ($_POST['pass'] === $row['staff_pass']);

		if ($pass !== $pwd) {
			// code...
			header("location: ../loginform.php?error=wronglogin");
		
		exit();
		}
		else if ($pass === $pwd) {
			// code...
			session_start();
			$_SESSION["id"] = $staffExists["id"];
			$_SESSION["name"] = $staffExists["staff_user"];
			header("location: ../medstaff/med.php");
			exit();
		}
	
}