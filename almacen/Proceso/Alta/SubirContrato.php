<?php
    session_start();
    include_once('../../Conexion/Conexion.php');
    $Doct = $_POST['Doct'];
    $Contrato = $_POST['Contrato'];
    $Pedido = $_POST['Pedido'];
    $Financiamiento = $_POST['Financiamiento'];
    $Partida = $_POST['Partida'];
    $Programa = $_POST['Programa'];
    $Licitacion = $_POST['Licitacion'];
    $Proveedor = $_POST['Proveedor'];
    $Fecha = $_POST['Fecha'];
    $Clave = $_POST['Clave'];
    $Nombre = $_POST['Nombre'];
    $Descripcion = $_POST['Descripcion'];
    $Unidad = $_POST['Unidad'];
    $Precio = $_POST['Precio'];
    $Cantidad = $_POST['Cantidad'];
    $Iva = $_POST['Iva'];
    $Importe = $_POST['Importe'];
    $Indice = $_POST['Indice'];
    $Existencia = $_POST['Existencia'];

    $sql = "INSERT INTO contrato (Doct,Contrato,Pedido,Financiamiento,Partida,Programa,Licitacion,Proveedor,Fecha,Clave,Nombre,Descripcion,Unidad,Precio,Cantidad,Iva,Importe,Indice,Existencia) VALUES ('$Doct','$Contrato','$Pedido','$Financiamiento','$Partida','$Programa','$Licitacion','$Proveedor','$Fecha','$Clave','$Nombre','$Descripcion','$Unidad','$Precio','$Cantidad','$Iva','$Importe','$Indice','$Existencia')";  
 
    if (mysqli_query($conn, $sql)) {
        return true ;
    } 
    else {
        return false; 
    }
    mysqli_close($conn);
?>