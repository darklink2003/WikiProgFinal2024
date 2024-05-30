<?php

 $documento = $_GET['doc'];
 $nombre = $_GET['nom'];
 $apellido = $_GET['ape'];
 $fecha_nac = $_GET['fecha'];

 include("login.php");
 
 login::registrar($documento, $nombre, $apellido, $fecha_nac);
 
 