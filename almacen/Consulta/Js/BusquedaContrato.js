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

function eliminar(id)
{
	$.ajax({
	url: "../Busqueda/BuscarArticuloEliminar.php",
		type: "POST",
		data: {id :  id},
		success: function (data) {
			$("#contenedorE").html(data);
		}
	});
	

}


function ver(id)
{
	$.ajax({
		url: "../Busqueda/BuscarArticulos.php",
		type: "POST",
		data: {id :  id},
		success: function (data) {
			$("#contenedor").html(data);
		}
	});
}


function mostrar(){
	const modal_containerE= document.getElementById('modal_containerE');
	const modal_container= document.getElementById('modal_container');

  modal_container.classList.remove("show");

  modal_containerE.classList.remove("show");


}


function eliminarOne(id)
{
	var reply = confirm("¿Seguro que desea eliminar?");
    if (reply == true) {
			$.ajax({
				url: "../Eliminar/EliminarContrato.php",
				type: "POST",
				data: {id :  id},
				success: function (data) {
					alert("Eliminado corectamente");
					window.location.reload();
				}
			});
		}
}


function descargar(id){
	$.ajax({
		url: "../Busqueda/descargaReporte.php",
		type: "POST",
		data: {id :  id}
	});
}


function eliminarAll(id)
{
	var reply = confirm("¿Seguro que desea eliminar?");
    if (reply == true) {
			$.ajax({
				url: "../Eliminar/EliminarContratoAll.php",
				type: "POST",
				data: {id :  id},
				success: function (data) {
					alert("Eliminados corectamente");
					window.location.reload();
				}
			});
		}
}