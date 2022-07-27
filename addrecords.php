<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $db_host="localhost";
    $db_usuario="root";
    $db_password="";
    $db_nombre="prueba";

    $conexion=mysqli_connect($db_host, $db_usuario, $db_password);
    if (mysqli_connect_errno()){
        echo "Error de al conectarse a My SQL";
        exit();
    }

    mysqli_set_charset($conexion, "utf8");   // para que reconosca acentos, ñ y Ñ
    mysqli_select_db($conexion,$db_nombre) or die ("Error al conectarse a la Base de Datos $db_nombre");

    $insertar= "INSERT INTO productos (codigo, sap_PDVSA, descripcion, presentacion, tipo, ubicacion, cantidad, unidad)
     VALUES ('3238073257', '3238073257', 'My phone number ','NUEVO','B97','Suba',998.98,'new')";

    $resultado=mysqli_query($conexion, $insertar);
    if (!$resultado){
        echo str_repeat("*",100) . "<br>";
        echo str_repeat("*",10) . "Error al cargar la data" . str_repeat("*",10) . "<br>";
        echo str_repeat("*",100) . "<br>";
    }else {    
        echo str_repeat("*",100) . "<br>";
        echo "Datos cargados con exito";
        echo str_repeat("*",100) . "<br>";
    }
    mysqli_close($conexion);
?>
</body>
</html>