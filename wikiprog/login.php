<?php
class login
{
    public static function registrar($usuario, $correo, $contraseña, $rango_id)
    {
        // Conectar a la base de datos
        $conexion = new mysqli('localhost', 'root', '', 'wikiprog');

        // Verificar la conexión
        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }

        // Preparar la consulta para evitar inyecciones SQL
        $stmt = $conexion->prepare("INSERT INTO usuario (usuario, correo, contraseña, rango_id) VALUES (?, ?, ?, ?)");
        if ($stmt === false) {
            die("Error en la preparación de la consulta: " . $conexion->error);
        }


        // Vincular los parámetros
        $stmt->bind_param('sssi', $usuario, $correo, $contraseña_hashed, $rango_id);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            header('Location: controlador.php?seccion=seccion5');
        } else {
            die("Error en la ejecución de la consulta: " . $stmt->error);
        }

        // Cerrar la declaración y la conexión
        $stmt->close();
        $conexion->close();
    }

    public static function registrarCurso($curso_id, $titulo_curso, $descripcion, $categoria_id)
    {
        // Conectar a la base de datos
        $conexion = new mysqli('localhost', 'root', '', 'wikiprog');

        // Verificar la conexión
        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }

        // Preparar la consulta para evitar inyecciones SQL
        $stmt = $conexion->prepare("INSERT INTO curso (curso_id, titulo_curso, descripcion, categoria_id) VALUES (?, ?, ?, ?)");
        if ($stmt === false) {
            die("Error en la preparación de la consulta: " . $conexion->error);
        }

        // Vincular los parámetros
        $stmt->bind_param('isss', $curso_id, $titulo_curso, $descripcion, $categoria_id);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            header('Location: controlador.php?seccion=seccion4');
        } else {
            die("Error en la ejecución de la consulta: " . $stmt->error);
        }

        // Cerrar la declaración y la conexión
        $stmt->close();
        $conexion->close();
    }
}
?>