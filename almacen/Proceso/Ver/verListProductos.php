<?php
    session_start();
    include_once('../../Conexion/Conexion.php');

    $sql = "SELECT * FROM producto";
    $result = mysqli_query($conn, $sql);
    $namelist = "";
    $valor = "";
    while ($mostrar = mysqli_fetch_array($result)) {
      $valor = $mostrar['Nombre']."#".$mostrar['Clave']."#".$mostrar['UnidadAplicativa']."#".$mostrar['Descripcion'];
      $namelist .= "<option data-ejemplo='" . $mostrar['Id'] . "' value='".$valor."'   ></option>";
    }
 echo $namelist;
 	


    mysqli_close($conn);
?>