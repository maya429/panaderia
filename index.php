<?php
session_start();
?>
<!-- index.php -->

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>La Esperanza - Panadería</title>
  <link rel="stylesheet" href="css/estilos.css" />
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
  <style>
    /* Estilos portada con video YouTube */
    .portada {
      position: relative;
      height: 600px;
      overflow: hidden;
      color: white;
      text-shadow: 2px 2px 6px rgba(0,0,0,0.7);
    }
    .video-background {
      position: absolute;
      top: 0; left: 0;
      width: 50vw;
      height: 90vh;
      overflow: hidden;
      z-index: -1;
    }
    .video-background iframe {
      width: 70vw;
      height: 100vh;
      pointer-events: none;
      object-fit: cover;
      filter: brightness(0.5);
    }
    .portada > div {
      position: relative;
      z-index: 1;
      max-width: 900px;
      padding: 0 15px;
    }
    /* Botón neutro */
    .btn-neutro {
      background-color: #dcdcdc;
      color: #444;
      border-radius: 50px;
      transition: background-color 0.3s ease;
      padding: 12px 30px;
      font-weight: 600;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }
    .btn-neutro:hover {
      background-color: #b0b0b0;
      color: #222;
    }
    /* Título cursiva */
    .cursiva {
      font-family: 'Great Vibes', cursive;
    }
    /* Responsive ajustes */
    @media (max-width: 768px) {
      .portada {
        height: 400px;
      }
      .portada h1 {
        font-size: 2.5rem;
      }
      .portada p {
        font-size: 1.2rem;
      }
    }
    @media (max-width: 480px) {
      .portada {
        height: 300px;
      }
      .portada h1 {
        font-size: 2rem;
      }
      .portada p {
        font-size: 1rem;
      }
      .btn-neutro {
        padding: 10px 20px;
        font-size: 0.9rem;
      }
    }
  </style>
</head>
<body>

<!-- HEADER -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-5">
  <a class="navbar-brand cursiva" href="index.php">La Esperanza</a>
  <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="menu">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item"><a class="nav-link" href="catalogo.php">Catálogo</a></li>
      <li class="nav-item"><a class="nav-link" href="sucursales.php">Sucursales</a></li>
      <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
      <li class="nav-item"><a class="nav-link" href="pedido.php">Pedido</a></li>
      <li class="nav-item">
        <a class="nav-link" href="carrito.php">
          Carrito (<?php echo isset($_SESSION['carrito']) ? array_sum(array_column($_SESSION['carrito'], 'cantidad')) : 0; ?>)
        </a>
      </li>
    </ul>
  </div>
</nav>


<!-- PORTADA con video YouTube de fondo -->
<header class="portada d-flex align-items-center justify-content-center text-center position-relative overflow-hidden">
  <div class="video-background">
    <iframe 
      src="https://www.youtube.com/embed/Aw73bVIv4cs?autoplay=1&mute=1&loop=1&playlist=Aw73bVIv4cs&controls=0&showinfo=0&modestbranding=1&rel=0" 
      title="Video de La Esperanza" 
      frameborder="0" 
      allow="autoplay; encrypted-media" 
      allowfullscreen
    ></iframe>
  </div>

  <div>
    <h1 class="cursiva display-1 fw-bold">Regálate un dulce momento</h1>
    <p class="lead fs-3">Ordena en línea y recoge en tu sucursal</p>
    <a href="catalogo.php" class="btn btn-neutro btn-lg mt-4 shadow">Ver Productos</a>
  </div>
</header>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

