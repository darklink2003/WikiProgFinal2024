<?php
// Inicia la sesión si no está activa
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Verificar si el usuario está autenticado
if (!isset($_SESSION['usuario_id'])) {
    header("Location: controlador.php?seccion=seccion2&error=not_logged_in");
    exit();
}

// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wikiprog";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener el usuario_id de la sesión
$usuario_id = $_SESSION['usuario_id'];

// Consulta SQL para eliminar el usuario
$sql_delete_usuario = "DELETE FROM usuario WHERE usuario_id = $usuario_id";

if ($conn->query($sql_delete_usuario) === TRUE) {
    // Eliminación exitosa, redirigir a una página de confirmación o cerrar sesión
    session_destroy(); // Destruir la sesión para desconectar al usuario
    header("Location: index.php"); // Redirigir a la página de inicio u otra página relevante
    exit();
} else {
    echo "Error al intentar eliminar la cuenta: " . $conn->error;
}

$conn->close();
?>
