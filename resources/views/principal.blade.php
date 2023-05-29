<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopta Udenar - Página Principal</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet" />
    <!-- Enlaces a los archivos de estilo de MDBootstrap a través de CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mdbootstrap@4.19.1/dist/css/mdb.min.css">
    <link rel="stylesheet" href="/css/estilos.css">
</head>

<body>

    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0c9600;">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="font-family: Tahoma; font-size: 30px; font-weight: 550;">
                <img src="../images/logo.png" alt="logo" width="50px" height="50px" style="border-radius:25px;"> 
                Adopta Udenar
            </a>
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarRightAlignExample" aria-controls="navbarRightAlignExample" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarRightAlignExample">
                <!-- Left links -->
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-mdb-toggle="dropdown" aria-expanded="false">
                            Nuestros Animalitos
                        </a>
                        <!-- Dropdown menu -->
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="../adopta/gatos">Gatos</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="../adopta/perros">Perros</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="../adopta/otros">Otros</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../procesos/formulario">Adopta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../#contacto">Contacto</a>
                    </li>
                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>

    <!-- Espacio con información de la fundación -->
    <div class="container bg-edit">
        <h1 class="text-center">Bienvenid@ a Adopta Udenar</h1>
        <h4 class="text-center">¡Ayúdanos a encontrar hogar para animales necesitados!</h4>
        <div id="carouselExampleCrossfade" class="carousel slide carousel-fade" data-mdb-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-mdb-target="#carouselExampleCrossfade" data-mdb-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-mdb-target="#carouselExampleCrossfade" data-mdb-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-mdb-target="#carouselExampleCrossfade" data-mdb-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../images/carousel1.jpg" class="d-block w-100" alt="Wild Landscape" />
                </div>
                <div class="carousel-item">
                    <img src="../images/carousel2.jpg" class="d-block w-100" alt="Camera" />
                </div>
                <div class="carousel-item">
                    <img src="../images/carousel3.jpg" class="d-block w-100" alt="Exotic Fruits" />
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleCrossfade"
                data-mdb-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleCrossfade"
                data-mdb-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- Aquí puedes agregar más contenido informativo sobre la fundación -->
    </div>

    <!-- Apartado de contacto -->
    <section id="contacto" class="bg-edit">
        <div class="container" style="padding-bottom: 50px;">
            <h2 class="text-center mb-4">Contáctanos</h2>
            <div class="row">
                <div class="col-md-8">
                    <form action="#" method="POST" class="p-5" style="background-color: #e6e6e6; color: rgb(3, 88, 0);">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control mb-4" id="nombre" name="nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo electrónico</label>
                            <input type="email" class="form-control mb-4" id="correo" name="correo" required>
                        </div>
                        <div class="form-group">
                            <label for="mensaje">Mensaje</label>
                            <textarea class="form-control mb-4" id="mensaje" name="mensaje" rows="4"
                                required></textarea>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <input class="btn btn-outline-success" data-mdb-ripple-color="dark" type="submit"
                                value="Enviar" />
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <br><br>
                    <div class="card-body card-contacto">
                        <h5 class="card-title">Información de contacto:</h5><br>
                        <h6 class="card-subtitle mb-2 text-muted">Nombre:</h6>
                        <p class="card-text">Adopta Udenar</p>
                        <h6 class="card-subtitle mb-2 text-muted">Dirección:</h6>
                        <p class="card-text">Calle Principal #123, Pasto</p>
                        <h6 class="card-subtitle mb-2 text-muted">Teléfono:</h6>
                        <p class="card-text">+57 3113652301</p>
                        <h6 class="card-subtitle mb-2 text-muted">Correo electrónico:</h6>
                        <p class="card-text">info@adoptaudenar.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>
    <!-- Enlaces a los archivos de script de Bootstrap y MDBootstrap a través de CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/mdbootstrap@4.19.1/dist/js/mdb.min.js"></script>
</body>

</html>