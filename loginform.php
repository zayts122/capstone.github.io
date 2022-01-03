<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Management Login</title>
	<link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/fixed.css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>

<body>





<div class="container-fluid">


<div class="row vh-100">
<div class="col-md-6 login-img">

</div>




<div class="col-md-6 align-self-center">

<form class="w-50 m-auto" method="post" action="includes/login.inc.php">
<img src="img/BEdgeV2.png">

<h4 class="text-center">Management Login</h4>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">User Id</label>
    <input type="text" class="form-control" placeholder="Username..." name="user" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Password..." name="pass">
  </div>
 <br>


  
 <br>

 <div class="text-end">
  <button type="submit" name="submit" class="btn btn-primary">Login</button>
</div>

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
</div>



</div>
</div>

<style>
	.login-img{
		background: url(img/computers.png) no-repeat center center / cover;
	}

</style>


 <script>
        $('#dropdown').dropdown();
 </script>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
</body>
