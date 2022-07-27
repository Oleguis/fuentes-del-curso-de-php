<?php

    class Countries_modelo {

        private $db;
        private $countries;

        public function __construct(){

            require_once("Conexion.php");

            $this->db=Conectar::conexion();
            $this->countries=array();
        }

        public function get_countries(){

            $consulta=$this->db->query("SELECT * FROM countries WHERE 1 ORDER BY CAST(nro AS UNSIGNED)");

            while($registro=$consulta->fetch(PDO::FETCH_ASSOC)){
                
                $this->countries[]=$registro;
            }
            return $this->countries;
        }
    }
?>