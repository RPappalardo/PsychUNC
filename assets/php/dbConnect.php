
<?php
$hostname = "localhost:8888";
$username="root";
$password="root";
$db="test_db";
$conn = mysqli_connect(
    $hostname,
    $username,
    $password,
    $db
) or die('Error connecting to databse');
?>
