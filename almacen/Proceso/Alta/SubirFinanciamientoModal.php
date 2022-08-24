<?php
    session_start();
    include_once('../../Conexion/Conexion.php');
    $NOMBRE = $_POST['nombre'];
    $DESCRIPCION = $_POST['descripcion'];
    $sql = "INSERT INTO financiamiento (Nombre,Descripcion) VALUES ('$NOMBRE','$DESCRIPCION')";  
 
    if (mysqli_query($conn, $sql)) {
        return true;
    }else {
        return false;
    }
    mysqli_close($conn);
?>