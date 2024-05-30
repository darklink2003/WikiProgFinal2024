<?php

class Login
{
    public static function registrar($usuario,$correo,$contraseña,$rango_id){
        $conexion = mysqli_connect("localhost","root","","wikiprog");
        $sql = "INSERT INTO tb_usuarios(usuario, correo, contraseña, rango_id)value('$usuario','$correo','$contraseña','$rango_id')";
        $consulta = $conexion->query($sql);
        if ($consulta){
        header("location: controlador.php?seccion=seccion6");
        }
    }

    public static function ver(){
        $salida = "";
        $conexion = mysqli_connect("localhost","root","","wikiprog");
        $sql = "SELECT * FROM usuario";
        $consulta = $conexion->query($sql);
        while($fila=$consulta->fetch_assoc()){
            $salida .= $fila['usuario']. "<br>";
            $salida .= $fila['correo']. "<br>";
            $salida .= $fila['contraseña']. "<br>";
            $salida .= $fila['rango_id']."<br><br>";
        }
        return $salida;
    }
}