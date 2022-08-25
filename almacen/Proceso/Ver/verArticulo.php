<?php
    session_start();
    include_once('../../Conexion/Conexion.php');

    $sql = "SELECT * FROM producto";
    $result = mysqli_query($conn, $sql);
    $salida ="<option value='----''> Seleccione </option>";
    while ($mostrar = mysqli_fetch_array($result)) {
      $salida .= "<option value='" . $mostrar['Id'] . "'>" . $mostrar['Clave'] . "</option>";
    }
 echo $salida;
 	


    mysqli_close($conn);
?>