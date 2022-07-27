<style>
    table {
        border-collapse: collapse;
    }
    
    th {
        background-color: royalblue;
    }
    </style>
<?php    // utilizando mysqli_fetch_row  -->  devuelve array indexado

    $db_host="localhost";
    $db_name="prueba";
    $db_user="root";
    $db_passw="";

    $conexiondb=mysqli_connect($db_host,$db_user,$db_passw);
    if (mysqli_connect_errno()) {
        echo "Error de coneccion a MY-SQL";
        exit();
    }
    mysqli_select_db($conexiondb, $db_name) or die ("Error de apertura de base de datos $db_name");
    // echo "<br>conección a \"$db_name\" realizada con éxito<br><br>";
    $abuscar=$_GET["buscar"];
    mysqli_set_charset($conexiondb,"utf8");
    $query="select * from productos where descripcion like '%$abuscar%'";
    $consulta=mysqli_query($conexiondb, $query);
    echo "select * from productos where descripcion like '%$abuscar%'";
    echo "<table border = 1>";
    echo "<tr><th>Código</th><th>Cod PDVSA</th><th>Status</th><th>Descripciòn</th><th>Tipo</th><th>Ubicacion</th><th>Cantidad</th><th>Unidad</th></tr>";
    while($fila=mysqli_fetch_array($consulta, MYSQLI_ASSOC)) {
        echo "<tr><td> ";
        echo $fila["codigo"] . "</td><td align=center> ";
        echo $fila["sap_PDVSA"] . "</td><td align=center> ";
        echo $fila["presentacion"] . "</td><td> ";
        echo $fila["descripcion"] . "</td><td> ";
        echo $fila["tipo"] . "</td><td> ";
        echo $fila["ubicación"] . "</td><td align=right> ";
        echo $fila["cantidad"] . "</td><td align=center> ";
        echo $fila["unidad"] . "</td></tr> ";
    }
    echo "</table>";
?>