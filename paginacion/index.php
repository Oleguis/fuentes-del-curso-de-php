<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;
            justify-content: center;
        }
        table{
            display: flex;
            border: 3px solid red;
            border-collapse: collapse;
        }
        th{
            background-color: #f00;
            color: #fff;
            border: 0.5px solid #fff;
        }
        td{
            background-color: lightgoldenrodyellow;
            border: 0.5px solid #80808073;
            text-align: center;
            padding: 0 2px;
        }
        img{
            width: 40px;
            height: 25px;
        }
        .der{
            text-align: right;
        }
        .izq{
            text-align: left;
        }
        .trinfo>td, .trfoot>td{
            background-color: #ff770099;
            font-weight: bold;
            font-size: 1.2rem;
        }
        .trhead, .trinfo, .trfoot{
            height: 35px;
            border: 3px solid #808080;
        }
        h1, h3{
            padding: 0;
            margin: 0;
        }
        a{
            width: 30px;
            border: 1px solid black;
            border-radius: 5px;
            text-decoration: none;
            padding: 0 5px;
            margin: 0 5px;
            background-color: #808080;
        }
    </style>
</head>
<body>
<?php
    include "conexion.php";
    $sql_all="SELECT * FROM `countries` WHERE 1 ORDER BY CAST(nro AS UNSIGNED)";
    
    $resul=$base->prepare($sql_all); // prepara la consulta
    $resul->execute(array()); // Ejecuta la consulta y genera un arreglo en $result
    // definir variables para la paginacion
    $tot_registros=$resul->rowCount();
    $pag_actual=1;
    if(isset($_GET["page"])){
        $pag_actual=$_GET["page"];
    }
    $registros_x_pag=18;
    $tot_paginas=ceil($tot_registros / $registros_x_pag);
    $registro_inicial= ($pag_actual - 1) * $registros_x_pag ;
    $pos=$registro_inicial;
    $sql_paginado="SELECT * FROM `countries` WHERE 1 ORDER BY CAST(nro AS UNSIGNED) LIMIT $registro_inicial, $registros_x_pag";
    $resul_pag=$base->prepare($sql_paginado); // prepara la consulta
    $resul_pag->execute(array()); // Ejecuta la consulta y genera un arreglo en $result
    echo "<table>";
    echo "<tr><td colspan='11'><h3>Lista de Paices</h3></td></tr>";
    echo "<tr class='trinfo'><td colspan='4'>Total Paices: " . $tot_registros . "</td><td colspan='3'>Paices por página: " . $registros_x_pag . "</td><td colspan='4'>Página # " . $pag_actual . " / " . $tot_paginas . "</td></tr>";
    echo "<tr class='trhead'><th>Nro.</th><th>Idn.</th><th>Nombre Corto</th><th>Capital</th><th>Continente</th><th>Región</th><th>Sub-región</th><th>Área</th><th>Población</th><th>Bandera</th><th>Escudo</th></tr>";
    while($row=$resul_pag->fetch(PDO::FETCH_ASSOC)){
        echo "<tr>";
        echo "<td class='der'>" . ++$pos . "</td>"; 
        echo "<td class='der'>" . $row["nro"] . "</td>";
        echo "<td class='izq'>" . $row["nombrecorto"] . "</td>";
        echo "<td class='izq'>" . $row["capital"] . "</td>";
        echo "<td class='izq'>" . $row["continente"] . "</td>";
        echo "<td class='izq'>" . $row["region"] . "</td>";
        echo "<td class='izq'>" . $row["subregion"] . "</td>";
        echo "<td class='der'>" . number_format($row["area"],0,',','.') . "</td>";
        echo "<td class='der'>" . number_format($row["poblacion"],0,',','.') . "</td>";
        echo "<td><img src='" . $row["bandera"] . "' alt='No splas'></td>";
        echo "<td><img src='" . $row["escudo"] . "' alt='No scude'></td>";
        echo "</tr>";
    }
    echo "<tr class='trfoot'><td colspan='11'>";
    for($i=1; $i<=$tot_paginas; $i++){
        echo "<a href='?page=" . $i . "'>$i</a>";
    };
    echo "</td></tr>";
    echo "</table>";
    $resul->closeCursor();
    $resul_pag->closeCursor();
?>
</body>
</html>