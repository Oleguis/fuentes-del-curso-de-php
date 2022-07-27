<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="pag_busqueda.php" method="get">
        <label>Buscar: <input type="text" name="buscar"></label>
        <input type="submit" name="enviado" value="Buscar"><br>
        <label><input type="radio" name="cual" id="row">Con mysqli_fetch_row()</label><br>
        <label><input type="radio" name="cual" id="array" checked="checked">Con mysqli_fetch_array()</label><br>
    </form>
</body>
</html>
