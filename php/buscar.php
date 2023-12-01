<?php
include("conexion_be.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén el término de búsqueda del formulario
    $searchTerm = mysqli_real_escape_string($conexion, $_POST['search']);

    // Realiza la consulta con la condición de búsqueda por nombre
    $search_query = "SELECT * 
        FROM autos 
        INNER JOIN clientes ON clientes.idCliente = autos.idCliente
        WHERE clientes.Nombre LIKE '%$searchTerm%'
    ";

    $search_result = mysqli_query($conexion, $search_query);

    // Muestra los resultados
    if ($search_result) {
        $search_results = mysqli_fetch_all($search_result, MYSQLI_ASSOC);
    } else {
        echo "Error en la consulta: " . mysqli_error($conexion);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de Búsqueda</title>
    <link rel="stylesheet" href="../assets/css/tabla_usuario.css">
</head>
<body>
    <div class="container-table">
        <div class="table-title">Resultados de Búsqueda</div>
        <div class="table-header">Nombre</div>
        <div class="table-header">Placas</div>
        <div class="table-header">Modelo</div>
        <div class="table-header">Año</div>
        <?php
        if (isset($search_results)) {
            foreach ($search_results as $row) {
                echo "<div class='table-item'>" . $row["Nombre"] . "</div>";
                echo "<div class='table-item'>" . $row["Placas"] . "</div>";
                echo "<div class='table-item'>" . $row["Modelo"] . "</div>";
                echo "<div class='table-item'>" . $row["Año"] . "</div>";
            }
        } else {
            echo "<div class='no-results'>No se encontraron resultados.</div>";
        }
        ?>
    </div>
</body>
</html>