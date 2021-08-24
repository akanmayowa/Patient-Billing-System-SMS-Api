<?php
require_once 'config.php';
if(isset($_REQUEST['del']))
{
$uid=intval($_GET['del']);
$sql = "delete from patientinfo WHERE  id=:id";
$query = $dbh->prepare($sql);
$query-> bindParam(':id',$uid, PDO::PARAM_STR);
$query -> execute();
echo "<script>alert('Record Deletion successfully');</script>";
echo "<script>window.location.href='patientview.php'</script>";
}
?>