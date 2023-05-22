<?php
require_once 'libs/catalogos.php';


$consolas = obtenerConsolas();


$productos = filtrarPorConsola($consolas);

?>



<h2 class="text-center mt-3">Todos los precios se encuentran en moneda USD (Dólar Estadounidense)</h2>
<div class="container mt-3">
    <div class="row">
        <?php foreach ($productos as $producto) {?>
        <div class="col-3">
            <div class="card mb-3">
                <img src="<?= $producto['imagen'] ?>" class="card-img-top" alt="">
                <div class="card-body">
                    <p class="fs-6 m-0 fw-bold text-danger"><?= $producto['nombre'] ?></p>
                    <h5 class="card-title"><?= $producto['empresa'] ?></h5>
                   
                </div>
               
                <div class="card-body">
                    <div class="fs-3 mb-3 fw-bold text-center text-danger"><?= $producto['precio'] ?></div>
                

                  
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
