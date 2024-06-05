<?php
session_start();

// Conexión a la base de datos
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
$user = $_POST['username'];
$pass = $_POST['password'];

// Proteger contra inyecciones SQL
$user = $conn->real_escape_string($user);
$pass = $conn->real_escape_string($pass);

// Consulta para verificar el usuario
$sql = "SELECT * FROM usuario WHERE usuario = '$user' AND contraseña = '$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Usuario encontrado, iniciar sesión
    $_SESSION['username'] = $user;
    header("Location: index.php"); // Redirigir a la página de bienvenida
} else {
    // Usuario no encontrado, mostrar mensaje de error
    echo "Nombre de usuario o contraseña incorrectos";
}

$conn->close();
?>
