@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    <div class="card-body">
                        @if(session('error'))
                        <script>
                            Swal.fire({
                                icon: 'error',
                                title: 'Acceso Denegado',
                                text: "{{ session('error') }}",
                                confirmButtonText: 'Entendido'
                            });
                        </script>
                    @endif
                    </div>
                    <!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lombricultivo SENA "La Angostura"</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="shortcut icon" href="img/sena-logo.png" type="image/x-icon">
  <style>
    .contenedores {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
    }
    .contenedor {
      flex: 1 1 calc(33.333% - 10px);
      box-sizing: border-box;
      margin: 5px;
      text-align: center;
    }
    .contenedor img {
      max-width: 100%;
      height: auto;
    }
    @media (max-width: 768px) {
      .contenedor {
        flex: 1 1 calc(50% - 10px);
      }
    }
    @media (max-width: 480px) {
      .contenedor {
        flex: 1 1 100%;
      }
    }
  </style>
</head>
<body>
    <div class="particles">
      <!-- Partículas generadas en CSS -->
      <div class="particle"></div> 
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
    </div>
  <!-- Header -->
<header class="header">
  <div class="logo-container">
  <img src="{{ asset('images/sena-logo.png') }}" alt="Logo SENA" class="logo">
  </div>
  <div class="title-container">
    <h1 class="header-title">Lombricultivo SENA Agroindustrial "La Angostura"</h1>
    <p class="header-subtitle">Producción de abono orgánico y prácticas sostenibles</p>
  </div>
</header>

  <!-- Sección de Información General -->
<section class="info-section">
    <h2>🌱 Sobre la Unidad de Lombricultivo</h2>
    <div class="info-content">
      <div class="info-item">
        <h3>📍 Ubicación y Contacto</h3>
        <p>El Lombricultivo SENA "La Angostura" está ubicado en la Finca La Angostura, zona agroindustrial del SENA, donde se promueven prácticas agroecológicas y sostenibles.</p>
        <ul>
          <li><strong>Dirección:</strong> Calle Falsa 123, Zona Rural</li>
          <li><strong>Teléfono:</strong> +57 123 4567 890</li>
          <li><strong>Email:</strong> <a href="mailto:info@sena-lombricultivo.com">info@sena-lombricultivo.com</a></li>
        </ul>
      </div>
      <div class="info-item">
        <h3>🌍 Objetivos</h3>
        <p>Nuestra unidad tiene como misión la producción de abono orgánico a través de la lombricultura, educación en prácticas sostenibles y reducción de residuos orgánicos.</p>
        <ul>
          <li>Producción de abono orgánico</li>
          <li>Capacitación para estudiantes y pasantes</li>
          <li>Promoción de la sostenibilidad y el reciclaje</li>
        </ul>
      </div>
      <div class="info-item">
        <h3>🪱 Proceso de Lombricultura</h3>
        <p>El proceso de lombricultura consiste en la alimentación regular de las lombrices rojas californianas, monitoreo de pH y temperatura para asegurar un ambiente óptimo, y recolección del abono producido.</p>
        <ul>
          <li><strong>Tipo de lombriz:</strong> Lombriz roja californiana</li>
          <li><strong>Parámetros óptimos:</strong> pH 6.5-7, Temp. 20-25°C</li>
          <li><strong>Frecuencia de Alimentación:</strong> Semanal</li>
        </ul>
      </div>
    </div>
  </section>
  
  <!-- Contenedores -->
  <div class="container-grid">
    <h2>🗑️ Contenedores del Lombricultivo</h2>
    <div class="contenedores">
      <div class="contenedor" id="cont-1">
      <img src="{{ asset('images/contenedor.png') }}" alt="Contenedor 1">
        <p>Contenedor 1</p>
      </div>
      <div class="contenedor" id="cont-2">
      <img src="{{ asset('images/contenedor.png') }}" alt="Contenedor 2">
        <p>Contenedor 2</p>
      </div>
      <div class="contenedor" id="cont-3">
      <img src="{{ asset('images/contenedor.png') }}" alt="Contenedor 3">
        <p>Contenedor 3</p>
      </div>
      <div class="contenedor" id="cont-4">
      <img src="{{ asset('images/contenedor.png') }}" alt="Contenedor 4">
        <p>Contenedor 4</p>
      </div>
      <div class="contenedor" id="cont-5">
      <img src="{{ asset('images/contenedor.png') }}" alt="Contenedor 5">
        <p>Contenedor 5</p>
      </div>
      <div class="contenedor" id="cont-6">
      <img src="{{ asset('images/contenedor.png') }}" alt="Contenedor 6">
        <p>Contenedor 6</p>
      </div>
    </div>
  </div>

  <!-- Modal para Información del Contenedor -->
  <div id="modal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2 id="modal-title">Información del Contenedor</h2>
      <ul id="modal-details">
        <li>Temperatura: 22°C</li>
        <li>Humedad: 75%</li>
        <li>pH: 6.8</li>
        <li>Última Alimentación: 2024-10-20</li>
        <li><strong>Observaciones:</strong> Contenedor en óptimas condiciones.</li>
      </ul>
      <button class="update-btn">Actualizar</button>
      <button class="delete-btn">Eliminar</button>
      <button class="change-status-btn">Cambiar Estado</button>
    </div>
  </div>

  <!-- Modal para Actualizar Cama -->
  <div id="update-bed-modal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2>Actualizar Cama</h2>
      <form id="update-bed-form">
        <label for="update_id_cama">ID de la Cama:</label>
        <input type="number" id="update_id_cama" name="update_id_cama" required>
        <label for="update_numero">Número de la Cama:</label>
        <input type="number" id="update_numero" name="update_numero" required>
        <label for="update_estado">Estado:</label>
        <input type="text" id="update_estado" name="update_estado" required>
        <label for="update_fecha_inicio">Fecha de Inicio:</label>
        <input type="date" id="update_fecha_inicio" name="update_fecha_inicio" required>
        <button type="submit">Actualizar Cama</button>
      </form>
    </div>
  </div>

  <!-- Footer -->
<footer class="footer">
    <div class="footer-container">
      <!-- Información de contacto -->
      <div class="footer-section">
        <h3>Contacto</h3>
        <p>Dirección: Calle 123, Agroindustrial "La Angostura"</p>
        <p>Teléfono: (123) 456-7890</p>
        <p>Email: info@lombricultivo-sena.com</p>
      </div>
  
      <!-- Enlaces rápidos -->
      <div class="footer-section">
        <h3>Enlaces Rápidos</h3>
        <ul>
          <li><a href="#home">Inicio</a></li>
          <li><a href="#about">Sobre Nosotros</a></li>
          <li><a href="#containers">Contenedores</a></li>
          <li><a href="#contact">Contáctanos</a></li>
        </ul>
      </div>
  
      <!-- Redes Sociales -->
      <div class="footer-section">
        <h3>Síguenos</h3>
        <div class="social-icons">
          <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
          <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
          <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>© 2024 Lombricultivo SENA Agroindustrial "La Angostura". Todos los derechos reservados.</p>
    </div>
  </footer>
  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
