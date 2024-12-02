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
    <title>the monas.net</title>
    <link rel="stylesheet" href="../pagina/estilos.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>

    <header class="header">
    <h1 id="titulo">The monas.net</h1>
        <div class="logo">
            <img src="../menu/img/Imagen de WhatsApp 2024-11-19 a las 11.58.53_e418bd81.jpg" alt="logo de la marca">
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="#">Productos</a></li>
                <li><a href="../menu/contacto.php">Contacto</a></li>
            </ul>
        </nav>
        <a href="../login/login.php" class="btn"><button>Iniciar Sesion</button></a>

        <div class="container-icon">
            <svg
                xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon-cart">
                <path
                    stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 
                            0 .955.343 1.087.835l.383 1.437M7.5 14.25a3
                            3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684
                            2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 
                            5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0
                            0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
            </svg>
            <div class="count-products">
                <span id="contador-productos">0</span>
            </div>

            <div class="container-cart-productos hidden-cart">
                <div class="cart-product">
                    <div class="info-cart-product">
                        <span class="cantidad-producto-carrito">1</span>
                        <p class="titulo-producto-carrito">leche entera</p>
                        <span class="precio-producto-carrito">$6000</span>
                    </div>
                    <svg
                        xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon-close">
                        <path
                            stroke-linecap="round" stroke-linejoin="round"
                            d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </div>
                <div class="cart-total">
                    <h3>Total:</h3>
                    <span class="total-pagar">10000</span>
                </div>
            </div>
        </div>
    </header>

    
    <div class="container-items">
        <?php
        if (isset($_SESSION['mensaje'])) {
            echo "<script>
                        Swal.fire({
                            title: '" . ($tipo_mensaje == 'exito' ? $mensaje : $mensaje) . "',
                            icon: '" . ($tipo_mensaje == 'exito' ? 'success' : 'error') . "',
                            confirmButtonText: 'Aceptar'

                    });
                    </script>";
            unset($_SESSION['mensaje']);
            unset($_SESSION['tipo']);
        }
        ?>
        <div class="item">
            <figure>
                <img src="https://maxitenjo.com.co/cdn/shop/products/rr_2c53f68c-2989-48bd-84fa-6f8c4955dc8a_2400x.jpg?v=1597095679"
                    alt="Producto">
            </figure>
            <div class="info-producto">
                <h2>Leche entera</h2>
                <p class="price">$6000</p>
                <button onclick="contadorCarrito()">Añadir al carrito</button>
            </div>
        </div>
        <div class="item">
            <figure>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRu9gChc-kuLvVb634TEQHNmxQyPntpYMHc0w&s"
                    alt="Producto">
            </figure>
            <div class="info-producto">
                <h2>Arroz Diana</h2>
                <p class="price">$3000</p>
                <button onclick="contadorCarrito()">Añadir al carrito</button>
            </div>
        </div>
        <div class="item">
            <figure>
                <img src="https://lavaquita.co/cdn/shop/products/supermercados_la_vaquita_supervaquita_aceite_diana_900ml_avegetal_aceites_1024x1024.jpg?v=1620492927"
                    alt="Producto">
            </figure>
            <div class="info-producto">
                <h2>Aceite Diana</h2>
                <p class="price">$12000</p>
                <button onclick="contadorCarrito()">Añadir al carrito</button>
            </div>
        </div>
        <div class="item">
            <figure>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQii6IkclUWuOqBkzOVwrtQ6EBUBxbHncH8-Q&s"
                    alt="Producto">
            </figure>
            <div class="info-producto">
                <h2>Riscostilla caja</h2>
                <p class="price">$5000</p>
                <button onclick="contadorCarrito()">Añadir al carrito</button>
            </div>
        </div>
        <div class="item">
            <figure>
                <img src="https://cuidadocapilar.co/wp-content/uploads/2021/01/ultran_Mesa-de-trabajo-1.jpg"
                    alt="Producto">
            </figure>
            <div class="info-producto">
                <h2>Shampoo Milagros</h2>
                <p class="price">$36000</p>
                <button onclick="contadorCarrito()">Añadir al carrito</button>
            </div>
        </div>
        <div class="item">
            <figure>
                <img src="https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202111/10/00118010200634____3__600x600.jpg"
                    alt="Producto">
            </figure>
            <div class="info-producto">
                <h2>Panela</h2>
                <p class="price">$4000</p>
                <button onclick="contadorCarrito()">Añadir al carrito</button>
            </div>
        </div>

        <div class="item">
            <figure>
                <img src="https://th.bing.com/th/id/OIP.LCDD8pjWHSZ3bcEVEGKgzQHaHa?rs=1&pid=ImgDetMain"
                    alt="Producto">
            </figure>
            <div class="info-producto">
                <h2>Huevos</h2>
                <p class="price">$16000</p>
                <button onclick="contadorCarrito()">Añadir al carrito</button>
            </div>
        </div>
        <div class="item">
            <figure>
                <img src="https://tiendaelsol.oficinapro.co/images/000107/large/598_0.jpg"
                    alt="Producto">
            </figure>
            <div class="info-producto">
                <h2>Sal</h2>
                <p class="price">$2000</p>
                <button onclick="contadorCarrito()">Añadir al carrito</button>
            </div>
        </div>

        <div class="item">
            <figure>
                <img src="https://kopancoba.com/wp/wp-content/uploads/2021/07/AZUCAR-500-GR-600x600.jpg"
                    alt="Producto">
            </figure>
            <div class="info-producto">
                <h2>Azucar</h2>
                <p class="price">$4000</p>
                <button onclick="contadorCarrito()">Añadir al carrito</button>
            </div>
        </div>
        <div class="item">
            <figure>
                <img src="https://th.bing.com/th/id/OIP.V7MoirVEPo53XWSe6V2_PgHaBp?rs=1&pid=ImgDetMain"
                    alt="Producto">
            </figure>
            <div class="info-producto">
                <h2>Cafe papeleta</h2>
                <p class="price">$1200</p>
                <button onclick="contadorCarrito()">Añadir al carrito</button>
            </div>
        </div>
        <div class="item">
            <figure>
                <img src="https://th.bing.com/th/id/R.e55bc175e7e73686045517e2209e2ea6?rik=Ijoue%2bnaQPKsbw&pid=ImgRaw&r=0"
                    alt="Producto">
            </figure>
            <div class="info-producto">
                <h2>Cafe</h2>
                <p class="price">$5000</p>
                <button onclick="contadorCarrito()">Añadir al carrito</button>
            </div>
        </div>
        <div class="item">
            <figure>
                <img src="https://supermercadocomunal.com/32082-large_default/cafe-sello-rojo-tradicional-125-gr.jpg"
                    alt="Producto">
            </figure>
            <div class="info-producto">
                <h2>Cafe</h2>
                <p class="price">$2000</p>
                <button onclick="contadorCarrito()">Añadir al carrito</button>
            </div>
        </div>

        <div class="item">
            <figure>
                <img src="https://th.bing.com/th/id/OIP.j0Kff_IzZpIHFsQ_pxeKRgHaHa?rs=1&pid=ImgDetMain"
                    alt="Producto">
            </figure>
            <div class="info-producto">
                <h2>Pasta</h2>
                <p class="price">$2000</p>
                <button onclick="contadorCarrito()">Añadir al carrito</button>
            </div>
        </div>
        <div class="item">
            <figure>
                <img src="https://www.hv.com.co/wp-content/uploads/2018/07/Productos-Pastas-San-Remo-Fideo.jpg"
                    alt="Producto">
            </figure>
            <div class="info-producto">
                <h2>Pasta</h2>
                <p class="price">$3000</p>
                <button onclick="contadorCarrito()">Añadir al carrito</button>
            </div>
        </div>
        <div class="item">
            <figure>
                <img src="https://th.bing.com/th/id/OIP.T6gH8HtYfcA-_fu6bcqNWAHaHa?rs=1&pid=ImgDetMain"
                    alt="Producto">
            </figure>
            <div class="info-producto">
                <h2>Harina</h2>
                <p class="price">$2000</p>
                <button onclick="contadorCarrito()">Añadir al carrito</button>
            </div>
        </div>
        <div class="item">
            <figure>
                <img src="https://th.bing.com/th/id/OIP.Tbao-I3AxwxzWcQlb_vtnwHaHa?rs=1&pid=ImgDetMain"
                    alt="Producto">
            </figure>
            <div class="info-producto">
                <h2>Papel Higienico</h2>
                <p class="price">$2000</p>
                <button onclick="contadorCarrito()">Añadir al carrito</button>
            </div>
        </div>
        <div class="item">
            <figure>
                <img src="https://th.bing.com/th/id/R.065d5346cc44a2c66f17ddd40129b504?rik=bEOXcdIKB04cZQ&pid=ImgRaw&r=0"
                    alt="Producto">
            </figure>
            <div class="info-producto">
                <h2>Papel Higienico</h2>
                <p class="price">$2500</p>
                <button onclick="contadorCarrito()">Añadir al carrito</button>
            </div>
        </div>
        <div class="item">
            <figure>
                <img src="https://www.elite.co/assets/uploads/images/a6b44-rollote-grnd.png"
                    alt="Producto">
            </figure>
            <div class="info-producto">
                <h2>Papel Higienico</h2>
                <p class="price">$2000</p>
                <button onclick="contadorCarrito()">Añadir al carrito</button>
            </div>
        </div>
        <div class="item">
            <figure>
                <img src="https://casabestsas.com/wp-content/uploads/2022/11/7702166053076-600x792.jpg"
                    alt="Producto">
            </figure>
            <div class="info-producto">
                <h2>Top Terra</h2>
                <p class="price">$2000</p>
                <button onclick="contadorCarrito()">Añadir al carrito</button>
            </div>
        </div>
        <div class="item">
            <figure>
                <img src="https://th.bing.com/th/id/OIP.8Tz_Jtwjf0qu6NKZYYYQtwHaHa?rs=1&pid=ImgDetMain"
                    alt="Producto">
            </figure>
            <div class="info-producto">
                <h2>Vanish</h2>
                <p class="price">$2500</p>
                <button onclick="contadorCarrito()">Añadir al carrito</button>
            </div>
        </div>
    </div>
    <footer>
        <hr>
        <h5>3213266431 <br>
        themonas.net@miempresa.com <br>
            barrio las americas <br>
        </h5>
    </footer>
    <script src="../pagina/script.js"></script>

</body>

</html>
<!-- carole -->