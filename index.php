<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<?php include_once 'includes/nav.php';?>

<?php include_once 'views/home.php' ?>

<!-- Incluimos el footer en todas las vistas -->
<?php include_once 'includes/footer.php';?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>