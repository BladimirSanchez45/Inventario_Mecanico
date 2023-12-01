<?php
    include("conexion_be.php");
    $inventarios = "SELECT * FROM inventarios";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Inventario</title>
    <link rel="stylesheet" href="../assets/css/usuariosfinal.css">
</head>
<body>
    <div class="container-table">
        <div class="table-title">Datos De Inventario</div>
        <div class="table-header">nombre de producto</div>
        <div class="table-header">Cantidad</div>
        <div class="table-header">Precio Comprado</div>
        <div class="table-header">Precio Venta</div>
        <?php $resultado = mysqli_query($conexion,$inventarios);
        while($row=mysqli_fetch_assoc($resultado)){ ?>
        <div class="table-item"><?php echo $row["Nombre_producto"];?></div>
        <div class="table-item"><?php echo $row["Cantidad_producto"];?></div>
        <div class="table-item"><?php echo $row["Precio_comprado"];?></div>
        <div class="table-item"><?php echo $row["Precio_venta"];?></div>

        <?php } ?>
    </div>  
    
    <div class="update-form">
    <h2>Actualizar Producto</h2>
    <form action="actualizar_inv.php" method="post">
        <label for="producto_actualizar">Nombre del Producto a Actualizar:</label>
        <input type="text" name="producto_actualizar" required>
        <label for="nuevo_producto">Nuevo Producto:</label>
        <input type="text" name="nuevo_producto">
        <label for="nueva_cantidad">Nueva Cantidad:</label>
        <input type="text" name="nueva_cantidad">
        <label for="nuevo_comprado">Nuevo Precio de Compra :</label>
        <input type="text" name="nuevo_comprado">
        <label for="nuevo_venta">Nuevo Precio de Venta:</label>
        <input type="text" name="nuevo_venta">
        <button type="submit">Actualizar Producto</button>
    </form>

    <div class="delete-form">
    <h2>Eliminar Producto</h2>
    <form action="eliminar_inv.php" method="post">
        <label for="nombre_eliminarinv">Nombre del Producto a Eliminar:</label>
        <input type="text" name="nombre_eliminarinv" required>
        <button type="submit">Eliminar Producto</button>
    </form>
</div>
</div>
</div>
</body>
</html>