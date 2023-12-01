<?php
    include("conexion_be.php");
    $clientes = "SELECT * FROM clientes";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Usuarios</title>
    <link rel="stylesheet" href="../assets/css/usuariosfinal.css">
</head>
<body>
    <div class="container-table">
        <div class="table-title">Datos De Usuario</div>
        <div class="table-header">nombre</div>
        <div class="table-header">Direccion</div>
        <div class="table-header">Telefono</div>
        <div class="table-header">Email</div>
        <?php $resultado = mysqli_query($conexion,$clientes);
        while($row=mysqli_fetch_assoc($resultado)){ ?>
        <div class="table-item"><?php echo $row["Nombre"];?></div>
        <div class="table-item"><?php echo $row["Direccion"];?></div>
        <div class="table-item"><?php echo $row["Telefono"];?></div>
        <div class="table-item"><?php echo $row["email"];?></div>

        <?php } ?>
    </div>  
    
    <div class="update-form">
    <h2>Actualizar Cliente</h2>
    <form action="actualizar.php" method="post">
        <label for="nombre_actualizar">Nombre del Cliente a Actualizar:</label>
        <input type="text" name="nombre_actualizar" required>
        <label for="nuevo_nombre">Nuevo Nombre:</label>
        <input type="text" name="nuevo_nombre">
        <label for="nueva_direccion">Nueva Dirección:</label>
        <input type="text" name="nueva_direccion">
        <label for="nuevo_telefono">Nuevo Teléfono:</label>
        <input type="text" name="nuevo_telefono">
        <label for="nuevo_email">Nuevo Email:</label>
        <input type="email" name="nuevo_email">
        <button type="submit">Actualizar Cliente</button>
    </form>

    <div class="delete-form">
    <h2>Eliminar Cliente</h2>
    <form action="eliminar.php" method="post">
        <label for="nombre_eliminar">Nombre del Cliente a Eliminar:</label>
        <input type="text" name="nombre_eliminar" required>
        <button type="submit">Eliminar Cliente</button>
    </form>
</div>
</div>
</div>
</body>
</html>