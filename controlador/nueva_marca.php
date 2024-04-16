<?php
    if (!empty($_POST["aceptar6"])) {
        if (!empty($_POST["MarcaP"])) {
            $Marca = $_POST["MarcaP"];
        $sql = $conexion->query("insert into marca (Nombre_de_Marca) values ('$Marca')");
        if ($sql ==1) {
            echo '<div class="alert alert-warning" role="alert">REGISTRO EXITOSO</div>';
            //header("location:../registro_vista.php");
        }else{
            echo '<div class="alert alert-warning" role="alert">REGISTRO FALLIDO</div>';
        }
        }else{
            echo '<div class="alert alert-danger" role="alert">RELLENAR LOS CAMPOS</div>';
        }
       
    }
?>