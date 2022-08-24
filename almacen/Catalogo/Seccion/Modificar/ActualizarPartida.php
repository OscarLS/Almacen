<?php
    session_start();
    include_once('../../../Conexion/Conexion.php');
    $ID = $_POST['id'];
    $NOMBRE = $_POST['nombre'];
    $CLAVE = $_POST['clave'];
    $sql = "UPDATE partida SET Nombre='$NOMBRE',ClaveFederal='$CLAVE' WHERE Id = $ID";  
 
    if (mysqli_query($conn, $sql)) {
        echo "<script> alert('Realizado con exito');</script>";
        echo "<script> location.href='../../Seccion/Partida.php';</script>"; 
    } else {
        echo "<script> alert('Error');</script>";
        echo "<script> location.href='../../Seccion/Partida.php';</script>"; 
    }
    mysqli_close($conn);
?>