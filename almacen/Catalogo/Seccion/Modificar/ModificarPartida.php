<?php
	session_start();
	include_once('../../../Conexion/Conexion.php');
	$id = $_SESSION['id'];
	$nombre = $_SESSION['nombre'];
	$apellido = $_SESSION['ap'];
	if(!isset($id,$nombre,$apellido)){
		header("location: login.php");
	}
	$Identificador = $_GET['id'];
	$qry = "SELECT * FROM partida WHERE Id = '$Identificador'";
    $resultado = mysqli_query($conn, $qry);
    while ($reg = mysqli_fetch_array($resultado)) {
		$id = $reg['Id'];
		$clave = $reg['ClaveFederal'];
		$nombre = $reg['Nombre'];
    } 
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>ACTUALIZAR PARTIDA</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta charset="utf-8"> <!-- Caracter especial -->
		<link rel="stylesheet" href="../../Css/styleActualizar.css">
		<link rel="shortcut icon" href="../../Img/catalogo.png">
	</head>
<body> <!-- Cuerpo -->
	<div class="contenedor"> 
		<header class="cabecera"> <!-- Cabecera -->
			<h3>Actualizar Partida</h3>
		</header>
		<main class="cuerpo"> <!-- Contenedor -->
			<form action="../../Seccion/Modificar/ActualizarPartida.php" method="post" name="Alta">
            <article class="alta">
			<input type="hidden" name="id" autocomplete="off" value ="<?php echo $id;?>">
            <table class="Tabla"> 
					<tr> 
						<td class="lD"> Clave federal: </td>
						<td class="lD"> Nombre: </td>
					</tr>
					<tr>
					<td> <input type="text" class="input_2" name="clave" value ="<?php echo $clave;?>" autocomplete="off"> </td>
						<td> <input type="text" class="input_1" name="nombre" value ="<?php echo $nombre;?>" autocomplete="off"> </td>
					</tr> 
				</table>
				<input class="BTG" type="submit" value="Actualizar">
            </form>
                <a href="../../Seccion/Partida.php" class="BTG">Cancelar</a>
            </article>
		</main>
	</div>
</body>
</html>
