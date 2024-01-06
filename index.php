<?php

    require 'includes/funciones.php';

    incluirTemplate('header', $inicio = true);
?>

    <main class="contenedor seccion">
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
        </div><!--Aqui termina iconos nosotros-->
    </main>

    <?php 
        $limite = 3;
        include 'includes/templates/anuncios.php';
    ?>

    <div class="alinear-derecha contenedor"><!--Boton verde para ver todos los anuncios-->
        <a href="anuncios.php" class="btnVerde" type="button">Ver todas</a>
    </div>

    <section><!--Aqui comienza la seccion de contactanos-->
        <div class="contactanos">
            <div class="contactanos-contenido">
                <h2>Encuentra la casa de tus sueños</h2>
                <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad.</p>
                
            </div>
            <div>
                <a href="contacto.php" class="btnContactanos" type="button">Contactanos</a>
            </div>
        </div>
    </section><!--Aqui termina la seccion de contactanos-->
    
    <section class="blog contenedor"><!--Aqui comienza la seccion del blog-->
        <div class="contenedor">
            <h3>Nuestro blog</h3>
            <div class="nuestro-blog">
                <div class="blog-imagen">
                    
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpg">
                        <img loading="lazy" src="build/img/blog1" alt="imagen blog">
                    </picture>
                </div>
                <div class="blog-info">
                    <a href="entrada.php">
                        <h4>Terraza en el techo de tu casa</h4>
                    </a>
                    <p>Escrito el: <span>29/11/2023</span> por: <span>Admin</span></p>
                    <p>Consejos para contruir una terraza en el techi de tu casa, con los 
                    mejores materiales y ahorrando dinero.
                    </p>
                </div>

                <div class="blog-imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpg">
                        <img loading="lazy" src="build/img/blog2" alt="imagen blog">
                    </picture>
                </div>
                <div class="blog-info">
                    <a href="entrada.php">
                        <h4>Guía para la decoracion de tu hogar</h4>
                    </a>
                    <p>Escrito el: <span>29/11/2023</span> por: <span>Admin</span></p>
                    <p>Maximiza el espacio en tu hogar con esta guía, aprende a combinar 
                    muebles y colores para darle vida a tu espacio.
                    </p>
                </div>
            </div>
        </div>
        <div class="contenedor">
            <h3>Testimoniales</h3>
            <div class="testimonial">
                
                <div class="testimonial-info">
                    <img src="build/img/comilla.svg" alt="imagen comilla">
                    <blockquote>El personal se comportó de una excelente forma, muy buena
                    atencion y la casa que me ofrecieron cumple con todas mis espectativas.
                    <p>- Carlos Ibar</p>
                    </blockquote>
                </div>
            </div>
        </div>
            
        
    </section><!--Aqui termina la seccion del blog-->

    <?php 
        incluirTemplate('footer');
    ?>    

    