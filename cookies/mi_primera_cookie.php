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
    // Para Crear una cookie se utiliza la función setcookie
    setcookie('nombre','Valor de la cookie');
    setcookie("mi_cookie","This is my first cookie, it is a test");

    // Esto se guarda en una variable super global $_COOKIE["nombre"]

    echo $_COOKIE["nombre"] . "<br>";
    echo $_COOKIE["mi_cookie"] . "<br>";


?>
</body>
</html>