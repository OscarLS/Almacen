<?php 

	include_once('../../../Conexion/Conexion.php');

	$tabla="";
	$query="SELECT * FROM unidadaplicativa ORDER BY Id";

	if(isset($_POST['unidadaplicativa']))
	{
		$q=$conn->real_escape_string($_POST['unidadaplicativa']);
		$query="SELECT * FROM unidadaplicativa  WHERE TipoUnidad LIKE '%".$q."%' ";
	}

	$buscar=$conn->query($query);
	if ($buscar->num_rows > 0){
		$tabla.= 
		'<table class="Tabla">
		<tr>
			<td class="titulo" colspan="3"> Lista de unidades </td>
		</tr>
		<tr>
			<th> Tipo de Unidad </th>
			<th> Modificar </th>
			<th> Eliminar </th>
		</tr>';

		while($mostrar= $buscar->fetch_assoc())
		{
			$tabla.=
			'<tr>
				<td class="Lista" >'.$mostrar['TipoUnidad'].'</td>
				<td class="Lista" >'.'<a class="ME" href="../Modificar/ModificarUnidad.php?id='.$mostrar['Id'].'">MODIFICAR</a>'.'</td>
				<td class="Lista" >'.'<a class="ME" onclick="return ConfirmarDelete()" href="../Eliminar/EliminarUnidad.php?id='.$mostrar['Id'].'">ELIMINAR</a>'.'</td>
			</tr>
			';
		}
		$tabla.='</table>';
	} else {
			$tabla="NO SE ENCONTRARON COINCIDENCIAS";
		}

	echo $tabla;
?>