<nav class="navbar navbar-expand-md">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0 px-1">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($pg=="inicio")? "active": ""; ?>" px-4 href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($pg=="sobre-mi")? "active": "";?>" px-4 href="sobre-mi.php">Sobre Mí</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($pg=="proyectos")? "active": ""; ?>" px-4 href="proyectos.php">Proyectos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($pg=="contacto")? "active": ""; ?>" active px-4 href="contacto.php">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="btn-cv py-2 px-2">
        <a class="nav-link" href="#" title="Hoja de Vida" target="_blank">CV Online
        </a>
    </div>
</nav>