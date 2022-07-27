<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: grid;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }
        form{
            display: flex;
            width: 280px;
            height: 110px;
            min-width: 280px;
            min-height: 110px;
            width: auto;
            justify-content: center;
            align-items: center;
            border: 2px solid red;
            background-color: lightgoldenrodyellow;
        }
        h3{
            margin: 0;
            padding: 0;    
            background-color: red;
            color: #fff;          
        }
        td{
            text-align: right;
        }
        .tdizq{
           text-align: left; 
        }
        .der{
            text-align: right;
        }
        .tdboton{
            text-align: center;
            width: 50px;
        }
    </style>
</head>
<body>
    <h3>Registrate</h3>
    <form action="login.php" method="POST">
        <table>
            <tr>
                <td>
                    <label for="usuario" class="der">Usuario</label>
                </td>
                <td>
                    <input require type="text" class="izq" id="usuario" name="usuario">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password" class="der">Password</label>
                </td>
                <td>
                    <input require type="password" class="izq" id="password" name="password">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="recordar">
                </td>
                <td class="tdizq">
                    <label for="password" class="izq">Recordar usuario</label>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="tdboton">
                    <input type="submit" name="enviar" value="Enviar">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>