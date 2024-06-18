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

// Consulta SQL para eliminar el usuario usando una consulta preparada
$sql = "DELETE FROM usuario WHERE usuario_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $usuario_id);

if ($stmt->execute()) {
    // Cerrar sesión y redirigir a la página de inicio con un mensaje de éxito
    session_destroy();
    header("Location: controlador.php?seccion=seccion1&message=account_deleted");
    exit();
} else {
    echo "Error al eliminar la cuenta: " . $conn->error;
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>
