<?php
    session_start();
    include_once('../../../Conexion/Conexion.php');
    $ID = $_POST['id'];
    $NOMBRE = $_POST['nombre'];
    $sql = "UPDATE programa SET Nombre='$NOMBRE' WHERE Id = $ID";  
 
    if (mysqli_query($conn, $sql)) {
        echo "<script> alert('Realizado con exito');</script>";
        echo "<script> location.href='../../Seccion/Programa.php';</script>"; 
    } else {
        echo "<script> alert('Error');</script>";
        echo "<script> location.href='../../Seccion/Programa.php';</script>"; 
    }
    mysqli_close($conn);
?>