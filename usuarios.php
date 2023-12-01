<?php
    include('bienvenida.php');
    $clientes = "SELECT * FROM clientes";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Usuarios</title>
    <link rel="stylesheet" href='./assets/css/boton.css'>
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

        .button-tableuser {
            background-color: #3498db;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
        align-items: center;
        }

        
    </style>
</head>
<body>
    <div class = "button-tableuser"><button><a href="./php/tabla_de_usuarios.php">Ver lista de usuarios</a></button></div>
    <form action="php/registro_clientes_be.php" method="POST" class="formulario__register">
        <p>Ingresa tu nombre</p>
        <input type="text" id="name" class="field" name = "cname"> <br/>

        <p>Direccion</p>
        <input type="text" id="adress" class="field"  name = "cadress"> <br/>

        <p>Telefono</p>
        <input type="tel" id="tel" class="field"  name = "ctel"> <br/>

        <p>Correo Electronico</p>
        <input type="email" id="email" class="field"  name = "cemail"> <br/>

        <p class = "center-content">
            <input type="submit" class="btn btn-green" value="Agregar cliente">
        </p>

        <p>¿Quieres agregar un carro?</p>
        <label>
        <input type="radio" name="opcion" value="si" onclick="mostrarPreguntasAdicionales()"> Sí
        </label>

        <label>
        <input type="radio" name="opcion" value="no" onclick="ocultarPreguntasAdicionales()"> No
        </label>

        <div id="preguntasAdicionales" style="display:none;">
        <h2>Preguntas adicionales:</h2> <br/>

        <form action="php/registro_auto_be.php" method="POST" class="formulario__register">
        <p>Placas</p>
        <input type="text" id="plates" class="field" name = "plates"> <br/>

        <p>Marca del carro</p>
        <input type="text" id="brand" class="field" name = "brand"> <br/>

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

        <p class = "center-content">
            <input type="submit" class="btn btn-green" value="Agregar auto">
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