<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            border: 1px solid #80808033;
        }
        
        th {
            background-color: royalblue;
        }
    </style>
</head>
<body>

<?php
    $conexion= new mysqli("localhost", "root","","prueba");

    if ($conexion->connect_errno){
        echo "Falló la conexión " . $conexion->connect_errno;
    }

    // mysqli_set_charset($conexion,"ut8") estilo precedimental   

    $conexion->set_charset("utf8"); // estilo orientado a objetos

    $sql="select * from productos";

    $resultados=$conexion->query($sql);
    if($conexion->error){
        die ($conexion->error);
    }
    echo "<table border = 1>";
    echo "<tr><th>Código</th><th>Cod PDVSA</th><th>Status</th><th>Descripciòn</th><th>Tipo</th><th>Ubicacion</th><th>Cantidad</th><th>Unidad</th></tr>";

    while($fila=$resultados->fetch_array()){
        echo "<tr><td> ";
        echo $fila[0] . "</td><td align=center> ";
        echo $fila[1] . "</td><td align=center> ";
        echo $fila[2] . "</td><td> ";
        echo $fila[3] . "</td><td> ";
        echo $fila[4] . "</td><td> ";
        echo $fila[5] . "</td><td align=right> ";
        echo $fila[6] . "</td><td align=center> ";
        echo $fila[7] . "</td></tr> ";
    }
    echo "</table>";

    $conexion->close();

?>

</body>
</html>