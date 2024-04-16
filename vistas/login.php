<?php

session_start();

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["usuario"]) and !empty($_POST["contraseña"])) {
        $usuario = $_POST["usuario"];
        $contraseña = $_POST["contraseña"];

        $sql = "SELECT * FROM empleados WHERE Nombre='$usuario' AND Contraseña='$contraseña'";
        $result = mysqli_query($conexion, $sql);
        $filas = mysqli_fetch_array($result);


        if ($filas['Id_Roll'] == 1) {
            header("Location: roles/administrador.php");
            exit;
        } else if ($filas['Id_Roll'] == 2) {
            header("Location: roles/cajero.php");
            exit;
        } else {
            // Si el usuario no tiene un rol válido, muestra un mensaje de error
            echo '<div class="alert alert-warning">ACCESO INVÁLIDO</div>';
        }
    }
}
