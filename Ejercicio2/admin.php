<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head> 
		<link rel="stylesheet" type="text/css" href="estilo.css" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Inicio de sesión</title>
	</head>
	<body>
	<div id="contenedor">
		<?php   
			require("cabecera.php"); 
			require("sidebarIzq.php");
		?>
		<main id="contenido">
		<?php
            if(isset($_SESSION["login"]) && isset($_SESSION["esAdmin"])){
                echo "<h1>Consola de administración</h1>

					<p>Aquí estarían los controles de la consola de administración</p>";
            }
            else {
                echo "<p> Debe iniciar sesión como administrador para ver la consola</p>";
            }
		?>
		</main>
            <?php 
                include("sidebarDer.php"); 
                include("pie.php");
            ?>
        </div> <!-- Fin del contenedor --> 
	</body>
</html>