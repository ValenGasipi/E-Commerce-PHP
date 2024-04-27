<?php

    $nombre = $_POST["Nombre"]
?>
        

<section class="container">
    <div class="text-center align-items-center p-5 mt-5 mb-5">
        <h2 class="mb-5"> <?= $nombre ?> el formulario fue enviado con exito! </h2>
            <p class="text-center fs-4 mb-5" >Pronto recibirás noticias nuestras con las últimas promociones y lanzamientos. ¡Gracias por confiar en nosotros!.
            Mientras esperas nuestras últimas novedades, ¿por qué no sigues explorando nuestra amplia selección de productos? Haz clic en el botón a continuación para seguir navegando.
            </p>
                <a href="index.php?seccion=productos" class="boton-ver-productos">Ver Productos</a>
        </div>
</section>