<?php
    require("POO_config.php");

    class Conexion{
        protected $conexion_db;

        public Function __construct(){
            $this->conexion_db = new mysqli(DB_HOST, DB_USUARIO, DB_CONTRA, DB_NOMBRE);
            if ($this->conexion_db->connect_errno) {
                echo "Fallo al conectar a My SQL: " . $this->conexion_db->connect_error;
                return;
            }
            $this->conexion_db->set_charset(DB_CHARSET);
        }
    }
?>