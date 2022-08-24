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
	$qry = "SELECT * FROM producto WHERE Id = '$Identificador'";
    $resultado = mysqli_query($conn, $qry);
    while ($reg = mysqli_fetch_array($resultado)) {
		$id = $reg['Id'];
		$clave = $reg['Clave'];
		$nombre = $reg['Nombre'];
        $unidad = $reg['UnidadAplicativa'];
        $categoria = $reg['Categoria'];
		$descripcion = $reg['Descripcion'];
		$serie = $reg['Serie'];
    } 
?>

<!DOCTYPE html>
<html>
	<head>
		<title>ACTUALIZAR PRODUCTO</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta charset="utf-8"> <!-- Caracter especial -->
		<link rel="stylesheet" href="../../Css/styleActualizar.css">
		<link rel="shortcut icon" href="../../Img/catalogo.png">
		<script src="MostrarOcultar.js"></script> 
	</head>
<body> <!-- Cuerpo -->
	<div class="contenedor"> 
		<header class="cabecera"> <!-- Cabecera -->
			<h3>Actualizar Producto</h3>
			<div>
				<b> Mostrar N° de serie </b>
				<input type="checkbox" class="box" id="show" name="show" onclick="mostrar_ocultar()">
			</div>
		</header>
		<main class="cuerpo"> <!-- Contenedor -->
			<form action="../../Seccion/Modificar/ActualizarProducto.php" method="post" name="Alta">
            <article class="alta">
            <input type="hidden" name="id" autocomplete="off" value ="<?php echo $id;?>">
            	<table class="Tabla"> 
                        <tr> 
							<td class="lD"> Clave: </td>
							<td class="lD" > Unidad: </td>
							<td class="lD"> Nombre: </td>
						</tr>
						<tr>
							<td> <input type="text" class="input_2" name="clave" autocomplete="off" value ="<?php echo $clave;?>" > </td>
							<td>
                                <select class="input_2" name="unidad"  id="unidad" autocomplete="off">  <!-- Categoria -->
                                <option value="<?php echo $unidad;?>"><?php echo $unidad;?></option>
								<option value="----">---Seleccione Unidad---</option>
                                <?php
                                    $sql="SELECT TipoUnidad FROM unidadaplicativa";
                                    $result=mysqli_query($conn,$sql);
                                    while ($mostrar=mysqli_fetch_array($result)) {
                                    echo '<option value="'.$mostrar['TipoUnidad'].'">'.$mostrar['TipoUnidad'].'</option>';
                                    }
                                ?>
                                </select>
                            </td>
							<td> <input type="text" class="input_2" name="nombre" autocomplete="off" value ="<?php echo $nombre;?>" > </td>
						</tr> 
						<tr> 
							<td colspan="3" class="lD" > Descripcion: </td>
						</tr>
						<tr>
							<td colspan="3"> <textarea name="descripcion" class="input_3" autocomplete="off" > <?php echo $descripcion;?> </textarea> </td>
						</tr>
						<tr> 
							<td class="lD"> Categoria: </td> 
							<td class="lD"> <p id="titulo" style="display:none">N° de serie:</p> </td> 
						</tr>
						<tr> 
							<td>
                                <select class="input_2" name="categoria"  id="categoria" autocomplete="off">  <!-- Categoria -->
                                <option value="<?php echo $categoria;?>"><?php echo $categoria;?></option>
								<option value="----">--Seleccione Categoria--</option>
                                <?php
                                    $sql="SELECT Categoria FROM categoria";
                                    $result=mysqli_query($conn,$sql);
                                    while ($mostrar=mysqli_fetch_array($result)) {
                                    echo '<option value="'.$mostrar['Categoria'].'">'.$mostrar['Categoria'].'</option>';
                                    }
                                ?>
                                </select>
                            </td>
							<td> <input type="text" class="input_2"  id="serie"  style="display:none" name="serie" autocomplete="off" value ="<?php echo $serie;?>" > </td>
						</tr>
				</table>
				<input class="BTG" type="submit" value="Actualizar">
            </form>
                <a href="../../Seccion/Producto.php" class="BTG">Cancelar</a>	
            </article>
		</main>
	</div>
</body>
</html>
