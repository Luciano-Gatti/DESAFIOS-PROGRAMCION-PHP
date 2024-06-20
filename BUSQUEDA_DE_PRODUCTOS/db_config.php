<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Error en la conexion: " . $conn->connect_error);
}