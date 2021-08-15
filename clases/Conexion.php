<?php 
    class Conexion{
        public function conectar(){
            $servidor ="localhost";
            $usuario ="root";
            $passowrd ="";
            $db ="helpdesk";
            
            $conexion = mysqli_connect($servidor,$usuario,$passowrd,$db);
            return $conexion;
        }
    }
?>