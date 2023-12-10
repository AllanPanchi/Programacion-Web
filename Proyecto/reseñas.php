<?php
function crearArticulos()
{
    $random = rand(1, 10);
    for ($i = 0; $i < $random; $i++) {
        echo '<article class="contenedor__subcontenido-right-hijo-post">
                            <img src="./Images/default.jpeg" width="400" height="200">
                            <h1>Titulo</h1>
                            <h2>Fecha</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste ea perferendis unde illum dolor ipsa!</p>
                            <a href="#">Leer más ...</a>
                        </article>';
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/reseñas.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <title>Reseñas</title>
</head>

<body>
    <header class="header">
        <img class="header__logo" src="Images/logo.png">
        <h1 class="header__titulo">GameLib</h1>
    </header>
    <nav class="nav">
        <ul class="nav__ul">
            <li class="nav__ul-li"><a href="index.php">Inicio</a></li>
            <li class="nav__ul-li"><a href="wallpapers.php">Wallpapers</a></li>
            <li class="nav__ul-li"><a href="reseñas.php">Reseñas</a></li>
        </ul>
        <ul class="nav__ul nav__ul--sesion">
            <li class="nav__ul-li nav__ul-li--sesion"><a href="login.php">Iniciar Sesión</a></li>
            <li class="nav__ul-li nav__ul-li--sesion"><a href="registro.php">Registrarse</a></li>
        </ul>
    </nav>
    <section class="contenedor">
        <section class="contenedor__contenido">
            <h1 class="contenedor__contenido-titulo">Reseñas</h1>
            <hr class="hr-top">
            <section class="contenedor__subcontenido">
                <section class="contenedor__subcontenido-left">
                    <h1>Categorias</h1>
                    <section>
                        <ul class="categorias">
                            <li><a href="#">Shooter</a></li>
                            <li><a href="#">RPG</a></li>
                            <li><a href="#">Aventura</a></li>
                            <li><a href="#">Estrategia</a></li>
                            <li><a href="#">Deportes</a></li>
                            <li><a href="#">Simulación</a></li>
                            <li><a href="#">Lucha</a></li>
                            <li><a href="#">Plataformas</a></li>
                            <li><a href="#">Puzzle</a></li>
                            <li><a href="#">Musical</a></li>
                            <li><a href="#">Otros</a></li>
                        </ul>
                    </section>
                </section>
                <hr class="hr-lateral">
                <section class="contenedor__subcontenido-right">
                    <section class="contenedor__subcontenido-right-hijo">
                        <?php
                        crearArticulos();
                        ?>
                    </section>
                </section>
            </section>
        </section>
    </section>
    <footer class="footer">
        <p class="footer__copyright">&copy GameLib 2023</p>
    </footer>
</body>

</html>