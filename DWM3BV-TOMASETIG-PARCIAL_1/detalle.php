<?php 
include('partials/header.php');

$titulo = $_GET['titulo'];
$titulo = $titulo ? $titulo : 0;

$fecha = $_GET['fecha'];
$fecha = $fecha ? $fecha : 0;

$plataforma = $_GET['plataforma'];
$plataforma = $plataforma ? $plataforma : 0;

$precio = $_GET['precio'];
$precio = $precio ? $precio : 0;

$imagen = $_GET['imagen'];
$imagen = $imagen ? $imagen : 0;

$descripcion = $_GET['descripcion'];
$descripcion = $descripcion ? $descripcion : 0;

$edad = $_GET['edad'];
$edad = $edad ? $edad : 0;


?>


<div class="card mb-3" style="max-width: auto;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?= $imagen ?>" class="img-fluid rounded-start" alt="imagen del videojuego">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title text-danger fs-2"><?= $titulo ?></h5>
        <p class="card-text fs-3 ">Fecha de lanzamiento:<?= $fecha ?></p>
        <p class="card-text fs-3">Plataforma:<?= $plataforma ?></p>
        <p class="card-text fs-3">Precio:<?= $precio ?></p>
        <p class="card-text fs-3"> Edad: +<?= $edad ?></p>
        <p class="card-text fs-3"><?= $descripcion ?></p>
        <a href="index.php?seccion=juegos" class="btn btn-danger w-20 fw-bold" >Volver al catálogo</a>
      </div>
    </div>
    
  </div>
</div>


<?php include('partials/footer.php') ?>