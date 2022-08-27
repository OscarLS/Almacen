$(obtener_registros());

function obtener_registros(remision)
{
	$.ajax({
		url : '../Busqueda/BusquedaRemision.php',
		type : 'POST',
		dataType : 'html',
		data : { remision: remision },
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