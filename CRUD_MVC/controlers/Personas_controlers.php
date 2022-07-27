<?php

    //Llama al Modelo o BD

    require_once("models/Personas_models.php");

    $usuarios=new Datos_usuarios();

    $datos_usuarios=$usuarios->get_datosUsuarios();

    require_once("views/Personas_views.php");

?>