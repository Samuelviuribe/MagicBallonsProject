// tienda
const btnCard = document.querySelector('.container-cart-icon');
const containerCartProducts = document.querySelector('.container-cart-products');

btnCard.addEventListener('click', () => {
     containerCartProducts.classList.toggle('hidden-cart');
});

/* Seraparacion funcionalidad*/


const cartInfo = document.querySelector('.cart-product');
const rowProduct = document.querySelector('.row-product');

// Lista de contenedores

const producstList = document.querySelector('.cointainer-items');



//variables de arreglos productos

let allProducts = [];

const valorTotal = document.querySelector('.total-pagar');

const countProducts = document.querySelector('#contador-productos');

const cartEmpty = document.querySelector('.cart-empty');
const cartTotal = document.querySelector('.cart-total');


producstList.addEventListener('click', e => {

     if (e.target.classList.contains('btn-add-cart')) {
          const product = e.target.parentElement;

          const infoProduct = {
               quantity: 1,
               title: product.querySelector('h2').textContent,
               price: product.querySelector('p').textContent,
          };
          const exits = allProducts.some(product => product.title === infoProduct.title);
          console.log(exits)

          if (exits) {
               const products = allProducts.map(product => {
                    if (product.title === infoProduct.title) {
                         product.quantity++;
                         return product;
                    } else {
                         return product;
                    }
               })
               allProducts = [...products];
          } else {

               allProducts = [...allProducts, infoProduct];
          }


          showHtml();
     }



});

//eliminar

rowProduct.addEventListener('click', e => {
     if (e.target.classList.contains('icon-close')) {
          const product = e.target.parentElement;
          const title = product.querySelector('p').textContent;

          allProducts = allProducts.filter(product => product.title !== title);

     };

     console.log(allProducts);
     showHtml();

});

// Funcion para mostrar html 

const showHtml = () => {
     if (!allProducts.length) {
          cartEmpty.classList.remove('hidden');
          rowProduct.classList.add('hidden');
          cartTotal.classList.add('hidden');
     } else {
          cartEmpty.classList.add('hidden');
          rowProduct.classList.remove('hidden');
          cartTotal.classList.remove('hidden');
     }

     //limpiar html 
     rowProduct.innerHTML = '';

     //total

     let total = 0;
     let totalOfProducts = 0;


     allProducts.forEach(product => {
          const containerProduct = document.createElement('div');
          containerProduct.classList.add('cart-product');

          containerProduct.innerHTML = `
     <div class="info-cart-product">
          <span class="cantidad-producto-carrito">${product.quantity}</span>
          <p class="titulo-producto-carrito">${product.title}</p>
          <span class="precio-producto-carrito">${product.price}</span>
     </div>
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="icon-close">
     <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
          <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
     </svg>

     `;


          rowProduct.append(containerProduct);

          total =
               total + parseFloat(product.quantity * product.price.slice(1));

          totalOfProducts = totalOfProducts + product.quantity;
     });


     valorTotal.innerText = `$${total}`;
     countProducts.innerText = totalOfProducts;

};



// document.querySelectorAll('.btn-edit-cart').forEach(btn => {
//      btn.addEventListener('click', function (event) {
//          event.preventDefault(); // Evita el comportamiento predeterminado del enlace
 
//          // Obtiene los valores de los atributos data-*
//          const producto = this.getAttribute('data-producto');
//          const precio = this.getAttribute('data-precio');
//          const cantidadDulces = this.getAttribute('data-cantidad-dulces');
//          const imagen = this.getAttribute('data-imagen');
//          const dedicatoria = this.getAttribute('data-nombre-dedicatorio');
//          const objeto1 = this.getAttribute('data-objetos-1');
//          const objeto2 = this.getAttribute('data-objetos-2');
//          const objeto3 = this.getAttribute('data-objetos-3');
 
//          // Crea la URL con parámetros en una sola línea
//          const url = `AnidedPages/Customise.php?producto=${encodeURIComponent(producto)}&precio=${encodeURIComponent(precio)}&cantidadDulces=${encodeURIComponent(cantidadDulces)}&imagen=${encodeURIComponent(imagen)}&dedicatoria=${encodeURIComponent(dedicatoria)}&objeto1=${encodeURIComponent(objeto1)}&objeto2=${encodeURIComponent(objeto2)}&objeto3=${encodeURIComponent(objeto3)}`;
         
//          console.log(url);
//          // Abre la nueva pestaña con la URL construida
//          window.open(url, '_blank');
//      });
//  });
 

document.querySelectorAll('.btn-edit-cart').forEach(btn => {
     btn.addEventListener('click', function (event) {
         event.preventDefault();
 
         // Obtén los valores de los atributos data-*
         const producto = this.getAttribute('data-producto');
         const precio = this.getAttribute('data-precio');
         const cantidadDulces = this.getAttribute('data-cantidad-dulces');
         const imagen = this.getAttribute('data-imagen');
         const dedicatoria = this.getAttribute('data-nombre-dedicatorio');
         const objeto1 = this.getAttribute('data-objetos-1');
         const objeto2 = this.getAttribute('data-objetos-2');
         const objeto3 = this.getAttribute('data-objetos-3');
         const adicional1 = this.getAttribute('data-adicionales-1');
         const adicional2 = this.getAttribute('data-adicionales-2');
         const adicional3 = this.getAttribute('data-adicionales-3');
         const adicional4 = this.getAttribute('data-adicionales-4');
         const frutas1 = this.getAttribute('data-frutas-1');
         const frutas2 = this.getAttribute('data-frutas-2');
         const frutas3 = this.getAttribute('data-frutas-3');
         const frutas4 = this.getAttribute('data-frutas-4');
         const frutas5 = this.getAttribute('data-frutas-5');
          
         // Crea un formulario dinámico
         const form = document.createElement('form');
         form.method = 'POST';
         form.action = 'AnidedPages/Customise.php';
         form.target = '_blank'; // Para abrir en una nueva pestaña
 
         // Agrega los datos como campos ocultos
         const data = { producto, precio, cantidadDulces, imagen, dedicatoria, objeto1, objeto2, objeto3, adicional1, adicional2, adicional3, adicional4, frutas1, frutas2, frutas3, frutas4, frutas5 };
         for (const key in data) {
             const input = document.createElement('input');
             input.type = 'hidden';
             input.name = key;
             input.value = data[key];
             form.appendChild(input);
         }
 
         document.body.appendChild(form);
         form.submit();
         document.body.removeChild(form); // Limpia el formulario después de enviarlo
     });
 });
 