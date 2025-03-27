<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escuela El Perejil</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="scripts.js" defer></script>
</head>
<body>
    <div class="background-image">
        <div class="button-container">
            <button class="access-button" id="accessButton">Acceder</button>
            <a href="nosotros.html" class="about-button">Acerca de Nosotros</a> 
            <div class="dropdown" id="dropdownMenu">
                <a href="login.php">Estudiante</a>
                <a href="login.php">Administrador</a>
                <a href="login.php?type=profesor">Profesor</a>
            </div>
        </div>

        <!-- Contenedor para los carruseles -->
        <div class="carousel-container">
            <!-- Primer carrusel -->
            <div class="carousel" id="carousel1"></div>
            
            <!-- Segundo carrusel -->
            <div class="carousel" id="carousel2"></div>
            
            <!-- Tercer carrusel -->
            <div class="carousel" id="carousel3"></div>
        </div>

        <div class="contact-bar">
            <p class="text-lg"></p>
            <a href="https://wa.me/+584144433098" target="_blank">WhatsApp</a>
            <a href="https://www.instagram.com/elperejilescuelagastronomica/?hl=es" target="_blank">Instagram</a>
            <a href="CamScanner 12-03-2025 15.10.pdf" download class="pensum-link">Pensum</a> <!-- Enlace para descargar el pensum -->
        </div>
    </div>
</body>
</html>