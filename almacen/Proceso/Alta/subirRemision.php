<?php

session_start();
include_once('../../Conexion/Conexion.php');

$Doct = $_POST['Doct'];
$Contrato = $_POST['Contrato'];
$Pedido = $_POST['Pedido'];
$Finaciamiento = $_POST['Finaciamiento'];
$Partida = $_POST['Partida'];
$Programa = $_POST['Programa'];
$Licitacion = $_POST['Licitacion'];
$Proveedor = $_POST['Proveedor'];
$Fecha = $_POST['Fecha'];
$Caducidad = $_POST['Caducidad'];
$Clave = $_POST['Clave'];
$Nombre = $_POST['Nombre'];
$Descripcion = $_POST['Descripcion'];
$Unidad = $_POST['Unidad'];
$Precio = $_POST['Precio'];
$Cantidad = $_POST['Cantidad'];
$Iva = $_POST['Iva'];
$Importe = $_POST['Importe'];
$Existencia = $_POST['Existencia'];
$Lote = $_POST['Lote'];

$id = $_POST['id'];

$qry = "SELECT * FROM contrato WHERE Id = '$id'";
$resultado = mysqli_query($conn, $qry);
if (mysqli_num_rows($resultado) >= 1) {
  while ($reg = mysqli_fetch_array($resultado)) {
    $exis = $reg['Existencia'];
  }
}

if (intval($exis) > 0 && intval($Cantidad) <= intval($exis)) {

  $sql = "INSERT INTO remision (Doct, Contrato, Pedido, Finaciamiento, Partida, Programa, Licitacion, Proveedor, Fecha, Caducidad, Clave, Nombre, Descripcion, Unidad, Precio, Cantidad, Iva, Importe, Existencia, Lote) VALUES ('$Doct','$Contrato','$Pedido','$Finaciamiento','$Partida','$Programa','$Licitacion','$Proveedor','$Fecha','$Caducidad','$Clave','$Nombre','$Descripcion','$Unidad','$Precio','$Cantidad','$Iva','$Importe','$Existencia','$Lote')";

  $exUp = intval($exis - $Cantidad);
  echo $exUp;
  if (mysqli_query($conn, $sql)) {


    $upd = "UPDATE contrato SET Existencia = '$exUp' WHERE Id = '$id'";

    if (mysqli_query($conn, $upd)) {
      return true;
    } else {
      return false;
    }
  } else {
    return false;
  }
} else {
  return false;
}
