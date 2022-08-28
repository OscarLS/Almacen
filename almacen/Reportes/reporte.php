<?php
  ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reporte</title>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <!--Boostrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>
  <header>
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-7 text-center">
          <p></p>
          <p></p>
          <div>
            <H5><strong>SERVICIOS DE SALUD DE OAXACA</strong></H5>
          </div>
          <div>
            <H5><strong>SUBDIRECCIÓN GENERAL DE ADMINISTRACIÓN Y FINANZAS</strong></H5>
          </div>
        </div>
        <div class="col-md-6 text-center">
          <H6><strong>UNIDAD DE RECURSOS MATERIALES Y DE SERVICIOS GENERALES
              DEPARTAMENTO DE ALMACENAJE Y DISTRIBUCIÓN</strong></H6>
        </div>
      </div>
    </div>
    </div>
  </header>
  <section>
    <article>
      <div class="container-fluid">
        <div class="row ">
          <div class="col-md">
            <div><strong>CONTRATO</strong></div>
          </div>
          <div class="col-md text-end">
            <div><strong id="idDoct">CONTRATO</strong></div>
          </div>
        </div>
        <p></p>
        <p></p>
        <div class="row ">
          <div class="col-md-8">
            <div>PROGRAMA :<strong id="idDoct"></strong></div>
            <div>PARTIDA :<strong id="idDoct"></strong></div>
            <div>FUENTE :<strong id="idDoct"></strong></div>
            <div>PROVEEDOR :<strong id="idDoct"></strong></div>
          </div>
          <div class="col-md-4 text-end">
            <div>FECHA DE ENTREGA :<strong id="idDoct"></strong></div>
            <div>PEDIDO :<strong id="idDoct"></strong></div>
          </div>
        </div>
        <div class="row ">
          <div class="col">
            <table class="table">
              <thead>
                <tr>
                  <th>Clave</th>
                  <th>Indice</th>
                  <th>Producto</th>
                  <th>Unidad</th>
                  <th>Cantidad</th>
                  <th>Existencia</th>
                  <th>P.U</th>
                  <th>Importe</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row"></td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row justify-content-end text-end">
          <div class="col-md-1">
            <div>SUBTOTAL:<strong id="idDoct"></strong></div>
            <div>IVA:<strong id="idDoct"></strong></div>
            <div>TOTAL:<strong id="idDoct"></strong></div>
          </div>
          <div class="col-md-1">
            <div><strong id="idDoct">$ </strong></div>
            <div><strong id="idDoct">$ </strong></div>
            <div><strong id="idDoct">$ </strong></div>
          </div>
        </div>
      </div>
    </article>
  </section>
</body>

</html>
<?php
  $html = ob_get_clean();
  //echo $html;
  require_once '../library/dompdf/autoload.inc.php';
  use Dompdf\Dompdf;
  $dompdf = new Dompdf();

  $options = $dompdf->getOptions();
  $options->set(array('isRemoteEnabled'=>true));
  $dompdf->setOptions($options);

  $dompdf->loadHtml($html);

  $dompdf->setPaper("letter");

  $dompdf->render();

  $dompdf->stream("Reporte_.pdf",array("Attachment"=>false));

?>