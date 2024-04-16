<?php
if (isset($_POST["btnregistrar2"])) {
    $id = $_POST["id"];
    $Nombre = $_POST["Nombre"];
    $Apellido = $_POST["Apellido"];
    $Telefono = $_POST["Telefono"];
    $Correo = $_POST["Correo"];
    $Salario = $_POST["Salario"];
    $Direccion = $_POST["Direccion"];
    $Contraseña = $_POST["Contraseña"];
    $Roll = $_POST["Roll"];

    $consultaTotalRoles = $conexion->query("SELECT COUNT(*) as total_roles FROM roles");
    $resultadoTotalRoles = $consultaTotalRoles->fetch_assoc();
    $totalRoles = $resultadoTotalRoles["total_roles"];

    // Verificar la existencia del rol en la tabla "rol" y que $Roll sea menor o igual al total de roles
    $consultaExistenciaRol = $conexion->query("SELECT COUNT(*) as existe FROM roles WHERE Id_Roll = $Roll");
    $resultadoExistenciaRol = $consultaExistenciaRol->fetch_assoc();

    if ($resultadoExistenciaRol["existe"] > 0 && $Roll <= $totalRoles) {
        // El rol existe y $Roll es válido, puedes proceder con la actualización
        $sql = $conexion->query("UPDATE empleados SET Nombre='$Nombre', Apellido='$Apellido', Telefono='$Telefono', Correo='$Correo', Salario='$Salario', Direccion='$Direccion', Contraseña='$Contraseña', Id_Roll='$Roll' WHERE Id_Empleado=$id");

        if ($sql == true) {
            echo '<div class="alert alert-warning">MODIFICACIÓN EXITOSA</div>';
        } else {
            echo '<div class="alert alert-danger">ERROR DE MODIFICACIÓN</div>';
        }
    } else {
        // El rol no existe en la tabla "rol" o $Roll no es válido, muestra una alerta
        echo '<div class="alert alert-danger">El rol especificado no existe en la tabla "rol" o no es válido.</div>';
    }
}




















?>