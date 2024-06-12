<?php
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
$email = $_POST['email'];
$bio = $_POST['biografia'];
$pass = $_POST['password'];

// Proteger contra inyecciones SQL
$user = $conn->real_escape_string($user);
$email = $conn->real_escape_string($email);
$bio = $conn->real_escape_string($bio);
$pass = $conn->real_escape_string($pass);

// Verificar si el usuario ya existe
$sql = "SELECT * FROM usuario WHERE usuario = '$user' OR correo = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Usuario o correo ya existe
    echo "El nombre de usuario o el correo ya están en uso";
} else {
    // Insertar el nuevo usuario en la base de datos
    $sql = "INSERT INTO usuario (usuario, correo, biografia, contraseña, rango_id) VALUES ('$user', '$email', '$bio', '$pass', 1)";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso. Puedes iniciar sesión ahora.";
        header("Location: index.php"); // Redirigir a la página de inicio de sesión
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
