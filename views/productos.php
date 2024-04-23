
<?php  
#Creo una variable productos que almacena un objeto de la clase Zapatilla e instantaaneamente ejecuta el método catálogoCompleto. $productos contendrá el catálogo completo de productos de zapatillas
$productos = ( new Zapatilla() )->catalogoCompleto(); 
include_once 'includes/filtrosNav.php'
?>
<h2 class="mt-5 mb-5">Todos los Productos</h2>

<section class="d-flex flex-wrap justify-content-center mb-5 productos">
<?php
#Creo el foreach que va a recorrer el catálogo completo con la variable $producto
foreach ($productos as $producto) {
    
    #Creo variables que van a crear una instancia de la clase y van a ejecutar sus respectivos métodos, obteniendo los valores necesarios de cada producto por medio de los get. Esto permite luego colocar esta variable en la tarjeta y que se muestre el respectivo valor con mayúscula en la primer letra o 20 palabras de la descripción
    $marcaConMayuscula = (new Zapatilla())->marcaMayuscula($producto->getMarca());
    $estiloConMayuscula = ( new Zapatilla() )->estiloMayuscula(($producto->getEstilo()));
    $recortarDescripcion = ( new Zapatilla() )->recortarDescripcion(($producto->getDescripcion()));
    ?>
        <div class="tarjeta">
        <div class="contenedor-img"><img src="<?= $producto->getImagen();?>" class="card-img-top" alt="<?= $producto->getModelo(); ?>"></div>
        <div class="pt-2 pe-2"> <!-- Creo el div del contenido textual de la tarjeta-->
                <h3 class="card-title mb-1"><?= $producto->getModelo(); ?></h3> <!-- Creo el titulo y le indico que sea $producto->modelo-->
                <h5 class="mb-3 text-danger fs-6" ><?= $marcaConMayuscula; ?> - <?= $estiloConMayuscula; ?></h5>
                <p class="card-text text-dark-emphasis descripcion"><?= $recortarDescripcion; ?></p> <!-- Creo la descripción y le indico que sea $producto->descripcion-->
                <p class="card-text precio fs-4"><span class="fw-medium me-1">US$</span><?= $producto->getPrecio(); ?></p> <!-- Creo el precio y le indico que sea $producto->precio-->
                <!-- Aca se crea otra clave llamada id y su valor es el recibido por el getter, es decir que cada producto tiene uno distinto -->
                <a href="index.php?seccion=zapatilla&id=<?=$producto->getId()?>" class="boton-id">Comprar</a>
            </div>
        </div>
        <?php
    }
?>
</section>