<?php
    session_start();
    include_once('../../Conexion/Conexion.php');
    $NOMBRE = $_POST['categoria'];
    $sql = "INSERT INTO categoria (Categoria) VALUES ('$NOMBRE')";  
 
    if (mysqli_query($conn, $sql)) {
        return true;
    } 
    else {
        return false; 
    }
    mysqli_close($conn);
?>