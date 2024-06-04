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

// Consulta para obtener lecciones
$sql = "SELECT titulo_leccion, contenido FROM leccion";
$result = $conn->query($sql);

$lecciones = array();
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $lecciones[] = $row;
  }
}

$conn->close();

// Devolver los datos en formato JSON
header('Content-Type: application/json');
echo json_encode($lecciones);
?>