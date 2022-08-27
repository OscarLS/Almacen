<?php
session_start();
include_once('../../Conexion/Conexion.php');
$id = $_SESSION['id'];
$nombre = $_SESSION['nombre'];
$apellido = $_SESSION['ap'];
if (!isset($id, $nombre, $apellido)) {
	header("location: login.php");
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>CONTRATO</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="utf-8"> <!-- Caracter especial -->
	<link rel="stylesheet" href="../Css/styleTotal.css">
	<link rel="stylesheet" href="../Css/styleModal.css">
	<link rel="shortcut icon" href="../Img/consulta.png">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="Alert.js"></script>
</head>

<body>
	<!-- Cuerpo -->
	<div class="contenedor">
		<header class="cabecera">
			<!-- Cabecera -->
			<h3>Busqueda - Contratos</h3>
		</header>
		<main class="cuerpo">
			<!-- Contenedor -->
			<div class="buscador">
				<input type="text" name="busqueda" id="busqueda" class="btn_buscar" autocomplete="off">
				<a href="../Consulta.php" class="btn_regresar">Regresar</a>
			</div>
			<section id="tabla_resultado">
				<!-- Aqui se muestra la tabla -->
			</section>
		</main>
	</div>
	<div>
		<?php
			include_once('ModalVer.php');
		?>
	</div>
	<div>
		<?php
			include_once('ModalEliminar.php');
		?>
	</div>
</body>

</html>

<script src="../Js/BusquedaContrato.js"></script>
<script src="../Js/modalmain.js"></script>