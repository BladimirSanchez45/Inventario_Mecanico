<?php
    include('bienvenida.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo carro</title>
    <link rel="stylesheet" href='../assets/css/boton.css'>
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
    <div class = "button-tableuser"><button><a href="./php/tabla_de_carro.php">Ver lista de carros</a></button></div>
    <form action="php/registro_auto_be.php" method="POST" class="formulario__register">
        <p>Placas</p>
        <input type="text" id="plates" class="field" name = "plates"> <br/>

        <p>Marca del carro</p>  
        <select name="brands" id="brands">
            <option value="1">Nissan</option>
            <option value="2">Mercedes</option>
            <option value="3">Mazda</option>
            <option value="4">Toyota</option>
            <option value="5">Dodge</option>
            <option value="6">Ford</option>
            <option value="7">BMW</option>
            <option value="8">Honda</option>
            <option value="9">Hyundai</option>
            <option value="10">Kia</option>
            <option value="11">Chevrolet</option>
            <option value="12">Fiat</option>
            <option value="13">Jeep</option>

        </select>
        <br><br>
        <input type="submit" value="Submit">  

        <p>Modelo del carro</p>
        <input type="text" id="model" class="field" name = "model"> <br/>

        <p>Año del carro</p>
        <input type="text" id="year" class="field" name = "year"> <br/>

        <p>Color del carro</p>
        <input type="text" id="color" class="field" name = "color"> <br/>

        <p>Inventario</p>
        <input type="text" id="inventary" class="field" name = "inventary"> <br/>

        <p>Numero de serie del carro</p>
        <input type="text" id="numserie" class="field" name = "numserie"> <br/>

        <p>Cliente existente</p>
        <input type="text" id="client" class="field" name = "clientexist"> <br/>
        
        <p>¿Quieres agregar un Cliente?</p>
        <label>
        <input type="radio" name="opcion" value="si" onclick="mostrarPreguntasAdicionales()"> Sí
        </label>

        <label>
        <input type="radio" name="opcion" value="no" onclick="ocultarPreguntasAdicionales()"> No
        </label>

        <div id="preguntasAdicionales" style="display:none;">
        <h2>Preguntas adicionales:</h2> <br/>

        <p>Ingresa tu nombre</p>
        <input type="text" id="name" class="field"> <br/>

        <p>Direccion</p>
        <input type="text" id="adress" class="field"> <br/>

        <p>Telefono</p>
        <input type="tel" id="tel" class="field"> <br/>

        <p>Correo Electronico</p>
        <input type="email" id="email" class="field"> <br/>

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