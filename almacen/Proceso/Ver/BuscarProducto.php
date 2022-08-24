<?php 
	include_once('../../Conexion/Conexion.php');
    $id = $_POST['id'];
	$qry="SELECT * FROM producto WHERE Id = '$id'";
    $resultado = mysqli_query($conn, $qry);
    if(mysqli_num_rows($resultado) >= 1){   
        while ($reg = mysqli_fetch_array($resultado)) {
            $nombre = $reg['Nombre'];
            $unidad = $reg['UnidadAplicativa'];
            $descripcion = $reg['Descripcion'];
            $showN = " <input type='text' value='$nombre' class='input_1_show' name='nombre' id='nombre' readonly > ";
            $showU = " <input type='text' value='$unidad' class='input_1_show' name='tipounidad' id='tipounidad' readonly > ";
            $showD = " <textarea name='descripcion' id='descripcion' class='input_3' readonly > $descripcion </textarea> ";
            echo "$showU,$showN,$showD";
        } 
    }else{
        echo "<script> alert('Error');</script>";
        echo "<script> location.reload();</script>"; 
    }
?>