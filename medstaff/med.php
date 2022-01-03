<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valuetosearch'];
    
    $query = "SELECT * FROM `patient` WHERE CONCAT(`patient_id`, `p_fname`, `p_mname`, `p_lname`, `P_birthdate`, `p_age`, `p_gender`, `p_address`, `p_cnumber`, `p_occupation`, `p_nationality`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `patient`";
    $search_result = filterTable($query);
}

function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "capstone");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Blue Edge Medical Group</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

<div class="topnav" id="myTopnav">

<form action="med.php" method="post">

 <input type="text" name="valuetosearch" placeholder="Search...">
 <input type="submit" name="search" value="Search">
 <a href="#"><i class="fa fa-fw fa-bars"></i></a>
 <a href="#"><i class="fa fa-fw fa-user"></i></a>
</div>
</body>

<body>
	<div class="logo_area" id="main_menu">
		<img src ="bgg.png"></a></div><br><br><br><br>
</body>

<body>
	<div class="ct7" id="main_time">
		<script>function display_ct7() {
var x = new Date()
var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';
hours = x.getHours( ) % 12;
hours = hours ? hours : 12;
hours=hours.toString().length==1? 0+hours.toString() : hours;

var minutes=x.getMinutes().toString()
minutes=minutes.length==1 ? 0+minutes : minutes;

var seconds=x.getSeconds().toString()
seconds=seconds.length==1 ? 0+seconds : seconds;

var month=(x.getMonth() +1).toString();
month=month.length==1 ? 0+month : month;

var dt=x.getDate().toString();
dt=dt.length==1 ? 0+dt : dt;

var x1=month + "/" + dt + "/" + x.getFullYear(); 
x1 = x1 + " - " +  hours + ":" +  minutes + ":" +  seconds + " " + ampm;
document.getElementById('ct7').innerHTML = x1;
display_c7();
 }
 function display_c7(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct7()',refresh)

document.getElementById('ct7').style.fontSize='30px';
document.getElementById('ct7').style.color='#f5fffb';
document.getElementById('ct7').innerHTML = x2;
}

display_c7()

</script>
<span id='ct7'></span> <br><br><br><br>

	<body>
	<div class="bot" id="button">
		<a href="#" class="btn btn-primary">Reservation List</a>
		<a href="#" class="btn btn-primary">Cancel Request</a><br><br><br><br>
</body>

<body>
<div class="container" id="col">
<table class="table table-striped table-dark table-bordered">
  <thead>
  	<tr>
    	<th scope="col">ID</th>
    	<th scope="col">NAME</th>
   		<th scope="col">ACTIONS</th>

   		</tr>
	</thead>
  	<?php while($row = mysqli_fetch_array($search_result)):?>
    <thead>
                <tr>
                    <td><?php echo $row['patient_id'];?></td>
                    <td><?php echo $row['p_fname']. " " .$row['p_lname'];?></td>
                    <td>
                    <a href="#"><i class="fa fa-fw fa-check" style="color:green;"></i></a>
                    <a href="#"><i class="fa fa-fw fa-info"></i></a>
                  </td>
                </tr>
    			</thead>
                <?php endwhile;
                ?>
    </table>       


</body>
</html>