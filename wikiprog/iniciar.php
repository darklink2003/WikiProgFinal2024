<?php
session_start();

// Conexión a la base de datos (ya existente)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wikiprog";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
}

// Obtener los datos del formulario
$user = $_POST['username'] ?? '';
$pass = $_POST['password'] ?? '';
$seccion = $_POST['seccion'] ?? 'seccion1'; // Definir una sección por defecto si no se especifica

// Proteger contra inyecciones SQL
$user = $conn->real_escape_string($user);
$pass = $conn->real_escape_string($pass);

// Consulta para verificar el usuario
$sql = "SELECT usuario_id FROM usuario WHERE usuario = '$user' AND contraseña = '$pass'";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    // Usuario encontrado, iniciar sesión
    $row = $result->fetch_assoc();
    $_SESSION['usuario_id'] = $row['usuario_id'];
    $_SESSION['logged_in'] = true;  // Variable de sesión para el estado de inicio de sesión
    
    // Redireccionar a la sección correspondiente
    header("Location: controlador.php?seccion=$seccion");
    exit();
} else {
    // Usuario no encontrado, mostrar mensaje de error o redirigir a página de inicio de sesión con error
    header("Location: controlador.php?seccion=seccion2&error=login");
    exit();
}
?>
