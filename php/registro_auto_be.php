<?php

    include 'conexion_be.php';

    $auto_model = $_POST["model"];
    $auto_serial = $_POST["serial"];
    $auto_year = $_POST["year"];
    $auto_plates = $_POST["plates"];
    $auto_problem = $_POST["problem"];

    $query = "INSERT INTO autos(model,serial,year,plates,problem)VALUES('$auto_model','$auto_serial','$auto_year','$auto_plates', '$auto_problem')";


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