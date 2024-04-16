<div class="col-sm-6">
    <div class="card">
        <div class="modal fade" id="exampleModalToggle3" aria-labelledby="exampleModalToggleLabel" tabindex="-1" aria-hidden="true" 
style="display: none;">
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
                                    <label for="formGroupExampleInputL0" class="form-label" style="margin-right: 5px;"><strong>Nombre</
strong></label>
                                    <p>
                                        <a class="btn" data-bs-toggle="collapse" href="#collapseExamplet1" role="button" 
aria-expanded="false" aria-controls="collapseExample">
                                            <i class="fa-solid fa-plus" style="color: #ff1900;"></i>
                                        </a>
                                        <!--<a class="mas m-2" href="vistas/nuevo_producto.php" style="text-decoration: none;"><i 
class="fa-solid fa-plus" style="color: #ff1900;"></i></a>-->
                                    </p>
                                </div>
                                <div class="collapse" id="collapseExamplet1">
                                    <div class="card card-body" style="width: 300px;">
                                        <?php
                                        include "../modelo/conexion.php";
                                        include "../controlador/nuevo_producto.php";
                                        ?>
                                        <label for="formGroupExampleInputL0" class="form-label m-1"><strong>Nombre del Producto</strong>
                                    </label>
                                        <input name="NombreP" type="text" class="form-control" id="formGroupExampleInputL0" 
placeholder="Producto Nuevo.." value="">
                                        <button type="submit" class="btn btn-primary m-2" name="aceptar9" value="ok">ACEPTAR</button>
                                    </div>
                                </div>
                                <select class="form-select" aria-label="Default select example" name="Nombre" placeholder="Seleccione El 
Producto">
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
                                    <label for="formGroupExampleInputñ" class="form-label" style="margin-right: 5px;"><strong>Marca</
strong></label>
                                    <p>
                                        <a class="btn" data-bs-toggle="collapse" href="#collapseExampleq1" role="button" 
aria-expanded="false" aria-controls="collapseExample">
                                            <i class="fa-solid fa-plus" style="color: #ff1900;"></i>
                                        </a>
                                        <!--<a class="mas m-2" href="vistas/nueva_marca.php" style="text-decoration: none;"><i 
class="fa-solid fa-plus" style="color: #ff1900;"></i></a>-->
                                    </p>
                                </div>
                                <div class="collapse" id="collapseExampleq1">
                                    <?php
                                    include "../modelo/conexion.php";
                                    include "../controlador/nueva_marca.php";
                                    ?>
                                    <div class="card card-body" style="width: 300px;">
                                        <label for="formGroupExampleInputñ" class="form-label"><strong>Marca</strong></label>
                                        <input name="MarcaP" type="text" class="form-control" id="formGroupExampleInputñ" 
placeholder="Nueva Marca" value="">
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
                                <input name="Cantidad" type="number" required min="1" class="form-control" id="formGroupExampleInputn" 
placeholder="Cantidad del producto..." value="">
                            </div>
                            <div class="mb-1">
                                <label for="formGroupExampleInputx" class="form-label"><strong>Precio</strong></label>
                                <input name="Precio" type="number" required min="1" class="form-control" id="formGroupExampleInputx" 
placeholder="Precio del producto..." value="">
                            </div>
                            <div class="mb-1">
                                <label for="formGroupExampleInputz" class="form-label"><strong>Descripcion</strong></label>
                                <input name="Descripcion" type="text" class="form-control" id="formGroupExampleInputz" 
placeholder="Descripcion del producto..." value="">
                            </div>
                            <div class="botones">
                                <button type="submit" class="btn btn-primary" name="aceptar0" value="ok" 
data-bs-target="#exampleModalToggle4" data-bs-toggle="modal">ACEPTAR</button>
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