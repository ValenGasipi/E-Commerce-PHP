<header>
        <div class="main_menu">
            <a href="index.php?seccion=home" class="logo"><img src="img/logo.png" alt="Logo Dripka">
                <h1>DRIPKA</h1>
            </a>

            <input type="checkbox" id="check">
            <label for="check" class="abrir"> &#8801;</label>
            <nav class="menu">
                <!-- Pregunta si el metodo get["seccion] existe y en caso de que no (es solo index.php donde se encuentra el usuario) o existe y su valor es home, se marque en negrita -->
                <a href="index.php?seccion=home"><?= (!isset($_GET["seccion"]) || (isset($_GET["seccion"]) && $_GET["seccion"] == "home")) ? "<b>HOME</b>" : "HOME" ?></a>
                <!-- Si existe el metodo get["seccion] y es = a productos o esta definido ["marca"], ["estilo"] o ["id"] se marca en negrita-->
                <a href="index.php?seccion=productos"><?php if (isset($_GET["seccion"]) && $_GET["seccion"] == "productos" || isset($_GET["marca"]) || isset($_GET["estilo"]) || isset($_GET["id"])) {
                            echo "<b>PRODUCTOS</b>";
                        } else {
                            echo "PRODUCTOS";
                        } ?></a>
                <a href="index.php?seccion=alumnos"><?= ((isset($_GET["seccion"]) && $_GET["seccion"] == "alumnos")) ? "<b>ALUMNOS</b>" : "ALUMNOS" ?></a>
                <a href="index.php?seccion=envios"><?= ((isset($_GET["seccion"]) && $_GET["seccion"] == "envios")) ? "<b>ENVÍOS</b>" : "ENVÍOS" ?></a>
                <label for="check" class="cerrar"> &#215; </label>
            </nav>
        </div>
    </header>