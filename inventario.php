<?php
    include('bienvenida.php');
    $inventarios = "SELECT * FROM inventarios";

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
    <div class = "button-tableuser"><button><a href="./php/tabla_inventario.php">Ver lista de Productos</a></button></div>
    <form action="php/registro_clientes_be.php" method="POST" class="formulario__register">
        <p>Nombre del Producto</p>
        <input type="text" id="name" class="field" name = "nombrep"> <br/>

        <p>Cantidad</p>
        <input type="num" id="num" class="field"  name = "cantidadp"> <br/>

        <p>Precio Compra</p>
        <input type="money" id="money" class="field"  name = "comprap"> <br/>

        <p>Precio Venta</p>
        <input type="money" id="money" class="field"  name = "ventap"> <br/>

        <p class = "center-content">
            <input type="submit" class="btn btn-green" value="Agregar Producto">
        </p>

    </form>
</body>
</html>