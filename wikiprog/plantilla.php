<?php

//Podría haber código PHP pero se vería en todas las secciones.

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
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/estilo.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">

  <link href="css/bootstrap-responsive.css" rel="stylesheet">

  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
    <![endif]-->

  <!-- Le fav and touch icons -->
  <link rel="shortcut icon" href="https://getbootstrap.com/2.0.2/assets/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="114x114"
    href="https://getbootstrap.com/2.0.2/assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72"
    href="https://getbootstrap.com/2.0.2/assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed"
    href="https://getbootstrap.com/2.0.2/assets/ico/apple-touch-icon-57-precomposed.png">

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
  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="#">Project name</a>
        <div class="nav-collapse collapse" style="height: 0px;">
          <ul class="nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="controlador.php?seccion=seccion1">About</a></li>
            <li><a href="controlador.php?seccion=seccion2">Contact</a></li>
            <li><a href="controlador.php?seccion=seccion3">Quien soy yo</a></li>
            <li><a href="controlador.php?seccion=seccion4">Video</a></li>
            <li><a href="https://www.sena.edu.co" target="blank">Ir al Sena</a></li>
            <li><a href="controlador.php?seccion=seccion5">registro</a></li>
            <li><a href="controlador.php?seccion=seccion6">Imprimir</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Se declara un contenedor fila y después un contenedor columna. LAs columnas deben sumar 12, según la rejilla Bootstrap. -->
  <div class="container">

    <?php

    include ($seccion . ".php");

    ?>

  </div>



  <div class="container">
    <footer>
      <p>© Company 2012</p>
    </footer>
  </div>

  <!-- Le javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap-transition.js"></script>
  <script src="js/bootstrap-alert.js"></script>
  <script src="js/bootstrap-modal.js"></script>
  <script src="js/bootstrap-dropdown.js"></script>
  <script src="js/bootstrap-scrollspy.js"></script>
  <script src="js/bootstrap-tab.js"></script>
  <script src="js/bootstrap-tooltip.js"></script>
  <script src="js/bootstrap-popover.js"></script>
  <script src="js/bootstrap-button.js"></script>
  <script src="js/bootstrap-collapse.js"></script>
  <script src="js/bootstrap-carousel.js"></script>
  <script src="js/bootstrap-typeahead.js"></script>



</body>

</html>