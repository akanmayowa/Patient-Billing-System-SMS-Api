<?php

include "../admin/object/updatepatient.php";
$userid=intval($_GET['id']);
$sql = "SELECT * from patientinfo where id=:uid";
$query = $dbh->prepare($sql);
$query->bindParam(':uid',$userid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Update Info </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/jquery/jquery.min.js"></script>
  <script src="bootstrap/js/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <style>
    .bs-example{
        margin: 70px;        
    }
</style>
</head>
<body>
<?php include('nav.php');?>	
<BR><BR><BR><BR>




<div class="table-responsive">
							<table class="table table-dark table-striped">
                                    <thead>
                                        <tr>
                                            <th><h3 style="color: red;">MANAGE PATIENT RECORD</h3></th>
                                        </tr>
                                    </thead>
                               
                                </table>
                            </div>


      <div class="bs-example">
<form name="insertrecord" method="post">
<div class="form-group row">
<label for="inputEmail"  style="color:green;" class="col-sm-2 col-form-label"><b>REGISTRATION NUMBER</b></label>
<div class="col-sm-8">
<input type="number" name="hospitalnos" value="<?php echo htmlentities($result->hospitalnos);?>" class="form-control" required>
</div>    
</div>




<div class="form-group row">
<label style="color:green;" for="inputEmail" class="col-sm-2 col-form-label"><b>SURNAME</b></label>
<div class="col-sm-8">
<input type="text" name="surname" required value="<?php echo htmlentities($result->surname);?>" class="form-control" required>
</div>
</div>



<div class="form-group row">
<label for="inputEmail" style="color:green;" class="col-sm-2 col-form-label"><b>FIRST NAME</b></label>
<div class="col-sm-8">
<input type="text" name="firstname" required value="<?php echo htmlentities($result->firstname);?>"  class="form-control"  required>
</div>
</div>


<div class="form-group row">
<label for="inputEmail" style="color:green;" class="col-sm-2 col-form-label"><b>NOK NAME</b></label>
<div class="col-sm-8">
<input type="text" name="nokname" required value="<?php echo htmlentities($result->nokname);?>" class="form-control" required>
</div></div>





<div class="form-group row">
<label for="inputEmail" style="color:green;" class="col-sm-2 col-form-label"><b>NOK PHONE#</b></label>
<div class="col-sm-8">
<label style="color:red;"><b>2347XXXXXXXXX<b></label>
<input type="tel" id="phone" value="<?php echo htmlentities($result->noknumber);?>" pattern="[2]{1}[3]{1}[4]{1}[1-9]{1}[0-9]{9}" minlength="13" maxlength="13"  required name="noknumber" class="form-control">
<div id="error"></div>

</div>
</div>




<div class="form-group row">
<label for="inputEmail" style="color:green;" class="col-sm-2 col-form-label"><b>NOK EMAIL ADDRESS</b></label>
<div class="col-sm-8">
<input type="email" name="nokemail" required  value="<?php echo htmlentities($result->nokemail);?>" class="form-control"  required>
</div>
</div>



<div class="form-group row">
<label for="inputEmail" style="color:green;" class="col-sm-2 col-form-label"><b>NOK EMAIL ADDRESS</b></label>
<div class="col-sm-8">
<input type="email" name="nokemail" required  value="<?php echo htmlentities($result->nokemail);?>" class="form-control"  required>
</div>
</div>







<div class="form-group row">
  <label for="inputEmail"  style="color:green;" class="col-sm-2 col-form-label"><b>TYPE OF PATIENT</b></label>
  <div class="col-sm-8">
  <select type="text" name="ptype" class="form-control"  required >
 
  <option value="IN-PATIENT" <?php if (isset($results['ptype']) && $results['ptype'] == 'IN-PATIENT')
  {echo 'selected';
  } ?>>IN-PATIENT</option>
  <option value="OUT-PATIENT" <?php if (isset($results['ptype']) && $results['ptype'] == 'OUT-PATIENT')
   {echo 'selected';  
   } ?>>OUT-PATIENT</option>
    </select>
  </div>
  </div>
  




<div class="form-group row">
<label for="inputEmail"  style="color:green;" class="col-sm-2 col-form-label"><b>WARD</b></label>
<div class="col-sm-8">

<select type="text" name="ward" class="form-control"  required >

<option value="adejoke" <?php if (isset($results['ward']) && $results['ward'] == 'adejoke') { echo 'selected';
} ?>>ADEJOKE OREKOYA</option>


<option value="bertha" <?php if (isset($results['ward']) && $results['ward'] == 'bertha') { echo 'selected';
} ?>>BERTHA JOHNSON</option>



<option value="Borofka" <?php if (isset($results['ward']) && $results['ward'] == 'Borofka') { echo 'selected';
} ?>>BOROFKA</option>



<option value="ca" <?php if (isset($results['ward']) && $results['ward'] == 'ca') {
      echo 'selected';
  } ?>>CHILD & ADOLESCENT</option>



<option value="drug" <?php if (isset($results['ward']) && $results['ward'] == 'drug')
{echo 'selected';
  } ?>>DRUG WARD</option>


<option value="female1" <?php if (isset($results['ward']) && $results['ward'] == 'female1')
{echo 'selected';
} ?>>FEMALE-WARD 1</option>


<option value="female2" <?php if (isset($results['ward']) && $results['ward'] == 'female2')
{echo 'selected';
} ?>>FEMALE-WARD 2</option>


<option value="female3" <?php if (isset($results['ward']) && $results['ward'] == 'female3')
{echo 'selected';
} ?>>FEMALE-WARD 3</option>


<option value="female4" <?php if (isset($resultss['ward']) && $results['ward'] == 'female4')
{echo 'selected';
} ?>>FEMALE-WARD 4</option>


<option value="male1" <?php if (isset($results['ward']) && $results['ward'] == 'male1')
{echo 'selected';
} ?>>MALE WARD 1</option>


<option value="male2" <?php if (isset($results['ward']) && $results['ward'] == 'male2')
{echo 'selected';
} ?>>MALE WARD 2</option>

<option value="male3" <?php if (isset($results['ward']) && $results['ward'] == 'male3')
{echo 'selected';
} ?>>MALE WARD 3</option>

<option value="male4" <?php if (isset($results['ward']) && $results['ward'] == 'male4')
{echo 'selected';
} ?>>MALE WARD 4</option>

<option value="male5" <?php if (isset($results['ward']) && $results['ward'] == 'male5')
{echo 'selected';
} ?>>MALE WARD 5</option>


<option value="male6" <?php if (isset($results['ward']) && $results['ward'] == 'male6')
{echo 'selected';
} ?>>MALE WARD 6</option>


	<option value="mob" <?php if (isset($results['ward']) && $results['ward'] == 'mob')
  {echo 'selected';
  } ?>>MOB</option>


<option value="ordia" <?php if (isset($results['ward']) && $results['ward'] == 'ordia')
{echo 'selected';
} ?>>ORDIA WARD</option>


<option value="tolani" <?php if (isset($results['ward']) && $results['ward'] == 'tolani')
{echo 'selected';
} ?>>TOLANI ASUNI</option>

 <option value="marinho" <?php if (isset($results['ward']) && $results['ward'] == 'marinho')
{echo 'selected';
} ?>>MARINHO</option>

<option value="marinhoex" <?php if (isset($results['ward']) && $results['ward'] == 'marinhoex')
{echo 'selected';} ?>>MARINHO EXTENSION</option>

<option value="OTHERS" <?php if (isset($results['ward']) && $results['ward'] == 'OTHERS') {
echo 'selected';  } ?>>OTHERS</option>
  </select>

</div></div>


<?php

$cnt++;
}
} ?>

<div class="form-group row">
<div class="col-sm-4 offset-sm-2">
<input type="submit" name="update" class="form-control btn btn-primary" value="Submit">
</div>
</div>
</form>
</div>
<script type="text/javascript" src="telephone/js/main.js"></script>
<?php include('footer.php');?>	
</body>
</html>