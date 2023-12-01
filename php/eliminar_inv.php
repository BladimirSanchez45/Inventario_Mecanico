<?php
include("conexion_be.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $producto_eliminar = mysqli_real_escape_string($conexion, $_POST['producto_eliminar']);

    // Eliminar basado en el nombre
    $eliminar_clientee_query = "DELETE FROM inventarios WHERE Nombre_producto='$producto_eliminar'";

    if (mysqli_query($conexion, $eliminar_clientee_query)) {
        echo "Producto eliminado exitosamente.";
    } else {
        echo "Error al eliminar el Producto: " . mysqli_error($conexion);
    }
}
?>