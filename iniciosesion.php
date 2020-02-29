<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="iniciosesion.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Qué C vende USM</title>
</head>
<body>
    <div class="login-box">
        <img class = "logo" src="img/logo.png" alt="sasuke">
        <h1>Inicio de Sesión</h1>
        
        <form action="verify.php" method = "POST">
            
            <!-- Usuario-->
            <label for="Username">Usuario</label>
            <input type="text" name = "user" placeholder = "Ingrese nombre de usuario" required>
            
            <!-- Contraseña-->
            <label for="Password">Contraseña</label>
            <input type="password" name = "pass" placeholder = "Ingrese su contraseña" required>
            
            <!-- Botón para iniciar sesión-->
            <input type="submit" value="Inicie sesión">
            
            <!-- Links-->
            <a href="mainusuarios.php">¿Eres comprador? Ingrese sin usuario</a><br>
            <a href="recuperar.php">¿Olvidaste tu contraseña?</a><br>
            <a href="index.php">¿No tienes cuenta? Regístrese acá</a>

        </form>
    </div>
</body>
</html>