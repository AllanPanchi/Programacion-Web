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
    $ruta_destino = "uploads/" . basename($_FILES["foto_perfil"]["name"]);
    move_uploaded_file($_FILES["foto_perfil"]["tmp_name"], $ruta_destino);

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
    $_SESSION["rutaImagen"] = $ruta_destino;

    header("Location: $redirect_to");
    exit();
?>
