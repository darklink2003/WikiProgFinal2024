<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['username'])) {
    header("Location: index.html"); // Redirigir a la página de inicio de sesión si no ha iniciado sesión
    exit();
}

echo "Bienvenido, " . $_SESSION['username'] . "!";
?>
