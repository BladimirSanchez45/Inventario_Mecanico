<?php
include("conexion_be.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_actualizar = mysqli_real_escape_string($conexion, $_POST['nombre_actualizar']);
    
    $nuevo_nombre = mysqli_real_escape_string($conexion, $_POST['nuevo_nombre']);
    $nueva_direccion = mysqli_real_escape_string($conexion, $_POST['nueva_direccion']);
    $nuevo_telefono = mysqli_real_escape_string($conexion, $_POST['nuevo_telefono']);
    $nuevo_email = mysqli_real_escape_string($conexion, $_POST['nuevo_email']);

    // Actualizar basado en el nombre (o correo electrónico)
    $actualizar_cliente_query = "UPDATE clientes 
                                 SET Nombre='$nuevo_nombre', Direccion='$nueva_direccion', 
                                     Telefono='$nuevo_telefono', email='$nuevo_email' 
                                 WHERE Nombre='$nombre_actualizar'";

    if (mysqli_query($conexion, $actualizar_cliente_query)) {
        echo "Cliente actualizado exitosamente.";
    } else {
        echo "Error al actualizar el cliente: " . mysqli_error($conexion);
    }
}
?>