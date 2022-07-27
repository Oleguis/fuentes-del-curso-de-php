<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        function busquedaArticulo($abuscar){
            try{
                $base=new PDO("mysql::host=localhost; dbname=prueba","root", "");
                $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $base->exec("SET CHARACTER SET utf8");

                $sql="SELECT * FROM productos WHERE descripcion like :n_art";

                $result=$base->prepare($sql);

                $result->execute(array(":n_art"=>"%$abuscar%"));  // se genera la tabla de consultas en memoria

                echo "<table border = 1>";
                echo "<tr><th>Código</th><th>Cod PDVSA</th><th>Status</th><th>Descripciòn</th><th>Tipo</th><th>Ubicacion</th><th>Cantidad</th><th>Unidad</th></tr>";
                while($fila=$result->fetch(PDO::FETCH_ASSOC)){
                    echo "<tr><td> ";
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

                $result->closeCursor();  // Cierra la tabla que se generó en memoria y liberar espacio
            
            } catch (Exception $e){
                die ('Error: ' . $e->getMessage());
            } finally {
                $base=null;
            }
        }
    ?>

    <style>
        table {
            border-collapse: collapse;
        }
        
        th {
            background-color: #80808073;
        }
    </style>

</head>
<body>
<?php
    $mibusqueda=$_GET["abuscar"];
    $mipag=$_SERVER["PHP_SELF"];
    
    if ($mibusqueda!=NULL) {
        busquedaArticulo($mibusqueda);
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