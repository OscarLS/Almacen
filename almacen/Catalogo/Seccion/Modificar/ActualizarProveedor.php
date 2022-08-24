<?php
    session_start();
    include_once('../../../Conexion/Conexion.php');
    $ID = $_POST['id'];
    $NOMBRE = $_POST['nombre'];
    $RFC = $_POST['rfc'];
    $TELEFONO = $_POST['telefono'];
    $CORREO = $_POST['correo'];
    $DIRECCION = $_POST['direccion'];
    $sql = "UPDATE proveedor SET Nombre='$NOMBRE',Rfc='$RFC',
    Telefono='$TELEFONO',Correo='$CORREO',Direccion='$DIRECCION' WHERE Id = $ID";  
 
    if (mysqli_query($conn, $sql)) {
        echo "<script> alert('Realizado con exito');</script>";
        echo "<script> location.href='../../Seccion/Proveedor.php';</script>"; 
    } else {
        echo "<script> alert('Error');</script>";
        echo "<script> location.href='../../Seccion/Proveedor.php';</script>"; 
    }
    mysqli_close($conn);
?>