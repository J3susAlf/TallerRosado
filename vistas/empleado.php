<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Empleado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b1b47db464.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../estilos/empleado.css">
</head>
<body>
<section>
        <div class="container">
            <form class="m-4 p-4 " method="POST">
                <?php
                include "../modelo/conexion.php";
                include "../controlador/re_empleado.php";
                ?>
                <div class="alert alert-primary" role="alert">
                    <h3>REGISTRAR EMPLEADO</h3>
                </div>
                
                <div class="mb-1">
                    <label for="formGroupExampleInput" class="form-label">Nombre (s)</label>
                    <input name="Nombre" type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombre" value="" required>
                </div>
                <div class="mb-1">
                    <label for="formGroupExampleInput" class="form-label">Apellido (s)</label>
                    <input name="Apellido" type="text" class="form-control" id="formGroupExampleInput" placeholder="Apellido" value="" required>
                </div>
                <div class="mb-1">
                    <label for="formGroupExampleInput" class="form-label">Telefono</label>
                    <input name="Telefono" type="number" min="1" class="form-control" id="formGroupExampleInput" placeholder="Telefono" value="" required>
                </div>
                <div class="mb-1">
                    <label for="formGroupExampleInput" class="form-label">Correo</label>
                    <input name="Correo" type="email" class="form-control" id="formGroupExampleInput" placeholder="Correo" value="" required>
                </div>
                <div class="mb-1">
                    <label for="formGroupExampleInput" class="form-label">Salario</label>
                    <input name="Salario" type="number" min="1" class="form-control" id="formGroupExampleInput" placeholder="Salario" value="" required>
                </div>
                <div class="mb-1">
                    <label for="formGroupExampleInput" class="form-label">Dirección</label>
                    <input name="Direccion" type="text" class="form-control" id="formGroupExampleInput" placeholder="Direccion" value="" required>
                </div>
                <div class="mb-1">
                    <label for="formGroupExampleInput" class="form-label">Contraseña</label>
                    <input name="Contraseña" type="number" class="form-control" id="formGroupExampleInput" placeholder="Contraseña" value="" required>
                </div>
                <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Roll De Empleado</label>
                        <select class="form-select" aria-label="Default select example" name="Roll" placeholder="Seleccione El Producto" required>
                            <option selected>Selecciona El Roll</option>
                            <?php
                            $roll = array(1 =>"Administrador", 2=>"Cajero") 
                            ?>
                            <?php for($i=1; $i<= count($roll); $i++): ?>
                            <option value="<?php echo $roll[$i];?>"><?php echo $roll[$i];?></option>
                            <?php endfor; ?>
                    </select>              
                </div> 
                <div class="botones">
                    <button type="submit" class="btn btn-primary btn-lg" name="aceptar" value="ok">ACEPTAR</button>
                    <a type="submit" class="btn btn-danger btn-lg" href="../administrador.php" value="ok">CANCELAR</a>
                </div>
                
            </form>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> 
</body>
</html>