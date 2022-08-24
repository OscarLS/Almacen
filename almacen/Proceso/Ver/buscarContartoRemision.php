<?php
include_once('../../Conexion/Conexion.php');
if ($_POST['Contrato'] != "") {
  $contrato = $_POST['Contrato'];
  $doct = $_POST['Doct'];
  $qry = "SELECT * FROM contrato WHERE Contrato = '$contrato' and Doct = '$doct'";
  $resultado = mysqli_query($conn, $qry);
  if (mysqli_num_rows($resultado) >= 1) {
    while ($reg = mysqli_fetch_array($resultado)) {
      $Pedido = $reg['Pedido'];
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
    }



    echo "$Pedido,$Financiamiento,$Partida,$Programa,$Licitacion,$Proveedor,$Clave,$Nombre,$Descripcion,$Unidad,$Precio,$Iva,$Importe";
  } else {

    echo "<script> alert('Error');</script>";
    echo "<script> location.reload();</script>";
  }
} else {

  echo "<script> alert('Error');</script>";
  echo "<script> location.reload();</script>";
}
