<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b1b47db464.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos/registro.css">
</head>

<body>
    <section>
        <div class="container">
            <form class="m-4 p-4 " method="POST">
                <?php
                include "../modelo/conexion.php";
                include "../controlador/registro.php";
                ?>
                <div class="alert alert-primary" role="alert">
                    <h3>REGISTRA EL PRODUCTO</h3>
                </div>
                <div class="mb-1">
                    <label for="formGroupExampleInput" class="form-label">Nombre</label><a class="mas m-2" href="../vistas/nuevo_producto.php" style="text-decoration: none;"><i class="fa-solid fa-plus" style="color: #ff1900;"></i></a>
                    <select class="form-select" aria-label="Default select example" name="Nombre" placeholder="Seleccione El Producto">
                        <?php
                        include "../modelo/conexion.php";
                        $sql = "select * from productos";
                        $query = mysqli_query($conexion, $sql);
                        while ($row = mysqli_fetch_array($query)) {

                            $Nombre = $row["Nombre"];
                        ?>
                            <option value="<?php echo $Nombre ?>"><?php echo $Nombre ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-1">
                    <label for="formGroupExampleInput" class="form-label">Marca</label><a class="mas m-2" href="../vistas/nueva_marca.php" style="text-decoration: none;"><i class="fa-solid fa-plus" style="color: #ff1900;"></i></a>
                    <select class="form-select" aria-label="Default select example" name="Marca">
                        <?php
                        include "../modelo/conexion.php";
                        $sql = "select * from marca";
                        $query = mysqli_query($conexion, $sql);
                        while ($row = mysqli_fetch_array($query)) {

                            $Nombre_de_Marca = $row["Nombre_de_Marca"];
                        ?>
                            <option value="<?php echo $Nombre_de_Marca ?>"><?php echo $Nombre_de_Marca ?></option>
                        <?php
                        }
                        ?>

                    </select>
                </div>
                <div class="mb-1">
                    <label for="formGroupExampleInput" class="form-label">Cantidad</label>
                    <input name="Cantidad" type="text" class="form-control" id="formGroupExampleInput" placeholder="Cantidad del producto" value="">
                </div>
                <div class="mb-1">
                    <label for="formGroupExampleInput" class="form-label">Precio</label>
                    <input name="Precio" type="text" class="form-control" id="formGroupExampleInput" placeholder="Precio del producto" value="">
                </div>
                <div class="mb-1">
                    <label for="formGroupExampleInput" class="form-label">Descripcion</label>
                    <input name="Descripcion" type="text" class="form-control" id="formGroupExampleInput" placeholder="Descripcion del producto" value="">
                </div>
                <div class="botones">
                    <button type="submit" class="btn btn-primary btn-lg" name="aceptar" value="ok">ACEPTAR</button>
                    <a type="submit" class="btn btn-danger btn-lg" href="../roles/administrador.php" value="ok">CANCELAR</a>
                </div>
                
            </form>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>