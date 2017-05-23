
<?php
error_reporting( ~E_DEPRECATED & ~E_NOTICE );

$servername = "localhost";
$username = "rachelan";
$password = "HSy3ZPonbQCzJ6SA";
$dbname = "psychunc";
//Create
$conn = new mysqli($servername, $username, $password, $dbname);
//Check

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>
