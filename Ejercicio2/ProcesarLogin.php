<?php
    session_start(); 
    $username = htmlspecialchars(trim(strip_tags($_POST["username"]))); 
    $password = htmlspecialchars(trim(strip_tags($_POST["password"])));

        if ($username == "user" && $password == "userpass") {
            $_SESSION["login"] = true;
            $_SESSION["nombre"] = "Usuario";
        }
        else if ($username == "admin" && $password == "adminpass") {
            $_SESSION["login"] = true;
            $_SESSION["nombre"] = "Administrador";
            $_SESSION["esAdmin"] = true;
        }
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
                if (!isset($_SESSION["login"])) { //Usuario incorrecto 
                    echo "<h1>ERROR</h1>";
                    echo "<p>El usuario o contraseña no son válidos.</p>"; 
                }
                else { //Usuario registrado
                    echo "<h1>Bienvenido $_SESSION[nombre]</h1>";
                    echo "<p>Usa el menú de la izquierda para navegar.</p>";
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