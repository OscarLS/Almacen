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
	<link rel="shortcut icon" href="../Img/consulta.png">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="Alert.js"></script>
	<!--Boostrap-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
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

	<!-- Modal -->
	<div class="modal fade" id="verModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header bg-primary">
					<h5 class="modal-title text-light " id="exampleModalLabel">Contrato</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="container">
						<div class="row" id="contenedor">
							
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
					
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="eliminarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header bg-primary">
					<h5 class="modal-title text-light " id="exampleModalLabel">Contrato - Eliminar</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="container">
						<div class="row" id="contenedorE">
							
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
					
				</div>
			</div>
		</div>
	</div>



</body>

</html>

<script src="../Js/BusquedaContrato.js"></script>
<script src="../Js/modalmain.js"></script>