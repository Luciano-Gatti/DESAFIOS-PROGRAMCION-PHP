<?php
$conn = mysqli_connect("localhost", "username", "password", "database_name");

$query = "SELECT email FROM destinatarios";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)){
    $to = $row['email'];
    $subject = "Asunto del correo";
    $message = "<html><body><h1>Mensaje de correo</h1><p>Este es un ejemplo de correo electronico automatizado.</p></body></html>";
    $headers = "From: ejemplo1@gmail.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    
    mail($to, $subject, $message, $headers);
}

mysqli_close($conn);
