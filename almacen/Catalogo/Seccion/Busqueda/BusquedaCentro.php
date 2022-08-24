<?php 

include_once('../../../Conexion/Conexion.php');

	$tabla="";
	$query="SELECT * FROM centro ORDER BY Id";

	if(isset($_POST['centro']))
	{
		$q=$conn->real_escape_string($_POST['centro']);
		$query="SELECT * FROM centro WHERE Nombre LIKE '%".$q."%' OR Direccion LIKE '%".$q."%' OR Jurisdiccion LIKE '%".$q."%' ";
	}

	$buscar=$conn->query($query);
	if ($buscar->num_rows > 0){
		$tabla.= 
		'<table class="Tabla">
		<tr>
			<td class="titulo" colspan="5"> Lista de centros </td>
		</tr>
		<tr>
			<th> Nombre </th>
            <th> Direccion </th>
            <th> jurisdiccion </th>
			<th> Modificar </th>
			<th> Eliminar </th>
		</tr>';

		while($mostrar= $buscar->fetch_assoc())
		{
			$tabla.=
			'<tr>
                <td class="Lista" >'.$mostrar['Nombre'].'</td>
                <td class="Lista" >'.$mostrar['Direccion'].'</td>
                <td class="Lista" >'.$mostrar['Jurisdiccion'].'</td>
				<td class="Lista" >'.'<a class="ME" href="../Modificar/ModificarCentro.php?id='.$mostrar['Id'].'">MODIFICAR</a>'.'</td>
				<td class="Lista" >'.'<a class="ME" onclick="return ConfirmarDelete()" href="../Eliminar/EliminarCentro.php?id='.$mostrar['Id'].'">ELIMINAR</a>'.'</td>
			</tr>
			';
		}
		$tabla.='</table>';
	} else {
			$tabla="NO SE ENCONTRARON COINCIDENCIAS";
		}

	echo $tabla;
?>