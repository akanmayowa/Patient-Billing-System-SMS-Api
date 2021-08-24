<?php
require_once'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
 
    <title>View Profile</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/jquery/jquery.min.js"></script>
 
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link href="bootstrap-data-table-master/css/vendor/font-awesome.min.css" type="text/css" rel="stylesheet">
  <link href="../bootstrap-data-table-master/css/pagination.css" type="text/css" rel="stylesheet">
    <link href="bootstrap-data-table-master/css/jquery.bdt.css" type="text/css" rel="stylesheet">

</head>
<body>

<?php include('nav.php');?>	

<br/><br/><br/><br/>

<div class="table-responsive">
							<table class="table table-dark table-striped">
                                    <thead>
                                        <tr>
                                            <th><h2 style="color: red;"><B>PATIENT lIST</B></h2></th>
                                        </tr>
                                    </thead>
                               
                                </table>
                            </div>
                         
                            <br/>
                            <div class="float-left">
							<table class="table table-dark table-striped">
                                    <thead>
                                        <tr>
                                            <th><a class="" href="/index/fnphybilling/admin/add-patientinfo.php"><h5><b>CLICK TO REGISTER PATIENT </b></h5></a></th>
                                        </tr>
                                    </thead>   
                                </table>
                            </div>

                            <br/><br/>          <br/><br/>

<table  id="bootstrap-table" class="table table-dark table-striped"  >
<thead>
<th>REGISTRATN NOS #</th>
<th>FULL NAME</th>
<th>NOK-FONE#</th>
<th>NOK-EMAIL</th>
<th>WARD</th>
<th>DATE</th>
<th>EDIT</th>
<th>DELETE</th>
</thead>
<tbody>
<?php
$sql = "SELECT * from  patientinfo";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{
?>
    <tr>
    <td><?php echo htmlentities($result->hospitalnos);?></td>
 
    <td><?php echo htmlentities($result->surname);?> <?php echo htmlentities($result->firstname);?></td>  
    <td><?php echo htmlentities($result->noknumber);?></td>
    <td><?php echo htmlentities($result->nokemail);?></td>
    <td><?php echo htmlentities($result->ward);?></td>
    <td><?php echo htmlentities($result->paymentdate);?></td>

<td><a href="updatepatient.php?id=<?php echo htmlentities($result->id);?>"><button class="btn btn-primary btn-xs">Manage</button></a></td>
<td><a href="deletepatient.php?del=<?php echo htmlentities($result->id);?>"><button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');">Delete</button></a></td>
    </tr>
<?php

$cnt++;
}} ?>
</tbody>
</table>

<script src="http://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="bootstrap-data-table-master/js/vendor/bootstrap.min.js" type="text/javascript"></script>
<script src="bootstrap-data-table-master/js/vendor/jquery.sortelements.js" type="text/javascript"></script>
<script src="bootstrap-data-table-master/js/jquery.bdt.min.js" type="text/javascript"></script>
<script>
$(document).ready( function () {
    $('#bootstrap-table').bdt();
});
</script>     
<?php include('footer.php');?>	
</body>
</html>