<?php
if (isset($_POST["btnregistrar"])) {
    $cantidad = $_POST["cantidadD"];
    $id = $_POST["id"];

    // Obtener la cantidad disponible actual del producto
    $sql = $conexion->query("SELECT Cantidad FROM uniones WHERE Id_Union = $id");
    $row = mysqli_fetch_assoc($sql);
    $cantidad_disponible = $row["Cantidad"];

    // Verificar que hay suficiente cantidad disponible para la venta

    if ( $cantidad < 0) {
        echo '<div class="alert alert-danger" role="alert">Corrigue la cantidad</div>';
    } else if ($cantidad < 0) {
        echo '<div class="alert alert-danger" role="alert">La cantidad no puede ser negativa</div>';
    } else {
        $cantidad_nueva = $cantidad_disponible - $cantidad;
        if ($cantidad_nueva >= 0) {
            $sql2 = $conexion->query("UPDATE uniones SET Cantidad = $cantidad_nueva  WHERE Id_Union = $id");
            if ($sql2 == true) {
                echo '<div class="alert alert-warning" role="alert">Producto vendido exitosamente</div>';
            } else {
                echo '<div class="alert alert-warning" role="alert">Error al actualizar la cantidad disponible del producto</div>';
            }
        } else {
            echo '<div class="alert alert-danger" role="alert">No hay suficiente cantidad disponible para vender</div>';
        }
    }
}
