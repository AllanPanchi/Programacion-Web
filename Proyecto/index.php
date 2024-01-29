<?php
session_start();

function esUsuario()
{
    if ($_SESSION) {
        echo '<ul class="nav__ul nav__ul--sesion">';
        echo '<li class="nav__ul-li nav__ul-li--sesion"><a href="revisarperfil.php">Perfil</a></li>';
        echo '<li class="nav__ul-li nav__ul-li--sesion"><a href="cerrarSesion.php">Cerrar Sesión</a></li>';
        echo '</ul>';
    } else {
        echo '<ul class="nav__ul nav__ul--sesion">';
        echo '<li class="nav__ul-li nav__ul-li--sesion"><a href="login.php">Iniciar Sesión</a></li>';
        echo '<li class="nav__ul-li nav__ul-li--sesion"><a href="registro.php">Registrarse</a></li>';
        echo '</ul>';
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <title>GameLib</title>
</head>

<body>
    <header class="header">
        <img class="header__logo" src="Images/logo.png">
        <h1 class="header__titulo"><span>GameLib</span></h1>
    </header>
    <nav class="nav">
        <ul class="nav__ul">
            <li class="nav__ul-li"><a href="index.php">Inicio</a></li>
            <li class="nav__ul-li"><a href="reseñas.php">Reseñas</a></li>
        </ul>
        <?php
        esUsuario();
        ?>
    </nav>
    <section class="contenedor">
        <section class="contenedor__contenido">
            <h2 class="contenedor__contenido-titulo">Conoce</h2>
            <p class="contenedor__contenido-parrafo">Navega a travez de los menus para encontrar reseñas de los mejores juegos de la actualidad.</p>
            <img class="contenedor__contenido-img" src="Images/magnifier.png">
        </section>
        <section class="contenedor__contenido">
            <h2 class="contenedor__contenido-titulo">Comparte</h2>
            <p class="contenedor__contenido-parrafo">Comparte tus reseñas favoritos con tus amigos.</p>
            <img class="contenedor__contenido-img" src="Images/share.png">
        </section>
        <section class="contenedor__contenido">
            <h2 class="contenedor__contenido-titulo">Publica</h2>
            <p class="contenedor__contenido-parrafo">Publica tus reseñas favoritos para que otros usuarios
                puedan verlos.</p>
            <img class="contenedor__contenido-img" src="Images/upload.png">
        </section>
    </section>
    <aside class="aside">
        <p class="aside__eslogan">Proyecta tu filosofia</p>
    </aside>
    <footer class="footer">
        <p class="footer__copyright">&copy GameLib 2023</p>
    </footer>
</body>

</html>