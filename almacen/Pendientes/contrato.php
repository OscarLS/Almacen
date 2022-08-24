<?php
session_start();
include_once('Conexion.php');
$id = $_SESSION['id'];
$nombre = $_SESSION['nombre'];
$apellido = $_SESSION['ap'];
if (!isset($id, $nombre, $apellido)) {
  header("location: login.php");
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>CONTRATO</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta charset="utf-8"> <!-- Caracter especial -->
  <link rel="stylesheet" href="estilos/styleContrato.css">
  <link rel="stylesheet" href="estilos/select2.css">
  <link rel="shortcut icon" href="Img/Almacen.png">
  <link rel="stylesheet" href="estilos/styleModal.css">

  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="Alert.js"></script>
  <script src="BuscarProducto.js"></script>
  <script src="js/select2.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#producto').select2();
      $('#financiamiento').select2();
      $('#partida').select2();
      $('#programa').select2();
      $('#unidad').select2();
      $('#proveedor').select2();
    });
  </script>

</head>

<body>
  <!-- Cuerpo -->
  <div class="contenedor">
    <header class="cabecera">
      <!-- Cabecera -->
      <h3>
        <?php
        if(isset($_GET["contrato"])){
          echo $_GET["contrato"];
        }
        
        ?>
      </h3>
    </header>
    <main class="cuerpoUp">
      <!-- Contenedor -->
      <form>
        <article class="alta-contrato">
          <table class="TablaP">
            <tr>
              <!-- Titulo (Contrato,Fecha,Financiamiento) -->
              <td class="lD"> Contrato: </td> <!-- Nombre -->
              <td class="lD"> Fecha: </td> <!-- Fecha -->
              <td class="lD"> Fuente de financiamiento: </td> <!-- Financiamiento -->
            </tr>
            <tr>
              <!-- Entrada (Contrato,Fecha,Financiamiento) -->
              <td class="celda"> <input type="text" class="input_1" name="contrato" id="contrato" placeholder="  Ingrese Contrato..." autocomplete="off"> </td> <!-- Contrato -->
              <td class="celda"> <input type="date" class="input_1" name="fecha" id="fecha"> </td> <!-- Fecha -->
              <td class="celda">
                <select class="input_1" name="financiamiento" id="financiamiento" autocomplete="off">
                  <!-- Financiamiento -->
                  <option value="----"> Seleccione </option>
                  <?php
                  include_once('Conexion.php');
                  $sql = "SELECT Nombre FROM financiamiento";
                  $result = mysqli_query($conn, $sql);
                  while ($mostrar = mysqli_fetch_array($result)) {
                    echo '<option value="' . $mostrar['Nombre'] . '">' . $mostrar['Nombre'] . '</option>';
                  }
                  ?>
                </select>
                <button type="button" class="BTA" id="btnFF">+</button>
              </td>
            </tr>
            <tr>
              <!-- Titulo (Partida,Programa,Unidad Aplicativa) -->
              <td class="lD"> Partida: </td> <!-- Partida -->
              <td class="lD"> Programa: </td> <!-- Programa -->
              <td class="lD"> Unidad Aplicativa: </td> <!-- Unidad Aplicativa -->
            </tr>
            <tr>
              <!-- Entrada (Partida,Programa,Unidad) -->
              <td class="celda">
                <select class="input_1" name="partida" id="partida" autocomplete="off">
                  <!-- Partida -->
                  <option value="----"> Seleccione </option>
                  <?php
                  include_once('Conexion.php');
                  $sql = "SELECT ClaveFederal FROM partida";
                  $result = mysqli_query($conn, $sql);
                  while ($mostrar = mysqli_fetch_array($result)) {
                    echo '<option value="' . $mostrar['ClaveFederal'] . '">' . $mostrar['ClaveFederal'] . '</option>';
                  }
                  ?>
                </select>
                <button type="button" class="BTA" id="btnPartida">+</button>
              </td>
              <td class="celda">
                <select class="input_1" name="programa" id="programa" autocomplete="off">
                  <!-- Programa -->
                  <option value="----"> Seleccione </option>
                  <?php
                  include_once('Conexion.php');
                  $sql = "SELECT Nombre FROM programa";
                  $result = mysqli_query($conn, $sql);
                  while ($mostrar = mysqli_fetch_array($result)) {
                    echo '<option value="' . $mostrar['Nombre'] . '">' . $mostrar['Nombre'] . '</option>';
                  }
                  ?>
                </select>
                <button type="button" class="BTA" id="btnPrograma">+</button>
              </td>
              <td class="celda">
                <select class="input_1" name="unidad" id="unidad" autocomplete="off">
                  <!-- Unidad -->
                  <option value="----"> Seleccione </option>
                  <?php
                  include_once('Conexion.php');
                  $sql = "SELECT Nombre FROM centro";
                  $result = mysqli_query($conn, $sql);
                  while ($mostrar = mysqli_fetch_array($result)) {
                    echo '<option value="' . $mostrar['Nombre'] . '">' . $mostrar['Nombre'] . '</option>';
                  }
                  ?>
                </select>
                <button type="button" class="BTA" id="btnUnidadA">+</button>
              </td>
            </tr>
            <tr>
              <!-- Titulo (Proveedor,Iva) -->
              <td class="lD"> Proveedor: </td> <!-- Proveedor -->
              <td class="lD"> Iva: </td> <!-- Iva -->
            </tr>
            <tr>
              <!-- Entrada (Proveedor,Iva) -->
              <td class="celda">
                <select class="input_1" name="proveedor" id="proveedor" autocomplete="off">
                  <!-- Proveedor -->
                  <option value="----"> Seleccione </option>
                  <?php
                  include_once('Conexion.php');
                  $sql = "SELECT Nombre FROM proveedor";
                  $result = mysqli_query($conn, $sql);
                  while ($mostrar = mysqli_fetch_array($result)) {
                    echo '<option value="' . $mostrar['Nombre'] . '">' . $mostrar['Nombre'] . '</option>';
                  }
                  ?>
                </select>
                <button type="button" class="BTA" id="btnProvedor">+</button>
              </td>
              <td class="celda"> <input type="text" class="input_2" name="iva" id="iva" placeholder="  Iva" autocomplete="off"> </td> <!-- Iva -->
            </tr>
          </table>
        </article>
        <article class="alta-contrato">
          <h2>Busqueda de articulos</h2>
          <table class="TablaP">
            <tr>
              <!-- Titulo (Articulo,Nombre,Unidad) -->
              <td class="lD"> Buscar Articulo: </td> <!-- Articulo -->
              <td class="lD"> Nombre: </td> <!-- Nombre -->
              <td class="lD"> Unidad: </td> <!-- Unidad -->
            </tr>
            <tr>
              <!-- Entrada (Articulo,Nombre,Unidad) -->
              <td class="celda" id="clave">
                <select class="input_1" name="producto" id="producto">
                  <!-- Articulo -->
                  <option value="----"> Seleccione </option>
                  <?php
                  include_once('Conexion.php');
                  $sql = "SELECT Id, Clave FROM producto";
                  $result = mysqli_query($conn, $sql);
                  while ($mostrar = mysqli_fetch_array($result)) {
                    echo '<option value="' . $mostrar['Id'] . '">' . $mostrar['Clave'] . '</option>';
                  }
                  ?>
                </select>
                <button type="button" class="BTA" id="btnProducto">+</button>
              </td>
              <td class="celda" id="product"> <input type="text" class="input_1_show" name="nombre" id="nombre"> </td> <!-- Nombre -->
              <td class="celda" id="unit"> <input type="text" class="input_1_show" name="tipounidad" id="tipounidad" readonly> </td> <!-- Unidad -->
            </tr>
            <tr>
              <!-- Titulo (Descripcion) -->
              <td colspan="3" class="lD"> Descripcion: </td> <!-- Descripcion -->
            </tr>
            <tr>
              <!-- Entrada (Descripcion) -->
              <td class="celda" id="explicacion" colspan="3"> <textarea name="descripcion" id="descripcion" class="input_3" readonly> </textarea> </td> <!-- Descripcion -->
            </tr>
            <tr>
              <!-- Titulo (Precio,Cantidad,Indice) -->
              <td class="lD"> Precio Unitario: </td> <!-- Precio -->
              <td class="lD"> Cantidad: </td> <!-- Cantidad -->
              <td class="lD"> Indice: </td> <!-- Indice -->
            </tr>
            <tr>
              <!-- Entrada (Precio,Cantidad,Indice) -->
              <td class="celda"> <input type="text" class="input_1" name="precio" id="precio" placeholder="  Ingrese Precio Unitario" autocomplete="off"> </td> <!-- Precio -->
              <td class="celda"> <input type="number" class="input_1" name="cantidad" id="cantidad" placeholder="  Ingrese Cantidad" autocomplete="off"> </td> <!-- Cantidad -->
              <td class="celda"> <input type="text" class="input_1" name="indice" id="indice" placeholder="  Ingrese Indice" autocomplete="off"> </td> <!-- Cantidad -->
            </tr>
          </table>
          <div class="botones">
            <button type="reset" class="BTG" id="boton" onclick="capturar();">Agregar</button>
            <a href="Proceso.php" class="BTG">Regresar</a>
          </div>
        </article>
      </form>
      <div class="CuerpoDown">
        <table class="alta-Articulo">
          <thead>
            <tr>
              <th>Clave</th>
              <th>Indice</th>
              <th>Nombre</th>
              <th>Descripcion</th>
              <th>Unidad</th>
              <th>P.U</th>
              <th>Cantidad</th>
              <th>Importe</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody id="show-datos">

          </tbody>
          <tfoot>
            <tr>
              <td class="show-total" colspan="3">
                <p class="sub-total">SUBTOTAL</p>
              </td>
              <td class="show-total" colspan="3">
                <p class="iva">IVA</p>
              </td>
              <td class="show-total" colspan="3">
                <p class="total">TOTAL</p>
              </td>
            </tr>
          </tfoot>
        </table>
      </div>

      <div class="botones">
        <button type="reset" class="BTG" id="boton" onclick="adquirir();">Adquirir</button>
        <form action="SubirCompra.php?valor=base" method="post">
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>

      <div class="modal-container" id="modal_container_Partida">
        <div class="modal">
          <div class="contenedor">
            <header class="cabecera">
              <!-- Cabecera -->
              <h3>Partida presupuestal</h3>
            </header>
            <main class="cuerpoUp">
              <!-- Contenedor -->
              <form action="subirPartidaModal.php?contrato=
                            <?php
                            echo $_GET["contrato"];
                            ?>
                            " method="post" name="Alta">
                <?php
                include('registroModal.php');
                ?>
              </form>
              </article>
            </main>
          </div>
          <button class="BTG" id="btnPartidaClose">Cancelar</button>
        </div>
      </div>

      <div class="modal-container" id="modal_container_FF">
        <div class="modal">
          <div class="contenedor">
            <header class="cabecera">
              <!-- Cabecera -->
              <h3>Financiamiento</h3>
            </header>
            <main class="cuerpoUp">
              <!-- Contenedor -->
              <form action="SubirFinanciamientoModal.php?contrato=
                            <?php
                            echo $_GET["contrato"];
                            ?>" method="post" name="Alta">
                <?php
                include('FinanciamientoModal.php');
                ?>
              </form>
              </article>
            </main>
          </div>
          <button class="BTG" id="btnFFClose">Cancelar</button>
        </div>
      </div>


      <div class="modal-container" id="modal_container_Programa">
        <div class="modal">
          <div class="contenedor">
            <header class="cabecera">
              <!-- Cabecera -->
              <h3>Programa</h3>
            </header>
            <main class="cuerpoUp">
              <!-- Contenedor -->
              <form action="SubirProgramaModal.php?contrato=
                            <?php
                            echo $_GET["contrato"];
                            ?>" method="post" name="Alta">
                <?php
                include('ProgramaModal.php');
                ?>
              </form>
              </article>
            </main>
          </div>
          <button class="BTG" id="btnProgramaClose">Cancelar</button>
        </div>
      </div>

      <div class="modal-container" id="modal_container_UnidadA">
        <div class="modal">
          <div class="contenedor">
            <header class="cabecera">
              <!-- Cabecera -->
              <h3>Centros</h3>
            </header>
            <main class="cuerpoUp">
              <!-- Contenedor -->
              <form action="SubirCentroModal.php?contrato=
                            <?php
                            echo $_GET["contrato"];
                            ?>" method="post" name="Alta">
                <?php
                include('CentroModal.php');
                ?>
              </form>
              </article>
            </main>
          </div>
          <button class="BTG" id="btnUnidadAClose">Cancelar</button>
        </div>
      </div>

      <div class="modal-container" id="modal_container_Provedor">
        <div class="modal">
          <div class="contenedor">
            <header class="cabecera">
              <!-- Cabecera -->
              <h3>Proveedor</h3>
            </header>
            <main class="cuerpoUp">
              <!-- Contenedor -->
              <form action="SubirProveedorModal.php?contrato=
                            <?php
                            echo $_GET["contrato"];
                            ?>" method="post" name="Alta">
                <?php
                include('ProvedorModal.php');
                ?>
              </form>
              </article>
            </main>
          </div>
          <button class="BTG" id="btnProvedorClose">Cancelar</button>
        </div>
      </div>

      <div class="modal-container" id="modal_container_Producto">
        <div class="modal">
          <div class="contenedor">
            <header class="cabecera">
              <!-- Cabecera -->
              <h3>Productos</h3>
              <div>
                <b> Mostrar N° de serie </b>
                <input type="checkbox" class="box" id="show" name="show" onclick="mostrar_ocultar()">
              </div>
            </header>
            <main class="cuerpoUp">
              <!-- Contenedor -->
              <form action="SubirProductoModal.php?contrato=
                            <?php
                            echo $_GET["contrato"];
                            ?>" method="post" name="Alta">
                <?php
                include('ProductoModal.php');
                ?>
              </form>
              </article>
            </main>
          </div>

          <button class="BTG" id="btnProductoClose">Cancelar</button>
        </div>
      </div>

      <div class="modal-container" id="modal_container_Unidad">
        <div class="modal">
          <div class="contenedor">
            <header class="cabecera">
              <!-- Cabecera -->
              <h3>Unidad</h3>
            </header>
            <main class="cuerpoUp">
              <!-- Contenedor -->
              <form action="SubirUnidadModal.php?contrato=
                            <?php
                            echo $_GET["contrato"];
                            ?>" method="post" name="Alta">
                <?php
                include('UnidadModal.php');
                ?>
              </form>
              </article>
            </main>
          </div>
          <button class="BTG" id="btnUnidadClose">Cancelar</button>
        </div>
      </div>

      <div class="modal-container" id="modal_container_Categoria">
        <div class="modal">
          <div class="contenedor">
            <header class="cabecera">
              <!-- Cabecera -->
              <h3>Categoria</h3>
            </header>
            <main class="cuerpoUp">
              <!-- Contenedor -->
              <form action="SubirCategoriaModal.php?contrato=
                            <?php
                            echo $_GET["contrato"];
                            ?>" method="post" name="Alta">
                <?php
                include('CategoriaModal.php');
                ?>
              </form>
              </article>
            </main>
          </div>
          <button class="BTG" id="btnCategoriaClose">Cancelar</button>
        </div>
      </div>
    </main>
  </div>
</body>

</html>

<script>
  function capturar() {
    function Datos(contrato, fecha, financiamiento, partida, programa, unidad, proveedor, iva,
      clave, nombre, tipo, descripcion, precio, cantidad, indice, importe) {
      this.contrato = contrato;
      this.fecha = fecha;
      this.financiamiento = financiamiento;
      this.partida = partida;
      this.programa = programa;
      this.unidad = unidad;
      this.proveedor = proveedor;
      this.iva = iva;
      this.clave = clave;
      this.nombre = nombre;
      this.tipo = tipo;
      this.descripcion = descripcion;
      this.precio = precio;
      this.cantidad = cantidad;
      this.indice = indice;
      this.importe = importe;
    }
    var contratoCaptura = document.getElementById("contrato").value;
    var fechaCaptura = document.getElementById("fecha").value;
    var financiamientoCaptura = document.getElementById("financiamiento").value;
    var partidaCaptura = document.getElementById("partida").value;
    var programaCaptura = document.getElementById("programa").value;
    var unidadCaptura = document.getElementById("tipounidad").value;
    var proveedorCaptura = document.getElementById("proveedor").value;
    var ivaCaptura = document.getElementById("iva").value;
    var producto = document.getElementById("producto");
    var claveCaptura = producto.options[producto.selectedIndex].text;
    var nombreCaptura = document.getElementById("nombre").value;
    var tipoCaptura = document.getElementById("tipounidad").value;
    var descripcionCaptura = document.getElementById("descripcion").value;
    var precioCaptura = document.getElementById("precio").value;
    var cantidadCaptura = document.getElementById("cantidad").value;
    var importeCaptura = parseFloat(precioCaptura * cantidadCaptura);
    var indiceCaptura = document.getElementById("indice").value;
    total = new Datos(contratoCaptura, fechaCaptura, financiamientoCaptura, partidaCaptura, programaCaptura,
      unidadCaptura, proveedorCaptura, ivaCaptura, claveCaptura, nombreCaptura, tipoCaptura, descripcionCaptura, precioCaptura,
      cantidadCaptura, indiceCaptura, importeCaptura);
    agregar();

  }
  var base = [];

  function agregar2() {
    
    i = base.indexOf(total);
    document.getElementById("show-datos").innerHTML += '<tr><td class="show">' + total.clave + '</td><td class="show">' +
      total.indice + '</td><td class="show">' + total.nombre + '</td><td class="show">' + total.descripcion + '</td><td class="show">' + total.unidad + '</td><td class="show">' +
      total.precio + '</td><td class="show">' + total.cantidad + '</td><td class="show">' + total.importe + '</td><td class="show"><img class="eliminar" src="img/eliminar.png" onclick="eliminar(' + i + ');"></td><tr>'
  }

  function agregar() {
    
    base.push(total);
    i = base.indexOf(total);
    document.getElementById("show-datos").innerHTML += '<tr><td class="show">' + total.clave + '</td><td class="show">' +
      total.indice + '</td><td class="show">' + total.nombre + '</td><td class="show">' + total.descripcion + '</td><td class="show">' + total.unidad + '</td><td class="show">' +
      total.precio + '</td><td class="show">' + total.cantidad + '</td><td class="show">' + total.importe + '</td><td class="show"><img class="eliminar" src="img/eliminar.png" onclick="eliminar(' + i + ');"></td><tr>'
  }

  function eliminar(i) {
    base.splice(i, 1);
    document.getElementById("show-datos").innerHTML = '';
    for (var j = 0; j < base.length; j++) {
      document.getElementById("show-datos").innerHTML += '<tr><td class="show">' + base[j].clave + '</td><td class="show">' +
        base[j].indice + '</td><td class="show">' + base[j].nombre + '</td><td class="show">' + base[j].descripcion + '</td><td class="show">' + base[j].unidad + '</td><td class="show">' +
        base[j].precio + '</td><td class="show">' + base[j].cantidad + '</td><td class="show">' + base[j].importe + '</td><td class="show"><img class="eliminar" src="img/eliminar.png" onclick="eliminar(' + j + ');"></td><tr>'
      console.log(base[j].clave);
    }

  }

  function adquirir() {
    
    var opcion = confirm("¿Esta seguro?");
    if (opcion == true) {
      window.location.href = window.location.href+"&cadena="+base;
	} 

    
  }
</script>
<?php
  if(isset($_GET["cadena"])){
    $list = $_GET["cadena"];
    echo $list;
  }
?>

<script src="controlModal.js"></script>