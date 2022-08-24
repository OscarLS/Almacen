<?php 

	include_once('../../../Conexion/Conexion.php');

	$tabla="";
	$query="SELECT * FROM partida ORDER BY Id";

	if(isset($_POST['partida']))
	{
		$q=$conn->real_escape_string($_POST['partida']);
		$query="SELECT * FROM partida WHERE ClaveFederal LIKE '%".$q."%' OR Nombre LIKE '%".$q."%'";
	}

	$buscar=$conn->query($query);
	if ($buscar->num_rows > 0){
		$tabla.= 
		'<table class="Tabla">
		<tr>
			<td class="titulo" colspan="4"> Lista de partidas </td>
		</tr>
		<tr>
            <th> Clave federal </th>
			<th> Nombre </th>
			<th> Modificar </th>
			<th> Eliminar </th>
		</tr>';

		while($mostrar= $buscar->fetch_assoc())
		{
			$tabla.=
			'<tr>
                <td class="Lista" >'.$mostrar['ClaveFederal'].'</td>
                <td class="Lista" >'.$mostrar['Nombre'].'</td>
				<td class="Lista" >'.'<a class="ME" href="../Modificar/ModificarPartida.php?id='.$mostrar['Id'].'">MODIFICAR</a>'.'</td>
				<td class="Lista" >'.'<a class="ME" onclick="return ConfirmarDelete()" href="../Eliminar/EliminarPartida.php?id='.$mostrar['Id'].'">ELIMINAR</a>'.'</td>
			</tr>
			';
		}
		$tabla.='</table>';
	} else {
			$tabla="NO SE ENCONTRARON COINCIDENCIAS";
		}

	echo $tabla;
?>