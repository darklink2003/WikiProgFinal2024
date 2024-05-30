<?php
// Podría haber código PHP pero se vería en todas las secciones.
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>Bootstrap, from Twitter</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Le styles -->
  <link href="css/estilo.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-VGEB9L78T0"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'G-VGEB9L78T0');
  </script>
</head>

<body>

  <!-- Barra de navegación -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Project name</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="controlador.php?seccion=seccion1">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="controlador.php?seccion=seccion2">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="controlador.php?seccion=seccion3">Quien soy yo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="controlador.php?seccion=seccion4">Video</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.sena.edu.co" target="_blank">Ir al Sena</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="controlador.php?seccion=seccion5">Registro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="controlador.php?seccion=seccion6">Imprimir</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Se declara un contenedor fila y después un contenedor columna. Las columnas deben sumar 12, según la rejilla Bootstrap. -->
  <div class="container" style="margin-top: 80px;">
    <?php
    include($seccion . ".php");
    ?>
  </div>

  <div class="container">
    <footer>
      <p>© Company 2012</p>
    </footer>
  </div>

  <!-- Le javascript -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>
