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
            font-family: Arial;      align-items: center;

            background-color: #18A383; 
            box-sizing: border-box;
            display: flex;
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
    <form action="">
        <p>Modelo del carro</p>
        <input type="text" id="text" class="field"> <br/>

        <p>Numero de Serie del carro</p>
        <input type="number" id="number" class="field"> <br/>

        <p>Año del carro</p>
        <input type="number" id="number" class="field"> <br/>

        <p>CURP</p>
        <input type="text" id="text" class="field"> <br/>

        <p>Problema</p>
        <input type="text" id="text" class="field"> <br/>
        
        <p>¿Quieres agregar un Cliente?</p>
        <label>
        <input type="radio" name="opcion" value="si" onclick="mostrarPreguntasAdicionales()"> Sí
        </label>

        <label>
        <input type="radio" name="opcion" value="no" onclick="ocultarPreguntasAdicionales()"> No
        </label>

        <div id="preguntasAdicionales" style="display:none;">
        <h2>Preguntas adicionales:</h2> <br/>

        <p>Nombre</p>
        <input type="text" id="text" class="field"> <br/>

        <p>Numero Telefonico</p>
        <input type="tel" id="tel" class="field"> <br/>

        <p>Correo Electronico</p>
        <input type="email" id="email" class="field"> <br/>

        <p>CURP</p>
        <input type="text" id="text" class="field"> <br/>
        </div>

        <p class = "center-content">
            <input type="submit" class="btn btn-green" value="Agregar Carro">
        </p>


    </form>

    <script>
    function mostrarPreguntasAdicionales() {
      var preguntasAdicionales = document.getElementById('preguntasAdicionales');
      preguntasAdicionales.style.display = 'block';
    }

    function ocultarPreguntasAdicionales() {
      var preguntasAdicionales = document.getElementById('preguntasAdicionales');
      preguntasAdicionales.style.display = 'none';
    }
  </script>

</body>
</html>