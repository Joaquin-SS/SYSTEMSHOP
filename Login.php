<!DOCTYPE html>
<html lang="en">
<head> <!--Encabezado-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Bienvenido a SYSTEMSHOP</title>

<!--Archivo CSS para bootstrap-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<!--Archivo CSS propio-->
<link rel="stylesheet" href="css/estilos.css">


</head>

<body class="text-white"> <!--cuerpo del documento-->

<h1 class="display-4 mt-3 text-center mb-3"> SYSTEMSHOP </h1>
<h1 class="display-4 mt-3 text-center mb-3"> Acceso a usuarios </h1>
  <form action="controlador.php" method="post" class="contenedorForma">

  <div align="center">
  <img src= "img/programador.png" width="10%">
  </div>

  <div class="form group mt-5">
    <label >Correo:</label >
    <input type="email" name="txtcorreo" class="form-control" required>
  </div>

  <div class="form group">
    <label >Contraseña:</label >
      <input type="password" name="txtpass" class="form-control" required>
  </div>

    <div>
      <button type="submit" name="btnvalidar" class="btn btn-dark mt-4">Ingresar al sistema</button>
    </div>
    <div>
      <p>¿Nuevo por aqui? <a href="FormularioRU.html">Registrarse</a></p>
    </div>
  </form>

<!--Archivo JS para bootstrap-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>


</html>
