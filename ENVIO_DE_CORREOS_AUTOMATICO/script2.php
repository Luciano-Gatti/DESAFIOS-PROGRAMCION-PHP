<?php
$to = "lucianogatti01@gmail.com";
$subject = "Asunto del correo";
$message = "<html><body><h1>Mensaje de correo</h1><p>Este es un ejemplo de correo electronico con formato HTML.</p></body></html>";
$headers = "From: lucianogatti.lkdin@gmail.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

mail($to, $subject, $message, $headers);