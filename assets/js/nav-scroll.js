document.addEventListener('DOMContentLoaded', function() {
    const nav = document.querySelector('.main-nav');
    const header = document.querySelector('header');
    let headerHeight = header ? header.offsetHeight : 0;
    let lastScrollTop = 0;

    function updateNavPosition() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        // Si el scroll es mayor que la altura del header
        if (scrollTop > headerHeight) {
            // Si estamos scrolleando hacia abajo
            if (scrollTop > lastScrollTop) {
                nav.style.position = 'fixed';
                nav.style.top = '0';
                nav.style.transition = 'transform 0.3s ease-in-out';
                nav.style.transform = 'translateY(0)';
            }
        } else {
            // Si estamos en la parte superior
            nav.style.position = 'relative';
            nav.style.top = 'auto';
            nav.style.transform = 'none';
        }
        
        lastScrollTop = scrollTop;
    }

    // Actualizar la altura del header en caso de que cambie (por ejemplo, en responsive)
    window.addEventListener('resize', function() {
        headerHeight = header ? header.offsetHeight : 0;
    });

    // Escuchar el evento de scroll
    window.addEventListener('scroll', updateNavPosition);
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
        const duration = 1500;

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