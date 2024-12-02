<?php
    session_start();
    $mensaje = $_SESSION['mensaje'] ?? '';
    $tipo_mensaje = $_SESSION['tipo'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="login.css"> 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
</head>
<body>

    <main>
        <div class="contenedor_todo">
            <div class="caja-trasera"> 
                <!-- cuestionario -->
                <div class="caja-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesion </p>
                    <button id="btn_iniciar-sesion">Iniciar Sesion</button>
                </div>

                <div class="caja-register">
                    <h3>¿Aun no tienes una cuenta?</h3>
                    <p>Registrate para poder iniciar sesion </p>
                    <button id="btn_registrate">Registrate</button>
                </div>
            </div>

            <!-- formularios de registro -->
            <div class="contenedor_login-register">
                <form action="../php/ingreso_usuario.php" method="POST" class="formulario_login">
                    <h2>Iniciar Sesion </h2>
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button type="submit">Entrar </button>
                </form>

                <form action="../php/registro_usuario.php" method="POST" class="formulario_register">
                    <h2>Registrate</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre">
                    <input type="email" placeholder="Correo" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button type="submit">Registrarse</button>
                </form>

                <?php 
                    if (isset($_SESSION['mensaje'])) {
                        echo "<script>
                            Swal.fire({
                                title: '".($tipo_mensaje == 'exito' ? $mensaje : $mensaje)."',
                                icon: '" . ($tipo_mensaje == 'exito' ? 'success' : 'error') . "',
                                confirmButtonText: 'Aceptar'
                        });
                        </script>";
                        unset($_SESSION['mensaje']);
                        unset($_SESSION['tipo']);
                    }
                ?>
            </div>
        </div>
    </main>
    <script src="login.js"></script>
</body>
</html>
<!-- carole -->