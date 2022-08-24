<?php
    session_start();
    include_once('Conexion.php');
    $NOMBRE = $_POST['nombre'];
    $sql = "INSERT INTO programa (Nombre) VALUES ('$NOMBRE')";  
 
    if (mysqli_query($conn, $sql)) {
        echo "<script> alert('Realizado con exito');</script>";
        echo "<script> location.href='contrato.php';</script>"; 
    } 
    else {
        echo "<script> alert('Error');</script>";
        echo "<script> location.href='contrato.php';</script>"; 
    }
    mysqli_close($conn);
?>