
<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'fnphybilling');
try
{
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e)
{
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>

<?php
if(isset($_GET["id"]) && !empty(trim($_GET["id"])))
{
   // require_once "config.php";
    $sql = "SELECT * FROM patientinfo WHERE id = :id";
    
    if($stmt = $pdo->prepare($sql))
    {
       $stmt->bindParam(":id", $param_id);
   
        $param_id = trim($_GET["id"]);
 
        if($stmt->execute()){
            if($stmt->rowCount() == 1){
              $row = $stmt->fetch(PDO::FETCH_ASSOC);
               $hospitalnos= $row["hospitalnos"];
                $paymentnos = $row["paymentnos"];
                $firstname = $row["firstname"];
                $nokname = $row["nokname"];
                $noknumber = $row["noknumber"];
                $nokemail = $row["nokemail"];
                $paymentdate = $row["paymentdate"];
                $amount = $row["amount"];
                $dateofduration = $row["dateofduration"];
                $ward = $row["ward"];
            } else{
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
    unset($stmt);
    unset($pdo);
} else
{
   header("location: error.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/jquery/jquery.min.js"></script>
  <script src="bootstrap/js/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>


</head>
<body>

<?php include('nav.php');?>	

<BR><BR><br>
<div class="container" >
            <h5 class="card-title text-center">
			<img src="../admin/img/yaba2.jpg" width="70" height="70" alt="logo">
			<B style="color: GREEN";>AUTOMATED BILLING</B></h5>
			</div>
			
            <div class="container">      
            <h5 class="card-title text-LEFT" style="color:green;"><B> PATIENT PROFILE</B>
            <br/><br/><a href="patientview.php" class="btn btn-success">Back</a>    
            </h5> 
            </div>



        <div class="container-fluid" style="margin:80px;text-align:center">

           <div class="row">
                    <div class="col-md-4">
                        <label style="color:green;"><b>Hospital Folder #</b></label>
                        <p class="form-control-static"><?php echo $row["hospitalnos"]; ?></p>
                    </div>
                    <div class="col-md-4">
                        <label   style="color:green;"><b>Payment Number</b></label>
                        <p class="form-control-static"><?php echo $row["paymentnos"]; ?></p>
                    </div>

                    <div class="col-md-4">
                        <label style="color:green;"><b>PAYMENT DATE</b></label>
                        <p class="form-control-static"><?php echo $row["paymentdate"]; ?></p>
                    </div>



                    </div>
                    <br/>
                    <div class="row">
                    <div class="col-md-4">
                        <label style="color:green;" ><b>Surname</b></label>
                        <p class="form-control-static"><?php echo $row["surname"]; ?></p>
                    </div>

                    
                    <div class="col-md-4">
                        <label style="color:green;"><b>First Name</b></label>
                        <p class="form-control-static"><?php echo $row["firstname"]; ?></p>
                    </div>
                    </div>

                    <br/>
                    <div class="row">
                    <div class="col-md-4">
                        <label style="color:green;"><b>NOK Name</b></label>
                        <p class="form-control-static"><?php echo $row["nokname"]; ?></p>
                    </div>
                    <div class="col-md-4">
                        <label style="color:green;"><b>NOK Phone#</b></label>
                        <p class="form-control-static"><?php echo $row["noknumber"]; ?></p>
                    </div>
                  
                  
                    <div class="col-md-4">
                        <label style="color:green;"><b>NOK EmaillAddress </b></label>
                        <p class="form-control-static"><?php echo $row["nokemail"]; ?></p>
                    </div>
                    </div>

                    <div class="row">
            </div>
                 
                  
                    <div class="row">
                 
                    <div class="col-md-4">
                        <label style="color:green;"><b>AMOUNT</b></label>
                        <p class="form-control-static"><?php echo $row["amount"]; ?></p>
                    </div>

                    <div class="col-md-4">
                        <label style="color:green;"><b>Date of Duration</b></label>
                        <p class="form-control-static"><?php echo $row["dateofduration"]; ?></p>
                    </div>

                    <div class="col-md-4">
                        <label style="color:green;"><b>Ward</b></label> 
                        <p class="form-control-static"><?php echo $row["ward"]; ?></p>
                       </div>
                    </div>

                
           
         
  
    <?php include('footer.php');?>	
</body>
</html>