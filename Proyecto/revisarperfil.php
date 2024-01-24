<?php

session_start();

function mostrarImagen()
{
    $ruta = $_SESSION["rutaImagen"];
    echo "<img class='contenedor__contenido-cosas-imagen' src='$ruta'>";
}

function mostrarDatos()
{
    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION["apellido"];
    $correo = $_SESSION["correo"];
    $telefono = $_SESSION["telefono"];
    $fechaNacimiento = $_SESSION["fechaNacimiento"];
    $usuario = $_SESSION["usuario"];
    $contrasena = $_SESSION["contrasena"];
    $direccion = $_SESSION["direccion"];
    $genero = $_SESSION["genero"];

    echo "<p>Nombre: $nombre</p>";
    echo "<p>Apellido: $apellido</p>";
    echo "<p>Correo: $correo</p>";
    echo "<p>Telefono: $telefono</p>";
    echo "<p>Fecha de Nacimiento: $fechaNacimiento</p>";
    echo "<p>Usuario: $usuario</p>";
    echo "<p>Contraseña: $contrasena</p>";
    echo "<p>Dirección: $direccion</p>";
    echo "<p>Género: $genero</p>";
}

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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/revisarperfil.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <title>Mi Perfil</title>
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

    <section class="contenedor">
        <section class="contenedor__contenido">
            <h1 class="h1__perfil">Perfil</h1>
            <section class="contenedor__contenido-cosas">
                <section>
                    <?php
                    mostrarImagen();
                    ?>
                </section>
                <section class="contenedor__contenido-cosas-datos">
                    <?php
                    mostrarDatos();
                    ?>
                </section>
            </section>
        </section>
    </section>
    <footer class="pie">
        <p class="pie__copyright">&copy GameLib 2023</p>
    </footer>
</body>

</html>