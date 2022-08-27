$(obtener_registros());

function obtener_registros(salida)
{
	$.ajax({
		url : '../Busqueda/BusquedaSalida.php',
		type : 'POST',
		dataType : 'html',
		data : { salida: salida },
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