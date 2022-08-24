<?php
    session_start();
    include_once('../../../Conexion/Conexion.php');
    $NOMBRE = $_POST['nombre'];
    $RFC = $_POST['rfc'];
    $TELEFONO = $_POST['telefono'];
    $CORREO = $_POST['correo'];
    $DIRECCION = $_POST['direccion'];
    $sql = "INSERT INTO proveedor (Nombre,Rfc,Telefono,Correo,Direccion) VALUES ('$NOMBRE','$RFC',
    '$TELEFONO','$CORREO','$DIRECCION')";  

    if (mysqli_query($conn, $sql)) {
        echo "<script> alert('Realizado con exito');</script>";
        echo "<script> location.href='../../Seccion/Proveedor.php';</script>"; 
    } 
    else {
        echo "<script> alert('Error');</script>";
        echo "<script> location.href='../../Seccion/Proveedor.php';</script>"; 
    }
    mysqli_close($conn);
?>