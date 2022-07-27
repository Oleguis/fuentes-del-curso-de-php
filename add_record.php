<?php

    $db_host="localhost";
    $db_usuario="root";
    $db_password="";
    $db_nombre="prueba";

    $conexion=mysqli_connect($db_host, $db_usuario, $db_password);
    if (mysqli_connect_errno()){
        echo "Error al tratar de conectarse con MYSQL";
        exit();
    }

    mysqli_select_db($conexion, $db_nombre) or die("Error al intentar abrir la Base de Datos $db_nombre");

    mysqli_set_charset($conexion, "utf8");

    $codigo=$_GET["newcodigo"];
    $cod_pdvsa=$_GET["newcodpdv"];
    $presentacion=$_GET["newcodicion"];
    $descripcion=$_GET["newdescripcion"];
    $tipo=$_GET["newtipo"];
    $ubicacion=$_GET["newubicacion"];
    $cantidad=$_GET["newcantidad"];
    $unidad=$_GET["newunidad"];

    $query="insert into productos (codigo, sap_PDVSA, presentacion, descripcion, tipo, ubicacion, cantidad, unidad)
            values ('$codigo','$cod_pdvsa','$presentacion','$descripcion', '$tipo','$ubicacion','$cantidad','$unidad')";
    
    $insertdata=mysqli_query($conexion,$query);
    if (!$insertdata){
        echo "Error. La data no pudo ser ingresada a la base de datos";
    }else {
        echo "<h1 style='color:red;'>Registro insertado con éxito</h1><br><br>";
        echo "<table>
                    <tr><td>Codigo:</td><td>$codigo</td></tr>
                    <tr><td>Cod.PDVSA:</td><td>$cod_pdvsa</td></tr>
                    <tr><td>Condición:</td><td>$presentacion</td></tr>
                    <tr><td>Descripción:</td><td>$descripcion</td></tr>
                    <tr><td>Tipo:</td><td>$tipo</td></tr>
                    <tr><td>Ubicación:</td><td>$ubicacion</td></tr>
                    <tr><td>Cantidad:</td><td>$cantidad</td></tr>
                    <tr><td>Unidad:</td><td>$unidad</td></tr>
               </table>";
    }
    mysqli_close($conexion)
?>