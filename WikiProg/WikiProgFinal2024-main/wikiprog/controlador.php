<?php
session_start();

$seccion = "seccion2"; // Sección por defecto.
$usuario_id = $_SESSION['usuario_id'] ?? '';

if (isset($_GET['seccion'])) {
    $seccion = $_GET['seccion'];
}

// Incluye la plantilla y pasa el usuario_id
include("plantilla.php");
?>
