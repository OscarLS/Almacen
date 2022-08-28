<?php

include_once('../../Conexion/Conexion.php');

$id = $_POST['id'];

$query = "SELECT * FROM contrato WHERE Id = '$id'";

$resultado = mysqli_query($conn, $query);
if (mysqli_num_rows($resultado) >= 1) {
  while ($reg = mysqli_fetch_array($resultado)) {
    $Doct = $reg['Doct'];
    $Contrato = $reg['Contrato'];
    $Pedido = $reg['Pedido'];
    $Fecha = $reg['Fecha'];
    $Financiamiento = $reg['Financiamiento'];
    $Partida   = $reg['Partida'];
    $Programa   = $reg['Programa'];
    $Licitacion   = $reg['Licitacion'];
    $Proveedor   = $reg['Proveedor'];
    $Clave   = $reg['Clave'];
    $Nombre   = $reg['Nombre'];
    $Descripcion   = $reg['Descripcion'];
    $Unidad   = $reg['Unidad'];
    $Precio   = $reg['Precio'];
    $Iva   = $reg['Iva'];
    $Importe   = $reg['Importe'];
    $Cantidad   = $reg['Cantidad'];
    $Existencia   = $reg['Cantidad'];
  }

  $query = "DELETE FROM contrato WHERE Id = '$id' ";

 mysqli_query($conn, $query);

$query = "DELETE FROM remision WHERE Doct = '$Doct' AND Contrato = '$Contrato' AND Financiamiento = '$Financiamiento' AND Partida = '$Partida' AND Programa = '$Programa' AND Proveedor = '$Proveedor' AND Iva = '$Iva' AND Clave = '$Clave' AND Nombre = '$Nombre' AND Descripcion = '$Descripcion' AND Unidad = '$Unidad' AND  Precio = '$Precio' ";

mysqli_query($conn, $query);


return true;

} else {
  echo "<script> alert('Error');</script>";
  echo "<script> location.reload();</script>";
}
