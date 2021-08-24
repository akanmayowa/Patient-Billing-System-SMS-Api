<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<title>Admin page</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/jquery/jquery.min.js"></script>
  <script src="bootstrap/js/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>


</head>

	<body>

  

	<nav class="navbar navbar-expand-md navbar-dark bg-success fixed-top">

<a class="navbar-brand" href="#"><img src="/index/fnphybilling/admin/img/yaba2.jpg" width="40" height="30" alt="logo">

<img src="/index/fnphybilling/admin/img/yaba3.jpg" width="170" height="30" alt="logo">
</a>

<div class="collapse navbar-collapse justify-content-between" id="nav">


<ul class="navbar-nav">



 
<li class="nav-item">
   <a class="nav-link" style="color: white;" href="/index/fnphybilling/admin/admin_home.php">DASHBOARD</a>
  </li>



  <li class="nav-item">
      <a class="nav-link" style="color: white;" href="/index/fnphybilling/admin/patientview.php">PATIENT</a>
    </li>



<li class="nav-item dropdown">
	<a class="nav-link dropdown-toggle"  style="color: white;"   href="#" id="navbardrop" data-toggle="dropdown">
	 BILLING
	</a>
	<div class="dropdown-menu">
	<a class="dropdown-item" href="/index/fnphybilling/admin/billing/createbillview.php">GENERATE BILL</a>
		</div>
  </li>


  <li class="nav-item dropdown">
	<a class="nav-link dropdown-toggle" style="color: white;"     href="#" id="navbardrop" data-toggle="dropdown">
   SMS
	</a>
	<div class="dropdown-menu">
	<a class="dropdown-item" href="/index/fnphybilling/admin/smsapi/smsview.php">SMS</a>
	  <a class="dropdown-item" href="/index/fnphybilling/admin/smsapi/smsviewpending.php">PENDING SMS</a>
	</div>
  </li>



  <li class="nav-item dropdown">
	<a class="nav-link dropdown-toggle"  style="color: white;"   href="#" id="navbardrop" data-toggle="dropdown">
   EMAIL
	</a>
	<div class="dropdown-menu">
	<a class="dropdown-item" href="/index/fnphybilling/admin/smsapi/emailview.php">EMAIL</a>
	  <a class="dropdown-item" href="/index/fnphybilling/admin/smsapi/emailviewpending.php">PENDING EMAIL</a>

	</div>
  </li>


  <li class="nav-item dropdown">
	<a class="nav-link dropdown-toggle" style="color: white;"  href="#" id="navbardrop" data-toggle="dropdown">
  REPORT
	</a>
	<div class="dropdown-menu">
	<a class="dropdown-item" href="/index/fnphybilling/admin/billing/report.php"> REPORT</a>
	  <a class="dropdown-item" href="/index/fnphybilling/admin/billing/report.php">GENERAL REPORT</a>
  </li>

  <li class="nav-item">
	<a class="nav-link" style="color: white;" href="/index/fnphybilling/logout.php">LOGOUT</a>
  </li>

</ul>


<form class="form-inline ml-3">
<div class="input-group">
<input type="text" class="form-control " placeholder="Search" >
<button type="submit" ><i class="fa fa-search"></i>Submit</button>
</div>
</form>


</div>
</nav>	
	<div class="wrapper">
	<div class="container">
		<div class="col-lg-12">
    <br><br>  <br>
			<center>
			
			
				<h4>
				<?php
        session_start();
       

				if(!isset($_SESSION['admin_login']))	//check unauthorize user not direct access in "admin_home.php" page
				{
					header("location:../index.php");  
				}

				if(isset($_SESSION['supervisor_login']))	//check employee login user not access in "admin_home.php" page
				{
					header("location: ../supervisor/supervisor_home.php");	
				}

				if(isset($_SESSION['user_login']))	//check user login user not access in "admin_home.php" page
				{
					header("location: ../user/user_home.php");
				}
				
				if(isset($_SESSION['admin_login']))
				{
				?>

	

				<?php
						
				}
				?>
				
				</h4>
				
			</center>
			
		</div>	
	</div>

	<br><br> 
	<div class="table-responsive">

							<table class="table table-dark table-striped">
                                    <thead>
<tr>
	  <th><LABEL style="color: red;"><h3>ADMIN DASHBOARD</h3></LABEL></th>
    </tr>
	<tr>
      <th><LABEL style="color: red;">USERNAME:</LABEL><?php echo $_SESSION['admin_login'];?></th>
      <th></th>
    </tr>
	<tr>
	  <th><a class="" href='../register.php'>CLICK TO REGISTER USER</a></th>
    </tr>
  <tr>
                                           <th></th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>role</th>
											<th>Password</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									require_once '../connection.php';
									$select_stmt=$db->prepare("SELECT id,username,email,role FROM masterlogin");
									$select_stmt->execute();
									
									while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
									{
									?>
                                        <tr>
										<td></td>
                                            <td><?php echo $row["username"]; ?></td>
                                            <td><?php echo $row["email"]; ?></td>
                                            <td><?php echo $row["role"]; ?></td>
											<td>...............</td>
                                        </tr>
									<?php 
									}
									?>
                                    </tbody>
                                </table>
                            </div>






  <?php include('footer.php');?>				
	</body>
</html>