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
        <title>CONSULTA</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta charset="utf-8"> <!-- Caracter especial -->
        <link rel="stylesheet" href="Css/styleConsulta.css"> 
        <link rel="shortcut icon" href="Img/consulta.png">
    </head>
    <body> <!-- Cuerpo -->
        <div class="contenedor"> 
            <main class="cuerpo"> <!-- Contenedor -->
                <article onclick=" location.href='../Consulta/Seccion/TotalContrato.php'; " > <!-- Contrato -->
                    <img src="Img/contrato.png" alt="contrato">
                    <p class="BTN_S">CONTRATOS</p>
                </article>
                <article onclick=" location.href='../Consulta/Seccion/TotalRemision.php'; " > <!-- Remision -->
                    <img src="Img/remision.png" alt="remision">
                    <p class="BTN_S">REMISIONES</p>
                </article>
                <article onclick=" location.href='../Consulta/Seccion/TotalSalida.php'; " > <!-- Inventario -->
                    <img src="Img/salida.png" alt="salida">
                    <p class="BTN_S">SALIDAS</p>
                </article>
            </main>
            <footer class="pie"> <!-- Pie de página --> 
                <a href="../Inicio.php" class="BTMC">MENÚ PRINCIPAL</a>   
                <a href="../Conexion/Cerrar.php" class="BTMC">CERRAR SESIÓN</a>
            </footer>
        </div>
    </body>
</html>
