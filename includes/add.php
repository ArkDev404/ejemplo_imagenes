<?php

require "config.php";

$directorio = "../img/";

if (!is_dir($directorio)) {
    mkdir($directorio, 0755,true);
}

if (move_uploaded_file($_FILES['foto']['tmp_name'],$directorio . $_FILES['foto']['name'])) {
    $imagen_url = $_FILES['foto']['name'];
} else {
    $respuesta = array(
        'respuesta' => error_get_last()
    );
}


try {
    $stmt = $conexion->prepare("INSERT INTO imagenes (url_foto) VALUES (?)");
    $stmt->bind_param("s",$imagen_url);
    $stmt->execute();
    $id_insertado = $stmt->insert_id;
    if($stmt->affected_rows){
        
        $respuesta = array(
            'respuesta' => 'correcto'
        );

    } else {

        $respuesta = array(
            'respuesta' => 'Ocurrió un error'
        );
    }
} catch (Exception $e) {
    $respuesta = array(
        'respuesta' => $e->getMessage()
    );
}

die(json_encode($respuesta));