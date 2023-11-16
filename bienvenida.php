<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Multiservicios Sanchez</title>
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="./assets/css/estilos1.css">
    <!-- CUSTOM JS -->
    <script src="./assets/js/script-dashboard.js" defer></script>
</head>
<body>
    <div class="menu-dashboard">
        <!-- TOP MENU -->
        <div class="top-menu">
            <div class="logo">
                <img src="./assets/images/logo bla.png" alt="">
                <span>Clavem</span>
            </div>
            <div class="toggle">
                <i class='bx bx-menu'></i>
            </div>
        </div>
        <!-- INPUT SEARCH -->
        <div class="input-search">
            <i class='bx bx-search'></i>
            <input type="text" class="input" placeholder="Buscar">
        </div>
        <!-- MENU -->
        <div class="menu">
            <div class="enlace">
                <a href="carro.php">
                <i class='bx bx-car'></i>
                <span>Nuevo Carro</span>
            </div>

            <div class="enlace">
                <a href="usuarios.php">
                <i class="bx bx-user"></i>
                <span>Nuevo Usuario</span>
            </div>

            <div class="enlace">
                <a href="https://chat.openai.com/">
                <i class='bx bx-bot' ></i>
                <span>Mechanic Bot</span>
            </div>
            
            <div class="enlace">
                <a href="citas.php">
                <i class='bx bx-user-check'></i>
                <span>Agendar Cita</span>
            </div>

            <div class="enlace">
                <a href="php/cerrar_sesion.php">
                <i class="bx bx-cog"></i>
                <span>Cerrar Sesion</span>
                </a>
            </div>
        </div>
    </div> 
</body>
</html>