
<?php include('php/conexion.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Catálogo - La Esperanza</title>
  <link rel="stylesheet" href="css/estilos.css">
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
  <audio autoplay loop muted>
  <source src="audio/musica-fondo.mp3" type="audio/mpeg">
</audio>


<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-5">
  <a class="navbar-brand cursiva" href="index.php">La Esperanza</a>
<button class="btn btn-outline-dark" onclick="agregarAlCarrito(<?php echo $row['id']; ?>)">Agregar al carrito</button>
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="menu">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item"><a class="nav-link" href="catalogo.php">Catálogo</a></li>
      <li class="nav-item"><a class="nav-link" href="sucursales.php">Sucursales</a></li>
      <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
      <li class="nav-item"><a class="nav-link" href="pedido.php">Pedido</a></li>
    </ul>
  </div>
</nav>

<!-- CATÁLOGO -->
<div class="container mt-5">
<h2 class="text-center titulo-productos">Nuestros productos</h2>
  <div class="row">
    <?php
    $sql = "SELECT * FROM productos";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
      echo '
        <div class="col-md-4 mb-4">
          <div class="card shadow">
            <img src="img/' . $row["imagen"] . '" class="card-img-top" alt="' . $row["nombre"] . '">
            <div class="card-body">
              <h5 class="card-title cursiva">' . $row["nombre"] . '</h5>
              <p class="card-text">' . $row["descripcion"] . '</p>
              <p class="text-success fw-bold">$' . $row["precio"] . '</p>
              <button class="btn btn-outline-dark" onclick="agregarAlCarrito(' . $row["id"] . ')">Agregar al carrito</button>
            </div>
          </div>
        </div>
      ';
    }

    $conn->close();
    ?>
  </div>
</div>

<script src="js/carrito.js"></script>
</body>
</html>