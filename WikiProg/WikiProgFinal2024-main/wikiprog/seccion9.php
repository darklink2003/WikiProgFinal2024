<?php
// Conexión a la base de datos
$servername = "localhost"; // Cambia localhost por tu servidor de base de datos si es diferente
$username = "root"; // Cambia tu_usuario por tu nombre de usuario de MySQL
$password = ""; // Cambia tu_contraseña por tu contraseña de MySQL
$dbname = "wikiprog"; // Cambia wikiprog por el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta SQL para obtener los datos del usuario
$sql = "SELECT * FROM usuario WHERE usuario_id = 16"; // Cambia el valor 1 por el ID del usuario que deseas mostrar

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar los datos del usuario
    while($row = $result->fetch_assoc()) {
        echo "<div class='container'>";
        echo "<div class='container_titulo'>";
        echo "<div class='row'>";
        echo "<div class='col-md-3'>";
        echo "<div class='circulo'></div>";
        echo "</div>";
        echo "<div class='col-md-3'>";
        echo "<p>Nombre de usuario: " . $row["usuario"] . "</p><br>";
        // Aquí podrías mostrar más campos como el correo electrónico, la biografía, etc.
        echo "<p>Rango: " . $row["rango_id"] . "</p>"; // Aquí muestro el ID del rango, puedes cambiarlo por el nombre del rango si lo deseas
        echo "</div>";
        echo "<div class='col-md-3'>";
        echo "<p>Seguidores: 0</p>"; // Aquí podrías mostrar el número real de seguidores
        echo "<p style='padding-left: 5px;'>Siguiendo: 0</p>"; // Aquí podrías mostrar el número real de usuarios seguidos
        echo "</div>";
        echo "<div class='col-md-3'>";
        echo "<button type='button' id='eliminarCuentaBtn' onclick='confirmarEliminarCuenta()'>Eliminar Cuenta</button>";
        echo "<button type='button' style='margin-left: 5px;'><a href='actualizar_perfil.html' style='text-decoration: none ;color: white;'>Editar Perfil</a></button>";
        echo "</div>";
        echo "<div id='myModal' class='modal'>";
        echo "<div class='modal-content'>";
        echo "<span class='close' onclick='cerrarModal()'>&times;</span>";
        echo "<p>¿Seguro que quieres eliminar la cuenta?</p>";
        echo "<button id='siBtn' onclick='eliminarCuenta()'>Sí</button>";
        echo "<button id='noBtn' onclick='cerrarModal()'>No</button>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "<br><br>";
        echo "</div>";
        echo "<div class='container_usuario'>";
        echo "<div class='row'>";
        echo "<div class='col-md-3'>";
        echo "<h5 style='color: white;'>Información del usuario</h5>";
        echo "</div>";
        echo "<div class='col-md-9'>";
        // Aquí podrías mostrar más información del usuario si lo deseas
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "<div class='container_proyecto'>";
        echo "<div class='row'>";
        echo "<div class='col-md-5 d-flex flex-column align-items-start'>";
        echo "<div id='columna1' class='kj'>";
        echo "<h5 style='color: white; text-align: center;'>Datos</h5>";
        echo "<p style='color: white;'>Biografía: " . $row["biografia"] . "</p>";
        echo "<p style='color: white;'>Correo : " . $row["correo"] . "</p>";
        // Aquí podrías mostrar más datos del usuario si lo deseas
        echo "</div>";
        echo "</div>";
        echo "<div class='col-md-7 d-flex flex-column align-items-center'>";
        echo "<div id='columna2' class='div'>";
        echo "<h5 style='color: white; text-align: center;'>Cargar mi proyecto </h5>";
        echo "<textarea id='proyectoTextArea' class='w-75' style='margin-left: 70px;' cols='15' rows='8'></textarea><br>";
        echo "<button type='button' class='btn btn-primary mt-2' style='margin-left:40%;' onclick='cargarProyecto()'>Enviar</button>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
} else {
    echo "0 resultados";
}
$conn->close();
?>
