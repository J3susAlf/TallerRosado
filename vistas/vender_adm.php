<?php
include "../modelo/conexion.php";
$id = $_GET["id"];
# $sql = $conexion->query("select * from uniones where Id_Union=$id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VENDER PRODUCTO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b1b47db464.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .logo {
            max-width: 100%;
            height: auto;

        }

        .titulo {
            color: white;
            font-family: Arial Black, Helvetica, sans-serif;
        }

        @media screen and (max-width: 768px) {
            .titulo {
                font-size: 1.5rem;
            }
        }
        section {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            background-position: cover;
        }

        body {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            background-color: wheat;
        }

        .container {
            font-size: 25px;
            border-radius: 15px;
            width: 500px;
            background: white;
            padding: 30px;
            margin: auto;
            margin-top: 100px;
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
    </style>

</head>

<body>
    <section>
        <div class="container-fluid row" style="justify-content: center;">
            <nav class="navbar navbar-expand-lg navbar-custom fixed-top" style="background-color: #000000;">
                <hr class="navbar-line-top">
                <div class="container-fluid">
                    <img src="../img/Rosado.jpg" alt="Logo" width="110" height="55" class="d-inline-block align-text-top m-2" style="border-radius: 20px;">
                    <h1 class="titulo">Taller Rosado</h1>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                            <li class="nav-item">

                            </li>
                        </ul>
                        <div class="btn-group">
                            <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 20px;">
                                <i class="fa-solid fa-user"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Contactanos</a></li>
                                <li><a class="dropdown-item" href="#">Acerca de</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item btn btn-danger" href="../index.php">Cerrar Sesion</a></li>
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
        <div class="container">
            <a type="submit" class="btn btn-danger btn-lg " href="../roles/administrador.php" value="ok"><i class="fa-solid fa-arrow-left"></i></a>
            <form class="p-4 m-auto" method="POST">
                <h3 class="text-center alert alert-primary">VENDER PRODUCTO</h3>
                <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
                <?php
                include "../controlador/vender.php";

                $sql = $conexion->query("SELECT * from uniones
                inner join marca On uniones.Id_Marca = marca.Id_Marca
                inner join productos On uniones.Id_Producto = productos.Id_Producto where Id_Union=$id");
                while ($datos = $sql->fetch_object()) { ?>
                    <div class="mb-1">
                        <label for="exampleInputEmail1" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" value="<?= $datos->Nombre ?>" disabled>
                    </div>
                    <div class="mb-1">
                        <label for="exampleInputEmail1" class="form-label">Marca</label>
                        <input type="text" class="form-control" name="marca" value="<?= $datos->Nombre_de_Marca ?>" disabled>
                    </div>
                    <div class="mb-1">
                        <label for="exampleInputEmail1" class="form-label">Cantidad en stock</label>
                        <input type="int" class="form-control" name="cantidad" id="cantidad" value="<?= $datos->Cantidad ?>" disabled>
                    </div>
                    <div class="mb-1">
                        <label for="exampleInputEmail1" class="form-label">Cantidad a verder</label>
                        <input type="number" class="form-control" required min="1" name="cantidadD" id="cantidadD" value="" placeholder="Ingresa La cantidad..." oninput="validarCantidad()">
                    </div>
                    <div class="mb-1">
                        <label for="exampleInputEmail1" class="form-label">Precio</label>
                        <input type="text" class="form-control" name="precio" id="precio" value="<?= $datos->Precio ?>" disabled>
                    </div>
                    <div class="mb-1">
                        <label for="exampleInputEmail1" class="form-label">Descripcion</label>
                        <input type="int" class="form-control" name="descrip" value="<?= $datos->Descripcion ?>" disabled>
                    </div>
                <?php }
                ?>
                <button type="submit" class="btn btn-primary btn-lg m-1" name="btnregistrar" value="ok">VENDER</button>

                <a type="submit" class="btn btn-danger btn-lg m-1" href="../roles/administrador.php" value="ok">CANCELAR</a>
            </form>

        </div>
    </section>

    <!--SCRIPT PARA QUE CUANDO CAMBIE LA CANTIDAD EL PRECIO DE MODIFIQUE-->
    <script>
        $(document).ready(function() {
            // obtener el valor inicial de la cantidad y el precio
            var cantidad = parseInt($("#cantidadD").val());
            var precio = parseFloat($("#precio").val());

            // actualizar el precio cuando cambia la cantidad
            $("#cantidadD").on("input", function() {
                cantidad = parseInt($(this).val());
                var nuevoPrecio = cantidad * precio;
                $("#precio").val(nuevoPrecio.toFixed(2));
            });
        });
    </script>


    <!--FINAL DEL SCRIPT-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>