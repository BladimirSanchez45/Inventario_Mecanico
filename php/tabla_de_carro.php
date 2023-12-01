<?php
    include("conexion_be.php");

    $clientes_query = "SELECT * 
    FROM autos INNER JOIN 
    clientes ON clientes.idCliente=autos.idCliente
    WHERE clientes.idCliente = 2";
    
    $autos_query = "SELECT * 
    FROM autos INNER JOIN 
    clientes ON clientes.idCliente=autos.idCliente
    WHERE autos.placas= 2";
    
    $clientes_result = mysqli_query($conexion, $clientes_query);
    $autos_result = mysqli_query($conexion, $autos_query);

    // Concatenando en un mismo array
    $merged_results = array_merge(mysqli_fetch_all($clientes_result, MYSQLI_ASSOC), mysqli_fetch_all($autos_result, MYSQLI_ASSOC));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Autos</title>
    <link rel="stylesheet" href="../assets/css/tabla_carro.css">
</head>
<body>
<div class="search-container">
    <form method="POST" action="buscar.php">
        <label for="search">Buscar por Nombre:</label>
        <input type="text" id="search" name="search">
        <button type="submit">Buscar</button>
    </form>
    </div>
    <div class="container-table">
        <div class="table-title">Datos Del Auto</div>
        <div class="table-header">nombre</div>
        <div class="table-header">Placas</div>
        <div class="table-header">Modelo</div>
        <div class="table-header">Año</div>
        <?php foreach ($merged_results as $row) { ?>
        <div class="table-item"><?php echo $row["Nombre"];?></div>
        <div class="table-item"><?php echo $row["Placas"];?></div>
        <div class="table-item"><?php echo $row["Modelo"];?></div>
        <div class="table-item"><?php echo $row["Año"];?></div>

        <?php } ?>
    </div>  
</body>
</html>