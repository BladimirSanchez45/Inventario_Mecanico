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



    $query = "INSERT INTO servicios(Fecha_Entrada,Fecha_Salida,Hora,idAuto,Importe,Sintomas,Diagnostico,Servicios,Estatus,idCometidos)VALUES('$service_datein','$service_dateout','$service_timein',1,'$service_import','$service_sintoms','$service_diagnostic','$service_service','$service_status',1)";


    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
        
        <script>
            alert("Cita Almacenada Exitosamente");
            window.location = "../index.php";
        </script>

        ';
    }else{
        echo '
        <script>
            alert("Intentalo de nuevo, Cita no almacenada");
            window.location = "../index.php";
        </script>

        ';
    }

    mysqli_close($conexion);
?>