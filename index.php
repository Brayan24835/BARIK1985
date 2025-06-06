<!-- index.php - Página principal: lista y búsqueda de contactos -->
<?php

// Inicia validación de inicio de sesión
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}
// Termina validación de inicio de sesión

<!DOCTYPE html>
<html lang="es">

<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página web moderna con HTML y CSS">
    <meta name="author" content="Tu Nombre">
    <title>index</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Encabezado -->
    <header>
        <div class="container">
            <h1>Bienvenido a Barik Geans Girl</h1>
            <nav>
                <ul>
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="InfoAutor.html">Acerca del autor</a></li>
                    <li><a href="#servicios">Servicios</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Sección Principal -->
    <section id="inicio" class="section hero">
        <div class="container">
            <h2>Lo mejor en Mezclilla para los pequeñines de la casa</h2>
            <p>Pantalones, Faldas, Shorts y vestidos .</p>
            <a href="Productos.html" class="btn">Ver Productos</a>
        </div>
    </section>

    <!-- Sección Acerca de -->
    <section id="acerca" class="section">
        <div class="container">
            <h2>¿Quiénes Somos?</h2>
            <p>Somos uan empresa fundada hace mas de 20 por el señor Geber Garduño Escobar quien dejo todo su conocimento a sus hijos para continuar con su labor..</p>
            <div class="grid">
                <div class="card">
                    <h3>Ubicacion</h3>
                    <p>Calle miguel hidalgo #4 Colonia centro </p>
                </div>
                <div class="card">
                    <h3>Pedidos </h3>
                    <p>+52 445-139-8193</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Servicios -->
    <section id="servicios" class="section">
        <div class="container">
            <h2>Nuestros Servicios</h2>
            <div class="grid">
                <div class="card">
                    <h3> Niña</h3>
                    <p>Todo en pantalon de mezclilla para niña.</p>
                </div>
                <div class="card">
                    <h3> Niño</h3>
                    <p>Todo en mezclilla para niño.</p>
                </div>
                <div class="card">
                    <h3> Novedades</h3>
                    <p>Lo mas reciente en nuestras Tiendas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Contacto -->
    <section id="contacto" class="section contacto">
        <div class="container">
            <h2>Contacto</h2>
            <form action="enviar.php" method="POST">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>

                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" rows="4"></textarea>

                <button type="submit">Enviar</button>
            </form>
        </div>
    </section>

    <!-- Pie de Página -->
    <footer>
        <div class="container">
            <p>&copy; 2025 Barik.</p>
        </div>
    </footer>

</body>

</html>
