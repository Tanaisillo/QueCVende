<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Qué C vende USM</title>
</head>
<body>
    <div class="login-box">
        <img class = "logo" src="img/logo.png" alt="sasuke">
        <h1>Registro</h1>
        
        <form action="db_insert.php" method = "POST">
            
            <!-- Usuario-->
            <label for="Username">Usuario</label>
            <input type="text" name = "usera" placeholder = "Ingrese nombre de usuario" required>
            
            <!-- Contraseña-->
            <label for="Password">Contraseña</label>
            <input type="password" name = "passa" placeholder = "Ingrese su contraseña" required>
            
            <!-- Correo electrónico -->
            <label for="Correo">Correo</label>
            <input type="text" name = "maila" placeholder = "Ingrese su correo electrónico" required>
            
            <!-- Botón para iniciar sesión-->
            <input type="submit" value="Regístrate">
            
            <!-- Links-->
            <a href="maintodos.php">¿Eres comprador? Ingrese sin usuario</a><br>
            <a href="recuperar.php">¿Olvidaste tu contraseña?</a><br>
            <a href="iniciosesion.php">¿Ya tienes cuenta? Inicie sesión acá</a>

        </form>
    </div>
</body>
</html>