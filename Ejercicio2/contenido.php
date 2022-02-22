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
            if(isset($_SESSION["login"])){
                echo "<h1>Automóviles olvidados</h1>

					<p>El Citroën SM fue un coche adelantado a su época, en los años 70. Fue
					presentado en 1970, fruto del acuerdo entre Citroen y Maserati. Este
					automóvil incorporaba suspensión hidroneumática automática, faros
					direccionables, dirección asistida variable en función de la velocidad, caja de
					cambios de 5 velocidades, elevalunas eléctricos y frenos de disco en las
					cuatro ruedas.</p>

					<p>El Citroën SM era capaz de alcanzar 220Km/h y montaba un motor Masetati
					2.7 V6 de 172 CV. Este motor fue diseñado a partir de un V8 ... </p>

					<p>El Citroën SM se dejó de fabricar en 1975 debido a ... </p>";
            }
            else {
                echo "<p> Debe iniciar sesión para ver el contenido</p>";
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