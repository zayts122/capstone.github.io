<?php

$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$dateofbirth = $_POST['dateofbirth'];
$presentAdd = $_POST['presentAdd'];
$phonenumber = $_POST['phonenumber'];
$EmailAdd = $_POST['EmailAdd'];

if (!empty ($firstname) || !empty ($middlename) || !empty ($lastname) ||!empty ($dateofbirth) || !empty ($presentAdd) 
	||!empty ($phonenumber) ||!empty ($EmailAdd)) {
		
		$host ="localhost";
		$dbUsername ="root";
		$dbPassword ="";
		$dbname ="reservation";
	//connection
	
	$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);
	if (mysqli_connect_error()){
		die('Connection Error('.mysqli_connect_errno().')'.mysql_connect_error()};
	}
	else{
		$SELECT = "SELECT email FROM patients where email = ? Limit 1";
		$INSERT = "INSERT Into patients (fistname,middlename,lastname
		,dateofbirth,presentAdd,phonenumber,EmailAdd) values (?,?,?,?,?,?,?)";
	//Prepare statement 
	
	$pst = $conn->prepare($SELECT);
	$pst->bind_param("s", $email);
	$pst->execute();
	$pst->bind_result($email);
	$pst->store_result();
	$rnum = $pst->num_rows;
	
	if($rnum == 0){
		$pst->close();
		$pst = $conn->prepare($INSERT);
		$pst->bind_param("sssssss", $firstname,$middlename,$lastname
							,$dateofbirth,$presentAdd,$phonenumber,$EmailAdd);
		$pst->execute();

		echo "New Record Added Successfully";
			}
			else{
				echo "This Email Aleady Exist";
			}
		$pst->close();
		$conn->close();
	}else {
		echo "Fields Are Required";
		die();
	}
	
?>