<article class="contenedorFiltrosNav">
<h4 class="text-center text-light">Filtros</h4>
<div class="w-100 d-flex flex-column text-center flex-sm-row justify-content-center filtrosNav">
     
    <!-- Creo un botón que permite mostrar todos los productos -->
    <a href="index.php?seccion=productos" class="text-light text-decoration-none "><?= isset($_GET["seccion"]) && $_GET["seccion"] == "productos" ? "<b>TODOS</b>" : "TODOS" ?></a>

    <!-- Creo un botón que permite filtrar según marca nike. Se cambia de valor la seccion, ahora es filtros y se crea otra clave (en este caso marca) y recibe como valor nike. Si seccion esta difinida y su valor es filtros y marca tambien esta definida y su valor es nike se muestra en negrita, sino se muestra normal  -->
    <a href="index.php?seccion=filtros&marca=nike" class="text-light text-decoration-none "><?php if (isset($_GET["seccion"]) && isset($_GET["marca"]) && $_GET["seccion"] == "filtros" && $_GET["marca"] == "nike") {
        echo "<b>NIKE</b>";
    } else {
        echo "NIKE";
    } ?></a>

    <!-- Creo un botón que permite filtrar según marca adidas. Se cambia de valor la seccion, ahora es filtros y se crea otra clave (en este caso marca) y recibe como valor adidas. Si seccion esta difinida y su valor es filtros y marca tambien esta definida y su valor es nike se muestra en negrita, sino se muestra normal  -->
    <a href="index.php?seccion=filtros&marca=adidas" class="text-light text-decoration-none "><?php if (isset($_GET["seccion"]) && isset($_GET["marca"]) && $_GET["seccion"] == "filtros" && $_GET["marca"] == "adidas") {
        echo "<b>ADIDAS</b>";
    } else {
        echo "ADIDAS";
    } ?></a>
     
    <!-- Similar a los anteriorres filtros pero en vez de usarse marca, se utiliza el estilo -->
    <a href="index.php?seccion=filtros&estilo=urbano" class="text-light text-decoration-none "><?php if (isset($_GET["seccion"]) && isset($_GET["estilo"]) && $_GET["seccion"] == "filtros" && $_GET["estilo"] == "urbano") {
        echo "<b>URBANAS</b>";
    } else {
        echo "URBANAS";
    } ?></a>
    <a href="index.php?seccion=filtros&estilo=deportivo" class="text-light text-decoration-none "><?php if (isset($_GET["seccion"]) && isset($_GET["estilo"]) && $_GET["seccion"] == "filtros" && $_GET["estilo"] == "deportivo") {
        echo "<b>DEPORTIVAS</b>";
    } else {
        echo "DEPORTIVAS";
    } ?></a>
</div>
</article>