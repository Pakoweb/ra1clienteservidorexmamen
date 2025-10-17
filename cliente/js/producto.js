document.addEventListener('DOMContentLoaded', async () => {
  const params = new URLSearchParams(window.location.search);
  const id = params.get('id');
  const producto = await obtenerProducto(id);
  const contenedor = document.getElementById('producto');

  contenedor.innerHTML = `
    <div class="card mx-auto shadow" style="max-width: 500px;">
    
      <div class="card-body">
        <h3 class="card-title">${producto.nombre}</h3>
        <p class="card-text">${producto.descripcion}</p>
        <h4 class="text-success">${producto.precio.toFixed(2)} €</h4>

        <button id="agregar" class="btn btn-success mt-3">Añadir al carrito</button>
      </div>
    </div>
  `;

  document.getElementById('agregar').addEventListener('click', () => {
    let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
    carrito.push(producto);
    localStorage.setItem('carrito', JSON.stringify(carrito));
    alert('Producto añadido al carrito 🛒');
  });
});
