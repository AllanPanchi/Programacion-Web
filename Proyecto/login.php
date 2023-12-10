<!DOCTYPE html>
<html lang="es">
<style>
    /*
    Colores:
    1 - #1E3295
    2 - #172362
    3 - #001CAA
    4 - #2E334E
    5 - #292A33
    */

    html {
        font-family: 'Ubuntu', sans-serif;
        height: 100%;
        font-size: 16px;
    }

    .body {
        display: flex;
        height: 100%;
        justify-content: center;
        align-items: center;
        background-color: #172362;
        margin: 0;
        padding: 0;
    }

    .article {
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: #fff;
        border-radius: 10px;
        min-width: 400px;
    }

    .marca {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
    }

    .marca__logo {
        width: 75px;
        height: 75px;
        object-fit: cover;
    }

    .marca__titulo {
        font-size: 3rem;
        margin: 0;
        padding: 0;
        margin-left: 20px;
    }

    hr {
        width: 90%;
        height: .5px;
        border: none;
        background-color: #2E334E;
        margin: 10px 0px;
        padding: 0;
    }

    .article__h2 {
        text-align: center;
        margin: 20px;
        padding: 0;
    }

    .form-LogIn {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .form-LogIn__article {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .form-LogIn__h2 {
        margin: 30px;
        padding: 0;
    }

    .form-LogIn__article-section-input,
    .form-LogIn__article-section-label {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 10px;
        padding: 0;
    }

    .form-LogIn__article-section-input {
        font-family: 'Ubuntu', sans-serif;
        text-align: center;
        width: 200px;
        height: 30px;
        border-radius: 0px;
        border: none;
        border-bottom: 1px solid #2E334E;
        outline-style: none;
    }

    .form-LogIn__input {
        font-family: 'Ubuntu', sans-serif;
        transition: all 0.3s ease;
        width: 100px;
        height: 30px;
        border-radius: 5px;
        border: none;
        margin: 20px;
    }

    .form-LogIn__msg {
        font-size: 0.8rem;
    }

    .form-LogIn__input:hover {
        background-color: #2E334E;
        cursor: pointer;
        color: #fff;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <form class="form-LogIn" action="" method="">
            <article class="form-LogIn__article">
                <section class="form-LogIn__article-section">
                    <input class="form-LogIn__article-section-input" placeholder="Usuario" type="text" name="user" id="user" required>
                    <input class="form-LogIn__article-section-input" placeholder="Contraseña"="password" name="pass" id="pass" required>
                </section>
            </article>
            <p class="form-LogIn__msg">No tienes cuenta, registrate <span><a href="registro.html">aquí</a>.</span></p>
            <button class="form-LogIn__input" type="submit">Ingresar</button>
        </form>
    </article>
</body>

</html>