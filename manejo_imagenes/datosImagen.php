<?php
    // Recibimos los datos de la imagen

    // para imagenes se utiliza la variable super global $_FILES

    $nombre_img=$_FILES["imagen"]['name'];
    $tipo_img=$_FILES["imagen"]['type'];
    $size_img=$_FILES["imagen"]['size'];
    $tmp_dir=$_FILES["imagen"]['tmp_name'];

    if ($size_img <= 1000000){  // verificamos que el tamaño no sobrepase 1 MB.




    }else{
        echo "El tamaño es mas grande de lo requerido como máximo";
    }

    // Carpeta destino en el servidor
    $ubicacion=$_SERVER["DOCUMENT_ROOT"] . "/intranet/uploads/";


    // Movemos la imagen del directorio temporar hacia la seleccionada requerida
    move_uploaded_file($_FILES['imagen']['tmp_name'], $ubicacion . $nombre_img);
 

?>