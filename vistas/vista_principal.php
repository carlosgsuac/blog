<?php
$rutas = ['login', 'perfil', 'pregunta', 'preguntas', 'registro', 'respuesta','prueba'];

//$ruta = explode('/',$_GET['ruta']);
//var_dump($ruta);
//$ruta=$ruta[0];
$ruta = 'preguntas';
if(isset($_GET['ruta'])){
    $ruta = explode('/', $_GET['ruta']);
    $ruta = $ruta[0];
}/*else{
    $ruta = 'preguntas';
}*/
//$ruta = $ruta[0] ?? 'preguntas';
$clase = "";
if ($ruta == 'login' || $ruta == 'registro') {
    $clase = "login-page";
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Consultas | Posgrado</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <link rel="stylesheet" href="<?= BASE_URL ?>vistas/plugins/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="<?= BASE_URL ?>vistas/dist/css/adminlte.min.css" />
    <!-- SCRIPTS    -->
    <script src="<?= BASE_URL ?>vistas/plugins/jquery/jquery.min.js"></script>
    <!-- Boostrap v 4.6 -->
    <script src="<?= BASE_URL ?>vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- adminlte 3.0.1 -->
    <script src="<?= BASE_URL ?>vistas/dist/js/adminlte.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="hold-transition layout-top-nav <?= $clase ?>">

    <?php
    if ($ruta <> 'login' && $ruta <> 'registro') {
        include 'header.php';
    }
    ?>

    <?php
    if (in_array($ruta, $rutas)) {
        include "vistas/modulos/$ruta.php";
    } else {
        include "vistas/modulos/404.php";
    }
    ?>

    <?php
    if ($ruta <> 'login' && $ruta <> 'registro') {
        include './vistas/footer.php';
    }
    ?>

</body>

</html>