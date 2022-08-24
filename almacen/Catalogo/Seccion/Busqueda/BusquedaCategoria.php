<?php 

	include_once('../../../Conexion/Conexion.php');

	$tabla="";
	$query="SELECT * FROM categoria ORDER BY Id";

	if(isset($_POST['categoria']))
	{
		$q=$conn->real_escape_string($_POST['categoria']);
		$query="SELECT * FROM categoria  WHERE Categoria LIKE '%".$q."%' ";
	}

	$buscar=$conn->query($query);
	if ($buscar->num_rows > 0){
		$tabla.= 
		'<table class="Tabla">
		<tr>
			<td class="titulo" colspan="3"> Lista de categorias </td>
		</tr>
		<tr>
			<th> Categoria </th>
			<th> Modificar </th>
			<th> Eliminar </th>
		</tr>';

		while($mostrar= $buscar->fetch_assoc())
		{
			$tabla.=
			'<tr>
				<td class="Lista" >'.$mostrar['Categoria'].'</td>
				<td class="Lista" >'.'<a class="ME" href="../Modificar/ModificarCategoria.php?id='.$mostrar['Id'].'">MODIFICAR</a>'.'</td>
				<td class="Lista" >'.'<a class="ME" onclick="return ConfirmarDelete()" href="../Eliminar/EliminarCategoria.php?id='.$mostrar['Id'].'">ELIMINAR</a>'.'</td>
			</tr>
			';
		}
		$tabla.='</table>';
	} else {
			$tabla="NO SE ENCONTRARON COINCIDENCIAS";
		}

	echo $tabla;
?>