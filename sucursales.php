<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Sucursales - La Esperanza</title>
  <link rel="stylesheet" href="css/estilos.css" />
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
  <style>
    body {
      background-color: #f9f1e7; /* color crema claro */
    }
    .sucursal-container {
      max-width: 900px;
      margin: 40px auto;
      color: #4b3a2f;
      font-size: 1.1rem;
    }
    .sucursal {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(75, 58, 47, 0.1);
      padding: 20px;
      margin-bottom: 30px;
    }
    .sucursal h3 {
      font-family: 'Great Vibes', cursive;
      font-size: 2.2rem;
      margin-bottom: 10px;
      color: #6b4f3b;
    }
    iframe {
      width: 100%;
      height: 300px;
      border-radius: 8px;
      border: none;
      margin-top: 15px;
      box-shadow: 0 0 10px rgba(75, 58, 47, 0.2);
    }
  </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-5">
  <a class="navbar-brand cursiva" href="index.php">La Esperanza</a>
  <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="menu">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item"><a class="nav-link" href="catalogo.php">Catálogo</a></li>
      <li class="nav-item"><a class="nav-link active" href="sucursales.php">Sucursales</a></li>
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

<div class="sucursal-container">
  <h2 class="text-center mb-5" style="font-family: 'Great Vibes', cursive; font-size:3rem; color:#6b4f3b;">Nuestras Sucursales</h2>
  
  <div class="sucursal">
    <h3>Sucursal Centro</h3>
    <p>📍 Av. Pan Dulce 100,  Ciudad de Mexico</p>
    <p>📞 (123) 456-7891</p>
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.198174133434!2d-99.174711!3d19.427049!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f93c00ef6c71%3A0x7e4f4b0b21a9c43a!2sCentro%20de%20Ciudad%20de%20M%C3%A9xico!5e0!3m2!1ses!2smx!4v1674789123123!5m2!1ses!2smx" 
      allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

  <div class="sucursal">
    <h3>Sucursal Norte</h3>
    <p>📍 Calle Pan Artesanal 250,  Ciudad de Mexico</p>
    <p>📞 (123) 456-7892</p>
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.950326679009!2d-99.180122!3d19.439258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f8db73f92e13%3A0x8629a1f08071253d!2sPanader%C3%ADa%20Norte!5e0!3m2!1ses!2smx!4v1674789341234!5m2!1ses!2smx" 
      allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

  <div class="sucursal">
    <h3>Sucursal Sur</h3>
    <p>📍 Avenida Dulce Sueño 345,  Ciudad de Mexico</p>
    <p>📞 (123) 456-7893</p>
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.300815445527!2d-99.160621!3d19.400155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fbb5a2fbbc25%3A0xd2a786238d7a9755!2sPanader%C3%ADa%20Sur!5e0!3m2!1ses!2smx!4v1674789465678!5m2!1ses!2smx" 
      allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

</div>

</body>
</html>
