<?php
$db_host = "localhost";
$db_user = "username";
$db_pass = "password";
$db_name = "database_name";

//Crear la conexion a la base de datos
$db = new mysqli($db_host, $db_user, $db_pass, $db_name);

if($db->connect_error){
    die("Error de conexion a la base de datos: " . $db->connect_error);
}