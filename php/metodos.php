<?php

    class Metodos{

        public $conexion;
        
        function __construct(){
            require 'config.php';
            $this->conexion = mysqli_connect(SERVER, USER, PASSWORD, DATABASE);
        }

        function consultar($consulta){
            return $this->conexion->query($consulta);
        }

        function registro(){

            if(isset($_POST['enviar'])){

                $consulta = "INSERT INTO usuario (nick, password, email) VALUES ('".$_POST['nick']."','".$_POST['password']."','".$_POST['email']."');";
                $resultado = $this->consultar($consulta);
            }
        }

        function iniciar_sesion(){

            if(isset($_POST['enviar'])){

                $consulta = "SELECT * FROM usuario WHERE nick ='".$_POST['nick']."' and password ='".$_POST['password']."';";
                $resultado = $this->consultar($consulta);

                $fila=$resultado->fetch_array(MYSQL_ASSOC);

                if($fila){

                    $_SESSION['idUsuario']=$fila['idUsuario'];
                    $_SESSION['nick']=$fila['nick'];
                }else{

                    echo 'Algo falló en el inicio de sesión';
                }
            }
        }
    }
?>