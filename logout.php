<?php 
session_start();
unset($_SESSION['nombre_de_sesion']); //Aqui la variable de entorno que se este utilizando para guardar datos de sesión.
session_destroy();
?>
