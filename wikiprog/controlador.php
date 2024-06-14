<?php
session_start();

if (!isset($_SESSION['logged_in'])) {
    header("Location: controlador.php?seccion=seccion2");
    exit();
}

$seccion = "seccion2"; // Sección por defecto.
if (isset($_GET['seccion'])) {
    $seccion = $_GET['seccion'];
}

// Incluye la plantilla
include("plantilla.php");
?>
