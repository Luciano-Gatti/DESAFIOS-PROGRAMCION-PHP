<?php
$to = "ejemplo1@gmail.com";
$subject = "Asunto del correo";
$message = "Mensaje del correo";
$headers = "From: ejemplo2@gmail.com";

$result = mail($to, $subject, $message, $headers);
echo $result;