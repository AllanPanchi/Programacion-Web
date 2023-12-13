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
    <link rel="stylesheet" href="./style/reseña.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <title>Titulo de la reseña</title>
</head>

<body>
    <header class="header">
        <img class="header__logo" src="Images/logo.png">
        <h1 class="header__titulo">GameLib</h1>
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

    <section class="container">
        <section class="container__resena">
            <h2 class="container__resena-titulo">Titulo de la reseña</h2>
            <img class="container__resena-img" src="Images/default.jpeg" width="100" height="100">
            <p class="container__resena-parrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam
                voluptatum
                voluptatibus, quibusdam, quia, quos voluptas quod quas voluptatem doloribus quae fugiat. Quisquam
                voluptatum
                voluptatibus, quibusdam, quia, quos voluptas quod quas voluptatem doloribus quae fugiat. Quisquam
                voluptatum
                voluptatibus, quibusdam, quia, quos voluptas quod quas voluptatem doloribus quae fugiat. Quisquam
                voluptatum
                voluptatibus, quibusdam, quia, quos voluptas quod quas voluptatem doloribus quae fugiat. Quisquam
                voluptatum
                voluptatibus, quibusdam, quia, quos voluptas quod quas voluptatem doloribus quae fugiat. Quisquam
                voluptatum
                voluptatibus, quibusdam, quia, quos voluptas quod quas voluptatem doloribus quae fugiat. Quisquam
                voluptatum
                voluptatibus, quibusdam, quia, quos voluptas quod quas voluptatem doloribus quae fugiat. Quisquam
                voluptatum
                voluptatibus, quibusdam, quia, quos voluptas quod quas voluptatem doloribus quae fugiat. Quisquam
                voluptatum
                voluptatibus, quibusdam, quia, quos voluptas quod quas voluptatem doloribus quae fugiat.</p>

            <p class="container__resena-parrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam
                voluptatum
                voluptatibus, quibusdam, quia, quos voluptas quod quas voluptatem doloribus quae fugiat.</p>
            <h3 class="container__resena-subtitulo">Subtitulo</h3>
            <p class="container__resena-parrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam
                voluptatum </p>

            <section class="container__resena-info">
                <h6 class="container__resena-h6 container__resena-autor">Autor</h6>
                <h6 class="container__resena-h6 container__resena-fecha">Fecha (YYYY-MM-DD)</h6>
            </section>
        </section>
    </section>

    <footer class="footer">
        <p class="footer__copyright">&copy GameLib 2023</p>
    </footer>
</body>

</html>