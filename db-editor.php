<?php

    $conexion = mysqli_connect("localhost","root","","usuarios");

    $usuario = $_POST['usera'];
    $password = $_POST['passa'];
    $correo = $_POST['maila'];

    $query = "INSERT INTO usuarios (Usuario, Correo, Contraseña) VALUES('$usuario','$correo','$password')";
    $resultado = $conexion->query($query);

    if ($resultado){
        echo "Los datos se ingresaron correctamente";
    }
    
    else{
        echo "El ingreso de datos falló";
    }
    
    mysqli_close($conexion);
?>
