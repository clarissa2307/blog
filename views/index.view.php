<?php require 'header.php'; ?>

    <div class="contenedor">
        <?php foreach ($posts as $posts): ?>
            <div class="post">
                <article>
                    <h2 class="titulo"><a href="single.php?id=<?php echo $posts['id']; ?>"><?php echo $posts['titulo']; ?></a></h2>
                    <p class="fecha"><?php echo $posts['fecha']; ?></p>
                    <div class="thumb">
                        <a href="single.php?id=<?php echo $posts['id']; ?>">
                            <img src="<?php echo RUTA; ?>/imagenes/<?php echo $posts['thumb']; ?>" width="200" height="200" alt="">
                        </a>
                    </div>
                    <p class="extracto"><?php echo $posts['extracto']; ?>!</p>
                    <a href="single.php?id=<?php echo $posts['id']; ?>" class="continuar">Continuar leyendo</a>
                </article>
            </div> 
        <?php endforeach; ?>
         
       
        <?php require 'paginacion.php'; ?>
    </div>
<?php require 'footer.php'; ?>