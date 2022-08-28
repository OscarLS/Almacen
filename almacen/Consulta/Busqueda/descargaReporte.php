<?php 

	include_once('../../Conexion/Conexion.php');

  $id = $_POST['id'];
	
	$query="SELECT * FROM contrato WHERE Id = '$id'";
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
    }

    $query="SELECT * FROM contrato WHERE Contrato = '$Contrato' AND Pedido = '$Pedido' AND Financiamiento = '$Financiamiento' AND Partida = '$Partida' AND Programa = '$Programa' AND Licitacion = '$Licitacion' AND Proveedor = '$Proveedor' AND Iva = '$Iva' AND Fecha = '$Fecha' AND Doct = '$Doct'";

    $subtotal = 0;
    $resultado = mysqli_query($conn, $query);
    if (mysqli_num_rows($resultado) >= 1) {
      while ($reg = mysqli_fetch_array($resultado)) {
      $datos .= "<tr>
      <th>". $reg['Clave'] ."</th>
      <th>". $reg['Nombre'] ."</th>
      <th>". $reg['Descripcion'] ."</th>
      <th>". $reg['Unidad'] ."</th>
      <th>". $reg['Precio'] ."</th>
      <th>". $reg['Cantidad'] ."</th>
      <th>". $reg['Existencia'] ."</th>
      <th>". $reg['Importe'] ."</th>
    </tr>";
    $subtotal = $subtotal + $reg['Precio'];
      }
    }  
$total = $subtotal;

if(isset($Iva)){
  if(intval($Iva) > 0){
    $caliva = floatval($Iva);
    $caliva = $caliva / 100;
    $total = $subtotal * $caliva;
  }else{
    $Iva = "0.0";
    }
}else{
$Iva = "0.0";
}
    

    $tabla="<div class='col-10 ' >
  <p>PROGRAMA: $Programa</p>
  <p>PARTIDA: $Partida</p>
  <p>FUENTE: $Financiamiento</p>
  <p>PROVEEDOR: $Proveedor</p>
</div>
<div class='col-2'>
  <p>LICITACION: $Licitacion</p>
  <p>FECHA: $Fecha</p>
  <p>CONTRATO: $Contrato</p>
  <p>PEDIDO: $Pedido</p>
</div>
<div class='col'>
  <table class='table  table-bordered '>
    <thead class='table-primary'>
      <tr >
        <th>clave</th>
        <th>nombre</th>
        <th>descripcion</th>
        <th>unidad</th>
        <th>p_u</th>
        <th>cantidad</th>
        <th>existencia</th>
        <th>importe</th>
      </tr>
    </thead>
    <tbody id='dobyArticulo'>
    $datos
    <tr class='text-center' >
    <th ></th>
      <th ><span  class='btn btn-primary'>SUBTOTAL</span><p>$ $subtotal</p></th>
      <th ><span  class='btn btn-warning text-light '>IVA</span><p>%  $Iva</p></th>
      <th ></th>
      <th colspan='2'><span  class='btn btn-danger'>TOTAL</span><p>$ $total</p></th>
      <th colspan='2'></th>
    <tr>
    </tbody>
    
  </table>
  
</div>";

    echo $tabla;
  } else {
    echo "<script> alert('Error');</script>";
    echo "<script> location.reload();</script>";
  }
  