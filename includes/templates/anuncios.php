<?php
    // Importar la conexion
    require __DIR__ . "/../config/database.php";
    $db = conectarDB();

    // Consultar
    $query = "SELECT * FROM propiedades LIMIT {$limite}";

    // Obtener resultado
    $consulta = mysqli_query($db, $query);

?>


<section class="contenedor-anuncios contenedor">
    <?php while($propiedad = mysqli_fetch_assoc($consulta)): ?>
        <div class="anuncio"><!--Anuncio 1-->
            <div class="anuncio-img">
                
                    <img loading="lazy" src="/imagenes/<?php echo $propiedad['imagen']; ?>" alt="anuncio">
                
            </div>
            <div class="info-anuncio">
                <h3><?php echo $propiedad['titulo']; ?></h3>
                <p><?php echo $propiedad['descripcion']; ?></p>
                <span><?php echo $propiedad['precio']; ?></span>
                <div class="iconos-anuncio">
                    <img src="build/img/icono_wc.svg" alt="icono wc">
                    <p><?php echo $propiedad['wc']; ?></p>
                    <img src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p><?php echo $propiedad['estacionamiento']; ?></p>
                    <img src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                    <p><?php echo $propiedad['habitaciones']; ?></p>
                </div>
                <a href="anuncios.php" class="btnAnuncio" type="button">Ver propiedad</a>
            </div>
        </div><!--Aqui termina el anuncio 1-->
    <?php endwhile; ?> 
</section>