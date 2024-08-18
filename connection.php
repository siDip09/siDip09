<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

// Create connection
$con=mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (mysqli_connect_error()) {
    echo"<script>alert('cannot connect DB');</script>";
    exit();
}

?>

