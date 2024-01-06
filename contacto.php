<?php
    require 'includes/funciones.php';

    incluirTemplate('header');
?>

    <main class="contenedor seccion contendio-centrado">
        <h1>Contacto</h1>
        <div class="imagen-contacto">
            <picture>
                <source srcset="build/img/destacada3.webp" type="image/webp">
                <source srcset="build/img/destacada3.jpg" type="image/jpg">
                <img loading="lazy" src="build/img/destacada3" alt="">
            </picture>
        </div>
        <div class="formulario-contacto">
            <h2>Llena el formulario de contacto</h2>
            <form class="formulario">
                <fieldset>
                    <legend>Informacion Personal</legend>
                    <label for="nombre">Nombre: </label>
                    <input name="nombre" type="text" placeholder="Nombre" id="nombre">
                    <label for="email">E-mail: </label>
                    <input name="e-mail" type="email" placeholder="Email" id="email">
                    <label for="telefono">Telefono: </label>
                    <input name="telefono" type="tel" placeholder="Telefono" id="telefono">
                    <label for="mensaje">Mensaje: </label>
                    <textarea name="mensaje" id="mensaje"></textarea>
                </fieldset>
                <fieldset>
                    <legend>Informacion sobre propiedad</legend>
                    <label for="opciones">Compra o vende: </label>
                    <select name="opciones" id="opciones">
                        <option value="" disabled selected>Seleccione</option>
                        <option value="compra">Comprar</option>
                        <option value="venta">Vender</option>
                    </select>
                    <label for="presupuesto">Presupuesto</label>
                    <input type="number" name="presupuesto" id="presupuesto" placeholder="Presupuesto">
                </fieldset>
                <fieldset>
                    <legend>Contacto</legend>
                    <p>Como desdea ser contactado</p>
                    <div class="forma-contacto">
                        <label for="contactar-telefono">Telefono</label>
                        <input type="radio" name="contacto" value="telefono" id="contactar-telefono">
                        <label for="contactar-email">E-mail</label>
                        <input type="radio" name="contacto" value="email" id="contactar-email">
                    </div>
                        <p>Si elije telefono defina fecha y hora para ser contactado</p>
                        <label for="fecha">Fecha</label>
                        <input type="date">
                        <label for="fecha">Hora</label>
                        <input type="time" min="09:00" max="18:00">
                </fieldset>
                <div class="alinear-izquierda">
                    <input type="submit" value="Enviar" class="btnVerde alinear-izquierda">
                </div>
                
            </form>
        </div>
        
    </main>

    <?php 
        incluirTemplate('footer');
    ?>   

    