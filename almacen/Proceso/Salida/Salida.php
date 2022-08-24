<?php
    session_start();
    include_once('Conexion.php');
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
		<title>GENERAL</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta charset="utf-8"> <!-- Caracter especial -->
		<link rel="stylesheet" href="estilos/styleSalida.css">
        <link rel="stylesheet" href="estilos/select2.css">
		<link rel="shortcut icon" href="Img/Almacen.png">
		<script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="js/BusquedaProveedor.js"></script>
		<script src="Alert.js"></script>
        <script src="BuscarProducto.js"></script>
        <script src="js/select2.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#producto').select2();
            });
        </script>

	</head>
<body> <!-- Cuerpo -->
	<div class="contenedor"> 
		<header class="cabecera"> <!-- Cabecera -->
			<h3>Salida General</h3>
		</header>
		<main class="cuerpoUp"> <!-- Contenedor -->
			<form action="SubirProveedor.php" method="post" name="Alta">
            <article class="alta-contrato">
            	<table class="TablaP"> 
					<tr> 
						<td class="lD"> Orden de Envio: </td> <!-- Nombre -->
						<td class="lD"> Fecha: </td>  <!-- Rfc -->
                        <td class="lD"> Programa: </td>  <!-- Programa -->
					</tr>
					<tr> 
						<td> <input type="text" class="input_1" name="orden" id="orden" placeholder="  Ingrese Orden de Envio..." autocomplete="off"> </td> <!-- Contrato -->
						<td> <input type="date" class="input_1" name="fecha" id="fecha" autocomplete="off"> </td> <!-- Fecha -->
                        <td>
                            <select class="input_1" name="programa" id="programa" autocomplete="off">  <!-- Programa -->
                            <option value="----">  Seleccione  </option>
                            <?php
                                include_once('Conexion.php');
                                $sql="SELECT Nombre FROM programa";
                                $result=mysqli_query($conn,$sql);
                                while ($mostrar=mysqli_fetch_array($result)) {
                                echo '<option value="'.$mostrar['Nombre'].'">'.$mostrar['Nombre'].'</option>';
                                }
                            ?>
                            </select>
                             <!-- <button type="button" class="BTA" onclick="document.location='Programa.php'">+</button> -->
                        </td> 
                    </tr>
					<tr> 
						<td class="lD" > Partida: </td> <!-- Partida -->
                        <td class="lD"> Unidad Aplicativa: </td> <!-- Centro -->
					</tr>
					<tr>
                        <td>
                            <select class="input_1" name="partida" id="partida" autocomplete="off">  <!-- Partida -->
                            <option value="----">  Seleccione  </option>
                            <?php
                                include_once('Conexion.php');
                                $sql="SELECT ClaveFederal FROM partida";
                                $result=mysqli_query($conn,$sql);
                                while ($mostrar=mysqli_fetch_array($result)) {
                                echo '<option value="'.$mostrar['ClaveFederal'].'">'.$mostrar['ClaveFederal'].'</option>';
                                }
                            ?>
                            </select>
                             <!-- <button type="button" class="BTA" onclick="document.location='Partida.php'">+</button> -->
                        </td> 
                        <td>
                            <select class="input_1" name="unidad" id="unidad" autocomplete="off">  <!-- Centro -->
                            <option value="----">  Seleccione  </option>
                            <?php
                                include_once('Conexion.php');
                                $sql="SELECT Nombre FROM centro";
                                $result=mysqli_query($conn,$sql);
                                while ($mostrar=mysqli_fetch_array($result)) {
                                echo '<option value="'.$mostrar['Nombre'].'">'.$mostrar['Nombre'].'</option>';
                                }
                            ?>
                            </select>
                             <!-- <button type="button" class="BTA" onclick="document.location='Centro.php'">+</button> -->
                        </td> 
					</tr>
                    <tr> 
						<td colspan="3" class="lD"> Descripcion: </td> <!-- Descripcion -->
					</tr>
					<tr> 
						<td colspan="3"> <textarea name="explicacion" id="explicacion" class="input_3_show"> </textarea> </td> <!-- Descripcion -->
					</tr>
				</table>
			</form>
            </article>
            <article class="alta-contrato">
                <h2>Busqueda de articulos</h2>
                <table class="TablaP"> 
					<tr> 
						<td class="lD"> Buscar Articulo: </td> <!-- Clave -->
						<td class="lD"> Nombre: </td> <!-- Unidad -->
						<td class="lD" > Unidad: </td> <!-- Nombre -->
					</tr>
					<tr> 
                        <td> <!-- Inicio -->
                            <select class="input_1" name="producto" id="producto">  <!-- Clave -->
                            <option value="----">  Seleccione  </option>
                            <?php
                                include_once('Conexion.php');
                                $sql="SELECT Id, Clave FROM producto";
                                $result=mysqli_query($conn,$sql);
                                while ($mostrar=mysqli_fetch_array($result)) {
                                echo '<option value="'.$mostrar['Id'].'">'.$mostrar['Clave'].'</option>';
                                }
                            ?>
                            </select>
                             <!-- <button type="button" class="BTA" onclick="document.location='Producto.php'">+</button> -->
                        </td>
						<td id="product"> <input type="text" class="input_1_show" name="nombre" id="nombre" readonly > </td> <!-- Nombre -->
                        <td id="unit"> <input type="text" class="input_1_show" name="unidad" id="unidad" readonly > </td> <!-- Unidad -->
					</tr> 
                    <tr> 
						<td colspan="3" class="lD"> Descripcion: </td> <!-- Descripcion -->
					</tr>
					<tr> 
						<td id="explicacion" colspan="3"> <textarea name="descripcion" id="descripcion" class="input_3" readonly > </textarea> </td> <!-- Descripcion -->
					</tr>
					<tr> 
						<td class="lD"> Precio: </td> <!-- Categoria -->
                        <td class="lD"> Existencia: </td> <!-- Categoria -->
                        <td class="lD"> Indice: </td> <!-- Categoria -->
					</tr>
					<tr> 
                        <td> <input type="text" class="input_1_show" name="precio" id="precio" readonly> </td> <!-- Precio -->
						<td> <input type="text" class="input_1_show" name="existencia" id="existencia" readonly> </td> <!-- Cantidad -->
                        <td> <input type="text" class="input_1_show" name="indice" id="indice" readonly> </td> <!-- Cantidad -->
					</tr> 
                    <tr> 
                        <td class="lD"> Lote: </td> <!-- Lote -->
                        <td class="lD"> Fecha de Caducidad: </td> <!-- Lote -->
                        <td class="lD"> Iva: </td> <!-- Iva -->
					</tr>
					<tr> 
                        <td> <input type="text" class="input_1_show" name="lote" id="lote"  readonly> </td> <!-- Cantidad -->
                        <td> <input type="date" class="input_1_show" name="caducidad" id="caducidad" readonly> </td> <!-- Caducidad -->
                        <td> <input type="text" class="input_1_show" name="iva" id="iva"  readonly> </td> <!-- Cantidad -->
					</tr>
                    <tr> 
                        <td class="lD"> Cantidad: </td> <!-- Lote -->
					</tr>
					<tr> 
                        <td> <input type="text" class="input_1" name="cantidad" id="cantidad"  placeholder="  Ingrese Cantidad"  autocomplete="off"> </td> <!-- Cantidad -->
					</tr>
				</table>
                <div class="botones">
                    <input class="BTG" type="submit" value="Agregar">
                    <a href="Proceso.php" class="BTG">Regresar</a>
                </div>
            </article>
		</main>
		<div class="CuerpoDown">
			<div class="buscador">
                <input type="text" name="busqueda" id="busqueda" class="btn_buscar" placeholder="  Buscar..." autocomplete="off">
                <a href="Proceso.php" class="btn_regresar">Regresar</a>
            </div>
			<section id="tabla_resultado">
                <!-- Aqui se muestra la tabla -->
            </section>
		</div>
	</div>
</body>
</html>
