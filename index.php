<?php
session_start();
$mensaje = $_SESSION['mensaje'] ??  '';
$tipo_mensaje = $_SESSION['tipo'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The monas.net</title>
    <link rel="stylesheet" href="menu/estilos.css">
    <link rel="stylesheet" href="menu/acerca-de.css">

</head>
<body>
    <header class="header">
        <h1>The monas.net</h1>
    <div class="logo">
            <img src="menu/img/Imagen de WhatsApp 2024-11-19 a las 11.58.53_e418bd81.jpg" alt="logo de la marca">
    </div>
        <nav>
            <ul class="nav-links">
                <li><a href="#">Inicio</a></li>
                <li><a href="php/catalogo.php">Productos</a></li>
                <li><a href="menu/contacto.php">Contacto</a></li>
            </ul>
        </nav>
        <a href="login/login.php" class="btn"><button>Iniciar Sesion</button></a>
    </header> 
    <div class="content">
        <main>
            <div class="super"></div>
            <img src="menu/img/NOTA-1-FOTO-1-TIENDA-DE-BARRIO-scaled copy.webp" class="imagen-grande">
            <h1>Historia</h1>
            <p>
            
                Esta tienda fue creada alrededor del año 2006, por la señora Olga Raigosa, con el objetivo de minimisar las cuentas 
                de la casa y ayudar a sus hijos,la tienda está ubicada en el barrio Garzón del mucinicpio de Ibagué,
                departamento del Tolima, en donde la tienda ha ido creciendo poco a poco por la compra de sus vecinos y 
                acomodándose a medida que pasa el tiempo.

            </p>
            <h2>Misión </h2>
            <p>
                En The monas.net ofrecemos gran variedad de productos de alta calidad para el consumo diario, a un precio asequible.
                Con una excelente atención al cliente y con los mejores precios del sector. 

            </p>
            <h3>Visión</h3>
            <p>
                
                The Monas.Net para el 2034 será reconocido como la tienda virtual, con más proyección en la
                ciudad de Ibagué, ofreciendo productos de excelente calidad y con los mejores precios locales 
                llegando a diferentes rincones de la ciudad y así fomentaremos el empleo en la región  

            </p>
        </main>
    </div>
    <footer>
        <hr>
        <h5>3213266431 <br>
        themonas.net@miempresa.com <br>
            barrio las americas <br>
        </h5>
    </footer>
</body>
</html>