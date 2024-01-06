<?php
    require 'includes/funciones.php';

    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Conoce sobre nosotros</h1>
        <section class="contenedor sobre-nosotros">
            <div class="nosotros-imagen">
                <picture>
                    <source srcset="build/img/blog3.webp" type="image/webp">
                    <source srcset="build/img/blog3.jpg" type="image/jpg">
                    <img loading="lazy" src="build/img/blog3.jpg" alt="">
                </picture>
            </div>
            <div class="info-nosotros">
                <h4>25 Años de experiencia</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, exercitationem 
                    numquam? Dolor recusandae adipisci eum commodi sapiente possimus alias obcaecati,
                    enim, veniam deserunt nisi? Quibusdam corporis repellat, laborum magnam repellendus,
                    officiis laudantium veritatis modi ad asperiores, exercitationem sapiente inventore
                    cum facilis alias nihil dolore a? Reprehenderit aspernatur excepturi labore quidem
                    recusandae nulla provident nostrum quod ex cumque itaque sequi, quibusdam nobis,
                    tempora voluptates dolore minima distinctio doloribus officiis. Eius reprehenderit
                    laborum magnam </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, veritatis eum. 
                    Debitis odio saepe dolor est, incidunt molestiae eveniet adipisci! Voluptatum 
                    officia sit excepturi ipsum consectetur ratione, voluptates vel omnis nemo 
                    praesentium nisi reprehenderit delectus perspiciatis tempore sed provident 
                    minima qui soluta itaque natus asperiores. Quaerat quos iure unde fugiat?</p>
            </div>
        </section>
        <h1>Más sobre nosotros</h1>

        <div class="iconos-nosotros"><!--Aqui comienza la informacion con iconos-->
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Aliquam sunt mollitia officia corporis nam minus sapiente 
                rerum reprehenderit deserunt neque non, cupiditate quaerat 
                eaque magni a vero! Ex, ipsa alias.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Aliquam sunt mollitia officia corporis nam minus sapiente 
                rerum reprehenderit deserunt neque non, cupiditate quaerat 
                eaque magni a vero! Ex, ipsa alias.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono" loading="lazy">
                <h3>A tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Aliquam sunt mollitia officia corporis nam minus sapiente 
                rerum reprehenderit deserunt neque non, cupiditate quaerat 
                eaque magni a vero! Ex, ipsa alias.</p>
            </div>
        </div>
    </main>

    <?php 
        incluirTemplate('footer');
    ?>   

    