<?php
    session_start();
    include_once('../../Conexion/Conexion.php');
    $NOMBRE = $_POST['nombre'];
    $DIRECCION = $_POST['direccion'];
    $JURISDICCION = $_POST['jurisdiccion'];
    $sql = "INSERT INTO centro (Nombre,Direccion,Jurisdiccion) VALUES ('$NOMBRE','$DIRECCION','$JURISDICCION')";  
 
    if (mysqli_query($conn, $sql)) {
        return true ;
    } 
    else {
        return false; 
    }
    mysqli_close($conn);
?>