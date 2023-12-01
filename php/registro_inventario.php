<?php

    include 'conexion_be.php';

    $inventario_nombre = $_POST["nombrep"];
    $inventario_cantidad = $_POST["cantidadp"];
    $inventario_precio_comprado = $_POST["compradop"];
    $inventario_precio_venta = $_POST["ventap"];
    


    $query = "INSERT INTO inventarios(Nombre_producto,Cantidad_producto,Precio_comprado,Precio_venta)VALUES('$inventario_nombre','$inventario_cantidad','$inventario_precio_comprado','$inventario_precio_venta')";


    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
        
        <script>
            alert("Producto Almacenado Exitosamente");
            window.location = "../index.php";
        </script>

        ';
    }else{
        echo '
        <script>
            alert("Intentalo de nuevo, Producto no almacenado");
            window.location = "../index.php";
        </script>

        ';
    }

    mysqli_close($conexion);
?>