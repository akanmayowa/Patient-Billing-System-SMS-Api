<?php
include "../admin/object/insertpatientinfo.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <title>Patient Billing Info </title>
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
    #error{
	height: auto;
	padding: 5px;
	font-size: 16px;
}

.valid{
	border: 1px solid green;
	background: green;
	color: #FFF;
}

.invalid{
	border: 1px solid red;
	background: red;
	color: #FFF;
}
</style>
</head>
<body>


<?php include('nav.php');?>	



<br/><br/><br/><br/>

<div class="table-responsive">
							<table class="table table-dark table-striped">
                                    <thead>
                                        <tr>
                                            <th><h3 style="color: red;"><B>REGISTER PATIENT</B></h3></th>
                                        </tr>
                                    </thead>
                               
                                </table>
                            </div>

      <div class="bs-example">
<form name="insertrecord" method="post">
<div class="form-group row">
<label for="inputEmail"  style="color:green;" class="col-sm-2 col-form-label"><b>REGISTRATION NUMBER</b></label>
<div class="col-sm-8">
<input type="number" name="hospitalnos" class="form-control" required>
</div>    
</div>


<div class="form-group row">
<label style="color:green;" for="inputEmail" class="col-sm-2 col-form-label"><b>SURNAME</b></label>
<div class="col-sm-8">
<input type="text" name="surname" class="form-control" required>
</div>
</div>



<div class="form-group row">
<label for="inputEmail" style="color:green;" class="col-sm-2 col-form-label"><b>FIRST NAME</b></label>
<div class="col-sm-8">
<input type="text" name="firstname" class="form-control"  required>
</div>
</div>


<div class="form-group row">
<label for="inputEmail" style="color:green;" class="col-sm-2 col-form-label"><b>NOK NAME</b></label>
<div class="col-sm-8">
<input type="text" required  name="nokname" class="form-control" required>
</div></div>


<div class="form-group row">
<label for="inputEmail" style="color:green;" class="col-sm-2 col-form-label"><b>NOK PHONE#</b></label>
<div class="col-sm-8">
<label style="color:red;"><b>2347XXXXXXXXX<b></label>
<input type="tel" id="phone"  pattern="[2]{1}[3]{1}[4]{1}[1-9]{1}[0-9]{9}" minlength="13" maxlength="13"  required name="noknumber" class="form-control"  required>
<div id="error"></div>

</div>
</div>


<div class="form-group row">
<label for="inputEmail"  style="color:green;" class="col-sm-2 col-form-label"><b>NOK EMAIL ADDRESS</b></label>
<div class="col-sm-8">
<input type="email"value="nil@fnphy.com" name="nokemail" class="form-control"  required>
</div></div>




<div class="form-group row">
  <label for="inputEmail"  style="color:green;" class="col-sm-2 col-form-label"><b>TYPE OF PATIENT</b></label>
  <div class="col-sm-8">
  <select type="text" name="ptype" class="form-control"  required >
  <option value="" selected>-SELECT PATIENTTYPE-</option>
  <option value`="IN-PATIENT">IN-PATIENT</option>
  <option value="outpatient">OUT-PATIENT</option>
    </select>
  </div></div>



<div class="form-group row">
<label for="inputEmail"  style="color:green;" class="col-sm-2 col-form-label"><b>WARD</b></label>
<div class="col-sm-8">
<select type="text" name="ward" class="form-control"  required >
<option value="" selected>-PLS SELECT WARD-</option>
<option value`="adejoke">ADEJOKE OREKOYA</option>
<option value`="bertha">BERTHA JOHNSON</option>
<option value="borofka">BOROFKA</option>
<option value="ca">CHILD & ADOLESCENT</option>
<option value="drug">DRUG WARD</option>
<option value="female1">FEMALE WARD 1</option>
<option value="female2">FEMALE WARD 2</option>
<option value="female3">FEMALE WARD 3</option>
<option value="female4">FEMALE WARD 4</option>
<option value="male1">MALE WARD 1</option>
<option value="male2">MALE WARD 2</option>
<option value="male4">MALE WARD 3</option>
<option value="male5">MALE WARD 4</option>
<option value="male5">MALE WARD 5</option>
<option value="male6">MALE WARD 6</option>
<option value="mob">MOB</option>
<option value="ordia">ORDIA</option>
<option value="tolani">TOLANI ASUNI</option>
<option value="marinho">MAIN MARINHO</option>
<option value="marinhoex">MARINHO EXTEBSION</option>
<option value="OTHERS">OTHERS</option>
</select>
</div></div>






<div class="form-group row">
<div class="col-sm-4 offset-sm-2">
<input type="submit" name="insert" class="form-control btn btn-primary" value="Submit">
</div>
</div>
</form>
</div>
<script type="text/javascript" src="telephone/js/main.js"></script>
<?php include('footer.php');?>	
</body>
</html>