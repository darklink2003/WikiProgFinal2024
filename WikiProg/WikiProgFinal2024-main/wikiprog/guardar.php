<?php
// Verificamos si los datos del formulario han sido enviados correctamente
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // usuario
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $rango_id = 1;

    include("login.php");

    login::registrar($usuario, $correo, $contraseña, $rango_id);
}
?>
