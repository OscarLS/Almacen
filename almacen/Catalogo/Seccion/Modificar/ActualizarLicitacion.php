<?php
    session_start();
    include_once('../../../Conexion/Conexion.php');
    $ID = $_POST['id'];
    $LICITACION = $_POST['licitacion'];
    $sql = "UPDATE licitacion SET Licitacion='$LICITACION' WHERE Id = $ID";  
 
    if (mysqli_query($conn, $sql)) {
        echo "<script> alert('Realizado con exito');</script>";
        echo "<script> location.href='../../Seccion/Licitacion.php';</script>"; 
    } else {
        echo "<script> alert('Error');</script>";
        echo "<script> location.href='../../Seccion/Licitacion.php';</script>"; 
    }
    mysqli_close($conn);
?>