<?php
    session_start();
    include_once('../Conexion/Conexion.php');
    $id = $_SESSION['id'];
    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['ap'];
    if(!isset($id,$nombre,$apellido)){
        header("location: login.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PROCESO</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta charset="utf-8"> <!-- Caracter especial -->
        <link rel="stylesheet" href="../Proceso/Css/styleProceso.css"> 
        <link rel="shortcut icon" href="../Proceso/Img/Proceso.png">
    </head>
    <body> <!-- Cuerpo -->
        <div class="contenedor"> 
            <main class="cuerpo"> <!-- Contenedor -->
                <div class="contratos">
                    <h2>ALTA CONTRATOS</h2>
                    <div class="contract">
                        <article onclick=" location.href='../Proceso/Contrato/adjudicacion.php'; " > <!-- Adjudicacion -->
                            <img src="../Proceso/Img/adjudicacion.png" alt="adjudicacion">
                            <p class="BTN_S">ADJUDICACION</p>
                        </article>
                        <article onclick=" location.href='../Proceso/Contrato/compraDirecta.php'; " > <!-- Compra directa -->
                            <img src="../Proceso/Img/compra.png" alt="compra directa">
                            <p class="BTN_S">COMPRA DIRECTA</p>
                        </article>
                        <article onclick=" location.href='contrato.php?contrato=Donacion'; " > <!-- Donacion -->
                            <img src="../Proceso/Img/donacion.png" alt="donacion">
                            <p class="BTN_S">DONACION</p>
                        </article>
                        <article onclick=" location.href='contrato.php?contrato=Licitacion Publica Internacional'; " > <!-- Licitacion publica -->
                            <img src="../Proceso/Img/licitacionpublica.png" alt="licitacion publica">
                            <p class="BTN_S">LICITACION PUB.</p>
                        </article>
                        <article onclick=" location.href='contrato.php?contrato=Pedido'; " > <!-- Pedido -->
                            <img src="../Proceso/Img/pedido.png" alt="pedido">
                            <p class="BTN_S">PEDIDO</p>
                        </article>
                    </div>
                </div>
                <div class="remision">
                    <h2>REMISION</h2>
                    <div class="remission">
                        <article onclick=" location.href='Remision/Adjudicacion/RemisionAdjudicacion.php'; " > <!-- Adjudicacion -->
                            <img src="../Proceso/Img/adjudicacion.png" alt="adjudicacion">
                            <p class="BTN_S">ADJUDICACION</p>
                        </article>
                        <article onclick=" location.href='RemisionCompra.php'; " > <!-- Compra directa -->
                            <img src="../Proceso/Img/compra.png" alt="compra directa">
                            <p class="BTN_S">COMPRA DIRECTA</p>
                        </article>
                        <article onclick=" location.href='RemisionDonacion.php'; " > <!-- Donacion -->
                            <img src="../Proceso/Img/donacion.png" alt="donacion">
                            <p class="BTN_S">DONACION</p>
                        </article>
                        <article onclick=" location.href='RemisionLicitacion.php'; " > <!-- Licitacion publica -->
                            <img src="../Proceso/Img/licitacionpublica.png" alt="licitacion publica">
                            <p class="BTN_S">LICITACION PUB.</p>
                        </article>
                        <article onclick=" location.href='RemisionPedido.php'; " > <!-- Pedido -->
                            <img src="../Proceso/Img/pedido.png" alt="pedido">
                            <p class="BTN_S">PEDIDO</p>
                        </article>
                    </div>
                </div>
                <div class="salida">
                    <h2>SALIDA</h2>
                    <div class="exit">
                        <article onclick=" location.href='Salida.php'; " > <!-- Adjudicacion -->
                            <img src="Img/adjudicacion.png" alt="adjudicacion">
                            <p class="BTN_S">GENERAL</p>
                        </article>
                    </div>
                </div>
            </main>
            <footer class="pie"> <!-- Pie de página --> 
                <a href="../Inicio.php" class="BTMC">MENÚ PRINCIPAL</a>   
                <a href="../Conexion/Cerrar.php" class="BTMC">CERRAR SESIÓN</a>
            </footer>
        </div>
    </body>
</html>