document.addEventListener('DOMContentLoaded', function(){

       const clase = document.getElementById('cambio estilo');

       clase.addEventListener('click', function() {
               
       const titulo = document.querySelector('h2');

       const clases = document.querySelectorAll('h3');

       titulo.textContent = 'clase seleccionada';
       
       
       clases.forEach(function(clases) {
              clases.textContent = 'Materia asignada';
          });
       });



});
     