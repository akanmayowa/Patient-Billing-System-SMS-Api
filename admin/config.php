<?php
define('DB_HOST','67.225.140.33');
define('DB_USER','jutechc1_billing');
define('DB_PASS','Wpj1dmB6%E~D');
define('DB_NAME','jutechc1_fnphybilling');
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS);
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>