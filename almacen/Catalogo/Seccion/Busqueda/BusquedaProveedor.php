<?php 

	include_once('../../../Conexion/Conexion.php');

	$tabla="";
	$query="SELECT * FROM proveedor ORDER BY Id";

	if(isset($_POST['proveedor']))
	{
		$q=$conn->real_escape_string($_POST['proveedor']);
		$query="SELECT * FROM proveedor WHERE 
			Nombre LIKE '%".$q."%' OR
			Rfc LIKE '%".$q."%' OR
			Telefono LIKE '%".$q."%' OR
			Correo LIKE '%".$q."%' OR
			Direccion LIKE '%".$q."%'";
	}

	$buscar=$conn->query($query);
	if ($buscar->num_rows > 0){
		$tabla.= 
		'<table class="Tabla">
		<tr>
			<td class="titulo" colspan="7"> Lista de proveedores </td>
		</tr>
		<tr>
			<th> Nombre </th>
			<th> RFC </th>
			<th> Telefono </th>
			<th> Correo </th>
			<th> Direccion </th>
			<th> Modificar </th>
			<th> Eliminar </th>
		</tr>';

		while($mostrar= $buscar->fetch_assoc())
		{
			$tabla.=
			'<tr>
				<td class="Lista" >'.$mostrar['Nombre'].'</td>
				<td class="Lista" >'.$mostrar['Rfc'].'</td>
				<td class="Lista" >'.$mostrar['Telefono'].'</td>
				<td class="Lista" >'.$mostrar['Correo'].'</td>
				<td class="Lista" >'.$mostrar['Direccion'].'</td>
				<td class="Lista" >'.'<a class="ME" href="../Modificar/ModificarProveedor.php?id='.$mostrar['Id'].'">MODIFICAR</a>'.'</td>
				<td class="Lista" >'.'<a class="ME" onclick="return ConfirmarDelete()" href="../Eliminar/EliminarProveedor.php?id='.$mostrar['Id'].'">ELIMINAR</a>'.'</td>
			</tr>
			';
		}
		$tabla.='</table>';
	} else {
			$tabla="NO SE ENCONTRARON COINCIDENCIAS";
		}

	echo $tabla;
?>