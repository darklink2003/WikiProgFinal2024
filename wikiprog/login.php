<?php
 class login {
    public static function registrar( $documento , $nombre, $apellido,  $fecha_nac){
        $conexion = mysqli_connect('localhost', 'root', '', 'db_base28_05');
        $sql= "INSERT INTO tb_usuarios (documento, nombre, apellido, fecha_nac) VALUES ('$documento', '$nombre', '$apellido', '$fecha_nac')";
        $consulta = $conexion ->query($sql);
        if($consulta){
            header('location: controlador.php?seccion=seccion5');
        
        }
    }
 }