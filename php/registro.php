<!DOCTYPE html>
<!--Julio Antonio Ramos Gago-->
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="Autor" content="Julio Antonio Ramos Gago <jramosgago.guadalupe@alumnado.fundacionloyola.net>" />
        <meta name="Description" content="Proceso de registro de los minijuegos" />
        <title>Registro</title>
        <!--Estilos CSS-->
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/estilos.css" />
        <!--Fuentes-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet" /> 
    </head>
    <body>
        <header>
            <h3>Registrarse</h3>
        </header>
        <main>
            <section>
                <form action="registro.php" method="post">
                    <input type="text" id="nick" placeholder="Introduce Nick" />
                    <input type="email" id="email" placeholder="Ingrese mail" />
                    <input type="password" id="password" placeholder="Ingrese Password" />
                    <input type="submit" id="enviar" value="Enviar" />
                </form>
                <?php
                    require 'metodos.php';
                    $conexion = new Metodos();

                    if(isset($_POST['enviar'])){
                        $conexion->registro();
                    }
                ?>
            </section>
        </main>
        <footer>
            Julio Antonio Ramos Gago || Copyright © 
        </footer>
    </body>
</html>