<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>
<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Admin</a>
    </li>
  </ul>
  </nav>

<nav class="navbar navbar-light fixed-top bg-dark navbar-dark" style="padding:0; min-height: 2.0rem">
  <div class="container-fluid mt-2 mb-2">
  	<div class="col-lg-12">
  		<div class="col-md-1 float-left" style="display: flex;">
  		
  		</div>
      <div class="col-md-8 float-left text-white">
        <h5><b>Online Booking</b></h5>
      </div>
	  	<div class="float-right">
        <div class=" dropdown mr-4">
            <a href="#" class="text-white dropdown-toggle"  id="account_settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> </a>
              <div class="dropdown-menu" aria-labelledby="account_settings" style="left: -2.5em;">
                <a class="dropdown-item" href="QCUfrontpage.php?action=logout"><i class="fa fa-power-off"></i> Logout</a>
              </div>
        </div>
      </div>
  </div>
  
</nav>
<br>

  
<div class="container ">
<div class="row">

    <div class="col-md-3 col-sm-12">
       <!--LIST -->
       <a class="btn btn-primary btn-block btn-block" href="appointment_type.php"><i class="fas fa-plus"></i> Administrator</a>  
       <br>
      <div id="accordion">
        
      <div class="card">
        <div class="card-header">
          <a class="card-link" data-toggle="collapse" href="#collapseOne">
            Folders <span class="float-right"><i class="fas fa-plus"></i></span>
          </a>
        </div>
        <div id="collapseOne" class="collapse show" data-parent="#accordion">
          <div class="card-body p-2">
            <a href="medstaff/manage_account.php" class="text-dark"><i class="fas fa-inbox"></i> Account Management</a>
          </div>
           <div class="card-body p-2">
          
               <a href="" class="text-dark">  <i class="fas fa-sticky-note"></i> Certificate Management </a>
          </div>
		  </div>
           <div class="card-body p-2">
          
               <a href="" class="text-dark">  <i class="fas fa-sticky-note"></i> Certificate Management </a>
          </div>
		   <div class="card-body p-2">
          
               <a href="" class="text-dark">  <i class="fas fa-sticky-note"></i> Database Management </a>
          </div>
		  <div class="card-body p-2">
          
               <a href="" class="text-dark">  <i class="fas fa-sticky-note"></i> General Settings </a>
          </div>
        
      </div>

    </div>
    </div>  

    <div class="col-md-9 col-sm-12">
      <!--Dashboard -->
      <div class="jumbotron bg-info text-light p-3">
      <div class="container">
        <h1>Dashboard</h1>

      </div>
    </div>

      <div class="card">
    <div class="card-header" style="border-top:3px solid skyblue;">Your Appointments</div>

    <div class="card-body">
   <div class="table-responsive">
        <table class="table table-hover">
    <thead>
      <tr>
        <th>Appointment Code</th>
        <th>Appointment</th>
        <th>Schedule</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
    </div>

    </div>


    </div>

</div>
</div>
</div>

</body>
</html>
