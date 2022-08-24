<?php
session_start();
include_once('../../../Conexion/Conexion.php');
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
    <title>REMISION</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta charset="utf-8"> <!-- Caracter especial -->
    <link rel="stylesheet" href="../../Css/styleRemision.css">
    <link rel="stylesheet" href="../../Css/select2.css">
    <link rel="shortcut icon" href="../../../Img/Almacen.png">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script src="../../Js/Alert.js"></script>
    <!---
    <script src="../../Js/select2.js"></script>
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
    -->
</head>

<body>
    <!-- Cuerpo -->
    <div class="contenedor">
        <header class="cabecera">
            <!-- Cabecera -->
            <h3>Adjudicacion Directa</h3>
        </header>
        <main class="cuerpoUp">
            <!-- Contenedor -->
            <form action="SubirProveedor.php" method="post" name="Alta">
                <article class="alta-contrato">
                    <table class="TablaP">
                        <tr>
                            <td class="lD"> Contrato: </td> <!-- Nombre -->
                            <td class="lD"> Fecha: </td> <!-- Rfc -->
                            <td class="lD"> Fuente de financiamiento: </td> <!-- Rfc -->
                        </tr>
                        <tr>
                            <td> <input type="text" class="input_1" name="contrato" id="idcontrato" placeholder="  Ingrese Contrato..." autocomplete="off"> </td> <!-- Contrato -->
                            <td> <input type="date" class="input_1" name="fecha" id="idfecha" autocomplete="off"> </td> <!-- Fecha -->
                            <td>
                                <select class="input_1" name="financiamiento" id="financiamiento" autocomplete="off" disabled>
                                    <!-- Financiamiento -->
                                </select>
                                <!-- <button type="button" class="BTA" onclick="document.location='Financiamiento.php'">+</button> -->
                            </td>
                        </tr>
                        <tr>
                            <input type="text" id="idDoct" hidden value="adjudicacion">
                            <td class="lD"> Partida: </td> <!-- Partida -->
                            <td class="lD"> Programa: </td> <!-- Programa -->
                            <td class="lD"> Proveedor: </td> <!-- Proveedor -->
                        </tr>
                        <tr>
                            <td>
                                <select class="input_1" name="partida" id="partida" autocomplete="off" disabled>
                                    <!-- Partida -->
                                </select>
                                <!-- <button type="button" class="BTA" onclick="document.location='Partida.php'">+</button> -->
                            </td>
                            <td>
                                <select class="input_1" name="programa" id="programa" autocomplete="off" disabled>
                                    <!-- Programa -->
                                </select>
                                <!-- <button type="button" class="BTA" onclick="document.location='Programa.php'">+</button> -->
                            </td>
                            <td>
                                <select class="input_1" name="proveedor" id="proveedor" autocomplete="off" disabled>
                                    <!-- Proveedor -->
                                </select>
                                <!-- <button type="button" class="BTA" onclick="document.location='Proveedor.php'">+</button> -->
                            </td>
                        </tr>
                        <tr>
                            <td class="lD"> Iva: </td> <!-- Iva -->
                        </tr>
                        <tr>
                            <td id="iva2"> <input type="text" class="input_2" name="iva" id="iva" placeholder="  Iva" autocomplete="off" disabled> </td> <!-- Iva -->
                        </tr>
                    </table>
            </form>
            </article>
            <article class="alta-contrato">
                <h2>Busqueda de articulos</h2>
                <table class="TablaP">
                    <tr>
                        <td class="lD"> Buscar Articulo: </td> <!-- Clave -->
                        <td class="lD"> Nombre: </td> <!-- Unidad -->
                        <td class="lD"> Unidad: </td> <!-- Nombre -->
                    </tr>
                    <tr>
                        <td>
                            <!-- Inicio -->
                            <select class="input_1" name="producto" id="producto">
                                <!-- Clave -->
                            </select>
                            <!-- <button type="button" class="BTA" onclick="document.location='Producto.php'">+</button> -->
                        </td>
                        <td id="product"> <input type="text" class="input_1_show" name="nombre" id="nombre" readonly> </td> <!-- Nombre -->
                        <td id="unit"> <input type="text" class="input_1_show" name="unidad" id="unidad" readonly> </td> <!-- Unidad -->
                    </tr>
                    <tr>
                        <td colspan="3" class="lD"> Descripcion: </td> <!-- Descripcion -->
                    </tr>
                    <tr>
                        <td id="explicacion" colspan="3"> <textarea name="descripcion" id="descripcion" class="input_3" readonly> </textarea> </td> <!-- Descripcion -->
                    </tr>
                    <tr>
                        <td class="lD"> Precio: </td> <!-- Categoria -->
                        <td class="lD"> Indice: </td> <!-- Categoria -->
                        <td class="lD"> Existencia: </td> <!-- Categoria -->
                    </tr>
                    <tr>
                        <td id="tdPrecio"> <input type="text" class="input_1_show" name="precio" id="precio" readonly> </td> <!-- Precio -->
                        <td id="tdIndice"> <input type="text" class="input_1_show" name="indice" id="indice" readonly> </td> <!-- Indice -->
                        <td id="tdExistencia"> <input type="text" class="input_1_show" name="existencia" id="existencia" readonly> </td> <!-- Existencia -->
                    </tr>
                    <tr>
                        <td class="lD"> Cantidad: </td> <!-- Cantidad -->
                        <td class="lD"> Lote: </td> <!-- Lote -->
                        <td class="lD"> Fecha de Caducidad: </td> <!-- Lote -->
                    </tr>
                    <tr>
                        <td> <input type="text" class="input_1" name="cantidad" id="cantidad" placeholder="  Ingrese Cantidad" autocomplete="off"> </td> <!-- Cantidad -->
                        <td> <input type="text" class="input_1" name="lote" id="lote" placeholder="  Ingrese Lote" autocomplete="off"> </td> <!-- Cantidad -->
                        <td> <input type="date" class="input_1" name="caducidad" id="caducidad" autocomplete="off"> </td> <!-- Caducidad -->
                    </tr>
                    </tr>
                </table>
                <div class="botones">
                    <input class="BTG" type="submit" id="btnAgregarRemision" value="Agregar">
                    <a href="../../Proceso.php" class="BTG">Regresar</a>
                </div>

                <div class="CuerpoDown">
                    <section id="tabla_resultado">

                        <!-- Aqui se muestra la tabla -->
                        <div class="CuerpoDown">
                            <table class="alta-Articulo">
                                <thead>
                                    <tr>
                                        <th>Contrato</th>
                                        <th>Fecha</th>
                                        <th>Caducidad</th>
                                        <th>Clave</th>
                                        <th>Nombre</th>
                                        <th>Unidad</th>
                                        <th>Precio</th>
                                        <th>Cantidad</th>
                                        <th>Existencia</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="show-datos">
                                </tbody>
                            </table>
                        </div>

                        <div class="botones">
                            <button type="reset" class="BTT" id="btnTerminar">Terminar</button>
                        </div>
                    </section>
                </div>
            </article>
        </main>
    </div>
</body>

</html>
<script src="../../Js/mainRemision.js"></script>