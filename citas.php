<?php
    include('bienvenida.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar Cita</title>
    <link rel="stylesheet" href='../assets/css/boton.css'>
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: Arial; 
            background-color: #18A383; 
            box-sizing: border-box;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;

        }
        
        form{
            background-color: white;
            border-radius: 10px;
            color: #999;
            font-size: 0.8em;
            padding: 10px;
            margin: 0 auto;
            width: 300px;
        }

        input, textarea{
            border: 0;
            outline: none;

            width: 280px;

        }

        .field{
            border: solid 1px;
            padding: 10px;


        }

        .field:focus{
            border-color: #18A383;
        }

        .center-content{
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="php/registro_servicio_be.php" method="POST" class="formulario_citas">

        <p>Nombre del cliente</p>
        <input type="text" id="name" class="field" name = "cname"> <br/>

        <p>Marca del carro</p>
        <input type="text" id="brand" class="field" name = "brand"> <br/>

        <p>Modelo del carro</p>
        <input type="text" id="model" class="field" name = "model"> <br/>
        
        <p>Fecha de entrada del carro</p>
        <input type="date" id="datein" class="field" name = "datein"> <br/>

        <p>Fecha Estimada de salida</p>
        <input type="date" id="dateout" class="field" name = "dateout"> <br/>

        <p>Hora de entrada</p>
        <input type="time" id="hour" class="field"  name = "timein"> <br/>

        <p>Sintomas del auto (por el cliente)</p>
        <input type="text" id="problemclient" class="field"  name = "sintoms"> <br/>

        <p>Diagnostico al ser revisado (por el mecanico)</p>
        <input type="text" id="problemmecanic" class="field"  name = "diagnostic"> <br/>

        <p>Estatus del auto (Detalles esteticos u informacion)</p>
        <input type="text" id="status" class="field"  name = "status"> <br/>

        <p>Servicios Cometidos</p>
        <input type="text" id="servicemade" class="field"  name = "cometidos"> <br/>

        <p>Importe</p>
        <input type="money" id="money" class="field"  name = "import"> <br/>

        <p class = "center-content">
            <input type="submit" class="btn btn-green" value="Agendar Cita">
        </p>


    </form>
</body>
</html>