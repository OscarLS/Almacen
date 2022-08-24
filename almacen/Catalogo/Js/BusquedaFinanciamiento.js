$(obtener_registros());

function obtener_registros(financiamiento)
{
	$.ajax({
		url : '../Seccion/Busqueda/BusquedaFinanciamiento.php',
		type : 'POST',
		dataType : 'html',
		data : { financiamiento: financiamiento },
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