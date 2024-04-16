<?php
if (isset($_POST["aceptar0"])) {
    $Nombre = $_POST["Nombre"];
    $Marca = $_POST["Marca"];
    $Cantidad = $_POST["Cantidad"];
    $Precio = $_POST["Precio"];
    $Descripcion = $_POST["Descripcion"];
   
    // Verificar si el producto ya existe en la base de datos
    $sql = "SELECT * FROM productos WHERE Nombre='$Nombre'";
    $query = mysqli_query($conexion, $sql);
    if (mysqli_num_rows($query) == 0) {
        // El producto no existe, insertarlo
        $sql = "INSERT INTO productos (Nombre) VALUES ('$Nombre')";
        $execute = mysqli_query($conexion,$sql);
        $Id_Producto = mysqli_insert_id($conexion);
    } else {
        // El producto ya existe, obtiene su ID
        $row = mysqli_fetch_array($query);
        $Id_Producto = $row["Id_Producto"];
    }

    // Verificar si la marca ya existe en la base de datos
    $sql2 = "SELECT * FROM marca WHERE Nombre_de_Marca='$Marca'";
    $query2 = mysqli_query($conexion, $sql2);
    if (mysqli_num_rows($query2) == 0) {
        // La marca no existe, insertarla
        $sql2 = "INSERT INTO marca (Nombre_de_Marca) VALUES ('$Marca')";
        $execute = mysqli_query($conexion,$sql2);
        $Id_Marca = mysqli_insert_id($conexion);
    } else {
        // La marca ya existe, obtener su ID
        $row2 = mysqli_fetch_array($query2);
        $Id_Marca = $row2["Id_Marca"];
    }

    // Insertar los datos en la tabla "uniones"
    $sql3 = "INSERT INTO uniones (Id_Producto, Id_Marca, Cantidad, Precio, Descripcion) VALUES ('$Id_Producto', '$Id_Marca', '$Cantidad', '$Precio', '$Descripcion')";
    $execute = mysqli_query($conexion,$sql3);

    // Verificar si se insertaron los datos correctamente
    if ($execute) {
        echo '<div class="alert alert-success" role="alert">PRODUCTO REGISTRADO</div>';
    } else {
        echo '<div class="alert alert-warning" role="alert">PRODUCTO NO REGISTRADO</div>';
    }
}

?>