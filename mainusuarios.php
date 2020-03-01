<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mainusuarios.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editor de Perfil</title>
</head>
<body>
    <div class= "texto-pe">
    <div class="login-box">
        <h1>Subida de archivos</h1>
        <h2>Debes proporcionar una imagen clara, que muestre tu puesto de ventas o tu producto estrella, en una resolución entre 640x480 y 1920x1080 pixeles</h2>
        <?php
        $formatos = array('.jpg','.jpeg','.png');
        if (isset($_POST['boton'])){
            $nombrearchivo = $_FILES['archivo']['name'];
            $nombretmparchivo = $_FILES['archivo']['tmp_name'];
            $ext = substr($nombrearchivo, strrpos($nombrearchivo,'.'));
            if (in_array($ext, $formatos)){
                if (move_uploaded_file($nombretmparchivo, 'archivos/'.$nombrearchivo)){
                    echo 'Felicitaciones, el archivo '.$nombrearchivo,' fue subido correctamente';
                }else{
                    echo "Ocurrió un error desconocido al subir el archivo";
                }
            }else{
                echo 'El formato del archivo no está permitido (solo se permite: .jpg, .jpeg, .png)';
            }
        }
        ?>
        <br>
        <form action="" method = "POST" enctype = "multipart/form-data">
            
            <input type="file" name = "archivo"><br>
            <input type="submit" name = "boton" value = "Subir archivo">

        </form>
    </div>
</body>
</html>