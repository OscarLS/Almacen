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
		<title>PRODUCTO</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta charset="utf-8"> <!-- Caracter especial -->
		<link rel="stylesheet" href="../Css/styleSeccionesCatalogo.css">
		<link rel="shortcut icon" href="../Img/catalogo.png">
		<script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="../Js/BusquedaProducto.js"></script> 
		<script src="../Js/Alert.js"></script>  
		<script src="../Js/MostrarOcultar.js"></script> 
	</head>
	<body> <!-- Cuerpo -->
		<div class="contenedor"> 
			<header class="cabecera"> <!-- Cabecera -->
				<h3>Productos</h3>
				<div>
					<b> Mostrar N° de serie </b>
					<input type="checkbox" class="box" id="show" name="show" onclick="mostrar_ocultar()">
				</div>
			</header>
			<main class="cuerpoUp"> <!-- Contenedor -->
				<form  action="../Seccion/Alta/SubirProducto.php" method="post" name="Alta">
				<article class="alta">
					<table class="TablaP"> 
						<tr> 
							<td class="lD"> Clave: </td> <!-- Clave -->
							<td class="lD"> Unidad: </td> <!-- Unidad -->
							<td class="lD" > Nombre: </td> <!-- Nombre -->
						</tr>
						<tr> 
							<td> <input type="text" class="input_2" name="clave" id="clave"  placeholder="Ingrese Clave..."  autocomplete="off"> </td> <!-- Clave -->
							<td>
                                <select class="input_2" name="unidad" id="unidad" autocomplete="off">   <!-- Unidad -->
                                <option value="----">---Seleccione Unidad---</option>
                                <?php
                                    $sql="SELECT TipoUnidad FROM unidadaplicativa";
                                    $result=mysqli_query($conn,$sql);
                                    while ($mostrar=mysqli_fetch_array($result)) {
                                    echo '<option value="'.$mostrar['TipoUnidad'].'">'.$mostrar['TipoUnidad'].'</option>';
                                    }
                                ?>
                                </select>
					 			<button type="button" class="BTA" onclick="document.location='Unidad.php'">+</button>
                            </td>
							<td> <input type="text" class="input_1" name="nombre" id="nombre"  placeholder="Ingrese Nombre..."  autocomplete="off"> </td> <!-- Nombre -->
						</tr> 
                        <tr> 
							<td colspan="3" class="lD"> Descripcion: </td> <!-- Descripcion -->
						</tr>
						<tr> 
							<td colspan="3"> <textarea name="descripcion" id="descripcion" class="input_3" autocomplete="off"> </textarea> </td> <!-- Descripcion -->
						</tr>
						<tr> 
							<td class="lD"> Categoria: </td> <!-- Categoria -->
							<td class="lD"> <p id="titulo"  style="display:none">N° de serie:</p> </td> <!-- N° de serie -->
						</tr>
						<tr> 
							<td>
                                <select class="input_2" name="categoria"  id="categoria" autocomplete="off">  <!-- Categoria -->
                                <option value="----">--Seleccione Categoria--</option>
                                <?php
                                    $sql="SELECT Categoria FROM categoria";
                                    $result=mysqli_query($conn,$sql);
                                    while ($mostrar=mysqli_fetch_array($result)) {
                                    echo '<option value="'.$mostrar['Categoria'].'">'.$mostrar['Categoria'].'</option>';
                                    }
                                ?>
                                </select>
								<button type="button" class="BTA" onclick="document.location='Categoria.php'">+</button>
                            </td>
							<td > <input type="text" id="serie"  style="display:none" class="input_2"  name="serie"  placeholder="Ingrese Serie..."  autocomplete="off"> </td>  <!-- N° de serie -->
						</tr> 
					</table>
					<input class="BTG" type="submit" value="Guardar">
				</form>
				</article>
			</main>
			<div class="CuerpoDown">
				<div class="buscador">
					<input type="text" name="busqueda" id="busqueda" class="btn_buscar" placeholder="Buscar..."  autocomplete="off">
					<a href="../Catalogo.php" class="btn_regresar">Regresar</a>
				</div>
				<section id="tabla_resultado">
					<!-- Aqui se muestra la tabla -->
				</section>
			</div>
		</div>
	</body>
</html>