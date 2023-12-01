<?php
include("conexion_be.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_eliminar = mysqli_real_escape_string($conexion, $_POST['nombre_eliminar']);

    // Eliminar basado en el nombre
    $eliminar_cliente_query = "DELETE FROM clientes WHERE Nombre='$nombre_eliminar'";

    if (mysqli_query($conexion, $eliminar_cliente_query)) {
        echo "Cliente eliminado exitosamente.";
    } else {
        echo "Error al eliminar el cliente: " . mysqli_error($conexion);
    }
}
?>