<?php
    // Recibimos los datos de la imagen

    // para imagenes se utiliza la variable super global $_FILES

    $nombre_arc=$_FILES["archivo"]['name'];
    $tipo_arc=$_FILES["archivo"]['type'];
    $size_arc=$_FILES["archivo"]['size'];
    $tmp_dir=$_FILES["archivo"]['tmp_name'];

    if ($size_arc <= 1000000){  // verificamos que el tamaño no sobrepase 1 MB.

        // Carpeta destino en el servidor
        $ubicacion=$_SERVER["DOCUMENT_ROOT"] . "/intranet/uploads/";

        // Movemos la imagen del directorio temporar hacia la seleccionada requerida
        move_uploaded_file($_FILES['archivo']['tmp_name'], $ubicacion . $nombre_arc);

    }else{
        echo "El tamaño es mas grande de lo requerido como máximo";
    }

    require("conexion.php");

    $archivo_objetivo=fopen($ubicacion . $nombre_arc, "r");
    
    $contenido=fread($archivo_objetivo, $size_arc);
    $contenido=addslashes($contenido);

    fclose($archivo_objetivo);

    $sql="INSERT INTO archivos (nombre, tipo, contenido) values('$nombre_arc','$tipo_arc','$contenido')";

    $resul=$base->query($sql)->execute();

?>