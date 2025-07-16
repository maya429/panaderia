function agregarAlCarrito(id) {
  let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
  carrito.push(id);
  localStorage.setItem('carrito', JSON.stringify(carrito));
  alert("Producto agregado al carrito");
}

if (window.location.pathname.includes("pedido.php")) {
  let carrito = JSON.parse(localStorage.getItem('carrito')) || [];

  if (carrito.length === 0) {
    document.getElementById("carrito-container").innerHTML = "<p>No hay productos en el carrito.</p>";
  } else {
    fetch("php/cargar_productos.php", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ carrito: carrito })
    })
    .then(res => res.json())
    .then(data => {
      let html = '';
      let total = 0;
      data.forEach(p => {
        html += `
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/${p.imagen}" class="card-img-top" alt="${p.nombre}">
              <div class="card-body">
                <h5 class="card-title">${p.nombre}</h5>
                <p class="fw-bold">$${p.precio}</p>
              </div>
            </div>
          </div>
        `;
        total += parseFloat(p.precio);
      });

      document.getElementById("carrito-container").innerHTML = html;
      document.getElementById("total").innerText = `Total: $${total.toFixed(2)}`;
      document.getElementById("productos-pedido").value = JSON.stringify(data);
    });
  }
}
