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
    
    <section id="catalogo-perros" class="py-5">
        <div class="container">
          <h2 class="etiqueta mb-4">Catálogo de Adopción: Perros</h2>
          <div class="row">
            <div class="col-md-4 mb-4">
              <div class="card">
                <img src="../images/perro1.jpg" class="card-img-top" alt="Imagen del perro">
                <div class="card-body">
                  <h5 class="card-title">1. Max</h5>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card">
                <img src="../images/perro2.jpg" class="card-img-top" alt="Imagen del perro">
                <div class="card-body">
                  <h5 class="card-title">2. Luna</h5>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card">
                <img src="../images/perro3.jpg" class="card-img-top" alt="Imagen del perro">
                <div class="card-body">
                  <h5 class="card-title">3. Toby</h5>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card">
                <img src="../images/perro4.jpg" class="card-img-top" alt="Imagen del perro">
                <div class="card-body">
                  <h5 class="card-title">4. Bella</h5>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card">
                <img src="../images/perro5.jpg" class="card-img-top" alt="Imagen del perro">
                <div class="card-body">
                  <h5 class="card-title">5. Charlie</h5>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card">
                <img src="../images/perro6.jpg" class="card-img-top" alt="Imagen del perro">
                <div class="card-body">
                  <h5 class="card-title">6. Daisy</h5>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card">
                <img src="../images/perro7.jpg" class="card-img-top" alt="Imagen del perro">
                <div class="card-body">
                  <h5 class="card-title">7. Rocky</h5>
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