<?php
if (!empty($_POST["btnregistrar"])) {  
    $id = $_POST["id"];
    $Producto = $_POST["nombre"];
    $Marca = $_POST["marca"];
    $Cantidad = $_POST["cantidad"];
    $Precio = $_POST["precio"];
    $Descripcion = $_POST["descrip"];

    // Verificar si la cantidad y el precio son negativos
   
   
   
    if ($Cantidad < 0 || $Precio < 0) {
        echo '<div class="alert alert-danger" role="alert">No se pueden agregar valores negativos</div>';
    } else {
        $sql = $conexion->query("UPDATE productos SET Nombre='$Producto' WHERE Id_Producto=$id");
        if ($sql) {
            $sql2 = "UPDATE marca SET Nombre_de_Marca='$Marca' WHERE Id_Marca=$id";
            $execute = mysqli_query($conexion, $sql2);
        } 
        if ($execute) {
            $sql3 = "UPDATE uniones SET Cantidad=$Cantidad, Precio=$Precio, Descripcion='$Descripcion' WHERE Id_Union=$id";
            $execute = mysqli_query($conexion, $sql3);   
        } 
        if ($execute) {
            echo '<div class="alert alert-warning" role="alert">PRODUCTO MODIFICADO</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">PRODUCTO NO MODIFICADO</div>';
        }
    }
}
?>
























