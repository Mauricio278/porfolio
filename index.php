<?php 
    $pg="inicio";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="imagenes/MC.png">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="inicio">
    <header class="container">
        <?php include_once("menu.php"); ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-4 text-center div-cohete">
                <img src="imagenes/cohete.svg" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 my-4 mt-sm-5 m-auto mb-3">
                <p class="py-1">Bienvenid@ a mi sitio web sobre docencia en sistemas.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center mb-4">
                <a class="btn btn-proyectos" href="proyectos.html" title="Mis proyectos">
                    Conoce mis proyectos</a>
            </div>
        </div>
    </main>
    <footer class="container margin-auto pb-4">
        <div class="row">
            <div class="col-sm-3 col-12">
                <a href="https://github.com/" title="GitHub" target="_blank">
                    <i class="fa-brands fa-github"></i>
                </a>
                <a href="https://linkedin.com" title="Linkedin" target="_blank">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
            </div>
            <div class="col-sm-3">
                Sponsor<a href="https://depcsuite.com/"> DePCSuite</a>
            </div>
            <div class="col-sm-3">
                <a href="mailto: mauricio.canon02@gmail.com">mauricio.canon02@gmail.com</a>
            </div>
        </div>
        <div>
            <a href="https://web.whatsapp.com" target="_blank">
                <i class="fa-brands fa-whatsapp pt-3 pb-3"></i>
            </a>
        </div>
    </footer>

</body>

</html>