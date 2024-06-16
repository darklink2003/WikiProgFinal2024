<?php
session_start();
session_unset(); // Unset all of the session variables
session_destroy(); // Destroy the session

// Redirect to login page or home page
header("Location: controlador.php?seccion=seccion2");
exit();
?>
