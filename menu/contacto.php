<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctanos</title>
    <link rel="stylesheet" href="contacto.css">
</head>
<body>
    <header class="header">
    <h1>The monas.net</h1>
        <div class="logo">
            <img src="img/Imagen de WhatsApp 2024-11-19 a las 11.58.53_e418bd81.jpg" alt="logo de la marca">
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="../php/catalogo.php">Productos</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
        <a href="../login/login.php" class="btn"><button>Iniciar Sesion</button></a>
    </header> 
    <main>
        <section class="info-contacto">
            <h2>Información de Contacto</h2>
            <p>Estamos aquí para ayudarte. Contáctanos a través de cualquiera de los siguientes medios:</p>
            <ul>
                <li><strong>Teléfono:</strong> +57 321266431</li>
                <li><strong>Correo Electrónico:</strong> themonas.net@miempresa.com</li>
                <li><strong>Dirección:</strong> Calle Principal Barrio Garzón, Ibagué Tolima, Colombia</li>
                <li><strong>Horario:</strong> Lunes a Viernes, 5:00 AM - 10:00 PM</li>
            </ul>
        </section>
        <section class="formulario-contacto">
            <h2>Envíanos un Mensaje</h2>
            <form action="#" method="post" class="contact-form">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>

                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" placeholder="Tu correo electrónico" required>

                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" rows="5" placeholder="Tu mensaje" required></textarea>

                <button type="submit">Enviar</button>
            </form>
        </section>
    </main>
    <footer>
        <p>© 2024 Mi Empresa. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
