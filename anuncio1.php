<?php
    require 'includes/funciones.php';

    incluirTemplate('header');

    // Validar el id
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id){
        header('location: /');
    }


    // Importar conexion 
    require __DIR__ . '/includes/config/database.php';
    $db = conectarDB();

    //Consulta
    $query = "SELECT * FROM propiedades WHERE id = ${id}";

    // Obtener resultado
    $consulta = mysqli_query($db, $query);

        // echo "<pre>";
        // var_dump($consulta);
        // echo "</pre>";
        
        //En caso de que no exista el id, se redirecciona al inicio 
        if(!$consulta->num_rows){
            header('location: /');
        }

    $propiedad = mysqli_fetch_assoc($consulta)
?>

    <main class="contenedor seccion contenido-centrado">
        <div>
            <h1><?php echo $propiedad['titulo']; ?></h1>

            <div class="imagen">
                <img loading="lazy" src="/imagenes/<?php echo $propiedad['imagen']; ?>" alt="imagen anuncio">
            </div>

            <div class="info-anuncio">
                <span>Precio: $ <?php echo $propiedad['precio']; ?></span>
                <div class="iconos-anuncio">
                    <img src="build/img/icono_wc.svg" alt="icono wc">
                    <p><?php echo $propiedad['wc']; ?></p>
                    <img src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p><?php echo $propiedad['estacionamiento']; ?></p>
                    <img src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                    <p><?php echo $propiedad['habitaciones']; ?></p>
                </div>
                <p>Descripcion:</p>
                <p><?php echo $propiedad['descripcion']; ?></p>
            </div>

        </div>
    </main>

    <?php 
        // Cerrar conexion
        mysqli_close($db);

        incluirTemplate('footer');
    ?>   

   