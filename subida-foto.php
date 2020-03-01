<?php
$target_dir = "archivo/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
$uploadOk = 1;
$ImageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// PERMITE CIERTOS FORMATOS
if($ImageFileType != "jpg" && $ImageFileType != "png" && $ImageFileType != "jpeg") {
    echo "Disculpa, solo se permiten archivos jpg, jpeg o png.";
    $uploadOk = 0;
}

//REVISA EL TAMA;O DE LA IMAGEN
if ($_FILES["foto"]["size"] > 60000) {
    echo "La foto es demasiado grande.";
    $uploadOk = 0;
}

// REVISA SI UPLOADOK ES 0 POR ALGUN ERROR
if ($uploadOk == 0) {
    echo "Ocurrió un error y la foto no pudo subirse.";

// SI UPLOADOK ES 1, SUBE LA IMAGEN
} else {
    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
        echo "La imagen ". basename( $_FILES["foto"]["name"]). " se ha subido correctamente.";
    } else {
        echo "Ocurrió un error y la foyo no pudo subirse.";
    }
}

?>
