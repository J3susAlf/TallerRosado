<?php
    if (!empty($_POST["aceptar9"])) {
        if (!empty($_POST["NombreP"])) {
            $Nombre = $_POST["NombreP"];

        $sql = $conexion->query("INSERT into productos (Nombre) values ('$Nombre')");
        if ($sql ==1) {
            echo '<div class="alert alert-warning" role="alert">REGISTRO EXITOSO</div>';
           // header("location:../registro_vista.php");
        }else{
            echo '<div class="alert alert-warning" role="alert">REGISTRO FALLIDO</div>';
        }
        }else{
            echo '<div class="alert alert-danger" role="alert">RELLENAR LOS CAMPOS</div>';
        }
       
    }
?>