<?php
    require '../php/config.php'

    class Connection{

        protected $conexion;

        function __construct(){
            $this->conexion = new mysqli(SERVER, USER, PASSWORD, DATABASE);
            if($this->conexion->connect_errno){
                echo 'Se ha producido un error: '.$this->conexion->connect_error;
            }
        }
    }
?>