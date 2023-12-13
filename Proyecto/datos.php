<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nombre = $_POST["campoNombre"];
        $apellido = $_POST["campoApellido"];
        $correo = $_POST["campoEmail"];
        $telefono = $_POST["campoTelefono"];
        $fechaNacimiento = $_POST["campoFechaNacimiento"];
        $usuario = $_POST["campoUsuario"];
        $contrasena = $_POST["campoContrasena"];
        $direccion = $_POST["campoDireccion"];
        $genero = $_POST["campoGenero"];



        $redirect_to = isset($_POST['redirect_to']) ? $_POST['redirect_to'] : 'login.php';       
        session_start();
        $_SESSION["nombre"] = $nombre;
        $_SESSION["apellido"] = $apellido;
        $_SESSION["correo"] = $correo;
        $_SESSION["telefono"] = $telefono;
        $_SESSION["fechaNacimiento"] = $fechaNacimiento;
        $_SESSION["usuario"] = $usuario;
        $_SESSION["contrasena"] = $contrasena;
        $_SESSION["direccion"] = $direccion;
        $_SESSION["genero"] = $genero;

        header("Location: $redirect_to");
        exit();
    ?>
</body>
</html>