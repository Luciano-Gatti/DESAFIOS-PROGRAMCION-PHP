<?php
require_once "db_config.php";

function get_user_permissions($role_id){
    global $db;

    // Ajustar los nombres de las columnas según la estructura real de las tablas
    $query = "SELECT p.permissions_name 
              FROM role_permissions AS rp
              INNER JOIN permissions AS p 
              ON rp.permissions_id = p.permissions_id
              WHERE rp.role_id = ?";

    $permissions = array();

    if($stmt = $db->prepare($query)){
        $stmt->bind_param("i", $role_id);
        $stmt->execute();
        $result = $stmt->get_result();

        while($row = $result->fetch_assoc()){
            $permissions[] = $row["permissions_name"]; // Ajustar el nombre de la columna
        }

        $stmt->close();
    } else {
        echo "Error al consultar los permisos: " . $db->error;
    }

    return $permissions;
}

function get_user($username){
    global $db;

    // Initialize the password array
    $passwordEncrypted = "";

    $query = "SELECT * FROM users WHERE user_name = ? LIMIT 1";
    if($stmt = $db->prepare($query)){
        $stmt->bind_param("s", $username); // "s" for string type
        $stmt->execute();

        // Almacenar los resultados en un array
        $result = $stmt->get_result();

        
        $user = $result->fetch_assoc();
    
        // Cerrar la declaración
        $stmt->close();
    }else{
        // Mostrar un mensaje de error si la consulta falla
        echo "Error al consultar los permisos: " . $db->error;
    }

    // Devuelve las contraseñas como un array
    return $user;
}