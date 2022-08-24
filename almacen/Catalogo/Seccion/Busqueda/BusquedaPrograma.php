<?php 

	include_once('../../../Conexion/Conexion.php');

	$tabla="";
	$query="SELECT * FROM programa ORDER BY Id";

	if(isset($_POST['programa']))
	{
		$q=$conn->real_escape_string($_POST['programa']);
		$query="SELECT * FROM programa WHERE Nombre LIKE '%".$q."%' ";
	}

	$buscar=$conn->query($query);
	if ($buscar->num_rows > 0){
		$tabla.= 
		'<table class="Tabla">
		<tr>
			<td class="titulo" colspan="3"> Lista de programas </td>
		</tr>
		<tr>
			<th> Nombre </th>
			<th> Modificar </th>
			<th> Eliminar </th>
		</tr>';

		while($mostrar= $buscar->fetch_assoc())
		{
			$tabla.=
			'<tr>
				<td class="Lista" >'.$mostrar['Nombre'].'</td>
				<td class="Lista" >'.'<a class="ME" href="../Modificar/ModificarPrograma.php?id='.$mostrar['Id'].'">MODIFICAR</a>'.'</td>
				<td class="Lista" >'.'<a class="ME" onclick="return ConfirmarDelete()" href="../Eliminar/EliminarPrograma.php?id='.$mostrar['Id'].'">ELIMINAR</a>'.'</td>
			</tr>
			';
		}
		$tabla.='</table>';
	} else {
			$tabla="NO SE ENCONTRARON COINCIDENCIAS";
		}

	echo $tabla;
?>