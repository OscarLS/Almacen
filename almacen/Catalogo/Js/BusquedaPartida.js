$(obtener_registros());

function obtener_registros(partida)
{
	$.ajax({
		url : '../Seccion/Busqueda/BusquedaPartida.php',
		type : 'POST',
		dataType : 'html',
		data : { partida: partida },
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