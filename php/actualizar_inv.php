<?php
include("conexion_be.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $producto_actualizar = mysqli_real_escape_string($conexion, $_POST['producto_actualizar']);
    
    $nuevo_producto = mysqli_real_escape_string($conexion, $_POST['nuevo_producto']);
    $nueva_cantidad = mysqli_real_escape_string($conexion, $_POST['nueva_cantidad']);
    $nuevo_comprado = mysqli_real_escape_string($conexion, $_POST['nuevo_comprado']);
    $nuevo_venta = mysqli_real_escape_string($conexion, $_POST['nuevo_venta']);

    
    $actualizar_clientee_query = "UPDATE inventarios 
                                 SET Nombre_producto='$nuevo_producto', Cantidad_producto='$nueva_cantidad', 
                                     Precio_comprado='$nuevo_comprado', Precio_venta='$nuevo_venta' 
                                 WHERE Nombre_producto='$producto_actualizar'";

    if (mysqli_query($conexion, $actualizar_clientee_query)) {
        echo "Producto actualizado exitosamente.";
    } else {
        echo "Error al actualizar el Producto: " . mysqli_error($conexion);
    }
}
?>