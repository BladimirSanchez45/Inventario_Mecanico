<?php
    include('bienvenida.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar Cita</title>
    <link rel="stylesheet" href='/assets/css/boton.css'>
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
            border-radius: 3px;
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
    <form action="">
        <p>Ingresa tu nombre</p>
        <input type="text" id="text" class="field"> <br/>

        <p>Numero Telefonico</p>
        <input type="tel" id="tel" class="field"> <br/>

        <p>Correo Electronico</p>
        <input type="email" id="email" class="field"> <br/>

        <p>Modelo del Carro</p>
        <input type="text" id="text" class="field"> <br/>

        <p>Numero de Serie del carro</p>
        <input type="text" id="text" class="field"> <br/>

        <p>Año del carro</p>
        <input type="number" id="number" class="field"> <br/>

        <p>Problema</p>
        <input type="text" id="text" class="field"> <br/>

        <p>Fecha de Cita</p>
        <input type="date" id="date" class="field"> <br/>

        <p>Hora de la cita</p>
        <input type="time" id="time" class="field"> <br/>

        <p class = "center-content">
            <input type="submit" class="btn btn-green" value="Agendar Cita">
        </p>


    </form>
</body>
</html>