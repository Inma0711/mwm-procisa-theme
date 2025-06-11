jQuery(document).ready(function($) {
    const phrases = document.querySelectorAll('.slider-phrases span');
    let index = 0;
  
    // Inicial
    phrases[index].classList.add('show');
  
    function showNext() {
      const current = phrases[index];
  
      // Oculta actual
      current.classList.remove('show');
  
      // Siguiente
      index = (index + 1) % phrases.length;
      const next = phrases[index];
  
      // Muestra siguiente tras animación
      setTimeout(() => {
        next.classList.add('show');
      }, 20); // permite que el remove anterior se procese
  
      // Repetir en 3 segundos
      setTimeout(showNext, 3000);
    }
  
    setTimeout(showNext, 3000);
  });
