<?php
    session_start();
    include_once('Conexion/Conexion.php');
    $id = $_SESSION['id'];
    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['ap'];
    if(!isset($id,$nombre,$apellido)){
        header("location: login.php");
    }
?>

<!DOCTYPE html>
<html> <!-- Cabeza de la página -->
    <head>
        <title>INVENTARIO</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta charset="utf-8"> <!-- Caracter especial -->
        <link rel="stylesheet" href="estilos/styleInicio.css"> <!-- Link del estilo de la página -->
        <link rel="shortcut icon" href="Img/Almacen.png"> <!-- Icono de la página -->
    </head>
    <body> <!-- Cuerpo -->
        <div class="contenedor"> 
            <main class="cuerpo"> <!-- Contenedor -->
                <article onclick=" location.href='Catalogo/Catalogo.php'; " > <!-- Catalogo -->
                    <img src="Img/catalogo.png" alt="catalogo">
                    <p class="BTN_S">CATALOGO</p>
                </article>
                <article onclick=" location.href='Proceso/Proceso.php'; " > <!-- Proceso -->
                    <img src="Img/proceso.png" alt="proceso">
                    <p class="BTN_S">PROCESO</p>
                </article>
                <article onclick=" location.href='Consulta/Consulta.php'; " > <!-- Consulta -->
                    <img src="Img/consulta.png" alt="consulta">
                    <p class="BTN_S">CONSULTAS</p>
                </article>
            </main>
            <footer class="pie"> <!-- Pie de página -->    
                <a href="Conexion/Cerrar.php" class="BTMC">CERRAR SESIÓN</a>
            </footer>
        </div>
    </body>
</html>