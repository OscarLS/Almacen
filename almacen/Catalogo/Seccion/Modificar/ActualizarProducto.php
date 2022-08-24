<?php
    session_start();
    include_once('../../../Conexion/Conexion.php');
    $ID = $_POST['id'];
    $CLAVE = $_POST['clave'];
    $NOMBRE = $_POST['nombre'];
    $UNIDAD = $_POST['unidad'];
    $CATEGORIA = $_POST['categoria'];
    $DESCRIPCION = $_POST['descripcion'];
    $SERIE = $_POST['serie'];
    $sql = "UPDATE producto SET Clave='$CLAVE',Nombre='$NOMBRE',UnidadAplicativa='$UNIDAD'
    ,Categoria='$CATEGORIA',Descripcion='$DESCRIPCION',Serie='$SERIE' WHERE Id = $ID";  
 
    if (mysqli_query($conn, $sql)) {
        echo "<script> alert('Realizado con exito');</script>";
        echo "<script> location.href='../../Seccion/Producto.php';</script>"; 
    } else {
        echo "<script> alert('Error');</script>";
        echo "<script> location.href='../../Seccion/Producto.php';</script>"; 
    }
    mysqli_close($conn);
?>