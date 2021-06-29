<?php
// Inicializar la sesion 
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destruir la sesion 
session_destroy();
 
// Redirigir a la pagina de login
header("location: ../default");
exit;
?>