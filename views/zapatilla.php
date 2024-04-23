<?php
#Este es el archivo que se encarga de mostrar la vista personalizada de cada producto

include_once 'includes/filtrosNav.php';

#Creo una variable $id que almacene un GET que reciba el id 
$id =  $_GET['id'];
#Creo la variable porducto que instancia un objeto de la clase Zapatilla y ejecuta el método catalogoPorId y recibe como parámetro la variable anterior
$producto = (new Zapatilla())->catalogoPorId($id);
#Creo variables que van a crear una instancia de la clase y van a ejecutar sus respectivos métodos, obteniendo los valores necesarios de cada producto por medio de los get. Esto permite luego colocar esta variable en la tarjeta y que se muestre el respectivo valor con mayúscula en la primer letra. Es lo mismo que se utiliza en la tarjeta originales, solo que no se recorta la descripción, ya que la idea es, justamente, mostrar toda la información
$marcaConMayuscula = (new Zapatilla())->marcaMayuscula($producto->getMarca());
$estiloConMayuscula = ( new Zapatilla() )->estiloMayuscula(($producto->getEstilo()));
?>

<!-- <section class="mt-4 mb-4 w-75 mx-auto">

    <div class="mx-auto mt-3 mb-3 border-none mx-auto" >
  <div class="row">
    <div class="col-md-3">
      <img src="<?= $producto->getImagen();?>" class="img-fluid rounded" alt="<?= $producto->getModelo(); ?>">
    </div>
    <div class="col-md-7">
      <div>
      <h5 class="card-title text-danger fs-6"><?= $marcaConMayuscula; ?> - <?= $estiloConMayuscula; ?></h5>
      <h3 class="card-title"><?= $producto->getModelo(); ?></h3>
      <p class="card-text text-dark-emphasis descripcion"><?= $producto->getDescripcion(); ?></p>
        <p class="card-text precio fs-4"><span class="fw-medium me-1">US$</span><span class="fw-bold"><?= $producto->getPrecio(); ?></span></p>
            <a href="#" class="boton-id">Agregar al carrito</a>
      </div>
    </div>
  </div>
</div>

</section> -->

<section class="mt-5 mb-5 productoId">
<div class="mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?= $producto->getImagen();?>" class="img-fluid rounded-start" alt="<?= $producto->getModelo(); ?>">
    </div>
    <div class="col-md-7">
      <div class="card-body">
      <h3><?= $producto->getModelo(); ?></h3>
      <h5 class="card-title text-danger fs-6"><?= $marcaConMayuscula; ?> - <?= $estiloConMayuscula; ?></h5>
        <p class="card-text"><?= $producto->getDescripcion(); ?></p>
        <p class="card-text"><span class="fw-medium me-1">US$</span><span class="fw-bold"><?= $producto->getPrecio(); ?></span></p>
        <a href="#" class="boton-id">Agregar al carrito</a>
      </div>
    </div>
  </div>
</div>
</section>