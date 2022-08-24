<?php
include_once('../../Conexion/Conexion.php');
if ($_POST['contrato'] != "") {
  $contrato = $_POST['contrato'];
  $doct = $_POST['doct'];
  $qry = "SELECT * FROM contrato WHERE Contrato = '$contrato' and Doct = '$doct'";
  $resultado = mysqli_query($conn, $qry);
  if (mysqli_num_rows($resultado) >= 1) {
    $OptionPro = "<option value='----'> Seleccione </option>";
    while ($reg = mysqli_fetch_array($resultado)) {
      $Financiamiento = $reg['Financiamiento'];
      $Partida = $reg['Partida'];
      $Programa = $reg['Programa'];
      $Proveedor = $reg['Proveedor'];
      $Iva = $reg['Iva'];

      


      $OptionPro .= "<option value=".$reg['Id']."> ".$reg['Clave']." </option>";
    }
    $OptionF =  " <option value='$Financiamiento'>$Financiamiento</option> ";
    $OptionPa =  " <option value='$Partida'>$Partida</option> ";
    $OptionPg =  " <option value='$Programa'>$Programa</option> ";
    $OptionPv =  " <option value='$Proveedor'>$Proveedor</option> ";
    $OptionIva =  " <input type='text' class='input_2' name='iva' id='iva' placeholder='$Iva' value='$Iva' autocomplete='off' disabled>$Iva ";
    echo "$OptionF,$OptionPa,$OptionPg,$OptionPv,$OptionIva,$OptionPro";
  } else {

    echo "<script> alert('Error');</script>";
    echo "<script> location.reload();</script>";
  }
} else {

  echo "<script> alert('Error');</script>";
  echo "<script> location.reload();</script>";
}
