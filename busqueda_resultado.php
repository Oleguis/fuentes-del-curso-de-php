<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }
        
        th {
            background-color: royalblue;
        }
    </style>
    <?php
        function busqueda($abuscar){

            $db_host="localhost";
            $db_user="root";
            $db_pasword="";
            $db_nombre="prueba";

            $conexion=mysqli_connect($db_host, $db_user,$db_pasword);
            mysqli_set_charset($conexion,"utf8");
            if (mysqli_connect_errno()){
                echo "Error de conexción a My SQL";
                exit();
            }

            mysqli_select_db($conexion,$db_nombre) or die("Error abriendo  ");
            $query="select * from productos where descripcion like '%" . $abuscar . "%'";
            $consulta=mysqli_query($conexion, $query);
            echo "<table border = 1>";
            echo "<tr><th>Código</th><th>Cod PDVSA</th><th>Status</th><th>Descripciòn</th><th>Tipo</th><th>Ubicacion</th><th>Cantidad</th><th>Unidad</th></tr>";
            while($fila=mysqli_fetch_array($consulta,MYSQLI_ASSOC)){
                echo "<tr><td>";
                echo $fila["codigo"] . "</td><td align=center> ";
                echo $fila["sap_PDVSA"] . "</td><td align=center> ";
                echo $fila["presentacion"] . "</td><td> ";
                echo $fila["descripcion"] . "</td><td> ";
                echo $fila["tipo"] . "</td><td> ";
                echo $fila["ubicacion"] . "</td><td align=right> ";
                echo $fila["cantidad"] . "</td><td align=center> ";
                echo $fila["unidad"] . "</td></tr> ";
            }
            echo "</table>";
        }
    ?>
</head>
<body>




    <?php
        $mibusqueda=$_GET["abuscar"];
        $mipag=$_SERVER["PHP_SELF"];
        
        if ($mibusqueda!=NULL) {
            busqueda($mibusqueda);
        }else {
            echo ("
            <form action='" . $mipag . "' method='get'>
                <br><label>Criterio de busqueda:<input type='text' name='abuscar'></label>
                <input type='submit' value='Buscar'>
            </form>
            ");
        }
    ?>
</body>
</html>