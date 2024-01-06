<?php
    require 'includes/funciones.php';
    incluirTemplate('header');

    // Importar la conexion
    require __DIR__ . '/includes/config/database.php';
    $db = conectarDB();

    // Consultar
    $query = "SELECT * FROM propiedades";


    //Obtener resultado
    $consulta = mysqli_query($db, $query);


?>

    <main class="contenedor seccion">
        <h1>Casas y depas en venta</h1>
        
        <section class="contenedor-anuncios contenedor">
            <?php while($propiedad = mysqli_fetch_assoc($consulta)): ?>
                <div class="anuncio"><!--Anuncio 1-->
                    <div class="anuncio-img">
                            <img loading="lazy" src="/imagenes/<?php echo $propiedad['imagen']; ?>" alt="anuncio">
                    </div>
                    <div class="info-anuncio">
                        <h3><?php echo $propiedad['titulo']; ?></h3>
                        <p><?php echo $propiedad['descripcion']; ?></p>
                        <span>$ <?php echo $propiedad['precio']; ?></span>
                        <div class="iconos-anuncio">
                            <img src="build/img/icono_wc.svg" alt="icono wc">
                            <p><?php echo $propiedad['wc']; ?></p>
                            <img src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p><?php echo $propiedad['estacionamiento']; ?></p>
                            <img src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                            <p><?php echo $propiedad['habitaciones']; ?></p>
                        </div>
                        <a href="anuncio1.php?id=<?php echo $propiedad['id']; ?>" class="btnAnuncio" type="button">Ver propiedad</a>
                    </div>
                </div><!--Aqui termina el anuncio 1-->
            <?php endwhile; ?>
        </section>

    </main>

    <?php 
        // Cerrar conexion
        mysqli_close($db);

        incluirTemplate('footer');
    ?>   

    