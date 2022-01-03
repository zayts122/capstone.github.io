<!DOCTYPE html>
<html>
<head>
<title> Registration Form</title>
<style type="text/css">
.style1 {
	border-width: 0;
	border:solid black 5px;
	width: 50%;
	border-radius: 5px;
	margin-top: 10px auto;
	color: black;
	text-align: center;
	font-size: 25px;
	position: relative;

	
}
.style2 {
	border-width: 0;
	border:solid black 10px;
	width: 50%;
	border-radius: 5px;
	margin: 10px auto;
	background: white;
	position: absolute;
	
	
	
}
.p {
	font-size: 20px;
	color: blue;

}
</style>
</head>

<b><left class="style1"> REGISTRATION FORM </b></left>
	<p><left class="p">Fill this form for covid-19 testing</left> </p>
<body>
<form action="insert.php" method="POST">
<form action="OnlineRegistration.php" method ="post">
<table class="style2" width ="550px">

<tr>
<td>Firstname: </td>
<td> <input type="text" name="firstname" placeholder="Firstname" required ></td>
</tr>

<tr>
<td>Middlename: </td>
<td> <input type="text" name="middlename" placeholder="Middlename"></td>
</tr>

<tr>
<td>Lastname: </td>
<td> <input type="text" name="lastname" placeholder="Lastname" required ></td>
</tr>

<tr>
<td>Date Of Birth (MM/DD/YYYY): </td>
<td> <input type="text" name="dateofbirth" placeholder="DOB"></td>
</tr>

<tr>
<td>Gender: </td>
<td> <input type="radio" name="gender" value="m" required > Male
<input type="radio" name="gender" value="f" required > Female
</td>

<tr>
<td>Present Address: </td>
<td> <input type="text" name="presentAdd"></td>
</tr>

<tr>
<td>Phone Number: </td>
<td> <input type="text" name="phonenumber" required > </td>
</tr>
<tr>
<td>Email Address: </td>
<td> <input type="text" name="EmailAdd"></td>
</tr>

<tr>
<td> COVID-19 Test:<td>
<td>
<select name="covid">
<option selected hidden value="" required>SELECT COVID-19 TEST</option>
<option value="test 1"> Atigen Swab Test </option>
<option value="test 2"> Atigen Saliva Test </option>
<option value="test 3"> Atigen Blood Prick</option>
</select>
<input type="test" name="covidTest">
</td>
</tr>
<tr>

<td>&nbsp;</td>
<td><input type="submit" value="Submit">
<input type="reset" value="Reset"></td>

</tr>
</table>
</form>




</body>
</html>