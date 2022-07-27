<?php
    class Datos_usuarios{

        private $db;
        private $datos_usuarios;

        public function __construct(){
            require_once "Conexion.php";
            $this->db=Conectar::conexion();
            $this->datos_usuarios=array();
        }

        public function get_datosUsuarios(){
            $consul=$this->db->query("SELECT * FROM datos_usuarios WHERE 1 ORDER BY cedula");
            while($fila=$consul->fetch(PDO::FETCH_ASSOC)){
                $this->datos_usuarios[]=$fila;
            }
            return $this->datos_usuarios;
        }   
    }
?>