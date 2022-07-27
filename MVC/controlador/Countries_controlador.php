<?php
    require_once("modelo/Countries_modelo.php");
    
    $countries= new Countries_modelo();
    $listaCountries=$countries->get_countries();
    
    require_once("vista/Countries_view.php");



?>