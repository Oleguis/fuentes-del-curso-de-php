<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            width: 40px;
            height: 30px;
        }
    </style>
</head>
<body>

<?php
    $pos=0;
    echo "<table>";
    echo "<tr><td colspan='13'><h2>LISTADO DE PAISES</h2></td></tr>";
    echo "<tr><th>Nro.</th><th>Id. Num.</th><th>Id.Ltr.</th><th>Nombre Corto</th><th>Nombre Largo</th><th>Capital</th><th>Continente</th><th>Región</th><th>Subregión</th><th>Área</th><th>Población</th><th>Bandera</th><th>Escudo</th></tr>";
    foreach($listaCountries as $rows){
        echo "<tr>";
        echo "<td class='der'>" . ++$pos . "</td>";
        echo "<td class='der'>" . $rows["nro"] . "</td>";
        echo "<td class='der'>" . $rows["id"] . "</td>";
        echo "<td class='izq'>" . $rows["nombrecorto"] . "</td>";
        echo "<td class='izq'>" . $rows["nombrelargo"] . "</td>";
        echo "<td class='izq'>" . $rows["capital"] . "</td>";
        echo "<td class='izq'>" . $rows["continente"] . "</td>";
        echo "<td class='izq'>" . $rows["region"] . "</td>";
        echo "<td class='izq'>" . $rows["subregion"] . "</td>";
        echo "<td class='der'>" . number_format($rows["area"],0,',','.') . "</td>";
        echo "<td class='der'>" . number_format($rows["poblacion"],0,',','.') . "</td>";
        echo "<td><img src='" . $rows["bandera"] . "' alt='none'></td>";
        echo "<td><img src='" . $rows["escudo"] . "' alt='none'></td>";
        echo "</tr>";
    }
    echo "<tr><td class='tdfoot' colspan='13'></td></tr>";
    echo "</table>";

?>
</body>
</html>