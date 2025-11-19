<?php
    $pg="contacto";
?>

<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="imagenes/MC.png">
    <link rel="stylesheet" href="css/estilos.css">

</head>

<body id="contacto" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once ("menu.php"); ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="py-5">Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-12">
                <p>Te invito a que te contactes enviándome un mensaje o bien por WhatsApp.</p>
            </div>
            <div class="col-sm-6 col-12">
                <form action="" method="post">
                    <div class="pb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control">
                    </div>
                    <div class="pb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control">
                    </div>
                    <div class="pb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Teléfono/WhatsApp"
                            class="form-control">
                    </div>
                    <div class="pb-3">
                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aquí tu mensaje"
                            class="form-control"></textarea>
                    </div>
                    <div class="pb-3">
                        <button type="submit" id="btnEnviar" name="btnEnviar" class="btn">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer class="container mt-auto pb-4">
        <div class="row">
            <div class="col-sm-3 col-12">
                <a href="https://github.com/" target="_blank" title="GitHub">
                    <i class="fa-brands fa-github"></i>
                </a>
                <a href="https://www.linkedin.com/" target="_blank" title="Linkedin">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
            </div>
            <div class="col-sm-3">
                Sponsor <a href="https://depcsuite.com/">DePCSuite</a>
            </div>
            <div class="col-sm-3">
                <a href="mailto: mauricio.canon02@gmail.com">mauricio.canon02@gmail.com</a>
            </div>
        </div>
        <a href="https://web.whatsapp.com/" target="_blank">
            <i class="fa-brands fa-whatsapp pt-3 pb-3"></i>
        </a>
    </footer>
</body>

</html>