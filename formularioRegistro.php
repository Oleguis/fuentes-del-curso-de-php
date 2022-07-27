<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body {
            display: flex;
            width: 100vw;
            height: 100vh;
            justify-content: center;
            align-items:flex-start;
            margin-top: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
            width: 500px;
            justify-content: center;
            align-items: center;
            border: 1.5px solid;
            background-color: lightsalmon;
            padding: 10px;
        }
        .divline {
            display: flex;
            flex-direction: row;
            width: 100%;
            justify-content: center;
            align-items: center;
        }
        p {
            margin: 0;
            padding: 5px;
            width: 120px;
        }
        input {
            width: 300px;
            height: 20px;
        }
        .boton {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100px;
            height: 30px;
            padding: 10px;
            margin: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <form action="add_record.php" method="get">
            <div class="divline"><p>Código número:   </p><input type="text" name="newcodigo" placeholder="Indique el código SAP"></div>
            <div class="divline"><p>Código PDVSA:    </p><input type="text" name="newcodpdv" placeholder="Indique el código SAP PDVSA"></div>
            <div class="divline"><p>Condición:       </p><input type="text" name="newcodicion" placeholder="Indique si el artículo es NUEVO, USADO O REPARADO"></div>
            <div class="divline"><p>Descripción:     </p><input type="text" name="newdescripcion" placeholder="Indique la descripción del artículo"></div>
            <div class="divline"><p>Tipo:            </p><input type="text" name="newtipo" placeholder="Indique el tipo (B01 .... B99)"></div>
            <div class="divline"><p>Ubicación:       </p><input type="text" name="newubicacion" placeholder="Indique la ubicación en el almacen"></div>
            <div class="divline"><p>Cantidad:        </p><input type="text" name="newcantidad" placeholder="Indique la cantidad a ingresar"></div>
            <div class="divline"><p>Unidad:          </p><input type="text" name="newunidad" placeholder="Indique la unidad del artículo"></div>
            <input class="boton" type="submit" value="Agregar">
    </form>
</body>
</html>