<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRAR MARCA</title>
     
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b1b47db464.js" crossorigin="anonymous"></script>  
    <link rel="stylesheet" href="../estilos/nueva_marca.css">
</head>
<body>  
    <section> 
        <div class="container">
            <form class="m-4" method="POST">
                <?php
                include "../modelo/conexion.php";
                include "../controlador/nueva_marca.php";
                ?>
                <div class="alert alert-primary" role="alert">
                    <h3>Nueva Marca</h3>
                </div>          
                <div class="mb-2">
                    <label for="formGroupExampleInput" class="form-label">Marca</label>
                    <input name="Marca" type="text" class="form-control" id="formGroupExampleInput" placeholder="Nueva Marca" value="">
                </div>            
                <button type="submit" class="btn btn-primary btn-lg" name="aceptar" value="ok">ACEPTAR</button>
                <a type="submit" class="btn btn-danger btn-lg" href="../registro_vista.php" value="ok">CANCELAR</a>                   
            </form>          
        </div> 
    </section>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>