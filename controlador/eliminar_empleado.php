<?php
    if (!empty($_GET["idE"])) {
       $id = $_GET["idE"];
       
       $sql = $conexion ->query("DELETE FROM empleados WHERE Id_Empleado=$id");
       if ($sql==true) {
        //echo '<div class="alert alert-danger">EMPLEADO ELIMINADO</div>';
       }else{
        //echo '<div class="alert alert-warning">ELIMINACIÓN INCORRECTA</div>';
       }
    }

?>