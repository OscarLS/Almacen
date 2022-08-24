$(obtener_registros());

function obtener_registros(licitacion)
{
	$.ajax({
		url : '../Seccion/Busqueda/BusquedaLicitacion.php',
		type : 'POST',
		dataType : 'html',
		data : { licitacion: licitacion },
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