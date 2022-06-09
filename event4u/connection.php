<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name="keyboard";

// Create connection
$conn = new mysqli($servername, $username, $password ,$db_name);
if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}     

?>