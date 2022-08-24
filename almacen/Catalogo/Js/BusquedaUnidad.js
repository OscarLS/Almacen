$(obtener_registros());

function obtener_registros(unidadaplicativa)
{
	$.ajax({
		url : '../Seccion/Busqueda/BusquedaUnidad.php',
		type : 'POST',
		dataType : 'html',
		data : { unidadaplicativa: unidadaplicativa },
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