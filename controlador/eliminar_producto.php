<?php
    if (!empty($_GET["id"])) {
       $id = $_GET["id"];
       
       $sql = $conexion ->query("DELETE FROM marca WHERE Id_Marca=$id");
       if ($sql==true) {
        $sql2 = $conexion ->query("DELETE FROM productos WHERE Id_Producto=$id");
       }
       if ($sql2==true) {
        $sql3 = $conexion ->query("DELETE FROM uniones WHERE Id_Union=$id");
       }
       if ($sql3==true) {
        //echo '<div class="alert alert-danger">PRODUCTO BORRADO</div>';
       }else{
        //echo '<div class="alert alert-warning">PRODUCTO NO BORRADO</div>';
       }
    }

?>
