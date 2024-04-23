<?php

include_once 'includes/filtrosNav.php';

#Me aseguro que los métodos get marca y estilo esten definidos. Si lo estan, almaceno en las variables el valor de cada una, sino, recibo un null
$marcaSeleccionada = isset($_GET["marca"]) ? $_GET["marca"] : null;
$estiloSeleccionado = isset($_GET["estilo"]) ? $_GET["estilo"] : null;

#Creo variables que contienen las instancias de los objetos que ejecutan su respectivo método, recibiendo los valores declarados anteriormente. Ambos métodos retornaban un array, por ende, se pueden recorrer con un foreach estas variables
$filtrosMarca = (new Zapatilla())->catalogoPorMarca($marcaSeleccionada);
$filtrosEstilo = (new Zapatilla())->catalogoPorEstilo($estiloSeleccionado);

?>
<!-- Este código es para mostar el respectivo título según se filtra. Si esta definida marca se muestra la marca seleccionada con mayúscula, y lo mismo con el estilo. Si esta definido se muestra el seleccionado en mayúsculas -->
<h2 class="text-center mt-5 mb-5"><?php if (isset($_GET["marca"])) {
    echo ucfirst($marcaSeleccionada);
}else if (isset($_GET["estilo"])){
    echo ucfirst($estiloSeleccionado);
}
#strtoupper convierte toda la cadena a mayuscula, sino se puede usar ucfirst que pone como mayuscula la primer letra?></h2>

<section class="d-flex flex-wrap justify-content-center mb-5 productos">

<?php
#Creo el foreach que va a recorrer el catálogo de marca con la variable $producto
foreach ($filtrosMarca as $producto) {
    
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

<?php
#Creo el foreach que va a recorrer el catálogo de estilo con la variable $producto
foreach ($filtrosEstilo as $producto) {
    
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