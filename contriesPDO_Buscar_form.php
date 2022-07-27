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

$opcion = $_GET["orderfield"];

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