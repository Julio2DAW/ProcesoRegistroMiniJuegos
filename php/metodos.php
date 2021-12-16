<?php
    require 'config.php';

    class Metodos{

        protected $conexion;

        function __construct(){
            $this->conexion = new mysqli(SERVER, USER, PASSWORD, DATABASE);
            if($this->conexion->connect_errno){
                echo 'Se ha producido un error: '.$this->conexion->connect_error;
            }
        }

        function registro(){
            $sql = 'INSERT INTO usuario (nick, password, email) VALUES ("'.$_POST['nick'].'", "'.$_POST['password'].'", "'.$_POST['email'].'")';
            $resultado = $this->conexion->query($sql);
            
            if($resultado){
                echo 'El jugador ha sido agragado';
            }else{
                echo 'El jugador no ha sido agregado';
            }
        }

        function iniciar_sesion(){
            
        }
    }
?>