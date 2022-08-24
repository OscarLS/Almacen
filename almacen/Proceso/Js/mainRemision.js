var listRemisiom = [];

$(document).ready(function () {
  ///////////////// Buscar contrato /////////////////
  $(function () {
    $("#idcontrato").on("change", function () {
      var contrato = $("#idcontrato").val();
      var doct = $("#idDoct").val();
      $.ajax({
        url: "../../Ver/buscarContrato.php",
        type: "POST",
        data: { contrato: contrato, doct: doct },
        success: function (data) {
          var finanzas = data.split(",")[0];
          var partida = data.split(",")[1];
          var programa = data.split(",")[2];
          var proveedor = data.split(",")[3];
          var iva = data.split(",")[4];
          var OptionPro = data.split(",")[5];

          $("#financiamiento").html(finanzas);
          $("#partida").html(partida);
          $("#programa").html(programa);
          $("#proveedor").html(proveedor);
          $("#iva2 input").remove();
          $("#iva2").html(iva);
          $("#producto").html(OptionPro);
        },
      });
      return false;
    });
  });

  ///////////////// Buscar datos articulo /////////////////
  $(function () {
    $("#producto").on("change", function () {
      //alert($("#producto").val());
      var id = $("#producto").val();
      var doct = $("#idDoct").val();
      $.ajax({
        url: "../../Ver/verProductoContrato.php",
        type: "POST",
        data: { id: id, doct: doct },
        success: function (data) {
          var Nombre = data.split(",")[0];
          var Unidad = data.split(",")[1];
          var Descripcion = data.split(",")[2];
          var Precio = data.split(",")[3];
          var Importe = data.split(",")[4];
          var Existencia = data.split(",")[5];
          $("#product input").remove();
          $("#product").append(Nombre);
          $("#unit input").remove();
          $("#unit").append(Unidad);
          $("#explicacion textarea").remove();
          $("#explicacion").append(Descripcion);
          $("#tdPrecio input").remove();
          $("#tdPrecio").append(Precio);
          $("#tdIndice input").remove();
          $("#tdIndice").append(Importe);
          $("#tdExistencia input").remove();
          $("#tdExistencia").append(Existencia);
        },
      });
      return false;
    });
  });

  ///////////////// almacenar remision /////////////////
  function addRemision(
    Doct,
    Contrato,
    Pedido,
    Finaciamiento,
    Partida,
    Programa,
    Licitacion,
    Proveedor,
    Fecha,
    Caducidad,
    Clave,
    Nombre,
    Descripcion,
    Unidad,
    Precio,
    Cantidad,
    Iva,
    Importe,
    Existencia,
    Lote,
    id
  ) {
    this.Doct = Doct;
    this.Contrato = Contrato;
    this.Pedido = Pedido;
    this.Finaciamiento = Finaciamiento;
    this.Partida = Partida;
    this.Programa = Programa;
    this.Licitacion = Licitacion;
    this.Proveedor = Proveedor;
    this.Fecha = Fecha;
    this.Caducidad = Caducidad;
    this.Clave = Clave;
    this.Nombre = Nombre;
    this.Descripcion = Descripcion;
    this.Unidad = Unidad;
    this.Precio = Precio;
    this.Cantidad = Cantidad;
    this.Iva = Iva;
    this.Importe = Importe;
    this.Existencia = Existencia;
    this.Lote = Lote;
    this.id =id;
  }

  $("#btnAgregarRemision").click(function (e) {
    if (
      $("#idcontrato").val() != "" &&
      $("#nombre").val() != "" &&
      $("#idfecha").val() != "" &&
      $("#caducidad").val() != "" &&
      $("#cantidad").val() != "" &&
      $("#lote").val() != ""
    ) {
      if (
        parseInt($("#cantidad").val(), 10) <=
        parseInt($("#existencia").val(), 10)
      ) {
        var Doct = $("#idDoct").val();
        var Contrato = $("#idcontrato").val();
        var Fecha = $("#idfecha").val();
        var Caducidad = $("#caducidad").val();
        var Cantidad = $("#cantidad").val();
        var Existencia = $("#cantidad").val();
        var Lote = $("#lote").val();
        
      var id = $("#producto").val();
        $.ajax({
          url: "../../Ver/buscarContartoRemision.php",
          type: "POST",
          data: { Contrato: Contrato, Doct: Doct },
          success: function (data) {
            var Pedido = data.split(",")[0];
            var Finaciamiento = data.split(",")[1];
            var Partida = data.split(",")[2];
            var Programa = data.split(",")[3];
            var Licitacion = data.split(",")[4];
            var Proveedor = data.split(",")[5];
            var Clave = data.split(",")[6];
            var Nombre = data.split(",")[7];
            var Descripcion = data.split(",")[8];
            var Unidad = data.split(",")[9];
            var Precio = data.split(",")[10];
            var Iva = data.split(",")[11];
            var Importe = data.split(",")[12];

            dato = new addRemision(
              Doct,
              Contrato,
              Pedido,
              Finaciamiento,
              Partida,
              Programa,
              Licitacion,
              Proveedor,
              Fecha,
              Caducidad,
              Clave,
              Nombre,
              Descripcion,
              Unidad,
              Precio,
              Cantidad,
              Iva,
              Importe,
              Existencia,
              Lote,
              id
            );

            listRemisiom.push(dato);
            var i = listRemisiom.indexOf(dato);

            var x =
              "<tr id='" +
              i +
              "'>" +
              "<td class='show'>" +
              Contrato +
              "</td>" +
              "<td class='show'>" +
              Fecha +
              "</td>" +
              "<td class='show'>" +
              Caducidad +
              "</td>" +
              "<td class='show'>" +
              dato.Clave +
              "</td>" +
              "<td class='show'>" +
              dato.Nombre +
              "</td>" +
              "<td class='show'>" +
              dato.Unidad +
              "</td>" +
              "<td class='show'>" +
              dato.Precio +
              "</td>" +
              "<td class='show'>" +
              Cantidad +
              "</td>" +
              "<td class='show'>" +
              Existencia +
              "</td>" +
              "<td class='show'><img class='eliminar' src='../../../Img/eliminar.png' onclick='eliminar(" +
              i +
              ");'></td>" +
              "</tr>";
            $("#show-datos").append(x);
          },
        });
        return false;
      } else {
        alert("Cantidad insuficiente");
      }
    } else {
      alert("Los datos estan vacios");
    }

    
  });

  $("#btnTerminar").click(function (e) {
    var reply = confirm("¿Seguro que desea guardar?");
    if (reply == true) {
      for (var x = 0; x < listRemisiom.length; x++) {


      
      var Doct = listRemisiom[x].Doct ;
      var Contrato = listRemisiom[x].Contrato ;
      var Pedido = listRemisiom[x].Pedido ;
      var Finaciamiento = listRemisiom[x].Finaciamiento ;
      var Partida = listRemisiom[x].Partida ;
      var Programa = listRemisiom[x].Programa ;
      var Licitacion = listRemisiom[x].Licitacion ;
      var Proveedor = listRemisiom[x].Proveedor ;
      var Fecha = listRemisiom[x].Fecha ;
      var Caducidad = listRemisiom[x].Caducidad ;
      var Clave = listRemisiom[x].Clave ;
      var Nombre = listRemisiom[x].Nombre ;
      var Descripcion = listRemisiom[x].Descripcion;
      var Unidad = listRemisiom[x].Unidad ;
      var Precio= listRemisiom[x]. Precio;
      var Cantidad = listRemisiom[x].Cantidad ;
      var Iva = listRemisiom[x].Iva ;
      var Importe = listRemisiom[x].Importe ;
      var Existencia = listRemisiom[x].Existencia ;
      var Lote = listRemisiom[x].Lote;
      var id = listRemisiom[x].id


        $.ajax({
          url: "../../Alta/subirRemision.php",
          type: "POST",
          cache: false,
          data: {
            Doct : Doct ,Contrato : Contrato ,Pedido : Pedido ,Finaciamiento : Finaciamiento ,Partida : Partida ,Programa : Programa ,Licitacion : Licitacion ,Proveedor : Proveedor ,Fecha : Fecha ,Caducidad : Caducidad ,Clave : Clave ,Nombre : Nombre ,Descripcion : Descripcion ,Unidad : Unidad ,Precio : Precio ,Cantidad : Cantidad ,Iva : Iva ,Importe : Importe ,Existencia : Existencia ,Lote : Lote, id : id
          },
          success: function(data) {
            alert(data);
          },
        });










      }
    }
  });



});
function eliminar(i) {
  listRemisiom.splice(i, 1);
  $("#" + i).remove();
}
