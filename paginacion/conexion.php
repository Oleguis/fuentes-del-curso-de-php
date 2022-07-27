<?php
    try {

        $base= new PDO("mysql:host=localhost; dbname=countries", "root", "");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET UTF8");

    } catch (Exception $e) {
        die("Error de conexion a MySQL : " . $e->getMessage());
    }

?>