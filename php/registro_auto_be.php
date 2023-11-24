<?php

    include 'conexion_be.php';

    $auto_plates = $_POST["plates"];
    $auto_brand = $_POST["brand"];
    $auto_model = $_POST["model"];
    $auto_year = $_POST["year"];
    $auto_color = $_POST["color"];
    $auto_inventary = $_POST["inventary"];
    $auto_numserie = $_POST["numserie"];
    $auto_client = $_POST["clientesxist"];


    $query = "INSERT INTO autos(Placas,idMarca,Modelo,Año,Color,Inventario,idCliente,NoSerie)VALUES('$auto_plates','$auto_brand','$auto_model','$auto_year','$auto_color','$auto_inventary','$auto_numserie','$auto_client')";


    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
        
        <script>
            alert("Auto Almacenado Exitosamente");
            window.location = "../index.php";
        </script>

        ';
    }else{
        echo '
        <script>
            alert("Intentalo de nuevo, Auto no almacenado");
            window.location = "../index.php";
        </script>

        ';
    }

    mysqli_close($conexion);
?>