<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin: 40px 0 0 0;
            padding: 0;
            display: grid;
            justify-content: center;
            align-items: center;
            background-color: lightyellow;
        }
        form{
            border: 2px solid red;
        }
        h3{
            text-align: center;
            margin: 0;
            padding: 0;
            color: #fff;
            background-color: #f00;
        }
        th{
            text-align: right;
        }
        .boton{
            margin: 10px 20px;
        }
        input[type="text"]{
            width: 200px;
        }
    </style>
</head>
<body>
    <h3>ACTUALIZAR</h3>
    <?php

        include "conexion.php";

        if (!isset($_POST["btn_actualizar"])){
            $id =$_GET["id"];
            $nom=$_GET["nom"];
            $ape=$_GET["ape"];
            $dir=$_GET["dir"];
        }else{
            $id = $_POST["id"];
            $nom= $_POST["nombre"];
            $ape= $_POST["apellido"];
            $dir= $_POST["direccion"];

            $sql="UPDATE DATOS_USUARIOS SET Nombre=:miNom, Apellido=:miApe, Direccion=:miDir WHERE Id=:miId";
            $resultado = $base->prepare($sql);
            $resultado->execute(array(":miId"=>$id, ":miNom"=>$nom, ":miApe"=>$ape, ":miDir"=>$dir));
            header("Location:index.php?");
        }
    ?>
    <!-- <p></p>
    <p>&nbsp;</p> -->
    <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <table width="25%" border="0" align="center">
            <tr>
                <th><label>Id</label></th>
                <td><input type="text" disabled value="<?php echo $id ?>" placeholder="<?php echo $id ?>"></td>
                <td><input name="id" type="hidden" value="<?php echo $id ?>" placeholder="<?php echo $id ?>"></td>
            </tr>
            <tr>
                <th><label>Nombre</label></th>
                <td><input name="nombre" type="text" value="<?php echo $nom ?>" placeholder="<?php echo $nom ?>"></td>
            </tr>
            <tr>
                <th><label>Apellido</label></th>
                <td><input name="apellido" type="text" value="<?php echo $ape ?>" placeholder="<?php echo $ape ?>"></td>
            </tr>
            <tr>
                <th><label>Dirección</label></th>
                <td><input name="direccion" type="text" value="<?php echo $dir ?>" placeholder="<?php echo $dir ?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="btn_actualizar" id="btn_actualizar" value="Guardar" class="boton">
                    <a href="index.php"><input type="button" value="Cancelar" class="boton"></a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>