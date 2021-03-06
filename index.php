<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agenda Me</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/Estilos.css" >
</head>
<body>
    <!-- Inicio Navbar -->
    <header class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" role="navigation">
        <a class="navbar-brand mb-0 h1" href="index.php">Agenda Me</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAgenda" aria-controls="navbarNavAgenda" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAgenda">
             <div class="navbar-nav mr-auto">
                <a class="nav-item nav-link " href="#">Inicio </a>
                <a class="nav-item nav-link" href="#">Nosotros</a>
                <a class="nav-item nav-link" href="#">Servicios</a>
                <a class="nav-item nav-link " href="#">Contacto</a>
            <?php
            session_start();
            if(isset($_SESSION["Estado"]) && $_SESSION["Estado"] == 'Verificado') 
            {
                echo "<a class='nav-item nav-link' href='Shedule.php'>Agenda</a>";
            }?>
            </div>
            <div class="navbar-nav ">
            <?php
            if(isset($_SESSION["Estado"]) && $_SESSION["Estado"] == 'Verificado' ) 
            {
                echo "<a class='nav-item nav-link' href='index.php'>Bienvenido " . $_SESSION["usuario"].  "</a>";
                echo "<a class='nav-item nav-link' href='Service/Salir.php'>Salir</a>";
            }else
            {
            ?>
                <a class="nav-item nav-link" href="UserNew.php">Crear Cuenta</a>
                <a class="nav-item nav-link" href="LoginUser.php">Login</a>
            <?php
            }
            ?>
             </div>
        </div>
    </header>
    <!-- Fin navbar -->