<?php

    include 'conexion_be.php';

    $service_datein = $_POST["datein"];
    $service_dateout = $_POST["dateout"];
    $service_timein = $_POST["timein"];
    $service_import = $_POST["import"];
    $service_sintoms = $_POST["sintoms"];
    $service_diagnostic = $_POST["diagnostic"];
    $service_service = $_POST["service"];
    $service_status = $_POST["status"];



    $query = "INSERT INTO autos(Fecha_Entrada,Fecha_Salida,Hora,Importe,Sintomas,Diagnostico,Servicios,Estatus)VALUES('$service_datein','$service_dateout','$service_timein','$service_import','$service_sintoms','$service_diagnostic','$service_service','$service_status')";


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