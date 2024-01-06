<?php


    if(!isset($_SESSION)){
        session_start();
    }

    $auth = $_SESSION['login'] ?? false;

    // var_dump($auth);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>
    <header class="header <?php echo ($inicio) ? 'inicio' : '' ?>">
        <div class="contenedor contenido-header"><!--Aqui comienza el contenido del header-->
            <div class="navbar contenedor"><!--Aqui comienza el navbar-->
                <a href="/index.php">
                    <img src="/build/img/logo.svg" alt="Logotipo de bienes raices">
                </a>

                <div class="mobile-menu">
                    <img src="/build/img/barras.svg" alt="icono menu responsive">
                </div>

                <div class="derecha">
                    <img class="dark-mode-boton" src="/build/img/dark-mode.svg" alt="icono dark mode">
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                        <?php if($auth){ ?>
                            <a href="cerrar-sesion.php">Cerrar Sesion</a>
                        <?php } ?>
                    </nav>
                </div>
                
            </div> <!--Aqui termina el navbar-->
            <?php if ($inicio) { ?>
                <h1>Venta de casas y departamentos exlcusivos</h1>  
            <?php } ?>
        </div><!--Aqui termina el contenido del header-->
    </header>