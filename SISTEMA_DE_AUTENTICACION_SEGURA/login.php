<?php
require_once "functions.php";

$username = $_POST["username"];
$password = $_POST["password"];

$user = get_user($username);
$encryptedPassword = $user["password"];
$role_id = $user["role_id"];

if(hash("sha256", $password) == $encryptedPassword){
    session_start();
    $_SESSION["username"] = $username;
    $_SESSION["role_id"] = $role_id;
    header("Location: protected.php");
}else{
    echo "nombre de usuario o contraseña incorrecta";
}
