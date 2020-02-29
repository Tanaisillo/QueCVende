<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="recuperar.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Qué C vende USM</title>
</head>
<body>
    <div class="login-box">
        <img class = "logo" src="img/logo.png" alt="sasuke">
        <h1>Recuperar Contraseña</h1>
        
        <form action="" method = "POST">
            
            <!-- Usuario-->
            <label for="Username">Usuario</label>
            <input type="text" name = "usuario" placeholder = "Ingrese su nombre de usuario" required>
            
            <!-- Contraseña-->
            <label for="Mail">Correo Electrónico</label>
            <input type="text" name = "mail" placeholder = "Ingrese su correo electrónico" required>
            
            <!-- Botón para iniciar sesión-->
            <input type="submit" value="Recuperar contraseña">
            
            <!-- Links-->
            <a href="maintodos.php">¿Eres comprador? Ingrese sin usuario</a><br>
            <a href="iniciosesion.php">¿Ya tienes cuenta? Inicie sesión acá</a><br>
            <a href="index.php">¿No tienes cuenta? Regístrese acá</a>

        </form>
    </div>
</body>
</html>