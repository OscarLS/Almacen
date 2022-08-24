<?php 

include_once('../../../Conexion/Conexion.php');

	$tabla="";
	$query="SELECT * FROM financiamiento ORDER BY Id";

	if(isset($_POST['financiamiento']))
	{
		$q=$conn->real_escape_string($_POST['financiamiento']);
		$query="SELECT * FROM financiamiento WHERE Nombre LIKE '%".$q."%' OR Descripcion LIKE '%".$q."%'";
	}

	$buscar=$conn->query($query);
	if ($buscar->num_rows > 0){
		$tabla.= 
		'<table class="Tabla">
		<tr>
			<td class="titulo" colspan="4"> Lista de fuentes de financiamiento </td>
		</tr>
		<tr>
			<th> Nombre </th>
            <th> Descripcion </th>
			<th> Modificar </th>
			<th> Eliminar </th>
		</tr>';

		while($mostrar= $buscar->fetch_assoc())
		{
			$tabla.=
			'<tr>
                <td class="Lista" >'.$mostrar['Nombre'].'</td>
                <td class="Lista" >'.$mostrar['Descripcion'].'</td>
				<td class="Lista" >'.'<a class="ME" href="../Modificar/ModificarFinanciamiento.php?id='.$mostrar['Id'].'">MODIFICAR</a>'.'</td>
				<td class="Lista" >'.'<a class="ME" onclick="return ConfirmarDelete()" href="../Eliminar/EliminarFinanciamiento.php?id='.$mostrar['Id'].'">ELIMINAR</a>'.'</td>
			</tr>
			';
		}
		$tabla.='</table>';
	} else {
			$tabla="NO SE ENCONTRARON COINCIDENCIAS";
		}

	echo $tabla;
?>