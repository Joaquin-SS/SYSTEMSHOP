<?php
  function conectarBD(){
    //datos para conectar a la base
    $servidor = "LAPTOP-8TAFQAE8\SQLEXPRESS";
    $connectionInfo = array( "Database"=>"SYSTEMSHOP");

    //conectar a la base de datos
    $conexion = sqlsrv_connect( $servidor, $connectionInfo);

    //verificar si hay errores en la conexion
    if (!$conexion) {
        //si hay errores, mostrar mensaje y terminar el script
        die("Error al intentar conectar: " . print_r(sqlsrv_errors(), true));
    }

    //retornar objeto de conexion
    return $conexion;
  }

  function validarUsuarios($usu, $cont) {
  //Preparacion de datos
  $conex = conectarBD();
  $consultaUsuarios = "SELECT Contra FROM Estudiantes WHERE Correo = ?";
  $params= array($usu);
  //Ejecucion consulta
  $stmt = sqlsrv_prepare($conex, $consultaUsuarios, $params);
  $result = sqlsrv_execute($stmt);

  //extraccion de la contraseña de la BD
  while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
      $passBD = $row['Contra'];
  }

  //comparar contraseña status -> status 1 tiene acceso
  if ($cont === $passBD) {
      $status = 1;
  } else {
      $status = 0;
  }
  sqlsrv_free_stmt($stmt);
  sqlsrv_close($conex);

  //respuesta de la funcion
  return $status;
}
  function obtenerNombreUsuario($correo){
    $conex = conectarBD();
    $consultaNombre="SELECT Nombre, ApPaterno, ApMaterno FROM Estudiantes WHERE Correo=?";
    $params= array($correo);
    //Ejecucion consulta
    $stmt = sqlsrv_prepare($conex, $consultaNombre, $params);
    $result = sqlsrv_execute($stmt);

    if ($result === false) {
        die(print_r(sqlsrv_errors(), true)); // Manejo de errores
    }

    $nombre = "";
    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        $nombre = $row['Nombre'] . " " . $row['ApPaterno'] . " " . $row['ApMaterno'];
    }

    sqlsrv_free_stmt($stmt);
    sqlsrv_close($conex);

    return $nombre;
  }

  //function guardarProducto($det, $cost, $pes, $alt, $anc, $lar, $mar, $img){
    //$conex = conectarBD();
    //$consulta = "INSERT INTO Es"
  //}

  function guardarUsuario($matric,$carrer,$grupo,$nombre,$appate,$apmate,$correo,$contra){
    $conex=conectarBD();
    $insert="INSERT INTO Estudiantes values(?,?,?,?,?,?,?,?)";
    $params= array($matric,$carrer,$grupo,$nombre,$appate,$apmate,$correo,$contra);

    try{
      $stmt = sqlsrv_prepare($conex, $insert, $params);
      $result = sqlsrv_execute($stmt);
      sqlsrv_free_stmt($stmt);
      sqlsrv_close($conex);
      return $status = 1;
    }
    catch(Exception $e){
      die('Error de Insercion:' . $e->getMessage());
    }
  }


  function verificarUsuario($matric){
    $conex=conectarBD();

    //Primero validamos que el usuario no exista
    $consulta = "SELECT Matricula FROM Estudiantes WHERE Matricula = ?";
    $params= array($matric);
    $stmt = sqlsrv_prepare($conex, $consulta, $params);
    $result = sqlsrv_execute($stmt);
    //extraccion de la matricula de la BD
    $matri = null;
    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        $matri=intval($row['Matricula']);
    }

    //Comparamos la matricula -> status = 1 si existe
    if (intval($matric) === $matri) {
      $status = 0;
    } else {
        $status = 1;
      }
    sqlsrv_free_stmt($stmt);
    sqlsrv_close($conex);
    //respuesta de la funcion
    return $status;
  }
 ?>
