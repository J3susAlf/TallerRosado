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

                    <h3 class="titulo">Proyecto</h3>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="dropdown-item btn btn-danger p-4" href="../controlador/cerrar_session.php"><strong>Cerrar
                            Sesion</strong></a>
                    <form method="POST">
                        <input type="text" name="rolesCanela" placeholder="Agregar Roll">
                        <button type="submit" class="btn btn-primary" name="GUARDAR" value="ok">Guardar</button>
                    </form>


                    <?php
                    include "../modelo/conexion.php";
                    if (!empty($_POST["GUARDAR"])) {
                        if (!empty($_POST["rolesCanela"])) {
                            $rolesCanela = $_POST["rolesCanela"];
                            $sql = $conexion->query("INSERT INTO roles (Tipo) VALUES ('$rolesCanela')");
                            if ($sql == 1) {
                                echo '<div class="alert alert-warning" role="alert">REGISTRO EXITOSO</div>';
                            } else {
                                echo '<div class="alert alert-warning" role="alert">REGISTRO FALLIDO</div>';
                            }
                        } else {
                            echo '<div class="alert alert-danger" role="alert">RELLENAR LOS CAMPOS</div>';
                        }
                    }



                    ?>
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
                                                    <input name="Telefono" type="tel" min="10" max="" class="form-control" id="formGroupExampleInputc" pattern="[0-9]{10}" title="Numero de 10 cifras" placeholder="Ingresar Telefono..." value="" required>
                                                </div>
                                                <div class="mb-1">
                                                    <label for="formGroupExampleInputd" class="form-label"><strong>Correo</strong></label>
                                                    <input name="Correo" type="email" required class="form-control" id="formGroupExampleInputd" placeholder="Ingresar Correo..." value="">
                                                </div>
                                                <div class="mb-1">
                                                    <label for="formGroupExampleInpute" class="form-label"><strong>Salario</strong></label>
                                                    <input name="Salario" type="number" min="208" title="No acepta negativos" class="form-control" id="formGroupExampleInpute" placeholder="Ingresar Salario..." value="" required>
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
                                                        include "../modelo/conexion.php";
                                                        $sql = $conexion->query("SELECT * FROM roles");
                                                        while ($datos = $sql->fetch_object()) {
                                                            echo '<option value="' . $datos->Tipo . '">' . $datos->Tipo . '</option>';
                                                        }
                                                        ?>
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
                            <p>Pueden existir varios <strong>empleados</strong> con el mismo nombre pero con <strong>diferentes</strong> información
                                pero existe una <strong>identificación</strong> única que la <strong>distinga</strong> de todas las demás <strong>filas

                                </strong> en esa misma tabla
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <p>
                                Se realizan validaciones antes de registrar al usuario pare asegurar que cumplen con el dominio
                                por ejemplo al agregar el <strong>telefono</strong> debe contener <strong>10 digitos</strong> como
                                tambien el <strong> salario</strong> debe ser <strong>positivo</strong>, si no, no se puede agregar insertar a la base de datos
                            </p>


                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <p>
                                Existen <strong>2 tablas, empleados y roles</strong>, la tabla empleado contiene una <strong>llave foranea</strong> que se
                                <strong>relaciona con la tabla rol</strong>, al agregar un empleado es <strong>obligario</strong> asignarle un rol ya que no puede ser <strong>nulo</strong>.
                                este rol debe <strong>existir</strong> en la tabla de rol, si no existe produce un <strong>error</strong>. NO HABRIA COHERENCIA ENTRE TABLAS


                            </p>
                        </div>
                    </div>


            </section>

            <!--DROP-->
            <div class="accordion m-5 p-3" id="accordionExample" style="background-color: #ECECEC;">
                <div class="row m-4 p-1">
                    <div class="col-md-12">
                        <form role="search" method="GET" onsubmit="mostrarMensaje()">
                            <div class="input-group mb-3">
                                <input name="InputBuscarEmpleado" class="form-control" type="search" placeholder="Buscar Empleado" aria-label="Search">
                                <button class="btn btn-primary" type="submit" name="BuscadorEmpleado" value="ok">Buscar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <script>
                    function mostrarMensaje() {
                        // Obtener el valor del campo de búsqueda
                        var searchTerm = document.querySelector('input[name="InputBuscarEmpleado"]').value;

                        // Verificar si el valor ingresado es un número
                        if (!isNaN(searchTerm)) {
                            alert("Los empleados se diferencian de acuerdo a un identificador: " + searchTerm);
                        } else {
                            alert("Pueden existir varios empleados con el mismo nombre pero con diferentes información: " + searchTerm);
                        }

                        // Detener el envío del formulario
                        return false;
                    }
                </script>
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
                            <th scope="col">Id</th>
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
                                <td><?= $datos2->Id_Empleado ?></td>
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







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>