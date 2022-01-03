<?php
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$dateofbirth = $_POST['dateofbirth'];
$gender = $_POST['gender'];
$presentAdd = $_POST['presentAdd'];
$phonenumber = $_POST['phonenumber'];
$EmailAdd = $_POST['EmailAdd'];
$covid = $_POST['covid'];


if (!empty($firstname) || !empty($middlename)|| !empty($lastname)
	|| !empty($dateofbirth) || !empty($gender) || !empty($presentAdd)
	|| !empty($phonenumber)|| !empty($EmailAdd) || !empty($covid))
	{
		$host = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbname = "reservation";
		
		//connection_aborted
		
		$conn = new mysqli($host, $dbUsername,$dbPassword,$dbname);
		
		if (mysqli_connect_error()){
			die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
		}else {
			$SELECT = "SELECT email From register Where email = ? Limit 1";
			$INSERT = "INSERT Into register(firstname, middlename, lastname,dateofbirth, gender. presentAdd, phonenumber, EmailAdd, covid)
						values (?,?,?,?,?,?,?,?,?)";
		//Prepare statement
		$pst = $conn->prepare($SELECT);
		$pst->bind_param("s", $email);
		$pst->execute();
		$pst->bind_result($email);
		$pst->store_result();
		$rnum = $pst->num_rows;	
		
		if ($rnum==0){
			$pst->close();
			$pst = $conn->prepare($INSERT);
			$pst->bind_param("sssississ", $lastname,$middlename,$lastname,$dateofbirth,$gender,$presentAdd,$phonenumber,$EmailAdd,$covid);
			$pst->execute();
			echo "New Record inserted successfully";
		}else {
			echo "Email Aleady Exist";
			}
			$pst->close();
			$conn->close();
		}
	} else {
		echo "All field are required";
		die();
	}

?>