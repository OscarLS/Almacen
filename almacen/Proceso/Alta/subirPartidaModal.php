<?php
    session_start();
    include_once('../../Conexion/Conexion.php');

    $CLAVE = $_POST['clave'];
    $NOMBRE = $_POST['nombre'];
    $sql = "INSERT INTO partida (ClaveFederal,Nombre) VALUES ('$CLAVE','$NOMBRE')";  
 
    if (mysqli_query($conn, $sql)) {
        return true;
    }else {
        return false;
    }
    mysqli_close($conn);
?>