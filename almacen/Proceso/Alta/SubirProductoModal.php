<?php
    session_start();
    include_once('../../Conexion/Conexion.php');
    $CLAVE = $_POST['clave'];
    $NOMBRE = $_POST['nombre'];
    $UNIDAD = $_POST['unidad'];
    $CATEGORIA = $_POST['categoria'];
    $DESCRIPCION = $_POST['descripcion'];
    $SERIE = $_POST['serie'];
    $sql = "INSERT INTO producto (Clave,Nombre,UnidadAplicativa,Categoria,Descripcion,Serie) VALUES 
    ('$CLAVE','$NOMBRE','$UNIDAD','$CATEGORIA','$DESCRIPCION','$SERIE')";  

    if (mysqli_query($conn, $sql)) {
        return true; 
    } 
    else {
        return false;
    }
    mysqli_close($conn);
?>