<?php
session_start();
require_once "functions.php";

//Comprobar si el usuario ha iniciado sesion
if(!isset($_SESSION["username"])){
    header("Location: index.php");
}

//Obtener los permisos del usuario
$permissions = get_user_permissions($_SESSION["role_id"]);

//Verificar si el usuario tiene el permiso necesario
if(in_array("view_profile", $permissions)){ 
    echo "Session iniciada";
}else{
    header("Location: index.php");
}


