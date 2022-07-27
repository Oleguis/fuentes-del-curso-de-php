<?php
    include "conexion.php";

    $Id=$_GET["Id"];

    $base->query("DELETE FROM DATOS_USUARIOS WHERE Id = $Id");

    header("Location:index.php")

?>