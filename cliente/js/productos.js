document.addEventListener('DOMContentLoaded', async () => {
  const contenedor = document.getElementById('contenedor-productos');
  const productos = await obtenerProductos();




//En el archivo `productos.js`, modifica mediante **JavaScript** el estilo visual de las tarjetas (`card`) que muestran los productos. 




  const cards = contenedor.querySelectorAll('.card');

  cards.forEach(card => {
    card.style.border = '2px solid #007bff';
    card.style.borderRadius = '10px';
  });



  productos.forEach(p => {
    const card = document.createElement('div');
    card.className = "col-md-4";
    card.innerHTML = `
      <div class="card h-100 shadow-sm">
      <img src="${p.imagen}" alt="${p.nombre}" class="img-fluid"/>
      
      <div class="card-body text-center">
          <h5 class="card-title"> ${p.nombre}</h5>
          <p class="card-text">${p.descripcion}</p>
          <p class="fw-bold">${p.precio.toFixed(2)} €</p>
         
          <p class="categoria"> Categoría: ${p.categoria}</p>
          <a href="producto.html?id=${p.id}" class="btn btn-primary">Ver detalle</a>
        </div>
      </div>
    `;
    contenedor.appendChild(card);









  });
});






