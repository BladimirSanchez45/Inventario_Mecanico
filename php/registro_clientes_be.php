<?php

    include 'conexion_be.php';

    $cliente_name = $_POST["cname"];
    $cliente_adress = $_POST["cadress"];
    $cliente_tel = $_POST["ctel"];
    $cliente_email = $_POST["cemail"];
    


    $query = "INSERT INTO clientes(Nombre,Direccion,Telefono,email)VALUES('$cliente_name','$cliente_adress','$cliente_tel','$cliente_email')";


    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
        
        <script>
            alert("Cliente Almacenado Exitosamente");
            window.location = "../index.php";
        </script>

        ';
    }else{
        echo '
        <script>
            alert("Intentalo de nuevo, Cliente no almacenado");
            window.location = "../index.php";
        </script>

        ';
    }

    mysqli_close($conexion);
?>