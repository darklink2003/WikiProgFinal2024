<?php
 class login {
    public static function registrar( $usuario,$correo,$contraseña,$rango_id){
        $conexion = mysqli_connect('localhost', 'root', '', 'wikiprog');
        $sql= "INSERT INTO usuario (usuario, correo, contraseña, rango_id) VALUES ('$usuario','$correo','$contraseña','$rango_id')";
        $consulta = $conexion ->query($sql);
        if($consulta){
            header('location: controlador.php?seccion=seccion5');
        
        }
    }
 }