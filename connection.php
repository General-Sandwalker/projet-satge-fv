<?php
$servername = "localhost";
$username = "user"; 
$password = "password"; 
$dbname = "project"; 


$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

?>
