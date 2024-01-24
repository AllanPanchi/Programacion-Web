<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <title>Log In</title>
</head>

<body class="body">
    <article class="article">
        <section class="marca">
            <img class="marca__logo" src="Images/logo.png">
            <h1 class="marca__titulo">GameLib</h1>
        </section>
        <hr>
        <h2 class="article__h2">Log In</h2>
        <form class="form-LogIn" action="index.php" method="post">
            <article class="form-LogIn__article">
                <section class="form-LogIn__article-section">
                    <input class="form-LogIn__article-section-input" placeholder="Usuario" type="text" name="user" id="user" required>
                    <input class="form-LogIn__article-section-input" placeholder="Contraseña" type="password" name="pass" id="pass" required>
                </section>
            </article>
            <p class="form-LogIn__msg">No tienes cuenta, registrate <span><a href="registro.php">aquí</a>.</span></p>
            <button class="form-LogIn__input" type="submit">Ingresar</button>
        </form>
    </article>
</body>

</html>