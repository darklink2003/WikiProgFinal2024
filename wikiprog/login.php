<?php

class Login
{
    private $conexion;
    public function __construct()
    {
        // Conexión a la base de datos
        $this->conexion = new mysqli('localhost', 'root', '', 'wikiprog');

        // Verificar la conexión
        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }
    }
    public function registrarUsuario($usuario, $correo, $contraseña, $rango_id)
    {
        // Preparar la consulta para evitar inyecciones SQL
        $stmt = $this->conexion->prepare("INSERT INTO usuario (usuario, correo, contraseña, rango_id) VALUES (?, ?, ?, ?)");
        if ($stmt === false) {
            die("Error en la preparación de la consulta: " . $this->conexion->error);
        }

        // Hashear la contraseña antes de guardarla en la base de datos
        $contraseña_hashed = password_hash($contraseña, PASSWORD_DEFAULT);

        // Vincular los parámetros
        $stmt->bind_param('sssi', $usuario, $correo, $contraseña_hashed, $rango_id);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            header('Location: controlador.php?seccion=seccion5');
            exit(); // Detener la ejecución después de redirigir
        } else {
            die("Error en la ejecución de la consulta: " . $stmt->error);
        }

        // Cerrar la declaración
        // $stmt->close();
    }
    public function registrarCurso($curso_id, $titulo_curso, $descripcion, $categoria_id)
    {
        // Preparar la consulta para evitar inyecciones SQL
        $stmt = $this->conexion->prepare("INSERT INTO curso (curso_id, titulo_curso, descripcion, categoria_id) VALUES (?, ?, ?, ?)");
        if ($stmt === false) {
            die("Error en la preparación de la consulta: " . $this->conexion->error);
        }

        // Vincular los parámetros
        $stmt->bind_param('isss', $curso_id, $titulo_curso, $descripcion, $categoria_id);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            header('Location: controlador.php?seccion=seccion4');
            exit(); // Detener la ejecución después de redirigir
        } else {
            die("Error en la ejecución de la consulta: " . $stmt->error);
        }

        // Cerrar la declaración
        // $stmt->close();
    }
    public function __destruct()
    {
        // Cerrar la conexión
        $this->conexion->close();
    }
}
?>