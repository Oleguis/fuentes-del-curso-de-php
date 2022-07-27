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
        body{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: lightyellow;
        }
        table{
            border: none;
            border-collapse: collapse;

        }
        .titulo{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        h2, strong{
            color: darkred;
            padding-left: 2px;
        }
        span{
            display: flex;
            height: 19px;
            align-items: end;
            font-size: xx-small;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        th{
            background-color: #ff000099;
            color: #fff;
        }
        td, th{
            text-align: center;
            border: 2px solid red;
            height: 20px;
            padding: 2px;
        }
        .divth{
            min-width: 40px;
        }
        .sin{
            border: none;
            background: none;
        }
        .der{
            display: flex;
        }
    </style>
</head>
<body>
    
<?php


if (isset($_POST["agregar"])){
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $direccion=$_POST["direccion"];

    if ($nombre != "" && $apellido != "" && $direccion != ""){

        $sql="INSERT INTO DATOS_USUARIOS (Nombre, Apellido, Direccion) VALUES (:nom, :ape, :dir)";

        $result=$base->prepare($sql);

        $result->execute(array(":nom"=>$nombre, ":ape"=>$apellido, ":dir"=>$direccion));
        
        header("Location:index.php");

    }else echo "No puede dejar campos en blanco";

}
?>
<div class="titulo">
<h2>CRUD</h2><span><strong>C</strong>reate<strong>R</strong>ead <strong>U</strong>pdate <strong>D</strong>elete</span>
</div>
<form class="tabla" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
<table>
    <tr>
        <th><div class="divth">Id</div></th>
        <th><div class="divth">Cédula</div></th>
        <th><div class="divth">Nombre</div></th>
        <th><div class="divth">Apellido</div></th>
        <th><div class="divth">Dirección</div></th>
        <th><div class="divth">Edad</div></th>
        <th colspan="2" class="sin"><div class="divth">&nbsp;</div></th>
    </tr>

    <?php
        //Ejecuta dentro del bucle foreach todo lo que hay dentro
        foreach($datos_usuarios as $usuario):?>
    <tr>
        <td><?php echo $usuario["Id"]?></td>
        <td><?php echo $usuario["Cedula"]?></td>
        <td><?php echo $usuario["Nombre"]?></td>
        <td><?php echo $usuario["Apellido"]?></td>
        <td><?php echo $usuario["Direccion"]?></td>
        <td><?php echo $usuario["Edad"]?></td>
        <td class="sin"><a href="eliminar.php?Id=<?php echo $usuario["Id"] ?>"><input type="button" value="Eliminar"></a></td>
        <td class="sin">
            <a 
                href="editar.php?
                id=<?php echo $usuario["Id"] ?> & 
                ced=<?php echo $usuario["Cedula"] ?> &
                nom=<?php echo $usuario["Nombre"] ?> &
                ape=<?php echo $usuario["Apellido"] ?> &
                dir=<?php echo $usuario["Direccion"] ?> &
                eda=<?php echo $usuario["Edad"] ?> ">
                <input type="button" name="act" value="Actualizar">
            </a></td>
    </tr>

    <?php
        endforeach;
    ?>

    <tr>
        <td></td>
        <td><input type="text" name="nombre"></td>
        <td><input type="text" name="cedula"></td>
        <td><input type="text" name="apellido"></td>
        <td><input type="text" name="direccion"></td>
        <td><input type="text" name="edad"></td>
        <td class="sin der" colspan="2"><input name="agregar" type="submit" value="Agregar"></td>
    </tr>

</table>
</form>

</body>
</html>