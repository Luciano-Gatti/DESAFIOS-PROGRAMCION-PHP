<?php
$to = "lucianogatti01@gmail.com";
$subject = "Asunto del correo";
$message = "Mensaje del correo";
$headers = "From: lucianogatti.lkdin@gmail.com";

mail($to, $subject, $message, $headers);