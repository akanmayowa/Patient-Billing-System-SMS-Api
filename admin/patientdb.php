
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fnphybilling";
$mysql = new mysqli($servername, $username, $password, $dbname);
if ($mysql->connect_error)
{
    die("Connection failed: " . $mysql->connect_error);
} 

$sql = "CREATE TABLE patientinfo
(
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  hospitalnos int(150) NOT NULL UNIQUE,
  surname varchar(150) NOT NULL,
  firstname varchar(150) NOT NULL,
  nokname varchar(120) NOT NULL,
  noknumber varchar(150) NOT NULL,
  nokemail varchar(255) NOT NULL,
  ward varchar(200) NOT NULL, 
  ptype varchar(200) NOT NULL,
paymentdate  DATE DEFAULT CURRENT_TIMESTAMP 
)";


if ($mysql->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $mysql->error;
}

$mysql->close();
?>
