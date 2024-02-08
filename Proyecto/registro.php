<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./style/registro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <title>Registrate</title>
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
            <form action="datos.php" method="POST" enctype="multipart/form-data">
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
                    <input type="password" name="campoContrasena" id="contrasena" placeholder="Contraseña" required>
                </section>  
                <section class="campo">
                    <label for="fechaNacimiento">
                        Fecha de Nacimiento
                    </label>
                    <input type="date" name="campoFechaNacimiento" id="fechaNacimiento">
                </section>
                <section class="campo"> 
                    <textarea placeholder="Dirección" rows="4"  id="direccion" name="campoDireccion"></textarea>
                </section>
                <section class="campo">
                    <label for="genero">
                        Género:
                    </label>
                    <select name="campoGenero" id="genero" required>
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
                    <input class="input_archivo" type="file" name="foto_perfil" id="foto_perfil">
                </section>
                <a href="login.php">¿Ya tienes cuenta?</a>
                <input class="btn_registrar" type="submit" name="guardar" value="Registrarse">
                <input type="hidden" name="redirect_to" value="login.php">  
            </form>
        </section>
    </section>
</body>
</html>