<?php 

include_once('../../../Conexion/Conexion.php');

	$tabla="";
	$query="SELECT * FROM licitacion ORDER BY Id";

	if(isset($_POST['licitacion']))
	{
		$q=$conn->real_escape_string($_POST['licitacion']);
		$query="SELECT * FROM licitacion WHERE Licitacion LIKE '%".$q."%' ";
	}

	$buscar=$conn->query($query);
	if ($buscar->num_rows > 0){
		$tabla.= 
		'<table class="Tabla">
		<tr>
			<td class="titulo" colspan="3"> Lista de licitaciones </td>
		</tr>
		<tr>
            <th> Licitacion </th>
			<th> Modificar </th>
			<th> Eliminar </th>
		</tr>';

		while($mostrar= $buscar->fetch_assoc())
		{
			$tabla.=
			'<tr>
                <td class="Lista" >'.$mostrar['Licitacion'].'</td>
				<td class="Lista" >'.'<a class="ME" href="../Modificar/ModificarLicitacion.php?id='.$mostrar['Id'].'">MODIFICAR</a>'.'</td>
				<td class="Lista" >'.'<a class="ME" onclick="return ConfirmarDelete()" href="../Eliminar/EliminarLicitacion.php?id='.$mostrar['Id'].'">ELIMINAR</a>'.'</td>
			</tr>
			';
		}
		$tabla.='</table>';
	} else {
			$tabla="NO SE ENCONTRARON COINCIDENCIAS";
		}

	echo $tabla;
?>