<!DOCTYPE html>
<html lang="es">
    <head>
        <link rel="stylesheet" type="text/css" href="estilo.css" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Login</title>
    </head>
    <body>
        <div id="contenedor">
            <?php   
            require("cabecera.php"); 
            require("sidebarIzq.php");
            ?>
            <main id="pagina login">
                <form action="ProcesarLogin.php" method="POST">
                    <div>
                        <div><label for= "Usuario">Usuario:</label>
                        <input id= "Usuario" type="text" name="username" value="" /></div>
                        <div><label for= "Contraseña">Contraseña:</label>
                        <input id= "Contraseña" type="password" name="password" value="" /></div>
                        <input type= "submit" name= "Iniciar sesión" value= "Iniciar sesión" />
                    </div>
                </form>
            </main> <!-- Fin de la página de login --> 
            <?php 
                include("sidebarDer.php"); 
                include("pie.php");
            ?>
        </div> <!-- Fin del contenedor --> 
    </body>
</html>