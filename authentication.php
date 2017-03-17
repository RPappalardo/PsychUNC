<?php
session_start();

if(isset($_GET['username'])){
        $_SESSION['username'] = $_GET['username'];
}

if(isset($_SESSION['username'])){
        header("Location: index.php");
} else {
        echo "Username not set";
}
?>
