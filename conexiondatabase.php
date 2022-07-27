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
    $db_nombre="usuarios";
    $db_usuario="root";
    $db_password="";

    $conexion=mysqli_connect($db_host, $db_usuario, $db_password);
    if (mysqli_connect_errno()) {
        echo "Fallo al conectar con la base de datos $db_nombre";
        exit();
    }

    mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de Datos");

    mysqli_set_charset($conexion, "utf8");

    $query = "SELECT * FROM DATAUSUARIOS";

    $resultado = mysqli_query($conexion, $query);
    
    echo "<h1 style='color:red;'>MY SQL</h1><br><br>";

    while ($fila = mysqli_fetch_row($resultado)){
        foreach($fila as $k=>$v){
            echo " $v";
        }
        echo ";<br>";
    }

    mysqli_close($conexion);

    // foreach($resultado as $key=>$val){
    //     $fila = mysqli_fetch_row($resultado);
    //     foreach($fila as $k=>$v){
    //         echo "$v, ";
    //     }
    //     echo ";<br>";
    // }   
?>
</body>
</html>