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
        <title>CATALOGO</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta charset="utf-8"> <!-- Caracter especial -->
        <link rel="stylesheet" href="../Catalogo/Css/styleCatalogo.css"> 
        <link rel="shortcut icon" href="../Catalogo/Img/catalogo.png">
    </head>
    <body> <!-- Cuerpo -->
        <div class="contenedor"> 
            <main class="cuerpo"> <!-- Contenedor -->
                <article onclick=" location.href='../Catalogo/Seccion/Producto.php'; " > <!-- Producto -->
                    <img src="../Catalogo/Img/producto.png" alt="catalogo">
                    <p class="BTN_S">PRODUCTOS</p>
                </article>
                <article onclick=" location.href='../Catalogo/Seccion/Proveedor.php'; " > <!-- Proveedor -->
                    <img src="../Catalogo/Img/proveedor.png" alt="proceso">
                    <p class="BTN_S">PROVEEDOR</p>
                </article>
                <article onclick=" location.href='../Catalogo/Seccion/Partida.php'; " > <!-- Partida -->
                    <img src="../Catalogo/Img/partida.png" alt="consulta">
                    <p class="BTN_S">PARTIDAS</p>
                </article>
                <article onclick=" location.href='../Catalogo/Seccion/Programa.php'; " > <!-- Programa -->
                    <img src="../Catalogo/Img/programa.png" alt="catalogo">
                    <p class="BTN_S">PROGRAMA</p>
                </article>
                <article onclick=" location.href='../Catalogo/Seccion/Centro.php'; " > <!-- Centro -->
                    <img src="../Catalogo/Img/centro.png" alt="proceso">
                    <p class="BTN_S">CENTROS</p>
                </article>
                <article onclick=" location.href='../Catalogo/Seccion/Licitacion.php'; " > <!-- Licitacion -->
                    <img src="../Catalogo/Img/licitacion.png" alt="consulta">
                    <p class="BTN_S">LICITACION</p>
                </article>
                <article onclick=" location.href='../Catalogo/Seccion/Financiamiento.php'; " > <!-- Financiamiento -->
                    <img src="../Catalogo/Img/financiamiento.png" alt="consulta">
                    <p class="BTN_S">FINANCIAMIENTO</p>
                </article>
            </main>
            <footer class="pie"> <!-- Pie de página --> 
                <a href="../Inicio.php" class="BTMC">MENÚ PRINCIPAL</a>   
                <a href="../Conexion/Cerrar.php" class="BTMC">CERRAR SESIÓN</a>
            </footer>
        </div>
    </body>
</html>
