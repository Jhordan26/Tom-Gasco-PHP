<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tom Gasco DJ</title>
    <!-- Enlaza tus archivos CSS aquí -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
</head>
<body>
    <!-- Barra de Navegación -->
    <header>
        <nav class="nav">
            <a href="http://localhost/Proyecto_TomGasco/">
                <div class="logo">
                    <img src="images/logo.png" alt="Tom Gasco Dj">
                </div>
            </a>

            <!-- Enlaces de Navegación -->
            <ul class="nav-links">
                <li><a href="#samples">Muestras</a></li>
                <li><a href="#about">Acerca de</a></li>
                <li><a href="#login">Iniciar Sesión</a></li>
                <li><a href="#cart">Carrito</a></li>
                <li><a href="#admin">Admin</a></li>
            </ul>
        </nav>
    </header>

    <!-- Muestras de Samples -->
    <section id="samples">
        <h2>Muestras de Samples</h2>
        <div class="sample-cards">
            <div class="sample-card">
                <h3>Muestra 1</h3>
                <p>Descripción de la primera muestra de sample.</p>
                <img src="images/ab67616d0000b27303461d81f7ffbc6a5e4ebd6a.jpeg" alt="Muestra 1">
                <audio controls>
                    <source src="samples/videoplayback.mp3" type="audio/mpeg">
                </audio>
            </div>
            <div class="sample-card">
                <h3>Muestra 2</h3>
                <p>Descripción de la segunda muestra de sample.</p>
                <img src="images/ab67616d0000b27303461d81f7ffbc6a5e4ebd6a.jpeg" alt="Muestra 2">
                <audio controls>
                    <source src="samples/videoplayback (1).mp3" type="audio/mpeg">
                </audio>
            </div>
        </div>
        <!-- Agregar más muestras aquí -->
    </section>

    <!-- Información de Tom Gasco -->
    <section id="about">
        <h2>Acerca de Tom Gasco</h2>
        <!-- Agrega información sobre Tom Gasco y su contacto -->
    </section>

    <!-- Inicio de Sesión -->
    <section id="login">
        <h2>Iniciar Sesión</h2>
        <!-- Implementa el inicio de sesión con Google u otras plataformas -->
    </section>

    <!-- Carrito de Compras -->
    <section id="cart">
        <h2>Carrito de Compras</h2>
        <!-- Implementa el carrito de compras aquí -->
    </section>

    <!-- Panel de Administrador -->
    <section id="admin">
        <h2>Panel de Administrador</h2>
        <!-- Para que Tom Gasco pueda subir canciones -->
    </section>

    <!-- Enlace a tu archivo JavaScript al final del cuerpo para acelerar la carga de la página -->
    <script src="js/main.js"></script>
</body>
</html>
