<?php
include_once('../../Conexion/Conexion.php');
if ($_POST['id'] != "") {
  $id = $_POST['id'];
  $doct = $_POST['doct'];
  $qry = "SELECT * FROM contrato WHERE Id = '$id' and Doct = '$doct'";
  $resultado = mysqli_query($conn, $qry);
  if (mysqli_num_rows($resultado) >= 1) {
    while ($reg = mysqli_fetch_array($resultado)) {
      $Nombre = $reg['Nombre'];
      $Unidad = $reg['Unidad'];
      $Descripcion = $reg['Descripcion'];
      $Precio = $reg['Precio'];
      $Importe = $reg['Importe'];
      $Existencia = $reg['Existencia'];

      $showN = " <input type='text' class='input_1_show' name='nombre' id='nombre' value='$Nombre' readonly>";
      $showU = " <input type='text' class='input_1_show' name='unidad' id='unidad' value='$Unidad' readonly>";
      $showD = " <textarea name='descripcion' id='descripcion' class='input_3' readonly > $Descripcion </textarea> ";
      $showP = " <input type='text' class='input_1_show' name='precio' id='precio' value='$Precio' readonly>";
      $showI = "<input type='text' class='input_1_show' name='indice' id='indice' value = '$Importe' readonly>";
      $showE = " <input type='text' class='input_1_show' name='existencia' id='existencia' value='$Existencia' readonly>";

      echo "$showN,$showU,$showD,$showP,$showI,$showE";
    }
  } else {

    echo "<script> alert('Error');</script>";
    echo "<script> location.reload();</script>";
  }
} else {

  echo "<script> alert('Error');</script>";
  echo "<script> location.reload();</script>";
}
