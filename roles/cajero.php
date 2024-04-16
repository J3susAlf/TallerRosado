<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVENTARIO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b1b47db464.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos/cajero.css">
    <style>
        /* LOGO Y TITTULO*/
        .logo {
            max-width: 100%;
            height: auto;

        }

        .titulo {
            color: white;
            text-align: center;
            font-family: Arial Black, Helvetica, sans-serif;
        }


        @media screen and (max-width: 768px) {
            .titulo {
                font-size: 1.5rem;
            }
        }

        .navbar-brand {
            font-size: 30px;
            /* Cambia el tamaño del texto en el navbar brand */
            padding: 10px;
            /* Agrega un padding al navbar brand para separarlo del resto del navbar */
        }

        .navbar-nav li {
            margin-right: 20px;
            /* Agrega un margen a cada elemento del navbar */
        }

        .input-group input {
            border-radius: 50px;
            border-color: #ccc;
            box-shadow: none;
            font-size: 18px;
            font-weight: 400;
            padding: 12px 20px;
        }

        .input-group button {
            border-radius: 50px;
            background-color: #FFC107;
            border-color: #FFC107;
            color: #fff;
            font-size: 18px;
            font-weight: 400;
            padding: 12px 30px;
            transition: all 0.3s ease-in-out;
        }

        .input-group button:hover {
            background-color: #F44336;
            border-color: #F44336;
            box-shadow: 0 4px 10px rgba(244, 67, 54, 0.4);
        }

        .input-group input:focus {
            outline: none;
            box-shadow: none;
            border-color: #F44336;
        }

        @media (max-width: 992px) {

            /* Estilos para el botón del navbar en modo responsive */
            .navbar-toggler {
                margin-right: 0;
                background: white;
            }

            /* Estilos para el menú de navegación en modo responsive */
            .navbar-collapse {
                margin-top: 10px;
                /* Cambia el margen superior según tus necesidades */
            }

            /* Estilos para los elementos del menú de navegación en modo responsive */
            .nav-item {
                display: block;
                margin-right: 0;
                margin-bottom: 5px;
                /* Cambia el margen inferior según tus necesidades */
            }

            /* Estilos para el botón de buscar en modo responsive */
            .form-select {
                width: 100%;
                margin-bottom: 10px;
                /* Cambia el margen inferior según tus necesidades */
            }

            /* Estilos para el botón de cerrar sesión en modo responsive */
            .navbar-brand.btn-lg {
                display: block;
                margin-top: 10px;
                /* Cambia el margen superior según tus necesidades */
                margin-bottom: 10px;
                /* Cambia el margen inferior según tus necesidades */
            }

            /* Estilos para el botón de registrar empleado en modo responsive */
            .navbar-brand.btn-outline-primary {
                display: block;
                margin-top: 10px;
                /* Cambia el margen superior según tus necesidades */
                margin-bottom: 10px;
                /* Cambia el margen inferior según tus necesidades */
            }
        }

        .btn-group {
            display: inline-block;
            position: relative;
        }

        .btn-group .dropdown-toggle {
            background-color: #007bff;
            color: #fff;
            border: none;
        }

        .btn-group .dropdown-toggle:hover {
            background-color: #0062cc;
            color: #fff;
        }

        .btn-group .dropdown-menu {
            position: absolute;
            z-index: 1;
            min-width: 10rem;
            padding: 0.5rem 0;
            margin: 0.125rem 0 0;
            font-size: 1rem;
            text-align: left;
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, 0.15);
            border-radius: 0.25rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.175);
            right: 0;
        }

        .btn-group .dropdown-menu a {
            display: block;
            padding: 0.25rem 1.5rem;
            color: #212529;
            text-decoration: none;
            white-space: normal;
        }

        .btn-group .dropdown-menu a:hover {
            background-color: #f8f9fa;
        }

        .btn-group .dropdown-menu .dropdown-divider {
            margin: 0.5rem 0;
            border: 0;
            border-top: 1px solid rgba(0, 0, 0, 0.15);
        }

        .btn-group .dropdown-menu .btn-danger {
            color: #fff;
            background-color: #dc3545;
            border: none;
        }

        .btn-group .dropdown-menu .btn-danger:hover {
            background-color: #c82333;
        }

        @media only screen and (max-width: 767px) {
            .btn-group {
                display: block;
                text-align: center;
            }

            .btn {
                display: block;
                width: 100%;
                margin-bottom: 10px;
            }

            .dropdown-menu {
                position: static;
                display: none;
                min-width: 100%;
                margin: 0;
                border: none;
                border-radius: 0;
            }


        }
    </style>
</head>

<body>

    <section>
        <div class="container-fluid row" style="justify-content: center;">
            <nav class="navbar navbar-expand-lg navbar-custom " style="background-color: #000000;">
                <hr class="navbar-line-top">
                <div class="container-fluid">
                    <img src="../img/Rosado.jpg" alt="Logo" width="110" height="55" class="d-inline-block align-text-top m-2" style="border-radius: 20px;">
                    <h1 class="titulo" style="color:white;">Taller Rosado</h1>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                            <li class="nav-item">

                            </li>
                        </ul>
                        <form class="d-flex align-items-center p-3 " action="cajero.php" method="GET">
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
                                <li><a class="dropdown-item" href="../contactos/contactos_empleado.html">Contactanos</a></li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item btn btn-danger" href="../index.php"><strong>Cerrar Sesion</strong></a></li>
                            </ul>
                        </div>
                        <!--<a class="navbar-brand btn btn-danger btn-lg" >Cerrar Sesion</a>-->
                    </div>

                </div>
                <hr class="navbar-line-bottom">
            </nav>
        </div>
    </section>

    <!--<section>
        <div class="container-fluid row" style="justify-content: center;">
            <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
                <hr class="navbar-line-top">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                            ESTE ES EL COMBO QUE AL SELECCIONARLO BUSCAR DIRECTO LA INFORMACION
                            <form class="d-flex align-items-center p-3" action="cajero.php" method="GET">
                                <label for="InputBuscar" class="me-2"></label>
                                <select name="InputBuscar" id="InputBuscar" class="form-select me-2">
                                    <option value="">Seleccionar producto</option>
                                    <?php
                                    include "modelo/conexion.php";
                                    $sql = $conexion->query("SELECT * FROM productos");
                                    while ($datos = $sql->fetch_object()) {
                                        echo '<option value="' . $datos->Nombre . '">' . $datos->Nombre . '</option>';
                                    }
                                    ?>
                                </select>
                                <button type="submit" name="Buscador" class="btn btn-primary">Buscar</button>
                            </form>
                            FINAL DEL COMBO

                        </ul>
                        <a class="navbar-brand btn btn-danger btn-lg" href="index.php">Cerrar sesion</a>
                    </div>

                </div>
                <hr class="navbar-line-bottom">
            </nav>
        </div>
    </section>-->


    <section>
        <div class="container mt-5">
            <!--<h1 id="fecha"></h1>-->
            <!--TABLA -->
            <div class="container" style="margin-top: 120px;">
                <div class="row m-4 p-1">
                    <div class="col-md-12">
                        <form role="search" method="GET">
                            <div class="input-group mb-3 m-3">
                                <input name="InputBuscar" class="form-control" type="search" placeholder="Buscar Producto" aria-label="Search">
                                <button class="btn btn-primary" type="submit" name="Buscador" value="ok">Buscar</button>

                            </div>
                        </form>
                    </div>
                </div>
                <?php
                include "../modelo/conexion.php";

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
                            <a href="../fpdf/PruebaV.php" target="_blank" class="btn btn-success">PDF</a>
                            <table class="table table-dark table-striped ">
                                <thead class="bg-info">
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Producto</th>
                                        <th scope="col">Marca</th>
                                        <th scope="col">Cantidad </th>
                                        <th scope="col">Precio</th>
                                        <th scope="col">Descripcion</th>
                                        <th scope="col">Vender</th>
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

                                                <a href="../vistas/vender_emp.php?id=<?= $datos->Id_Union ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-cart-shopping"></i></a>

                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!--FINAL DE LA TABLA-->
            </div>
        </div>
    </section>

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