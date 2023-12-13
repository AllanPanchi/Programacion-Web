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
        *{
            font-family: 'Ubuntu', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .header__logo {
            width: 50px;
            height: 50px;
            margin-right: 10px;
        }
        .contenedor{
            margin-top: 60px;
            top: 120px;
            bottom: 0;
            z-index: 10;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
            height: 100vh;
        }
        .contenedor__contenido{
            z-index: 1;
            display: flex;
            align-items: center;
            flex-direction: column;
            margin-top: 50px;
            margin-bottom: 50px;
            border-radius: 15px;
            background-color: #fff;
            width: calc(100% - 100px);
            height: 100%;
        }
        .h1__perfil{
            padding: 20px 20px;
            width: 100%;
            font-size: 36px;
            text-align: center;
        }
        .contenedor__contenido-cosas{
            display: flex;
            align-items: center;
            flex-direction: row;
            width: 100%;
            height: 100%;
        }
        .contenedor__contenido-cosas-imagen{
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30%;
            height: 100%;
        }
        .contenedor__contenido-cosas-datos{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            width: 70%;
            height: 100%;
        }
        .pie{
            z-index: 100;
            display: flex;
            align-items: center;
            background-color: #292A33;
            width: 100%;
            height: 60px;
        }
        .pie__copyright{
            color: #fff;
            margin-left: 10px;
        }
        body{
            background-color: #172362;
        }
        header{
            z-index: 150;
            position: fixed;
            top: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #fff;
            width: 100%;
            height: 60px;
        }
    </style>
</head>
<body>
    <header>
        <img class="header__logo" src="Images/logo.png">
        <h1 class="header__titulo">GameLib</h1>
    </header>
    <section class="contenedor">
        <section class="contenedor__contenido">
            <h1 class="h1__perfil">Perfil</h1>
            <section class="contenedor__contenido-cosas">
                <section class="contenedor__contenido-cosas-imagen">  
                </section>
                <section class="contenedor__contenido-cosas-datos">
                <?php
                session_start();

                if (isset($_SESSION['nombre'])) {
                    $nombre = $_SESSION['nombre'];
                    $apellido = $_SESSION["apellido"];
                    $correo = $_SESSION["correo"];
                    $telefono = $_SESSION["telefono"];
                    $fechaNacimiento = $_SESSION["fechaNacimiento"];
                    $usuario = $_SESSION["usuario"];
                    $contrasena = $_SESSION["contrasena"];
                    $direccion = $_SESSION["direccion"];
                    $genero = $_SESSION["genero"];

                    echo "Nombre: $nombre";
                    echo "<br>";
                    echo "Apellido: $apellido";
                    echo "<br>";
                    echo "Correo: $correo";
                    echo "<br>";
                    echo "Telefono: $telefono";
                    echo "<br>";
                    echo "Fecha de Nacimiento: $fechaNacimiento";
                    echo "<br>";
                    echo "Usuario: $usuario";
                    echo "<br>";
                    echo "Contraseña: $contrasena";
                    echo "<br>";
                    echo "Direccion: $direccion";
                    echo "<br>";
                    echo "Genero: $genero";
                    
                } else {
                    echo "No hay datos para mostrar.";
                }
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