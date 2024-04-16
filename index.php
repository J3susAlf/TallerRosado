<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller Rosado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b1b47db464.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="ind.css">
    <style>
        .imagenContainer {
            background: #fff;
            text-align: center;
            align-items: center;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            background-position: center;
            background-size: cover;
            width: 200px;
            padding: 30px;
            flex: 0 0 calc(62%);
            position: relative;

        }
    </style>

</head>

<body>
    <div class="contenedor-formulario contenedor">
        <div class="imagenContainer">
            <h1><span style="color:red">Regla de integridad de entidad</span></h1>
            <ul>
                <li>
                    <strong>
                        Unicidad: </strong>Cada valor en la clave primaria debe ser único en la tabla, es decir, no puede haber dos filas con el mismo valor en la(s)
                    columna(s) de la clave primaria.

                </li>
                <li>
                    <strong>
                        No nulidad:</strong> Los valores en la clave primaria no pueden ser nulos (es decir, no pueden estar en blanco o ausentes).
                </li>
            </ul>
            <h1><span style="color:red">Regla de integridad de dominio</span></h1>
            <strong>Definir el dominio de los valores permitidos en una columna se pueden aplicar restricciones o reglas para garantizar que los valores en esa columna se ajusten a ese dominio.
                Si un valor no cumple con las restricciones del dominio, se rechazará y se generará un error.
            </strong>
            <h1><span style="color:red">Regla de integridad Relacional</span></h1>
            <strong>Cada tabla debe tener una clave primaria </br>
                Si una tabla hace referencia a otra tabla (una relación entre tablas), debe existir una relación definida mediante una clave foránea.<br>
                Establece que si una tabla hace referencia a otra a través de una clave foránea, los valores en la clave foránea deben coincidir con los valores en la clave primaria de la tabla relacionada.</strong>


        </div>

        <form class="formulario" method="POST">
            <div class="texto-formulario">
                <h2>Bienvenido de nuevo</h2>
                <p>Inicia sesión con tu cuenta</p>
                <?php
                include "modelo/conexion.php";
                include "vistas/login.php";
                ?>
            </div>
            <div class="input">
                <label for="usuario">Usuario</label>
                <input placeholder="Ingresa tu nombre" type="text" id="usuario" name="usuario">
            </div>
            <div class="input">
                <label for="contraseña">Contraseña</label>
                <input placeholder="Ingresa tu contraseña" type="password" id="contraseña" name="contraseña">
            </div>

            <div class="input">
                <input type="submit" value="Ingresar" name="btnregistrar">
                <p style="color:white;text-align:center; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Software con fines educativos</p>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>