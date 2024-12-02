<?php
session_start();
include 'connection.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$validaUsuario = "SELECT '*' FROM usuarios WHERE (nombre = '$nombre' AND correo = '$correo' AND usuario = '$usuario' AND contrasena = '$contrasena')";

$validar = mysqli_query($connection, $validaUsuario);

if ($validar && mysqli_num_rows($validar) > 0) {
    $_SESSION['mensaje'] = 'Ya existe este usuario';
    $_SESSION['tipo'] = 'fallo';
} else {

    $query = "INSERT INTO usuarios (nombre, correo, usuario, contrasena) 
    VALUES ('$nombre' , '$correo' , '$usuario' , '$contrasena' )";

    $ejecutar = mysqli_query($connection, $query);

    if ($ejecutar) {
        $_SESSION['mensaje'] = 'Usuario Creado Exitosamente';
        $_SESSION['tipo'] = 'exito';
    }else{
        $_SESSION['mensaje'] = 'Ha ocurrido un error al crear el usuario';
        $_SESSION['tipo'] = 'fallo';
    }
}

header("Location: ../php/login.php");
exit;
?>
