<?php 

    $vistaValida = isset($_GET['seccion']) ? $_GET['seccion'] : 'home'; //isset pregunta si el valor que le estoy pasando entre parentesis existe. Si existe el método get seccion, te manda al que se elije y sino, al $vistaValida ser igual a home, la redireccion va a ser 'views/home.php'
    $vistaError = 'error-404'; //Creo una vista con el valor de la pagina de error, que se usara en caso de no encontrar una direccion/URL

    //Se crea un array con el nombre de las vistas que queremos que el usuario vea. En este caso no se utiliza un archivo admin.php pero generalmente se hace para evitar que un usuario ingrese a ese archivo. Es un array multidimensional que dentro de cada elemento contiene la "clave" titulo y el valor es el nombre de la seccion escrita con la primera letra mayúscula que después se va a mostrar en el title
    $seccionesValidas = [
        'envios' => [
            'titulo' => 'Envíos'
        ],
        'filtros' => [
            'titulo' => 'Filtros de Productos'
        ],
        'home' => [
            'titulo' => 'Tienda de zapatillas'
        ],
        'productos' => [
            'titulo' => 'Zapatillas'
        ],
        'zapatilla' => [
            'titulo' => 'Zapatilla'
        ],
        'alumnos' => [
            'titulo' => 'Alumnos'
        ],
        'procesado' => [
            'titulo' => 'Formulario Enviado'
        ]
    ];

    //Se utiliza la funcion para preguntar si el valor del metodo get["seccion"] existe en el array seccionesValidas. Si la sección solicitada $vistaValida es válida según el array $seccionesValidas, entonces $vistaError tomará el valor de $vistaValida. Si no existe, a $vistaError se le vuelve a asignar el valor error-404, para que muestre esa vista. Esto asegura que, si la sección solicitada no está definida en el array $seccionesValidas, se presente una página de error. 
    if (array_key_exists($vistaValida, $seccionesValidas)) {
        $vistaError = $vistaValida;
    }else{
        $vistaError = 'error-404';
    }

    include_once 'class/clase.php'

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Se pregunta si esta definida en el array $seccionesValidas la clave titulo en la vista  seleccionada. En caso de que si, se muestra el título de la misma, sino, muestra el titulo de error 404. Basicamente,si no encuentra la seccion en el array muestra el titulo de error-->
    <title><?= isset($seccionesValidas[$vistaError]['titulo']) ? $seccionesValidas[$vistaError]['titulo'] : 'Error 404'?></title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Iconos Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Estilos generales -->
    <link rel="stylesheet" href="styles/estilos.css">
    <!-- Estilos del footer -->
    <link rel="stylesheet" href="styles/footer.css">
    <!-- Estilos del nav -->
    <link rel="stylesheet" href="styles/nav.css">
</head>
<body>

<!-- Incluimos el nav en todas las vistas -->
<?php include_once 'includes/nav.php';

// Lo que hace esta función es preguntar si existe tal archivo, que en este caso es el que se encuentra en la carpeta vista y tiene el nombre especificado anteriormente con la variable $vistaValida. En caso de que exista se muestra esa misma vista en el body del index, sino se muestra la pagina de error. Esto lo que hace es cargar el contenido dinamicamente ya que el archivo que se muestra es siempre el mismo, solo cambia la vista con el include
file_exists("views/$vistaValida.php") 
                ? include "views/$vistaValida.php" 
                : include "views/error-404.php";

// Incluimos el footer en todas las vistas
include_once 'includes/footer.php';?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>