<?php
$servername = "localhost"; 
$uname = "root"; 
$password = ""; 
$database = "social_media"; 
$error = array();
$conn = new mysqli($servername, $uname, $password, $database,3307);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {

}


?>