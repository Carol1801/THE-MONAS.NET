<?php
    session_start(); 
    include 'connection.php';

    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $query = "SELECT usuario, contrasena FROM usuarios
    WHERE (usuario = '$usuario' AND contrasena = '$contrasena')" ;

    $ejecutar = mysqli_query($connection, $query);
    if ($ejecutar == true && mysqli_num_rows($ejecutar) > 0) {
        $_SESSION['mensaje'] = 'Inicio de sesion exitoso';
        $_SESSION['tipo'] = 'exito';
        header('Location: catalogo.php ');
    }else{
        $_SESSION['mensaje'] = 'Usuario no registrado';
        $_SESSION['tipo'] = 'error';
        header('Location: ../login/login.php ');

    }
    exit;
?> 
    
