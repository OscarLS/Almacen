<?php
    session_start();
    include_once('../../../Conexion/Conexion.php');
    $ID = $_POST['id'];
    $NOMBRE = $_POST['nombre'];
    $DESCRIPCION = $_POST['descripcion'];
    $sql = "UPDATE financiamiento SET Nombre='$NOMBRE',Descripcion='$DESCRIPCION' WHERE Id = $ID";  
 
    if (mysqli_query($conn, $sql)) {
        echo "<script> alert('Realizado con exito');</script>";
        echo "<script> location.href='../../Seccion/Financiamiento.php';</script>"; 
    } else {
        echo "<script> alert('Error');</script>";
        echo "<script> location.href='../../Seccion/Financiamiento.php';</script>"; 
    }
    mysqli_close($conn);
?>