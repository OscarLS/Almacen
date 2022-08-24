<?php
    session_start();
    include_once('../../../Conexion/Conexion.php');
    $CLAVE = $_POST['clave'];
    $NOMBRE = $_POST['nombre'];
    $sql = "INSERT INTO partida (ClaveFederal,Nombre) VALUES ('$CLAVE','$NOMBRE')";  
 
    if (mysqli_query($conn, $sql)) {
        echo "<script> alert('Realizado con exito');</script>";
        echo "<script> location.href='../../Seccion/Partida.php';</script>"; 
    } 
    else {
        echo "<script> alert('Error');</script>";
        echo "<script> location.href='../../Seccion/Partida.php';</script>"; 
    }
    mysqli_close($conn);
?>