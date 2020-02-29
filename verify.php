<?php

    $usuario = $_POST['user'];
    $contraseña = $_POST['pass'];

    $conexion = mysqli_connect("localhost","root","","usuarios");
    $consulta = "SELECT * FROM usuarios WHERE Usuario = '$usuario' and Contraseña = '$contraseña'";

    $resultado = mysqli_query($conexion, $consulta);

    $aux = mysqli_num_rows($resultado);
    if ($aux > 0){
        header("location:mainusuarios.php");
    }
    
    else{
        header("location:iniciosesionERROR.php");
    }

    //Estos son para que se libere memoria :3
    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>