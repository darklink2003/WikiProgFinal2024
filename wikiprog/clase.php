<?php

class Login
{
    public static function registrar($doc,$nombre,$apellido,$fecha_nac){
        $conexion = mysqli_connect("localhost","root","","db_base28_05");
        $sql = "INSERT INTO tb_usuarios(documento, nombre,apellido,fecha_nac)value('$doc','$nombre','$apellido','$fecha_nac')";
        $consulta = $conexion->query($sql);
        if ($consulta){
        header("location: controlador.php?seccion=seccion6");
        }
    }

    public static function ver(){
        $salida = "";
        $conexion = mysqli_connect("localhost","root","","db_base28_05");
        $sql = "SELECT * FROM tb_usuarios";
        $consulta = $conexion->query($sql);
        while($fila=$consulta->fetch_assoc()){
            $salida .= $fila['documento']. "<br>";
            $salida .= $fila['nombre']. "<br>";
            $salida .= $fila['apellido']. "<br>";
            $salida .= $fila['fecha_nac']."<br><br>";
        }
        return $salida;
    }
}