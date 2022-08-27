$(obtener_registros());

function obtener_registros(contrato)
{
	
	$.ajax({
		url : '../Busqueda/BusquedaContrato.php',
		type : 'POST',
		dataType : 'html',
		data : { contrato: contrato },
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

function ver(id)
{
	$.ajax({
		url: "../Busqueda/BuscarArticulos.php",
		type: "POST",
		data: {id :  id},
		success: function (data) {
			$("#contenedor").html(data);
			const modal_container= document.getElementById('modal_container');
			modal_container.classList.add('show')
		},
	});
}

