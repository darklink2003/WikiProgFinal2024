<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wikiprog";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Consulta para obtener cursos
$sql = "SELECT titulo_curso, descripcion FROM curso";
$result = $conn->query($sql);

$courses = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $courses[] = $row;
    }
}

$conn->close();

// Devolver los datos en formato JSON
header('Content-Type: application/json');
echo json_encode($courses);
?>
