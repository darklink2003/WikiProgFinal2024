<?php
// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "wikiprog"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Recuperar los datos del formulario
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

// Consulta SQL para verificar las credenciales del usuario
$sql = "SELECT * FROM usuario WHERE correo='$correo' AND contraseña='$contraseña'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Inicio de sesión exitoso
    session_start();
    $_SESSION['correo'] = $correo;
    // Redireccionar al usuario a una página de inicio o panel de control
    header("Location: panel_de_control.php");
} else {
    // Inicio de sesión fallido
    echo "Credenciales incorrectas. Por favor, intente de nuevo.";
}

$conn->close();
?>
