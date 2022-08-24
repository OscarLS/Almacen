<?php
    session_start();
    include_once('../../Conexion/Conexion.php');
    $NOMBRE = $_POST['categoria'];
    $sql = "INSERT INTO categoria (Categoria) VALUES ('$NOMBRE')";  
 
    if (mysqli_query($conn, $sql)) {
        echo "<script> alert('Realizado con exito');</script>";
        echo "<script> location.href='ContratoCompra.php';</script>"; 
    } 
    else {
        echo "<script> alert('Error');</script>";
        echo "<script> location.href='ContratoCompra.php';</script>"; 
    }
    mysqli_close($conn);
?>