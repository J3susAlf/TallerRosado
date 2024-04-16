<?php
    if (!empty($_POST["aceptar8"])) {
        if (!empty($_POST["Nombre"]) && !empty($_POST["Apellido"]) && !empty($_POST["Telefono"]) && !empty($_POST["Correo"]) && !empty($_POST["Salario"]) && !empty($_POST["Direccion"])  && !empty($_POST["Contraseña"]) && !empty($_POST["Roll"])) {
            $Nombre = $_POST["Nombre"];
            $Apellido = $_POST["Apellido"];
            $Telefono = $_POST["Telefono"];
            $Correo = $_POST["Correo"];
            $Salario = $_POST["Salario"];
            $Direccion = $_POST["Direccion"];
            $Contraseña = $_POST["Contraseña"];
            $roll = $_POST["Roll"];
            // Obtener el ID del Roll seleccionado
            $sql_roll = $conexion->query("SELECT Id_Roll FROM Roles WHERE Tipo = '$roll'");
            if ($sql_roll->num_rows > 0) {
                $row = $sql_roll->fetch_assoc();
                $ID_Roll = $row["Id_Roll"];
                // Insertar el nuevo empleado con la llave foránea del Roll seleccionado
                $sql = $conexion->query("INSERT INTO empleados(Nombre, Apellido, Telefono, Correo, Salario, Direccion, Contraseña, ID_Roll) 
                    VALUES ('$Nombre','$Apellido','$Telefono','$Correo','$Salario','$Direccion','$Contraseña','$ID_Roll')");
                if ($sql == 1) {
                    echo '<div class="alert alert-warning" role="alert">REGISTRO EXITOSO</div>';
                } else {
                    echo '<div class="alert alert-warning" role="alert">EMPLEADO NO REGISTRADO</div>';
                }
            } else {
                echo '<div class="alert alert-warning" role="alert">ROLL NO ENCONTRADO</div>';
            }
        } else {
            echo '<div class="alert alert-danger" role="alert">RELLENAR LOS CAMPOS</div>';
        }
    } 
?>
