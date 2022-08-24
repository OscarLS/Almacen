$(obtener_registros());

function obtener_registros(producto)
{
	$.ajax({
		url : '../Seccion/Busqueda/BusquedaProducto.php',
		type : 'POST',
		dataType : 'html',
		data : { producto: producto },
		})

	.done(function(resultado){
		$("#tabla_resultado").html(resultado);
	})
}

$(document).on('keyup', '#busqueda', function()
{
	var valorBusqueda=$(this).val();
	if (valorBusqueda!="")
	{
		obtener_registros(valorBusqueda);
	}
	else
		{
			obtener_registros();
		}
});