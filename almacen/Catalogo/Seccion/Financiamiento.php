<?php
    session_start();
    include_once('../../Conexion/Conexion.php');
    $id = $_SESSION['id'];
    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['ap'];
    if(!isset($id,$nombre,$apellido)){
        header("location: login.php");
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<title>FINANCIAMIENTO</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta charset="utf-8"> <!-- Caracter especial -->
		<link rel="stylesheet" href="../Css/styleSeccionesCatalogo.css">
		<link rel="shortcut icon" href="../Img/catalogo.png">
		<script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="../Js/BusquedaFinanciamiento.js"></script> 
		<script src="../Js/Alert.js"></script>   
	</head>
<body> <!-- Cuerpo -->
	<div class="contenedor"> 
		<header class="cabecera"> <!-- Cabecera -->
			<h3>Financiamiento</h3>
		</header>
		<main class="cuerpoUp"> <!-- Contenedor -->
			<form action="../Seccion/Alta/SubirFinanciamiento.php" method="post" name="Alta">
            <article class="alta">
            <table class="TablaP"> 
					<tr>
						<td class="lD"> Nombre: </td> <!-- Nombre -->
						<td class="lD"> Descripcion: (opcional) </td>  <!-- Descripcion -->
					</tr>
					<tr>
						<td> <input type="text" class="input_1" name="nombre" placeholder="Ingrese Nombre..." autocomplete="off"> </td> <!-- Nombre -->
						<td> <textarea name="descripcion" class="input_5" autocomplete="off"></textarea> </td> <!-- Descripcion -->
					</tr>
				</table>
				<input class="BTG" type="submit" value="Guardar">
            </form>
            </article>
		</main>
		<div class="CuerpoDown">
			<div class="buscador">
                <input type="text" name="busqueda" id="busqueda" class="btn_buscar" placeholder="Buscar..." autocomplete="off">
                <a href="../Catalogo.php" class="btn_regresar">Regresar</a>
            </div>
			<section id="tabla_resultado">
                <!-- Aqui se muestra la tabla -->
            </section>
		</div>
	</div>
</body>
</html>
