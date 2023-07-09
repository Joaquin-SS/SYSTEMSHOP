<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Menú</title>

  <!--Archivo CSS para bootstrap-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <link rel="stylesheet" href="css/diseño.css">
</head>

<body >
<?php require 'funcionesBD.php'; ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
  <a class="navbar-brand" href="index2.php>">SYSTEMSHOP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="Inicio.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Perfil
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Modificar perfil </a>
          <a class="dropdown-item" href="#">Eliminar perfil</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Detalles de publicaciones</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Descubrir
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Productos </a>
          <a class="dropdown-item" href="#">Servicios</a>
        </div>
      </li>
    </ul>
    <!--Codigo para obtener el usuario del URL Mandado por el controlador-->
    <?php
      $correo = $_GET['user'];
      $nombreUsuario = obtenerNombreUsuario($correo);
    ?>
      <h6 class="text-white" style="margin-right: 10px;">Bienvenido <?php echo $nombreUsuario ?></h6>
      <form action="controlador.php" method="post">
        <button type="submit" name="btnCerrar" class="btn btn-outline-warning">Cerrar sesión</button>
      </form>
  </div>
</nav>

<h1 class="display-4 text-center"><strong>MI SYSTEMSTORE</strong></h1>

<div class="card"  style="position: absolute; width: 18rem;; top: 250px; left: 210px;" align="center">
  <img src="img/minec.jpg"  class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Minecraft</h5>
    <p class="card-text">Con sus nuevos juegos, nuevas actualizaciones y nuevas formas de jugar, ¡únete a una de las comunidades de juegos más grandes y empieza a crear hoy mismo!</p>
    <a href="#" class="btn btn-primary">Mas...</a>
  </div>
</div>

<div class="card"  style="position: absolute; width: 18rem; top: 250px; left: 550px;" align="center">
  <img src="img/spider.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Spider-man </h5>
    <p class="card-text">Estás ante un Peter Parker mucho más experimentado en la lucha contra el crimen organizado en la Nueva York de Marvel. </p>
    <a href="#" class="btn btn-primary">Mas...</a>
  </div>
</div>

<div class="card"  style="position: absolute; width: 18rem; top: 250px; left: 890px;" align="center">
  <img src="img/fifa.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">FIFA 21 </h5>
    <p class="card-text">En FIFA 21 darás rienda suelta a tu creatividad y controlarás cada faceta de tu juego en todo el campo. </p>
    <a href="#" class="btn btn-primary">Mas...</a>
  </div>
</div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>



</body>
</html>
