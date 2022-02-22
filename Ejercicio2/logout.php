<?php
    session_start(); 
    unset($_SESSION["login"]);
    unset($_SESSION["nombre"]);
    unset($_SESSION["esAdmin"]);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="estilo.css" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>ProcesarLogin</title>
</head>
    <body>
        <div id="contenedor">
        <?php   
        require("cabecera.php"); 
        require("sidebarIzq.php");
        ?>
        <main id="contenido">
            <?php
                echo "<p>Se ha cerrado sesión.</p>"
            ?>
        </main>
        <?php 
        include("sidebarDer.php"); 
        include("pie.php");
        ?>
        </div> <!-- Fin del contenedor --> 
    </body>
</html>