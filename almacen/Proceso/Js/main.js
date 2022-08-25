$(document).ready(function () {
  ///////////////// Mostrar partrida ///////////////// 
  function loadOptionPartida() {
    $.ajax({
      url: "../Ver/verPartida.php",
      type: "POST",
      success: function (data) {
        $("#partida").html(data);
      },
    });
  }
  loadOptionPartida();
  ///////////////// Mostrar partida ///////////////// 
  function loadOptionFinanciamiento() {
    $.ajax({
      url: "../Ver/verFinanciamiento.php",
      type: "POST",
      success: function (data) {
        $("#financiamiento").html(data);
      },
    });
  }
  loadOptionFinanciamiento();
  ///////////////// Mostrar financiamiento ///////////////// 
  function loadOptionPrograma() {
    $.ajax({
      url: "../Ver/verPrograma.php",
      type: "POST",
      success: function (data) {
        $("#programa").html(data);
      },
    });
  }
  loadOptionPrograma();
  ///////////////// Mostrar programa ///////////////// 
  function loadOptionUnidad() {
    $.ajax({
      url: "../Ver/verUnidad.php",
      type: "POST",
      success: function (data) {
        $("#unidad").html(data);
      },
    });
  }
  loadOptionUnidad();
  ///////////////// Mostrar unidad ///////////////// 
  function loadOptionProveedor() {
    $.ajax({
      url: "../Ver/verProveedor.php",
      type: "POST",
      success: function (data) {
        $("#proveedor").html(data);
      },
    });
  }
  loadOptionProveedor();
  ///////////////// Mostrar proveedor ///////////////// 
  function loadOptionCategoria() {
    $.ajax({
      url: "../Ver/verCategoria.php",
      type: "POST",
      success: function (data) {
        $("#categoriaProd").html(data);
      },
    });
  }
  loadOptionCategoria();
  ///////////////// Mostrar categoria ///////////////// 
  function loadOptionUn() {
    $.ajax({
      url: "../Ver/verUni.php",
      type: "POST",
      success: function (data) {
        $("#unidadProd").html(data);
      },
    });
  }
  loadOptionUn();
  ///////////////// Mostrar producto ///////////////// 
  function loadOptionArticulo() {
    $.ajax({
      url: "../Ver/verArticulo.php",
      type: "POST",
      success: function (data) {
        $("#producto").html(data);
      },
    });
  }
  loadOptionArticulo();

  ///////////////// Mostrar producto ///////////////// 
  function loadListArticulo() {
    $.ajax({
      url: "../Ver/verListProductos.php",
      type: "POST",
      success: function (data) {
        $("#listArticulos").html(data);
      },
    });
  }
  loadListArticulo();

  /////////////////////////////////////////////////////////////////////////////////////////////////////////

   ///////////////// Buscar producto ///////////////// 
  $(function () {
    $("#producto").on("change", function () {
      var id = $("#producto").val();
      $.ajax({
        url: "../Ver/BuscarProducto.php",
        type: "POST",
        data: "id=" + id,
        success: function (data) {
          var nombre = data.split(",")[1];
          var unidad = data.split(",")[0];
          var descripcion = data.split(",")[2];
          $('#nombre').val(nombre);
          $("#unit input").remove();
          $("#unit").append(unidad);
          $("#explicacion textarea").remove();
          $("#explicacion").append(descripcion);
        },
      });
      return false;
    });
  });
  
  $(function () {
    $("#nombre").on("change", function () {
     
    var val=$('#nombre').val();
    var ejemplo = $('#listArticulos').find('option[value="'+val+'"]').data('ejemplo');
    //alert(ejemplo);
    $.ajax({
      url: "../Ver/BuscarProducto.php",
      type: "POST",
      data: "id=" + ejemplo,
      success: function (data) {
        var nombre = data.split(",")[1];
        var unidad = data.split(",")[0];
        var descripcion = data.split(",")[2];
        $("#unit input").remove();
        $("#unit").append(unidad);
        $("#explicacion textarea").remove();
        $("#explicacion").append(descripcion);
        $("#producto").val(ejemplo);
        $("#nombre").val(nombre);
        loadListArticulo();
      },
    });
    return false;
    });
  });
  /*$("#nombre").on('input',function(){
  });*/
  ///////////////// Subir partida ///////////////// 
  $("#btnRegistroPartida").click(function (e) {
    e.preventDefault();

    var clave = $("#claveP").val();
    var nombre = $("#nombreP").val();
    if (nombre !== "" && clave !== "") {
      $.ajax({
        url: "../Alta/subirPartidaModal.php",
        type: "POST",
        cache: false,
        data: { clave: clave, nombre: nombre },
        success: function (data) {
          const modal_container_Partida = document.getElementById(
            "modal_container_Partida"
          );
          modal_container_Partida.classList.remove("show");
          alert("Datos insertados correctamente");
          loadOptionPartida();
        },
      });
    } else {
      alert("Todos los campos son obligatorios");
    }
  });
  ///////////////// Subir financiamiento ///////////////// 
  $("#btnRegFinan").click(function (e) {
    e.preventDefault();

    var nombre = $("#nombreFF").val();
    var descripcion = $("#descripcionFF").val();

    if (nombre !== "") {
      $.ajax({
        url: "../Alta/SubirFinanciamientoModal.php",
        type: "POST",
        cache: false,
        data: { nombre: nombre, descripcion: descripcion },
        success: function (data) {
          const modal_container_FF =
            document.getElementById("modal_container_FF");
          modal_container_FF.classList.remove("show");
          alert("Datos insertados correctamente");
          loadOptionFinanciamiento();
        },
      });
    } else {
      alert("Todos los campos son obligatorios");
    }
  });
  ///////////////// Subir programa ///////////////// 
  $("#btnRegProg").click(function (e) {
    e.preventDefault();

    var nombre = $("#nombreProg").val();

    if (nombre !== "") {
      $.ajax({
        url: "../Alta/SubirProgramaModal.php",
        type: "POST",
        cache: false,
        data: { nombre: nombre },
        success: function (data) {
          const modal_container_Programa = document.getElementById(
            "modal_container_Programa"
          );
          modal_container_Programa.classList.remove("show");
          alert("Datos insertados correctamente");
          loadOptionPrograma();
        },
      });
    } else {
      alert("Todos los campos son obligatorios");
    }
  });
  ///////////////// Subir centro ///////////////// 
  $("#btnRegCentro").click(function (e) {
    e.preventDefault();

    var nombre = $("#nombreCentro").val();
    var direccion = $("#direccionCentro").val();
    var jurisdiccion = $("#jurisdiccion").val();

    if (nombre !== "" && direccion !== "" && jurisdiccion !== "") {
      $.ajax({
        url: "../Alta/SubirCentroModal.php",
        type: "POST",
        cache: false,
        data: {
          nombre: nombre,
          direccion: direccion,
          jurisdiccion: jurisdiccion,
        },
        success: function (data) {
          const modal_container_UnidadA = document.getElementById(
            "modal_container_UnidadA"
          );
          modal_container_UnidadA.classList.remove("show");
          alert("Datos insertados correctamente");
          loadOptionUnidad();
        },
      });
    } else {
      alert("Todos los campos son obligatorios");
    }
  });
  ///////////////// Subir proveedor ///////////////// 
  $("#btnRegProv").click(function (e) {
    e.preventDefault();

    var nombre = $("#nombreProv").val();
    var rfc = $("#rfcProv").val();
    var telefono = $("#telefonoProv").val();
    var correo = $("#correoProv").val();
    var direccion = $("#direccionProv").val();

    if (nombre !== "") {
      $.ajax({
        url: "../Alta/SubirProveedorModal.php",
        type: "POST",
        cache: false,
        data: {
          nombre: nombre,
          rfc: rfc,
          telefono: telefono,
          correo: correo,
          direccion: direccion,
        },
        success: function (data) {
          const modal_container_Provedor = document.getElementById(
            "modal_container_Provedor"
          );
          modal_container_Provedor.classList.remove("show");
          alert("Datos insertados correctamente");
          loadOptionProveedor();
        },
      });
    } else {
      alert("Todos los campos son obligatorios");
    }
  });
   ///////////////// Subir producto ///////////////// 
  $("#btnRegProd").click(function (e) {
    e.preventDefault();

    var clave = $("#claveProd").val();
    var unidad = $("#unidadProd").val();
    var nombre = $("#nombreProd").val();
    var descripcion = $("#descripcionProd").val();
    var categoria = $("#categoriaProd").val();
    var serie = $("#serieProd").val();
    
    if (clave !== "") {
      $.ajax({
        url: "../Alta/SubirProductoModal.php",
        type: "POST",
        cache: false,
        data: {
          clave: clave,
          unidad: unidad,
          nombre: nombre,
          descripcion: descripcion,
          categoria: categoria,
          serie: serie
        },
        success: function (data) {
          const modal_container_Producto = document.getElementById('modal_container_Producto')
          modal_container_Producto.classList.remove("show");
          alert("Datos insertados correctamente");
          loadOptionArticulo();
        },
      });
    } else {
      alert("Todos los campos son obligatorios");
    }
  });
   ///////////////// Subir unidad ///////////////// 
  $("#btnRegUniPro").click(function (e) {
    e.preventDefault();

    var unidad = $("#unidadPro2").val();
    
    if (unidad !== "") {
      $.ajax({
        url: "../Alta/SubirUnidadModal.php",
        type: "POST",
        cache: false,
        data: {
          unidad: unidad
        },
        success: function (data) {
          const modal_container_Unidad = document.getElementById('modal_container_Unidad');
          modal_container_Unidad.classList.remove("show");
          alert("Datos insertados correctamente");
          loadOptionUn();
        },
      });
    } else {
      alert("Todos los campos son obligatorios");
    }
  });
  ///////////////// Subir categoria ///////////////// 
  $("#btnRegCategoriaPro").click(function (e) {
    e.preventDefault();

    var categoria = $("#categoriaProd2").val();
    
    if (categoria !== "") {
      $.ajax({
        url:  "../Alta/SubirCategoriaModal.php",
        type: "POST",
        cache: false,
        data: {
          categoria: categoria
        },
        success: function (data) {
          const modal_container_Categoria = document.getElementById('modal_container_Categoria');
          modal_container_Categoria.classList.remove("show");
          alert("Datos insertados correctamente");
          loadOptionCategoria();
        },
      });
    } else {
      alert("Todos los campos son obligatorios");
    }
  });


});
