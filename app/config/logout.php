<?php
include __DIR__."/config.php";
global $baseURL;


session_start();

// Destruye todas las variables de sesión
$_SESSION = array();

session_destroy();

header("Location: $baseURL/home");
exit;

?>