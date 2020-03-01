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
    <div class="editor-perfil">
        <desc> Bienvenido al Editor de Perfil, para comenzar, dale un nombre a tu puesto, que sera visible en la pagina principal </desc>
        <br>
        <input type="text" name = "Nombre" placeholder = "Dale un nombre a tu puesto" required>
        <br>
        <desc> Quieres a;adir info sobre tus productos? este es el lugar </desc>
        <br>
        <input type="text" name = "Desc1" placeholder = "a'ade informacion sobre tu puesto" required>
        <br>
        <input type="submit" name = "boton1" value="Guardar Cambios">



        <h1>A;ade una foto de tu puesto</h1>
        <h2>Debes proporcionar una foto clara, que muestre tu puesto de ventas o tu producto estrella, en una resolución entre 640x480 y 1920x1080 pixeles</h2>
        <br>
        <form action="subida-foto.php" method = "POST" enctype = "multipart/form-data">
            
            <input type="file" name = "foto"><br>
            <input type="submit" name = "boton2" value = "Subir archivo">

        </form>
    </div>
</body>
</html>