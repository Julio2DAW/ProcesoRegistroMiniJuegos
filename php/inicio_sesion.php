<?php
    require 'metodos.php';

    $conexion = new Metodos()
?>
<!DOCTYPE html>
<!--Julio Antonio Ramos Gago-->
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="Autor" content="Julio Antonio Ramos Gago <jramosgago.guadalupe@alumnado.fundacionloyola.net>" />
        <meta name="Description" content="Proceso de registro de los minijuegos" />
        <title>Inicio de Sesión</title>
        <!--Estilos CSS-->
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/estilos.css" />
        <!--Fuentes-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet" /> 
    </head>
    <body>
        <header>
            <h3>Iniciar de Sesión</h3>
        </header>
        <main>
            <section>
                <form action="inicio_sesion.php" method="post">
                    <input type="text" name="nick" placeholder="Introduce Nick" />
                    <input type="password" name="password" placeholder="Ingrese Password" />
                    <input type="submit" value="Enviar" />
                </form>
            </section>
        </main>
        <footer>
            Julio Antonio Ramos Gago || Copyright © 
        </footer>
    </body>
</html>