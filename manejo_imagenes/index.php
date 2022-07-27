<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="datosImagen.php" method="POST" enctype="multipart/form-data">
        <table border="1" align="center">
            <tr><td colspan="2" align="center"><h3>Manejo de Imajenes</h3></td></tr>
            <tr>
                <td><label for="imagen">imagen:</label></td>
                <td><input type="file" name="imagen" id="imagen" size="20"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Enviar imagen"></td>
            </tr>
        </table>
    </form>
</body>
</html>