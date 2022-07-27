<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }
    form{
        display: flex;
        justify-content:space-evenly;
        align-items: center;
        padding: 10px;
        margin: 10px;
    }
    table {
        border-collapse: collapse;
    }
    td{
        text-align: center;
        padding: 0 2px;
    }
    .encabezado {
        background-color: lightblue;
    }
    .izquierda{
        text-align: left;
    }
    .derecha {
        text-align: right;
    }
    img{
        width: 40px;
        height: 20px;
    }
</style>
<body>
    

<?php
function countriesList(){
    try {
    $mbd = new PDO('mysql:host=localhost;dbname=countries', "root", "");
    $mbd->exec("SET CHARACTER SET utf8");
    $consulta = $mbd->query('SELECT * FROM countries ORDER BY CAST(nro as UNSIGNED)');

    $pos=0;
    echo "<table border 1>";
    echo "<tr class='encabezado'><th>Nro.</th><th>Idn.</th><th>Ids.</th><th>Nombre Corto</th><th>Nombre Largo</th><th>Continente</th><th>Capital</th><th>Región</th><th>Subregión</th><th>Área</th><th>Población</th><th>Bandera</th><th>Escudo</th><tr>";
    foreach($consulta as $fila) {
        echo "<tr><td>" . ++$pos . "</td>"; 
        echo "<td>" . $fila["nro"] . "</td>";
        echo "<td>" . $fila["id"] . "</td>";
        echo "<td class='izquierda'>" . $fila["nombrecorto"] . "</td>";
        echo "<td class='izquierda'>" . $fila["nombrelargo"] . "</td>";
        echo "<td>" . $fila["continente"] . "</td>";
        echo "<td>" . $fila["capital"] . "</td>";
        echo "<td>" . $fila["region"] . "</td>";
        echo "<td>" . $fila["subregion"] . "</td>";
        echo "<td class='derecha'>" . number_format($fila["area"],1,",",".") . "</td>";
        echo "<td class='derecha'>" . number_format($fila["poblacion"],1,",",".") . "</td>";
        echo "<td>" . '<img src="' . $fila["bandera"] . '" alt=""></td>';
        echo "<td>" . '<img src="' . $fila["escudo"] . '" alt=""></td></tr>';
    }
    echo "</table>";
    $mbd = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}finally {
    $base=null;
}
}

$opcion = $_GET["orderfield"];
$mypag=$_SERVER["PHP_SELF"];
echo "<form action='" . $mypag . "' method='get'>
        <select name='orderfield' id='orderfield'>
            <option value='col1'>Id Númerico</option>
            <option value='col2'>Id Alfabético</option>
            <option value='col3'>Nombre corto</option>
            <option value='col4'>Nombre Largo</option>
            <option value='col5'>Continente</option>
            <option value='col6'>Capital</option>
            <option value='col7'>Región</option>
            <option value='col8'>Sub Región</option>
            <option value='col9'>Área</option>
            <option value='col1'>Población</option>
        </select>
        <label><input type='text'></label>
        <input type='submit' value='Encontrar'>
    </form>"   


?> 
</body>
</html>