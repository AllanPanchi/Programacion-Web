<!DOCTYPE html>
<!-- 
    1 - #1E3295
    2 - #172362
    3 - #001CAA
    4 - #2E334E
    5 - #292A33 
-->
<html>
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <title>Registrate</title>
    <style>
        *{
            font-family: 'Ubuntu', sans-serif;
            box-sizing: border-box;
        }
        *:focus{
            outline: none;
        }
        body{
            background-color: #172362;
            padding: 50px;
        }
        .formulario{
            margin: 20px auto;
            width: 300px;
            text-align: center;
        }
        .pantalla_IniciarSesion{
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }
        .titulo_pantalla{
            text-align: center;
            color: #000;
            display: flex;
            width: 100%;
            align-items: center;
            justify-content: space-evenly;
        }
        .marca__logo{
            width: 75px;
            height: 75px;
        }
        .marca__titulo{
            font-size: 30px;
            font-weight: 700;
            margin: 0;
        }
        .campo{
            margin-bottom: 10px;
        }
        .btn_registrar{
            background-color: #3498DB;
            border: none;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
            font-weight: 200;
            margin-top: 20px;
            padding: 10px 0;
            width: 100%;
            transition: background-color .5s;
        }
        h1{
            text-align: center;
        }
        label{
            color: #757575;
        }
        input {
            text-align: center;
            background-color: #ECF0F1;
            border: 2px solid transparent;
            border-radius: 3px;
            font-size: 16px;
            font-weight: 200;
            padding: 10px 0;
            width: 250px;
            transition: border .5s;
        }
        input:focus {
            border: 2px solid #3498DB;
            box-shadow: none;
        }
        textarea{
            background-color: #ECF0F1;
            border: 2px solid transparent;
            border-radius: 3px;
            font-size: 16px;
            font-weight: 200;
            padding: 10px 0;
            width: 250px;
            transition: border .5s;
            resize: none;
            text-align: center;
        }
        textarea:focus{
            border: 2px solid #3498DB;
            box-shadow: none;
        }
        select{
            text-align: center;
            background-color: #ECF0F1;
            border: 2px solid transparent;
            border-radius: 3px;
            font-size: 16px;
            font-weight: 200;
            padding: 10px 0;
            width: 250px;
            transition: border .5s;
        }
        a{
            color: #777;
            font-size: 14px;
            text-decoration: none;
        }
        a:hover{
            text-decoration: underline;
            color:#3498DB; 
        }
    </style>
</head>
<body>
    <section class="formulario">
        <section class="pantalla_IniciarSesion">
            <section class="titulo_pantalla">
                <img class="marca__logo" src="Images/logo.png">
                <h1 class="marca__titulo">GameLib</h1>
            </section>
            <hr>
            <h1>REGISTRARSE</h1>
            <form action=datos.php method="POST">
                <section class="campo">                    
                    <input type="text" name="campoNombre" id="nombre" placeholder="Nombre">
                </section>
                <section class="campo"> 
                    <input type="text" name="campoApellido" id="apellido" placeholder="Apellido">
                </section>
                <section class="campo"> 
                    <input type="email" name="campoEmail" id="email" placeholder="E-mail">
                </section>
                <section class="campo"> 
                    <input type="tel" name="campoTelefono" id="telefono" placeholder="Telefono">
                </section>
                <section class="campo">
                    <input type="text" name="campoUsuario" id="usuario" placeholder="Usuario" required>
                </section>
                <section class="campo">
                    <input type="text" name="campoContrasena" id="contrasena" placeholder="Contraseña" required>
                </section>
                <section class="campo">
                    <input type="text" name="campoConfirmarContrasena" id="confirmarContrasena" placeholder="Confirmar Contraseña" required>
                </section>    
                <section class="campo">
                    <label for="fechaNacimiento">
                        Fecha de Nacimiento
                    </label>
                    <input type="date" name="campoFechaNacimiento" id="fechaNacimiento">
                </section>
                <section class="campo"> 
                    <textarea placeholder="Dirección" rows="4"  id="direccion" name="campoDireccion" ></textarea>
                </section>
                <section class="campo">
                    <label for="genero">
                        Género:
                    </label>
                    <select name="campoGenero" id="genero">
                        <option value="masculino">
                            Masculino
                        </option>
                        <option value="femenino">
                            Femenino
                        </option>
                        <option value="otro">
                            Otro
                        </option>
                    </select>
                </section>
                <section class="campo">
                    <label for="fotoPerfil">
                        Sube tu foto de perfil:
                    </label>
                    <input class="input_archivo" type="file" id="foto_perfil">
                </section>
                <a href="login.php">¿Ya tienes cuenta?</a>
                <input class="btn_registrar" type="submit" name="guardar" value="Registrarse">
                <input type="hidden" name="redirect_to" value="login.php">  
            </form>
        </section>
    </section>
</body>
</html>