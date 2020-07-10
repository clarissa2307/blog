<?php require 'header.php'; ?>

    <div class="contenedor">
        <div class="post">
            <article>
                <h2 class="titulo"><a href="#">Titulo del Articulo</a></h2>
                <p class="fecha">1 de Enero de 2016</p>
                <div class="thumb">
                    <a href="#">
                        <img src="<?php echo RUTA; ?>/imagenes/10.jpg" width="200" height="200" alt="">
                    </a>
                </div>
                <p class="extracto">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, reprehenderit!</p>
                <a href="#" class="continuar">Continuar leyendo</a>
            </article>
        </div>

        <div class="post">
            <article>
            <h2 class="titulo"><a href="#">Titulo del Articulo</a></h2>
                <p class="fecha">1 de Enero de 2016</p>
                <div class="thumb">
                    <a href="#">
                        <img src="<?php echo RUTA; ?>/imagenes/9.jpg" width="200" height="200" alt="">
                    </a>
                </div>
                <p class="extracto">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, reprehenderit!</p>
                <a href="#" class="continuar">Continuar leyendo</a>
            </article>
        </div>
        <?php require 'paginacion.php'; ?>
    </div>
<?php require 'footer.php'; ?>