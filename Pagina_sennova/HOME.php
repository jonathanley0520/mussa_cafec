<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Evento Especial</title>
</head>
<body>
    
    <header>
        <nav>
            <div class="logo">
                <img src="./Imagenes/Logo_SENNA.png" alt="Logo de la institución">
            </div>
            <div class="header-content">
                <h1>Evento Institucional</h1>
                <ul class="nav-menu">
                    <li><a href="/Home.php">Inicio</a></li>
                    <li><a href="#">Contactanos</a></li>
                    <li><a href="./Login.php">Iniciar Sesión</a></li>
                    <li><a href="./administrador.php">ADMINISTRADOR</a></li>
                </ul>
            </div>
        </nav>
    </header>
    
    <main>
        <section class="evento-info">
            <h2>Sobre el Evento</h2>
            <p>
                ¡Te invitamos cordialmente a nuestro evento institucional especial! Únete a nosotros para una jornada llena de aprendizaje, interacción y diversión. A continuación, encontrarás más detalles sobre el evento y cómo inscribirte.
            </p>
            <p>
                ¡Esperamos verte allí y compartir momentos inolvidables!
            </p>
        </section>
        
        <section class="galeria">
            <img class="imagen-galeria" src="Imagenes/111.png" alt="Imagen 1">
            <img class="imagen-galeria" src="Imagenes/3.png" alt="Imagen 2">
            <img class="imagen-galeria" src="Imagenes/5.png" alt="Imagen 3">
            <img class="imagen-galeria" src="Imagenes/10.png" alt="Imagen 4">
            <img class="imagen-galeria" src="Imagenes/20.png" alt="Imagen 5">
            <img class="imagen-galeria" src="Imagenes/46.png" alt="Imagen 6">
            <img class="imagen-galeria" src="Imagenes/55.png" alt="Imagen 7">
            <img class="imagen-galeria" src="Imagenes/67.png" alt="Imagen 8">
            <img class="imagen-galeria" src="Imagenes/89.png" alt="Imagen 9">
            <img class="imagen-galeria" src="Imagenes/99.png" alt="Imagen 10">
            <img class="imagen-galeria" src="Imagenes/108.png" alt="Imagen 11">
            <img class="imagen-galeria" src="Imagenes/109.png" alt="Imagen 12">
            <img class="imagen-galeria" src="Imagenes/131.png" alt="Imagen 13">
        </section>
        
        <section class="botones-horizontales">
            <ul>
                <li><a href="Formulario_ponente.php">PONENTE</a></li>
                <li><a href="Formulario_poster.php">POSTER</a></li>
                <li><a href="Formulario_feria.php">FERIA EMPRESARIAL</a></li>
                <li><a href="Formulario_robotica.php">TORNEO DE ROBÓTICA</a></li>
            </ul>
        </section>
    </main>
    
</body>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #ffffff;
    color: #333;
}

header {
    background-color: #39a900;
    color: #ffffff;
    text-align: center;
    padding: 10px;
}

.header-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-bottom: 10px;
}

.logo img {
    max-width: 100px;
    vertical-align: middle;
}

h1 {
    font-size: 24px;
    margin-top: 0;
}

.nav-menu {
    list-style: none;
    display: flex;
    margin: 0;
    padding: 0;
    justify-content: center;
}

.nav-menu li {
    margin-right: 20px;
}

.nav-menu a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    font-size: 18px;
}
.botones-horizontales {
    text-align: center;
    margin: 20px 0;
}

.botones-horizontales ul {
    list-style: none;
    padding: 0;
    display: flex;
    justify-content: center;
}

.botones-horizontales li {
    margin-right: 20px;
}

.botones-horizontales a {
    text-decoration: none;
    color: #fff;
    font-size: 20px;
    padding: 10px 20px;
    background-color: #39a900;
    border-radius: 5px;
}
.logo img {
    max-width: 200px;
    vertical-align: middle;
}

h1 {
    font-size: 24px;
    margin-top: 10px;
}
h2{
    text-align: center;
}
.galeria {
    text-align: center;
    max-width: 600px;
    margin: 20px auto;
}

.imagen-galeria {
    max-width: 100%;
    height: auto;
    display: none;
}
.evento-info {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f5f5f5;
    border-radius: 5px;
}

.evento-info h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

.evento-info p {
    font-size: 16px;
    margin-bottom: 10px;
}

/* Botón de inscripción */
.boton-inscripcion {
    display: block;
    margin: 20px auto;
    padding: 10px 20px;
    background-color: #39a900;
    color: #ffffff;
    border: none;
    border-radius: 5px;
    font-size: 18px;
    cursor: pointer;
    
}
.boton-inscripcion a{
    text-decoration: none;
    color:#ffffff
}
@keyframes cambiarImagen {
    0%, 100% {
        opacity: 0;
    }
    25%, 75% {
        opacity: 1;
    }
}
</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
    const imagenes = document.querySelectorAll(".imagen-galeria");
    let index = 0;

    function cambiarImagen() {
        imagenes[index].style.display = "none";
        index = (index + 1) % imagenes.length;
        imagenes[index].style.display = "block";
    }

    setInterval(cambiarImagen, 2000);
});
</script>
</html>

