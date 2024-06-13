<?php
$password = "MiPassword2";
$encryptedPassword = hash("sha256", $password);

echo $encryptedPassword;