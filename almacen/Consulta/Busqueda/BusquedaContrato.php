<?php 

	include_once('../../Conexion/Conexion.php');

	$tabla="";
	$query="SELECT * FROM contrato ORDER BY Id";

	if(isset($_POST['contrato']))
	{
		$q=$conn->real_escape_string($_POST['contrato']);
		$query="SELECT * FROM contrato WHERE Contrato LIKE '%".$q."%' OR Pedido LIKE '%".$q."%' ";
	}

	$buscar=$conn->query($query);
	if ($buscar->num_rows > 0){
		$tabla.= 
		'<table class="Tabla">
		<tr>
			<td class="titulo" colspan="12"> Contratos </td>
		</tr>
		<tr>
			<th> Doct </th>
            <th> Contrato </th>
            <th> Pedido	</th>
			<th> Fuente	</th>
			<th> Partida </th>
            <th> Programa </th>
            <th> Licitacion </th>
            <th> Proveedor </th>
            <th colspan="3"> Accion </th>
		</tr>';

		while($mostrar= $buscar->fetch_assoc())
		{
			$tabla.=
			'<tr>
                <td class="Lista" >'.$mostrar['Doct'].'</td>
                <td class="Lista" >'.$mostrar['Contrato'].'</td>
                <td class="Lista" >'.$mostrar['Pedido'].'</td>
                <td class="Lista" >'.$mostrar['Financiamiento'].'</td>
                <td class="Lista" >'.$mostrar['Partida'].'</td>
                <td class="Lista" >'.$mostrar['Programa'].'</td>
                <td class="Lista" >'.$mostrar['Licitacion'].'</td>
                <td class="Lista" >'.$mostrar['Proveedor'].'</td>
				<td class="Lista" >'.'<a class="ME" id="btnVer" onclick="ver('.$mostrar['Id'].');" >Ver</a>'.'</td>
				<td class="Lista" >'.'<a class="ME" href="ModificarProducto.php?id='.$mostrar['Id'].'">Modificar</a>'.'</td>
				<td class="Lista" >'.'<a class="ME" onclick="eliminar('.$mostrar['Id'].')">Eliminar</a>'.'</td>
			</tr>
			';
		}
		$tabla.='</table>';
	} else {
			$tabla="NO HAY COINCIDENCIAS";
		}

	echo $tabla;
?>