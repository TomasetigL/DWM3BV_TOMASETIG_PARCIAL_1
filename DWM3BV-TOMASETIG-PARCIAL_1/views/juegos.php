<?php
require_once 'libs/catalogos.php';


$plataforma = obtenerCatalogo();


$productos = filtrarPorPlataforma($plataforma);

?>



<h2 class="text-center mt-3">Todos los precios se encuentran en moneda USD (Dólar Estadounidense)</h2>
<div class="container">
    <h1 class="text-center my-5"><!-- <?=$productos[0]['plataforma']?> --></h1>
    <div class="row">
        <?php foreach ($productos as $producto) {?>
        <div class="col-3">
            <div class="card mb-3">
                <img src="<?= $producto['imagen'] ?>" class="card-img-top" alt="">
                <div class="card-body">
                    <p class="fs-6 m-0 fw-bold text-danger"><?= $producto['plataforma'] ?></p>
                    <h5 class="card-title"><?= $producto['titulo'] ?></h5>
                    <p class="card-text"><?= $producto['fecha_lanzamiento'] ?></p>
                    <p class="card-text"><?= $producto['plataforma'] ?></p>
                
                </div>
               
                <div class="card-body">
                    <div class="fs-3 mb-3 fw-bold text-center text-danger"><?= $producto['precio'] ?></div>
                    <a href="detalle.php?titulo= <?= $producto['titulo'] ?> & fecha= <?= $producto['fecha_lanzamiento'] ?> & plataforma= <?= $producto['plataforma'] ?> & precio= <?= $producto['precio'] ?> & imagen= <?= $producto['imagen'] ?> & descripcion= <?= $producto['descripcion'] ?> & edad= <?= $producto['edad'] ?> " class="btn btn-danger w-100 fw-bold" >Ver detalle</a>

                  
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
