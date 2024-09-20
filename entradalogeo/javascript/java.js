document.addEventListener('DOMContentLoaded', function() {
       const clase1 = document.getElementById('clase1');
       const clase2 = document.getElementById('clase2');
       
       const titulo = document.querySelector('.contenedor_lista h2');
       
       function cambiarTitulo(nombreClase) {
           titulo.textContent = nombreClase;
       }
   
       clase1.addEventListener('click', function() {
           const nombreClase = clase1.getAttribute('data-nombre');
           cambiarTitulo(nombreClase);
       });
   
       clase2.addEventListener('click', function() {
           const nombreClase = clase2.getAttribute('data-nombre');
           cambiarTitulo(nombreClase);
       });
   });
   


     