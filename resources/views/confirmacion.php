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
    <style>
        body {
            margin-left: 20%;
            margin-right: 20%;
            color: #0c9600;
            background-image: url('../images/bg.jpg');
            background-position: center center;
            background-attachment: fixed;
        }

        .carousel-control-next-icon:after,
        .carousel-control-prev-icon:after {
            content: "";
        }

        .p-5 {
            border-radius: 20px;
        }

        .card-contacto{
            background-color: #ebebeb;
            border-radius: 20px;
        }

        .bg-edit{
            background-color: rgba(255, 255, 255, 0.582);
        }

        .etiqueta{
            text-align: center;
            color: #0c9600;
            font-family: Tahoma;
            font-size: 30px;
            font-weight: 600;
            width: 50%;
            border-radius: 20px;
            background-color: #ffffff;
            margin: auto;
            padding: 20px;
            margin-top: -25px;
        }
    </style>
</head>

<body>

  <!-- Barra de navegación -->
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0c9600;">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="font-family: Tahoma; font-size: 30px; font-weight: 550;">Adopta
                Udenar</a>
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
                        <a class="nav-link active" aria-current="page" href="/">Inicio</a>
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
                        <a class="nav-link" href="#contacto">Contacto</a>
                    </li>
                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>

  <section id="informacion-adopcion" class="py-5">
  <div class="container">
    <div class="etiqueta mb-4">Información de Adopción</div>
    <div class="row">
      <div class="col-md-8">
        <div class="card" style="padding:20px;">
          <div class="card-body">
            <h3 class="mb-6"><strong>Nombre del Adoptante:</strong> Pepito Perez</h3>
            <h3 class="mb-6"><strong>Correo electrónico:</strong> pepitoperez@gmail.com</h3>
            <h3 class="mb-6"><strong>Teléfono:</strong> +57 3123456789</h3>
            <h3 class="mb-6"><strong>Dirección:</strong> Calle 1 # 2-3, Pasto</h3>
            <h3><strong>Animal adoptado:</strong> Nala</h3>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Foto de la mascota</h4>
            <img src="images/gato3.jpg" class="card-img-top" alt="Imagen del gato">
          </div>
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