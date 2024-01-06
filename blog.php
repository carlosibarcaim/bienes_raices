<?php
    require 'includes/funciones.php';

    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Nuestro Blog</h1>
        <section class="blog">
            <div class="contenedor">
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
                    <div class="blog-imagen">
                        <picture>
                            <source srcset="build/img/blog3.webp" type="image/webp">
                            <source srcset="build/img/blog3.jpg" type="image/jpg">
                            <img loading="lazy" src="build/img/blog3" alt="imagen blog">
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
                            <source srcset="build/img/blog4.webp" type="image/webp">
                            <source srcset="build/img/blog4.jpg" type="image/jpg">
                            <img loading="lazy" src="build/img/blog4" alt="imagen blog">
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
        </section>
    </main>

    <?php 
        incluirTemplate('footer');
    ?>   

    