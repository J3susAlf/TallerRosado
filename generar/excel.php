<?php
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename= archivo.xls")
?>
<table class="table table-dark table-striped ">
    <thead class="bg-info">
        <tr>
            <th scope="col">Producto</th>
            <th scope="col">Marca</th>
            <th scope="col">Cantidad </th>
            <th scope="col">Precio</th>
            <th scope="col">Descripcion</th>
            
        </tr>
    </thead>
    <tbody>
        <?php
        include "../modelo/conexion.php";
        $resultado = $conexion->query("SELECT * FROM uniones
        INNER JOIN marca ON uniones.Id_Marca = marca.Id_Marca 
        INNER JOIN productos ON uniones.Id_Producto = productos.Id_Producto");
         while ($datos = $resultado->fetch_object()) { ?>
            <tr>
                <td><?= $datos->Nombre ?></td>
                <td><?= $datos->Nombre_de_Marca ?></td>
                <td><?= $datos->Cantidad ?></td>
                <td><?= $datos->Precio ?></td>
                <td><?= $datos->Descripcion ?></td>
                
            </tr>
        <?php } ?>
    </tbody>
</table>