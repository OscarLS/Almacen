<?php
    session_start();
    include_once('../../Conexion/Conexion.php');

    $sql = "SELECT Nombre FROM financiamiento";
    $result = mysqli_query($conn, $sql);
    $salida ='<option value="----"> Seleccione </option>';
    while ($mostrar = mysqli_fetch_array($result)) {
      $salida .= '<option value="' . $mostrar['Nombre'] . '">' . $mostrar['Nombre'] . '</option>';
    }
  echo $salida;


    mysqli_close($conn);
