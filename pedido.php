<?php include('php/conexion.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Pedido - La Esperanza</title>
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-5">
  <a class="navbar-brand d-flex align-items-center" href="index.php">
    <img src="img/logo.png" alt="La Esperanza" width="60" height="60" class="me-2">
    <span class="titulo-esperanza">La Esperanza</span>
  </a>
  <div class="collapse navbar-collapse" id="menu">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item"><a class="nav-link" href="catalogo.php">Catálogo</a></li>
      <li class="nav-item"><a class="nav-link" href="sucursales.php">Sucursales</a></li>
      <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
      <li class="nav-item"><a class="nav-link" href="pedido.php">Pedido</a></li>
    </ul>
  </div>
</nav>

<!-- CONTENIDO -->
<div class="container mt-5">
<h2 class="text-center titulo-pedido">Tu pedido</h2>
<div id="carrito-container" class="row gy-4 mb-5"></div>

  <div id="total" class="text-end fw-bold fs-4 mt-3"></div>

  <form action="php/enviar_pedido.php" method="POST" id="formulario-pedido" class="mt-4">
    <h4>Datos del cliente</h4>
    <div class="mb-3">
      <label>Nombre completo</label>
      <input type="text" name="nombre" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Teléfono</label>
      <input type="text" name="telefono" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Mensaje o nota especial</label>
      <textarea name="mensaje" class="form-control"></textarea>
    </div>
    <input type="hidden" name="productos" id="productos-pedido">
    <button type="submit" class="btn btn-neutro">Enviar pedido</button>
  </form>
</div>

<script src="js/carrito.js"></script>
</body>
</html>
