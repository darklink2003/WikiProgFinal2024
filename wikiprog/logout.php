<?php
session_start();
session_unset(); // Desactivar todas las variables de sesión
session_destroy(); // Destruye las sesiones

header("Location: controlador.php?seccion=seccion2");
exit();
?>
