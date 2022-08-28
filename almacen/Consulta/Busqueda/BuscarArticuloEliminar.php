<?php

include_once('../../Conexion/Conexion.php');

$id = $_POST['id'];

$query = "SELECT * FROM contrato WHERE Id = '$id'";
$datos = "";

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
  $tabla = "<div class='col-9 ' >
  <div>PROGRAMA: $Programa</label></div>
  <div>PARTIDA: $Partida</div>
  <p>FUENTE: $Financiamiento</p>
  <p>PROVEEDOR: $Proveedor</p>
  <p>CLAVE: $Clave</p>
  <p>NOMBRE: $Nombre</p>
  <p>DESCRIPCION: $Descripcion</p>
  <p>UNIDAD: $Unidad</p>
  <p>EXISTENCIA: $Existencia</p>
</div>
<div class='col-3'>
  <p>LICITACION: $Licitacion</p>
  <p>FECHA: $Fecha</p>
  <p>CONTRATO: $Contrato</p>
  <p>PEDIDO: $Pedido</p>
  <p>PRECIO: $Precio</p>
  <p>CANTIDAD: $Cantidad</p>
  <p>IVA: $Iva</p>
  <p>IMPORTE: $Importe</p>
</div>
<div>
  <h2 class='text-center' >¿Que desea hacer?</h2>
</div>
<div  class='col-6 text-center' ><button type='button' class='btn btn-danger btn-lg btn-block' onclick='eliminarOne($id)'>Eliminar Este</button></div>
<div    class='col-6 text-center' >
<button type='button' class='btn btn-warning btn-lg btn-block'  onclick='eliminarAll($id)'>Elimnar todos</button></div>";

  echo $tabla;
} else {
  echo "<script> alert('Error');</script>";
  echo "<script> location.reload();</script>";
}
