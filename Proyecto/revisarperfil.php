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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <title>Mi Perfil</title>
    <style>
        * {
            font-family: 'Ubuntu', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #172362;
        }

        .header {
            position: fixed;
            top: 0;
            z-index: 150;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #fff;
            width: 100%;
            height: 60px;
        }

        .header__logo {
            width: 50px;
            height: 50px;
            margin-right: 10px;
        }

        .nav {
            position: fixed;
            top: 60px;
            z-index: 50;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #292A33;
            width: 100%;
            height: 60px;
        }

        .nav__ul {
            display: flex;
            flex-direction: row;
            justify-content: start;
            align-items: center;
            list-style: none;
            height: 100%;
        }

        .nav__ul-li a {
            text-decoration: none;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            color: #fff;
            font-size: 18px;
            padding: 10px 10px;
            padding-bottom: 20px;
        }

        .nav__ul-li {
            margin-left: 20px;
        }

        .nav__ul-li a:hover {
            background-color: #172362;
        }

        .nav__ul-li--sesion {
            margin-left: 0px;
            margin-right: 20px;
        }

        .nav__ul-li--sesion a {
            transition: all 0.3s ease-out;
            background-color: #fff;
            color: #292A33;
            font-size: 18px;
            padding: 10px 10px;
            border-radius: 5px;
        }

        .nav__ul-li--sesion a:hover {
            color: #fff;
            background-color: #172362;
        }

        .contenedor {
            margin-top: 170px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
            height: 100vh;
        }

        .contenedor__contenido {
            z-index: 1;
            display: flex;
            align-items: center;
            flex-direction: column;
            margin-bottom: 50px;
            border-radius: 15px;
            background-color: #fff;
            width: calc(100% - 100px);
            height: 100%;
        }

        .h1__perfil {
            padding: 20px 20px;
            width: 100%;
            font-size: 36px;
            text-align: center;
        }

        .contenedor__contenido-cosas {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            width: calc(100% - 100px);
            height: calc(100% - 100px);
        }

        .contenedor__contenido-cosas-imagen{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 500px;
            height: 100%;
            object-fit: cover;
        }

        .pie {
            z-index: 100;
            display: flex;
            align-items: center;
            background-color: #292A33;
            width: 100%;
            height: 60px;
        }

        .pie__copyright {
            color: #fff;
            margin-left: 10px;
        }
    </style>
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