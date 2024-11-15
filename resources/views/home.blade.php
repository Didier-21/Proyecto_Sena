<!DOCTYPE html>
<html lang="es">
<head>
<<<<<<< HEAD
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CDR-SAN JOSE - @yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
=======
    <title>I.E San Jose CDM  @yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Personalización del navbar */
        .navbar {
            background-color: #78e14b; /* Color de fondo personalizado */
        }
        .navbar-brand, .nav-link, .dropdown-item {
            color: #010107d8 !important; /* Color del texto */
            font-family: 'Arial', sans-serif; /* Tipo de letra */

        }
        .navbar-brand:hover, .nav-link:hover, .dropdown-item:hover {
            color: #3498db !important; /* Color al pasar el ratón */
        }
        .dropdown-menu {
            background-color: #34495e; /* Color de fondo del menú desplegable */
        }
        .dropdown-divider {
            border-color: #7f8c8d; /* Color del divisor en el menú desplegable */
        }

        /* Estilo de los botones */
        .btn-primary {
            background-color: #3498db; /* Color de fondo personalizado */
            border-color: #467696; /* Color del borde */
            font-family: 'Arial', sans-serif; /* Tipo de letra */
            font-weight: bold; /* Negrita */
        }
        .btn-primary:hover {
            background-color: #2980b9; /* Color de fondo al pasar el ratón */
            border-color: #1c6ea4; /* Color del borde al pasar el ratón */
        }

        /* Estilo de los inputs de búsqueda */
        .form-control {
            border-radius: 20px; /* Bordes redondeados */
            font-family: 'Arial', sans-serif; /* Tipo de letra */
        }

        /* Estilo general */
        body {
            font-family: 'Arial', sans-serif; /* Tipo de letra */
            background-color: #93dcec; /* Color de fondo de la página */
            color: #14c33d; /* Color del texto */
        }
>>>>>>> 36a157e081a1528c26f44bf92a1a234e0d942c03

</head>
<body>

    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <img src="{{ asset('images/logo.png') }}" alt="CDR" style="width: 40px; height: auto;">
                <a class="navbar-brand">San Jose CDR</a>
                <a class="navbar-brand" href="{{ route('home') }}">Mi cole</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100">
                        <li class="nav-item dropdown flex-grow-1">
                            <a class="nav-link dropdown-toggle text-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Como es
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/mision">Misión</a></li>
                                <li><a class="dropdown-item" href="/vision">Visión</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="/logroaca">Logros académicos</a></li>
                                <li><a class="dropdown-item" href="/gestion-juridica">Gestión jurídica</a></li>
                                <li><a class="dropdown-item" href="/logros-directivos">Logros Directivos</a></li>
                                <li><a class="dropdown-item" href="/proyectos-productivos">Proyectos Productivos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown flex-grow-1">
                            <a class="nav-link dropdown-toggle text-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Escolaridad
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/primaria">Primaria</a></li>
                                <li><a class="dropdown-item" href="#">Secundaria</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Media Técnica</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown flex-grow-1">
                            <a class="nav-link dropdown-toggle text-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Talento Humano
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Docentes</a></li>
                                <li><a class="dropdown-item" href="#">Administrativos</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Directivos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Ingresar
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/login">Iniciar sesion</a></li>
                                <li><a class="dropdown-item" href="/register">Registrar</a></li>
                            </ul>
                        </li>
                    </ul>

                    <button class="btn btn-primary me-2" type="button" onclick="window.location.href='/login'">Login</button>
                </div>
            </div>
        </nav>
    </div>


    <!-- Hero Section -->
    <section class="hero">
        <div class="container hero-content text-center">
            <h1 class="display-4 fw-bold">Institución Educativa San José</h1>
            <p class="lead mt-3">Formando líderes rurales con excelencia y valores</p>
            <a href="#" class="btn btn-success btn-lg mt-4">Conoce más sobre nosotros</a>
        </div>
    </section>

    <!-- Quick Access Cards -->
    <section class="quick-access py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <a href="/juridica" class="text-decoration-none">
                        <div class="access-card">
                            <img src="/api/placeholder/400/200" alt="Gestión Jurídica">
                            <div class="access-overlay">Gestión Jurídica</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
<<<<<<< HEAD
    </section>
=======
    </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



  <!DOCTYPE html>
  <html lang="es">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Información de Interés</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <style>
          .info-section {
              background-color: #f8f9fa;
              padding: 40px 0;
          }
          .info-card {
              background-color: #ffffff;
              border-radius: 8px;
              box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
              margin-bottom: 30px;
              transition: transform 0.2s;
          }
          .info-card:hover {
              transform: translateY(-5px);
          }
          .info-card img {
              border-radius: 8px 8px 0 0;
          }
          .info-card-body {
              padding: 20px;
          }
          .info-card-title {
              font-size: 1.25rem;
              font-weight: bold;
              color: #2c3e50;
          }
          .info-card-text {
              color: #7f8c8d;
          }
      </style>
  </head>
  <body>
    <section>
        <div class="card text-center">
            <div class="card-header">
            </div>
            <div class="card-body">
              <h5 class="card-title"> Proyectos </h5>
              <p class="card-text">Aqui puedes ver todos los proyectos que tenemos </p>
              <a href="/proyectos" class="btn btn-primary"> Ir a listado de proyectos </a>
            </div>
          </div>
      </section>

      <!-- Sección de Información de Interés -->
      <section class="info-section">
          <div class="container">
              <h2 class="text-center mb-5">Información de Interés</h2>
              <div class="row">
                  <!-- Noticias -->
                  <div class="col-md-4">
                      <div class="info-card">
                          <img src="{{ asset('images/granja.png') }}" alt="Noticias" class="img-fluid">
                          <div class="info-card-body">
                              <h5 class="info-card-title">Noticias</h5>
                              <p class="info-card-text">Mantente informado con las últimas noticias sobre nuestras actividades y eventos.</p>
                              <a href="#" class="btn btn-primary">Leer más</a>
                          </div>
                      </div>
                  </div>

                  <!-- Matrículas -->
                  <div class="col-md-4">
                      <div class="info-card">
                          <img src="{{ asset('images/matricula.png') }}" alt="Matrículas" class="img-fluid">
                          <div class="info-card-body">
                              <h5 class="info-card-title">Matrículas</h5>
                              <p class="info-card-text">Infórmate sobre el proceso de matrículas y cómo inscribirte en nuestros programas educativos.</p>
                              <a href="#" class="btn btn-primary">Leer más</a>
                          </div>
                      </div>
                  </div>

                  <!-- Proyectos Agropecuarios -->
                  <div class="col-md-4">
                      <div class="info-card">
                          <img src="{{ asset('images/colegio.png') }}" alt="Proyectos Agropecuarios" class="img-fluid">
                          <div class="info-card-body">
                              <h5 class="info-card-title">Proyectos Agropecuarios</h5>
                              <p class="info-card-text">Descubre los proyectos agropecuarios en los que nuestros estudiantes participan activamente.</p>
                              <a href="#" class="btn btn-primary">Leer más</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>


      <!-- Scripts de Bootstrap -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>
















  <!DOCTYPE html>
  <html lang="es">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Pie de Página</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <style>
          /* Estilos para el pie de página */
          footer {
              background-color: #2c3e50;
              color: #ecf0f1;
              padding: 20px 0;
          }

          .footer-section {
              margin-bottom: 10px;
          }

          .footer-section h5 {
              margin-bottom: 15px;
              font-weight: bold;
          }

          .footer-section p, .footer-section a {
              margin: 0;
              color: #ecf0f1;
          }

          .footer-section a:hover {
              color: #3498db;
              text-decoration: none;
          }

          .footer-bottom {
              border-top: 1px solid #7f8c8d;
              padding-top: 10px;
              text-align: center;
          }
      </style>
  </head>
  <body>

      <!-- Contenido principal de la página -->

      <!-- Pie de página -->
      <footer>
          <div class="container">
              <div class="row">
                  <div class="col-md-4 footer-section">
                      <h5>Contacto</h5>
                      <p>Dirección: Calle 123, Zona Rural, Municipio</p>
                      <p>Teléfono: (123) 456-7890</p>
                      <p>Email: info@colegioagropecuario.edu</p>
                  </div>
                  <div class="col-md-4 footer-section">
                      <h5>Enlaces Rápidos</h5>
                      <a href="#">Inicio</a><br>
                      <a href="#">Acerca de</a><br>
                      <a href="#">Programas</a><br>
                      <a href="#">Contacto</a>
                  </div>
                  <div class="col-md-4 footer-section">
                      <h5>Síguenos</h5>
                      <a href="#">Facebook</a><br>
                      <a href="#">Twitter</a><br>
                      <a href="#">Instagram</a>
                  </div>
              </div>
              <div class="footer-bottom mt-3">
                  <p>&copy; 2024 Colegio Agropecuario San José. Todos los derechos reservados.</p>
              </div>
          </div>
      </footer>

      <!-- Scripts de Bootstrap -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>


>>>>>>> 36a157e081a1528c26f44bf92a1a234e0d942c03

    <!-- Footer -->
    <footer class="footer mt-5">
        <div class="container text-center">
            <p>La IE San José es una institución educativa rural comprometida con la formación integral y el desarrollo sostenible de nuestra comunidad.</p>
            <p>&copy; 2024 CDR San José</p>
        </div>
    </footer>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
