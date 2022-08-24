<?php
    session_start();
    include_once('../../Conexion/Conexion.php');
    $NOMBRE = $_POST['unidad'];
    $sql = "INSERT INTO unidadaplicativa (TipoUnidad) VALUES ('$NOMBRE')";  
 
    if (mysqli_query($conn, $sql)) {
        return true;
    } 
    else {
        return false;
    }
    mysqli_close($conn);
?>