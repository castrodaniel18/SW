<?php
    function saludo($nombre){
        echo "Bienvenido $_SESSION[nombre] (<a href=logout.php>Salir</a>)";
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>header</title>
</head>
    <body>
        <header>
        <h1>Mi gran página web</h1>
        <div class="saludo">
            <?php
                if(isset($_SESSION["login"])){
                    saludo($_SESSION["nombre"]);	
                }
                else {
                    echo "Usuario desconocido. <a href=login.php>Login</a>";
                }
            ?>
        </div>
</header>
    </body>
</html>