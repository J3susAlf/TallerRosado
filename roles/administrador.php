<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVENTARIO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b1b47db464.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="adm.css">

</head>

<body>

    <script>
        function eliminar() {
            var respuesta = confirm("¿ESTAS SEGURO DE ELIMINAR EL PRODUCTO?");
            return respuesta
        }
    </script>


    <section>
        <div class="container-fluid row" style="justify-content: center;">
            <nav class="navbar navbar-expand-lg navbar-custom fixed-top" style="background-color: #000000;">
                <hr class="navbar-line-top">
                <div class="container-fluid">
                   <!--  <img src="../img/Rosado.jpg" alt="Logo" width="110" height="55" class="d-inline-block align-text-top m-2" style="border-radius: 20px;"> -->
                    <h1 class="titulo">Trabajo</h1>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <!-- <li class="nav-item btn" style="font-size: 20px;">
                                <a class="nav-link" aria-current="page" href="registro_vista.php" name="registrar">Registrar producto</a>
                            </li>
                            <li class="nav-item btn" style="font-size: 20px;">
                                <a class="nav-link" aria-current="page" type="submit" href="vistas/empleado.php">Registrar empleado</a>
                            </li>-->
                            <li class="nav-item">
                                <!--MOVI EL FORM FUERA DEL li Y FUERA DEL ul-->
                            </li>
                        </ul>
                        <form class="d-flex align-items-center p-3 " action="administrador.php" method="GET">
                            <select name="InputBuscar" id="InputBuscar" class="form-select me-2" style="font-size: 20px;">
                                <option value="">Seleccionar producto</option>
                                <?php
                                include "../modelo/conexion.php";
                                $sql = $conexion->query("SELECT * FROM productos");
                                while ($datos = $sql->fetch_object()) {
                                    echo '<option value="' . $datos->Nombre . '">' . $datos->Nombre . '</option>';
                                }
                                ?>
                            </select>
                            <button type="submit" name="Buscador" class="btn btn-danger" style="font-size: 20px;">Buscar</button>
                        </form>
                        <div class="btn-group">
                            <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 20px;">
                                <i class="fa-solid fa-user"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="../contactos/contactos.html">Contactanos</a></li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item btn btn-danger" href="../controlador/cerrar_session.php"><strong>Cerrar Sesion</strong></a></li>
                            </ul>
                        </div>
                        <!--<a class="navbar-brand btn btn-danger btn-lg" >Cerrar Sesion</a>-->
                    </div>

                </div>
                <hr class="navbar-line-bottom">
            </nav>
        </div>
    </section>

    <section>
        <div class="container mt-5">
            <!--<h1 id="fecha"></h1>-->
            <!--TABLA -->
            <section class="container" style="margin-top: 140px;">
                <div class="row m-4 p-1">
                    <div class="col-sm-6">
                        <div class="card">
                            <!--INICIO DEL MODAL-->
                            <div class="modal fade" id="exampleModalToggle" aria-labelledby="exampleModalToggleLabel" tabindex="-1" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Registro empleado</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="m-4 p-4 " method="POST">
                                                <?php
                                                include "../modelo/conexion.php";
                                                include "../controlador/re_empleado.php";
                                                ?>
                                                <div class="mb-1">
                                                    <label for="formGroupExampleInputa" class="form-label"><strong>Nombre (s)</strong></label>
                                                    <input name="Nombre" type="text" required class="form-control" id="formGroupExampleInputa" placeholder="Ingresar Nombre..." value="">
                                                </div>
                                                <div class="mb-1">
                                                    <label for="formGroupExampleInputb" class="form-label"><strong>Apellido (s)</strong></label>
                                                    <input name="Apellido" type="text" required class="form-control" id="formGroupExampleInputb" placeholder="Ingresar Apellido..." value="">
                                                </div>
                                                <div class="mb-1">
                                                    <label for="formGroupExampleInputc" class="form-label"><strong>Telefono</strong></label>
                                                    <input name="Telefono" type="number" required min="1" class="form-control" id="formGroupExampleInputc" placeholder="Ingresar Telefono..." value="">
                                                </div>
                                                <div class="mb-1">
                                                    <label for="formGroupExampleInputd" class="form-label"><strong>Correo</strong></label>
                                                    <input name="Correo" type="email" required class="form-control" id="formGroupExampleInputd" placeholder="Ingresar Correo..." value="">
                                                </div>
                                                <div class="mb-1">
                                                    <label for="formGroupExampleInpute" class="form-label"><strong>Salario</strong></label>
                                                    <input name="Salario" type="number" required min="1" class="form-control" id="formGroupExampleInpute" placeholder="Ingresar Salario..." value="">
                                                </div>
                                                <div class="mb-1">
                                                    <label for="formGroupExampleInputf" class="form-label"><strong>Dirección</strong></label>
                                                    <input name="Direccion" type="text" required class="form-control" id="formGroupExampleInputf" placeholder="Ingresar Direccion..." value="">
                                                </div>
                                                <div class="mb-1">
                                                    <label for="formGroupExampleInputg" class="form-label"><strong>Contraseña</strong></label>
                                                    <?php $contraseña = rand(1, 200000); ?>
                                                    <input name="Contraseña" type="number" required class="form-control" id="formGroupExampleInputg" placeholder="Ingresar Contraseña..." value="<?php echo $contraseña; ?>">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="exampleInputEmailh" class="form-label"><strong>Roll De Empleado</strong></label>
                                                    <select id="exampleInputEmailh" class="form-select" aria-label="Default select example" name="Roll" required placeholder="Seleccione El Roll...">
                                                        <option selected>Selecciona El Roll</option>
                                                        <?php
                                                        $roll = array(1 => "Administrador", 2 => "Cajero")
                                                        ?>
                                                        <?php for ($i = 1; $i <= count($roll); $i++) : ?>
                                                            <option value="<?php echo $roll[$i]; ?>"><?php echo $roll[$i]; ?></option>
                                                        <?php endfor; ?>
                                                    </select>
                                                </div>
                                                <div class="botones">
                                                    <button type="submit" class="btn btn-primary " name="aceptar8" value="ok">ACEPTAR</button>
                                                    <!--<a type="submit" class="btn btn-danger btn-lg" href="../administrador.php" value="ok">CANCELAR</a>-->
                                                </div>

                                            </form>
                                        </div>
                                        <!--<div class="modal-footer">
                                            <button type="submit" class="btn btn-primary " name="aceptar" value="ok">ACEPTAR</button>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <!--FINAL DEL MODAL-->
                            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalToggle" style="text-decoration: none;">
                                <h2>Registrar empleado</h2>
                                <p>Registrar nuevo empleado</p>
                            </a>
                            <!--FINAL DEL BOTON-->
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="modal fade" id="exampleModalToggle3" aria-labelledby="exampleModalToggleLabel" tabindex="-1" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Registro producto</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="m-4 p-4 " method="POST">
                                                <?php
                                                include "../modelo/conexion.php";
                                                include "../controlador/registro.php";

                                                ?>
                                                <div class="mb-1">
                                                    <div style="display: flex; align-items: center;">
                                                        <label for="formGroupExampleInputL0" class="form-label" style="margin-right: 5px;"><strong>Nombre</strong></label>
                                                        <p>
                                                            <a class="btn" data-bs-toggle="collapse" href="#collapseExamplet1" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                                <i class="fa-solid fa-plus" style="color: #ff1900;"></i>
                                                            </a>
                                                            <!--<a class="mas m-2" href="vistas/nuevo_producto.php" style="text-decoration: none;"><i class="fa-solid fa-plus" style="color: #ff1900;"></i></a>-->
                                                        </p>
                                                    </div>
                                                    <div class="collapse" id="collapseExamplet1">
                                                        <div class="card card-body" style="width: 300px;">
                                                            <?php
                                                            include "../modelo/conexion.php";
                                                            include "../controlador/nuevo_producto.php";
                                                            ?>
                                                            <label for="formGroupExampleInputL0" class="form-label m-1"><strong>Nombre del Producto</strong></label>
                                                            <input name="NombreP" type="text" class="form-control" id="formGroupExampleInputL0" placeholder="Producto Nuevo.." value="">
                                                            <button type="submit" class="btn btn-primary m-2" name="aceptar9" value="ok">ACEPTAR</button>

                                                        </div>

                                                    </div>
                                                    <select class="form-select" aria-label="Default select example" name="Nombre" placeholder="Seleccione El Producto">
                                                        <option value="">Seleccionar ..</option>
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
                                                    <div style="display: flex; align-items: center;">
                                                        <label for="formGroupExampleInputñ" class="form-label" style="margin-right: 5px;"><strong>Marca</strong></label>
                                                        <p>
                                                            <a class="btn" data-bs-toggle="collapse" href="#collapseExampleq1" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                                <i class="fa-solid fa-plus" style="color: #ff1900;"></i>
                                                            </a>
                                                            <!--<a class="mas m-2" href="vistas/nueva_marca.php" style="text-decoration: none;"><i class="fa-solid fa-plus" style="color: #ff1900;"></i></a>-->
                                                        </p>
                                                    </div>
                                                    <div class="collapse" id="collapseExampleq1">
                                                        <?php
                                                        include "../modelo/conexion.php";
                                                        include "../controlador/nueva_marca.php";
                                                        ?>
                                                        <div class="card card-body" style="width: 300px;">
                                                            <label for="formGroupExampleInputñ" class="form-label"><strong>Marca</strong></label>
                                                            <input name="MarcaP" type="text" class="form-control" id="formGroupExampleInputñ" placeholder="Nueva Marca" value="">
                                                            <button type="submit" class="btn btn-primary m-2" name="aceptar6" value="ok">ACEPTAR</button>
                                                        </div>
                                                    </div>
                                                    <select class="form-select" aria-label="Default select example" name="Marca">
                                                        <option value="">Seleccionar ..</option>
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
                                                    <label for="formGroupExampleInputn" class="form-label"><strong>Cantidad</strong></label>
                                                    <input name="Cantidad" type="number" required min="1" class="form-control" id="formGroupExampleInputn" placeholder="Cantidad del producto..." value="">
                                                </div>
                                                <div class="mb-1">
                                                    <label for="formGroupExampleInputx" class="form-label"><strong>Precio</strong></label>
                                                    <input name="Precio" type="number" required min="1" class="form-control" id="formGroupExampleInputx" placeholder="Precio del producto..." value="">
                                                </div>
                                                <div class="mb-1">
                                                    <label for="formGroupExampleInputz" class="form-label"><strong>Descripcion</strong></label>
                                                    <input name="Descripcion" type="text" class="form-control" id="formGroupExampleInputz" placeholder="Descripcion del producto..." value="">
                                                </div>

                                                <div class="botones">
                                                    <button type="submit" class="btn btn-primary" name="aceptar0" value="ok" data-bs-target="#exampleModalToggle4" data-bs-toggle="modal">ACEPTAR</button>
                                                    <!--<a type="submit" class="btn btn-danger btn-lg" href="administrador.php" value="ok">CANCELAR</a>-->
                                                </div>

                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalToggle3" style="text-decoration: none;">
                                <h2>Registrar productos</h2>
                                <p>Registrar nuevo producto</p>
                            </a>
                            <!--FINAL DEL BOTON-->
                        </div>
                    </div>
                </div>
            </section>

            <div class="container" style="margin-top: 30px;">
                <div class="row m-4 p-1">
                    <div class="col-md-12">
                        <form role="search" method="GET">
                            <div class="input-group mb-3">
                                <input name="InputBuscar" class="form-control" type="search" placeholder="Buscar Producto" aria-label="Search">
                                <button class="btn btn-primary" type="submit" name="Buscador" value="ok">Buscar</button>
                            </div>
                        </form>
                    </div>
                </div>

                <?php
                include "../modelo/conexion.php";
                include "../controlador/eliminar_producto.php";
                $sql = "SELECT * FROM uniones
                INNER JOIN marca ON uniones.Id_Marca = marca.Id_Marca 
                INNER JOIN productos ON uniones.Id_Producto = productos.Id_Producto";
                if (isset($_GET["Buscador"])) {
                    $buscar = $_GET["InputBuscar"];
                    $sql .= " WHERE productos.Nombre LIKE '%$buscar%' OR marca.Nombre_de_Marca 
                            LIKE '%$buscar%' OR uniones.Cantidad LIKE '%$buscar%'";
                }

                // Ejecutar la consulta SQL y mostrar los resultados en la tabla
                $resultado = $conexion->query($sql);

                ?>
                <div class="row m-4 p-1" style="background-color: #ECECEC;">
                    <div class="col-md-12">
                        <div class="table-responsive table-responsive-sm ">
                            <h2 style="text-align: center; font-family:Arial Black, Helvetica, sans-serif;">Inventario de los productos</h2>
                            <a href="../generar/excel.php" class="btn btn-danger m-2">DESCARGAR EXCEL</a>

                            <table class="table table-dark table-striped " id="example">
                                <thead class="bg-info">
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Producto</th>
                                        <th scope="col">Marca</th>
                                        <th scope="col">Cantidad </th>
                                        <th scope="col">Precio</th>
                                        <th scope="col">Descripcion</th>
                                        <th scope="col">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($datos = $resultado->fetch_object()) { ?>
                                        <tr>
                                            <td><?= $datos->Id_Union ?></td>
                                            <td><?= $datos->Nombre ?></td>
                                            <td><?= $datos->Nombre_de_Marca ?></td>
                                            <td><?= $datos->Cantidad ?></td>
                                            <td><?= $datos->Precio ?></td>
                                            <td><?= $datos->Descripcion ?></td>
                                            <td>
                                                <a href="../modificaciones/modificar_vista.php?id=<?= $datos->Id_Union ?>" class="btn btn-small btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="../vistas/vender_adm.php?id=<?= $datos->Id_Union ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-cart-shopping"></i></a>
                                                <a onclick="return eliminar()" href="administrador.php?id=<?= $datos->Id_Union ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php if ($datos->Cantidad == 1) { ?>
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert" style="font-family: Arial, Helvetica, sans-serif; font-size: 20px;">
                                                El Producto <?= $datos->Nombre ?> tiene una cantidad de 1 producto
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                        <?php } elseif ($datos->Cantidad == 0) { ?>
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert" style="font-family: Arial, Helvetica, sans-serif; font-size: 20px;">
                                                El Producto <?= $datos->Nombre ?> no tiene la cantidad disponibilidad
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                        <?php } ?>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!--FINAL DE LA TABLA-->
            </div>
            <!--DROP-->
            <div class="accordion m-5 p-3" id="accordionExample" style="background-color: #ECECEC;">
                <div class="row m-4 p-1">
                    <div class="col-md-12">
                        <form role="search" method="GET">
                            <div class="input-group mb-3">
                                <input name="InputBuscarEmpleado" class="form-control" type="search" placeholder="Buscar Producto" aria-label="Search">
                                <button class="btn btn-primary" type="submit" name="BuscadorEmpleado" value="ok">Buscar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <?php
                include "../modelo/conexion.php";

                $sql2 = "SELECT * FROM empleados
                     JOIN roles ON empleados.Id_Roll = roles.Id_Roll";

                if (isset($_GET["BuscadorEmpleado"])) {
                    $buscar2 = $_GET["InputBuscarEmpleado"];
                    $sql2 .= " WHERE empleados.Nombre LIKE '%$buscar2%' OR empleados.Id_Empleado
            LIKE '%$buscar2%' OR empleados.Apellido LIKE '%$buscar2%'";
                }
                // Ejecutar la consulta SQL y mostrar los resultados en la tabla
                $resultado2 = $conexion->query($sql2);
                ?>
                <h2 style="text-align: center;"></h2>
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>

                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Salario</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Contraseña</th>
                            <th scope="col">Roll</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            include "../modelo/conexion.php";
                            include "../controlador/eliminar_empleado.php";
                           
                           
                            while ($datos2 = $resultado2->fetch_object()) { ?>

                                <td><?= $datos2->Nombre ?></td>
                                <td><?= $datos2->Apellido ?></td>
                                <td><?= $datos2->Telefono ?></td>
                                <td><?= $datos2->Correo ?></td>
                                <td><?= $datos2->Salario ?></td>
                                <td><?= $datos2->Direccion ?></td>
                                <td><?= $datos2->Contraseña ?></td>
                                <td><?= $datos2->Tipo ?></td>
                                <td style="display: flex; align-items: center;">
                                    <a href="../vistas/modificar_empleado.php?id=<?= $datos2->Id_Empleado ?>" class="btn btn-small btn-primary m-1">
                                        <i class="fa-solid fa-pen-to-square"></i></i></a>
                                    <a onclick="return eliminarEmpleado()" href="administrador.php?idE=<?= $datos2->Id_Empleado ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>


        </div>
        </div>
    </section>
    
    <script>
        function eliminarEmpleado() {
            var respuesta = confirm("¿ESTAS SEGURO DE ELIMINAR EL EMPLEADO?");
            return respuesta
        }
    </script>
    <script>
        setInterval(() => {
            let fecha = new Date();
            let fechaHora = fecha.toLocaleString();
            document.getElementById("fecha").textContent = fechaHora;
        }, 1000);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>