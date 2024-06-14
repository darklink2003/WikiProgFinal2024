<?php
session_start();

$seccion = "seccion2"; // Sección por defecto.
if (isset($_GET['seccion'])) {
    $seccion = $_GET['seccion'];
}

// Incluye la plantilla
include("plantilla.php");
?>
