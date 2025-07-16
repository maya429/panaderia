<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Contacto - La Esperanza</title>
  <link rel="stylesheet" href="css/estilos.css" />
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
  <style>
    body {
      background-color: #f9f1e7; /* color crema claro */
    }
    .contact-info {
      max-width: 500px;
      margin: 30px auto;
      font-size: 1.1rem;
      color: #4b3a2f; /* marrón suave */
    }
    .contact-info strong {
      font-weight: 700;
      font-size: 1.2rem;
      margin-bottom: 8px;
      display: block;
    }
    .contact-info p {
      margin: 5px 0;
      line-height: 1.3;
    }
    .contact-info p span {
      margin-right: 8px;
      font-size: 1.3rem;
    }
    iframe {
      display: block;
      margin: 20px auto 50px auto;
      border-radius: 8px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      max-width: 100%;
      height: 350px;
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
      <li class="nav-item"><a class="nav-link" href="sucursales.php">Sucursales</a></li>
      <li class="nav-item"><a class="nav-link active" href="contacto.php">Contacto</a></li>
      <li class="nav-item"><a class="nav-link" href="pedido.php">Pedido</a></li>
      <li class="nav-item">
        <a class="nav-link" href="carrito.php">
          Carrito (<?php echo isset($_SESSION['carrito']) ? array_sum(array_column($_SESSION['carrito'], 'cantidad')) : 0; ?>)
        </a>
      </li>
    </ul>
  </div>
</nav>

<div class="contact-info">
  <strong>Contacto</strong>
  <p><span>📍</span> Calle Corregidora #123, Ciudad de Mexico</p>
  <p><span>📞</span> (123) 456-7890</p>
  <p><span>📧</span> contacto@laEsperanza.com</p>
  <p>Síguenos: Instagram | Facebook</p>

  <strong>Encuéntranos</strong>
  <iframe 
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.198174133434!2d-99.174711!3d19.427049!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f93c00ef6c71%3A0x7e4f4b0b21a9c43a!2sCiudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses!2smx!4v1674789123123!5m2!1ses!2smx" 
    width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

</body>
</html>
