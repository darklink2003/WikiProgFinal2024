<?php

 $usuario = $_GET['usuario'];
 $correo = $_GET['correo'];
 $contraseña = $_GET['contraseña'];
 $rango_id = 2;
 
 include("login.php");
 
 login::registrar($usuario, $correo, $contraseña, $rango_id);
 
 