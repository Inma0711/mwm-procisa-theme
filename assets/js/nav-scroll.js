window.addEventListener('scroll', function() {
    var nav = document.querySelector('.main-nav'); // Cambia por tu clase o id real
    if(window.scrollY > 50){
        nav.classList.add('nav-sticky');
    } else {
        nav.classList.remove('nav-sticky');
    }
});

document.querySelectorAll('a[href^="#"]').forEach(link => {
    link.addEventListener('click', function(e) {
      const targetId = this.getAttribute('href');
      const target = document.querySelector(targetId);
      if (target) {
        e.preventDefault();

        // Obtener la posición del destino
        const targetPosition = target.getBoundingClientRect().top + window.scrollY;

        // Duración personalizada (en milisegundos)
        const duration = 2000;

        // Animación con scroll
        const start = window.scrollY;
        const startTime = performance.now();

        function scrollStep(timestamp) {
          const elapsed = timestamp - startTime;
          const progress = Math.min(elapsed / duration, 1); // 0 a 1
          const ease = easeInOutQuad(progress);

          window.scrollTo(0, start + (targetPosition - start) * ease);

          if (elapsed < duration) {
            requestAnimationFrame(scrollStep);
          }
        }

        // Easing function
        function easeInOutQuad(t) {
          return t < 0.5
            ? 2 * t * t
            : -1 + (4 - 2 * t) * t;
        }

        requestAnimationFrame(scrollStep);
      }
    });
  });


jQuery(document).ready(function($) {
    $("#owl-certificados").owlCarousel({
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        loop: true,
        margin: 10,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 3,
                nav: false
            },
            1000: {
                items: 5,
                nav: true,
                loop: false
            }
        }
    });
});