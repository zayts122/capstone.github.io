<?php
$con = mysqli_connect("localhost","root","","capstone");

// Check connection
if ($con === false){
  die("ERROR: Could not connect. " . mysqli_connect_error());
}

//print host info
//echo "Connect Successfully. Host info: " . mysqli_get_host_info($con);
?>