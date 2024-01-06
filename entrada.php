<?php
    require 'includes/funciones.php';

    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para la decoración de tu hogar</h1>
        <div class="imagen-blog">
            <picture>
                <source srcset="build/img/destacada2.webp" type="image/webp">
                <source srcset="build/img/destacada2.jpg" type="image/jpg">
                <img loading="lazy" src="build/img/destacada2.jpg" alt="imagen casa del lago">
            </picture>
        </div>
        <div class="blog-info">          
            <p>Escrito el: <span>29/11/2023 </span>por: <span>Admin</span></p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima incidunt 
                aspernatur odio impedit consequatur magni velit commodi unde recusandae 
                nostrum ducimus itaque dolor dolores facere, hic sit. Omnis facere possimus
                corrupti vitae expedita, iure voluptas unde alias, consectetur sint 
                tempore corporis, quaerat doloremque voluptatem rerum ab voluptatibus 
                laboriosam nostrum. Nam impedit dicta debitis quibusdam consequuntur 
                quo ea explicabo blanditiis odit illum provident ducimus, dolor modi 
                </p>
        </div>
    </main>

    <?php 
        incluirTemplate('footer');
    ?>   

    