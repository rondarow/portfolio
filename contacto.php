<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="contacto">
    <header class="container">
        <nav class="navbar navbar-expand-md mb-4">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sobre-mi.php">Sobre mí</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                    <a class="btn btn-rojo" href="../portfolio/files/Ronald.pdf"><i class="fa-solid fa-file-arrow-down"></i> Descargar
                                mi CV</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Contacto</h1>
            </div>
        </div>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <p>Te invito a que te contactes enviándome un mensaje o bien por whatsapp.</p>
                </div>
                <div class="col 12 col-sm-6">
                    <form action="" method="post">
                        <div class="mb-3"><input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre"
                                class="form-control">
                        </div>
                        <div class="mb-3"><input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo"
                                class="form-control">
                        </div>
                        <div class="mb-3"><input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Teléfono"
                                class="form-control">
                        </div>
                        <div class="mb-3">
                            <textarea name="txtMnsaje" id="txtMensaje" placeholder="Escribe aquí tu mensaje"
                                class="form-control"></textarea>
                        </div>
                        <div class="mb-3"><button type="submit" id="btnEnviar" name="btnEnviar"
                                class="btn btn-blanco">ENVIAR</button>
                        </div>
                    </form>
                </div>
            </div>
    </main>
    <footer class="container mt-5">
        <div class="row">
        <div class="col-12 col-sm-3">
                <a href="https://github.com/rondarow/portfolio"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.linkedin.com/in/ronald-pineda/"><i class="fa-brands fa-linkedin"></i>
                </a></div>
            <div class="col-12 col-sm-3">Sponsor <a href="https://depcsuite.com">
                 DePC Suite</a></div>
            <div class="col-12 col-sm-3"><a href="mailto:pineda-ronald@hotmail.com">
                 pineda-ronald@hotmail.com</a></div>
        </div>
    </footer>
    <div class="whatsapp pt-3 pb-4 px-3">
        <a href="https://api.whatsapp.com/send?phone=584149505089">
    <i class="fa-brands fa-whatsapp"></i></a>
</div>
</body>
</html>